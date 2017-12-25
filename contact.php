<html>


<head>
<title>Reach Us</title>
<script src="https://use.fontawesome.com/969581e9ce.js"></script>
<link rel="stylesheet"  href="css/woi.css">
<link href="css/hover.css" rel="stylesheet" media="all">
</head>

<body>

<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i>
</button>

<div class="header"><div class="top-header">
<form name="searchh" method="post" action="search.php">&nbsp;&nbsp;<i class="fa fa-search" style="color:white;" aria-hidden="true"></i>
  <input type="text" name="search" placeholder="Find out more about us.............."><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Billion@Segamat</a><a target="_blank" href="https://www.facebook.com/billion.segamat.jalanros/"><i class="fa fa-facebook-square fa-2x" style="margin:4px 11px 0px 0px;color:#fcfcfc;display:inline-block;float:right;" aria-hidden="true"></i></a>
  <a target="_blank" href="https://twitter.com/search?q=billion%20segamat&src=typd"><i class="fa fa-twitter fa-2x" style="margin:5px 14px ;color:#fcfcfc;display:inline-block;float:right;" aria-hidden="true"></i></a>
<a target="_blank" href="http://www.instagram.com/billiongroup"><i class="fa fa-instagram fa-2x" style="margin:5px 1px ;color:#fcfcfc;display:inline-block;float:right;" aria-hidden="true"></i></a>	  </form>
   </div>
<div class="leftdiv hvr-back-pulse" style="cursor:pointer;" onclick="location.href='index.php';">Home</div>
<div class="leftdiv hvr-back-pulse" style="cursor:pointer;" onclick="location.href='about.php';">About us</div>
<div class="leftdiv hvr-back-pulse" style="cursor:pointer;" onclick="location.href='dept.php';">Departments</div>
<div class="logo"><img src="logo.png" width="100%" height="100%" ></div>
<div class="rightdiv hvr-back-pulse" style="cursor:pointer;background-color:red;color:white;" onclick="location.href='contact.php';">Reach Us</div>
<div class="rightdiv hvr-back-pulse" style="cursor:pointer" onclick="location.href='walkthrough.php';">Walkthrough</div>
<div class="rightdiv hvr-back-pulse" style="cursor:pointer" onclick="location.href='store.php';">Store</div>
</div>


<div class="clearfix"></div>

<div class="map">
<iframe
  width="100%"
  height="100%"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyD8deGKgbfO211XhkwxpQ09xOGtWMXIr8A&q=Billion+segamat,johor+Malaysia&zoom=18
    &q=Space+Needle,Seattle+WA" allowfullscreen>
</iframe>
</div>

<div class="clearfix"></div>

<div class="content">
<img src="gambar/reach.jpg" width="100%"/>

<form name="contactform" method="post" class="mail" action="send_form_email.php">


  Name : <input  type="text" name="name" maxlength="50" size="30">
<br>
 Email : <input  type="text" name="email" maxlength="80" size="30">
<br>
  Telephone : <input  type="text" name="telephone" maxlength="30" size="30">
<br>
  Comments : <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
<br>
  <input type="submit" value="Submit">

</form>
</div>


<div class="footer">
Designed By Syahid 
</div>

<script>


// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>