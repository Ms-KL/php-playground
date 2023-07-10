<h1> Exploring PHP within HTML </h1>

This is HTML
<b>
  <?php
    echo 'This is embedded PHP';
    ?>
</b>

<h2>Variables:</h2>
    <?php
        // initialise variable:
        $name = 'Kristy';
        $age = 36;

        // print the variable and its type 
        // note: within the brackets, string prints the len, int prints the value)
        var_dump($name); // string(6) "Kristy"
        echo '<br>';
        var_dump($age); // int(36)
        echo '<br>';

        // reassign variable with different type
        $age = 'fifty';
        var_dump($age); // string(5) "fifty"
        ?>

<h2>Operators: </h2>

<?php
    // arithmetic operators
    // + - * / % **
    $base = 20;
    $height = 10;
    $area = $base * $height;
    var_dump($area); // int(200)

    // comparison operators
    // < > <= >= ==
    2 < 1; // false
    2 > 1; // true
    2 <= 1; // false
    2 >= 1; // true
    2 == 1; // false

    // EQUAL + IDENTICAL
    // equal versus identical
    // equal checks only the value
    // identical checks the value and the type (int versus string)
    1 == '1'; // true (equal)
    1 === '1'; // false (identical)

    // NOT EQUAL
    1 != 1; // false (value is true)
    1 != '1'; // false (value is true)
    1 != 2; // true (value is false)

    // NOT IDENTICAL
    1 !== 1; // false (value and type are true)
    1 !== '1'; // true (value is true, type is false)
    1 !== 2; // true (value and type are false)

    
    ?>


<!-- ----------------
PHP Language Basics:
https://www.freecodecamp.org/news/the-php-handbook/#php-language-basics

How variables work in php: 
* starts with a $ sign
* followed by an identifier: a letter or underscore
* can contain letters, numbers, underscores, and dashes
* can reassign variables and dynamically change the type (eg: int to string)
* caseSensitive: $name is different to $Name
* camelCase: $firstName not $first_name

PHP Data Types:
* String: 'Kristy' or "Kristy"
* Integer: 36
* Float: 3.14
* Boolean: true or false
* Array: ['Kristy', 36, true]
* Object: {name: 'Kristy', age: 36, isFemale: true}
* NULL: null
-->