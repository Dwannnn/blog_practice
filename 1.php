<?php
$conn = new mysqli("localhost", "root", "ehks7984", "dwanblog");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
  }
$prepare = $conn->prepare("INSERT INTO posts(title, content) VALUES(?,?)");
$prepare->bind_param("ss", $_POST['title1'], $_POST['content1']);
$prepare->execute();

$conn->close();
header('Location:/practice/blog_prac1/index.php');
exit;

?>
