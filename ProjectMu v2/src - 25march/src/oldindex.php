<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Patient Records</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container" style="width: 650px;">
      <div class="row">
        <div class="col-lg-12">
          <h1 class="text-center">Welcome to the Hospital Backup</h1>
          <hr/>
          <br/>
          <div id="loader">
            <p class="text-center">Loading...</p>
          </div>
          <div id="content" style="display: none;">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Patient ID</th>
                  <th scope="col">Doctor ID</th>
                  <th scope="col">Hospital ID</th>
                  <th scope="col">Block No</th>
                </tr>
              </thead>
              <tbody id="candidatesResults">
              </tbody>
            </table>
            <hr/>
            <form onSubmit="App.addPatient(); return false;">
              <div class="form-group">
                <label for="candidatesSelect">PatientID</label>
                <input type="textbox" id="pid" name="pid"><br>
                <label for="candidatesSelect">DoctorID</label>
                <input type="textbox" id="did" name="did"><br>
                <label for="candidatesSelect">Hospital</label>
                <input type="textbox" id="hid" name="hid"><br>
              </div>
              <p id="hash" class="text-center"></p>
              
              <button type="submit" class="btn btn-primary">Add</button>
              <hr />
            </form>


            <form action="va1.php" method="POST">
              <input type="hidden" name="id1" id="hashvalue" class="text-center">
              <input type="hidden" name="pid" id="hashp" class="text-center">
              <input type="hidden" name="did" id="hashd" class="text-center">
              <input type="submit" name="bu1">
            </form>


            <form onSubmit="alpha(); return false;">
              <button type="submit" class="btn btn-primary">mysql</button>
            </form>



            <p id="accountAddress" class="text-center"></p>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/web3.min.js"></script>
    <script src="js/truffle-contract.js"></script>
    <script src="js/app.js"></script>
  
    
  </body>
</html>
