<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="styles.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">

  <title>Pagination</title>
</head>
<body>
  <div class="container">
    <h1>Articles</h1>
    <section class="articles">
      <ul>
        <?php foreach ($articles as $article): ?>
          <li><?php echo $article['id'] . '. ' . $article['article'] ?></li>
        <?php endforeach; ?>
      </ul>
    </section>

    <section class="pagination">
      <ul>
        <?php if ($page == 1): ?>
          <li class="disabled">&laquo;</li>
        <?php else: ?>
          <li><a href="?page=<?php echo $page - 1 ?>">&laquo;</a></li>
        <?php endif; ?>

        <?php 
          for ($i=1; $i <= $numberPages; $i++) { 
            if ($page == $i) {
              echo "<li class='active'><a href='?page=$i'>$i</a></li>";
            } else {
              echo  "<li><a href='?page=$i'>$i</a></li>";
            }
          }
        ?>

        <?php if ($page == $numberPages): ?>
          <li class="disabled">&raquo;</li>
        <?php else: ?>
          <li><a href="?page=<?php echo $page + 1 ?>">&raquo;</a></li>
        <?php endif; ?>
      </ul>
    </section>
  </div>
</body>
</html>