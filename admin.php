<HTML>

<HEAD>
   <TITLE>  Для администратора базы данных </TITLE>
</HEAD>

<BODY link=#D0D0D0 alink=#D0D0D0 vlink=#D0D0D0 bgcolor=#0000A0 text=#D0D0D0 topmargin=40>


<?php


// Ввод пароля. Проверка на совпадение введенного пароля с паролем администратора.
//
// 1) Выдать на экран список таблиц базы данных.
// 2) Выдать на экран все таблицы базы данных.
// 3) Выдать на экран все таблицы базы данных в виде PHP программу способной выполнить загрузку этих таблиц базы данных.

include "lib1.php";


$PHP_SELF  		= $_SERVER['PHP_SELF'];
$HTTP_HOST 		= $_SERVER['HTTP_HOST'];
$HTTP_X_FORWARDED_FOR 	= $_SERVER['REMOTE_ADDR'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{ 
	// Использовался метод POST для передачи параметров
	if (isset($_POST['id']))		        $id 	  	    = $_POST['id'];
	if (isset($_POST['login']))             $login          = $_POST['login'];
	if (isset($_POST['parol']))             $parol          = $_POST['parol'];
//	if (isset($_POST['familija']))          $familija       = $_POST['familija'];
//	if (isset($_POST['imja']))              $imja           = $_POST['imja'];
//	if (isset($_POST['otchestvo']))         $otchestvo      = $_POST['otchestvo'];
//	if (isset($_POST['id_user']))           $id_user        = $_POST['id_user'];
//	if (isset($_POST['login_priemnik']))    $login_priemnik = $_POST['login_priemnik'];
//	if (isset($_POST['id_otprav']))         $id_otprav      = $_POST['id_otprav'];
//	if (isset($_POST['tema']))              $tema           = $_POST['tema'];
//	if (isset($_POST['message']))           $message        = $_POST['message'];    
//	if (isset($_POST['id_message']))        $id_message     = $_POST['id_message'];
} 
elseif ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
	// Использовался метод GET для передачи параметров
	if (isset($_GET['id']))			        $id 	  	    = $_GET['id'];
	if (isset($_GET['login']))              $login          = $_GET['login'];	
    if (isset($_GET['parol']))              $parol          = $_GET['parol'];	
//    if (isset($_GET['familija']))           $familija       = $_GET['familija'];	
//    if (isset($_GET['imja']))               $imja           = $_GET['imja'];	
//    if (isset($_GET['otchestvo']))          $otchestvo      = $_GET['otchestvo'];	
//    if (isset($_GET['id_user']))            $id_user        = $_GET['id_user'];
//    if (isset($_GET['login_priemnik']))     $login_priemnik = $_GET['login_priemnik'];
//    if (isset($_GET['id_otprav']))          $id_otprav      = $_GET['id_otprav'];
//    if (isset($_GET['tema']))               $tema           = $_GET['tema'];
//    if (isset($_GET['message']))            $message        = $_GET['message'];
//    if (isset($_GET['id_message']))         $id_message     = $_GET['id_message'];
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


	if (empty($id) || $id==0)
	{
		// Зашел сюда в первый раз.
		// Создать HTML-страницу ввода пароля администратора.

 		?>

		<br><br><br><br><br><br><br><br><br><br>

		<form method="post" action="<?php echo $PHP_SELF?>">
		  		       		<input type=hidden name="id"    value=1 ><br>

                                                Логин : <input type="Text" name="login" value=""><br><br>

                                                Пароль : <input type="password" name="parol" value=""><br><br>

                                                <input type="Submit" name="submit1" value="Зарегистрироваться">    <input type="Reset" name="Reset" value="Очистка">
		</form>
		<?php

		 printf('<H4>	  	          <A href= %s/index.html> Выход  </A>   </H4>',$addr_ret);
	}
	else if ($id==1)
	{
		// Если нажата кнопка "Отмена" тогда выход из программы.

		// Проверка логина и пароля.

		if ($login=="anapa" && $parol=="3987")
		{
			printf("<table border=0> ");
			printf("<tr><th> 			Меню администратора базы данных :  			                                                                                </th></tr> ");
			printf("<tr><th> 			 			                                                            				                                    </th></tr> ");
			printf("<tr><th> 			 			                                                            				                                    </th></tr> ");
			printf('<tr><td> <A href="%s?id=2&login=%s&parol=%s"> 1. Просмотр списка таблиц базы данных </A>                                                        </td></tr>',$PHP_SELF,$login,$parol);
			printf('<tr><td> <A href="%s?id=3&login=%s&parol=%s"> 2. Просмотр таблиц базы данных </A>                                                               </td></tr>',$PHP_SELF,$login,$parol);
			printf('<tr><td> <A href="%s?id=4&login=%s&parol=%s"> 3. Создание и просмотр PHP-MySQL кода предназначенного для загрузки всех таблиц базы данных </A>  </td></tr>',$PHP_SELF,$login,$parol);
			printf('<tr><td> <A href="%s?id=5&login=%s&parol=%s"> 4. Редактирование таблиц базы данных </A>                                                         </td></tr>',$PHP_SELF,$login,$parol);
			printf('<tr><td> <A href="%s?id=6&login=%s&parol=%s"> 5. Индексирование базы данных объявлений 1 этап (создание новой таблицы "word_index" и автозаполенние строк 1-2000) </A>  				</td></tr>',$PHP_SELF,$login,$parol);
			printf('<tr><td> <A href="%s?id=7&login=%s&parol=%s"> 6. Индексирование базы данных объявлений 2 этар (автозаполенние строк 2001-2500) </A>  				</td></tr>',$PHP_SELF,$login,$parol);
			printf('<tr><td> <A href="%s?id=8&login=%s&parol=%s"> 7. Индексирование базы данных объявлений 3 этар (автозаполенние строк 2501-4000) </A>  				</td></tr>',$PHP_SELF,$login,$parol);
			printf('<tr><td> <A href="%s?id=9&login=%s&parol=%s"> 8. Очистка таблиц temp_rez_seek и temp_word </A>  					                        	</td></tr>',$PHP_SELF,$login,$parol);
		 	printf('<tr><td> <A href= %s/index.html/	       "> 9. Выход  </A>                                                                                    </td></tr>',$addr_ret);
/////////////////////////////////////////////////////////////////////////////////////
//
			printf('<tr><td> <A href="%s?id=10&login=%s&parol=%s">10. Создание таблицы RIS </A>  		                    			                        	</td></tr>',$PHP_SELF,$login,$parol);
//
/////////////////////////////////////////////////////////////////////////////////////
    		printf("</table> ");
		}
		else
		{
			printf(" 	Пароль не правильный !!! ");
			printf('	<A href="%s?id=0 "> Далее </A>',$PHP_SELF);
		}


	}
	else if ($id==2)
	{
		// Просмотр списка таблиц базы данных

		// Очистка массива $name_table[]
		// Создать массив в котором записаны наименования всех таблиц базы данных.
		$textQuery = "SHOW TABLES";
		$result = mysql_query($textQuery, $rez_soed_mysql);
		$i=0;
		while ($tek_stroka = mysql_fetch_row($result))
		{
			$name_table[$i] = $tek_stroka[0];
			$i++;
		}

		// Выдать массив в котором записаны наименование таблиц базы данных.
		for ($i=0; $i<count($name_table); $i++)
		{
			printf("\n  %s   | ",$name_table[$i]);
		}

		// Переход к меню администратора
		printf(' <A href="%s?id=1&login=%s&parol=%s "> Выход </A>',$PHP_SELF,$login,$parol);
	}
	else if ($id==3)
	{
		// Просмотр таблиц базы данных

		// Очистка массива $name_table[]
		// Создать массив в котором записаны наименования всех таблиц базы данных.
		$textQuery = "SHOW TABLES";
		$result = mysql_query($textQuery, $rez_soed_mysql);
		$i=0;
		while ($tek_stroka = mysql_fetch_row($result))
		{
			$name_table[$i] = $tek_stroka[0];
			$i++;
		}

		// Выдать в отчет содержание всех таблиц базы данных.
		for ($i=0; $i<count($name_table); $i++)
		{
			// Выдать в отчет очередную таблицу базы данных

			// Определить количество строк в очередной таблице базы данных.
			$kol_str_tab=0;
			$rez_zapros = mysql_query("SELECT count(*) FROM ".$name_table[$i],$rez_soed_mysql);
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				$kol_str_tab = $tek_stroka[0];
				break;
			}

			// Выдать в отчет название очередной таблицы базы данных и количества строк в ней.
			printf("\n  %s                  ( %d стр.) \n",$name_table[$i], $kol_str_tab);

			// Определить ключевое поле таблицы и сделать сортировку по этому полю
			$name_key_pole = PoiskKeyPole($name_table[$i],$rez_soed_mysql);

			if ($name_key_pole=="NULL")
			{
				$dobavka = "";
			}
			else
			{
				$dobavka = " ORDER BY ".$name_key_pole;
			}

			// Задать значение начального номера строки с которой должена начаться выборка.
			$nom_str=0;

			while ($nom_str < $kol_str_tab)
			{
				// Создать текст запроса извлекающего 1000 строк таблицы в порядке возрастания ключевого поля.
				$textQuery="SELECT * FROM ".$name_table[$i].$dobavka." LIMIT ".sprintf("%d",$nom_str).", 1000 ";

				// Выполнение запроса и вывод на экран таблицы.
				QueryToTable($textQuery, $rez_soed_mysql);

				// Нарастить значение начального номера строки с которой должена начаться выборка.
				$nom_str+=1000;
			}
		}

		// Переход к меню администратора
		printf(' <A href="%s?id=1&login=%s&parol=%s "> Выход </A>',$PHP_SELF,$login,$parol);
	}
	else if ($id==4)
	{
		// Создание и просмотр PHP-MySQL кода предназначенного для загрузки всех таблиц базы данных
		// Очистка массива $name_table[]

		// Создать массив в котором записаны наименования всех таблиц базы данных.
		$textQuery = "SHOW TABLES";
		$result = mysql_query($textQuery, $rez_soed_mysql);
		$i=0;
		while ($tek_stroka = mysql_fetch_row($result))
		{
			$name_table[$i] = $tek_stroka[0];
			$i++;
		}

		// Выдать массив в котором записаны наименование таблиц базы данных.
		for ($i=0; $i<count($name_table); $i++)
		{
			if (($i <> 3) && ($i <> 10))
			{
				printf("\n  %s  ( %d ) | ",$name_table[$i],$i );
				ZagrusTableText( $name_table[$i], $rez_soed_mysql);
			}
		}

		// Переход к меню администратора
		printf(' <A href="%s?id=1&login=%s&parol=%s "> Выход </A>',$PHP_SELF,$login,$parol);
	}
	else if ($id==5)
	{
		// Редактирование таблиц базы данных

		// Очистка массива $name_table[]
		// Создать массив в котором записаны наименования всех таблиц базы данных.
		$textQuery = "SHOW TABLES";
		$result = mysql_query($textQuery, $rez_soed_mysql);
		$i=0;
		while ($tek_stroka = mysql_fetch_row($result))
		{
			$name_table[$i] = $tek_stroka[0];
			$i++;
		}

		// Выдать массив в котором записаны наименование таблиц базы данных.
		for ($i=0; $i<count($name_table); $i++)
		{
			printf("\n  %s   | ",$name_table[$i]);

			// Определить ключевое поле таблицы и сделать сортировку по этому полю  ?????
			$name_key_pole = PoiskKeyPole($name_table[$i],$rez_soed_mysql);

			if ($name_key_pole=="NULL")
			{
				$dobavka = "";
			}
			else
			{
				$dobavka = " ORDER BY ".$name_key_pole;
			}

			// Создать текст запроса извлекающего все строки таблицы в порядке возрастания ключевого поля.
			$textQuery="SELECT * FROM ".$name_table[$i].$dobavka;

			// Выполнение запроса и вывод на экран получившейся таблицы.
			$textHTML= QueryToEdit( $name_table[$i], $textQuery, $rez_soed_mysql );
			printf("\n\n  %s",$textHTML);
		}

		// Переход к меню администратора
		printf(' <A href="%s?id=1&login=%s&parol=%s "> Выход </A>',$PHP_SELF,$login,$parol);
	}
	else if ($id==6)
	{
		// Индексирование базы данных объявлений 1 этап . Создание новой таблицы WORD_INDEX и автозаполнение строк 0-2000 

        // Удаление таблицы "word_index"
        $rez_zapros = mysql_query("DROP TABLE word_index ",$rez_soed_mysql);
        printf("\n Результат удаления таблицы word_index  : %d ",$rez_zapros);

        // Создание таблицы "word_index" 
        $rez_zapros = mysql_query("CREATE TABLE word_index(ID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, IDobyavleniya INT(11), text VARCHAR(90), nom_poz_word_ob INT(11))",$rez_soed_mysql);
        printf("\n Результат создания таблицы word_index : %d ",$rez_zapros);

		// Определить количество строк в таблице "obyavleniya".
		$kol_str_tab=0;
		$rez_zapros = mysql_query("SELECT count(*) FROM obyavleniya ",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			$kol_str_tab = $tek_stroka[0];
			break;
		}

		// Выдать количество строк в таблице "obyavleniya"
		printf("\n\n  Количество строк в таблице obyavleniya = %d ",$kol_str_tab);
		printf("\n\n ");

		// Просмотр 1-2000
		$nom_str=0;
        if ($kol_str_tab > 2000) $kol_str_tab = 2000;

		while ($nom_str < $kol_str_tab)
		{
			// Создать текст запроса извлекающего 50 строк таблицы "obyavleniya" в порядке возрастания ключевого поля.
			$rez_zapros = mysql_query("SELECT ID, text FROM obyavleniya ORDER BY ID "." LIMIT ".sprintf("%d",$nom_str).", 50 ",$rez_soed_mysql);

			// Перебрать в цикле выбранные записи.
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				// Взять идентификационный номер и текст очередного объявления
				$last_insert_id = $tek_stroka[0];
				$message 	= $tek_stroka[1];

				printf("\n ID = %d ",$last_insert_id );		

				// Выделить из текста письма отдельные слова
				$kol_slowo=0;
				$slowo2 = Slowo_Text($message,$kol_slowo);

				// Создать записи в таблице word_index.
				for ($i=0; $i<$kol_slowo; $i++)
				{
					if (strlen($slowo2[$i]) > 1)
					{
						// Очередное слово из объявления перевести в заглавные буквы.
						$slowo_zagl_bukw = StrToUpper_UTF8($slowo2[$i]);

						// Определить сколько раз это слово уже встречалось в этом объявлении.
						$rez_zapros1 = mysql_query("SELECT count(*) FROM word_index WHERE (IDobyavleniya='$last_insert_id') and (text='$slowo_zagl_bukw') ",$rez_soed_mysql);
						while ($tek_stroka1 = mysql_fetch_row($rez_zapros1))
    					{
							$kol_povt_slow_ob = $tek_stroka1[0];
							break;
						}

						if ($kol_povt_slow_ob == 0)
						{
							// Данное слово еще не встречалось в объявлении.
							// Добавить запись о данном слове в объявлении в таблицу "word_index".
							$rez_zapros1 = mysql_query("INSERT INTO word_index VALUES (NULL,'$last_insert_id','$slowo_zagl_bukw',0)",$rez_soed_mysql);

							////////////////
							printf(" %s ", $slowo_zagl_bukw);		
							////////////////
						}
					}
				}
			}

			// Нарастить значение начального номера строки с которой должена начаться выборка.
			$nom_str+=50;
		}


		printf("\n  Индексирование базы данных объявлений 1 этар прошло успешно !!!  \n");

		// Переход к меню администратора
		printf(' <A href="%s?id=1&login=%s&parol=%s "> Выход </A>',$PHP_SELF,$login,$parol);
	}

	else if ($id==7)
	{
		// Индексирование базы данных объявлений 2 этап . Автозаполнение строк 2001-2500 

		// Определить количество строк в таблице "obyavleniya".
		$kol_str_tab=0;
		$rez_zapros = mysql_query("SELECT count(*) FROM obyavleniya ",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			$kol_str_tab = $tek_stroka[0];
			break;
		}

		// Выдать количество строк в таблице "obyavleniya"
		printf("\n\n  Количество строк в таблице obyavleniya = %d ",$kol_str_tab);
		printf("\n\n ");

		//  Просмотр 2001-2500
		$nom_str=2000;

        if ($kol_str_tab > 2500) $kol_str_tab = 2500;

		while ($nom_str < $kol_str_tab)
		{
			// Создать текст запроса извлекающего 50 строк таблицы "obyavleniya" в порядке возрастания ключевого поля.
			$rez_zapros = mysql_query("SELECT ID, text FROM obyavleniya ORDER BY ID "." LIMIT ".sprintf("%d",$nom_str).", 50 ",$rez_soed_mysql);

			// Перебрать в цикле выбранные записи.
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				// Взять идентификационный номер и текст очередного объявления
				$last_insert_id = $tek_stroka[0];
				$message 	= $tek_stroka[1];

				printf("\n ID = %d ",$last_insert_id );		

				// Выделить из текста письма отдельные слова
				$kol_slowo=0;
				$slowo2 = Slowo_Text($message,$kol_slowo);

				// Создать записи в таблице word_index.
				for ($i=0; $i<$kol_slowo; $i++)
				{
					if (strlen($slowo2[$i]) > 1)
					{
						// Очередное слово из объявления перевести в заглавные буквы.
						$slowo_zagl_bukw = StrToUpper_UTF8($slowo2[$i]);

						// Определить сколько раз это слово уже встречалось в этом объявлении.
						$rez_zapros1 = mysql_query("SELECT count(*) FROM word_index WHERE (IDobyavleniya='$last_insert_id') and (text='$slowo_zagl_bukw') ",$rez_soed_mysql);
						while ($tek_stroka1 = mysql_fetch_row($rez_zapros1))
    					{
							$kol_povt_slow_ob = $tek_stroka1[0];
							break;
						}

						if ($kol_povt_slow_ob == 0)
						{
							// Данное слово еще не встречалось в объявлении.
							// Добавить запись о данном слове в объявлении в таблицу "word_index".
							$rez_zapros1 = mysql_query("INSERT INTO word_index VALUES (NULL,'$last_insert_id','$slowo_zagl_bukw',0)",$rez_soed_mysql);

							////////////////
							printf(" %s ", $slowo_zagl_bukw);		
							////////////////
						}
					}
				}
			}

			// Нарастить значение начального номера строки с которой должена начаться выборка.
			$nom_str+=50;
		}
		printf("\n  Индексирование базы данных объявлений 2 этап прошло успешно !!!  \n");

		// Переход к меню администратора
		printf(' <A href="%s?id=1&login=%s&parol=%s "> Выход </A>',$PHP_SELF,$login,$parol);
	}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//

    else if ($id==8)
	{
		// Индексирование базы данных объявлений 3 этап . Автозаполнение строк 2501-4000 

		// Определить количество строк в таблице "obyavleniya".
		$kol_str_tab=0;
		$rez_zapros = mysql_query("SELECT count(*) FROM obyavleniya ",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			$kol_str_tab = $tek_stroka[0];
			break;
		}

		// Выдать количество строк в таблице "obyavleniya"
		printf("\n\n  Количество строк в таблице obyavleniya = %d ",$kol_str_tab);
		printf("\n\n ");

		// Просмотр 2500 - до конца
		$nom_str=2500;
//        if ($kol_str_tab > 4000) $kol_str_tab = 4000;

		while ($nom_str < $kol_str_tab)
		{
			// Создать текст запроса извлекающего 50 строк таблицы "obyavleniya" в порядке возрастания ключевого поля.
			$rez_zapros = mysql_query("SELECT ID, text FROM obyavleniya ORDER BY ID "." LIMIT ".sprintf("%d",$nom_str).", 50 ",$rez_soed_mysql);

			// Перебрать в цикле выбранные записи.
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				// Взять идентификационный номер и текст очередного объявления
				$last_insert_id = $tek_stroka[0];
				$message 	= $tek_stroka[1];

				printf("\n ID = %d ",$last_insert_id );		

				// Выделить из текста письма отдельные слова
				$kol_slowo=0;
				$slowo2 = Slowo_Text($message,$kol_slowo);

				// Создать записи в таблице word_index.
				for ($i=0; $i<$kol_slowo; $i++)
				{
					if (strlen($slowo2[$i]) > 1)
					{
						// Очередное слово из объявления перевести в заглавные буквы.
						$slowo_zagl_bukw = StrToUpper_UTF8($slowo2[$i]);

						// Определить сколько раз это слово уже встречалось в этом объявлении.
						$rez_zapros1 = mysql_query("SELECT count(*) FROM word_index WHERE (IDobyavleniya='$last_insert_id') and (text='$slowo_zagl_bukw') ",$rez_soed_mysql);
						while ($tek_stroka1 = mysql_fetch_row($rez_zapros1))
    					{
							$kol_povt_slow_ob = $tek_stroka1[0];
							break;
						}

						if ($kol_povt_slow_ob == 0)
						{
							// Данное слово еще не встречалось в объявлении.
							// Добавить запись о данном слове в объявлении в таблицу "word_index".
							$rez_zapros1 = mysql_query("INSERT INTO word_index VALUES (NULL,'$last_insert_id','$slowo_zagl_bukw',0)",$rez_soed_mysql);

							////////////////
							printf(" %s ", $slowo_zagl_bukw);		
							////////////////
						}
					}
				}
			}

			// Нарастить значение начального номера строки с которой должена начаться выборка.
			$nom_str+=50;
		}
		printf("\n  Индексирование базы данных объявлений 3 этап прошло успешно !!!  \n");

		// Переход к меню администратора
		printf(' <A href="%s?id=1&login=%s&parol=%s "> Выход </A>',$PHP_SELF,$login,$parol);
	}

//
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	else if ($id==9)
	{
		// Очистка таблицы temp_rez_seek
		$rez_zapros = mysql_query("DELETE FROM temp_rez_seek",$rez_soed_mysql);
		printf("\n Результат очистки таблицы temp_rez_seek : %d ",$rez_zapros);

		// Очистка таблицы temp_word
		$rez_zapros = mysql_query("DELETE FROM temp_word",$rez_soed_mysql);
		printf("\n Результат очистки таблицы temp_word : %d ",$rez_zapros);

		// Переход к меню администратора
		printf(' <A href="%s?id=1&login=%s&parol=%s "> Выход </A>',$PHP_SELF,$login,$parol);
	}

    //////////////////////////////////////////////////////////////////////////////////////////
    //

	else if ($id==10)
	{
        // Создание таблицы RIS
		printf("\n Перед созданием таблицы RIS ");
        $rez_zapros = mysql_query("CREATE TABLE ris(ID INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, name_file VARCHAR(90), IDobyavleniya INT(11) )",$rez_soed_mysql);
        printf("\n Результат создания таблицы ris : %d ",$rez_zapros);
	}

    //
    //////////////////////////////////////////////////////////////////////////////////////////

}
else
{
	printf("\n Ошибка при соединении с MySQL или базой данных  ");
}







?>

</BODY>

</HTML>

