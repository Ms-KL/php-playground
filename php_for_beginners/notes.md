# The PHP Handbook: Reference Notes

## Resource:

- [The PHP Handbook - Tutorial](https://www.freecodecamp.org/news/the-php-handbook/)

## Notes:

### _[Introduction to PHP](https://www.freecodecamp.org/news/the-php-handbook/#introduction-to-php)_

- use `PHP` to add interactivity to `HTML`
- user as Web App engine that creates `HTML` pages dynamically and sends to browser
- scalable
- Powered by `PHP`: FB, Wikipedia, Etsy, Slack

### _[What Kind of Language is PHP?](https://www.freecodecamp.org/news/the-php-handbook/#what-kind-of-language-is-php)_

- Programming languages have different types:

  - **interpreted vs compiled**
    - interpreted: uses interpreter to interpret instructions written in language when it's executed (1-step)
      - eg: `PHP`
      - hard to find bugs before runtime (no compiler step for checking)
      - more flexible
    - compiled: generates executable program that you run (2-step process)
      - eg: `C`, `Go`, `Swift`
      - easier to catch bugs @ compile time, before runtime
  - **strongly vs loosely typed**
    - strongly: need to declare types of variables
      - eg: `Swift`, `Go`, `C`, `Java`
    - loosely: (weakly) don't need to declare types of variables
      - eg: PHP
  - **dynamically vs statically typed**
    - dynamically: types of variables checked @ runtime
      - eg: `PHP`
    - statically: types of variables checked before code is executed (part of compiler 2-step process)

- `PHP`:
  - scripting language
  - interpreted language (1-step)
  - loosely typed (don't declare variable types)
  - dynamically typed (variable types checked @ runtime)
  - bugs: harder to find before runtime due to 1-step process
  - written internally as `C` (compiled/statically typed)
  - similar to `JS`
  - supports OOP & Functional Programming

### _[How to Setup PHP](https://www.freecodecamp.org/news/the-php-handbook/#how-to-setup-php)_

- PHP Server:
  - `PHP` run by HTTP Server (responds to HTTP requests made by browser)
  - access URL via browser --> HTTP server responds w/ HTML
  - Server: Apache or NGINX
  - Database needed for non-trivial: MySQL
  - Suggestion: Use [MAMP](https://www.mamp.info/en/windows/) (combines above)
    - ✅ install PHP using MAMP
    - [MAMP Documentation](https://documentation.mamp.info/en/MAMP-Windows/Installation/index.html)
    - NOTE:
      - to use: http://localhost:8888/
        - MAMP app - preferences - ports - 80 & 3306 option
      - to use: http://localhost/MAMP/
        - MAMP app - preferences - ports - MAMP Default
  - BUG: "To run this application you must install .NET Core.
    - Troubleshooting on [The Windows Club](https://www.thewindowsclub.com/to-run-this-application-you-must-install-net-core)
  - to find the index.php on display in http://localhost:8888/:
    - navigate to: `C:/MAMP/htdocs`

### _[How to code your first PHP program](https://www.freecodecamp.org/news/the-php-handbook/#how-to-code-your-first-php-program)_

1. open `C:/MAMP/htdocs/index.php`
2. move to appropriate directory: <br> eg: `C:\GIT\ms-kl\php-playground\php_for_beginners\index.php`
3. MAMP -> Preferences -> Server -> Change Document root to appropriate directory
4. Start Server and View: http://localhost:8888/ or http://localhost/MAMP/

#### What is happening?

- Via MAMP:

  - Apache HTTP Server is listening on port 8888 on localhost
  - HTTP request is made: what is the content of the route /baseurl ? (eg: index.html)
  - **if `index.html`, else `index.php`:**
    - Apache configured to respond with index.html --> doesn't exist in folder
    - Apache also configured to work with PHP and will search for index.php instead
  - index.php code executed on the server before Apache sends back to browser
  - page is still technically html
  - can embed php in html

  ```html
  Hello
  <?php
    echo 'World';
    ?>

  is the same as:

  <?php
    echo 'Hello World';
    ?>
  ```
