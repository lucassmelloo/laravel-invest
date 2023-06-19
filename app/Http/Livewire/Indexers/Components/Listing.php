<?php

namespace App\Http\Livewire\Indexers\Components;

use App\Models\Indexer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\View\View;
use Livewire\Component;
use Livewire\WithPagination;

class Listing extends Component
{

    use WithPagination;

    public ?string $search = null;

    protected $queryString = ['search'];

    public function render() : View
    {
        return view('livewire.indexers.components.listing', [
            'indexers' => Indexer::query()
                ->when(
                    $this->search, fn(Builder $builder) =>
                        $builder
                            ->where('description', 'like', '%'.$this->search.'%')
                            ->orWhere('abbreviation', 'like', '%'.$this->search.'%'))
                ->get()
        ]);
    }

    public function updatedSearch() : void
    {
        $this->page = 1;
    }

}
