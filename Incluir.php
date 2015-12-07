
    <?php
    if(isset($_POST['email'])){
$cookie_name = $_POST['email'];
setcookie("nome", $cookie_name, time() + (30), "/"); // 86400 = 1 day
    }
?>
