<?php

namespace App\Http\Livewire\ProductTypes\Components;

use App\Models\ProductType;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class Listing extends Component
{
    public ?string $search = null;

    public function render()
    {
        return view('livewire.product-types.components.listing', [
            'product_types' => ProductType::query()
                            ->when(
                                $this->search, fn(Builder $builder) =>
                                    $builder
                                        ->where('abbreviation', 'like' , '%'.$this->search.'%')
                                        ->orWhere('description', 'like' , '%'.$this->search.'%'))
                            ->paginate(5)
        ]);
    }
}
