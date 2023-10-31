<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BreadCrumb extends Component
{
    public $pageName, $activePage;
    /**
     * Create a new component instance.
     */
    public function __construct($activePage, $pageName)
    {
        $this->pageName = $pageName;
        $this->activePage = $activePage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.bread-crumb');
    }
}
