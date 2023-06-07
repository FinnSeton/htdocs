<!DOCTYPE html>
<html>

<body>

    <?php
    $input = array(1, 2, 3, 4, 6, 7, 13, 12);
    function evenCmp($input)
    {
        return !($input & 1);
    }

    $even = array_filter($input, "evenCmp");
    $output = array_sum($even);
    print_r($output);
    ?>

</body>

</html>