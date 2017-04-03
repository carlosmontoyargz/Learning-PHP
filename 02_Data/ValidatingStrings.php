<?php
    $str = " 23422 ";
    $zipcode = trim($str);
    $ziplength = strlen($zipcode);

    print "$zipcode $ziplength";

    if ($zipcode = "23422")
    {
        print '<br>El código postal es correcto';
    }

    if (strcasecmp("HolA", "hOla") == 0)
    {
        print '<br>Las cadenas son iguales<br>';
    }
 ?>
