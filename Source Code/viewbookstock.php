<?php
include("header.php");
if(!isset($_SESSION['librarian_id']))
{
echo "<script>window.location='login.php';</script>";	
}
if(isset($_GET['delid']))
{
	$sqldel = "DELETE  FROM book_stock WHERE book_stock_id='$_GET[delid]'";
	$qsqldel =mysqli_query($con,$sqldel);
	echo mysqli_error($con);
	if(mysqli_affected_rows($con) == 1)
	{
		echo "<script>alert('Book stock record deleted successfully...');</script>";
		echo "<script>window.location='viewbookstock.php';</script>";
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
                                   <h2>Book stock <small>View Book stock</small></h2>
                              </div>

                              <div class="col-md-12 col-sm-12">
							  
<table id="idviewbook"  class="table table-striped table-bordered">
	<thead>
		<tr style="color:white;">
			<th>Book</th>
			<th style='text-align:center;'>Purchase date</th>
			<th style='text-align:right;'>Quantity</th>
			<th style='text-align:right;'>Cost</th>
			<th style='text-align:center;'>Action</th>
		</tr>
	</thead>
	
	<tbody>
	<?php
	$sql= "SELECT book_stock.*,book.bookname,book.author,bookcategory.bookcategory FROM book_stock LEFT JOIN book ON book_stock.bookid=BOOK.bookid LEFT JOIN bookcategory ON bookcategory.bookcategoryid=book.bookcategoryid where book_stock.book_stock_id!='0' ";
	if(isset($_GET['bookid']))
	{
		$sql = $sql . " AND book_stock.bookid='$_GET[bookid]'";
	}
	$qsql = mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		echo "<tr>
			<td><b>$rs[bookname]</b>
			<br><b>Category:</b> $rs[bookcategory]
			<br><b>Author:</b> $rs[author]</td>
			<td style='text-align:center;'>" . date("d-M-Y",strtotime($rs['purchasedate'])) ."</td>
			<td style='text-align:right;'>$rs[qty]</td>
			<td style='text-align:right;'>₹$rs[cost]</td>
			<td style='text-align:center;'><a href='bookstock.php?editid=$rs[book_stock_id]&bookid=$rs[bookid]'  class='btn btn-info' >Edit</a> | <a  class='btn btn-danger' href='viewbookstock.php?delid=$rs[0]' onclick='return confirmdel()'>Delete</a></td>
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