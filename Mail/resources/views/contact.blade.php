<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Contact</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 flex items-center justify-center h-full">
    <form method="POST" action="{{url('/contact')}}" class="bg-white p-6 rounded shadow-md mt-12" style="width: 300px">
        @csrf
        <div class="mb-5">
            <label for="email" class="block text-xs uppercase font-semibold mb-1">
                Email Address
            </label>
            <input type="email" name="email" id="email" class="border px-2 py-1 text-sm w-full" required>
            @error('email')
            <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="bg-blue-500 py-2 text-white rounded-full text-sm w-full">Email Me</button>
        @if (session('message'))
        <p class="text-green-500 text-xs mt-2">
            {{session('message')}}
        </p>
        @endif
    </form>
</body>

</html>