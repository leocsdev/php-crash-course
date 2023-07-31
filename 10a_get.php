<?php
// --- $_GET Superglobal
// We can pass data through urls and forms using the $_GET superglobal.

if (isset($_GET['name']) && isset($_GET['age'])) {
  echo $_GET['name'];
  echo $_GET['age'];
}

?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Leo&age=42">Click Me</a>

<!-- By Default, method is GET -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div>
    <label for="name">Name:</label>
    <input type="text" name="name">
  </div>
  <div>
    <label for="age">Age:</label>
    <input type="text" name="age">
  </div>
  <input type="submit" value="Submit" name="submit">
</form>