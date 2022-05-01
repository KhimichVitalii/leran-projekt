  <?php

$result = mail("test0test@test.ru","анкета с сайта","Сообщение (тело письма)");

if ($result) {
echo "<p>Сообщение отправлено</p>";
}
else {
    echo "<p>Сообщение  не отправлено</p>";
}
  ?>