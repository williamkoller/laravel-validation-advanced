<html>
<head>
    <link rel="stylesheet" href="/css/app.css">
    <title>Form and Validations with Laravel</title>
</head>
<body>
<div class="row">
    <div class="container-fluid" style="margin-left: 25px;">
        <h1>Laravel: Form and Validations</h1>
        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-label="true">&times;</span>
            </button>
            {{ Session::get('message') }}
        </div>
        @endif
        @yield('content')
    </div>
</div>
<script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
