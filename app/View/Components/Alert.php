<?php

namespace App\View\Components;

use Illuminate\View\Component; 

class Alert extends Component 
{

    public $type;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type)
    {
        $this->type=$type;
    }

    public function typeClass(){
        
        if($this->type == 'error' ){

            return 'bg-danger text-white' ;

        }elseif($this->type == 'success'){

            return 'bg-success text-white' ;
        }

         return 'd-none';
    }
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.alert');
    }
}
