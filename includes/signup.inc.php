<? php 

if (isset($_POST["submit"])) {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];
    $pwdconfirm = $_POST["pwdconfirm"]

    require_once 'dbh.inc.php';
    require_once 'function.inc.php'
    

}
else {
    header("Location: ../register.php");
}
