<?php

namespace App\Imports;

use App\Models\Userdata;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

use Carbon\Carbon;
HeadingRowFormatter::default('none');
class UsersImport implements ToModel, WithHeadingRow 
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Userdata([
            'created_at' => is_numeric($row['Timestamp']) ? gmdate("d-m-Y H:i:s", ($row['Timestamp'] - 25569) * 86400) : Carbon::createFromFormat('d/m/Y H:i:s', $row['Timestamp'])->format('d-m-Y H:i:s'),
            'permission' => $row['Permission'],
            'gender' => $row['Gender'],
            'postal_code' => $row['Postal Code'],
            'education' => $row['Education'],
            'education_institution' => $row['Education Institution'],
            'years_of_experience' => $row['Years of experience'],
            'employment_commitment' => $row['Employment Commitment'],
            'employment_type' => $row['Employment Type'],
            'jobcategory' => $row['Job Category'],
            'monthly_salary' => $row['Monthly Salary'],
            'job_title' => $row['Job Title']
        ]);
    }

}
