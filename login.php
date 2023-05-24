<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>LCS - FTI</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/logo (2).png">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>
<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container"><br><br>
            <div class="login-content" style="margin-top: 0; margin-bottom: 0;">
                <div class="login-logo" style="border: 0px solid white; margin-bottom: 2;">
					<img src="images/lcs logo 2.png">
                </div>
                <div class="login-form">
                    <form method=post action='proseslogin.php'>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="masukkan username" required>
                        </div>
						<div class="form-group">
                            <label>Section</label>
                            <select name="plan" class="form-control" required>
                                <option value="">- Pilih Section -</option>
								<option value="GA-EHS">GA-EHS - General Affairs-EHS</option>
								<option value="HR">HR - Human Resource</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="pass" class="form-control" placeholder="masukkan password" required>
                        </div>
                        <div class="checkbox">
                            <label class="pull-right">
                                <a href="form_lupa_pass.php">Lupa Password ?</a>
                            </label>

                        </div>
                                <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" style="margin-top: 5px;">Sign in</button>
                                <div class="register-link m-t-5 text-center" style="margin-top: 10px;">
                                    <p>Tidak mempunyai akun ? <a href="#"> Silahkan hubungin Admin.</a></p>
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    
<!-- Footer-->
		<div class="breadcrumbs" style="padding: 10px;">
			<footer id="header" class="header" style="color:white;">

				<div class="header-menu">

					<center>
						&copy;<script type="text/javascript">document.write( new Date().getFullYear() );</script>. All Right Reserved | PT Fuji Technica Indonesia
					</center>
					
				</div>
				
			</footer>
		</div>
			<!-- /Footer -->
<script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
