<?php
  include('include/header.php');
?>

<img class="d-block w-100" src="images/light-car-inside-black.jpg" height="300px" alt="default">

<?php
  include('include/navbar.php');
?>

</header>

<div class="main container">
  <section>

  <h1>Contact</h1>

  <form id="form" method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

    <p><label for="name">Name:</label></p>
    <p><input type="text" name="name" id="name" tabindex="10" placeholder="first and last name" autofocus required></p>

    <p><label for="email">Email:</label></p>
    <p><input type="email" name="email" id="email" tabindex="20" placeholder="valid email address" required></p>

    <p><label for="phone">Phone:</label></p>
    <p><input type="phone" name="phone" id="phone" tabindex="30" placeholder="valid phone number"></p>

    <p><label for="url">Website:</label></p>
    <p><input type="url" name="url" id="url" tabindex="40"></p>

    <p><label for="comment">Comment:</label></p>
    <p><textarea name="comment" id="comment" tabindex="70" cols="40" rows="5"></textarea></p>

    <p><input type="submit" name="submit" id="submit" tabindex="80" value="Submit comment"></p>
  </form>

</section>

<pre>
  <?php
  if ($_GET) {
    echo "content fo the $_GET array: <br> ";
    print_r($_GET);
  }elseif ($_POST) {
    echo "content fo the $_POST array: <br> ";
    print_r($_POST);
  }
 ?>
</pre>


</div>


<?php
  include('include/footer.php');
?>
