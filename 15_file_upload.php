<?php
// File upload

$allowed_ext = array('jpg', 'jpeg', 'png', 'gif');

// Check if form is submitted
if (isset($_POST['submit'])) {
  if (!empty($_FILES['upload']['name'])) {
    // Check the info of the file uploaded
    // print_r($_FILES);

    $file_name = $_FILES['upload']['name'];
    $file_size = $_FILES['upload']['size'];
    $file_tmp = $_FILES['upload']['tmp_name'];

    // target directory
    $target_dir = "uploads/$file_name";

    // Get file extension
    $file_ext = explode('.', $file_name);
    $file_ext = strtolower(end($file_ext));
    // echo $file_ext;

    // Validate file extension
    if (in_array($file_ext, $allowed_ext)) {
      // Validate file size up to 1MB
      if ($file_size <= 1000000) {
        move_uploaded_file($file_tmp, $target_dir);
        echo '<p style="color: green">File uploaded successfully</p>';
      } else {
        echo '<p style="color: red">File size must be less than 1MB</p>';
      }
    } else {
      $message = '<p style="color: red">Invalid file type</p>';
    }
  } else {
    $message = '<p style="color: red">Please choose a file to upload</p>';
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload</title>
</head>

<body>
  <?php echo $message ?? null; ?>
  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
    Select image to upload
    <br>
    <input type="file" name="upload">
    <br>
    <input type="submit" value="Submit" name="submit">
  </form>
</body>

</html>