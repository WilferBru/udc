<?php  
	session_start();

if (isset($_REQUEST)) {

    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
}

	$_SESSION = array();

	if (ini_get("session.use_cookies")) {
		
		$params = session_get_cookie_params();

		setcookie(session_name(),'',time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);
	}

	session_destroy();

	mysqli_close("localhost","root","","udc_jdng");

	if (isset($email)){

        header("location: ../index.php?a=validateLogin&email=$email&password=$password");
        die;
    }

	header('location: ../index.php');
?>