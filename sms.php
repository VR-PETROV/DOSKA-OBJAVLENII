<HTML>

<HEAD>
   <TITLE> Доска объявлений </TITLE>
   <META name="keywords" content="Социальная сеть Почта Письма Переписка Сообщения Обмен информацией"> </META>
</HEAD>

<BODY link=#D0D0D0 alink=#D0D0D0 vlink=#D0D0D0 bgcolor=#0000A0 text=#D0D0D0 topmargin=40>

<PRE>  <H1>		           СЛУЖБА СООБЩЕНИЙ			</H1>

<?php

include "lib1.php";

$PHP_SELF  		        = $_SERVER['PHP_SELF'];
$HTTP_HOST 		        = $_SERVER['HTTP_HOST'];
//$HTTP_X_FORWARDED_FOR 	= $_SERVER['HTTP_X_FORWARDED_FOR'];
$HTTP_X_FORWARDED_FOR 	= $_SERVER['REMOTE_ADDR'];

$id = 0;

if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{ 
	// Использовался метод POST для передачи параметров
	if (isset($_POST['id']))		        $id 	  	    = $_POST['id'];
	if (isset($_POST['login']))             $login          = $_POST['login'];
	if (isset($_POST['parol']))             $parol          = $_POST['parol'];
	if (isset($_POST['familija']))          $familija       = $_POST['familija'];
	if (isset($_POST['imja']))              $imja           = $_POST['imja'];
	if (isset($_POST['otchestvo']))         $otchestvo      = $_POST['otchestvo'];
	if (isset($_POST['id_user']))           $id_user        = $_POST['id_user'];
	if (isset($_POST['login_priemnik']))    $login_priemnik = $_POST['login_priemnik'];
	if (isset($_POST['id_otprav']))         $id_otprav      = $_POST['id_otprav'];
	if (isset($_POST['tema']))              $tema           = $_POST['tema'];
	if (isset($_POST['message']))           $message        = $_POST['message'];    
	if (isset($_POST['id_message']))        $id_message     = $_POST['id_message'];
} 
elseif ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
	// Использовался метод GET для передачи параметров
	if (isset($_GET['id']))			        $id 	  	    = $_GET['id'];
	if (isset($_GET['login']))              $login          = $_GET['login'];	
    if (isset($_GET['parol']))              $parol          = $_GET['parol'];	
    if (isset($_GET['familija']))           $familija       = $_GET['familija'];	
    if (isset($_GET['imja']))               $imja           = $_GET['imja'];	
    if (isset($_GET['otchestvo']))          $otchestvo      = $_GET['otchestvo'];	
    if (isset($_GET['id_user']))            $id_user        = $_GET['id_user'];
    if (isset($_GET['login_priemnik']))     $login_priemnik = $_GET['login_priemnik'];
    if (isset($_GET['id_otprav']))          $id_otprav      = $_GET['id_otprav'];
    if (isset($_GET['tema']))               $tema           = $_GET['tema'];
    if (isset($_GET['message']))            $message        = $_GET['message'];
    if (isset($_GET['id_message']))         $id_message     = $_GET['id_message'];
}
else
{
	// Использовался неизвестный метод для передачи параметров
	exit();
}


// Выполнить соединение с MySQL и базой данных и получить дескриптор соединения с MySQL.
$rez_soed_mysql = Connect_chernyh5();

if ($rez_soed_mysql > 0)
{
	//printf("\n Успешное соединении с MySQL и базой данных");

	if ($id == 0)
   	{
		// Форма для регистрации.

 		?>
		<form method="post" action="<?php echo $PHP_SELF?>">
		  		       		<input type=hidden name="id"    value=4 ><br>
						 Логин : <input type="Text" name="login" value=""><br>
						Пароль : <input type="password" name="parol" value=""><br>
							<input type="Submit" name="submit1" value="Зарегистрироваться">  <input type="Reset" name="Reset" value="Очистка">
		</form>
		<?php

		printf("\n\n\n\n");
		printf('<H3> 			  <A href="%s?id=3"> Для нового пользователя. Заполнение регистрационной карточки. </A>  </H3> ',$PHP_SELF);
		printf('<H3>	  	          <A href= %s/index.html> Выход  </A>   </H3>',$addr_ret);
		printf("\n\n");
	}


	if ($id == 3)
 	{
		// Заполнение регистрационной карточки.
		printf("<H2>                           	Заполнение регистрационной карточки      </H2>	");

 		?>
		<form method="post" action="<?php echo $PHP_SELF?>">
		  		        	  <input type=hidden name="id"    	value=5 ><br>

					Фамилия : <input type="Text" name="familija" value=""><br>
					    Имя : <input type="Text" name="imja" value=""><br>
				       Отчество : <input type="Text" name="otchestvo" value=""><br>

					  Логин : <input type="Text" name="login" value=""><br>
					 Пароль : <input type="password" name="parol" value=""><br>

	                        		<input type="Submit" name="submit2" value="Запомнить">    <input type="Reset" name="Reset" value="Очистка">
		</form>
		<?php

		printf("\n");
		printf('<H3> 						<A href="%s?id=0"> Отмена</A> </H3>',$PHP_SELF);
		printf("\n\n");
	}


	if ($id == 4)
	{
		// Проверка правильности ввода логина и пароля.

		//printf("\n                          Проверка правильности ввода логина и пароля  ");

		$fam1	 ="";
		$im1 	 ="";
		$ot1 	 ="";
		$id_user = -1;

		$rez_zapros = mysql_query("SELECT * FROM user WHERE login='$login' and parol='$parol' ",$rez_soed_mysql);

		$i=0;
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
			$fam1	 = $tek_stroka[3];
			$im1 	 = $tek_stroka[4];
			$ot1 	 = $tek_stroka[5];
			$id_user = $tek_stroka[0];
			//printf("\n\n  Пользователь : %s %s %s   id : %d  ", $tek_stroka[3], $tek_stroka[4], $tek_stroka[5], $tek_stroka[0]);
			$i++;
		}

		if ($i==0)
		{
			// Не обнаружен пользователь с таким логином и паролем. 
			printf("\n\n  <H2>			Не обнаружен пользователь с таким логином и паролем !!!!	</H2>	" );
			printf("\n\n");
			printf('<A href="%s?id=0"> Переход к вводу логина и пароля (id=0) </A>',$PHP_SELF);
			printf("\n\n");
		}
		else
		{
			// Обнаружен пользователь с таким логином и паролем.

			// Выдать экран чтения и написания писем.
			printf("\n <H2>   				ПОЧТА  %s %s %s  </H2> ",$fam1, $im1, $ot1);

			// Подсчет количества новых писем у пользователя
			$kol_now_pisem=0;
			$rez_zapros = mysql_query("SELECT count(*) FROM  mail WHERE mail.IDuser='$id_user' and  mail.priz_delete=0  and  mail.priz_read=0 ",$rez_soed_mysql);
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
			{
				$kol_now_pisem=$tek_stroka[0];
				break;
			}

			printf("\n <H2>   				Входящие новые  ( %d )  </H2>  \n",$kol_now_pisem);
			$rez_zapros = mysql_query("SELECT mail.data_priem, user.login, mail.k_text, mail.ID  FROM  mail,user WHERE mail.IDuser='$id_user' and  mail.priz_delete=0 and mail.priz_read=0 and mail.otpravitel=user.ID ORDER BY mail.data_priem DESC ",$rez_soed_mysql);
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				printf('		<A href="%s?id=9&id_message=%d&login=%s&parol=%s"> %s %s %s  (id=9) </A>',$PHP_SELF,$tek_stroka[3],$login,$parol,$tek_stroka[0], $tek_stroka[1], $tek_stroka[2]);
				printf("\n");
			}

			// Подсчет количества прочитанных писем у пользователя
			$kol_prochit_pisem=0;
			$rez_zapros = mysql_query("SELECT count(*) FROM  mail WHERE mail.IDuser='$id_user' and  mail.priz_delete=0  and  mail.priz_read=1 ",$rez_soed_mysql);
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
			{
				$kol_prochit_pisem=$tek_stroka[0];
				break;
			}

			printf("\n <H2>   				Входящие прочитанные  ( %d )   </H2>  \n",$kol_prochit_pisem);
			$rez_zapros = mysql_query("SELECT mail.data_priem, user.login, mail.k_text, mail.ID  FROM mail,user  WHERE mail.IDuser='$id_user' and  mail.priz_delete=0 and mail.priz_read=1 and mail.otpravitel=user.ID ORDER BY mail.data_priem DESC ",$rez_soed_mysql);
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				printf('		<A href="%s?id=9&id_message=%d&login=%s&parol=%s"> %s %s %s  (id=9) </A>',$PHP_SELF,$tek_stroka[3],$login,$parol,$tek_stroka[0], $tek_stroka[1], $tek_stroka[2]);
				printf("\n");
			}

			// Подсчет количества писем в корзине у пользователя
			$kol_ud_pisem=0;
			$rez_zapros = mysql_query("SELECT count(*) FROM  mail WHERE mail.IDuser='$id_user' and  mail.priz_delete=1 ",$rez_soed_mysql);
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
			{
				$kol_ud_pisem=$tek_stroka[0];
				break;
			}

			printf("\n <H2>   				Корзина  ( %d )                   </H2> \n",$kol_ud_pisem);
			$rez_zapros = mysql_query("SELECT mail.data_priem, user.login, mail.k_text, mail.ID  FROM mail,user  WHERE mail.IDuser='$id_user' and  mail.priz_delete=1 and mail.otpravitel=user.ID ORDER BY mail.data_priem DESC ",$rez_soed_mysql);
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				printf('		<A href="%s?id=9&id_message=%d&login=%s&parol=%s"> %s %s %s  (id=9) </A>',$PHP_SELF,$tek_stroka[3],$login,$parol,$tek_stroka[0], $tek_stroka[1], $tek_stroka[2]);
				printf("\n");
			}

			printf("\n");
			printf('<A href="%s?id=11&login=%s&parol=%s&id_user=%d"> Очистка корзины (id=11) </A>',$PHP_SELF, $login, $parol, $id_user);
			printf("\n");
			printf("\n");
			printf('<A href="%s?id=4&login=%s&parol=%s"> Обновить список (id=4) </A>',$PHP_SELF, $login, $parol);
			printf("\n");
			printf("\n");
			printf("\n");
			printf("\n");
			printf("\n\n");
			printf("\n\n");
			printf("<H2>                 			Написать письмо           	     </H2>             ");

			?>
			<form method="post" action="<?php echo $PHP_SELF?>">
				  	     <input type=hidden name="id" 		value=8>
				  	     <input type=hidden name="id_otprav" 	value="<?php echo $id_user ?>">
				  	     <input type=hidden name="login" 		value="<?php echo $login ?>">
				  	     <input type=hidden name="parol" 		value="<?php echo $parol ?>">
			<?php
			$rez_zapros = mysql_query("SELECT * FROM user ORDER BY login ",$rez_soed_mysql);
			printf("\n		      Кому (логин получателя) : <SELECT name='login_priemnik'> ");

			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				printf("\n <OPTION> %s", $tek_stroka[1]);
			}
			printf("\n </SELECT><br> ");
			?>

			   Краткое содержание : <input type="Text" name="tema"     value="" ><br>
	Текст письма : <textarea name="message" rows="6" cols="80"></textarea><br>

	                       		<input type="Submit" name="submit3" value="Отправить письмо">    <input type="Reset" name="Reset" value="Очистка">
			</form>
			<?php
		}
	}


	if ($id == 5)
	{
		// Обработка карточки нового пользователя.

		if (HostBlackList($HTTP_X_FORWARDED_FOR,$rez_soed_mysql)==0)
		{
			// IP-адрес хоста с которого подано объявление не встречается черном списке
			printf("\n            Обработка карточки нового пользователя                     	");
			printf("\n\n  Поиск пользователя с таким же логином в базе данных 			");
			$rez_zapros = mysql_query("SELECT * FROM user WHERE login='$login' ",$rez_soed_mysql	 );

			$i=0;
			while ($tek_stroka = mysql_fetch_row($rez_zapros)) $i++;

			if ($i>0) 
			{
				// Пользователь с указанным логином уже существует
				printf("\n\n  Пользователь с логином %s  уже существует, выбери другой логин ",$login);				
				printf("\n\n");
				printf('<A href="%s?id=3"> Переход к заполнению карточки нового пользователя (id=3) </A>',$PHP_SELF);
				printf("\n\n");
			}
			else
			{
				// Пользователь с указанным логином не существует.

				// Добавление в таблицу  user  нового пользователя.
				printf("\n\n Добавление в таблицу  user  нового пользователя    ");
				$rez_zapros = mysql_query("INSERT INTO user VALUES (NULL,'$login','$parol','$familija','$imja','$otchestvo')",$rez_soed_mysql);
				printf("\n Результат записи в базу данных нового пользователя = %d  ",$rez_zapros);
				printf("\n\n");
				printf('<A href="%s?id=4&login=%s&parol=%s"> Новый пользователь успешно добавлен в базу данных. Продожить. (id=4) </A>',$PHP_SELF,$login,$parol);
			}
		}
		else
		{
			// IP-адрес хоста с которого подано объявление обнаружен черном списке

			printf('<H3> 		Ошибка !!! IP-адрес хоста с которого подано объявление обнаружен черном списке </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 			 			<A href="%s?id=3"> Повторить </A>   </H3>',$PHP_SELF);
		}
	}


	if ($id == 8)
	{
		// Отправка письма.

		if (HostBlackList($HTTP_X_FORWARDED_FOR,$rez_soed_mysql)==0)
		{
			// IP-адрес хоста с которого подано объявление не встречается черном списке

			// Определить id получателя письма.
			$id_priemnik = -1;
			$rez_zapros = mysql_query("SELECT * FROM user WHERE login='$login_priemnik' ",$rez_soed_mysql);
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				$id_priemnik = $tek_stroka[0];
			}

			if ($id_priemnik == -1) 
			{
				// Указанный адресат не существует.
				printf("\n\n  Адресат  %s  не существует ",$login_priemnik);
				printf("\n");
			}
			else
			{
				// Указанный адресат существует.  Отправка письма.

				//printf("\n Отправка письма ");
				$rez_zapros = mysql_query("INSERT INTO mail VALUES (NULL,'$id_otprav','$id_priemnik',timestamp(curdate(),curtime()),'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0,'$tema','$message')",$rez_soed_mysql);
				//printf("\n Результат отправки письма : %d ",$rez_zapros);

				if ($rez_zapros == 1)
				{
					printf("\n\n <H2>					Письмо успешно отправлено 			</H2>");
				}
				else		
				{
					printf("\n\n <H2>					Ошибка при отправке письма 			</H2>");
				}
			}

			printf('<A href="%s?id=4&login=%s&parol=%s">  Переход к написанию письма  (id=4) </A>',$PHP_SELF,$login,$parol);

		}
		else
		{
			// IP-адрес хоста с которого подано объявление обнаружен черном списке
			printf('<H3> 		Ошибка !!! IP-адрес хоста с которого подано объявление обнаружен черном списке    </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 			 			<A href="%s?id=4&login=%s&parol=%s"> Повторить </A>   </H3>',$PHP_SELF,$login,$parol);
		}
	}


	if ($id == 9)
	{
		// Прочтение письма.

		//printf("\n\n Раздел прочтения письма. Код сообщения %d.  Логин %s  Пароль %s  ",$id_message,$login,$parol);

		
		$login_otprav="";
		$rez_zapros = mysql_query("SELECT mail.data_priem, user.familija, user.imja, user.otchestvo, mail.k_text, mail.text, user.login  FROM mail,user WHERE mail.ID='$id_message' and  mail.otpravitel=user.ID ",$rez_soed_mysql);

		while ($tek_stroka = mysql_fetch_row($rez_zapros))
   		{
			printf("\n <H3>");
			printf("\n   Время отправления :  %s  ", $tek_stroka[0]);
			printf("\n             От кого :  %s  %s  %s   ", $tek_stroka[1], $tek_stroka[2], $tek_stroka[3] );
			printf("\n  Краткое содержание :  %s ", $tek_stroka[4]);
			printf("\n        Текст письма :  %s ", $tek_stroka[5]);
			printf("</H3>");

			$login_otprav=$tek_stroka[6];
		}

		// Установить признак прочтения письма.
		$rez_zapros = mysql_query("UPDATE mail SET priz_read=1, data_read=timestamp(curdate(),curtime()) WHERE id='$id_message' ",$rez_soed_mysql);
		//printf("\n\n  Результат установки пометки о прочтении = %d ",$rez_zapros);

		printf("\n\n");
		printf('<A href="%s?id=4&login=%s&parol=%s"> Переход к списку писем (id=4) </A>',$PHP_SELF, $login, $parol);
		//printf("\n");
		printf('           <A href="%s?id=10&login=%s&parol=%s&id_message=%d"> Отправить письмо в корзину (id=10) </A>',$PHP_SELF, $login, $parol, $id_message );

		printf("\n  <H3>                 				Ответ на письмо                                  </H3>  ");
		?>
		<form method="post" action="<?php echo $PHP_SELF?>">
			  	     <input type=hidden name="id" value=8>
			  	     <input type=hidden name="id_otprav" value="<?php echo $id_user ?>">
			  	     <input type=hidden name="login" value="<?php echo $login ?>">
			  	     <input type=hidden name="parol" value="<?php echo $parol ?>">

      		   Кому (логин получателя) : <input type="Text" name="login_priemnik" value="<?php echo $login_otprav ?>"><br> 
			Краткое содержание : <input type="Text" name="tema"     value="Ответ" ><br>
			      Текст письма : <textarea name="message" rows="6" cols="80"></textarea><br>

	                       					<input type="Submit" name="submit4" value="Отправить письмо">    <input type="Reset" name="Reset" value="Очистка">
		</form>
		<?php
	}


	if ($id == 10)
	{
		// Отправить письмо в корзину.

		//printf("\n\n Раздел отправки письма в корзину. Код письма %d.  Логин %s  Пароль %s  ",$id_message,$login,$parol);

		$rez_zapros = mysql_query("UPDATE mail SET priz_delete=1, data_delete=timestamp(curdate(),curtime()) WHERE id='$id_message' ",$rez_soed_mysql);
		//printf("\n\n  Результат установки пометки о помещении в корзину = %d ",$rez_zapros);

		printf("\n\n\n\n\n\n\n\n\n\n\n");
		printf('<H3>     						<A href="%s?id=4&login=%s&parol=%s"> Переход к списку писем </A>		</H3>',$PHP_SELF, $login, $parol);
	}


	if ($id == 11)
	{
		// Очистка корзины.
			
		//printf("\n\n Очистка корзины для пользователя с id = %d ",$id_user);

		$rez_zapros = mysql_query("DELETE FROM mail WHERE IDuser='$id_user'and priz_delete=1 ",$rez_soed_mysql);
		//printf("\n\n  Результат очистки корзины = %d ",$rez_zapros);

		printf("\n\n");
		printf('<A href="%s?id=4&login=%s&parol=%s"> Переход к списку писем (id=4) </A>',$PHP_SELF, $login, $parol);
	}

}
else
{
	printf("\n Ошибка при соединении с MySQL или с базой данных  ");
}


//printf("\n PHP_SELF = %s ",$PHP_SELF);
//printf("\n HTTP_HOST = %s ",$HTTP_HOST);
//printf("\n HTTP_X_FORWARDED_FOR = %s ", $HTTP_X_FORWARDED_FOR);
//printf("\n\n");


?>




</PRE>

</BODY>

</HTML>
