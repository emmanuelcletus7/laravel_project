<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>

    
<div class="w-[50%] mx-auto text-center my-5">
    <button class="text-white bg-blue-700 mx-auto hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a href="/">index</a></button>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
          <div class="bg-red-500 text-white">{{ $error }}</div>  
        @endforeach
    @endif
</div>
    <form class="w-[50%] mx-auto my-10" action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-6 ">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" name="title" id="title" value="old('title')"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                 required>
        </div>
        <div class="mb-6">
            <label for="content" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Content</label>
            <input type="text" name="content" id="content" value="old('content')"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                required>
        </div>
        
        <div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="user_avatar">Image</label>
            <input
                class="block w-full text-sm text-gray-900 border p-3 border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="user_avatar_help" id="user_avatar" type="file" name="pics" value="old('pics')">
            <div class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="user_avatar_help">Upload a file
            </div>
        </div>
        <button type="submit"
            class="text-white bg-blue-700 my-10 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
    </form>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
</body>

</html>
