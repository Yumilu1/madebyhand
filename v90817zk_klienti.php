

<?php

if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['message'])){
    $name = $_POST['name'];
    $number = $_POST['phone'];
    $number_1 = (int) $number; 
    $sms = $_POST['message'];

    $host = 'localhost';
    $user = 'v90817zk_klienti';
    $pass = "&6XHv%1u";
    $db_name = "v90817zk_klienti"; 
    $link = mysqli_connect($host, $user, $pass, $db_name); // Соединяемся с базой

    if (!$link) {
      echo 'Не могу соединиться с БД. Код ошибки: ' . mysqli_connect_errno() . ', ошибка: ' . mysqli_connect_error();
      exit;
    }

    if (isset($name) && isset($number) && isset($sms)) {

        $sql = mysqli_query($link, "INSERT INTO `users` (`name`, `number`, `sms`) VALUES ('{$name}', '{$number_1}', '{$sms}')");
 
        if ($sql) {
        echo '<p>Данные успешно добавлены в таблицу.</p>';
        } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($link) . '</p>';
        }
    }
}


?>
