<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    @vite('resources/css/app.css')
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="w-[50%] mx-auto text-center my-5">
        <button
            class="text-white bg-blue-700 mx-auto hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><a
                href="create">create</a></button>
    </div>

    <div class="relative overflow-x-auto">

        @if (session('status'))
            <div class="">

                <script type="text/javascript">
                    Try me!
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            showConfirmButton: false,
                            timer: 3000,
                            timerProgressBar: true,
                            didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                            }
                        })

                    Toast.fire({
                        icon: 'success',
                        title: {{ session('status') }}
                    })
                </script>
            </div>
        @endif
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr class="">
                    <th scope="col" class="px-6 py-3 border">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Content
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Image
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Action
                    </th>
                </tr>
                @foreach ($blog as $blog)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $blog->id }}
                        </th>
                        <td class="px-6 py-4 border">
                            {{ $blog->title }}
                        </td>
                        <td class="px-6 py-4 border">
                            {{ $blog->content }}
                        </td>
                        <td class="px-6 py-4 w-[20%] border">
                            <img src="{{ asset('post/' . $blog->pics) }}" alt="">
                        </td>
                        <td class="px-6 py-4 border">
                            <span><i class="fa-solid fa-eye"></i></span>
                            <span><i class="fa-regular fa-pen-to-square text-green-500"></i></span>
                            <span><i class="fa-solid fa-trash-can text-red-500"></i></span>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>
        

    

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>




</body>

</html>
