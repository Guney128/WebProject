<?php
    include_once 'header.php';
?>

<div class="text-box">
    <h1> HOTEL WEBSITE </h1>
    <p> Twice the comfort, twice the value, twice the hotel -<br> 
            the best value under the sun.
    </p>
    <a href=""class="hero-btn">Visit us to know more! </a>
</div>

        </section>


 <!----suites oder news idk------>       
<section class= "suites">
    <h1>Suites We Offer</h1>
    <p> Enjoy luxurious accommodations and creative cuisine at the best locations when you stay with our Hotel.</p>

<div class="row">
<div class="suites-col">
    <h3>SUITE I</h3>
    <p>  This spacious two-room suite offers 580-710 square feet of living space and features a living room and sleeping room with two queen size beds.  <br> 
   </p>
</div>
<div class="suites-col">
    <h3>SUITE II</h3>
    <p> This specialty suite offers 1,100 square feet of living space and features a luxurious sitting room with a dining table, plush sofas and a large screen TV along with a king-bedded sleeping room. <br> 
       </p>
</div>
<div class="suites-col">
    <h3>SUITE III</h3>
    <p> This large upscale suite offers 680-780 square feet of living space and features a living room overlooking a king bedded sleeping room.
<br> 
       </p>
</div>

</div>
<!-----Rooms----->
<section class= "rooms">
    <h1>Our Rooms</h1>
    
        <p>Our 173 elegant rooms feature skyline views and indulgent marble bathrooms with whirlpools or deep soaking tubs.  <br> 
        Each suite offers complimentary wireless internet, in-room safes, refrigerator, iron, ironing board, hairdryer, and coffee makers. <br>
        Handicapped suites are also available.</p>
<div class ="row">
    <div class="rooms-col">
        <img src="./img/bedroom1.jpg">
        <div class="layer">
            <h3>MIAMI</h3>
        </div>
    </div>

    <div class="rooms-col">
        <img src="./img/bedroom6.jpg">
        <div class="layer">
            <h3>LONDON</h3>
        </div>
    </div>

    <div class="rooms-col">
        <img src="./img/bedroom2.jpg">
        <div class="layer">
            <h3>TOKYO</h3>
        </div>
    </div>

</div>

</section>
<!------ Facilities---->
<section class= "facilities">
    <h1>Our Facilities</h1>
    <p>Check-in time: From 14:00 pm (AT local time) - 24 hour reception  <br> 
       Check out time: By 11:00 am (AT local time) <br> 
       </p>
<!-- zuerst das Sichtfenster -->
<div class="cssSlider">
 
    <!-- die inputs um den Slider zu Steuern -->
    <input type="radio" name="slider" id="slide01" checked="checked">
    <input type="radio" name="slider" id="slide02">
    <input type="radio" name="slider" id="slide03">
    <input type="radio" name="slider" id="slide04">
 
    <!-- die einzelnen Slides, hier als Liste angelegt -->
    <ul class="sliderElements">
        <li>
            <figure>
                <img src="./img/dings1.jpg" alt="" height="500" width="800">
                <figcaption>OUTDOORPOOL</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="./img/spa1.jpg" alt="" height="500" width="800">
                <figcaption>INDOORPOOL</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="./img/spa2.jpg" alt="" height="500" width="800">
                <figcaption>SPA</figcaption>
            </figure>
        </li>
        <li>
            <figure>
                <img src="./img/bar1.jpg" alt="" height="500" width="800">
                <figcaption>LOUNGE</figcaption>
            </figure>
        </li>
    </ul>
 
    <!-- Eine Steuerung -->
    <ul class="sliderControls">
        <li><label for="slide01">1</label></li>
        <li><label for="slide02">2</label></li>
        <li><label for="slide03">3</label></li>
        <li><label for="slide04">4</label></li>
    </ul>
</div>
</section> 
<!----JavaScript für Media---->


<?php
    include_once 'footer.php';
?>