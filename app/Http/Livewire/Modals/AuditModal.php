<?php

namespace App\Http\Livewire\Modals;

use App\Models\Indexer;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use OwenIt\Auditing\Contracts\Auditable;

class AuditModal extends Component
{
    public $showAuditModal = false;
    public ?string $title = 'CDI';
    public Indexer $indexer;

    public function openAuditModal(Indexer $indexer)
    {
        $this->showAuditModal = true;
        $this->indexer = Indexer::find('1');
    }

    public function render()
    {
        $this->indexer = Indexer::find('1');
        return view('livewire.modals.audit');
    }
}
