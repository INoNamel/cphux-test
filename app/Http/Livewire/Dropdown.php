<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\Controller;
use App\Models\Userdata;

class Dropdown extends Component
{
	public $experience;
    
    public function render()
    {
        $this->experience = Userdata::select('years_of_experience')->groupBy('years_of_experience')->orderBy('years_of_experience')->get();
        return view('livewire.dropdown-data');
    }
}
