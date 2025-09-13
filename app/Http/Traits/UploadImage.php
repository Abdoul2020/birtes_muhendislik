<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

trait UploadImage
{
    /**
     * @param $name
     * @param $dir
     * @param $file
     * @param null $key
     * @param null $rm
     * @param null $resize
     * @param string $format
     * @return string|null
     */
    public function createImage(array $params): ?string
    {
        $name = $params['name'];
        $dir = rtrim($params['dir'], '/'); // Klasör yolunu düzelt
        $publicDir = public_path('storage/' . $dir); // Fiziksel olarak kaydedileceği dizin



        $file = $params['file'];
        $resize = $params['resize'] ?? null;
        $rm = $params['rm'] ?? null;
        $format = $params['format'] ?? 'webp';

        try {
            // Create directory if not exists
            if (!File::exists($publicDir)) {
                File::makeDirectory($publicDir, 0777, true, true);
            }

            $imagePath = $dir . '/' . $name . ".$format"; // Veritabanına kaydedilecek yol
            $fullImagePath = $publicDir . '/' . $name . ".$format"; // Fiziksel dosya yolu

            // Check if the file exists and delete
            if (File::exists($fullImagePath)) {
                unlink($fullImagePath);
            }

            // If file is provided
            if ($file !== null) {
                if (str_starts_with($file, 'data:image')) {
                    $img = Image::make($file)->encode($format, 50);
                } else {
                    $img = Image::make($file->getRealPath())->encode($format, 50);
                }

                if ($resize['w'] !== null || $resize['h'] !== null) {
                    $img->resize($resize['w'], $resize['h'], fn($constraint) => $constraint->aspectRatio());
                }

                if (!$img->save($fullImagePath)) {
                    throw new \Exception('Error saving image');
                }
            } elseif ($rm === '1' && $file === null) {
                $imagePath = 'uploads/placeholder.jpg'; // Placeholder kullanımı
            } else {
                $imagePath = File::exists($fullImagePath) ? $imagePath : null;
            }

            return $imagePath; // Veritabanına kaydedilecek yolu döndür

        } catch (\Exception $e) {
            return null; // Hata durumunda null döner
        }
    }


    /**
     * Function for upload avatar image
     *
     * @param string $folder
     * @param string $key
     * @param string $validation
     *
     * @return false|string|null
     */
    public function uploadTracks(string $folder = 'uploads/soundscapes', string $key = 'files', string $validation = 'required|mimes:mp3,m4a,mp4,m4r|max:2048|sometimes'): bool|string|null
    {
        request()->validate([$key => $validation]);
        if (request()->hasFile($key)) $file = Storage::disk('public')->putFile($folder, request()->file($key), 'public');
        return $file ?? null;
    }
}
