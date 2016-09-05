<?php
$conn = new mysqli("localhost", "root", "ehks7984", "dwanblog");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
  }

$id = $conn->real_escape_string($_POST['deleteId']);
$sql = "DELETE FROM posts WHERE id=('$id')";
  if ($conn->query($sql) === TRUE) {
      header('Location:/practice/blog_prac1/index.php');
      exit;
      $conn->close();
  } else {
      echo "오류: " . $conn->error;
  }
?>
