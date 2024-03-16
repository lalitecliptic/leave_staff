<?php include('includes/header.php')?>
<?php include('../includes/session.php')?>
<?php
if (isset($_GET['delete'])) {
	$delete = $_GET['delete'];
	$sql = "DELETE FROM tblemployees_members where emp_id = ".$delete;
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Staff deleted Successfully');</script>";
     	echo "<script type='text/javascript'> document.location = 'staff.php'; </script>";
		
	}
}

?>

<body>
	<div class="pre-loader">
    <div class="pre-loader-box">
        <div class="loader-logo"><img src="../vendors/images/deskapp-logo-svg.png" alt=""></div>
        <div class='loader-progress' id="progress_div">
            <div class='bar' id='bar1'></div>
        </div>
        <div class='percent' id='percent1'>0%</div>
        <div class="loading-text">
            Loading...
        </div>
    </div>

    <script>
        // Inline JavaScript to reduce loader time
        window.addEventListener('load', function() {
            var loader = document.querySelector('.pre-loader');
            setTimeout(function() {
                loader.style.display = 'none';
            }, 500); // Adjust this delay (in milliseconds) to your desired timing
        });
    </script>
</div>


	<?php include('includes/navbar.php')?>

	<?php include('includes/right_sidebar.php')?>

	<?php include('includes/left_sidebar.php')?>

	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20">
			
		<div style="margin: 0; display: flex; justify-content: center; align-items: center; height: 100vh;">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7471127.282838746!2d73.12099380167898!3d23.889215555667523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39667381d35aea05%3A0xe0106b0d4e701c1e!2sMadhya%20Pradesh!5e0!3m2!1sen!2sin!4v1710575921905!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

			<?php include('includes/footer.php'); ?>
		</div>
	</div>
	<!-- js -->

	<?php include('includes/scripts.php')?>
</body>
</html>