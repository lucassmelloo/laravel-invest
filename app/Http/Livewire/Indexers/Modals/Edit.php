<?php

namespace App\Http\Livewire\Indexers\Modals;

use App\Models\Indexer;
use Illuminate\View\View;
use Livewire\Component;

class Edit extends Component
{
    public bool $model = false;
    public Indexer $indexer;

    protected $rules = [

    ];

    public function render() : View
    {
        $this->indexer = Indexer::find(1);
        return view('livewire.indexers.modals.edit', ['indexer' => $this->indexer] );
    }
}
