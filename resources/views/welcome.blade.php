<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <style>
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif;
            background-color: #0a0a0a;
            color: #EDEDEC;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 24px;
        }

        .card {
            max-width: 800px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 8px;
            padding: 48px 40px;
            background-color: #161615;
        }

        .name {
            font-size: 15px;
            font-weight: 500;
            color: #EDEDEC;
            margin-bottom: 4px;
        }

        .nim {
            font-size: 13px;
            color: #A1A09A;
            margin-bottom: 16px;
        }

        .btn {
            display: inline-block;
            padding: 6px 20px;
            font-size: 13px;
            font-weight: 500;
            color: #1C1C1A;
            background-color: #eeeeec;
            border: 1px solid #eeeeec;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.15s ease, border-color 0.15s ease;
        }

        .btn:hover {
            background-color: #ffffff;
            border-color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="card">
        <h1 class="name">Muhammad Array Al-khozini</h1>
        <p class="nim">20230140208</p>
        <a href="#" class="btn">Modul Pertemuan 1</a>
    </div>
</body>

</html>