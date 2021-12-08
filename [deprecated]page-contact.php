<?php
/* Template Name: Contact Us */
get_header(); ?>
<div id="primary">
  <div id="content" role="main">
    <?php
    if (isset($_POST['submit'])) {
      $flag = 1;
      if ($_POST['yourname'] == '') {
        $flag = 0;
        echo "Please Enter Your Name<br>";
      }
      if ($_POST['email'] == '') {
        $flag = 0;
        echo "Please Enter E-mail<br>";
      } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", $_POST['email'])) {
        $flag = 0;
        echo "Please Enter Valid E-Mail<br>";
      }
      if ($_POST['phonenumber'] == '') {
        $flag = 0;
        echo "Please Enter Phone number<br>";
      }
      if ($_POST['message'] == '') {
        $flag = 0;
        echo "Please Enter Message";
      }
    }
    ?>


    <div class="contactstatement">Contact us to know more about our services</div>
    <div class="form-container">
      <form method="post" id="contactus_form">
        <div class="contactitem">
          <label>Name</label>
          <input type="text" class="contactform" name="yourname" placeholder="Name" id="yourname" rows="1" value="" />
        </div>
        <div class="contactitem">
          <label>Email</label>
          <input type="text" class="contactform" name="email" placeholder="Email" id="email" rows="1" value="" />
        </div>
        <div class="contactitem">
          <label>Phone number</label>
          <input type="text" class="contactform" name="phonenumber" placeholder="Phone number" id="phonenumber" rows="1" value=""></p>
        </div>
        <div class="contactitem">
          <label>Message</label>
          <textarea class="contactform" name="message" placeholder="Write message here" id="message"></textarea>
          <div class="agreestatement1"> <span class="agreestatement"></span> I agree to HackWrack processing my data.</div>
        </div>
        <input type="submit" name="submit" id="submit" value="Submit" />
      </form>
    </div>
  </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>