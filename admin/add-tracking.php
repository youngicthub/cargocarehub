<?php 
include 'header.php';

include '../db.php';
	
	$tnumbs = "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
	$tnumbs = str_shuffle($tnumbs);
	$tnumbs = substr($tnumbs, 0, 10);

$msg = "";

$sendersname = $senderscontact = $sendersmail = $sendersaddress = $receiversname = $receiverscontact = $receiverscontact = $receiversmail =  $receiversaddress = $status = $dispatchl = $dispatch = $delivery = "";

	if (isset($_POST['submit'])) {
	   $sendersname = text_input($_POST['sname']);	
     $senderscontact = text_input($_POST['scontact']);  
     $sendersmail = text_input($_POST['smail']);  
     $sendersaddress = text_input($_POST['saddress']);
     $receiversname = text_input($_POST['rname']);  
     $receiverscontact = text_input($_POST['rcontact']);  
     $receiversmail = text_input($_POST['rmail']);  
     $receiversaddress = text_input($_POST['raddress']);
     $status = text_input($_POST['status']);  
     $dispatchl = text_input($_POST['dispatchl']);  
     $dispatch = text_input($_POST['dispatch']);  
     $delivery = text_input($_POST['delivery']);  
      
    if (empty($sendersname) || empty($senderscontact) || empty($sendersmail) || empty($sendersaddress) || empty($receiversname) || empty($receiverscontact) || empty($receiversmail) || empty($receiversaddress) || empty($status) || empty($dispatchl) || empty($dispatch) || empty($delivery) ) {
       echo "<script>alert('Check !!! Some fields are empty')</script>";
     }else{
       $insert = mysqli_query($link, " INSERT INTO tracking (tracking_number, sender_name, sender_contact, sender_email, sender_address, status, dispatch_location, receiver_email, receiver_name, receiver_contact, receiver_address, dispatch_date, delivery_date) VALUES ('$tnumbs', '$sendersname', '$senderscontact', '$sendersmail', '$sendersaddress', '$status', '$dispatchl', '$receiversmail', '$receiversname', '$receiverscontact', '$receiversaddress', '$dispatch', '$delivery' ) ");
       if ($insert) {
         // $msg = "Successfully added new tracking details";
          echo "<script>
            alert('New Tracking Added Successfully');
            window.location.href = 'dashboard.php';
          </script>";
       }
     }
     
	}


	function text_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
	}

?>



<div class="row">
	<div class="col-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<label style="font-weight: bold;font-size: 25px;">TRACKING NUMBER</label>
				<input type="text" readonly="" value="<?php echo $tnumbs ?>" name="tracking_number" class="form-control" id="exampleInputUsername1" placeholder="Username">
			</div>
		</div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sender's Info</h4>
          <p class="card-description">
            
          </p>
          <form method="post" action="add-tracking.php" class="forms-sample">
            <div class="form-group">
              <label for="exampleInputUsername1">Sender's Name</label>
              <input type="text" class="form-control" name="sname" value="<?php echo $sendersname ?>" id="exampleInputUsername1" placeholder="Sender's Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sender's Contact</label>
              <input type="number" class="form-control" value="<?php echo $senderscontact ?>" name="scontact" id="exampleInputEmail1" placeholder="Sender's Contact">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Sender's Email</label>
              <input type="text" class="form-control" name="smail" value="<?php echo $sendersmail ?>" id="exampleInputPassword1" placeholder="Sender's Email">
            </div>
            <div class="form-group">
              <label for="exampleInputConfirmPassword1">Sender's Address</label>
              <textarea class="form-control" placeholder="Sender's Address" name="saddress"><?php echo $sendersaddress ?></textarea>
            </div>
            <h4 class="card-title">Other Info</h4>
            <div class="form-group">
              <label for="exampleInputPassword1">Status</label>
              <select class="form-control" name="status">
              	<option value="Active">Active</option>
              	<option value="Inactive">Inactive</option>
              	<option value="Picked Up">Picked Up</option>
              	<option value="Arrived">Arrived</option>
              	<option value="Delivered">Delivered</option>
              	<option value="On hold">On hold</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Dispatch Location</label>
              <input type="text" class="form-control" value="<?php echo $dispatchl ?>" name="dispatchl" id="exampleInputPassword1" placeholder="Origin Port">
            </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Receiver's Info</h4>
          <p class="card-description">
          </p>
      
            <div class="form-group">
              <label for="exampleInputUsername1">Receiver's Name</label>
              <input type="text" class="form-control" value="<?php echo $receiversname ?>" name="rname" id="exampleInputUsername1" placeholder="Receiver's Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Receiver's Contact</label>
              <input type="number" class="form-control" value="<?php echo $receiverscontact ?>" name="rcontact" id="exampleInputEmail1" placeholder="Receiver's Contact">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Receiver's Email</label>
              <input type="text" name="rmail" class="form-control" value="<?php echo $receiversmail ?>" id="exampleInputPassword1" placeholder="Receiver's Email">
            </div>
            <div class="form-group">
              <label for="exampleInputConfirmPassword1">Receiver's Address</label>
              <textarea class="form-control" name="raddress" placeholder="Receiver Address"><?php echo $receiversaddress ?></textarea>
            </div>
            <h4 class="card-title">Other Info</h4>
           <div class="form-group">
              <label for="exampleInputPassword1">Dispatch Date</label>
              <input type="date" class="form-control" name="dispatch" value="<?php echo $dispatch ?>" id="exampleInputPassword1" placeholder="Origin PortS">
            </div>
          	<div class="form-group">
              <label for="exampleInputPassword1">Estimated Delivery Date</label>
              <input type="date" class="form-control" value="<?php echo $delivery ?>" name="delivery" id="exampleInputPassword1" placeholder="Origin PortS">
            </div>
        </div>
      </div>
    </div>
</div>
    <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
            	<button class="btn btn-primary btn-block" name="submit">Add</button>
            </div>
        </div>
        </form>
    </div>



 <?php 
include 'footer.php';
 ?>