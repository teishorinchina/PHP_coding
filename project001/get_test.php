<form action="" method="get" >
<input type="text" name="test" />
<input type="submit" name="变量" value="提交" />
<br>
<?php 
echo "提交结果为：";
//echo $test;//简短格式，需要配置php.ini中的默认设置
echo $_GET["test"]; //中等格式，推荐使用此方法
//echo $HTTP_GET_VARS["test"];//冗长格式
?>
</form>
