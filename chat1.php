<HTML>

<HEAD>
	<TITLE> Сообщения полученные от сервера </TITLE>
	<META http-equiv="refresh" content="10"> </META>
	<META http-equiv="expires" content="0"> </META>
</HEAD>

<BODY link=#FFD700 bgcolor=#0000A0 text=#D0D0D0>

<PRE>

<?php 

include "lib1.php";

// Выполнить соединение с MySQL и базой данных и получить дескриптор соединения с MySQL.
$rez_soed_mysql = Connect_chernyh5();

if ($rez_soed_mysql > 0)
{
	// Успешное соединение с MySQL и базой данных
	//printf("\n Успешное соединении с MySQL и базой данных");

	// Выдать на экран переписку.
	$rez_zapros_message = mysql_query("SELECT * FROM message ORDER BY data_time DESC LIMIT 50",$rez_soed_mysql);
	while ($tek_stroka = mysql_fetch_row($rez_zapros_message))
	{
		printf("\n %s | %s  %s  %s  ", $tek_stroka[2], $tek_stroka[4], $tek_stroka[3], $tek_stroka[1] );
	}
	printf("\n\n"); 

	// Разрыв соединения с MySQL
	$rez_razryv_mysql = mysql_close($rez_soed_mysql);

	if ($rez_razryv_mysql > 0)
	{
		//printf("\n Успешный разрыв соединении с MySQL ");
	}
	else
	{
		//printf("\n Ошибка при разрыве соединения с MySQL ");
	}
}
else
{
	printf("\n Ошибка при соединении с MySQL и базой данных   ");
}


?>

</PRE>

</BODY>


</HTML>


