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

'admincp',

'admcp',

'admin123',

'cp',

'modcp',

'moderatorcp',

'adminarea',

'admins',

'cpanel',

'controlpanel',

'admin1.php',

'admin1.php',

'admin1.html',

'admin2.php',

'adminweb/',

'adminweb/index.php',

'redaktur/index.php',

'v2/login/',

'adminback/',

'alahamdulillah/',

'entry/',

'enter/',

'w3b4dm1n/',

'demo/',

'panel/',

'admini/',

'administrator-login/',

'admin-login/',

'juragan/',

'adminedit/',

'tinymcpuk/',

'tinymcpuk/filemanager/',

'kcfinder/browser.php',

'kcfinder/upload.php',

'admins/',

'sika/',

'develop/',

'Admin/',

'lobangdotid/',

'timadmin/',

'dinkesadmin/',

'pemkoadmin/',

'pemko/',

'login-page/',

'page-login/',

'admin-page/',

'page-admin/',

'admintoko/',

'login-2/',

'eklinik/',

'admin_pmi/',

'paneladminweb/',

'@dm1npu5@t/',

'library/',

'adminpusat/',

'@dm1np3ngd@/',

'web-admin2/',

'@dm1nw3b/',

'bpm4dm1n/',

'@dm1n/',

'pengada/',

'adminpengada/',

'adminarea/',

'crm/',

'recruitment/',

'kodim/',

'bpm4dm1n/',

'4dminweb/',

'loginadmin/',

'jp/login/',

'statis-1-pengantar.html',

'statis--1-profil.html',

'kategori-23-hiburan.html',

'paneladmin/',

'pmb/',

'gapura/',

'editmin/',

'editadmin/',

'e_office/',

'agenda/',

'b_office/',

'log/',

'adminwebsecurity/',

'security/',

'dokumen/',

'login1/',

'direkturweb/',

'sapk/',

'pmb/index.php',

'index.php/loginpmb/',

'bppd/',

'4dm1n/',

'4dm1n1stras1/',

'member/',

'ketua/',

'guru/',

'adminer/',

'adminer.php',

'pemerintah/',

'dinas/',

'rumah/',

'admin@web/',

'admin@web/index.php',

'administrasi/index.php',

'login_area/index.php',

'masterweb/',

'rahasia/',

'terminal/',

'masterweb/index.php',

'webadmin/index.php',

'v2/',

'admin-web/',

'old/',

'dulu/',

'old/adminweb/',

'_file-manager/',

'webadmin/',

'superuser/',

'redakturweb/',

'simpeg/',

'programmer/',

'programmerweb/',

'owner/',

'ownerweb/',

'ceo/',

'ceoweb/',

'terminal/',

'monitor/',

'portal/',

'portaladmin/',

'terasadmin/',

'adminkpu/',

'admindinkes/',

'jdih/',

'manager/',

'data/',

'webmin/',

'myadmin/',

'leb/',

'w3bc0ntr0l/',

'adminkoster/',

'panel/',

'pegawai/',

'staffadmin/',

'upload.php',

'counterweb/',

'ereporting/',

'web-admin/index.php',

'index.php/adminweb/',

'author/adminweb/',

'author/webadmin/index.php',

'author/admin/',

'developer/',

'guru/index.php',

'loginguru/',

'lama/adminweb/',

'backup/login/',

'backup/adminweb/',

'author/',

'admin.web/',

'v1/login/',

'v2/admin/',

'v2/admin/',

'adminn/',

'staff/',

'atur/',

'loginpage/',

'adminarea/',

'formadmin/',

'admin/index.php',

'index.php/login',

'member/login.php',

'memberarea/',

'wp-admin/',

'wp-login.php',

'mlebu/index.php',

'webadmin/index.php',

'master/',

'redaktur/',

'redaktur/index.php',

'default.php',

'robots.txt',

'administrator/',

'administrator/index.php',

'masuk/index.php',

'kamaradmin/index.php',

'logon/index.php',

'administrasi/index.php',

'webmaster/index.php',

'webmaster/',

'cek_login.php',

'operator/',

'loginpt/',

'jendral/',

'boss/',

'adminpt/',

'adminsekolah/',

'kampus/',

'dosen/',

'koperadmin/',

'pengelolaweb/',

'pengelola/',

'loginweb/',

'guru/',

'adminsd/',

'adminsmk/',

'admin123/',

'admin123/login.php',

'123/',

'redtubby/',

'@dmin/',

'@dminweb/',

'adminsekolah/',

'loginsmp/',

'superadmin/',

'webadmin/',

'sisurip/',

'master/',

'menu/',

'menuweb/',

'menuadmin/',

'masterweb/',

'adminsma/',

'adminsmp/',

'paneladmin/',

'adminpanel/',

'control/',

'portaladmin/',

'adminnimda/',

'loginsma/',

'operator/index.php',

'logout.php',

'penulis/',

'file/',

'xpanel/',

'staf/',

'download/',

'files/',

'1admin/',

'2admin/',

'web/',

'loggin/',

'adm/',

'c_admin/',

'c_panel/',

'controladmin/',

'control/',

'Admn/',

'html/',

'nimda/',

'mrnimda/',

'adminwebupt/',

'adminsiswa/',

'adminguru/',

'korpriadmin/',

'pemkab/',

'pemkabadmin/',

'po-admin/',

'cms/index.php',

'index.php/login',

'adminarea',

'admin2.html',

'yonetim.php',

'ccms/',

'panitia/',

'posko/',

'adminpn/',

'loginpn/',

'v2/admin/',

'login@web/',

'loginweb/',

'konten/',

'dinas/',

'dashboard/',

'inside/',

'insite/',

'loginsite/',

'_adminweb/',

'duhul/',

'dukhul/',

'masukin/',

'akademik/',

'templates/',

'simaset/',

'ccms/login.php',

'ccms/index.php',

'maintenance/',

'webmaster/',

'adm/',

'config/',

'configuration/',

'kontenweb/',

'configure/',

'websvn/',

'ketua/',

'_file-manager/php/connector.php',

'panitia/',

'loginpanitia/',

'pemerintah/',

'cybercrime/',

'adipura/',

'pintumasuk/',

'pintu/',

'tersembunyi/',

'kepsek/',

'adminkepsek/',

'adminbk/',

'bapeda/',

'loggin/',

'admin/',

'admin.php',

'admin.html',

'admin/cp.php',

'admin/cp.html',

'cp.php',

'cp.html',

'siakad/',

'journal/',

'sia/',

'fakultas/',

'pegawai/',

'petugas/',

'penjaga/',

'4dminW3B/',

'adminhotel/',

'config/',

'akademik/',

'admin2017/',

'admin2016/',

'2016/',

'intranet/',

'2017/',

'admin2015/',

'indonesia/',

'garuda/',

'g4rud4/',

'kelolaweb/',

'aturweb/',

'counter/',

'bpadmin/',

'suradmin/',

'basecamp/',

'padmin/',

'pengaturan/',

'setting/',

'settingweb/',

'redaksi/',

'adminweb1/',

'redaktur1/',

'masukweb/',

'redaksiweb/',

'users/',

'usr/',

'user/',

'loginuser/',

'logincms/',

'backupadmin/',

'backup/',

'b4ckup/',

'adminhost/',

'admincms/',

'min/',

'in/',

'minweb/',

'userlogin/',

'adminkampus/',

'redaksiweb/',

'adweb/',

'bismillah/',

'adweb2_cad/',

'kuncen/',

'admin12/',

'dasboard/',

'administrator/',

'administrator.php',

'administrator.html',

'login.php',

'login.html',

'modelsearch/login.php',

'moderator.php',

'moderator.html',

'moderator/',

'moderator/login.html',

'moderator/admin.php',

'moderator/admin.html',

'moderator/',

'account.php',

'account.html',

'controlpanel/',

'controlpanel.php',

'controlpanel.html',

'admincontrol.php',

'admincontrol.html',

'adminpanel.php',

'adminpanel.html',

'admin1.asp',

'admin2.asp',

'yonetim.asp',

'yonetici.asp',

'admin/account.asp',

'admin/index.asp',

'admin/login.asp',

'admin/home.asp',

'admin/controlpanel.asp',

'admin.asp',

'admin/cp.asp',

'cp.asp',

'administrator/index.asp',

'administrator/login.asp',

'administrator/account.asp',

'administrator.asp',

'login.asp',

'modelsearch/login.asp',

'moderator.asp',

'moderator/login.asp',

'moderator/admin.asp',

'account.asp',

'controlpanel.asp',

'admincontrol.asp',

'adminpanel.asp',

'fileadmin/',

'fileadmin.php',

'fileadmin.asp',

'fileadmin.html',

'wpanel',

'wpanel/index.php',

'wpanel/login.php',

'adminpanel',

'adminpanel/index.php',

'adminpanel/login.php',

'adminkec',

'adminkec/index.php',

'adminkec/login.php',

'admindesa',

'admindesa/index.php',

'admindesa/login.php',

'adminkota',

'adminkota/index.php',

'adminkota/login.php',

'administration/',

'administration.php',

'administration.html',

'sysadmin.php',

'sysadmin.html',

'phpmyadmin/',

'myadmin/',

'sysadmin.asp',

'sysadmin/',

'ur-admin.asp',

'ur-admin.php',

'ur-admin.html',

'ur-admin/',

'Server.php',

'Server.html',

'Server.asp',

'Server/',

'wp-admin/',

'administr8.php',

'administr8.html',

'administr8/',

'administr8.asp',

'webadmin/',

'webadmin.php',

'webadmin.asp',

'webadmin.html',

'administratie/',

'admins/',

'admins.php',

'admins.asp',

'admins.html',

'administrivia/',

'Database_Administration/',

'WebAdmin/',

'useradmin/',

'sysadmins/',

'admin1/',

'system-administration/',

'administrators/',

'pgadmin/',

'directadmin/',

'staradmin/',

'ServerAdministrator/',

'SysAdmin/',

'administer/',

'LiveUser_Admin/',

'sys-admin/',

'typo3/',

'panel/',

'cpanel/',

'cPanel/',

'cpanel_file/',

'platz_login/',

'rcLogin/',

'blogindex/',

'formslogin/',

'autologin/',

'support_login/',

'meta_login/',

'manuallogin/',

'simpleLogin/',

'loginflat/',

'utility_login/',

'showlogin/',

'memlogin/',

'members/',

'login-redirect/',

'sub-login/',

'wp-login/',

'login1/',

'dir-login/',

'login_db/',

'xlogin/',

'smblogin/',

'customer_login/',

'UserLogin/',

'login-us/',

'acct_login/',

'admin_area/',

'bigadmin/',

'project-admins/',

'phppgadmin/',

'pureadmin/',

'sql-admin/',

'radmind/',

'openvpnadmin/',

'wizmysqladmin/',

'vadmind/',

'ezsqliteadmin/',

'hpwebjetadmin/',

'newsadmin/',

'adminpro/',

'Lotus_Domino_Admin/',

'bbadmin/',

'vmailadmin/',

'Indy_admin/',

'ccp14admin/',

'irc-macadmin/',

'banneradmin/',

'sshadmin/',

'phpldapadmin/',

'macadmin/',

'administratoraccounts/',

'admin4_account/',

'admin4_colon/',

'radmind-1/',

'Super-Admin/',

'AdminTools/',

'cmsadmin/',

'SysAdmin2/',

'globes_admin/',

'cadmins/',

'phpSQLiteAdmin/',

'navSiteAdmin/',

'server_admin_small/',

'logo_sysadmin/',

'server/',

'database_administration/',

'power_user/',

'system_administration/',

'ss_vms_admin_sm/',

'adminarea/',

'bb-admin/',

'adminLogin/',

'panel-administracion/',

'instadmin/',

'memberadmin/',

'administratorlogin/',

'admin/admin.php',

'admin_area/admin.php',

'admin_area/',

'siteadmin/login.php',

'siteadmin/index.php',

'siteadmin/login.html',

'admin/admin.html',

'admin_area/index.php',

'bb-admin/index.php',

'bb-admin/login.php',

'bb-admin/admin.php',

'admin_area/login.html',

'admin_area/index.html',

'admincp/index.asp',

'admincp/login.asp',

'admincp/index.html',

'webadmin/index.html',

'webadmin/admin.html',

'webadmin/login.html',

'admin/admin_login.html',

'admin_login.html',

'panel-administracion/login.html',

'nsw/admin/login.php',

'webadmin/login.php',

'admin/admin_login.php',

'admin_login.php',

'admin_area/admin.html',

'pages/admin/admin-login.php',

'admin/admin-login.php',

'admin-login.php',

'bb-admin/index.html',

'bb-admin/login.html',

'bb-admin/admin.html',

'admin/home.html',

'pages/admin/admin-login.html',

'admin/admin-login.html',

'admin-login.html',

'admin/adminLogin.html',

'adminLogin.html',

'home.html',

'rcjakar/admin/login.php',

'adminarea/index.html',

'adminarea/admin.html',

'webadmin/index.php',

'webadmin/admin.php',

'user.html',

'modelsearch/login.html',

'adminarea/login.html',

'panel-administracion/index.html',

'panel-administracion/admin.html',

'modelsearch/index.html',

'modelsearch/admin.html',

'admincontrol/login.html',

'adm/index.html',

'adm.html',

'user.php',

'panel-administracion/login.php',

'wp-login.php',

'adminLogin.php',

'admin/adminLogin.php',

'home.php',

'adminarea/index.php',

'adminarea/admin.php',

'adminarea/login.php',

'panel-administracion/index.php',

'panel-administracion/admin.php',

'modelsearch/index.php',

'modelsearch/admin.php',

'admincontrol/login.php',

'adm/admloginuser.php',

'admloginuser.php',

'admin2/login.php',

'admin2/index.php',

'adm/index.php',

'adm.php',

'affiliate.php',

'adm_auth.php',

'memberadmin.php',

'administratorlogin.php',

'admin/admin.asp',

'admin_area/admin.asp',

'admin_area/login.asp',

'admin_area/index.asp',

'bb-admin/index.asp',

'bb-admin/login.asp',

'bb-admin/admin.asp',

'pages/admin/admin-login.asp',

'admin/admin-login.asp',

'admin-login.asp',

'user.asp',

'webadmin/index.asp',

'webadmin/admin.asp',

'webadmin/login.asp',

'admin/admin_login.asp',

'admin_login.asp',

'panel-administracion/login.asp',

'adminLogin.asp',

'admin/adminLogin.asp',

'home.asp',

'adminarea/index.asp',

'adminarea/admin.asp',

'adminarea/login.asp',

'panel-administracion/index.asp',

'panel-administracion/admin.asp',

'modelsearch/index.asp',

'modelsearch/admin.asp',

'admincontrol/login.asp',

'adm/admloginuser.asp',

'admloginuser.asp',

'admin2/login.asp',

'admin2/index.asp',

'adm/index.asp',

'adm.asp',

'affiliate.asp',

'adm_auth.asp',

'memberadmin.asp',

'administratorlogin.asp',

'siteadmin/login.asp',

'siteadmin/index.asp',

'ADMIN/',

'paneldecontrol/',

'login/',

'cms/',

'admon/',

'ADMON/',

'administrador/',

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

?>O que outras pessoas estão dizendo
