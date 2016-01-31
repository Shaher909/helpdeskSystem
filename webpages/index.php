<?php $page_title = "Login Portal"; include("head.php"); ?>
<body>
	<?php include("navbar.php"); ?>
	<div>
		<div class="container">
		    <div class="row">
		        <div class="col-sm-6 col-md-4 col-md-offset-4">
		            <h1 class="text-center login-title">Please Sign in to continue</h1>
		            <div class="account-wall">
		                <img class="profile-img" src="../img/ta_logo.jpg"
		                    alt="">
		                <form class="form-signin">
			                <input type="text" class="form-control" placeholder="TA ID" required autofocus>
			                <input type="password" class="form-control" placeholder="Password" required>
			                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		                </form>
		            </div>
		            <a class="text-center new-account">Please Contact Admin Department for Login Issue</a>
		        </div>
		    </div>
		</div>
	</div>
	<?php include("footer.php"); ?>
	<!-- jQuery -->
    <script type="text/javascript" src="../content/jQuery.1.9.1/jquery-1.9.1.min.js"></script>

    <!-- Bootstrap Min JavaScript -->
    <script type="text/javascript" src="../content/bootstrap.3.3.6/Scripts/bootstrap.min.js"></script>
</body>
</html>