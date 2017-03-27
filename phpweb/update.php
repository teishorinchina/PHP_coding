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

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form1")) {
  $updateSQL = sprintf("UPDATE websql SET name=%s, age=%s, `Result`=%s WHERE ID=%s",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['age'], "int"),
                       GetSQLValueString($_POST['Result'], "text"),
                       GetSQLValueString($_POST['ID'], "int"));

  mysql_select_db($database_webconn, $webconn);
  $Result1 = mysql_query($updateSQL, $webconn) or die(mysql_error());

  $updateGoTo = "index.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_rsupdate = "-1";
if (isset($_GET['ID'])) {
  $colname_rsupdate = $_GET['ID'];
}
mysql_select_db($database_webconn, $webconn);
$query_rsupdate = sprintf("SELECT * FROM websql WHERE ID = %s", GetSQLValueString($colname_rsupdate, "int"));
$rsupdate = mysql_query($query_rsupdate, $webconn) or die(mysql_error());
$row_rsupdate = mysql_fetch_assoc($rsupdate);
$totalRows_rsupdate = mysql_num_rows($rsupdate);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>成绩查询系统_成绩更新</title>
<style type="text/css">
.标题1居中 {	text-align: center;
}
</style>
</head>

<body>
<h1 align="center">PHP动态系统_数据更新
</h1>
<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
  <table width="600" border="1" align="center">
    <tr>
      <th width="143" scope="col">序号</th>
      <th width="143" scope="col">姓名</th>
      <th width="143" scope="col">年龄</th>
      <th width="143" scope="col">成绩</th>
    </tr>
    <tr>
      <td><label for="ID2"></label>
      <input name="ID" type="text" id="ID" value="<?php echo $row_rsupdate['ID']; ?>" readonly="readonly" /></td>
      <td><label for="name"></label>
      <input name="name" type="text" id="name" value="<?php echo $row_rsupdate['name']; ?>" /></td>
      <td><label for="age"></label>
      <input name="age" type="text" id="age" value="<?php echo $row_rsupdate['age']; ?>" /></td>
      <td><label for="Result"></label>
      <input type="text" name="Result" id="Result" value="<?php echo $row_rsupdate['Result']; ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="center"><input type="submit" name="更新" id="更新" value="更新" /></td>
      <td align="center"><input type="reset" name="重置" id="重置" value="重置" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
    <td colspan="5" align="center"><a href="index.php">返回</a></td>  
    </tr>
  </table>
  <input type="hidden" name="MM_update" value="form1" />
</form>
</body>
</html>
<?php
mysql_free_result($rsupdate);
?>
