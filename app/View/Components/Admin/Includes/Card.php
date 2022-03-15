<?php

namespace App\View\Components\Admin\Includes;

use Illuminate\View\Component;

class Card extends Component
{
    public $cardHeader;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cardHeader)
    {
        $this->cardHeader = $cardHeader;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.includes.card');
    }
}
