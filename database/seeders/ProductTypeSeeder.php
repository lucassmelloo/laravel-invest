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
                'abreviation'=>'CDB',
                'description' =>'Certificado de depósito bancário'
            ],
            [
                'abreviation'=>'LCI',
                'description' =>'Letra de Crédito Imobiliário'
            ],
            [
                'abreviation'=>'LCA',
                'description' =>'Letra do Crédito do Agronegócio'
            ],
            [
                'abreviation'=>'CRI',
                'description' =>'Certificados de Recebíveis Imobiliários'
            ],
            [
                'abreviation'=>'CRA',
                'description' =>'Certificados de Recebíveis Agronegócio'
            ],
            [
                'abreviation'=>'Debêntures',
                'description' =>'Títulos de Empresas Privadas'
            ],
            [
                'abreviation'=>'Título Público',
                'description' =>'Títulos de Empresas Governamentais'
            ],
        ];

        foreach ($productTypes as $productType)
            ProductType::create($productType);

    }
}
