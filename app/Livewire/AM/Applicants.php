<?php

namespace App\Livewire\AM;

use Livewire\Component;
use App\Models\AM\Application;

class Applicants extends Component
{
    public function render()
    {   
        $applicants = Application::latest()->get();
        return view('livewire.a-m.applicants', compact('applicants'));
    }
}
