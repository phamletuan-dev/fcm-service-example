<html>
<title>Firebase Messaging Demo</title>
<style>
    div {
        margin-bottom: 15px;
    }
</style>
<body>
    <div id="token"></div>
    <div id="msg"></div>
    <div id="notis"></div>
    <div id="err"></div>
    <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-messaging.js"></script>
    <!-- For an optimal experience using Cloud Messaging, also add the Firebase SDK for Analytics. -->
    <script src="https://www.gstatic.com/firebasejs/7.2.1/firebase-analytics.js"></script>
    <script>
        // MsgElem = document.getElementById("msg");
        // TokenElem = document.getElementById("token");
        // NotisElem = document.getElementById("notis");
        // ErrElem = document.getElementById("err");
        // Initialize Firebase
        // TODO: Replace with your project's customized code snippet
        // var config = {
        //     apiKey: "AIzaSyDQatVg8HSyuro9XJnsYc6bwX5FvOgTqB0",
            // authDomain: "unic-a798f.firebaseapp.com",
            // databaseURL: "https://unic-a798f.firebaseio.com",
            // projectId: "unic-a798f",
            // storageBucket: "unic-a798f.appspot.com",
            // messagingSenderId: "857224675473",
            // appId: "1:857224675473:web:0a06c6a77a27eb98917f30",
            // measurementId: "G-NBT43LL3EH"
        // };
        // firebase.initializeApp(config);

        // const messaging = firebase.messaging();
        // Get Instance ID token. Initially this makes a network call, once retrieved
        // subsequent calls to getToken will return from cache.
        
        // messaging.requestPermission()
        //     .then(function () {
        //         MsgElem.innerHTML = "Notification permission granted." 
        //         // get the token in the form of promise

        //         return messaging.getToken()
        //     })
        //     .then(function( ) {
        //         TokenElem.innerHTML = "token is : " + token
        //     })
        //     .catch(function (err) {
        //         ErrElem.innerHTML =  ErrElem.innerHTML + "; " + err
        //         console.log("Unable to get permission to notify.", err);
        //     });

        //     firebase.notifications().onNotification((notification) => {
        //         alert('Notification received!', notification);
        //         firebase.notifications().displayNotification(notification);
        //     });
            // firebase.messaging().onMessage(notification => {
            //     alert('Notification received!', notification);
            // });
        // messaging.onMessage(function(payload) {
        //     console.log("Message received. ", payload);
        //     NotisElem.innerHTML = NotisElem.innerHTML + JSON.stringify(payload);
        //     //kenng - foreground notifications
        //     const {title, ...options} = payload.notification;
        //     navigator.serviceWorker.ready.then(registration => {
        //         registration.showNotification(title, options);
        //     });
        // });
    </script>

    </body>

</html>