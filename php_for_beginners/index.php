<h1> Exploring PHP within HTML </h1>

<h2>This is HTML</h2>
<h2>
  <?php
    echo 'This is embedded PHP';
    ?>
</h2>

Variables:<br>
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