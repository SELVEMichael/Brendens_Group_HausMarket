
<?php
session_start();

session_unset();

session_destroy();

header("Location: /Brendens_Group_HausMarket/frontend/index.php");
exit();
?>
