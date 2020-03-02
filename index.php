<html>
<head>
<title>Cashfree Fee Calculator</title>
<meta charset="UTF-8">
  <meta name="description"content="Calculate Payment Gateway Charges of Cashfree">
  <meta name="keywords"content="Calculate Cashfree, Cashfree ,Cashfree Charges, Cashfree Gateway Charges">
  <meta name="author"content="Tech Maniac">
  <meta name="viewport"content="width=device-width, initial-scale=1.0">
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
 <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
<link rel="shortcut icon" href="favicon.png" type="image/x-icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


      <link rel="stylesheet" href="css/style.css">

<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
<style>
      @import url(https://fonts.googleapis.com/css?family=Slabo+27px);
      @import url(https://fonts.googleapis.com/css?family=Acme|Exo+2|Griffy);

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


body {
  background-color: #DC143C	;
  	margin: 0;
	padding: 0;
}

form {
	width: 700px;
	margin: 0 auto;
}

h1 {
  margin: 50px 0;
  color: #fff;
  font-family: 'Acme', sans-serif;

  font-size: 48px;
  font-weight: normal;
  text-align: center;
}
h2 {
  margin: 20px 0;
  color: #fff;
  font-family: 'Acme', sans-serif;
  font-size: 22px;
  font-weight: normal;
  text-align: center;
}
.btn-container {
  position: absolute;
  left: 50%;
  margin: 0 0 100px -150px;
}

.btn {
  width: 300px;
  height: 50px;
  line-height: 50px;
  background-color: #DC143C;
  border-radius: 8px;
  color: #fff;
font-family: 'Griffy', cursive;
  font-size: 22px;
  font-weight: normal;
  text-decoration: none;
  text-align: center;
  display: inline-block;
  position: relative;
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: -webkit-transform;
  transition-property: transform;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  transform: translateZ(0);
  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
  -webkit-transform: translateY(-6px);
  -ms-transform: translateY(-6px);
  transform: translateY(-6px);
  -webkit-animation-name: hover;
  animation-name: hover;
  -webkit-animation-duration: 1.5s;
  animation-duration: 1.5s;
  -webkit-animation-delay: 0.3s;
  animation-delay: 0.3s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-direction: alternate;
  animation-direction: alternate;
}
.btn:before {
  pointer-events: none;
  position: absolute;
  z-index: -1;
  content: '';
  top: 100%;
  left: 5%;
  height: 10px;
  width: 90%;
  opacity: 0;
  background: -webkit-radial-gradient(center, ellipse, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  background: radial-gradient(ellipse at center, rgba(0, 0, 0, 0.35) 0%, rgba(0, 0, 0, 0) 80%);
  -webkit-transition-duration: 0.3s;
  transition-duration: 0.3s;
  -webkit-transition-property: -webkit-transform, opacity;
  transition-property: transform, opacity;
  opacity: .4;
  -webkit-transform: translateY(6px);
  -ms-transform: translateY(6px);
  transform: translateY(6px);
  -webkit-animation-name: hover-shadow;
  animation-name: hover-shadow;
  -webkit-animation-duration: 1.5s;
  animation-duration: 1.5s;
  -webkit-animation-delay: .3s;
  animation-delay: .3s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-direction: alternate;
  animation-direction: alternate;
}
.btn:hover {
  background-color: #e16e50;
}

@keyframes hover {
  50% {
    -webkit-transform: translateY(-3px);
    -ms-transform: translateY(-3px);
    transform: translateY(-3px);
  }
  100% {
    -webkit-transform: translateY(-6px);
    -ms-transform: translateY(-6px);
    transform: translateY(-6px);
  }
}
@-webkit-keyframes hover-shadow {
  0% {
    -webkit-transform: translateY(6px);
    transform: translateY(6px);
    opacity: .4;
  }
  50% {
    -webkit-transform: translateY(3px);
    transform: translateY(3px);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(6px);
    transform: translateY(6px);
    opacity: .4;
  }
}
@keyframes hover-shadow {
  0% {
    -webkit-transform: translateY(6px);
    -ms-transform: translateY(6px);
    transform: translateY(6px);
    opacity: .4;
  }
  50% {
    -webkit-transform: translateY(3px);
    -ms-transform: translateY(3px);
    transform: translateY(3px);
    opacity: 1;
  }
  100% {
    -webkit-transform: translateY(6px);
    -ms-transform: translateY(6px);
    transform: translateY(6px);
    opacity: .4;
  }
}
@-webkit-keyframes hover {
  50% {
    -webkit-transform: translateY(-3px);
    transform: translateY(-3px);
  }
  100% {
    -webkit-transform: translateY(-6px);
    transform: translateY(-6px);
  }
}
@keyframes hover {
  50% {
    -webkit-transform: translateY(-3px);
    -ms-transform: translateY(-3px);
    transform: translateY(-3px);
  }
  100% {
    -webkit-transform: translateY(-6px);
    -ms-transform: translateY(-6px);
    transform: translateY(-6px);
  }
}

    </style>

  <script>
  window.console = window.console || function(t) {};
</script>

  <script>
function popup()
{
alert("Your GPA is "); // this is the message in ""
}
</script>

  <script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
  }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129336625-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129336625-1');
</script>

</head>
<body>
<h1> Razorpay Calculator </h1>
<h2> Calculate Payment Gateway Charges of Razorpay (2%)</h2>
<br><br>
<form  method="post" class="pure-form">
<font color="white">
Amount - </font>
<input type="text" name="amt" /><br> <br>
<input align="center"  type="submit" class="pure-button pure-button-primary" onclick="myFunction()" name="submit" value="Calculate">  </h2>

</font>
	</form>

<?php
    if(isset($_POST['submit']))
    {
        $amt = $_POST['amt'];

        $y=2/100*$amt;
        echo '<h1> Payment Gateway Charge ='.$y.'<br>';
        $z=18/100*$y;
        echo 'GST For Payment Gateway Charge = '.$z.'<br>';
        $a=$y+$z;
        echo 'Total Charges = '.$a.'<br>';
        $b=$amt-($y+$z);
        echo 'Amount Received to Bank Account = '.$b.'<br>';
        $c=$amt+($y+$z);
        echo 'To receive "'.$amt.'", Amount must be set to '.$c;
        echo '</h1>';
}
?>



  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script><br><br><br>
<center><h2> Designed By <a href="https://techmaniac.in"> Tech Maniac</a><small><br><br>
<a href="https://proxy.techmaniac.in">Access Region Based Blocked Websites</a><br>
<a href="https://cloud.techmaniac.in">Free Unlimited Cloud Storage</a><br>
<a href="https://techmaniac.in">Homepage</a><br>
<img src="https://hitwebcounter.com/counter/counter.php?page=7189021&style=0025&nbdigits=4&type=page&initCount=0" title="Free-Counter" Alt="hitwebcounter"   border="0" ><br>
</h2></small></center>
</body>
</html>
