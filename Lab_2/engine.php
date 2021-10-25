<?php
 require('./fpdf/fpdf.php'); //Подключаем библиотеку для работы с pdf файлами
 function preprocessing($fname,$path,$message){
 	$wm = imagecreatefrompng('./wm/wm.png'); //Получаем водяной знак
	$pic = imagecreatefromjpeg($path); //Получаем изображение пользователя
	    global $_p1;
       global $_p2;
	$marge_right = $_p1; //Отступ для водяного знака справа
    $marge_bottom = $_p2; //Отступ для водяного знака снизу
	$wm_width = imagesx($wm); //Ширина водяного знака
    $wm_height = imagesy($wm); //Высота водяного знака
	$pic_width = imagesx($pic); //Ширина изображения
    $pic_height = imagesy($pic); //Высота изображения
	
	//Копируем водяной знак на пользовательское изображение
	imagecopy($pic, $wm, $pic_width - $wm_width - $marge_right, $pic_height - $wm_height - $marge_bottom, 0, 0, $wm_width, $wm_height);
	
    preprocessingPart2($pic,$message,$path);
 }
 function front_set($parm_front)
 {
    global $test;
    $test = $parm_front;
}
 function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
 function preprocessingPart2($pic,$message,$path){
    global $test;
    //$font = './font/comic.ttf'; //Ссылка на шрифт
    $font = "./font/".$test.".ttf";
    //$font = './font/'.$test.'.ttf';
    $font_size = 24; //Размер шрифт
    $degree = 0; //Угол поворота текста в градусах
    $text = $message; //Текст
    $y = 400/2 + 23/2; //Отступ сверху (координата y)
    $x = 400/2 - 104/2; //Отступ  слева (координата x)
    $color = imagecolorallocate($pic, 0, 0, 0); //Функция выделения цвета для текста

    imagettftext($pic, $font_size, $degree, $x, $y, $color, $font, $text); //Функция нанесения текста
    //debug_to_console($font);
    //debug_to_console($test_2);
    imagejpeg($pic, './temp/NewImg.jpeg'); //Сохраняем изображение
    $path = './temp/NewImg.jpeg'; //Записываем путь к изображению в переменную
    saving($pic,$path);
 }
  function par_set($p1,$p2)
 {
    //global $test;
   // $test = $parm_front;
    global $_p1;
    global $_p2;
    $_p1 = $p1;
    $_p2 = $p2;
 }
 function checkbox($logo_checkbox,$pic_checkbox)
 {
    $_logo_checkbox = $logo_checkbox;
    $_pic_checkbox = $pic_checkbox;
    echo($_logo_checkbox);
 }
 function saving($pic,$path){
	 $npdf = new FPDF(); //Создаём экземпляр класса библиотеки
     $npdf->AddPage(); //Добавляем страницу к нашему pdf объекту (экземпляру класса библиотеки)
     
     //Подгон размера
     $Isize = getimagesize($path);
     $w = 0;
     $h = 0;
     while ($w < 210 && $h < 300){
      $w += $Isize[0] / 10000;
      $h += $Isize[1] / 10000;
     }
     
     $npdf->Image($path, 0, 0, $w, $h); //Передаём странице наше изображение
     $npdf->Output('d', 'NewImg.pdf'); //Сохраняем pdf объект в файл
 }

?>