<html>

<head>
    <style>
        .required {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    $naam = $email = $naamreq = $emailreq = "";
    $star = "*";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $naam = test_input($_POST["naam"]);
        $email = test_input($_POST["email"]);

        if ($naam == "") {$naamreq = "Name is required";}
        if ($email == "") {$emailreq = "Email is required";}
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <form>
        De ingevulde gegevens zijn: <br>
        Naam:
        <input type="text" name="naam" disabled value="<?php echo $naam; ?>">
        <span class="required"><?php echo $star . $naamreq; ?></span><br>
        Email:
        <input type="text" name="email" disabled value="<?php echo $email; ?>">
        <span class="required"><?php echo $star . $emailreq; ?></span><br>
    </form>
</body>

</html>
