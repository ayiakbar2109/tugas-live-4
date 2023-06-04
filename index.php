<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Page Title</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="css/styles.css" type="text/css" />
  </head>
  <body>
    <?php include "components/nav.php"; ?>
    <div class="header">
      <h1>My Website</h1>
      <p>A website created by me.</p>
    </div>

    <section class="row">
      <div class="side">
        <img src="assets/cat.jpg" alt="gambar kucing" width="299"/>
      </div>

      <div class="main">
        <form action="" method="post">
          Name: <input type="text" name="name" required /><br />
          E-mail: <input type="text" name="email" required /><br />
          <input type="submit" name="submit" />
        </form>
      </div>

     <?php 
     if(isset($_POST['submit'])) {
      $name = $_POST['name'];
      $email = $_POST['email'];

      echo "Name kamu adalah $name <br/>"; 
      echo "Email kamu adalah $email <br/>";
     }
     ?>
    </section>
  </body>
</html>
