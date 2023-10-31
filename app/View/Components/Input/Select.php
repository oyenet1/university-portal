<?php

namespace App\View\Components\Input;

use Illuminate\View\Component;

class Select extends Component
{
    public $label, $name, $ro;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $name, $ro = false)
    {
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.input.select');
    }
}