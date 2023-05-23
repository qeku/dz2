<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="style.css">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Тестирование</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="">
</head>
<body>
<form method='_GET'>
<div>
<h4>1.Сочитание клавиш для копирования?</h4>
<label><input type="radio" name="answer[2]" value="Верно">ctrl+c</label><br>
<label><input type="radio" name="answer[2]" value="Неверно">ctrl+x</label><br>
<label><input type="radio" name="answer[2]" value="Неверно">ctrl+v</label><br>
</div>

<div>
<h4>2.HTML это?</h4>
<label><input name="answer[0]" type="radio" value="Верно">стандартизированный язык гипертекстовой разметки документов для просмотра веб-страниц в браузере.</label><br>
<label><input name="answer[0]" type="radio" value="Неверно"> строго типизированный объектно-ориентированный язык программирования общего назначения. <label><br>
<label><input name="answer[0]" type="radio" value="Неверно">формальный язык декорирования и описания внешнего вида веб-страницы. </label>
</div>

<div>
<h4>3.Что такое ssd?</h4>
<label><input name="answer[1]" type="checkbox" value="Верно">устройство для постоянного хранения данных с использованием твердотельной (обычно - флэш) памяти.</label><br>
<label><input name="answer[1]" type="checkbox" value="Неверно">это электромеханическое устройство хранения данных, которое хранит и извлекает цифровые данные <br>с помощью магнитного накопителя и одной или нескольких жестких быстро вращающихся пластин, покрытых магнитным материалом.</label>
</div>
<input class="button" type='submit' name="Submit" value='Отправить'>
</form>

<?php
$a=0;
if (is_array($_GET['answer'])){
foreach($_GET['answer'] as $value)
{
if ($value=='Верно') {
$a=$a+1;
}
echo $value, '<br>';
}
echo "У вас {$a} правильных ответов", '<br>';
}
?>
<p class="regtext"><a href= "register.php">Выйти</a>!</p>

</body>
</html>


