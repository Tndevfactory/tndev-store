<?php

namespace App\View\Components;

use Illuminate\View\Component;

class LangSwitcher extends Component
{
    public $lang;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($lang='en')
    {
        $this->lang=$lang;

    }

    public function flagPath()
    {

        return 'img/flag/'.$this->lang.'.webp';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.lang-switcher');
    }
}
