<?php 
//    echo phpinfo();   correr npm run dev para compliar Tailwind -> app.css ?>
   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
  <div class="flex gap-4">
    <div class="card basis-1/4 sm:basis-1/3">1</div>
    <div class="card basis-1/4 sm:basis-1/3">2</div>
    <div class="card basis-1/2 sm:basis-1/3">3</div>
  </div>
</body>
</html>    

