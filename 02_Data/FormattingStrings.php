<?php
    $price = 5; $tax = 0.075;
    printf('The dish cost $%.2f<br>', $price * (1 + $tax));

    $zip = '6520';
    $month = 2;
    $day = 6;
    $year = 2007;
    printf("The zip is %05d and the date is %02d/%02d/%d<br>", $zip, $day, $month, $year);

    $min = -40; $max = 40;
    printf("The minimum is %+d and the maximum is %+d degrees Celsius<br>", $min, $max);

    print strtolower('Beef, ChicKen, PORk duCK').'<br>';
    print strtoupper('Beef, ChicKen, PORk duCK').'<br>';

    print ucwords(strtolower('JOHN FRANKENHEIMER')).'<br>';

    $greeting = 'Hello world!, this is a test for the substr() function!';
    print substr($greeting, 0, 12).'<br>';
    print substr($greeting, -41, 41).'<br>';

    $html = '<span class="{class}">Fried Bean Curd<span>
    <span class="{class}">Oil-Soaked Fish</span>';
    print str_replace('{class}', $zip, $html).'<br>';
    print str_replace('substr', 'str_replace', $greeting).'<br>';
?>
