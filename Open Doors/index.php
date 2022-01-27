<?php
include_once 'config/init.php';
?>

<?php
$template = new Template('Templates/frontpage.php');
$template->title = 'latest jobs';
echo $template;
?>