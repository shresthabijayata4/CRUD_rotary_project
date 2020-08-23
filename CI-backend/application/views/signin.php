<?php
echo form_open('login/submit');
echo form_label('firstname:');
echo form_input(array('type'=>'varchar','name'=>'fname'));
echo"<br>";
echo form_label('lastname:');
echo form_input(array('type'=>'varchar','name'=>'lname'));
echo"<br>";
echo form_label('Email:');
echo form_input(array('type'=>'email','name'=>'email'));
echo"<br>";
echo form_label('password:');
echo form_input(array('type'=>'password','name'=>'password'));
echo"<br>";
echo form_submit('Submit','submit');

$js='onclick="window.location=\''.site_url('login').'\'"';
	echo form_button('mybutton','back',$js);
	echo"<br>";
echo $this->session->flashdata('message');
?>