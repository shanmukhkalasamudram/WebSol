<?php
    session_start(); 
    include("functions.php");
?>
<html>
  
  <head>
    <title>Index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified JavaScript -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css"
    />
    <link
      rel="stylesheet"
      href="../iii/css/login1.css"
    />
    <script language="JavaScript">
    function showInput() {
        document.getElementById('disp1').innerHTML = 
                    document.getElementById("inputName").value;
         document.getElementById('disp2').innerHTML = 
                    document.getElementById("inputAddress").value;
        document.getElementById('disp3').innerHTML = 
                    document.getElementById("inputMobile").value;
    }

    function printPart(divName) {
     var print = document.getElementById(divName).innerHTML;
     var original = document.body.innerHTML;

     document.body.innerHTML = print;

     window.print();

     document.body.innerHTML = original;
    }
  </script>

    
  </head>
  <body> 
  
  <div class="container">
		  <div class="card">
         <h1> Enter the details </h1>

  <form name="enter" method="POST">

        <label for="inputName" class="sr-only">Name</label>
            <input name="name" type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>

        <label for="inputAddress" class="sr-only">Address</label>
            <input name="address" type="text" id="inputAddress" class="form-control" placeholder="Address" required autofocus>
        
        <label for="inputMobile" class="sr-only">Mobile Number</label>
            <input name="mobile" type="text" id="inputMobile" class="form-control" placeholder="Mobile Number" required autofocus>

            
  </form>
        
  <input name="enter" type="submit" onclick="showInput();"><br/>
  
  </div>
  </div>

  <div class="container">
		  <div class="card">
        <div id ="pr">
          <h3> Your details </h3>
  <h4>Name: <span id='disp1'></span></h4>
  <h4>Address: <span id='disp2'></span></h4>
  <h4>Mobile: <span id='disp3'></span></h4></div>

  <input type="submit" onclick="printPart('pr');">
  
 
  </div>
  
  </div>
  
  
</body>