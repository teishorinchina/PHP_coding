<?php require_once('Connections/webconn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

if ((isset($_GET['ID'])) && ($_GET['ID'] != "") && (isset($_POST['form1']))) {
  $deleteSQL = sprintf("DELETE FROM websql WHERE ID=%s",
                       GetSQLValueString($_GET['ID'], "int"));

  mysql_select_db($database_webconn, $webconn);
  $Result1 = mysql_query($deleteSQL, $webconn) or die(mysql_error());

  $deleteGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$colname_rsdel = "-1";
if (isset($_GET['ID'])) {
  $colname_rsdel = $_GET['ID'];
}
mysql_select_db($database_webconn, $webconn);
$query_rsdel = sprintf("SELECT * FROM websql WHERE ID = %s", GetSQLValueString($colname_rsdel, "int"));
$rsdel = mysql_query($query_rsdel, $webconn) or die(mysql_error());
$row_rsdel = mysql_fetch_assoc($rsdel);
$totalRows_rsdel = mysql_num_rows($rsdel);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>删除记录</title>
</head>

<body>
<h1 align="center"><strong>PHP_成绩查询系统_记录删除</strong></h1>
<hr />
<form id="form1" name="form1" method="post" action="">
  <table width="700" border="1" align="center">
    <tr>
      <th width="168" scope="col">序号</th>
      <th width="168" scope="col">姓名</th>
      <th width="168" scope="col">年龄</th>
      <th width="168" scope="col">成绩</th>
    </tr>
    <tr>
      <td><?php echo $row_rsdel['ID']; ?></td>
      <td><?php echo $row_rsdel['name']; ?></td>
      <td><?php echo $row_rsdel['age']; ?></td>
      <td><?php echo $row_rsdel['Result']; ?></td>
    </tr>
    <tr>
      <td colspan="4" align="center"><input type="submit" name="Del" id="Del" value="删除" /></td>
    </tr>
     <tr>
      <td colspan="4" align="right"><a href="index.php">返回</a></td>
    </tr>
  </table>

</form>
</body>
</html>
<?php
mysql_free_result($rsdel);
?>
