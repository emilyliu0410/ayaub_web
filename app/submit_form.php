<?php

$inputName = '';
$inputCompanyName = '';
$inputEmail = '';
$inputPhone = '';

if(isset($_POST['inputName']) && isset($_POST['inputCompanyName']) && isset($_POST['inputEmail']) && isset($_POST['inputPhone']) && $_POST['inputName']!='' && $_POST['inputCompanyName']!='' && $_POST['inputEmail']!='' && $_POST['inputPhone']!='')
{
	$inputName = $_POST['inputName'];
	$inputCompanyName = $_POST['$inputCompanyName'];
	$inputEmail = $_POST['inputEmail'];
	$inputPhone = $_POST['inputPhone'];
}
else
{
    echo '<script>alert("閣下的資料不正確。");location.href = "index.php";</script>';
	exit;
}

$EMAIL_BODY = '
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<style>
.table, th, td {
  border: none;
}
.email_table, .email_table th, .email_table td {
  border: 1px solid black !important;
  border-collapse: collapse !important;
}
th, td {
  padding: 5px;
  text-align: left;
}
</style>
</head>
<body style="margin:0px;">
<table class="email_table" width="760" height="auto" cellpadding="0" cellspacing="10" border="0" align="center" style="padding-top:20px; padding-bottom:30px;">
		<tr>
			<td>
	<p>客人資料</p>
    <table style="width:100%; border: 1px solid black;border-collapse: collapse;">
	  <tr>
		<th>姓名:</th>
		<th>'.$inputName.'</th>
	  </tr>
	  <tr>
		<td>公司名稱:</td>
		<td>'.$inputCompanyName.'</td>
	  </tr>
	  <tr>
		<td>電郵:</td>
		<td>'.$inputEmail.'</td>
	  </tr>
      <tr>
		<td>聯繫電話:</td>
		<td>'.$inputPhone.'</td>
	  </tr>
	</table>
</body>
</html>
';
mail('tszkinleung@etnet.com.hk','AyauB - 參與合作計劃 - '.$client_title, 'Content-type:text/html;charset=UTF-8');
echo '<script>alert("我們已收到閣下的資料，相關人員將儘快聯絡閣下跟進。");location.href = "index.php";</script>';
exit;