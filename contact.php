<?php include("inc/contactheader.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Jayden" content="North Pole FM">
  <title>Contact / North Pole FM</title>
</head>
<body>
<?php
 if (isset($_POST['name'])) {
  echo "<span class=\"submitmessage\">Successfully Send Message</span>";
 }
?>
<form method="post" target="_self" class="form">
  <h2>CONTACT US</h2>
    <p><input type="text" name="name" placeholder="Write your name here.."></input></p>
    <p> <input type="email" name="email" placeholder="Please fill in your email here.." required></input></p>
    <p><input  placeholder="What would you like to tell us.."></input></p>
    <button><input type="submit" value="Submit!"></button>
    <button><input type="reset" value="Reset"></button>
  <div class="info">
    <div><span class="fa fa-phone"></span> 06-21417708</div>
    <div><span class="fa fa-envelope-o"></span> 89076@roc-teraa.nl </div>
  </div>

</form>



<div id="bg" style="background-image:url(./media/img/background.avif);" class="bg"></div>
  <style>
    html{
    }
</style>
</body>
</html>




<?php include("inc/footer.php"); ?>