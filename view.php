<?php

$fh = fsockopen("koukoku.shadan.open.ad.jp", 23, $ec, $em);
while(!feof($fh)){ 
	$chunk = fread($fh, 2);
	echo mb_convert_encoding($chunk, 'utf-8', 'sjis');
}
