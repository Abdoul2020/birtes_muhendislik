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
            // Use the UTF-8 encoded version of the CSV file
            $filePath = storage_path('app/public/assets/site/img/perakende_utf8.csv');

            if (!file_exists($filePath)) {
                Log::warning('CSV file not found: ' . $filePath);
                return [];
            }

            $data = [];
            $originalHeaders = [];
            $headerMapping = []; // Maps sanitized keys to original headers

            // Read CSV file - it's already in UTF-8 encoding
            $fileContent = file_get_contents($filePath);

            // Detect delimiter (comma or semicolon)
            $firstLine = strtok($fileContent, "\n");
            $delimiter = (substr_count($firstLine, ';') > substr_count($firstLine, ',')) ? ';' : ',';

            if (($handle = fopen($filePath, 'r')) !== FALSE) {
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

                        // Create mapping between sanitized keys and original headers
                        foreach ($originalHeaders as $originalHeader) {
                            $sanitizedKey = $this->sanitizeHeader($originalHeader);
                            $headerMapping[$sanitizedKey] = $originalHeader;
                        }

                        Log::info('CSV headers loaded: ' . implode(', ', $originalHeaders));
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
                            }
                        }
                    }
                    $rowIndex++;
                }

                fclose($handle);
            }

            // Return data with header mapping
            $result = [
                'data' => $data,
                'headerMapping' => $headerMapping
            ];

            Log::info('CSV data loaded successfully. Total rows: ' . count($data));

            return $result;
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

        // Convert to lowercase and replace spaces with underscores, but preserve Turkish characters
        $header = mb_strtolower($header, 'UTF-8');
        
        // Keep Turkish characters: a-z, 0-9, spaces, and all Turkish characters
        // Using a more comprehensive approach for Turkish characters
        $header = preg_replace('/[^\p{L}\p{N}\s]+/u', '', $header); // Keep letters, numbers, spaces
        $header = preg_replace('/\s+/', '_', $header); // Replace spaces with underscores
        $header = trim($header, '_');

        // Ensure header is not empty after cleaning
        if (empty($header)) {
            return 'column_' . uniqid();
        }

        return $header;
    }
}
