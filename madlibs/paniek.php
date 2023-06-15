<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="imp/style.css">
    <?php include 'imp/footer.php'; ?>
    <?php include 'imp/buttons.php'; ?>
    <?php include 'lib/checkspaniek.php'; ?>
</head>

<body>
    <?php
    if ($everything1 != "") {
        echo "<br>";
        echo "Er heerst paniek in het koninkrijk ", $wonen, ". <br>";
        echo "Koning ", $spijbel, " is ten einde raad en als koning ", $spijbel, " ten einde raad is, dan roept hij zijn ten-einde-raadsheer ", $persoon, ". <br> <br>";
        echo '"', $persoon, '! Het is een ramp! Het is een schande!"', "<br>";
        echo '"Sire, Majesteit. Uwe Luidruchtigheid, wat is er aan de hand?" <br>';
        echo '"Mijn ', $huisdier, ' is verdwenen! Zo maar, zonder waarschuwing. En ik had net ', $speelgoed, ' voor hem gekocht" <br>';
        echo '"Majesteit, uw ', $huisdier, ' komt vast vanzelf weer terug?" <br>';
        echo '"Ja, da`s leuk en aardig, maar hoe moet ik in de tussentijd ', $hobby, ' leren?" <br>';
        echo '"Maar Sire, daar kunt u toch uw ', $kopen, ' voor gebruiken." <br>';
        echo '"', $persoon, ', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had." <br>';
        echo '"', $verveelt, ', Sire"';
    } else {
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="huisdier"
                value="<?php echo $huisdier; ?>">
            <span class="error">*
                <?php echo $huisdierErr; ?>
            </span> <br><br>

            Wie is de belangrijkste persoon in je leven? <input type="text" name="persoon" value="<?php echo $persoon; ?>">
            <span class="error">*
                <?php echo $persoonErr; ?>
            </span> <br><br>

            In welk land zou je willen wonen? <input type="text" name="wonen" value="<?php echo $wonen; ?>">
            <span class="error">*
                <?php echo $wonenErr; ?>
            </span> <br><br>

            Wat doe je als je je verveelt? <input type="text" name="verveelt" value="<?php echo $verveelt; ?>">
            <span class="error">*
                <?php echo $verveeltErr; ?>
            </span> <br><br>

            Met welk speelgoed speel je als kind het meest? <input type="text" name="speelgoed"
                value="<?php echo $speelgoed; ?>">
            <span class="error">*
                <?php echo $speelgoedErr; ?>
            </span> <br><br>

            Bij welk docent spijbel jij het liefst? <input type="text" name="spijbel" value="<?php echo $spijbel; ?>">
            <span class="error">*
                <?php echo $spijbelErr; ?>
            </span> <br><br>

            Als je 100 Duizend euro had wat zou je dan kopen? <input type="text" name="kopen" value="<?php echo $kopen; ?>">
            <span class="error">*
                <?php echo $kopenErr; ?>
            </span> <br><br>

            Wat is je favoriete hobby? <input type="text" name="hobby" value="<?php echo $hobby; ?>">
            <span class="error">*
                <?php echo $hobbyErr; ?>
            </span> <br><br>

            <input type="submit">
        </form>
    <?php
    }
    ?>
</body>

</html>
