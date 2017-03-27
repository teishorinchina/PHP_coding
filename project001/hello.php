<form action="" method="POST" >
<input type = "text" name="test" />
<input type = "submit" name ="变量" value="提交" />
<br>
<?php
//POST表单变量
echo "<hr />";
echo "提交结果为：";
//echo $test;  //简短格式，需配置PHP。ini中的默认设置
echo $_POST["test"];//中等格式
//echo $HTTP_POST_VARS["test"];//冗长格式
?>
</form>