<div class="m-5">
@if (!empty($userdata) && count($userdata) > 0)
    <form  wire:submit.prevent="filterTable" >
        @csrf
        <label class="text-sm font-medium text-gray-900 dark:text-gray-300">Filter by years of experience</label>
        <select name="years" wire:model="years" class="form-control w-28" >
            <option value="">--</option>
            @foreach ($experience as $data)
            <option value="{{ $data->years_of_experience }}">{{ $data->years_of_experience }}</option>
            @endforeach
        </select>
    

    
    <div>
        <table class="mt-5 w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th>Timestamp</th>
                <th>Permission</th>
                <th>Gender</th>
                <th>Postal Code</th>
                <th>Education</th>
                <th>Education Institution</th>
                <th>Years of experience</th>
                <th>Employment Commitment</th>
                <th>Employment Type</th>
                <th>Job Category</th>
                <th>Monthly Salary</th>
                <th>Job Title</th>
            </tr>
            </thead>
            @foreach ($userdata as $data)
            <tr>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->permission }}</td>
                <td>{{ $data->gender }}</td>
                <td>{{ $data->postal_code }}</td>
                <td>{{ $data->education }}</td>
                <td>{{ $data->education_institution }}</td>
                <td>{{ $data->years_of_experience }}</td>
                <td>{{ $data->employment_commitment }}</td>
                <td>{{ $data->employment_type }}</td>
                <td>{{ $data->jobcategory }}</td>
                <td>{{ $data->monthly_salary }}</td>
                <td style="max-width: 180px; white-space: nowrap; text-overflow:ellipsis; overflow: hidden;">{{ $data->job_title }}</td>
            </tr>
            @endforeach
        </table>
    </div>


    </form>
@else
<h3 class="text-base">Database is empty</h3>
@endif
</div>