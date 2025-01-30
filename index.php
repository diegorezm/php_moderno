<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/style.css">
  <title>Exercise Index</title>
</head>

<body>
  <div class="container">
    <h1 class="title">Exercise Index</h1>
    <ul class="exercise-list">
      <?php
      $files = scandir("./");
      if ($files !== false && count($files) > 0) {
        foreach ($files as $file) {
          if ($file !== '.' && $file !== '..' && substr($file, 0, 2) == "ex") {
            echo "<li class='exercise-item'><a class='btn btn-primary' href='" . $file . "'>" . $file . "</a></li>";
          }
        }
      } else {
        echo "<li class='exercise-item'>No exercises found.</li>";
      }
      ?>
    </ul>
  </div>
</body>

</html>
