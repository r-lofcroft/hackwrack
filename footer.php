
<footer id="footer" class="footer ">

<div id="footer-1">

	<?php
	if(is_active_sidebar('footer-1')){
	dynamic_sidebar('footer-1');
	}
	?>

  
  <i class="fab fa-instagram"></i>
  <i class="fab fa-linkedin"></i>
  <i class="fab fa-facebook-square"></i>
  
	</div>

	<div id="footer-2">

	<?php
	if(is_active_sidebar('footer-2')){
	dynamic_sidebar('footer-2');
	}
	?>
	</div>

	<div id="footer-3">

	<?php
	if(is_active_sidebar('footer-3')){
	dynamic_sidebar('footer-3');
	}
	?>

	</div>


        
  <?php

 
  

  ?>
</footer>


<?php
wp_footer();

?>

</div>
</body>

</html>