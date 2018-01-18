<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 36px;
                padding: 20px;
            }
        </style>

    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div>
                    <img src="img/peugeot_404.png" class="img-responsive"  width="100%" height="auto"alt="Error 404">
                </div>
                <div class="title">
                    @yield('message')
                </div>
            </div>
        </div>
    </body>

    <script type="text/javascript">
        var count = 7;
        var countMainString = document.getElementById('countDown').innerHTML = 'You will be redirect in...';
        setInterval(function(){
            count--;
            countMainString = countMainString + count + '...'; 
            document.getElementById('countDown').innerHTML = countMainString;
            if (count == 0) {
                window.location = 'http://portfolio:8888/'; 
            }
        },1000);

        // function pageRedirect() {
        //     window.location.replace("http://portfolio:8888/");
        // }      
        // setTimeout("pageRedirect()", 10000);

    </script>

</html>
