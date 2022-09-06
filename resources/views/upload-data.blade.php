<div class="m-5 ml-10">
@if (session('status'))
    <p class="text-3xl">{{ session('status') }}</p>
@elseif (session('errors'))
    {{ session('errors') }}
@else
    <form class="" action="upload-data" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="">
            <input class="text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file" name="file" required/>
            <button type="submit" class="h-6 px-4 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">upload</button>
        </div>
    </form>
@endif
</div>