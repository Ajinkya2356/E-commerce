<?php
session_start();
session_unset();
session_destroy();
echo '
<script>
alert("Logout Successful ");
window.location.href="home3.php";
</script>'
;
exit;
?>