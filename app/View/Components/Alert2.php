<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Alert2 extends Component
{
    public $title;
    public $message;
    public $classes;

    public function __construct($type = 'info', $title = '', $message = '')
    {
        switch ($type) {
            case 'success':
                $this->classes = 'bg-green-50 text-green-800 border border-green-300';
                break;
            case 'error':
                $this->classes = 'bg-red-50 text-red-800 border border-red-300';
                break;
            case 'warning':
                $this->classes = 'bg-yellow-50 text-yellow-800 border border-yellow-300';
                break;
            default:
                $this->classes = 'bg-blue-50 text-blue-800 border border-blue-300';
        }

        $this->title = $title;
        $this->message = $message;
    }

    public function render()
    {
        return view('components.alert2');
    }
}
