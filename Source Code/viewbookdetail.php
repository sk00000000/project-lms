<?php
include("header.php");
if(!isset($_SESSION['librarian_id']) && !isset($_SESSION['studentid']))
{
echo "<script>window.location='login.php';</script>";	
}
$sqlbooklist = "SELECT * FROM book LEFT JOIN bookcategory ON book.bookcategoryid=bookcategory.bookcategoryid WHERE book.status='Active' AND book.bookid='$_GET[bookid]'";
$qsqlbooklist = mysqli_query($con,$sqlbooklist);
$rsbooklist  = mysqli_fetch_array($qsqlbooklist);
$sqlfinesettings = "SELECT * FROM finesettings ";
$qsqlfinesettings = mysqli_query($con,$sqlfinesettings);
$rsfinesettings  = mysqli_fetch_array($qsqlfinesettings);
$daytokeep =  $rsfinesettings['daytokeep'];
if($_GET['bookingtype'] == "REQUEST")
{
	$new_time = date('Y-m-d H:i:s', mktime(date("H")+12, date("i"), date("s"), date("m"), date("d"), date("Y")));
	$sql = "INSERT INTO transaction(studentid,bookid,transtype,bookingdate,borrowdate,status) VALUES('$_SESSION[studentid]','$_GET[bookid]','REQUEST','$dt','$new_time','Pending')";
	$qsql = mysqli_query($con,$sql);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) ==1)
	{
		$insid = mysqli_insert_id($con);
		echo "<script>alert('REQUEST SENT successfully. Request Reference No. is $insid . Kindly borrow in 12 hours..');</script>";
		echo "<script>window.location='viewtransactionrequest.php';</script>";
	}
}
?>
     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                         <div class="about-info">
                              <h2><?php echo $rsbooklist['bookname']; ?></h2>
							<p>Category : <?php echo $rsbooklist['bookcategory']; ?></p>       
							<img src="imgbook/<?php echo $rsbooklist['bookimg']; ?>" style="width: 450px;">
							<p><?php echo $rsbooklist[3]; ?></p>                         
                         </div>
                    </div>

                    <div class="col-md-offset-1 col-md-4 col-sm-12">
                         <div class="entry-form">
                              <form action="" method="get">
								<input type="hidden" name="bookid" value="<?php echo $_GET['bookid']; ?>">
								<input type="hidden" name="bookingtype" value="REQUEST">		
                                   <h2>Add to Bag..</h2>
							<table>
								<tr>
								  <th>Booking<br>date</th>
								  <td>
                                   <input type="text" readonly name="borrowdate" class="form-control" placeholder="Borrow Date" required style="border: 1px solid;" value="<?php echo date('d-M-Y h:i A'); ?>">
								   </td>
								 </tr>
								<tr>
								  <th>Borrow before</th>
								  <td>
                                   <input type="text" readonly name="borrowbefore" class="form-control" placeholder="Borrow Date" required style="border: 1px solid;" value="<?php echo $new_time = date('Y-m-d h:i A', mktime(date("H")+12, date("i"), date("s"), date("m"), date("d"), date("Y"))); ?>">
								   </td>
								 </tr>
								<tr>
								  <th>Return<br> before</th>
								  <td>
                                   <input type="text" readonly name="returnbefore" class="form-control" placeholder="Return Date" required style="border: 1px solid;" value="<?php echo $new_time = date("d-M-Y h:i A", strtotime('+'.$daytokeep.' days')); ?>" >
								   </td>
								  </tr>
								<tr>
								  <td colspan="2">
                                   <button class="submit-btn form-control" type="submit" name="btnconfirm" id="form-submit">Click & Confirm</button>
								   </td>
								</tr>
							</table>
                              </form>
                         </div>
                    </div>

               </div>
          </div>
     </section>

<?php
include("footer.php");
?>