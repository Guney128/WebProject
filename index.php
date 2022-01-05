<?php
    include_once 'header.php';
?>

<div class="text-box">
    <h1> HOTEL WEBSITE </h1>
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br> 
        sed diam nonumy eirmod tempor invidunt ut labore et de.
    </p>
    <a href=""class="hero-btn">Visit us to know more! </a>
</div>

        </section>

<?php
//news
    require('includes/dbh.inc.php');
    $stmt = $mysql->prepare("SELECT * FROM news ORDER BY shared_at DESC LIMIT 5");
    $stmt->execute();
    $count = $stmt->rowCount();


    if ($count == 0){
        echo "No news where found.";
    } else {
        while ($row = $stmt->fetch()){
            ?>
            <h1><?php echo $row["heading"] ?></h1>
            <p><?php echo substr($row["caption"], 0, 300) ?></p>
            <img src='".$row [$img_dir']>
            <p><?php echo date("d.m.Y H:i", $row["shared_at"]) ?></p>
            <?php
        }
    }
?>


 <!----suites oder news idk------>       
<section class= "suites">
    <h1>Suites We Offer</h1>
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>

<div class="row">
<div class="suites-col">
    <h3>SUITE I</h3>
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br> 
        sed diam nonumy eirmod tempor invidunt ut labore et de.</p>
</div>
<div class="suites-col">
    <h3>SUITE II</h3>
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br> 
        sed diam nonumy eirmod tempor invidunt ut labore et de.</p>
</div>
<div class="suites-col">
    <h3>SUITE III</h3>
    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br> 
        sed diam nonumy eirmod tempor invidunt ut labore et de.</p>
</div>

</div>
<!-----Rooms----->
<section class= "rooms">
    <h1>Our Rooms</h1>
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br> 
        sed diam nonumy eirmod tempor invidunt ut labore et de.</p>
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
    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, <br> 
        sed diam nonumy eirmod tempor invidunt ut labore et de.</p>
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