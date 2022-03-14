<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Files extends Component
{
    public $name;
    public $label;
    public $images;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $label = true, $images = [])
    {
        $this->name = $name;
        $this->label = $label;
        $this->images = $images;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.files');
    }
}
