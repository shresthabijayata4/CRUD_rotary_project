<!DOCTYPE html>
<html>
<head>
	<title>index page</title>
	<link rel="stylesheet"  href="<?php echo base_url('assets/css/style.css');?>">
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url('assets/js/script.js');?>"></script>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
 
</head>
<body style="font-family: Roboto;">
	

	<?php 
		$this->load->view('menu');
		echo html_entity_decode($list->Body);
        $this->load->view('footer');
		
        

    ?>


<script>
		jQuery(document).ready(function(){
			jQuery('.menu .menuitem>a').on('click',function () {
				// e.preventDefault();
		
				var target = this.hash,
				jQuerytarget = jQuery(target);
		
			jQuery('html, body').stop().animate({
				'scrollTop': jQuerytarget.offset().top-170
				}, 900, 'swing', function () {
				window.location.hash = target;
				});
			});
		});
	</script>
	<script>
		jQuery(document).ready(function(){
			jQuery('.walpaper .button1>a').on('click',function () {
				// e.preventDefault();
		
				var target = this.hash,
				jQuerytarget = jQuery(target);
		
			jQuery('html, body').stop().animate({
				'scrollTop': jQuerytarget.offset().top-170
				}, 900, 'swing', function () {
				window.location.hash = target;
				});
			});
		});
	</script>

</body>
</html>                                 