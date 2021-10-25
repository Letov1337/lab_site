<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>Лабораторная работа №2</title>
  <link rel="stylesheet" href="button.css">
 </head>
 <body>
  <h2>
   Лабораторная работа №2 <br>
  </h2> 
   <div class="center">
   <div class="form" align="center">
   <form action="loading.php" enctype="multipart/form-data" method="post" class="">
    <p><input type="file" name="GetImage"/></p>
    <p>Текст для изображения: <br><input type="text" name="TextInput" /></p>
     <p>x:<br><input type="text"value="15" name="par1" /></p>
     <p>y:<br><input type="text"value="15" name="par2" /></p>
     Выбор шрифта:<br>
     <select name="front">
     <option value="comic">comic</option>
     <option value="times">times new roman</option>
     <option value="sega">sega</option>
   </select>
   <p><input type="submit" value="Создать"></p>
   </form> 
  </div>
  <p align="center">
       Требуется изображение в формате jpg или png, после, если требуется написать текст.
  </p>
</div>
 </body>
</html>