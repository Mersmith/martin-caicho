<?php

namespace Database\Seeders;

use App\Models\Imagen;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImagenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Define la ruta de origen donde tienes las imágenes
        $sourcePath = public_path('assets/imagen');
        
        // 2. Define el directorio de destino dentro del disco 'public' de Laravel (storage/app/public/imagen)
        $destinationDir = 'imagenes'; 

        // 3. Obtiene una lista de los nombres de archivo de las imágenes
        $imageFiles = [
            'default.jpg',
            'sliders-computadora-1.jpg',
            'sliders-computadora-2.jpg',
            'sliders-movil-1.jpg',
            'sliders-movil-2.jpg',
        ];

        foreach ($imageFiles as $fileName) {
            $sourceFile = $sourcePath . '/' . $fileName;

            // 4. Verifica que el archivo de origen exista
            if (File::exists($sourceFile)) {
                // Genera un nombre de archivo único para evitar colisiones
                $uniqueFileName = time() . '_' . Str::slug(pathinfo($fileName, PATHINFO_FILENAME)) . '.' . pathinfo($fileName, PATHINFO_EXTENSION);
                
                // 5. Mueve (o copia) el archivo al disco de almacenamiento 'public'
                // Esto lo pone en storage/app/public/imagen/
                $filePath = Storage::disk('public')->putFileAs(
                    $destinationDir, 
                    $sourceFile, 
                    $uniqueFileName
                );

                // 6. Crea el registro en la base de datos
                Imagen::create([
                    'path' => $filePath, // Ejemplo: 'imagen/1638202500_default.jpg'
                    'url' => Storage::disk('public')->url($filePath), // Genera la URL pública (e.g., /storage/imagen/...)
                    'titulo' => Str::title(str_replace('-', ' ', pathinfo($fileName, PATHINFO_FILENAME))),
                    'descripcion' => 'Imagen inicial cargada por seeder.',
                    'extension' => pathinfo($fileName, PATHINFO_EXTENSION),
                ]);

                $this->command->info("Imagen seed: $fileName registrada.");
            } else {
                $this->command->error("Archivo no encontrado para seed: $fileName en $sourcePath");
            }
        }
    }
}
