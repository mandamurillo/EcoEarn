<DOCTYPE html>
<html lang="en">
<head>
  <title>EcoEarn</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
  <style>
a { color:white } /* Globally */

/* Each state */

a:visited { text-decoration: none; color:white; }
a:hover { text-decoration: none; color:white; }
a:focus { text-decoration: none; color:white; }
a:hover, a:active { text-decoration: none; color:white }

.btn-block {
    height: 15%;
    /* define values in pixels / Percentage or em. whatever suits 
       your requirements */
}
p {
  padding: 2rem;
}
body {
    overflow:hidden;
}
 .transparent {
    border-width: 0px;
    -webkit-box-shadow: 0px 0px;
    box-shadow: 0px 0px;
    background-color: rgba(0,0,0,0.0);
    background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
    background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
    background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
  }
  .access {
    border: 2px dashed red; 
  }
  /* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 15% auto; /* 15% from the top and centered */
    padding: 20px;
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}
/* The Close Button */
.close {
    color: black;
    float: right;
    font-size: 28px;
    font-weight: bold;
}
.close:hover,
.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}
  </style>
</head>
<body>

<div class="jumbotron text-center" style="margin-bottom:0; background-color: rgba(0,0,0,0.0)">
</div>

<div class="container-fluid" style="margin-bottom:5rem">
  <div class="row text-center">
  <div class="col-4">
    <button type="button" class="btn btn-primary btn-block"> 
      <a class="nav-link" style="font-size:3vw" href="map.html">MAP</a>
    </button>
  </div>
  <div class="col-4">
    <button id="myBtn" type="button" style="font-size:3vw" class="btn btn-primary btn-block">
      CREATE NEW CARD  
    </button>
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close" style="text-align: right">&times;</span>
        <p>Thank you! Your EcoEarn Card has been created. Please pick up your card below. Then, tap your card on the scanner to begin.</p>
       </div>
    </div>  
  </div>
  <div class="col-4">
  <button type="button" class="btn btn-primary btn-block">
    <i class="fas fa-info-circle fa-4x"></i> 
  </button>
  </div>
  </div>
  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0; background-color: rgba(0,0,0,0.0)">
  <h1 style="text-align:center; font-size: 7vw">Welcome to EcoEarn!</h1>
  <h3 style="text-align:center; font-size: 7vw">Tap card to begin.</h3>
</div>
  
  <button type="button" style="background-color: transparent;border: none;" class="btn btn-primary btn-block"> 
      <a class="nav-link" style="font-size:3vw" href="transactions.php">Next</a>
    </button>

<script>
// Get the modal
var modal = document.getElementById('myModal');
// Get the button that opens the modal
var btn = document.getElementById("myBtn");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}
// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>
</html>
