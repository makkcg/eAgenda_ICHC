<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Textarea extends Component
{
    public $name;
    public $value;
    public $label;
    public $ckEditor;
    public $inputClass;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $value = null, $label = true, $ckEditor = false, $inputClass = '')
    {
        $this->name = $name;
        $this->value = $value;
        $this->label = $label;
        $this->ckEditor = $ckEditor;
        $this->inputClass = $inputClass;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.textarea');
    }
}
