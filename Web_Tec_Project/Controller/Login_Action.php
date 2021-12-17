<?Php
	require_once "../Model/connection.php";

	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$rememberme = isset($_POST['rememberme']) ? $_POST['rememberme'] : null;

		if (empty($username)) {
			$errors[] = "Username Field is Required<br>";
			
		}
		elseif(empty($password)){
			$errors[] = "Password Field is Required<br>";
		}
		else {

			require_once "../Model/Login_Check.php";

			if ($login) {
				if ($rememberme === "on") {
					setcookie("username", $username, time() + 3600);
				}
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['password'] = $password;
				header("Location: ../View/NGO_Welcome_Page.php");
			} else {
				$errors[] = "Login Failed Please Try Again!<br>";

			}
		}
	}
	$conn->close();
?>