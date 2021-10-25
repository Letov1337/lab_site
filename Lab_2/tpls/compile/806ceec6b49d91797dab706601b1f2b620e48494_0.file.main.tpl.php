<?php
/* Smarty version 3.1.36, created on 2021-10-03 15:19:08
  from '/storage/ssd4/251/17655251/public_html/Lab_2/tpls/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_6159c9eca6c734_62680550',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '806ceec6b49d91797dab706601b1f2b620e48494' => 
    array (
      0 => '/storage/ssd4/251/17655251/public_html/Lab_2/tpls/main.tpl',
      1 => 1633274343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6159c9eca6c734_62680550 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div class="form" align="left">
   <form action="loading.php" enctype="multipart/form-data" method="post">
    <p><input type="file" name="GetImage"/></p>
    <p><input type="text" name="TextInput" /></p>
    <p><input type="submit" value="Создать"></p>
   </form> 
  </div>
  <p align="left">
       Выберите изображение формата jpg/jpeg , которое будет являться основой.<br>
       В соответствующее поле наберите текст для размещения на изображение.<br>
       После получения готового изображения вы можете скачать его в формате pdf.
  </p>
 </body>
</html><?php }
}
