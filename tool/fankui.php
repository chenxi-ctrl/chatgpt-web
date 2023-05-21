
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  // 判断文件是否存在，如果不存在则创建文件
  $file = "feedback.txt";
  if (!file_exists($file)) {
    $handle = fopen($file, "w");
    fclose($handle);
  }

  // 将反馈信息写入文件
  $handle = fopen($file, "a");
  fwrite($handle, "姓名：$name
邮箱：$email
反馈信息：$message

");
  fclose($handle);
  echo "<script> alert('你的问题已成功提交，看到你的反馈后，我将通过邮件和你取得联系并且解决！'); </script>";
}
?>



<html><head><style>
form {
  max-width: 500px;
  margin: 0 auto;
}

label {
  display: block;
  margin-bottom: 10px;
}

input, textarea {
  display: block;
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #f5f5f5;
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  font-family: Arial, sans-serif;
  font-size: 16px;
  color: #333;
}

input:focus, textarea:focus {
  border-color: #333;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.2);
}

input[type="submit"] {
  display: block;
  margin-top: 20px;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  background-color: #333;
  color: #fff;
  font-family: Arial, sans-serif;
  font-size: 16px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #555;
}

@media screen and (max-width: 600px) {
  form {
    max-width: 100%;
    margin: 0;
  }
}
</style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/bootstrap.min2.css">

</head>

<body><br><br><br>
<form style="width: 80%;
    margin: 0 auto;" action="fankui.php" method="post">
    
    
  <label for="name">用户名：</label>
  <input type="text" id="name" name="name" required=""><br>

  <label for="email">邮箱：</label>
  <input type="email" id="email" name="email" required=""><br>

  <label for="message">你的问题：</label>
  <textarea id="message" name="message" required=""></textarea><br>

  <input type="submit" value="提交">
</form>



</body></html>