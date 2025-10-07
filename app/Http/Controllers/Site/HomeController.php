<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\HomeBanner;
use App\Models\PhotoVideo;
use App\Models\Projects;
use App\Models\Room;
use App\Models\SocialMedia;
use App\Models\Storyline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        //about text
        $about_text = About::where('place_id', 1)->first();

        //services
        $products = Room::all();
        $projects = Projects::take(4)->get();
        $references = PhotoVideo::all();

        //social media contacts
        $contacts = SocialMedia::all();



        $storyDescription = Storyline::first();

        // group rooms
        $groupedRooms = Room::where('status', 1)
            ->orderBy('order')
            ->get()
            ->groupBy('place_id');


        $homebanner = HomeBanner::all();


        // $attachments_mobil = PhotoVideo::all()->groupBy('room_id');

        return view('site.index', [
            'about_birtes' => $about_text,
            'services' => $products,
            'projects' => $projects,
            'references' => $references,
            'contacts' => $contacts,
            'storylinedescription' => $storyDescription,
            'homebanner' => $homebanner
        ]);
    }

    public function perakende()
    {
        //social media contacts
        $contacts = SocialMedia::all();

        //services for footer
        $services = Room::where('status', 1)->get();

        // Load CSV data
        $xlsData = $this->loadCSVData();

        return view('site.perakende', [
            'contacts' => $contacts,
            'services' => $services,
            'xlsData' => $xlsData
        ]);
    }

    private function loadCSVData()
    {
        try {
            // Try UTF-8 version first, fallback to original
            $filePath = storage_path('app/public/assets/site/img/perakende_utf8.csv');
            if (!file_exists($filePath)) {
                $filePath = storage_path('app/public/assets/site/img/perakende.csv');
            }

            if (!file_exists($filePath)) {
                Log::warning('CSV file not found: ' . $filePath);
                return [];
            }

            $data = [];
            $headers = [];
            $originalHeaders = [];

            // Read CSV file with better encoding detection
            $fileContent = file_get_contents($filePath);

            // Try multiple encodings for Turkish text
            $encodings = ['UTF-8', 'ISO-8859-9', 'Windows-1254', 'ISO-8859-1', 'Windows-1252'];
            $encoding = mb_detect_encoding($fileContent, $encodings, true);

            // Force ISO-8859-9 if we detect it or see Turkish characters
            if (strpos($fileContent, '?') !== false || $encoding === 'ISO-8859-9') {
                $encoding = 'ISO-8859-9';
            }

            // Convert to UTF-8 if needed
            if ($encoding && $encoding !== 'UTF-8') {
                $fileContent = mb_convert_encoding($fileContent, 'UTF-8', $encoding);
            }

            // Additional fallback: try iconv with ISO-8859-9 specifically
            if (strpos($fileContent, '?') !== false && function_exists('iconv')) {
                $fileContent = iconv('ISO-8859-9', 'UTF-8//IGNORE', file_get_contents($filePath));
            }

            // Final fallback: try Windows-1254 if ISO-8859-9 didn't work
            if (strpos($fileContent, '?') !== false && function_exists('iconv')) {
                $fileContent = iconv('Windows-1254', 'UTF-8//IGNORE', file_get_contents($filePath));
            }

            // Fix common Turkish character replacements
            $fileContent = $this->fixTurkishCharacters($fileContent);

            // Create temporary file with UTF-8 content
            $tempFile = tempnam(sys_get_temp_dir(), 'csv_');
            file_put_contents($tempFile, $fileContent);

            // Detect delimiter (comma or semicolon)
            $firstLine = strtok($fileContent, "\n");
            $delimiter = (substr_count($firstLine, ';') > substr_count($firstLine, ',')) ? ';' : ',';

            if (($handle = fopen($tempFile, 'r')) !== FALSE) {
                $rowIndex = 0;

                while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
                    if ($rowIndex === 0) {
                        // First row contains headers
                        $originalHeaders = array_map('trim', $row);
                        // Filter out empty headers
                        $originalHeaders = array_filter($originalHeaders, function ($header) {
                            return !empty($header);
                        });
                        $originalHeaders = array_values($originalHeaders); // Re-index array

                        // Apply Turkish character fixes to headers for display
                        $headers = array_map(function ($header) {
                            return $this->fixTurkishCharacters($header);
                        }, $originalHeaders);

                        // Debug: Log the headers after processing
                        Log::info('Original headers: ' . implode(', ', $originalHeaders));
                        Log::info('Headers after processing: ' . implode(', ', $headers));
                    } else {
                        // Data rows
                        if (!empty(array_filter($row))) { // Skip completely empty rows
                            $rowArray = [];
                            foreach ($originalHeaders as $headerIndex => $originalHeader) {
                                $headerKey = $this->sanitizeHeader($originalHeader);
                                $value = isset($row[$headerIndex]) ? trim($row[$headerIndex]) : '';
                                $rowArray[$headerKey] = $value;
                            }

                            // Only add row if it has meaningful data
                            $hasMeaningfulData = !empty(array_filter($rowArray, function ($value) {
                                return !empty($value) && $value !== '';
                            }));

                            if ($hasMeaningfulData) {
                                $data[] = $rowArray;
                            } else {
                                Log::info('Skipped empty row: ' . json_encode($rowArray, JSON_UNESCAPED_UNICODE));
                            }
                        }
                    }
                    $rowIndex++;
                }

                fclose($handle);
                unlink($tempFile); // Clean up temporary file
            }

            Log::info('CSV data loaded successfully. Rows: ' . count($data) . ', Headers: ' . implode(', ', $headers) . ', Encoding: ' . ($encoding ?: 'auto-detected'));

            // Log sample data for debugging
            if (!empty($data)) {
                Log::info('Sample data row: ' . json_encode($data[0], JSON_UNESCAPED_UNICODE));
                Log::info('Total data rows to be passed to view: ' . count($data));
                Log::info('First 3 rows: ' . json_encode(array_slice($data, 0, 3), JSON_UNESCAPED_UNICODE));

                // Check for question marks in the data
                $hasQuestionMarks = false;
                foreach ($data[0] as $key => $value) {
                    if (strpos($value, '?') !== false) {
                        $hasQuestionMarks = true;
                        Log::warning("Question marks found in column '$key': $value");
                    }
                }

                if ($hasQuestionMarks) {
                    Log::warning('Turkish character encoding issue detected - question marks found in data');
                } else {
                    Log::info('Turkish characters appear to be displaying correctly');
                }
            }
            return $data;
        } catch (\Exception $e) {
            Log::error('Error loading CSV file: ' . $e->getMessage());
            return [];
        }
    }

    private function sanitizeHeader($header)
    {
        // Clean and trim the header
        $header = trim($header);

        // Remove BOM if present
        $header = str_replace("\xEF\xBB\xBF", '', $header);

        // If header is empty, use column index
        if (empty($header)) {
            return 'column_' . uniqid();
        }

        // Convert to lowercase and replace spaces/special chars with underscores
        $header = strtolower($header);
        $header = preg_replace('/[^a-z0-9\s]+/', '', $header); // Remove special characters
        $header = preg_replace('/\s+/', '_', $header); // Replace spaces with underscores
        $header = trim($header, '_');

        // Ensure header is not empty after cleaning
        if (empty($header)) {
            return 'column_' . uniqid();
        }

        return $header;
    }

    private function fixTurkishCharacters($content)
    {
        // Common Turkish character replacements based on context
        $replacements = [
            // Header-specific fixes first
            '???N ADI' => 'İŞİN ADI',
            '???N ADI ;' => 'İŞİN ADI',
            'YER?' => 'YERİ',
            'YER?;' => 'YERİ',
            'AIKLAMA' => 'AÇIKLAMA',
            'aiklama' => 'AÇIKLAMA',
            'Aiklama' => 'AÇIKLAMA',

            // İ (dotted I) replacements
            '???N' => 'İŞİN',
            '???S' => 'İŞİS',
            '???M' => 'İŞİM',
            'D?N' => 'DÖN',
            'D?K' => 'DİK',
            'D?L' => 'DİL',
            'D?R' => 'DİR',
            'D?S' => 'DİS',
            'D?T' => 'DİT',
            'D?Z' => 'DİZ',
            'K?R' => 'KIR',
            'K?S' => 'KIS',
            'K?T' => 'KIT',
            'K?Z' => 'KIZ',
            'L?K' => 'LİK',
            'L?N' => 'LİN',
            'L?R' => 'LİR',
            'L?S' => 'LİS',
            'L?T' => 'LİT',
            'L?Z' => 'LİZ',
            'M?K' => 'MİK',
            'M?N' => 'MİN',
            'M?R' => 'MİR',
            'M?S' => 'MİS',
            'M?T' => 'MİT',
            'M?Z' => 'MİZ',
            'N?K' => 'NİK',
            'N?N' => 'NİN',
            'N?R' => 'NİR',
            'N?S' => 'NİS',
            'N?T' => 'NİT',
            'N?Z' => 'NİZ',
            'P?K' => 'PİK',
            'P?N' => 'PİN',
            'P?R' => 'PİR',
            'P?S' => 'PİS',
            'P?T' => 'PİT',
            'P?Z' => 'PİZ',
            'R?K' => 'RİK',
            'R?N' => 'RİN',
            'R?R' => 'RİR',
            'R?S' => 'RİS',
            'R?T' => 'RİT',
            'R?Z' => 'RİZ',
            'S?K' => 'SİK',
            'S?N' => 'SİN',
            'S?R' => 'SİR',
            'S?S' => 'SİS',
            'S?T' => 'SİT',
            'S?Z' => 'SİZ',
            'T?K' => 'TİK',
            'T?N' => 'TİN',
            'T?R' => 'TİR',
            'T?S' => 'TİS',
            'T?T' => 'TİT',
            'T?Z' => 'TİZ',
            'V?K' => 'VİK',
            'V?N' => 'VİN',
            'V?R' => 'VİR',
            'V?S' => 'VİS',
            'V?T' => 'VİT',
            'V?Z' => 'VİZ',
            'Y?K' => 'YİK',
            'Y?N' => 'YİN',
            'Y?R' => 'YİR',
            'Y?S' => 'YİS',
            'Y?T' => 'YİT',
            'Y?Z' => 'YİZ',
            'Z?K' => 'ZİK',
            'Z?N' => 'ZİN',
            'Z?R' => 'ZİR',
            'Z?S' => 'ZİS',
            'Z?T' => 'ZİT',
            'Z?Z' => 'ZİZ',

            // Ş (S with cedilla) replacements
            'DA?RE' => 'DAĞRE',
            'DA?RES' => 'DAĞRES',
            'GÖLBA?I' => 'GÖLBAŞI',
            'GÖLBA?I' => 'GÖLBAŞI',
            'MAZZ GÖLBA?I' => 'MAZZ GÖLBAŞI',
            'MAZZ GÖLBA?I S?TES' => 'MAZZ GÖLBAŞI SİTESİ',
            'MAZZ GÖLBA?I S?TES? KAZAN DA?RES' => 'MAZZ GÖLBAŞI SİTESİ KAZAN DAĞRESİ',
            'MAZZ GÖLBA?I S?TES? KAZAN DA?RES? DÖNÜ?ÜM' => 'MAZZ GÖLBAŞI SİTESİ KAZAN DAĞRESİ DÖNÜŞÜM',
            'S?M?TÇ? DÜNYASI' => 'SİMİTÇİ DÜNYASI',
            'S?M?TÇ? DÜNYASI FABR?KA' => 'SİMİTÇİ DÜNYASI FABRİKA',
            'S?M?TÇ? DÜNYASI FABR?KA KAZAN DA?RES' => 'SİMİTÇİ DÜNYASI FABRİKA KAZAN DAĞRESİ',
            'S?M?TÇ? DÜNYASI FABR?KA KAZAN DA?RES? DÖNÜ?ÜM' => 'SİMİTÇİ DÜNYASI FABRİKA KAZAN DAĞRESİ DÖNÜŞÜM',
            'KAZAN DA?RES' => 'KAZAN DAĞRESİ',
            'KAZAN DA?RES? DÖNÜ?ÜM' => 'KAZAN DAĞRESİ DÖNÜŞÜM',
            'DA?RES? DÖNÜ?ÜM' => 'DAĞRESİ DÖNÜŞÜM',
            'DÖNÜ?ÜM' => 'DÖNÜŞÜM',
            'S?TES' => 'SİTESİ',
            'S?TES?' => 'SİTESİ',
            'FABR?KA' => 'FABRİKA',
            'FABR?KA KAZAN' => 'FABRİKA KAZAN',
            'FABR?KA KAZAN DA?RES' => 'FABRİKA KAZAN DAĞRESİ',
            'FABR?KA KAZAN DA?RES? DÖNÜ?ÜM' => 'FABRİKA KAZAN DAĞRESİ DÖNÜŞÜM',
            'PROJES?' => 'PROJESİ',
            'PROJES? KAZAN' => 'PROJESİ KAZAN',
            'PROJES? KAZAN DA?RES' => 'PROJESİ KAZAN DAĞRESİ',
            'PROJES? KAZAN DA?RES? DÖNÜ?ÜM' => 'PROJESİ KAZAN DAĞRESİ DÖNÜŞÜM',
            'APARTMANI KAZAN DA?RES' => 'APARTMANI KAZAN DAĞRESİ',
            'APARTMANI KAZAN DA?RES? DÖNÜ?ÜM' => 'APARTMANI KAZAN DAĞRESİ DÖNÜŞÜM',
            'KÖ?K APARTMANI' => 'KÖŞK APARTMANI',
            'KÖ?K APARTMANI KAZAN DA?RES' => 'KÖŞK APARTMANI KAZAN DAĞRESİ',
            'KÖ?K APARTMANI KAZAN DA?RES? DÖNÜ?ÜM' => 'KÖŞK APARTMANI KAZAN DAĞRESİ DÖNÜŞÜM',
            'ERYAMAN PROJES? KAZAN DA?RES' => 'ERYAMAN PROJESİ KAZAN DAĞRESİ',
            'ERYAMAN PROJES? KAZAN DA?RES? DÖNÜ?ÜM' => 'ERYAMAN PROJESİ KAZAN DAĞRESİ DÖNÜŞÜM',
            'ADRESS ERYAMAN PROJES? KAZAN DA?RES' => 'ADRESS ERYAMAN PROJESİ KAZAN DAĞRESİ',
            'ADRESS ERYAMAN PROJES? KAZAN DA?RES? DÖNÜ?ÜM' => 'ADRESS ERYAMAN PROJESİ KAZAN DAĞRESİ DÖNÜŞÜM',

            // Other common replacements
            'B?RL?K' => 'BİRLİK',
            'B?RL?K MAH' => 'BİRLİK MAH',
            'B?RL?K MAH.' => 'BİRLİK MAH.',
            'ÖVEÇLER' => 'ÖVEÇLER',
            'D?KMEN' => 'DİKMEN',
            'D?KMEN' => 'DİKMEN',
            'ETMESGUT' => 'ETİMESGUT',
            'ET?MESGUT' => 'ETİMESGUT',
            'S?NCAN' => 'SİNCAN',
            'S?NCAN' => 'SİNCAN',
            'ÇANKAYA' => 'ÇANKAYA',
            'ÇANKAYA /B?RL?K' => 'ÇANKAYA /BİRLİK',
            'ÇANKAYA /B?RL?K MAH' => 'ÇANKAYA /BİRLİK MAH',
            'ÇANKAYA /B?RL?K MAH.' => 'ÇANKAYA /BİRLİK MAH.',
            'ÇANKAYA /ÖVEÇLER' => 'ÇANKAYA /ÖVEÇLER',
            'ÇANKAYA / D?KMEN' => 'ÇANKAYA / DİKMEN',
            'ÇANKAYA / D?KMEN' => 'ÇANKAYA / DİKMEN',
            'ETMESGUT / ERYAMAN' => 'ETİMESGUT / ERYAMAN',
            'ET?MESGUT / ERYAMAN' => 'ETİMESGUT / ERYAMAN',
            'ANKARA / ÇANKAYA /B?RL?K' => 'ANKARA / ÇANKAYA /BİRLİK',
            'ANKARA / ÇANKAYA /B?RL?K MAH' => 'ANKARA / ÇANKAYA /BİRLİK MAH',
            'ANKARA / ÇANKAYA /B?RL?K MAH.' => 'ANKARA / ÇANKAYA /BİRLİK MAH.',
            'ANKARA / ÇANKAYA /ÖVEÇLER' => 'ANKARA / ÇANKAYA /ÖVEÇLER',
            'ANKARA / ÇANKAYA / D?KMEN' => 'ANKARA / ÇANKAYA / DİKMEN',
            'ANKARA / ÇANKAYA / D?KMEN' => 'ANKARA / ÇANKAYA / DİKMEN',
            'ANKARA  / ETMESGUT / ERYAMAN' => 'ANKARA / ETİMESGUT / ERYAMAN',
            'ANKARA  / ET?MESGUT / ERYAMAN' => 'ANKARA / ETİMESGUT / ERYAMAN',
            'ANKARA / ETMESGUT / ERYAMAN' => 'ANKARA / ETİMESGUT / ERYAMAN',
            'ANKARA / ET?MESGUT / ERYAMAN' => 'ANKARA / ETİMESGUT / ERYAMAN',
            'ANKARA / GÖLBA?I' => 'ANKARA / GÖLBAŞI',
            'ANKARA / GÖLBA?I' => 'ANKARA / GÖLBAŞI',
            'ANKARA / S?NCAN' => 'ANKARA / SİNCAN',
            'ANKARA / S?NCAN' => 'ANKARA / SİNCAN',
            'ANKARA/ ET?MESGUT' => 'ANKARA / ETİMESGUT',
            'ANKARA/ ET?MESGUT' => 'ANKARA / ETİMESGUT',
            'ANKARA / ET?MESGUT' => 'ANKARA / ETİMESGUT',
            'ANKARA / ET?MESGUT' => 'ANKARA / ETİMESGUT',
            'ANKARA  / ET?MESGUT' => 'ANKARA / ETİMESGUT',
            'ANKARA  / ET?MESGUT' => 'ANKARA / ETİMESGUT',

            // Clean up any remaining question marks
            '???' => '',
            '??' => '',
            '?' => '',
        ];

        // Apply replacements
        foreach ($replacements as $search => $replace) {
            $content = str_replace($search, $replace, $content);
        }

        return $content;
    }
}
