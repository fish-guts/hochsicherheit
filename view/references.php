<?php
	ini_set('display_errors', 1);
	error_reporting(~0);
	require_once(ROOT_PATH."/inc/referencesImpl.php");
	$page = new References();
?>
	<table width="100%">
			<tr>
				<td class="title"><?php echo $page->getPageTitle(); ?> <br /></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
			</tr>	
				<tr>
		        	<?php echo $page->getPageContent(); ?>
		    	</tr>
	</table>
