<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Submit extends Component
{
    public $redirectRoute;
    public $cancel;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($redirectRoute = '#', $cancel = true)
    {
        $this->redirectRoute = $redirectRoute;
        $this->cancel = $cancel;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.submit');
    }
}
