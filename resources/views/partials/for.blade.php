<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .flex_center {
            display: flex;
            justify-content: center;
            align-items: center
        }
    </style>
</head>
<body style="min-height: 100vh; text-align: center" class="flex_center">
    <div>
        @for ($i = 0; $i < 10; $i++)
            <h1>Siamo all'indice {{$i}}</h1>
        @endfor
    </div>
</body>
</html>