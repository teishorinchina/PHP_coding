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

//判断表单变量$_POST['MM_insert']是否被设置，且值是否等于form1，若是，则执行下面的插入记录动作
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO websql (name, age, `Result`) VALUES (%s, %s, %s)",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['age'], "int"),
                       GetSQLValueString($_POST['Result'], "text"));
//取值表单的变量
  mysql_select_db($database_webconn, $webconn);
  $Result1 = mysql_query($insertSQL, $webconn) or die(mysql_error());
//连接数据库执行SQL语句
  $insertGoTo = "index.php";//设置了在“插入记录”后要跳转的文件index.php，它被存储在变量$insertGoTo中。
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>增加记录</title>
</head>

<body>
<h1 align="center">增加记录</h1>
<form id="form1" name="form1" method="POST" action="<?php echo $editFormAction; ?>">
  <table width="346" border="1" align="center">
    <tr>
      <th width="105" scope="row">姓名：</th>
      <td width="225"><label for="name"></label>
      <input type="text" name="name" id="name" /></td>
    </tr>
    <tr>
      <th scope="row">年龄：</th>
      <td><label for="age"></label>
      <input type="text" name="age" id="age" /></td>
    </tr>
    <tr>
      <th scope="row">成绩：</th>
      <td><label for="Result"></label>
      <input type="text" name="Result" id="Result" /></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input type="submit" name="提交" id="提交" value="提交" />
      <input type="reset" name="重置" id="重置" value="重置" /></td>
    </tr>
    <tr>
     <td colspan="5" align="center"><a href="index.php">返回</a></td>
   </tr>
  </table>
  <input type="hidden" name="MM_insert" value="form1" />
</form>
</body>
</html>