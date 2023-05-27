<?php

namespace App\Http\Livewire\Modals;

use App\Models\Indexer;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use OwenIt\Auditing\Contracts\Auditable;

class AuditModal extends Component
{
    public $showAuditModal = false;

    public function openAuditModal()
    {
        $this->showAuditModal = true;
        dd('lucas');
    }

    public function render()
    {
        return view('livewire.modals.audit');
    }
}
