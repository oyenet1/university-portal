<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Board extends Component
{
    public $name, $currency, $value, $color;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value, $color = "gray", $currency = false)
    {
        $this->name = $name;
        $this->color = $color;
        $this->value = $value;
        $this->currency = $currency;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.board');
    }
}