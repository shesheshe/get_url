<?php

if ($argc == 1)	{
	print_use();
	die;
}

require('lib/preg.php');

$sUrl = $argv[1];
$sPreg = $argv[2]==''?'all_html':$argv[2];

//下載url
$preg->go($sUrl);

//開始掃描
$preg->get($sPreg);

function print_use() {
	echo "提示: php index.php {url} {preg}\n";
}