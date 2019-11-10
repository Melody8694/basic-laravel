<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{url('/css/app.css')}}">
    <meta name="csrf-token" content="{{csrf_token()}}" />
    <script src="{{url('js/app.js')}}"></script>
</head>
<body>
@include("includes.navbar")
<div class="container">
    @if (Request::is('/'))
        @include("includes.showcase")
    @endif
    @include("includes.messages")
    <div class="row">
        <div class="col-md-8 col-lg-8">
            @yield("content")
        </div>

        <div class="col-md-4 col-lg-4">
            @include("includes.sidebar")
        </div>
    </div>
    <footer class="footer text-center">Copy right version 1.0</footer>
</div>
<script type="text/javascript">
</script>
</body>
</html>