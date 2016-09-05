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
  <title>돤의 글</title>
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
            <br>
            </h5>
          </div>
      </div>

<!-- blog post -->
      <div class="row">
          <div class="col-lg-6 offset-lg-3" id="writing_form">
            <script>
            function newpost() {
                alert('글이 등록되었습니다.');
            }
            </script>
            <form method="POST" action="1.php" onsubmit="newpost()">
              <div class="form-group">
                <label>제목</label>
                <input type="title" class="form-control" id="title_form" aria-describedby="emailHelp" name="title1">
                <small id="titleHelp" class="form-text text-muted">최대 255자까지 지원됩니다.</small>
              </div>
              <div class="form-group">
                <label>내용</label>
                <textarea class="form-control" id="content_form" rows="5" name="content1"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">글쓰기</button>
            </form>
          </div>

          <?php
          include '2.php'
          ?>
      </div>

    </div>
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>
  </body>
</html>
