<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ImportForm extends Component
{
    public $route, $templateFile;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($route, $templateFile = '')
    {
        $this->route = $route;
        $this->templateFile = $templateFile;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.import-form');
    }
}
