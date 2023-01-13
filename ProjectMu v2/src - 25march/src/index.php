<?php
include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v10 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/web3.min.js"></script>
    <script src="js/truffle-contract.js"></script>
    <script src="js/app.js"></script>
    <script src="js/check.js"></script>
  
   
  </head>
<body class="form-v10">
	<div class="page-content">
		<div class="form-v10-content">
				<!-- <div class="form-v11-content"> -->
<div id="loader">
            <p class="text-center">Loading...</p>
        </div>

<div id="content" >

<form class="form-detail" id="patform">
				<div class="form-right">
									<h2>Doctor Infomation</h2>
										
											
						<div class="form-row ">
							<input type="text" name="Doctor ID" id="docid" class="input-text" placeholder="Doctor ID" value="<?php echo $docid?>">

						</div>
						<div class="form-row">
							<input type="text" name="Doctor Name" id="DoctorName" class="input-text" placeholder="Doctor  Name" value="<?php echo $docname?>" >
						</div>
					
				
						<div class="form-row">
						<input type="text" name="Hospital Name" class="company" id="Hospital Name" placeholder="Hospital Name" value="<?php echo $hospname?>">
						</div>
						<div class="form-row ">
							<input type="text" name="Hospital ID" id="hospid" class="input-text" placeholder="HOSPITAL ID" value="<?php echo $hospid?>">

						</div>
						
				</div>
			<div class="form-left">
					<h2>Patient Details</h2>
					
					<div class="form-group">
					<div class="form-row">
						<input type="text" name="patid" class="patid" id="patid" placeholder="Patient ID" >
					</div>
					<div class="form-row">
					<input type="submit" name="register" class="btn btn-sucess" value="Search " id="patientsearch">
				</div>
			</div>
					<div class="form-row">
						<input type="text" name="name" class="name" id="Pname" placeholder="Patient Name" >
					</div>
					<div class="form-row">
						<input type="text" name="Age" class="Age" id="Page" placeholder="Age 	" >
					</div>
					<div class="form-row">
						<input type="text" name="Gender" class="Gender" id="Pgender" placeholder="Gender " >
					</div>
					<div class="form-row">
						<input type="text" class="Gender" id="Paddress" placeholder="Address" >
					</div>
					<div class="form-row form-row-2">
							<input type="text" name="phone" class="phone" id="Pphone" placeholder="Phone Number" >
					</div>
										
					</div>

			
			</form>

			<form class="form-detail" onSubmit="App.addPatient(); return false;"  method="post" id="consulform">
				<div class="form-left">
				
					<div class="form-group">
					<h2>Consulting Details</h2>
					
					</div>
					
					<div class="form-row">
							<input type="text" name="Patient_id" id="pid" class="input-text" placeholder=" Patient ID" >
						</div>
					<div class="form-row">
						<textarea name="Symptoms" class="input-text" id="symptom" placeholder="Symptoms" ></textarea>
					</div>
						<div class="form-row">
						<textarea name="Diagnosis" class="input-text" id="diagnosis" placeholder="Diagnosis" ></textarea>
					</div>
					<div class="form-row">
						<textarea name="Diagnosis" class="input-text" id="treatment" placeholder="Treatment" ></textarea>
					</div>
					<div class="form-row">
						<textarea name="Diagnosis" class="input-text" id="medicine" placeholder="Prescribed Medicine" ></textarea>
					</div>
					<input type="hidden" name="did" id="did" class="text-center">
              		<input type="hidden" name="hid" id="hid" class="text-center">
              		
              		<input type="hidden" name="hid" id="blockno" class="text-center">

					<div class="form-group">
					
						<input type="button" name="register" class="btn btn-sucess"  id = "save" value="Save ">
					
						<input type="button" name="register" class="btn btn-danger" id = "load" value=" Load">
					
					</div>

					<div class="form-group">
					
						<input type="submit" name="register" class="btn btn-sucess" value="Add " id = "add">
					
						<input type="button" name="register" class="btn btn-danger" id = "cancel" value=" Cancel">
					
					</div>
					</div>
					</form>
				
				
			<input type="text" id="hashvalue" class="input-text" placeholder=" hashvalue" >
			
			
		
		
	
	</div>
	</div>


	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    
</body>
</html>