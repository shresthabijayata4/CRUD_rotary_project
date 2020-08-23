<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
<?php echo form_open('users/save'); 

	echo form_label('First name:');
	echo form_input('fname', $list[0]->firstname);
	echo "<br>";

	echo form_label('Middle name:');
	echo form_input(array('type' => 'text','name'=>'mname', 'value'=>$list[0]->middlename));
	echo "<br>";

	echo form_label('Last name:');
	echo form_input('lname',$list[0]->lastname);
	echo "<br>";

	echo form_label('Nickname:');
	echo form_input('nick',$list[0]->Nickname);
	echo "<br>";

	echo form_label('Address:');
	echo form_input('address',$list[0]->address);
	echo "<br>";

	echo form_label('City:');
	echo form_input('city',$list[0]->City);
	echo "<br>";

	echo form_label('State:');
	echo form_input('state',$list[0]->State);
	echo "<br>";

	echo form_label('Country:');
	echo form_input('country',$list[0]->Country);
	echo "<br>";

	echo form_label('Gender:');
	echo form_label('Male','male'). form_radio('gender', 'male', ($list[0]->Gender == 'male') ? TRUE : FALSE);
	echo form_label('Female','female') .form_radio('gender','female',($list[0]->Gender == 'female') ? TRUE : FALSE);
	echo form_label('Others','other') . form_radio('gender','Others',($list[0]->Gender == 'Others') ? TRUE : FALSE);
	echo "<br>";

	echo form_label('Birth date:'); 
	echo form_input(array('type' =>'date','name'=>'bd','value'=>$list[0]->birthdate)); 
	echo "<br>";

	echo form_label('Mobile no:');
	echo form_input(array('type'=>'number','name'=>'mobile','value'=>$list[0]->mobileno));
	echo "<br>";

	echo form_label('Home no:', 'home');
	echo form_input(array('type'=>'number','name'=>'home','value'=>$list[0]->homeno));
	echo "<br>";

	echo form_label('office no:', 'office');
	echo form_input(array('type'=>'number','name'=>'office','value'=>$list[0]->officeno));
	echo "<br>";

	echo form_label('Driving licence no:');
	echo form_input(array('type'=>'number','name'=>'driving','value'=>$list[0]->liscenceno));
	echo "<br>";

	echo form_label('E-mail:');
	echo form_input(array('type'=> 'email','name'=>'email','value'=>$list[0]->email));
	echo "<br>";

	echo form_label('Website:');
	echo form_input(array('type'=>'text','name'=>'website','value'=>$list[0]->Website));
	echo "<br>";

	echo form_label('Comment:');
	echo form_textarea(array('name'=>'comment','rows'=>'5','cols'=>'50','value'=>$list[0]->Comment));
	echo "<br>";
	echo form_input(array('type'=>'hidden','name'=>'id','value'=>$list[0]->id));

	echo form_submit('Submit','Submit');
	 ?>
	 <form action="addform.php">
	 <input type="Submit" name="submit" value="back">
	</form>
</br>
	<?php
	 echo $this->session->flashdata('message');

	?>
</body>
</html>

