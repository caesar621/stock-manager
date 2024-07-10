<?php

namespace App\Livewire;

// use Livewire\Component;
// use LivewireUI\Modal\Contracts\ModalComponent;
use LivewireUI\Modal\ModalComponent;

class RequestItem extends ModalComponent
{
    public function render()
    {
        return view('livewire.request-item');
    }
}
