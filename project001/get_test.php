<form action="" method="get" >
<input type="text" name="test" />
<input type="submit" name="����" value="�ύ" />
<br>
<?php 
echo "�ύ���Ϊ��";
//echo $test;//��̸�ʽ����Ҫ����php.ini�е�Ĭ������
echo $_GET["test"]; //�еȸ�ʽ���Ƽ�ʹ�ô˷���
//echo $HTTP_GET_VARS["test"];//�߳���ʽ
?>
</form>
