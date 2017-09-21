<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'phone', 'url', 'comments'];
    $required = ['name', 'email', 'phone'];
    $to = 'Santosh <g.santosh.sunny@gmail.com>';
    $subject = 'Contact from B-interactive';
    $headers = [];
    $headers[] = 'From: stylishsarat@gmail.com';
    $headers[] = 'Cc: another@example.com';
    $headers[] = 'Content-type: text/plain; charset=utf-';
    $authorized = null;
    require './include/process_mail.php';
    if ($mailSent){
      header('Location: thanks.php');
      exit;
    }
}
?>

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

<?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
<p class="warning">Sorry, your mail couldn't be sent.</p>
<?php elseif ($errors || $missing) : ?>
<p class="warning">Please fix the item(s) indicated</p>
<?php endif; ?>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">


    <p><label for="name">Name:
        <?php if ($missing && in_array('name', $missing)) : ?>
            <span class="warning">Please enter your name</span>
        <?php endif; ?>
    </label></p>
    <p><input type="text" name="name" id="name" autofocus required></p>

    <p><label for="email">Email:
        <?php if ($missing && in_array('email', $missing)) : ?>
            <span class="warning">Please enter your email address</span>
        <?php elseif (isset($errors['email'])) : ?>
            <span class="warning">Invalid email address</span>
        <?php endif; ?>
    </label></p>
    <p><input type="email" name="email" id="email" required></p>

    <p><label for="phone">Phone:
          <?php if ($missing && in_array('phone', $missing)) : ?>
              <span class="warning">Please enter your Phone number</span>
          <?php endif; ?>
      </label></p>
      <p><input type="phone" name="phone" id="phone" required></p>

      <p><label for="url">Website:</label></p>
      <p><input type="url" name="url" id="url"></p>

      <p><label for="comments">Comments:</label></p>
      <p><textarea name="comments" id="comments"></textarea></p>

  <p><input type="submit" name="send" id="send" value="Send Comments"></p>
</form>

</section>


</div>


<?php
  include('include/footer.php');
?>
