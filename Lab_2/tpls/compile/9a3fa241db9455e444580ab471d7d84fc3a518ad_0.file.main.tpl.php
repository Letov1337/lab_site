<?php
/* Smarty version 3.1.36, created on 2021-10-15 18:08:04
  from '/home/f0590061/domains/f0590061.xsph.ru/public_html/Lab_2/tpls/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_61699954638150_41744551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a3fa241db9455e444580ab471d7d84fc3a518ad' => 
    array (
      0 => '/home/f0590061/domains/f0590061.xsph.ru/public_html/Lab_2/tpls/main.tpl',
      1 => 1634310470,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61699954638150_41744551 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
</html><?php }
}
