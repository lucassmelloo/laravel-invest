<?php

namespace Database\Seeders;

use App\Models\Indexer;
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
                    'abbreviation'=>'CDI',
                    'description'=>'Certificado de Depósito Interbancário'
                ],
                [
                    'abbreviation'=>'IPCA',
                    'description'=>'Índice Nacional de Preços ao Consumidor Amplo'
                ],
                [
                    'abbreviation'=>'Préfixado',
                    'description'=>'Produto com juros fixados'
                ]
            ];

        foreach ($indexers as $indexer)
            Indexer::create($indexer);
    }
}
