<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Live Resume :: Home</title>
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendors/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/live-resume.css')}}">
    <script src="{{asset('assets/js/axios.min.js')}}"></script>
</head>

<body>

@include('components.header')
@include('components.loader')

<div class="content-wrapper">

    <aside>
       @include('components.profile')
       @include('components.language')
       @include('components.interest')
    </aside>


    <main>

        @yield('content')

        @include('components.footer')

    </main>

</div>
<script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendors/@popperjs/core/dist/umd/popper-base.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/live-resume.js')}}"></script>
</body>
</html>
