<?php
include("header.php");
if(!isset($_SESSION["librarian_id"])){
     echo "<script>window.location='login.php';</script>";	
}
?>


     <!-- TEAM -->
     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Dashboard <small><?php echo $_SESSION['type']; ?> Account</small></h2>
                         </div>
                    </div>

                    <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/book.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
     								   $sql ="SELECT * FROM book";
     								   $qsql= mysqli_query($con,$sql);
     								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>Books record</li></center>
                              </ul>
                         </div>
                    </div>
					
				<div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/cat.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
     								   $sql ="SELECT * FROM bookcategory";
     								   $qsql= mysqli_query($con,$sql);
     								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>Book category record</li></center>
                              </ul>
                         </div>
                    </div>
					
				<div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/stock.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
     								   $sql ="SELECT * FROM book_stock";
     								   $qsql= mysqli_query($con,$sql);
     								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>Book stock records</li></center>
                              </ul>
                         </div>
                    </div>
                  
				<div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/branch.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
     								   $sql ="SELECT * FROM branch";
     								   $qsql= mysqli_query($con,$sql);
     								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>Branch records</li></center>
                              </ul>
                         </div>
                    </div>
					
					 
				  <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/course.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
     								   $sql ="SELECT * FROM course";
     								   $qsql= mysqli_query($con,$sql);
     								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li> Course records</li></center>
                              </ul>
                         </div>
                    </div>
					
					 <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/fine.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
     								   $sql ="SELECT * FROM finesettings";
     								   $qsql= mysqli_query($con,$sql);
     								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li> Fine settings </li></center>
                              </ul>
                         </div>
                    </div>
					
					 <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/libr.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
     								   $sql ="SELECT * FROM librarian";
     								   $qsql= mysqli_query($con,$sql);
     								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>Librarian records</li></center>
                              </ul>
                         </div>
                    </div>
					
					 <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/pen.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
     								   $sql ="SELECT * FROM penalty";
     								   $qsql= mysqli_query($con,$sql);
     								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li>Penalty records</li></center>
                              </ul>
                         </div>
                    </div>
					
					 <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/std.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
     								   $sql ="SELECT * FROM student";
     								   $qsql= mysqli_query($con,$sql);
     								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li> Student records</li></center>
                              </ul>
                         </div>
                    </div>
                 
				  <div class="col-md-3 col-sm-6">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="images/trans.jpg" class="img-responsive" alt="" style="width:100%;height:250px;">
                              </div>
                              <div class="team-info">
                                   <center><h3>
								   <?php
     								   $sql ="SELECT * FROM transaction";
     								   $qsql= mysqli_query($con,$sql);
     								   echo mysqli_num_rows($qsql);
								   ?>
								   </h3> records</center>
                              </div>
                              <ul class="social-icon">
                                   <center><li> Transaction records</li></center>
                              </ul>
                         </div>
                    </div>

               </div>
          </div>
     </section>

<?php
include("footer.php");
?>