<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- <link rel="manifest" href="{{request()->root()}}/manifest.json"> -->
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>
                <a href="{{ route('test') }}">SEND!!!!</a>
            </div>
        </div>
    </body>
    <!-- <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-messaging.js"></script> -->
    <!-- For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics. -->
    <!-- <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-analytics.js"></script> -->
    <script>
        // var config = {  
        //     apiKey: "AIzaSyDQatVg8HSyuro9XJnsYc6bwX5FvOgTqB0",
        //     authDomain: "unic-a798f.firebaseapp.com",
        //     databaseURL: "https://unic-a798f.firebaseio.com",
        //     projectId: "unic-a798f",
        //     storageBucket: "unic-a798f.appspot.com",
        //     messagingSenderId: "857224675473",
        //     appId: "1:857224675473:web:0a06c6a77a27eb98917f30",
        //     measurementId: "G-NBT43LL3EH"
        // };
        // firebase.initializeApp(config);
        // const messaging = firebase.messaging();

        // messaging.onMessage(function(payload) {
        //     NotisElem.innerHTML = NotisElem.innerHTML + JSON.stringify(payload);
            //kenng - foreground notifications
        //     const {title, ...options} = payload.notification;

        //     navigator.serviceWorker.ready.then(registration => {
        //         registration.show0Notification(title, options);
        //     });
        // });
    </script>

</html>
