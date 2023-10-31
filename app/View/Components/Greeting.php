<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Greeting extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return <<<'blade'
        <h1 class="font-mono text-2xl text-white capitalize">Welcome <span class="font-bold">{{ auth()->user()->firstname }}</span>,</h1>
blade;
    }
}
