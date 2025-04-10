<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lantaw</title>
    @vite(['resources/css/app.scss', 'resources/js/app.js'])


</head>

<body>
    <div class="wrapper">
        @include('sidebar.sidebar')

        <div id="content">
            @include('layouts.header')

            <main class="page-content">
                @include('layouts.main')
            </main>
        </div>
    </div>
</body>



</html>
