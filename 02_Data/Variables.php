<?php
    $cost_of_dinner = 8.95;
    $cost_of_lunch = $cost_of_dinner;
    ++$cost_of_dinner;

    print $cost_of_lunch.' '.$cost_of_dinner.'<br>';

$page_header = <<<HTML_HEADER
<html>
<head><title>Menu</title></head>
<body bgcolor="#495981"> <h1>Dinner</h1>
HTML_HEADER;

$page_footer = <<<HTML_FOOTER
</body> </html>
HTML_FOOTER;

    // Concatenate numbers and strings
    $totalcost = 0.44;
    print 'The total cost is '.$totalcost.'<br>';

    //Concatenate with the combined operator
    $username = 'james'; $domain = '@example.com';
    $username .= $domain;
    print $username.'<br>';

    //Incrementor operator
    $years = 10;
    ++$years;
    print $years.'<br>';

    $email = 'jacob@example.com';
    $greeting = "Send replies to: $email";
    print $greeting;

    $page_title = 'Menu'; $meat = 'pork'; $vegetable = 'bean sprout';
print <<<MENU
<html>
<head><title>$page_title</title></head>
<body>
<ul>
<li> Barbecued $meat <li> Sliced $meat <li> Braised $meat with $vegetable
</ul>
</body>
</html>
MENU;

    //Interpolating with curly braces
    $preparation = 'Braise'; $meat = 'Beef';
    print "{$preparation}d $meat with Vegetables";
?>
