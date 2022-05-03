<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Redberry films</title>

    <style>
        body{
            background: radial-gradient(50% 50% at 50% 50%, #4E4E4E 0%, #3D3B3B 99.99%, #3D3B3B 100%) no-repeat;
            width: 100vw;
            height: 100vh;
            }
    </style>

</head>

<body class="h-120 w-120">

      <div class="absolute top-52  w-9 h-9 left-8 rounded-full border-2 border-white flex justify-center items-center">
            <a class='p-2  text-white'>en</a>
      </div>

      <div class="absolute top-60 mt-4 left-8 w-9 h-9 rounded-full border-2 border-white flex justify-center items-center">
        <a class='p-2 text-white'>ka</a>
      </div>







{{ $slot }}

</body>

</html>



