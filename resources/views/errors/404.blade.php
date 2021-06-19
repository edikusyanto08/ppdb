
<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PPDB SMKN 5 Kab. Tangerang</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/comingsoon.css')}}">
    </head>
    <body>
    <div id="particles-js"></div>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md " >
                    404<br>
                    Page Not Found
                </div>
                <a href="{{ url('/') }}" class="btn btn-success">Kembali ke Beranda</a>
            </div>
        </div>
    </div>
    </body>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{asset('/js/particles.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/vendor/bootstrap/js/bootstrap.js')}}"></script>
    
</html>