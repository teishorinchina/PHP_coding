<form action="" method="POST" >
<input type = "text" name="test" />
<input type = "submit" name ="����" value="�ύ" />
<br>
<?php
//POST������
echo "<hr />";
echo "�ύ���Ϊ��";
//echo $test;  //��̸�ʽ��������PHP��ini�е�Ĭ������
echo $_POST["test"];//�еȸ�ʽ
//echo $HTTP_POST_VARS["test"];//�߳���ʽ
?>
</form>