<?php
// ���Ƶ�ǰ�� ctrl+alt+��
echo "hello world!"; // ���hello world
echo "<hr />";
echo "hello world!"; // ���hello world
echo "<hr />";
echo "hello world!"; // ���hello world
echo "<hr/>";
// ɾ����ǰ�� ctrl+d
// �����л��� alt+��/��

// ��ע�� ctrl+/
// ��ע�� ctrl+shift+/
/* ��ע�� */
// ��ʾ���ֿ�ݼ� alt+/
echo "���������Ϊ��";
$ra = rand(1, 100);
// ��ת����ǰ��ĩβ�� end
echo "$ra";
// ����������� ctrl+f
// ȫ��������� ctrl+h
// �����ʽ��ctrl+shift+f
// ���浱ǰ�ļ�ctrl+s
// �رյ�ǰ�ļ� ctrl+w
// ��ţ�ƵĿ�ݼ� ctrl+shift+l ���г���ݼ��б�
$a = 5;
$min = 1;
$max = 100;
rand($min, $max);
echo "<hr />";
echo "nl2br()�������Խ������ַ�ת����HTML���е�<br>ָ��";
echo "�﷨��string nl2br(string string)";
$str = "���������һ������Ҳ�ܺã�
    ����ȥѧУ��Ӿ�����úõ��θ�Ӿ��";
echo "<br />";
// echo $str;
echo "<br />";
echo nl2br($str);
echo "<hr />";
echo "PHP֧��print�����ṹ��ʵ��echo���ܵ�ͬʱ���ܷ���ֵ��true��false���Ƿ�ɹ�����ʹ��printf��������ʵ�ָ����ӵĸ�ʽ��";
echo "<br />";
echo "�﷨��";
echo "<br />";
echo "int printf(string format,mixed [args]...);";
echo "<br />";
echo "����ֵ������";
echo "<br />";
echo "�������ࣺ���ϴ���";
echo "<br />";
$num = 3.6;
// ��num�����ֵ���ַ�������ʽ���
printf("��ֵΪ��%s", $num);
echo "<br />";

// ת����Ϊ������λС���ĸ�����
printf("��ֵΪ��%.2f", $num);
echo "<br />";

// ����Ϊ��������Ϊ�����������
printf("��ֵΪ��%b", $num);
echo "<br />";

// ��ӡ%����
printf("��ֵΪ��%%%s", $num);
echo "<br />";
echo "<hr />";

// ��ĸ�Ĵ�Сдת��
$str = "I like php!";

// ���ַ���ת���ɴ�д��ĸ
echo strtoupper($str) . "<br />";
echo "<br />";

// ���ַ���ת����Сд��ĸ
echo strtolower($str) . "<br />";
echo "<br />";

// ���ַ����ĵ�һ����ĸת�ɴ�д
echo ucfirst($str) . "<br />";

// ��ÿ�����ʵĵ�һ����ĸת�ɴ�д
echo ucwords($str) . "<br />";
echo "<hr />";

// �����ַ�������
$str = "\"'\NULL";
echo $str . "<br />"; // ֱ�����
echo addslashes($str) . "<br />"; // ʹ��addslashes�������
echo stripslashes($str) . "<br />"; // ʹ��stripslashes�������
echo "<hr />";

// post ������
echo "post ������" . "<br />";
echo "GET�� POST����Ҫ����" . "<br />";
echo "���ݴ��ݵķ�ʽ�Լ���С" . "<br />";
echo "GET�Ὣ���ݵ�������ʾ��URL��ַ�ϣ�POST�򲻻�" . "<br />";
echo "GET�������������ƣ�һ��������ݶ���ʹ��POST����" . "<br />";
echo "<hr />";

define("HOST", "www.126.com");
echo "����õĳ���Ϊ��" . HOST . "<hr />";

// ����
$wo = 'baidu'; // Ϊ����$wo��ֵ
$ba = &$wo; // ȡ����$ba�����˱���$wo��ֵ
$ba = "Web site is $ba"; // �޸ı���$ba��ֵ
echo $wo . "<br />"; // ���Ϊ��Web site is baidu��
echo $ba . "<br />"; // ����$ba��ֵҲ���޸ģ������$ba��ͬ
echo "<hr />";

// PHP�е���������
echo "boolean ������" . "<br />";
echo "integer ��������" . "<br />";
echo "float ������" . "<br />";
echo "string �ַ�����" . "<br />";
echo "array ����ͬһ��������ͬ���͵Ķ�������" . "<br />";
echo "object ����" . "<br />";
echo "�������͡��� resourece ��Դ �� NULL δ�趨" . "<br />";
echo "<hr />";

// PHP�е��ַ���
echo 'I\'m Tom' . "<br />"; // ���Ϊ�� I'm Tom�������ŷ�ʽ
echo 'Path is C:\windows\system\\' . "<br />"; // ���Ϊ�� I'm Tom
echo <<<abc
Hello World <br />
abc;
echo "<hr />";

// ���������
$a = array(
    "1" => "No1",
    "2" => "No2",
    "3" => "No3",
    "4" => "No4"
);

$b = array(
    "3" => "No3",
    "4" => "No4",
    "5" => "No5",
    "6" => "No6"
);
$c = $a + $b;
print_r($c); // ������������
echo "<br />";
if ($a == $b)
    echo "�ȼ�";
else
    echo "���ȼ�";
echo "<hr />";
// switch���
$aaaaa = 1;
switch ($aaaaa) {
    case 0:
        echo "aaaaa = 0";
        break;
    case 1:
        echo "aaaaa = 1";
        break;
    case 2:
        echo "aaaaa = 2";
        break;
}
echo "<hr />";

// while�������
$while_a = 1;
while ($while_a <= 5) {
    echo $while_a ++ . "<br />"; // ��1��5�������
}
echo "<hr />";

// forѭ����ӡ�žų˷���
for ($i = 1; $i < 10; $i ++) {
    for ($j = 1; $j < 10; $j ++) {
        echo "$i*$j=" . $i * $j;
        echo "&nbsp";
    }
    echo "<br />";
}
echo "<hr />";

// �������ݿ�
$conn = mysql_connect("localhost", "root", ""); // �������ݿ�������Ϣ
if (! $conn) {
    die('�����������ݿ�:' . mysql_error());
} else
    echo "�������ݿ�ɹ�" . "<br />";
    /*
 * if (mysql_query("CREATE DATABASE my_db",$conn)){
 * echo "Database created";
 * }
 * else {
 * echo "Error creating database:".mysql_error();
 * }
 */
    // �������ݿ�
mysql_select_db("my_db", $conn); // ��MySql��ѡ��my_db ������ݿ⣬�������в���
                                 
// ��SQL�������ַ�������
/*
 * $sql = "CREATE TABLE Persons
 * (
 * FirstName varchar(15),
 * LastName varchar(15),
 * Age int
 * )";
 * mysql_query($sql,$conn);//ִ��SQL��䣬����1=SQL��䣬����2=���ݿ�������Ϣ
 */

// ��������
/*
 * $sql = "CREATE TABLE Persons_test
 * (
 * personID int NOT NULL AUTO_INCREMENT,
 * PRIMARY KEY(personID),
 * FirstName varchar(15),
 * LastName varchar(15),
 * Age int
 * )";
 * mysql_query($sql,$conn);//ִ��SQL��䣬����1=SQL��䣬����2=���ݿ�������Ϣ
 */

// ��������
/*
 * mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
 * VALUES ('chen','yicai','35')");
 * mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
 * VALUES ('yu','heyun','28')");
 */
// ѡ������
$result = mysql_query("SELECT * FROM Persons");
while ($row = mysql_fetch_array($result)) {
    echo $row['FirstName'] . " " . $row['LastName'] . " " . $row['Age'] . "��";
    echo "<br />";
}
echo "<hr />";
// ������ѯ

$result2 = mysql_query("SELECT * FROM Persons WHERE FirstName='chen'");
while ($row = mysql_fetch_array($result2)) {
    echo $row['FirstName'] . " " . $row['LastName'];
    echo "<br />";
}
echo "<hr />";

// ��������
$result3 = mysql_query("SELECT * FROM Persons ORDER BY age");
while ($row = mysql_fetch_array($result3)) {
    echo $row['FirstName'];
    echo " " . $row['LastName'];
    echo " " . $row['Age'];
    echo "<br />";
}
echo "<hr />";

// ��������
mysql_query("UPDATE Persons SET Age = '38'
    WHERE FirstName = 'chen' AND LastName = 'yicai'");
echo "<hr />";

// ɾ������
mysql_query("DELETE FROM Persons WHERE LastName = 'yicai'");
echo "<hr />";

mysql_close($conn); // �ر����ݿ�����

?>

