<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="imp/style.css">
    <?php include 'imp/footer.php'; ?>
    <?php include 'imp/buttons.php'; ?>
    <?php include 'lib/checksonkunde.php'; ?>
</head>

<body>
    <?php
    if ($everything != "") {
        echo "<br>";
        echo "Er zijn veel mensen die niet kunnen ", $kunnen, ". <br>";
        echo "Neem nou ", $opschieten, " zelfs met de hulp van een ", $vakantie, " of zelfs ", $getal, " kan hij niet ", $kunnen, ". <br>";
        echo "Dat heeft niet te maken met gebrek aan ", $goed, ". ";
        echo "Maar met een teveel aan ", $slecht, ". <br>";
        echo "Teveel ", $slecht, " leidt tot ", $overkomen, " en dat is niet goed als je wilt ", $kunnen, ". <br>";
        echo "Helaas voor ", $opschieten, ".";
    } else {
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            Wat zou je graag willen kunnen? <input type="text" name="kunnen" value="<?php echo $kunnen; ?>">
            <span class="error">*
                <?php echo $kunnenErr; ?>
            </span> <br><br>

            Met welk persoon kun je goed opschieten? <input type="text" name="opschieten"
                value="<?php echo $opschieten; ?>">
            <span class="error">*
                <?php echo $opschietenErr; ?>
            </span> <br><br>

            Wat is je favoriete getal? <input type="text" name="getal" value="<?php echo $getal; ?>">
            <span class="error">*
                <?php echo $getalErr; ?>
            </span> <br><br>

            Wat heb je altijd bij je als je op vakantie bent? <input type="text" name="vakantie"
                value="<?php echo $vakantie; ?>">
            <span class="error">*
                <?php echo $vakantieErr; ?>
            </span> <br><br>

            Wat is je beste persoonlijke eigenschap? <input type="text" name="goed" value="<?php echo $goed; ?>">
            <span class="error">*
                <?php echo $goedErr; ?>
            </span> <br><br>

            Wat is je slechtste persoonlijke eigenschap? <input type="text" name="slecht" value="<?php echo $slecht; ?>">
            <span class="error">*
                <?php echo $slechtErr; ?>
            </span> <br><br>

            Wat is het ergste dat je kan overkomen? <input type="text" name="overkomen" value="<?php echo $overkomen; ?>">
            <span class="error">*
                <?php echo $overkomenErr; ?>
            </span> <br><br>

            <input type="submit">
        </form>
    <?php } ?>
</body>

</html>
