// logout.php
<?php
session_start();
session_unset();
session_destroy();
header('Location: /FJgames/index.html'); // Omdiriger tilbage til index.html
exit();
?>
