<?php

namespace App\Livewire;

use App\Models\Province;
use Livewire\Component;

class StateCity extends Component
{
    public $ops, $city_id;
    function done()
    {
        dd("i am clicked");
    }
    public function render() //'legacy_model_binding' => true,
    {
        $states = Province::select('id', 'state')->get();
        return view('livewire.state_city', compact(['states']));
    }
}