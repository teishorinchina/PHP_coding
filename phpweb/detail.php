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

$colname_rsdetail = "-1";
if (isset($_GET['ID'])) {
  $colname_rsdetail = $_GET['ID'];
}
mysql_select_db($database_webconn, $webconn);
$query_rsdetail = sprintf("SELECT * FROM websql WHERE ID = %s", GetSQLValueString($colname_rsdetail, "int"));
$rsdetail = mysql_query($query_rsdetail, $webconn) or die(mysql_error());
$row_rsdetail = mysql_fetch_assoc($rsdetail);
$totalRows_rsdetail = mysql_num_rows($rsdetail);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP动态成绩查询系统</title>
<style type="text/css">
.标题1居中 {
	text-align: center;
}
</style>
</head>

<body>
<h1 class="标题1居中"><strong>PHP_成绩查询系统_成绩详情</strong></h1>
<table width="600" border="1" align="center">
  <tr>
    <th width="95" scope="col">序号</th>
    <th width="95" scope="col">姓名</th>
    <th width="95" scope="col">年龄</th>
    <th width="95" scope="col">成绩</th>
    <th width="186" scope="col">编辑</th>
  </tr>
  <tr>
    <td><?php echo $row_rsdetail['ID']; ?></td>
    <td><?php echo $row_rsdetail['name']; ?></td>
    <td><?php echo $row_rsdetail['age']; ?></td>
    <td><?php echo $row_rsdetail['Result']; ?></td>
    <td align="center"><a href="update.php?ID=<?php echo $row_rsdetail['ID']; ?>">更新</a>&nbsp;&nbsp;/&nbsp;&nbsp;<a href="del.php?ID=<?php echo $row_rsdetail['ID']; ?>">删除</a></td>
  </tr>
  <tr>
     <td colspan="5" align="center"><a href="index.php">返回</a></td>
   </tr>
</table>
<p>&nbsp;</p>
</body>
</html>
<?php
mysql_free_result($rsdetail);
?>
