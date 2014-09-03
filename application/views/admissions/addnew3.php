<section id="content">

<?php
	if(isset($error))
	{
		echo "<div id=\"error\" style=\" display: block; \">Error. Please try again.</div>";

	}
	
	if(isset($success))
	{
		echo "<div id=\"success\" style=\" display: block; \">Success. You entered the personal details successfully.</div>";
	
	}


?>
<div id="main">
<?php 
	
	echo "<img src=\"".base_url()."images/admission.png\" /><p>";
	echo "<img src=\"".base_url()."images/underline.jpg\" /><p>";
	
	
	echo heading('Admission', 2);
	echo heading('Step 3- Contact Details', 3);
	
	$output = $this->session->userdata('sess');
	
	echo "<h4>You Admission Number is\t".$output['adm']."<p></h4>";
	
	echo form_open('admissions/addnew');
	echo form_hidden('actionflag', 'step3');

	echo form_label('Postal Address:', 'pa');
	
	$attrib1 = array( 'name' => 'pa',
					  'id' => 'pa', 
					  'size' => '20'
					  );
	
	echo form_input($attrib1);
	echo "<p>";
	echo form_label('Postal Code:', 'pc');
	
	$attrib2 = array( 'name' => 'pc',
					  'id' => 'pc',
					  'size' => '20'
					  );
					  
	echo form_input($attrib2);
	echo "<p>";
	echo form_label('Town', 'town');
	
	$attrib3 = array( 'name' => 'town',
					  'id' => 'town',
					  'size' => '20'
					  );
					  
	echo form_input($attrib3);
	echo "<p>";
	echo form_submit( 'submit' , 'Save and Proceed', 'id="step3"');
	
	echo form_close();
	
	
?>

</div>
</section>