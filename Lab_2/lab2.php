<?php

	require './_config.php';

/*
	$smarty -> assign('date', date('D'));
	
	$smarty -> assign('HEAD', $smarty -> fetch('head.tpl'));
	
*/
	$smarty -> assign('time', date('H:i:s'));
	#$smarty -> assign('FOOTER', $smarty -> fetch('footer.tpl'));
	$smarty -> display('main.tpl');

?>