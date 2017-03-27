<?php
// 复制当前行 ctrl+alt+↓
echo "hello world!"; // 输出hello world
echo "<hr />";
echo "hello world!"; // 输出hello world
echo "<hr />";
echo "hello world!"; // 输出hello world
echo "<hr/>";
// 删除当前行 ctrl+d
// 上下行互换 alt+↑/↓

// 行注释 ctrl+/
// 块注释 ctrl+shift+/
/* 块注释 */
// 提示助手快捷键 alt+/
echo "本次随机数为：";
$ra = rand(1, 100);
// 跳转到当前行末尾用 end
echo "$ra";
// 调出查找面板 ctrl+f
// 全文搜索面板 ctrl+h
// 代码格式化ctrl+shift+f
// 保存当前文件ctrl+s
// 关闭当前文件 ctrl+w
// 最牛逼的快捷键 ctrl+shift+l （列出快捷键列表）
$a = 5;
$min = 1;
$max = 100;
rand($min, $max);
echo "<hr />";
echo "nl2br()函数可以将换行字符转换成HTML换行的<br>指令";
echo "语法：string nl2br(string string)";
$str = "今天的是周一，心情也很好，
    决定去学校游泳场，好好的游个泳。";
echo "<br />";
// echo $str;
echo "<br />";
echo nl2br($str);
echo "<hr />";
echo "PHP支持print（）结构在实现echo功能的同时还能返回值（true或false，是否成功），使用printf（）可以实现更复杂的格式。";
echo "<br />";
echo "语法：";
echo "<br />";
echo "int printf(string format,mixed [args]...);";
echo "<br />";
echo "返回值：整数";
echo "<br />";
echo "函数种类：资料处理";
echo "<br />";
$num = 3.6;
// 将num里的数值以字符串的形式输出
printf("数值为：%s", $num);
echo "<br />";

// 转换成为带有两位小数的浮点数
printf("数值为：%.2f", $num);
echo "<br />";

// 解释为整数并作为二进制数输出
printf("数值为：%b", $num);
echo "<br />";

// 打印%符号
printf("数值为：%%%s", $num);
echo "<br />";
echo "<hr />";

// 字母的大小写转换
$str = "I like php!";

// 将字符串转换成大写字母
echo strtoupper($str) . "<br />";
echo "<br />";

// 将字符串转换成小写字母
echo strtolower($str) . "<br />";
echo "<br />";

// 将字符串的第一个字母转成大写
echo ucfirst($str) . "<br />";

// 将每个单词的第一个字母转成大写
echo ucwords($str) . "<br />";
echo "<hr />";

// 特殊字符处理函数
$str = "\"'\NULL";
echo $str . "<br />"; // 直接输出
echo addslashes($str) . "<br />"; // 使用addslashes函数输出
echo stripslashes($str) . "<br />"; // 使用stripslashes函数输出
echo "<hr />";

// post 表单变量
echo "post 表单变量" . "<br />";
echo "GET和 POST的主要区别" . "<br />";
echo "数据传递的方式以及大小" . "<br />";
echo "GET会将传递的数据显示在URL地址上，POST则不会" . "<br />";
echo "GET传递数据有限制，一般大量数据都得使用POST方法" . "<br />";
echo "<hr />";

define("HOST", "www.126.com");
echo "定义好的常量为：" . HOST . "<hr />";

// 变量
$wo = 'baidu'; // 为变量$wo赋值
$ba = &$wo; // 取变量$ba引用了变量$wo的值
$ba = "Web site is $ba"; // 修改变量$ba的值
echo $wo . "<br />"; // 结果为“Web site is baidu”
echo $ba . "<br />"; // 变量$ba的值也被修改，结果与$ba相同
echo "<hr />";

// PHP中的数据类型
echo "boolean 布尔型" . "<br />";
echo "integer 整数类型" . "<br />";
echo "float 浮点型" . "<br />";
echo "string 字符串型" . "<br />";
echo "array 数组同一变量保存同类型的多条数据" . "<br />";
echo "object 对象" . "<br />";
echo "特殊类型—— resourece 资源 和 NULL 未设定" . "<br />";
echo "<hr />";

// PHP中的字符串
echo 'I\'m Tom' . "<br />"; // 输出为： I'm Tom，单引号方式
echo 'Path is C:\windows\system\\' . "<br />"; // 输出为： I'm Tom
echo <<<abc
Hello World <br />
abc;
echo "<hr />";

// 数组的联合
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
print_r($c); // 联合两个数组
echo "<br />";
if ($a == $b)
    echo "等价";
else
    echo "不等价";
echo "<hr />";
// switch语句
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

// while语句例子
$while_a = 1;
while ($while_a <= 5) {
    echo $while_a ++ . "<br />"; // 从1到5依次输出
}
echo "<hr />";

// for循环打印九九乘法表
for ($i = 1; $i < 10; $i ++) {
    for ($j = 1; $j < 10; $j ++) {
        echo "$i*$j=" . $i * $j;
        echo "&nbsp";
    }
    echo "<br />";
}
echo "<hr />";

// 连接数据库
$conn = mysql_connect("localhost", "root", ""); // 定义数据库连接信息
if (! $conn) {
    die('不能连接数据库:' . mysql_error());
} else
    echo "连接数据库成功" . "<br />";
    /*
 * if (mysql_query("CREATE DATABASE my_db",$conn)){
 * echo "Database created";
 * }
 * else {
 * echo "Error creating database:".mysql_error();
 * }
 */
    // 创建数据库
mysql_select_db("my_db", $conn); // 在MySql中选中my_db 这个数据库，对它进行操作
                                 
// 将SQL语句放入字符串变量
/*
 * $sql = "CREATE TABLE Persons
 * (
 * FirstName varchar(15),
 * LastName varchar(15),
 * Age int
 * )";
 * mysql_query($sql,$conn);//执行SQL语句，参数1=SQL语句，参数2=数据库连接信息
 */

// 设置主键
/*
 * $sql = "CREATE TABLE Persons_test
 * (
 * personID int NOT NULL AUTO_INCREMENT,
 * PRIMARY KEY(personID),
 * FirstName varchar(15),
 * LastName varchar(15),
 * Age int
 * )";
 * mysql_query($sql,$conn);//执行SQL语句，参数1=SQL语句，参数2=数据库连接信息
 */

// 插入数据
/*
 * mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
 * VALUES ('chen','yicai','35')");
 * mysql_query("INSERT INTO Persons (FirstName, LastName, Age)
 * VALUES ('yu','heyun','28')");
 */
// 选择数据
$result = mysql_query("SELECT * FROM Persons");
while ($row = mysql_fetch_array($result)) {
    echo $row['FirstName'] . " " . $row['LastName'] . " " . $row['Age'] . "岁";
    echo "<br />";
}
echo "<hr />";
// 条件查询

$result2 = mysql_query("SELECT * FROM Persons WHERE FirstName='chen'");
while ($row = mysql_fetch_array($result2)) {
    echo $row['FirstName'] . " " . $row['LastName'];
    echo "<br />";
}
echo "<hr />";

// 数据排序
$result3 = mysql_query("SELECT * FROM Persons ORDER BY age");
while ($row = mysql_fetch_array($result3)) {
    echo $row['FirstName'];
    echo " " . $row['LastName'];
    echo " " . $row['Age'];
    echo "<br />";
}
echo "<hr />";

// 更新数据
mysql_query("UPDATE Persons SET Age = '38'
    WHERE FirstName = 'chen' AND LastName = 'yicai'");
echo "<hr />";

// 删除数据
mysql_query("DELETE FROM Persons WHERE LastName = 'yicai'");
echo "<hr />";

mysql_close($conn); // 关闭数据库连接

?>

