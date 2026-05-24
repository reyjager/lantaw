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
    <div class="page-wrapper chiller-theme toggled">
        <nav id="sidebar" class="sidebar-wrapper">
            @include('sidebar.sidebar')
        </nav>

        @include('layouts.header')


        @include('layouts.main')


    </div>
</body>



</html>
