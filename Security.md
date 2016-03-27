# Introduction #

Gelato development team and community does its best to be address security matters in a timely fashion.  In order to maintain a high standard of security, Gelato requests that all developers


# Details #

  * Please limit the number of pages that web browser must interact with.  Please attempt to send all HTTP REQUESTS to index.php or admin/index.php.  All pages that do receive direct HTTP REQUESTS should start with this code:
`if(!defined('entry')) define('entry', true);`
  * All pages that do not have direct http requests sent to them should start with this line of code:
` if(!defined('entry') || !entry) die("Not a valid page");`
  * If HTTP REQUEST variables are going to end up in a SQL query, please add functions to validate the string to the best of your ability.
  * Please require\_once('entry.php') and use the $db, $user, $tumble as globals on pages you code
  * There is a forthcoming sanitizing XSS function.  Please use it around all HTTP REQUESTS





