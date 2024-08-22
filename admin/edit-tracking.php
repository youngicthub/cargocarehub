<?php 
include 'header.php';
	if (isset($_GET['num'])) {
		$tnumbs = $_GET['num'];
		$select = mysqli_query($link, "SELECT * FROM tracking WHERE tracking_number = '$tnumbs' ");
		if (mysqli_num_rows($select) > 0) {
			$row = mysqli_fetch_assoc($select);
			$senders_name = $row['sender_name'];	
		     $senders_contact = $row['sender_contact'];  
		     $senders_mail = $row['sender_email'];  
		     $senders_address = $row['sender_address'];
		     $receivers_name = $row['receiver_name'];  
		     $receivers_contact = $row['receiver_contact'];  
		     $receivers_mail = $row['receiver_email'];  
		     $receivers_address = $row['receiver_address'];
		     $statuss = $row['status'];  
		     $dispatch_l = $row['dispatch_location'];  
		     $dispatchh = $row['dispatch_date'];  
		     $deliveryy = $row['delivery_date'];
         $current_loc = $row['current_location'];
         $pn = $row['product_name'];
         $pod = $row['percentage_on_delivery'];

		}else{
			echo "<script>window.location.href = 'dashboard.php'; </script>";
		}
	}else{
		echo "<script>window.location.href = 'dashboard.php'; </script>";
	}



	if (isset($_POST['update'])) {
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
       $current_lo = text_input($_POST['current_loc']);
       $pn = text_input($_POST['pn']);  
       $pod = text_input($_POST['pod']); 

	     if (empty($sendersname) || empty($senderscontact) || empty($sendersmail) || empty($sendersaddress) || empty($receiversname) || empty($receiverscontact) || empty($receiversmail) || empty($receiversaddress) || empty($status) || empty($dispatchl) || empty($dispatch) || empty($delivery) || empty($pn) || empty($pod)) {
	       echo "<script>alert('Check !!! Some fields are empty')</script>";
	     }else{
	     	 $update = mysqli_query($link, "UPDATE tracking SET sender_name = '$sendersname', sender_contact = '$senderscontact', sender_email = '$sendersmail', sender_address = '$sendersaddress', status = '$status', dispatch_location = '$dispatchl', receiver_email = '$receiversmail', receiver_name = '$receiversname', receiver_contact = '$receiverscontact', receiver_address = '$receiversaddress', dispatch_date = '$dispatch', delivery_date = '$delivery', current_location = '$current_lo', product_name = '$pn', percentage_on_delivery = '$pod' WHERE tracking_number = '$tnumbs' ");
	     	 echo "<script>
            alert('Updated Successfully');
	           window.location.href = 'edit-tracking.php?num=$tnumbs';
	          </script>";
	          exit();
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
				<label style="font-weight: bold;font-size: 25px;">TRACKING NUMBER  - <?php echo $tnumbs ?></label>
				
			</div>
		</div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Sender's Info</h4>
          <p class="card-description">
            
          </p>
          <form method="post" action="edit-tracking.php?num=<?php echo $tnumbs ?>" class="forms-sample">
            <div class="form-group">
              <label for="exampleInputUsername1">Sender's Name</label>
              <input type="text" class="form-control" name="sname" value="<?php echo $senders_name ?>" id="exampleInputUsername1" placeholder="Sender's Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Sender's Contact</label>
              <input type="number" class="form-control" value="<?php echo $senders_contact ?>" name="scontact" id="exampleInputEmail1" placeholder="Sender's Contact">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Sender's Email</label>
              <input type="text" class="form-control" name="smail" value="<?php echo $senders_mail ?>" id="exampleInputPassword1" placeholder="Sender's Email">
            </div>
            <div class="form-group">
              <label for="exampleInputConfirmPassword1">Sender's Address</label>
              <textarea class="form-control" placeholder="Sender's Address" name="saddress"><?php echo $senders_address ?></textarea>
            </div>
            <h4 class="card-title">Other Info</h4>
            <div class="form-group">
              <label for="exampleInputPassword1">Status</label>
              <select class="form-control" name="status">
              	<option value="<?php echo $statuss ?>">Current Status - <?php echo $statuss ?></option>
              	<option value="Active">Active</option>
              	<option value="Inactive">Inactive</option>
              	<option value="Picked Up">Picked Up</option>
              	<option value="Arrived">Arrived</option>
              	<option value="Delivered">Delivered</option>
              	<option value="On hold">On hold</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleInputConfirmPassword1">Product Name</label>
              <input type="text" class="form-control" placeholder="Product Name" name="pn" value="<?php echo $pn ?>">
            </div>

            <div class="form-group">
              <label for="exampleInputConfirmPassword1">Percentage on delivery</label>
              <input type="number" class="form-control" placeholder="Percentage on delivery" name="pod" value="<?php echo $pod ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Dispatch Location</label>
              <input type="text" class="form-control" value="<?php echo $dispatch_l ?>" name="dispatchl" id="exampleInputPassword1" placeholder="Origin Port">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Current Location</label>
              <input type="text" class="form-control" value="<?php echo $current_loc ?>" name="current_loc" id="exampleInputPassword1" placeholder="Current Location ">
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
              <input type="text" class="form-control" value="<?php echo $receivers_name ?>" name="rname" id="exampleInputUsername1" placeholder="Receiver's Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Receiver's Contact</label>
              <input type="number" class="form-control" value="<?php echo $receivers_contact ?>" name="rcontact" id="exampleInputEmail1" placeholder="Receiver's Contact">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Receiver's Email</label>
              <input type="text" name="rmail" class="form-control" value="<?php echo $receivers_mail ?>" id="exampleInputPassword1" placeholder="Receiver's Email">
            </div>
            <div class="form-group">
              <label for="exampleInputConfirmPassword1">Receiver's Address</label>
              <textarea class="form-control" name="raddress" placeholder="Receiver Address"><?php echo $receivers_address ?></textarea>
            </div>
            <h4 class="card-title">Other Info</h4>
           <div class="form-group">
              <label for="exampleInputPassword1">Dispatch Date</label>
              <input type="date" class="form-control" name="dispatch" value="<?php echo $dispatchh ?>" id="exampleInputPassword1" placeholder="Origin PortS">
            </div>
          	<div class="form-group">
              <label for="exampleInputPassword1">Estimated Delivery Date</label>
              <input type="date" class="form-control" value="<?php echo $deliveryy ?>" name="delivery" id="exampleInputPassword1" placeholder="Origin PortS">
            </div>
        </div>
      </div>
    </div>
</div>
    <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
            	<button class="btn btn-lg btn-success btn-block" name="update">Update</button>
            </div>
        </div>
        </form>
    </div>


<?php 
include 'footer.php';
?>