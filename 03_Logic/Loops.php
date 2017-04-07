<?php

    // Printing select menu
    $i = 1;
    print '<select name="people">';
    while ($i <= 10)
    {
        print "<option>$i</option>\n";
        $i++;
    }
    print '</select>';

    //Printing a <select> menu with for()
    print '<select name="people">';
    for ($i = 1; $i <= 10; $i++)
    {
        print "<option>$i</option>\n";
    }
    print '</select>';

    //Multiple expressions in for()
    print '<select name="doughnuts">';
    for ($min = 1, $max = 10; $min < 50; $min += 10, $max += 10)
    {
        print "<option>$min - $max</option>\n";
    }
    print '</select>';
?>
