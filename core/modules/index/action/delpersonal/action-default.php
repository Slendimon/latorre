<?php
$user = PersonalData::getById($_GET["id"]);
$user->del();
print "<script>window.location='index.php?view=personal';</script>";

?>