<?php
  // formspree.io
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

  <form id="form" method="POST" action="https://formspree.io/g.santosh.sunny@gmail.com">

    <div class="col-lg-6">
        <input    class="form-control"    type="text"   name="name"    id="name"     tabindex="10" placeholder="first and last name" autofocus required>
        <br>
        <input    class="form-control"    type="email"  name="email"   id="email"    tabindex="20" placeholder="valid email address" required>
        <br>
        <input    class="form-control"    type="tel"    name="phone"   id="phone"    tabindex="30" placeholder="phone number">
        <br>
        <input    class="form-control"    type="url"    name="url"     id="url"      tabindex="40" placeholder="Website">
        <br>
        <textarea class="form-control"    type="comt"   name="comment" id="comment"  tabindex="50" placeholder="comment please"  rows="5" cols="80"></textarea>
        <br>
        <input type="hidden" name="_next" value="thanks.php" />
        <br>
        <!-- <input type="text" name="_gotcha" style="display:none" />
        <br>
        <input type="hidden" name="_cc" value="another@email.com" /> -->



        <input    class="btn btn-primary" type="submit" name="submit"  id="submit"   tabindex="60" value="Submit comment">
    </div>

  </form>

</section>

</div>


<?php
  include('include/footer.php');
?>
