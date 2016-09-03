<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/css/bootstrap.min.css" integrity="sha384-MIwDKRSSImVFAZCVLtU0LMDdON6KVCrZHyVQQj6e8wIEJkW4tvwqXrbMIya1vriY" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="styles.css">

  </head>
  <body>
    <div class="container">
      <!-- main part -->
      <div class="row">
          <div class="col-lg-6 offset-lg-3" id="main_paragraph">
            <h5>
            바쁘게 살아가는 건 나쁜 게 아니다. <br>
            하지만, 마냥 좋은 것만도 아니다. <br>
            중요한 건 중심에 '나’가 있는 것. <br>
            <i>과연 나는 오늘 주체적이었는가?</i>
            <br> <br>
            </h5>
          </div>
      </div>

      <!-- blog post -->
      <?php
        // connect to mysql
        $conn = new mysqli("localhost", "root", "ehks7984", "dwanblog");
          if ($conn->connect_errno) {
              echo "Failed to connect to MySQL: " . $conn->connect_error;
          }

        // create table
        $sql = "CREATE TABLE table1 (
          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
          firstname VARCHAR(30) NOT NULL,
          lastname VARCHAR(30) NOT NULL,
          email VARCHAR(50),
          reg_date TIMESTAMP
          )";

          if ($conn->query($sql) === TRUE) {
              echo "Table MyGuests created successfully";
          } else {
              echo "Error creating table: " . $conn->error.'<br>';
          }

        // insert data
        $sql = "INSERT INTO table1 (firstname, lastname, email)
          VALUES ('dwan', 'kim', 'dwannn27@gmail.com')";

          if ($conn->query($sql) === TRUE) {
              echo "New record created successfully <br>";
          } else {
              echo "Error: " . $sql . "<br>" . $conn->error;
          }

        // prepare and insert data
        $stmt = $conn->prepare("INSERT INTO table1 (firstname, lastname, email) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $firstname, $lastname, $email);

        // set parameters and execute
        $firstname = "John";
        $lastname = "Doe";
        $email = "john@example.com";
        $stmt->execute();

        $firstname = "Mary";
        $lastname = "Moe";
        $email = "mary@example.com";
        $stmt->execute();

        $firstname = "Julie";
        $lastname = "Dooley";
        $email = "julie@example.com";
        $stmt->execute();

        echo "New records created successfully";

        $stmt->close();

      $conn->close();


      /* for($i = 0; $i < 5; $i++){
          echo file_get_contents("post.html").$i;
      }
      */
      ?>
    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
  </body>
</html>
