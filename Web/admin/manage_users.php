<?php 
define('ROOT_DIR', '../../');

require_once(ROOT_DIR . 'Pages/Admin/ManageUsersPage.php');

$page = new ManageUsersPage();
if ($page->TakingAction())
{
	$page->ProcessAction();
}
else if ($page->RequestingData())
{
	$page->ProcessDataRequest();
}
else 
{
	$page->PageLoad();
}
?>