<?php
    include_once 'header.php';
?>
<!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="./vid/city.mp4" type="video/mp4">
</video>

<!-- Optional: some overlay text to describe the video -->
<div class="content">
  <h1>About us</h1>
 
  <!-- Use a button to pause/play the video with JavaScript -->
  <button id="myBtn" onclick="myFunction()">Pause</button>
</div>
<script>
// Get the video
var video = document.getElementById("myVideo");

// Get the button
var btn = document.getElementById("myBtn");

// Pause and play the video, and change the button text
function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}
</script>


<?php
    include_once 'footer.php';
?>