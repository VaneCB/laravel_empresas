<?php

namespace Database\Seeders;

use Carbon\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Idioma;
use App\Models\Alumno;
use Illuminate\Support\Arr;
class AlumnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Alumno::factory()->count(50)->create()
            ->each(function ($alumno) {
                $languages=['Ingles','Frances','Aleman','Ruso','Japones','Rumano','Portugues','Italiano','Chino'];
                $numLanguages = rand(0,3);
                if ($numLanguages!=0){
                $languagesSpeak = Arr::random($languages,$numLanguages);
                foreach ($languagesSpeak as $languageColumn) {
                    $idioma = new Idioma();
                    $idioma->alumno_id = $alumno->id;
                    $idioma->language = $languageColumn;
                    $idioma->save();
                }
            }
            });
    }
}

