<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel= "stylesheet" />
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-200 p-4">
    <div class="lg:w-2/4 mx-auto py-8 px-6 bg-white rounded-xl">
        <h1 class="font-bold text-5xl text-center mb-8"> Laravel Tailwind Todo</h1>
        <div class="mb-6">
            <form class="flex flex-col space-y-4 " method="POST" action="/">
                <input name="title" placeholder="add todo title" type="text" class="py-3 px-4 bg-gray-100 rounded-xl">
                <textarea name="description" placeholder="todo description" class="py-3 px-4 bg-gray-100 rounded-xl"></textarea>
                <button class="w-28 py-4 px-8 bg-green-500 text-white rounded-xl">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>
