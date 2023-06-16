<?php

namespace Database\Seeders;

use App\Models\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productTypes = [
            [
                'abbreviation'=>'CDB',
                'description' =>'Certificado de depósito bancário'
            ],
            [
                'abbreviation'=>'LCI',
                'description' =>'Letra de Crédito Imobiliário'
            ],
            [
                'abbreviation'=>'LCA',
                'description' =>'Letra do Crédito do Agronegócio'
            ],
            [
                'abbreviation'=>'CRI',
                'description' =>'Certificados de Recebíveis Imobiliários'
            ],
            [
                'abbreviation'=>'CRA',
                'description' =>'Certificados de Recebíveis Agronegócio'
            ],
            [
                'abbreviation'=>'Debêntures',
                'description' =>'Títulos de Empresas Privadas'
            ],
            [
                'abbreviation'=>'Título Público',
                'description' =>'Títulos de Empresas Governamentais'
            ],
        ];

        foreach ($productTypes as $productType)
            ProductType::create($productType);

    }
}
