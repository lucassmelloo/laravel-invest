<?php

namespace App\Http\Livewire\Modals;

use App\Models\Indexer;
use Faker\Factory;
use Illuminate\View\View;
use Livewire\Component;
use OwenIt\Auditing\Contracts\Auditable;

class AuditModal extends Component
{
    public bool $showAuditModal = false;
    public string $title = 'Titulo';

    public function openAuditModal() :void
    {
        $this->showAuditModal = true;
    }

    public function render() : View
    {
        return view('livewire.modals.audit');
    }
}
