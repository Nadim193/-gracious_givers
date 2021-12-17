<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Header</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<style>
		div.navbar-inverse {
			position: -webkit-sticky;
			position: sticky;
			top: 0;
		}
    ul.navbar-nav:focus{
      background-color: black;
    }
	</style>
</head>
<body>
<div class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="navbar-header">
          <button class="navbar-toggle" data-target="#mobile_menu" data-toggle="collapse"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
		  
          <span><a href="../View/NGO_Welcome_Page.php" class="navbar-brand"> <span class="glyphicon glyphicon-home"></span></span>
        </div>
        <div class="navbar-collapse collapse" id="mobile_menu">
          <ul class="nav navbar-nav" id="nave">
            <li class=""><a href="../View/NGO_Welcome_Page.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li class=""><a href="../View/Program.php" ><span class="glyphicon glyphicon-pencil"></span> Start Program</a></li>
            <li class=""><a href="../View/Pending_Program.php"><span class="glyphicon glyphicon-hourglass"></span> Pending Program</a></li>
            <li class=""><a href="../View/Accepted_Program.php"><span class="glyphicon glyphicon-ok-sign"></span> Accepted Program</a></li>
            <li class=""><a href="../View/Completed_Program.php"><span class="glyphicon glyphicon-saved"></span> Completed Program</a></li>
			      <li class=""><a href="../View/Rejected_Program.php"><span class="glyphicon glyphicon-remove-sign"></span> Rejected Program</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right" id="nav">
            <li><a href="../View/Profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
            <li><a href="" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span> Settings <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="../Controller/Logout.php">Logout</a></li>
			        	<li><a href="../View/Edit_Profile.php">Edit Profile</a></li>
                <li><a href="../View/Change_Password.php">Change Password</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>