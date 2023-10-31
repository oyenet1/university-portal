<?php

namespace App\Livewire;

use Livewire\Component;

class SwitchRole extends Component
{
    function switchRole($ok): void
    {
        $done = auth()->user()->update(['current_role' => $ok]);
        if ($done) {
            $details = [
                'text' => "You have successfully switch to " . $ok,
                'title' => 'Role Changed'
            ];
            $this->dispatch('swal:success', details: sweetAlert(...$details));
        }
    }
    public function render()
    {
        return view('livewire.switch-role');
    }
}