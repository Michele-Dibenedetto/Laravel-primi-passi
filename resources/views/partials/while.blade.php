<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WHILE</title>
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
            $number = 0;
        @endphp
        @while ($number < 10)
            <h1>{{$number}}</h1>
            <h1>il numero è minore di 10</h1>
            @php
                $number++;
            @endphp
        @endwhile
        @if ($number == 10)
            <h1>Il numero è 10</h1>
        @endif
    </div>
</body>
</html>