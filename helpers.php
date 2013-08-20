<?php 

/**
 * Debugging helper
 *
 * @param	mixed	content to be displayed
 * @return  void
 */
function dump($msg = null)
{
	echo '<pre>'; var_dump($msg); echo '</pre>';
}