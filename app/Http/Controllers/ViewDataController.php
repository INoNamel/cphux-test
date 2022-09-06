<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ViewDataController extends Controller {
    public function view_data() {
        //$userdata = DB::select('select * from userdata');
        //$experience = DB::select('select distinct years_of_experience from userdata order by years_of_experience asc');
        return view('view-data');
    }
}
