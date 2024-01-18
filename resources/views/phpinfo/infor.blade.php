<?php 
//    echo phpinfo();   correr npm run dev para compliar Tailwind -> app.css ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind</title>
    @livewireStyles
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    @livewire('hello-world')

    @livewireScripts
</body>
</html>    

