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
        @php
            $nomi = ["michele", "paolo", "marco", "andrea"]    
        @endphp
        @foreach ($nomi as $nome)
            @if ($loop->first)
                <h2>Questo è il primo nome</h2>
            @endif
            @if ($loop->last)
                <h2>Questo è l'ultimo nome</h2>
            @endif
            <h1>{{$nome}}</h1>
        @endforeach
    </div>
</body>
</html>