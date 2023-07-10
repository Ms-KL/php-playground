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
  - BUG: "To run this application you must install .NET Core.
    - Troubleshooting on [The Windows Club](https://www.thewindowsclub.com/to-run-this-application-you-must-install-net-core)
  -
