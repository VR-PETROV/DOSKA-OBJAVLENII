<HTML>

<HEAD>
   <TITLE> Загрузка файлов </TITLE>
   <META content='text/html' charset='utf-8' http-equiv='Content-Type'> </META>
</HEAD>

<BODY link=#D0D0D0 alink=#D0D0D0 vlink=#D0D0D0 bgcolor=#0000A0 text=#D0D0D0 topmargin=40>
<PRE>	<H2>   	   	    	Идёт загрузка файлов 			</H2>

<?php


// Задание начальных значений параметров страницы
$login = "";
$parol = "";

// Считывание параметров страницы
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{ 
	// Использовался метод POST для передачи параметров
	if (isset($_POST['login']))    $login = $_POST['login'];
	if (isset($_POST['parol']))    $parol = $_POST['parol'];
} 
elseif ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
	// Использовался метод GET для передачи параметров
	if (isset($_GET['login']))     $login = $_GET['login'];	
    if (isset($_GET['parol']))     $parol = $_GET['parol'];		
}
else
{
	// Использовался неизвестный метод для передачи параметров
	exit();
}

// Каталог в который идёт загрузка
$target_dir = 'img/';

if( isset($_FILES['fileUpload']['name'])) 
{
  // Определить количество выбранных для загрузки файлов
  $total_files = count($_FILES['fileUpload']['name']);

  printf("\n\n Передано на загрузку %d файлов  ", $total_files);    
 
  // Перебор в цикле выбранных для загрузки файлов 
  for($key = 0; $key < $total_files; $key++) 
  {
    // Получить расширение файла
    $ext = strtolower(pathinfo($_FILES["fileUpload"]["name"][$key], PATHINFO_EXTENSION));
 
    // Проверка является ли расширение файла  разрешённым
    $priz = 0;
    if( in_array( $ext, array('jpg', 'jpeg', 'png', 'gif', 'bmp'))) $priz = 1;

     // Check if file is selected
    if(isset($_FILES['fileUpload']['name'][$key]) && $_FILES['fileUpload']['size'][$key] > 0  && $priz == 1) 
    {
      $original_filename = $_FILES['fileUpload']['name'][$key];   // Получить имя файла 
      $target = $target_dir . basename($original_filename);       // Сформировать имя файла с каталогом в который будет сделана загрузка    
      $tmp  = $_FILES['fileUpload']['tmp_name'][$key];            // Получить имя временного файла в специальном каталоге сервера куда он помещает загружаемые файлы     
      move_uploaded_file($tmp, $target);                          // Перенос временного файла с указанным именем из специального каталога в каталог указанный каталог загрузки
      printf("\n\n Файл %s загружен  ", $original_filename );       // Сообщение о успешной загрузке файла        
    }
  }
}
else
{
     printf("\n\n Ошибка !!! ");
}
 
printf('<H3> 												  </H3>');
printf('<H3> 												  </H3>');
printf('<H3> 			 <A href=hran.php?id=0&login=%s&parol=%s> Продолжение </A>  </H3>',$login, $parol);

?>

</PRE>

</BODY>

 </HTML>
 