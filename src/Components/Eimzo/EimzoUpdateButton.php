<?php

namespace BladeUIKit\Components\Eimzo;

use BladeUIKit\Components\BladeComponent;
use BladeUIKit\Text\textYajra;

class EimzoUpdateButton extends BladeComponent
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('blade-ui-kit::components.eimzo.update');
    }
}
