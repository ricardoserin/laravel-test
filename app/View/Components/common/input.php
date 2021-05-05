<?php

namespace App\View\Components\common;

use Illuminate\View\Component;

class input extends Component
{
    public $inputName;
    public $placeholder;
    public $type;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($inputName, $placeholder, $type="text", $label)
    {
        $this->inputName = $inputName;
        $this->placeholder = $placeholder;
        $this->type = $type;
        $this->label = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.common.input');
    }
}
