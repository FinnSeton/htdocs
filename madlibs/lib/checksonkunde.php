<?php
$kunnenErr = $opschietenErr = $getalErr = $vakantieErr = $goedErr = $slechtErr = $overkomenErr = "";
$kunnen = $opschieten = $getal = $vakantie = $goed = $slecht = $overkomen = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["kunnen"])) {
        $kunnenErr = "Dit vak is verplicht";
    } else {
        $kunnen = test_input($_POST["kunnen"]);
    }

    if (empty($_POST["opschieten"])) {
        $opschietenErr = "Dit vak is verplicht";
    } else {
        $opschieten = test_input($_POST["opschieten"]);
    }

    if (empty($_POST["getal"])) {
        $getalErr = "Dit vak is verplicht";
    } else {
        $getal = test_input($_POST["getal"]);
    }

    if (empty($_POST["vakantie"])) {
        $vakantieErr = "Dit vak is verplicht";
    } else {
        $vakantie = test_input($_POST["vakantie"]);
    }

    if (empty($_POST["goed"])) {
        $goedErr = "Dit vak is verplicht";
    } else {
        $goed = test_input($_POST["goed"]);
    }

    if (empty($_POST["slecht"])) {
        $slechtErr = "Dit vak is verplicht";
    } else {
        $slecht = test_input($_POST["slecht"]);
    }

    if (empty($_POST["overkomen"])) {
        $overkomenErr = "Dit vak is verplicht";
    } else {
        $overkomen = test_input($_POST["overkomen"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$everything = $kunnen && $opschieten && $getal && $vakantie && $goed && $slecht && $overkomen;