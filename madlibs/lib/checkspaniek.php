<?php
$huisdierErr = $persoonErr = $wonenErr = $verveeltErr = $speelgoedErr = $spijbelErr = $kopenErr = $hobbyErr = "";
$huisdier = $persoon = $wonen = $verveelt = $speelgoed = $spijbel = $kopen = $hobby = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["huisdier"])) {
        $huisdierErr = "Dit vak is verplicht";
      } else {
        $huisdier = test_input($_POST["huisdier"]);
      }
    
    if (empty($_POST["persoon"])) {
        $persoonErr = "Dit vak is verplicht";
        } else {
            $persoon = test_input($_POST["persoon"]);
        }

    if (empty($_POST["wonen"])) {
        $wonenErr = "Dit vak is verplicht";
        } else {
            $wonen = test_input($_POST["wonen"]);
        }

    if (empty($_POST["verveelt"])) {
        $verveeltErr = "Dit vak is verplicht";
        } else {
            $verveelt = test_input($_POST["verveelt"]);
        }

    if (empty($_POST["speelgoed"])) {
        $speelgoedErr = "Dit vak is verplicht";
        } else {
            $speelgoed = test_input($_POST["speelgoed"]);
        }

    if (empty($_POST["spijbel"])) {
        $spijbelErr = "Dit vak is verplicht";
        } else {
            $spijbel = test_input($_POST["spijbel"]);
        }

    if (empty($_POST["kopen"])) {
        $kopenErr = "Dit vak is verplicht";
        } else {
            $kopen = test_input($_POST["kopen"]);
        }

    if (empty($_POST["hobby"])) {
        $hobbyErr = "Dit vak is verplicht";
        } else {
            $hobby = test_input($_POST["hobby"]);
        }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$everything1 = $huisdier && $persoon && $wonen && $verveelt && $speelgoed && $spijbel && $kopen && $hobby;