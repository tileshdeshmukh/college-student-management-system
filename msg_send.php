<?php
session_start();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>admin</title>
    <style type="text/css">
     
      .anker:hover{
        color: white;
        text-decoration: none;
      }
    </style>
  </head>
  <body>


        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark fixed-true">
            <!-- <img class="" src="logo.png" style="width: 3.5%; height: 1.8%">
                       <pre style="font-size: 10px; color: white;">   
             SHRI VILE PARLE KELAVANI MANDAL
            <b style="font-size: 17px; color: blue;">Institute Of Technology,Dhule  </b></pre>  -->
                <h3 style="color:RED">Admin</h3>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  
                  
                </ul>
             <form class="form-inline my-2 my-lg-0" action="logout.php"action="logout.php">
                <button class="btn btn-outline-primary   my-2 my-sm-0" type="submit">Log-out</button>
            </form>
        </div>
      </nav>


      <div class="d-flex" id="wrapper">

    <!-- Sidebar -->
       <div>
          <div class="sidebar-heading bg-dark mt-1" style="color: "><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; MENU &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></div>
              <div class="list-group list-group-flush text-center">
                    <a href="admin.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Dashboard</a>
                   <a href="admin_msg.php" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Massage</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Overview</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Events</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Profile</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Status</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark">&nbsp;</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark">&nbsp;</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark">&nbsp;</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark">&nbsp;</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark">&nbsp;</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark">&nbsp;</a>
                    <a href="#" class="list-group-item list-group-item-action bg-dark">&nbsp;</a>
              </div>
         </div>

          <!-- Page Content -->
         <div class="container-fluid " style="padding: 30px 30px 30px 30px; background-color: black;">
              <center><h3 class="text-white text-primary">Send Massage</h3></center>
              <hr class="bg-primary">
              <br>
              <div class="container-fluid mx-5 px-5">
                   <form action="msg_send.php?name=<?php echo $_GET['name'];?>&sid=<?php echo $_GET['sid'];?>" method="POST">
			            <div class="form-group">
							<p class="text-white"> Massage send to <b><?php echo $_GET['name']; ?></b> and saap id is <b><?php echo $_GET['sid'];?></b></p>
							<div classs="form-group text-white">
							<label class="text-white">Sender Name :</label>
			                 <input type="text" name="sender_name" class="form-control bg-dark text-white" placeholder="Sender name" required="" style="width:54%">			

			                 </div>
			                 <div class="form-group text-white">
                 			<label>Massage :</label><br>
                    		<textarea class="bg-dark text-white" name="msg" rows="8" cols="75" required="required"></textarea>
              				</div>
				         </div>
									        
									      
			          <button type="submit" name="sub" class="btn btn-primary" name="send">Send</button>
			          <a href="admin_msg.php"><button type="button" class="btn btn-danger mr-auto" >Close</button></a>
			</div>
									    

	</form>
</div>
					              <?php
					              include('db.php');
							      if (isset($_POST['sub'])) 
							      {
									       	$sender = $_POST['sender_name'];
									        	$msg = $_POST['msg'];

									        	$new_name = $_GET['name'];
									        	$new_sid = $_GET['sid'];
									   	
									        	$date = date("d/m/y");
									        	$time = date("h:i:sa");

		                                $s = mysqli_query($conn, "insert into notification(sender, sid, stud_name, msg, status, date, time) values('$sender', '$new_sid', '$new_name', '$msg', 'unread', '$date', '$time')");
									        	if($s == 1)
									        	{
									        	    echo '<script>alert("massage Successfully Send");</script>';
									        	    
												  }
												  else{
												    echo '<script>alert("error Occured");</script>';
												  }	
									        		
									        } 

									        ?>

									          
									   
    <!-- /#page-content-wrapper -->

  </div>


 </div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  </body>
</html>



