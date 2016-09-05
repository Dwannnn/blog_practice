<script type="text/javascript">
  function deletepost(){
    alert('글이 삭제되었습니다.');
  }
</script>
<?php
$conn = new mysqli("localhost", "root", "ehks7984", "dwanblog");
  if ($conn->connect_errno) {
      echo "Failed to connect to MySQL: " . $conn->connect_error;
  }

$sql = "SELECT id, title, content, created FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo '<div class="col-lg-6 offset-lg-3">';
        echo $row["created"]."<br><br>".$row["title"]."<br>".$row["content"]."<br>";
      echo '<form method="POST" action="delete.php" onsubmit="deletepost()" style="text-align:right;">
          <input type="hidden" value="'.$row['id'].'" name="deleteId"><br>
          <button type="submit" class="btn btn-sm btn-danger">X</button>
      </form>
      </div>';
        }
} 
$conn->close();
?>

<!-- echo '<td><input type="submit" name="deleteItem" value="'.$row['id'].'" /></td>"'; -->
