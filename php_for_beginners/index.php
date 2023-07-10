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

    // Logical AND Operators
    // && "and"
    // any fail = false

    true && true; // true
    true && false; // false
    false && true; // false
    false && false; // false
    
    true and true; // true
    true and false; // false
    false and true; // false
    false and false; // false

    // Logical OR Operators
    // || "or"
    // any pass = true

    true || true; // true
    true || false; // true
    false || true; // true
    false || false; // false

    true or true; // true
    true or false; // true
    false or true; // true
    false or false; // false

    // Logical XOR (one of the two options are true, but not both)

    true xor true; // false (because both are true)
    true xor false; // true (because one is true)
    false xor true; // true (because one is true)
    false xor false; // false (because none are true)

    // if not true
    $test = true;
    !$test; // if test is not true, print true, else false

    // expressions
    1 > 2 || 2 > 1; // answer: true (because false or true --> || any true to pass)
    1 !== 2 && 2 > 2; // answer: false (because true and false --> && any false to fail)

    // unary operators
    // the ++ operator adds 1 to a variable
    // to add more to the variable, use += 2 (adds 2 to the variable)
    $age = 20;
    $age++; 
    var_dump($age); // int(21)

    // minus 2
    $age-= 2;
    var_dump($age); // int(19)
    ?>

<h2>Strings: </h2>

<?php
    // double versus single quotes & embedded variables in strings
    $name = "kristy";
    $name = 'Kristy';
    $test = 'an example';
    $exampleDouble = "$name, this is $test"; // Kristy, this is an example

    echo $exampleDouble, '<br>';
    $exampleSingle = '$name, this is $test'; // $name, this is $test
    echo $exampleSingle, '<br>';

    $example1 = "This is a line\nThis is a line";
    /*
    This is a line
    This is a line
    */
    echo $example1, '<br>';
    $example2 = 'This is a line\nThis is a line'; // This is a line\nThis is a line
    echo $example2, '<br>';
    
    // concatenate = .
    $firstName = 'Kristy';
    $lastName = 'Leigh';

    $fullName = $firstName . ' ' . $lastName; // Kristy Leigh
    echo "full name = $fullName <br>";

    // get length = strlen()
    $name = 'Kristy';
    echo strlen($name), '<br>'; // 6

    // get sub-string
    echo substr($name, 3), '<br>'; // sty - start at position 3 and return the remaining letters
    echo substr($name, 0), '<br>'; // Kristy - 0 is first index
    echo substr($name, 2, 2), '<br>'; // is - start at position 2 and return 2 letters
    
    // replace letters (replace x with y in variable)
    echo str_replace('i', 'u', $name), '<br>'; // "Krusty"

    // assign to new variable
    $newName = str_replace('sty', 'nchy', $name); // "Krunchy"
    echo $newName, '<br>';

    /* more built in string functions:
    https://www.php.net/manual/en/book.strings.php 
        trim() strips white space at the beginning and end of a string
        strtoupper() makes a string uppercase
        strtolower() makes a string lowercase
        ucfirst() makes the first character uppercase
        strpos() finds the firsts occurrence of a substring in the string
        explode() to split a string into an array
        implode() to join array elements in a string
    */

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