<? php 

if (isset($_POST["submit"])) {
    echo "it worked";
}
else {
    header("Location: ../register.php");
}
