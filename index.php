<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.6/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBITktlrgGNv0iNWZ89POCWpIdncjxQ_wk",
    authDomain: "my-test-project-a5ed9.firebaseapp.com",
    projectId: "my-test-project-a5ed9",
    storageBucket: "my-test-project-a5ed9.appspot.com",
    messagingSenderId: "146402606335",
    appId: "1:146402606335:web:c9aa345c4a70cfec40e0ca",
    measurementId: "G-XE5XVZJ3HQ"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);

  var myName= prompt("Enter your name")
  function sendMessage(){
    var message = document.getElementById("message").value;
    
    firebase.database().ref("messages").push().set({
        "sender": myName,
        "message": message
    })
    
    return false;
  }
</script>
<script src="https://www.gstatic.com/firebasejs/6.6.1/firebase-database.js"></script>

<form onsubmit="return sendMessage();">
  <input id="message" placeholder="Enter message" autocomplete="off">
 
  <input type="submit" 
</form>