<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class File extends Component
{
    public $name;
    public $label;
    public $image;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label = true, $image = null)
    {
        $this->name = $name;
        $this->label = $label;
        $this->image = $image;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.file');
    }
}
