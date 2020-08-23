<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body>

	<?php echo form_open('users/save'); 


	echo form_label('First name:');
	echo form_input('fname');
	echo "<br>";

	echo form_label('Middle name:');
	echo form_input('mname');
	echo "<br>";

	echo form_label('Last name:');
	echo form_input('lname');
	echo "<br>";

	echo form_label('Nickname:');
	echo form_input('nick');
	echo "<br>";

	echo form_label('Address:');
	echo form_input('address');
	echo "<br>";

	echo form_label('City:');
	echo form_input('city');
	echo "<br>";

	echo form_label('State:');
	echo form_input('state');
	echo "<br>";

	echo form_label('Country:');
	echo form_input('country');
	echo "<br>";

	echo form_label('Gender:');
	//echo form_input('Gender');
	//echo "<br>";

	echo form_label('Male','male') . form_radio('gender','male','');
	echo form_label('Female','female') . form_radio('gender','female','');
	echo form_label('Others','other') . form_radio('gender','Others','');


	echo "<br>";

	echo form_label('Birth date:');
	echo form_input(array('type' => 'date','name'=>'bd'));
	echo "<br>";

	echo form_label('Mobile no:');
	echo form_input(array('type'=>'number','name'=>'mobile'));
	echo "<br>";

	echo form_label('Home no:', 'home');
	echo form_input(array('type'=>'number','name'=>'home'));
	echo "<br>";

	echo form_label('office no:', 'office');
	echo form_input(array('type'=>'number','name'=>'office'));
	echo "<br>";

	echo form_label('Driving licence no:');
	echo form_input(array('type'=>'number','name'=>'driving'));
	echo "<br>";

	echo form_label('E-mail:');
	echo form_input(array('type'=> 'email','name'=>'email'));
	echo "<br>";

	echo form_label('Website:');
	echo form_input(array('type'=>'text','name'=>'website'));
	echo "<br>";

	echo form_label('Comment:');
	echo form_textarea(array('name'=>'comment','rows'=>'5','cols'=>'50'));
	echo "<br>";

	echo form_submit('Submit','Submit'); 
	$js='onclick="window.location=\''.site_url('users').'\'"';
	echo form_button('mybutton','back',$js);?>
</br>
	<?php
	 echo $this->session->flashdata('message');

	?>
	



</body>
</html>