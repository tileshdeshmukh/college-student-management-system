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


        <nav class="navbar navbar-expand-lg  navbar-dark bg-dark navbar-fixed">
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
                    <a href="#" class="list-group-item list-group-item-action bg-dark btn-outline-primary text-white">Massage</a>
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
              <center><h3 class="text-white text-primary">Massage To Student</h3></center>
              <hr class="bg-primary">
              <br>

              <form action="admin_msg.php" method="POST">
         <div class="row">
          	<div class="col-md-4 p-5">

            <button class="btn btn-primary mx-5 my-sm-0" type="submit" name="personal">Personal-Massage</button>
           	

           </div>
           	

           	<div class="col-md-4 p-5">
           	
           	  <button class="btn btn-primary mx-5 my-sm-0" type="submit" name="grp">Group-Massage</button>
   
         	</div>
           	
           	<div class="col-md-4 ">
           		<form action="admin_msg.php" method="POST">
           			      <div class="form-group pr-5 mr-5">
         
                 <select type="text" name="yr" class="form-control" placeholder="choce.." required="required">
                      <option>Select Year...</option>
                    <option> 1st Year </option>
                    <option> 2nd Year</option>
                    <option> 3rd Year</option>
                    <option> 4th Year</option>
                  
                 </select>
            </div> 
           	  <button class="btn btn-primary mx-5 my-sm-0" type="submit" name="btn_year" >Year By Massage</button>
            	

       
			</div> 
		</form>




           </div>   </form>

<!-- onclick select year Button -->


<?php 
           include('db.php');
           if (isset($_POST['btn_year'])) {
           		$syear = $_POST['yr'];
           ?>
           <table class="table table-hover text-left text-white">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Saap ID</th>
                                      
                                      <th>Year</th>
                                   
                                    </tr>
                                  </thead>

                        
                                      <?php
                                        
                                        include('db.php');
                                       
                                       
                                        $sql = mysqli_query($conn, "select * from registration where year = '".$syear."'");

                                        while($row=mysqli_fetch_array($sql)){
                                        
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>

                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                
                                              <td><?php echo $row['year'];?></td>
                                            
                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
                                         <?php
                                          }        
                                          ?>
                                  </table>  


                                  <?php 
                              }

                              ?>




<!-- Onclick Personal Button -->

           <?php 
           include('db.php');
           if (isset($_POST['personal'])) {
           	
           ?>
           <table class="table table-hover text-left text-white">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Saap ID</th>
                                      
                                      <th>Year</th>
                                      <th>massage</th>
                                    </tr>
                                  </thead>

                        
                                      <?php
                                        
                                        include('db.php');
                                       
                                       
                                        $sql = mysqli_query($conn, "select * from registration");

                                        while($row=mysqli_fetch_assoc($sql)){
                                              
                                              $new_name = $row['name'];
                                              $new_sid = $row['sid'];
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>

                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                
                                              <td><?php echo $row['year'];?></td>

                                              <td> <a href="msg_send.php?name=<?php echo $row['name'];?>&sid=<?php echo $row['sid'];?>"><button class="btn btn-outline-primary my-2 my-sm-0" type="submit" data-toggle="modal" data-target="#myModal" >Massage</button></a></td>

                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
                                        <?php 
                                    }
                                    ?>
                                      

                              <!-- onclick massage button -->	       

                  <?php 
                              }
                              ?>



                              <!-- end massage  -->
                                  </table>  


                             

<!-- Onclick Group Button -->
			
							   <?php 
           include('db.php');
           if (isset($_POST['grp'])) {
           	
           ?>
           <table class="table table-hover text-left text-white">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Saap ID</th>
                                      
                                      <th>Year</th>
                                      <th>Select</th>
                                    </tr>
                                  </thead>

                        
                                      <?php
                                        
                                        include('db.php');
                                       
                                       
                                        $sql = mysqli_query($conn, "select * from registration");

                                        while($row=mysqli_fetch_assoc($sql)){
                                        
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>

                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                
                                              <td><?php echo $row['year'];?></td>
                                              <td> 
                                              	<button type="button" class="btn btn-outline-primary">select</button>
                                              </td>
                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
                                         <?php
                                          }        
                                          ?>
                                  </table>  


                                  <?php 
                              }
                              ?>
<!-- Onclock Year button -->
									
	 <?php 
           include('db.php');
           if (isset($_POST['yer'])) {
           	
           ?>
           <table class="table table-hover text-left text-white">
                                  <thead>
                                    <tr>
                                      <th>Name</th>
                                      <th>Saap ID</th>
                                      
                                      <th>Year</th>
                                      <th>Select</th>
                                    </tr>
                                  </thead>

                        
                                      <?php
                                        
                                        include('db.php');
                                       
                                       
                                        $sql = mysqli_query($conn, "select * from registration where year=");

                                        while($row=mysqli_fetch_assoc($sql)){
                                        
                                  
                                      
                                        ?>
                                        <div class="pr-5">

                                          
                                          <head>
                                            <tbody>
                                              <tr>

                                                <td><?php echo $row['name'];?></td>
                                                <td><?php echo $row['sid'];?></td>
                                                
                                              <td><?php echo $row['year'];?></td>
                                              <td> 
                                              	<button type="button" class="btn btn-outline-primary">select</button>
                                              </td>
                                               </tr>

                                            </tbody>
                                          </head>

                                        </div>
                                         <?php
                                          }        
                                          ?>
                                  </table>  


                                  <?php 
                              }
                              ?>

						



          
</div>

</div>                                   
      

      </div>

    <!-- /#page-content-wrapper -->


  
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>



  </body>
</html>