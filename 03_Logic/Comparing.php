<?php
    // elseif
    $logged = false; $messages = true;
    if ($logged)
    {
        print 'Hola usuario';
    }
    elseif ($messages)
    {
        print 'Hola extraño, tienes mensajes nuevos';
    }
    else {
        print 'Hola extraño, no tienens mensajes nuevos';
    }
    print '<br>';

    //Comparing floating-point numbers
    if (abs($price1 = 34.23 - $price2 = 34.23) < 0.00001)
        print 'The prices are equal<br>';

    // Comparing using dictionary order
    if ('x54321' < 'x5678')
        print 'The string x54321 is not greater than the string x5678<br>';
    // Comparing using numerical number
    if ('54321' > '5678')
        print '54321 is greater than 5678<br>';
    // These values are compared using numeric order
    if ('6 pack' < 55)
        print 'The string "6 pack" is less than the number 55<br>';

    // Comparing strings with strcmp()
    if (strcmp('x54321', 'x5678') < 0)
        print 'The string "x54321" is less than the string "x5678"<br>';

    // Comparing numeric strings works like < and >, not like strcmp() PHP 7
    /*  $x = '6 pack' <=> '55 card stud';
    if ($x > 0)
        print 'The string "6 pack" is greater than the string "55 card stud".';
    elseif ($x < 0)
        print 'The string "6 pack" is less than the string "55 card stud".';
    */

    //Logical operators
    $meal = 'breakfast';
    if (($meal == 'breakfast') || ($dessert == 'souffle'))
        print "Time to eat some eggs<br>";
?>
