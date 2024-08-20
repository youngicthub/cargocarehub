<?php 
	include 'header.php';

	if (isset($_POST['save'])) {
		$adminuser = text_input($_POST['username']);
		$adminpass = text_input($_POST['password']);
		if (empty($adminuser) || empty($adminpass)) {
			echo "<script>alert('Empty Field(s)')</script>";
		}else{
			mysqli_query($link, "UPDATE admin SET username = '$adminuser', password = '$adminpass' WHERE username = '$username' ");
			echo "<script>
			alert('Successfully updated');
			window.location.href = 'settings.php';
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
    <div class="col-md-6 grid-margin stretch-card" style="margin: auto">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Settings</h4>
          <p class="card-description">
            
          </p>
          <form method="post" action="settings.php" class="forms-sample">
            <div class="form-group">
              <label for="exampleInputUsername1">Admin Name</label>
              <input type="text" class="form-control" name="username" value="<?php echo $username ?>" id="exampleInputUsername1" placeholder="Admin Name">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password" class="form-control" value="<?php echo $password ?>" name="password" id="exampleInputEmail1" placeholder="Admin Password">
            </div>
            
            <div class="text-center">
              <button type="submit" name="save" class="btn btn-block btn-success">Save</button>
            </div>
        </div>
      </div>
    </div>
</form>
</div>



<?php 
	include 'footer.php';
?>