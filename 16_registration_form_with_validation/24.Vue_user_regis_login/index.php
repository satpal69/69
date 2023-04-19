<?php
// set a cookie with a name, value, and expiration time
setcookie("username", "john", time() + 3600);

// set a cookie with a name, value, expiration time, path, and domain
setcookie("color", "blue", time() + 3600, "/", "example.com");

// set a cookie with a name, value, and expiration time that is only sent over HTTPS
setcookie("session_id", "abc123", time() + 3600, "/", "example.com", true, true);

// retrieve a cookie by its name
$username = $_COOKIE["username"];

// check if a cookie exists
if (isset($_COOKIE["color"])) {
  $color = $_COOKIE["color"];
  echo "Your favorite color is " . $color;
} else {
  echo "You haven't set a favorite color yet!";
}
?>
