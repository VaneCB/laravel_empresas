<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use App\Models\Empresa;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $empresas = Empresa::all('id');
        $empresas = $empresas->toArray();
        $empresa_id = Arr::random($empresas)['id'];

        return [
            'name'=>fake()->name(),
            'phone'=>fake()->phoneNumber(),
            'email'=>fake()->email(),
            'empresa_id'=>$empresa_id

        ];
    }
}
