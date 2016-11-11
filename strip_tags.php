<?php 
$str='<p></p><a href="#">sss</a>';
echo  strip_tags($str,'<p><a>');//ÔÊĞíµÄ±êÇ©
$new = htmlspecialchars('<a href="test">Test</a>', ENT_QUOTES);
echo $new; // &lt;a href=&#039;test&#039;&gt;Test&lt;/a&gt;



echo "<a href='foo.php?text=".urlencode("foo?&bar!")."'>link</a>";

?>
