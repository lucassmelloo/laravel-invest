<?php

namespace Database\Seeders;

use App\Models\Indexers;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IndexerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $indexers = [
                [
                    'abreviation'=>'CDI',
                    'description'=>'Certificado de Depósito Interbancário'
                ],
                [
                    'abreviation'=>'IPCA',
                    'description'=>'Índice Nacional de Preços ao Consumidor Amplo'
                ],
                [
                    'abreviation'=>'Préfixado',
                    'description'=>'Produto com juros fixados'
                ]
            ];
            
        foreach ($indexers as $indexer)
            Indexers::create($indexer);
    }
}
