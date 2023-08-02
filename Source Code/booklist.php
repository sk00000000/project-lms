<?php
include("header.php");
if(!isset($_SESSION['librarian_id']) && !isset($_SESSION['studentid']))
{
echo "<script>window.location='login.php';</script>";	
}
?>

     <!-- TEAM -->
     <section id="team">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Book List <small>View book list</small></h2>
                         </div>
                    </div>

    <div class="col-md-12 col-sm-12" style="border: 1px solid green;padding: 5px;">
	<b>Book Category : </b>
	<?php
	$sql= "SELECT * FROM bookcategory WHERE status='Active'";
	$qsql = mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($qsql))
	{
		echo "<a href='booklist.php?bookcategoryid=$rs[bookcategoryid]'  class='btn btn-info' >$rs[bookcategory]</a> </td>
		</tr>";
	}
	?>
	</div>
<?php
$sqlbooklist = "SELECT * FROM book LEFT JOIN bookcategory ON book.bookcategoryid=bookcategory.bookcategoryid WHERE book.status='Active'";
if($_GET['bookcategoryid'] != "")
{
	$sqlbooklist = $sqlbooklist . " AND bookcategory.bookcategoryid='$_GET[bookcategoryid]'";
}
$qsqlbooklist = mysqli_query($con,$sqlbooklist);
while($rsbooklist  = mysqli_fetch_array($qsqlbooklist))
{
		if($rsbooklist['bookimg'] == "")
		{
			$imgname = "images/noimage.png";
		}
		else if(file_exists("imgbook/".$rsbooklist['bookimg']))
		{
			$imgname = "imgbook/".$rsbooklist['bookimg'];
		}
		else
		{		
			$imgname = "images/noimage.png";
		}
?>
                    <div class="col-md-3 col-sm-6" style="border: 1px solid green;padding: 5px;">
                         <div class="team-thumb">
                              <div class="team-image">
                                   <img src="<?php echo $imgname; ?>" class="img-responsive" alt="" style="width: 100%; height: 300px;">
                              </div>
                              <div class="team-info">
                                   <h4><?php echo $rsbooklist['bookname']; ?></h4>
                                   <span><?php echo $rsbooklist['bookcategory']; ?></span>
                              </div>
                              <ul class="social-icon">
                                   <center><input type="button" class="form-control" name="submit" value="View" onclick="window.location='viewbookdetail.php?bookid=<?php echo $rsbooklist[0]; ?>'"></center>
								   
                              </ul>
                         </div>
                    </div>

<?php
}
?>
               </div>
          </div>
     </section>


    <?php
include("footer.php");
?>