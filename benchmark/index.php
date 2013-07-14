<?php
error_reporting(-1);

if(!function_exists(temple_prepare)){
	die ("Unable to find the temple_prepare functions, please ensure that the extension is loaded.");
}


$num = 5000000;
$template = temple_prepare("Hello, my name is ?. What is your name\?<br/>");
$start = microtime(true);
for($i = 0; $i < $num; $i++){
	$name = "James";
	temple_template_bind_param($template, "s", $name);
	temple_template_fetch($template);
	$name = "Fred";
	temple_template_fetch($template);
}
$end = microtime(true);
temple_template_close($template);
echo "Temple start=$start, end=$end; delta=" . ($end - $start) . "<br/>";

$start = microtime(true);
for($i = 0; $i < $num; $i++){
	$str = sprintf("Hello my name is %s. What is your name?<br/>", "James");
	//echo $str;
	$str = sprintf("Hello my name is %s. What is your name?<br/>", "Fred");
	//echo $str;
}
$end = microtime(true);
echo "sprintf start=$start, end=$end; delta=" . ($end - $start) . "<br/>";

echo "Done.";
?>
