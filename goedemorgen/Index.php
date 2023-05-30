<!DOCTYPE html>
<html>

<body>

    <?php
    date_default_timezone_set('UTC');
    $today = date("H:i");

    $t = date("H");

    echo '<div id="output">';
    if ($t < "12") {
        echo "Goede morgen!";
        $url = "morning.png";
    } elseif ($t < "18") {
        echo "Goede middag!";
        $url = "afternoon.png";
    } elseif ($t < "24") {
        echo "Goede avond!";
        $url = "evening.png";
    } elseif ($t < "6") {
        echo "Goede nacht!";
        $url = "night.png";
    }
    '</div>';
    echo '<div id="tijd">';
    echo "Het is nu $today";
    '</div>';
    ?>


</body>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');

    body {
        background-image: url('<?php echo $url; ?>');
        background-repeat: no-repeat;
        background-size: cover;
    }

    #output {
        font-family: 'Pacifico', cursive;
        color: white;
        font-size: 200%;
        width: 250px;
        position: relative;
        left: 44%;
        top: 250px;
    }
</style>

</html>