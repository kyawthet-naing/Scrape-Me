<?php
require("simple_html_dom.php");
$target = "https://www.york.ac.uk/teaching/cws/wws/webpage1.html?fbclid=IwAR3YVNkFmDI_TWixKivKaUlwQPdJx50Rx3rnu7CYGuo4u37HFtGW8fDc4kw";
$html = new simple_html_dom();
$html->load_file($target);

$title=$html->find("a",0)->innertext;

print($title);



