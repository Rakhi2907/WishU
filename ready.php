<?php $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $_GET["n"]; ?> Wishing You Happy Deepawali</title>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1"/>
<meta name="keyword" content="Happy Diwali, Dipawali, festival, Ganesh, Dipwali 2017"/>
<meta name="description" content="Happy Deepawali to All My Lovely Friends"/>
<link type="text/css" rel="stylesheet" href="hoped.min.css" media="screen,projection"/>
<link rel="icon" type="image/png" sizes="32x32" href="/favicon.png">
<style>
input[type=name], select {
    width: 100%;
    padding: 12px 20px;
    margin: 4px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.footerbtn {
  border-radius: 5px;
  box-sizing: border-box;
  padding: 5px;
  position: fixed;
  left:0px;
  bottom:0px;
  height:40px;
  width:100%;
  background:#34af23;
  color: #ffffff;
  font-size: 20px;
  text-align: center;
  text-decoration: none;
}

.footerbtn:hover {
  text-decoration: none;
    position: fixed;
}
</style>
</head>

<body class="bg" id="rakhi">
<main id="rakhi">
 
<div class="container">
<div class="col s12">
<div class="row">


<p class="center no-margin">
<center>
<!-- adsense code goes here -->
</center>
</p>


<div class="col s12 l6 offset-l3">
<div class="card blue-grey darken-1 hoverable" id="bg-pic">
<div class="card-content white-text">

<p id="animated-example" class="animated pulse card-title center-align name head"><?php echo $_GET["n"]; ?></p>
<p class="card-title center-align comic wishesed">
<span class="deep-orange-text text-darken-2">W</span>
<span class="green-text text-accent-4">i</span>
<span class="blue-text text-lighten-1">s</span>
<span class=" teal-text text-accent-3">h</span>
<span class="red-text text-accent-3">i</span>
<span class="lime-text">n</span>
<span class="orange-text text-accent-3">g &nbsp;</span>
<span class="lime-text">Y</span>
<span class=" blue-text text-darken-1">o</span>
<span class="lime-text text-accent-3">u</span></p>
<p id="animated-example" class="animated pulse card-title center-align name head">Happy Diwali</p>
<br>

<center>
<img src="happyjanmashtami.gif" style="width: 100%; margin-top: -2px; margin-bottom: -9px;">
</center>

<p class="center">

<!--<center>
adsense code goes here
</center>-->
<br>
<!--Rakhi is the combination of five meaningful words.<br>
R: rock strong relationship<br>
A: acceptance all along<br>
K: kindness to the core<br>
H: heartwarming presence<br>
I: idealistic relationship<br>-->
Happy Diwali</p>


<p class="name bdaywish right">- <?php echo $_GET["n"]; ?></p></br>
</div>
</div>
</div>
</div>
</div>

<section id="subscribe" class="">
<div class="row">
<div class="col s12 l6 offset-l3">
<div class="card purple darken-2 hoverable" id="bg-pic">
<div class="card-content white-text">
<!--
<div class="row cretewishes">
<div class="col s12">
<div class="check-inview fadeup inview">
<header><h2 class="text-center ctewish">Create Your Wishes</h2></header>
</div>
</div>
<div class="col m8 offset-m2 center">
<article class="check-inview fadeup inview"><p>ENTER YOUR NAME TO WISH YOUR FRIENDS AND FAMILY MEMBERS</p></article>
</div>
</div>-->
<div class="row no-margin-bottom">
<p id="error-display" style="display:none;"></p>
<div class="col s12 center no-pad" id="createnew">

<form method="get" action="ready.php">
<div class="input-field col l8 s8">
<input id="username" onkeydown="validateAlpha();" type="name" class="validate" required="" maxlength="25" name="n" style=" font-size: 16px;" placeholder="Enter Your Name">
</div>
<div class="input-field col s4 l4 butndiv">
<button class="btn waves-effect waves-light wishgo" type="submit">Go
<img id="whatsappicon" src="smily.svg">
</button>
</div>
</form>

</div>
</div>
<center>
<!-- adsense code goes here -->
</center>
<div class=" col s12 center bottomadd">
</div>
</div>
</div>
</div>
</div>
</section>
<br>
</main>
<a class="footerbtn" href="whatsapp://send?text=।।    आपको और आपके परिवारजनों को   *<?php echo $_GET["n"]; ?>*  की ओर से दिवाली की शुभकामनायें ।  %0A<?php echo $actual_link; ?>%0A👆 👆 👆 👆 "><img width="20px" height="20px" src="wtsp.svg"/> SHARE ON WHATSAPP <img width="20px" height="20px" src="wtsp.svg"/></a>

<script src="../../ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="snow.js"></script>
    <script>
      jQuery(document).ready(function(e) {
        jQuery('body').wpSuperSnow({
              flakes: ['r1.png','r2.png','r3.png', 'r4.png', 'r5.png', 'r6.png'],
              totalFlakes: '35',
              zIndex: '999999',
              maxSize: '77',
              maxDuration: '40',
              useFlakeTrans: true
           });
      });
    </script>

</body>
</html>