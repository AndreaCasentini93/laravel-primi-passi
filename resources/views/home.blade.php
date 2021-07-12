<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Primi Passi</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
                padding: 0;
                margin: 0;
            }

            body {
                display: flex;
                min-height: 100vh;
                font-family: 'Press Start 2P', cursive;
                background-color: #000000;
            }

            h1 {
                margin-bottom: 50px;
                text-transform: uppercase;
                font-size: 70px;
                color: limegreen;
            }

            h2 {
                margin-bottom: 35px;
                font-size: 20px;
                color: dodgerblue;
            }
            h2 span {
                font-size: 20px;
                color: #ffffff;
            }

            ul {
                list-style: none;
            }

            li {
                margin: 20px 0;
                font-size: 20px;
                color: #ffffff;
            }

            .wrapper {
                margin: auto;
                text-align: center
            }
        </style>
    </head>

    <body>
        <div class="wrapper">
            <h1>Hello World</h1>
            @if (count($skills) == 0)
                <h2>{{ $name }} non possiede alcuna skill</h2>
            @elseif (count($skills) == 1)
                <h2>La skill di {{ $name }} è <span>{{ $skills[0] }}</span></h2>
            @else
                <h2>Le skill di {{ $name }} sono:</h2>
                <ul>
                    @foreach ($skills as $skill)
                        <li>{{ $skill }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </body>
</html>
