<?php

namespace App\Livewire;

use Livewire\Component;

class AdminDashBoard extends Component
{
    public function render()
    {
        $user = auth()->user();
        return view('livewire.admin-dash-board', compact(['user']));
    }
}