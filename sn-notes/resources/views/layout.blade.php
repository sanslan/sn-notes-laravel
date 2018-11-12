<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link type='text/css' rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css'></link>
    <link type='text/css' rel='stylesheet' href="{{asset('css/style.css')}}"></link>
    <title> @yield('title') </title>
</head>
<body>
    @include('partials._navbar')
    <div class='container'>
        @yield('content')
    </div>
</body>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</html>