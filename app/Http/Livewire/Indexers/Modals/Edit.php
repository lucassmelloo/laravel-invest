<?php

namespace App\Http\Livewire\Indexers\Modals;

use App\Models\Indexer;
use Illuminate\View\View;
use Livewire\Component;

class Edit extends Component
{
    public bool $modal = false;
    public ?Indexer $indexer = null;

    public function render() : View
    {
        return view('livewire.indexers.modals.edit', ['indexer' => $this->indexer] );
    }

    public function openModal() : void
    {
        $this->indexer = Indexer::find(1);
        $this->modal = true;

    }
}
