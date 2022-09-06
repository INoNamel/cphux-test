<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Http\Controllers\Controller;
use App\Models\Userdata;

class Table extends Component
{
    public $userdata;
	public $experience;
	public $years = 0;

    public function filterTable($years)
    {
        $this->years = $years;
    }

    public function render()
    {
        $this->experience = Userdata::select('years_of_experience')->groupBy('years_of_experience')->orderBy('years_of_experience')->get();
        $this->userdata = Userdata::select('created_at','permission','gender','postal_code','education','education_institution','years_of_experience','employment_commitment','employment_type','jobcategory','monthly_salary','job_title')->where('years_of_experience', '>=', $this->years )->orderBy('years_of_experience')->get();
        
        return view('livewire.table-data');
    }
}
