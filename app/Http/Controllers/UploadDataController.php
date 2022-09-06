<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class UploadDataController extends Controller
{
    public function store(Request $request) 
    {
        try{
            $file = $request->file('file');
            Excel::import(new UsersImport, $file->store('import'));
            return back()->with('status', 'csv imported to DB');
        } catch (\Exception $ex) {
            return back()->withErrors($ex->getMessage());
        }
    }
}
