<?php
// 定义变量并默认设置为空值
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}

function test_input($data)
{
  $data = trim($data);// trim() 函数去除用户输入数据中不必要的字符 (如：空格，tab，换行)。
  $data = stripslashes($data);// stripslashes()函数去除用户输入数据中的反斜杠 (\)
  $data = htmlspecialchars($data);//htmlspecialchars把一些预定义的字符转换为 HTML 实体。
  return $data;
}
?>