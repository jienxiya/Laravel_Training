<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel='stylesheet' type='text/css' href="{{ asset('css/style.css')}}"/>
    </head>
    <body>
        <br><br>
        <center><h1>@yield('header')</h1></center>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-sm-1">
                </div>
                <div class="col-sm-10">
                    @yield('table')
                    <br><br>
                    <a href="/add-humans" ><button style="width:100%" class="btn btn-primary" type="button">Add Data</button></a>
                </div>
                <div class="col-sm-1">
                </div>
            </div>
        </div>
        <br><br>
    </body>
</html>