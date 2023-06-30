function getdata(){
    var data=document.getElementById().value
    firebase.database().ref('/data'+data).once('value').then(function (snapshot){
        var application_id=snapshot.val().application_id;
        var device_id=snapshot.val().device_id;
        var received_at=snapshot.val().received_at;

        document.getElementById("application_id").innerHTML=application_id;
        document.getElementById("device_id").innerHTML=device_id;
        document.getElementById("received_at").innerHTML=received_at;
    })
}

//NXAmAM8HXlTfyX7a25G

var config = {
    apiKey: "AIzaSyAEZQE-lRmp8vsYAAv6NMB9gVnTOiRn3fs",
    authDomain: "test-14e86.firebaseapp.com",
    databaseURL: "https://test-14e86-default-rtdb.firebaseio.com",
    projectId: "test-14e86",
    storageBucket: "test-14e86.appspot.com",
    messagingSenderId: "448624890758",
    appId: "1:448624890758:web:91131112cba47044775207"
  };
  firebase.initializeApp(config);
  
  // Lấy reference đến node "users"
  var usersRef = firebase.database().ref('users');
  
  // Sử dụng phương thức once() để lấy dữ liệu một lần
  usersRef.once('value').then(function(snapshot) {
    // snapshot chứa dữ liệu của node "users"
    console.log(snapshot.val());
  });