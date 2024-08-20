<?php 
	include 'header.php';

	if (isset($_POST['delete'])) {
		$tnumb = $_POST['tnumb'];
		$delete = mysqli_query($link, "DELETE FROM tracking WHERE tracking_number = '$tnumb' ");
		if ($tnumb) {
			echo "<script>alert('Deleted Successfully')</script>";
			exit();
		}
	}
?>


<div class="row">
	<div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">TRACKERS</h4>
                 
                  <div class="table-responsive pt-3">
                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Tracking Number</th>
                          <th>Status</th>
                          <th>Date Added</th>
                          <th>Edit</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                        <?php 
                        $i = 0;
                        	$tr = mysqli_query($link, "SELECT * FROM tracking ");
                        	if (mysqli_num_rows($tr) > 0 ) {
                        		while ($row = mysqli_fetch_assoc($tr)) {
                        			$i++
                         ?>
                         <form method="post" action="dashboard.php">
                         	<input type="hidden" name="tnumb" value="<?php echo $row['tracking_number'] ?>">
                         <tr>
                         	<td><?php echo $i; ?></td>
                         	<td><b><?php echo $row['tracking_number'] ?></b></td>
                         	<td><b><?php echo $row['status'] ?></b></td>
                         	<td><b><?php echo $row['date'] ?></b></td>
                         	<td><a href="edit-tracking.php?num=<?php echo $row['tracking_number'] ?>" class="btn btn-primary">Update</a></td>
                         	<td><button type="submit" name="delete" onclick="return confirm('Do you really want to delete this ?')" class="btn btn-danger">Delete</button></td>
                         </tr>
                         </form>
                     <?php }} ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>




<?php 
	include 'footer.php';
?>