<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud APP</title>
    @include('partials.styles')
</head>
<body>
        <div class="wrapper">

                @include('partials.header')
                @yield('content')
                @include('partials.footer')

              </div>

    @include('partials.scripts')
</body>
</html>
