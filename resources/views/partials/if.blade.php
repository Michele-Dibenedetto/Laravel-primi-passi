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
        <h1>{{$numero}}</h1>
        @if ($numero > 5)
            <h1>Positivo</h1>
        @else 
            <h1>Negativo</h1>
        @endif
    </div>
</body>
</html>