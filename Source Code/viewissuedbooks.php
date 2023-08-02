<?php
include("header.php");
if(!isset($_SESSION['librarian_id']) && !isset($_SESSION['studentid']))
{
echo "<script>window.location='login.php';</script>";	
}
if(isset($_GET['delid']))
{
	$sqldel = "DELETE  FROM transaction WHERE transationid='$_GET[delid]'";
	$qsqldel =mysqli_query($con,$sqldel);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('transaction record deleted successfully...');</script>";
		echo "<script>window.location='viewtransactionrequest.php';</script>";
	}
}
?>

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>VIEW REQUEST <small>View transaction details!!</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
							  
<table id="idviewbook"  class="table table-striped table-bordered"  >
	<thead>
		<tr style="background-color:yellow;">
		    
			<th>Book Issue No.</th>
			<th>Student</th>
			<th>Book</th>
			<th>Issued date</th>
			<th>Return before</th>
			<th>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
	$sql= "SELECT * FROM `transaction` LEFT JOIN student ON transaction.studentid = student.studentid LEFT JOIN book ON book.bookid=transaction.bookid WHERE transaction.status='Active' AND transaction.transtype='Issued'";
	$qsql = mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{ 
$cdate = strtotime($rs['returndate']);
$today = time();
$difference = $cdate - $today;
if ($difference < 0) { $difference = 0; }

		echo "<tr>
			<td valign='middle'><br><br><center><b  style='font-size: 35px;'>$rs[0]</b><center></td>
			<td>$rs[studentname]<br>
			<img src='imgstudent/$rs[studentimg]' style='width: 150px;height:200px;'>
			</td>
			<td>$rs[bookname]<br>
			<img src='imgbook/$rs[bookimg]' style='width: 150px;height:200px;'></td>
			<td>" . date("d-M-Y h:i A",strtotime($rs['borrowdate'])) ."</td>
			<td>" . date("d-M-Y h:i A",strtotime($rs['returndate'])) . "<br><b color: red;>". floor($difference/60/60/24)." days remaining</b>
			</td>
			<td>";
			
				echo "<a  class='btn btn-info' href='penalty.php?transactionid=$rs[0]' >Return Book..</a>";
			
			echo "</td>
			
		</tr>";
	}
	?>
	</tbody>	
</table>							  
							  
                              </div>
                         </form>
                    </div>


               </div>
          </div>
     </section>       
<?php
include("footer.php");
?>
<script>
$(document).ready( function () {
    $('#idviewbook').DataTable();
} );
</script>
<script>
function confirmdel()
{
	if(confirm("Are you sure want to delete this record?") == true)
	{
		return true;
	}
	else
	{
		return false;
	}		
}
</script>