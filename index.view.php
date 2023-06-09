<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;700&display=swap" rel="stylesheet">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Pagination</title>
</head>
<body>
  <div class="container">
    <h1>Articles</h1>
    <section class="articles">
      <ul>
        <li>1. Lorem ipsum dolor sit amet consectetur adipisicing.</li>
        <li>2. Lorem ipsum dolor sit amet consectetur adipisicing.</li>
        <li>3. Lorem ipsum dolor sit amet consectetur adipisicing.</li>
      </ul>
    </section>

    <section class="pagination">
      <ul>
        <li class="disabled">&laquo;</li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
    </section>
  </div>
</body>
</html>