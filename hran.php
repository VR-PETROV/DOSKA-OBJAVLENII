<?php
 
// Установка каталога в котором расположено хранилище файлов
$dir  = 'img/';
 
// Считать системные переменные 
$PHP_SELF  		        = $_SERVER['PHP_SELF'];
$HTTP_HOST 		        = $_SERVER['HTTP_HOST'];
$HTTP_X_FORWARDED_FOR 	= $_SERVER['REMOTE_ADDR'];

// Задание адреса возврата на предыдущую страницу
$addr_ret = "http://u0845056.isp.regruhosting.ru";

// Задание начальных значений параметров страницы
$id = 0;
$name_file = "";
$login = "";
$parol = "";

// Считывание параметров страницы
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{ 
	// Использовался метод POST для передачи параметров
	if (isset($_POST['id'])) 		    $id  	    = $_POST['id'];
	if (isset($_POST['name_file'])) 	$name_file  = $_POST['name_file'];
	if (isset($_POST['login']))         $login      = $_POST['login'];
	if (isset($_POST['parol']))         $parol      = $_POST['parol'];
} 
elseif ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
	// Использовался метод GET для передачи параметров
	if (isset($_GET['id'])) 		    $id  	    = $_GET['id'];
	if (isset($_GET['name_file'])) 	    $name_file  = $_GET['name_file'];
	if (isset($_GET['login']))          $login      = $_GET['login'];	
    if (isset($_GET['parol']))          $parol      = $_GET['parol'];		
}
else
{
	// Использовался неизвестный метод для передачи параметров
	exit();
}


if (empty($login) || empty($parol))
{
		// Зашел сюда в первый раз. Не задан логин или пароль.
		// Создать HTML-страницу ввода пароля администратора.
        ?>
        <HTML>
        <HEAD>
            <TITLE> ХРАНИЛИЩЕ ФАЙЛОВ </TITLE>
            <META content='text/html' charset='utf-8' http-equiv='Content-Type'> </META>
        </HEAD>

        <BODY link=#D0D0D0 alink=#D0D0D0 vlink=#D0D0D0 bgcolor=#0000A0 text=#D0D0D0 topmargin=40>
        <PRE>	<H1>   	   	    	ХРАНИЛИЩЕ ФАЙЛОВ				</H1>
		<br><br><br><br><br><br><br><br><br><br>

		<form method="post" action="<?php echo $PHP_SELF?>">

                                                Логин : <input type="Text" name="login" value=""><br><br>

                                                Пароль : <input type="password" name="parol" value=""><br><br>

                                                <input type="Submit" name="submit1" value="Зарегистрироваться">    <input type="Reset" name="Reset" value="Очистка">
		</form>
		<?php
		printf('<H4>	  	          <A href= %s/index.html> Выход  </A>   </H4>',$addr_ret);
	    exit();		
}
else
{
    // Задан логин и пароль
    if (!(($login=="samara") && ($parol=="9171431285")))
    {
        // Логин или пароль заданы неправильно. Выход из модуля.

		// Создать HTML-страницу вывода сообщения об ошибочном пароле.
        ?>
        <HTML>
        <HEAD>
            <TITLE> ХРАНИЛИЩЕ ФАЙЛОВ </TITLE>
            <META content='text/html' charset='utf-8' http-equiv='Content-Type'> </META>
        </HEAD>

        <BODY link=#D0D0D0 alink=#D0D0D0 vlink=#D0D0D0 bgcolor=#0000A0 text=#D0D0D0 topmargin=40>
        <PRE>	<H1>   	   	    	ХРАНИЛИЩЕ ФАЙЛОВ				</H1>
		<br><br><br><br><br><br><br><br><br><br>

                  Не правильно задан логин или пароль 
		<?php
		printf('<H4>	  	          <A href= %s/index.html> Выход  </A>   </H4>',$addr_ret);
        exit();     
    }
}



// Расшифровка имени файла (т.к. в зашифрованном имени файла не латинские буквы и цифры зашифрованы)
//$name_file1 = urldecode($name_file);

// Расшифровку имени файла делать не надо, т.к. оно автоматически расшифровывается при чтении из массивов $_POST или $_GET
$name_file1 = $name_file;

if ($id == 1)
{
    // Скачивание файла "name_file1"    
    $dir_file = $dir.$name_file1;

/*
    // сбрасываем буфер вывода PHP, чтобы избежать переполнения памяти выделенной под скрипт
    // если этого не сделать файл будет читаться в память полностью!
    if (ob_get_level()) 
    {
      ob_end_clean();
    }
*/

    // Изменение заголовков пакета отсылаемого по протоколу HTTP. Заставляем браузер показать окно скачивания файла.
    header('Content-Description: File Transfer');                                   // Выходит ошибка : Cannot modify header information - headers already sent by.     
    header('Content-Type: application/octet-stream');                               //        Перевод : Невозможно изменить информацию заголовка - заголовки уже отправлены.
    header('Content-Disposition: attachment; filename='.basename($name_file1));
    header('Content-Transfer-Encoding: binary');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
//    header('Content-Length: '.filesize($name_file));                          // Выходит ошибка : stat failed            Перевод : Статистика не удалась

    //  Чтение файла и его скачивание
    readfile($dir_file);
}
elseif ($id ==2)
{
    // Удаление файла
    ?>
    <HTML>
    <HEAD>
        <TITLE> ХРАНИЛИЩЕ ФАЙЛОВ </TITLE>
        <META content='text/html' charset='utf-8' http-equiv='Content-Type'> </META>
    </HEAD>

    <BODY link=#D0D0D0 alink=#D0D0D0 vlink=#D0D0D0 bgcolor=#0000A0 text=#D0D0D0 topmargin=40>
    <PRE>	<H1>   	   	    	ХРАНИЛИЩЕ ФАЙЛОВ				</H1>

    <?php

    // Выдать сообщение об удаление файла "name_file1"
    printf("<br>");
    printf(" Удаление  файла %s  ",$name_file1);
    printf("<br><br>");

    // Удаление файла "name_file1"
    $dir_file = $dir.$name_file1;    
    $priz_del=unlink($dir_file);

    if ($priz_del == true)
    {
        printf("<br>");
        printf(" Файл %s удалён  ",$name_file1);
        printf("<br><br>");
    }
    else
    {
        printf("<br>");
        printf(" Файл %s не удалён ",$name_file1);
        printf("<br><br>");
    }
    
    // Выдать сообщение 'Продолжить'
    printf(" <A href=%s?id=0&login=%s&parol=%s> Продолжить </A>  ",$PHP_SELF, $login, $parol);		
}
else
{
    // Выдать страницу со списком файлов в каталоге "img"
    ?>
    <HTML>
    <HEAD>
        <TITLE> ХРАНИЛИЩЕ ФАЙЛОВ </TITLE>
        <META content='text/html' charset='utf-8' http-equiv='Content-Type'> </META>
    </HEAD>

    <BODY link=#D0D0D0 alink=#D0D0D0 vlink=#D0D0D0 bgcolor=#0000A0 text=#D0D0D0 topmargin=40>
    <PRE>	<H1>   	   	    	ХРАНИЛИЩЕ ФАЙЛОВ				</H1>

    <?php

    // Создать массив для загрузки в него списка файлов указанного каталога 
    $filelist = array();

    // Прочитать все файлы из каталога "img" в массив "filelist"
    $files = scandir($dir);

    foreach ($files as $file):
	    $filelist[] = $file;
    endforeach;
 
    // Сортировка массива "filelist"
    //sort($filelist);
 
    // Определить количество элементов в массиве "filelist"
    $kol_filelist = count($filelist);

    // Выдать все файлы из списка в HTML-страницу
    for ($i=0; $i<$kol_filelist; $i++)
    {
        // Получить имя файла
        $file = $filelist[$i];

        // Получить зашифрованное имя файла (в котором только латинские буквы и цифры, остальные зашифрованы)
        $file1 = urlencode($file);

        printf("<br>");
        printf("<A href=%s?id=1&name_file=%s&login=%s&parol=%s> Скачать </A>  ", $PHP_SELF, $file1, $login, $parol);		
        printf("<A href=%s?id=2&name_file=%s&login=%s&parol=%s> Удалить </A>  ", $PHP_SELF, $file1, $login, $parol);
	    printf("%s                                          ", $file);
    }	

    ?>
         <form method = "post" action = "do_upload_multi.php" enctype = "multipart/form-data">  
		  <input type=hidden name="login" 	 value="<?php echo $login      ?>">
		  <input type=hidden name="parol" 	 value="<?php echo $parol      ?>">

<p><strong> Выбери файлы для загрузки: </strong><br>
    <input type="file" name="fileUpload[]" multiple > 
 
    <input type="submit" name="Submit" value="Загрузить" >
 
    </PRE>

    </BODY>
 
    </HTML>
    <?php
}?>