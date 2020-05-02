#! /usr/bin/php
<?php
// Gausah ganti CopyRight kalo lu mau di hargai
// Yang ganti copyright mandul 7turunan fix ea
// By Mr.Cakil - 99Syndicate
print "[ =========================================================================== ]\n";
	print " --> admin page finder v1 <--\n";
	print " -==Coded by Mr. Cakil 99syndicate ==-\n";
	print " -= greetz: 99Syndicate - hacker patah hati =-\n";
	print "--> usage: php namafile.php http://lusuka.coli start <--\n";
	print "[ =========================================================================== ]\n\n";
$cakil = array();
function run($array,$kentod){
	for($i = 0;$i < count($array); $i++){
		$url = $kentod."/".urlencode($array[$i]);
		$url = str_replace("%0A","",$url);
		$url = str_replace("%2F","/",$url);
		$headers = exec("curl -A \"Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_3 like Mac OS X; en-us) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5\" -s -o /dev/null -I -w \"%{http_code}\" $url");
                $headers = str_replace("%","",$headers);
		echo $url." [".$headers."]\n";
		if($headers == "200") 
		{
			$cakil[] = $url;		
		}
	}
	print_r($cakil);
}
if(isset($_SERVER['argv'][1]) and isset($_SERVER['argv'][2])){
	$act2 = $_SERVER['argv'][2];
	$kentod = $_SERVER['argv'][1];
		$link = array(
	"php"	 => array('admin',
'adm',
'concluido',
'concluido/loading.php',
'admin',
'painel',
'admin_panel',
'admin_login',
'admin_tela',
'data_base.php',
'config.php',
'*.json',
'*.txt',
'*.php',
'*.html',
'cartoes',

'ADMIN/login.php',
'panelc/',
'ADMIN/login.html'),
	);
	switch($act2){
		
		case "start":
			run($link["php"],$kentod);
		break;
		
	
	}
	}

else {
print "[Copyright2017@Mr.Cakil]\n\n";
}
?>