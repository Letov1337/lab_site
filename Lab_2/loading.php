<?php
 
 include('engine.php'); //Подключаем скрипт обработки изображения
 
 $fname = $_FILES['GetImage']['tmp_name']; //Получаем файл пользователя
 $path = './temp/' . $_FILES['GetImage']['name']; //Получаем путь к файлу пользователя
 $message = $_POST['TextInput']; //Получаем текст пользователя
 $par1 = $_POST['par1'];
 $par2 = $_POST['par2'];
 $logo_checkbox = $_POST['logo_checkbox'];
 $pic_checkbox  = $_POST['pic_checkbox'];
 par_set($par1,$par2);
 checkbox($logo_checkbox,$pic_checkbox);
     if (isset($_POST['front'])) 
     {
        $front = $_POST['front'];
        if($front == 'comic')
        {
            front_set("comic");
        }
        if ($front == 'sega')
        {
            front_set("sega");
        }
        if($front == 'times')
        {
           front_set("times");
        }
     }

     if(move_uploaded_file($fname, $path))
     { //Проверяем статус загрузки файла на сервер
     preprocessing($fname,$path,$message); //Вызываем функцию обработки пользовательского изображения из скрипта engine.php
     }
     else
     {
     echo 'Uploading error!'; //В случае ошибки загрузки файла на сервер выводим соответствующее сообщение
     } 

?>