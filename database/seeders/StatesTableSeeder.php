<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            [
                'name' => 'Acre', 'abbreviation' => 'AC', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Alagoas', 'abbreviation' => 'AL', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Amapá', 'abbreviation' => 'AP', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Amazonas', 'abbreviation' => 'AM', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Bahia', 'abbreviation' => 'BA', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Ceará', 'abbreviation' => 'CE', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Distrito Federal', 'abbreviation' => 'DF', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Espírito Santo', 'abbreviation' => 'ES', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Goiás', 'abbreviation' => 'GO', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Maranhão', 'abbreviation' => 'MA', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Mato Grosso', 'abbreviation' => 'MT', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Mato Grosso do Sul', 'abbreviation' => 'MS', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Minas Gerais', 'abbreviation' => 'MG', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Pará', 'abbreviation' => 'PA', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Paraíba', 'abbreviation' => 'PB', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Paraná', 'abbreviation' => 'PR', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Pernambuco', 'abbreviation' => 'PE', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Piauí', 'abbreviation' => 'PI', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Rio de Janeiro', 'abbreviation' => 'RJ', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Rio Grande do Norte', 'abbreviation' => 'RN', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Rio Grande do Sul', 'abbreviation' => 'RS', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Rondônia', 'abbreviation' => 'RO', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Roraima', 'abbreviation' => 'RR', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Santa Catarina', 'abbreviation' => 'SC', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'São Paulo', 'abbreviation' => 'SP', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Sergipe', 'abbreviation' => 'SE', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
            [
                'name' => 'Tocantins', 'abbreviation' => 'TO', 'created_at' => new DateTime,
                'updated_at' => new DateTime
            ],
        ]);
    }
}
