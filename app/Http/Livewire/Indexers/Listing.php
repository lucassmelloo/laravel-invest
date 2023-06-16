<?php

namespace App\Http\Livewire\Indexers;

use App\Models\Indexer;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{

    use WithPagination;

    public ?string $search = null;

    public function render()
    {
        return view('livewire.indexers.listing', [
            'indexers' => Indexer::query()
                ->when($this->search, fn(Builder $query) => $query->where('description', 'like', '%'.$this->search.'%')
                    ->orWhere('abbreviation', 'like', '%'.$this->search.'%'))
                ->paginate(5)
        ]);
    }

    public function updatedSearch() : void
    {
        $this->page=1;
    }

}
