<HTML>

<HEAD>
	<TITLE> Сообщения и команды отправляемые на сервер </TITLE>
</HEAD>

<BODY link=#FFD700 bgcolor=#0000A0 text=#D0D0D0 >

<PRE>

<?php 

include "lib1.php";

///////////////////////////////////////////////////////////////
//

$today = getdate();
print_r($today);

//
//////////////////////////////////////////////////////////////


$submit0  = false;
$autor   = "";
$message = "";
$nom_tema = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{ 
	// Использовался метод POST для передачи параметров
	if (isset($_POST['submit0'])) 		$submit0    = $_POST['submit0'];
	if (isset($_POST['autor']))         $autor      = $_POST['autor'];
	if (isset($_POST['message']))       $message    = $_POST['message'];
	if (isset($_POST['nom_tema']))      $nom_tema   = $_POST['nom_tema'];
} 
elseif ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
	// Использовался метод GET для передачи параметров
	if (isset($_GET['submit0'])) 	$submit0    = $_GET['submit0'];
	if (isset($_GET['autor']))      $autor      = $_GET['autor'];
	if (isset($_GET['message']))    $message    = $_GET['message'];
	if (isset($_GET['nom_tema']))   $nom_tema   = $_GET['nom_tema'];
}
else
{
	// Использовался неизвестный метод для передачи параметров
	exit();
}



// Выполнить соединение с MySQL и базой данных и получить дескриптор соединения с MySQL.
$rez_soed_mysql = Connect_chernyh5();

printf("\n Результат соединения с MySQL и базой данных = %d  ",$rez_soed_mysql);
printf("\n submit0 =  %d",  $submit0);
printf("\n   autor =  %s",  $autor);


if ($rez_soed_mysql > 0)
{
	// Успешное соединение с MySQL и базой данных


	if ($submit0)
	{
		// WEB - страница вызвана с заполненными параметрами $autor, $message, $nom_tema.
		// Поместить заполненные параметры в базу данных.
		printf("\n WEB-страница вызвана с параметрами  autor= %s message= %s, nom_tema= %d  создать новую запись в базе данных и поместить в нее эти параметры. \n\n",$autor,$message,$nom_tema);
		$rez_zapros = mysql_query("INSERT INTO message VALUES (NULL,'$message','$nom_tema','$autor', timestamp(curdate(),curtime()) )",$rez_soed_mysql);
		printf("\n Результат добавления в таблицу message новой строки : %d ",$rez_zapros);
	}

	// Выполнить запрос извлекающий список тем.
	$rez_zapros_tema = mysql_query("SELECT * FROM tema",$rez_soed_mysql);

	// Разрыв соединения с MySQL
	$rez_razryv_mysql = mysql_close($rez_soed_mysql);
	printf("\n Результат разрыва соединения с MySQL = %d  ",$rez_razryv_mysql);

	if ($rez_razryv_mysql > 0)
	{
		printf("\n Успешный разрыв соединении с MySQL ");
	}
	else
	{
		printf("\n Ошибка при разрыве соединения с MySQL ");
	}
}
else
{
	printf("\n Ошибка при соединении с MySQL   ");
}

?>
<!--  Форма для ввода автора, темы сообщения и сообщения  -->
<form method="post" action="<?php echo $PHP_SELF?>">
      Автор : <input type="Text" name="autor" value=""><br>
       Тема : <SELECT name="GET" size=1>	
<?php 
	while ($tek_stroka = mysql_fetch_row($rez_zapros_tema))
	{
		printf("\n                    <OPTION> %d )  %s      ", $tek_stroka[0], $tek_stroka[1]);
	}
?>
	</SELECT><br>
	<textarea name="message" rows="6" cols="130"></textarea><br>
<!--	                        <input type="Submit" name="submit0" value="Отправить сообщение">    <input type="Reset" name="Reset" value="Очистка">  -->
                			<input type="Submit" name="submit0" value="Отправить сообщение">   <input type="Reset" name="Reset" value="Очистка">




</form>	



</PRE>

</BODY>

</HTML>
