<?php
	 echo $this->session->flashdata('message');

	?>
<table border="1px">
		<tr>
			<td>id</td>
			<td>Fistname</td>
			<td>middlename</td>
			<td>lastname</td>
			<td>nickname</td>
			<td>address</td>
			<td>city</td>
			<td>state</td>
			<td>country</td>
			<td>gender</td>
			<td>birth date</td>
			<td>Mobile no</td>
			<td>Home no</td>
			<td>office no</td>
			<td>liscence no</td>
			<td>E-mail</td>
			<td>website</td>
			<td>comment</td>
			<td>update</td>
			<td>Delete</td>
		</tr>
		<?php
		foreach ($test as $row)  
         {  
            ?><tr>  

            <td><?php echo $row->id;?></td>  
            <td><?php echo $row->firstname;?></td>
            <td><?php echo $row->middlename;?></td>  
            <td><?php echo $row->lastname;?></td> 
            <td><?php echo $row->Nickname;?></td> 
            <td><?php echo $row->address;?></td> 
            <td><?php echo $row->City;?></td> 
            <td><?php echo $row->State;?></td> 
            <td><?php echo $row->Country;?></td> 
            <td><?php echo $row->Gender;?></td> 
            <td><?php echo $row->birthdate;?></td> 
            <td><?php echo $row->mobileno;?></td> 
            <td><?php echo $row->homeno;?></td> 
            <td><?php echo $row->officeno;?></td> 
            <td><?php echo $row->liscenceno;?></td> 
            <td><?php echo $row->email;?></td> 
            <td><?php echo $row->Website;?></td> 
            <td><?php echo $row->Comment;?></td> 
            <td><a href="<?php echo base_url('users/edit').'/'.$row->id;?>">edit</a> </td>
            <td><a href="<?php echo base_url ('users/delete').'/'.$row->id;?>">delete</a></td>
            </tr>  
         <?php }  
         ?>  
         <?php
         echo form_open('users/create');
         echo form_submit('Submit','create');
         ?>
</table>
