
<?php 
session_start();
require_once('libs/app.php');
require_once('libs/app.class.php');
?>
<!doctype html>

<html lang="en">
    <head>
      <meta charset="utf-8">

      <title>Camera</title>

    </head>

    <body>

	<video autoplay="true" id="videoElement">
	
	</video>

<script>

var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
  navigator.mediaDevices.getUserMedia({ video: true })
    .then(function (stream) {
      video.srcObject = stream;
    })
    .catch(function (err0r) {
      console.log("Something went wrong!");
    });
}

</script>

      
    </body>
</html>



