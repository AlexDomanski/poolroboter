<?php
function ta($in) {
	if(TESTMODUS>=1) {
		echo('<pre class="ta">');
		print_r($in);
		echo('</pre>');
	}
}
?>
