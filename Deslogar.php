    <?php
session_start();

unlink($_SESSION['usuario']);

$_SESSION['usuario'] = null;

unlink($_SESSION['admin']);

$_SESSION['admin'] = null;

unlink($_SESSION);

header("Location: /Session.php");

session_destroy(); ?>