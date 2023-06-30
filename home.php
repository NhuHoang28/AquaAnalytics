<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giam sat chat luong nuoc</title>
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <!-- <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.19.1/firebase-database.js"></script> -->
</head>

<body>
    <div id="header" style="background-color: rgb(95, 95, 95)">
        <a style="color: rgb(185, 218, 0);">Đề tài giám sát các chỉ số nước trong hồ nuôi tôm</a>
    </div>

    <center1>
        <h2>input information</h2>
        <input type="text" id="data" required="required"><br>
        <button type="button" onclick="getdata();">Get</button>
    </center1>

    <center1>
        <p>app_id: <strong id="application_id"></strong></p><br>
        <p>dev_id: <strong id="device_id"></strong></p><br>
        <p>time: <strong id="received_at"></strong></p><br>
    </center1>

    <script src="https://www.gstatic.com/firebasejs/7.20.0/firebase-database.js"></script>

    <script>
        var firebaseConfig = {
        apiKey: "AIzaSyAEZQE-lRmp8vsYAAv6NMB9gVnTOiRn3fs",
        authDomain: "test-14e86.firebaseapp.com",
        databaseURL: "https://test-14e86-default-rtdb.firebaseio.com",
        projectId: "test-14e86",
        storageBucket: "test-14e86.appspot.com",
        messagingSenderId: "448624890758",
        appId: "1:448624890758:web:91131112cba47044775207",
    };
        firebase.initializeApp(firebaseConfig);
    </script>
    <script type="text/javascript" src="js/read.js"></script>


    <!-- // var firebaseRef = firebase.database().ref("dongco");
    // firebaseRef.on("value" ,function(snapshot){
    //     snapshot.forEach(function(element){
    //         document.querySelector('#root').innerHTML +=`
    //             <div> ${element.val()} </div>
    //         `
    //     });
    // })
    //  -->

</body>

</html>