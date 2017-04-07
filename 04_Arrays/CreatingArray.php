<?php
    $vegetables = array('corn' => 'yellow',
                        'beet' => 'red',
                        'carrot' => 'orange');

    // Using short array syntax
    $dinner = [0 => 'Sweet Corn and Asparagus',
               1 => 'Lemon Chicken',
               2 => 'Braised Bamboo Fungus'];

    // Creating an array element by element
    $computers['trs-80'] = 'Radio Shack';
    $computers[2600] = 'Atari';
    $computers['Adam'] = 'Coleco';

    // Creating numeric arrays with array()
    $dinner1 = array('Sweet Corn and Asparagus', 'Lemon Chicken',
                    'Braised Bamboo Fungus');
    print "I want $dinner1[0] and $dinner1[1]<br>";

    // Adding elements with []
    $lunch[] = 'Dried Mushrooms in Brown Sauce';
    $lunch[] = 'Pineapple and Yu Fungus';
    print "I want $lunch[0] and $lunch[1]<br>";

    $dinner[] = 'Flank Skin with Spiced Flavor';
    print "I want $dinner[3]<br>";

    // Finding the size of an array
    $dishes = count($dinner);
    print "There are $dishes things for dinner<br>";
?>
