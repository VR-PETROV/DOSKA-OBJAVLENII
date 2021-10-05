<HTML>

<HEAD>
   <TITLE> Доска объявлений  г.Самара </TITLE>
   <META name="keywords" content="доска объявлений объявления купи продай купить продать информация Самара сдаю жилье внаем аренда недвижимость квартира на часы сутки ночь для ебли потрахаться переспать ремонт бытовой техники сантехники телефонов телевизоров стиральных машин автоматов подключение холодильников мебели мебель обтяжка перетяжка сборка компьютеров СВЧ микроволновые печи микроволновки ремонт электроники магнитофонов плееров DVD музыкальных центров муз.центров видео видеомагнитофонов радиоприемников радио приемников видео VIDEO AUDIO аудио грузоперевозки грузчики газели перевозка переезды транспорт транспортные услуги тяжести электромонтажные розетки люстры проводка ремонтно-строительные строительные работы ремонт квартир обои оклейка обклейка укладка кафеля ветонит ламинат линолеум уборка чистка гигиена уничтожение насекомых тараканов грызунов мышей остекление балконов лоджий реставрация ванн акрилом адвокат юридическая помощь юридические услуги ДТП наследство развод раздел имущества уголовные гражданские дела суд представительство в суде раздел взыскание долгов списание кредита споры "> </META>
</HEAD>
<BODY link=#D0D0D0 alink=#D0D0D0 vlink=#D0D0D0 bgcolor=#0000A0 text=#D0D0D0 topmargin=40>
<PRE>	<H1>   	   	    	Доска объявлений г.Самара				</H1>

<?php

include "lib1.php";
include "zagruzka.php";


$PHP_SELF  		= $_SERVER['PHP_SELF'];
$HTTP_HOST 		= $_SERVER['HTTP_HOST'];
$HTTP_X_FORWARDED_FOR 	= $_SERVER['REMOTE_ADDR'];

$submit0  = false;	
$submit1  = false;
$submit2  = false;
$submit3  = false;
$submit4  = false;
$submit5  = false;
$submit6  = false;
$submit7  = false;
$submit8  = false;
$submit9  = false;
$submit10 = false;
$ud1 	  = 0;
$ud2 	  = 0;
$chag 	  = 0;
$id 	  = 0;
$kol_povt_slow_ob = 0;
$name_ed_izm = "";
$priz_zagol=false;
$name_file = "";


if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{ 
	// Использовался метод POST для передачи параметров
	if (isset($_POST['submit0'])) 		    $submit0  	    = $_POST['submit0'];
	if (isset($_POST['submit1'])) 		    $submit1  	    = $_POST['submit1'];
	if (isset($_POST['submit2'])) 		    $submit2  	    = $_POST['submit2'];
	if (isset($_POST['submit3'])) 		    $submit3  	    = $_POST['submit3'];
	if (isset($_POST['submit4'])) 		    $submit4  	    = $_POST['submit4'];
	if (isset($_POST['submit5'])) 		    $submit5  	    = $_POST['submit5'];
	if (isset($_POST['submit6'])) 		    $submit6  	    = $_POST['submit6'];
	if (isset($_POST['submit7'])) 		    $submit7  	    = $_POST['submit7'];
	if (isset($_POST['submit8'])) 		    $submit8  	    = $_POST['submit8'];
	if (isset($_POST['submit9'])) 		    $submit9  	    = $_POST['submit9'];
	if (isset($_POST['submit10'])) 		    $submit10 	    = $_POST['submit10'];
	if (isset($_POST['ud1'])) 		        $ud1 	        = $_POST['ud1'];
	if (isset($_POST['ud2']))		        $ud2 	        = $_POST['ud2'];
	if (isset($_POST['chag']))	    	    $chag 	        = $_POST['chag'];
	if (isset($_POST['id']))		        $id 	        = $_POST['id'];
	if (isset($_POST['id_razdel']))		    $id_razdel 	    = $_POST['id_razdel'];
	if (isset($_POST['id_ob']))		        $id_ob	        = $_POST['id_ob'];
	if (isset($_POST['priz_zagol']))	    $priz_zagol	    = $_POST['priz_zagol'];
	if (isset($_POST['text_poisk']))	    $text_poisk	    = $_POST['text_poisk'];
	if (isset($_POST['telefon']))		    $telefon   	    = $_POST['telefon'];
	if (isset($_POST['telefon2']))		    $telefon2  	    = $_POST['telefon2'];
	if (isset($_POST['otzyw_text']))	    $otzyw_text	    = $_POST['otzyw_text'];
	if (isset($_POST['login']))		        $login     	    = $_POST['login'];
	if (isset($_POST['parol']))		        $parol     	    = $_POST['parol'];
	if (isset($_POST['zena']))		        $zena     	    = $_POST['zena'];
	if (isset($_POST['short_message']))     $short_message 	= $_POST['short_message'];
	if (isset($_POST['message'])) 		    $message 	    = $_POST['message'];
	if (isset($_POST['id_ed_izm']))		    $id_ed_izm	    = $_POST['id_ed_izm'];
	if (isset($_POST['telefon2']))		    $telefon2	    = $_POST['telefon2'];
	if (isset($_POST['slowo2']))		    $slowo2		    = $_POST['slowo2'];
	if (isset($_POST['name_razdel']))	    $name_razdel	= $_POST['name_razdel'];
	if (isset($_POST['name_ed_izm']))	    $name_ed_izm	= $_POST['name_ed_izm'];
	if (isset($_POST['wyb_id_ed_izm']))	    $wyb_id_ed_izm	= $_POST['wyb_id_ed_izm'];
	if (isset($_POST['kol_povt_slow_ob']))  $kol_povt_slow_ob = $_POST['kol_povt_slow_ob'];
	if (isset($_POST['chtenie_ob1']))       $chtenie_ob1    = $_POST['chtenie_ob1'];
	if (isset($_POST['sozdan_ob1']))        $sozdan_ob1     = $_POST['sozdan_ob1'];
	if (isset($_POST['izmen_ob1']))         $izmen_ob1      = $_POST['izmen_ob1'];
	if (isset($_POST['udal_ob1']))	        $udal_ob1       = $_POST['udal_ob1']; 
	if (isset($_POST['id_user_razdel']))    $id_user_razdel = $_POST['id_user_razdel'];
	if (isset($_POST['id_user']))           $id_user        = $_POST['id_user'];
	if (isset($_POST['name_file']))           $name_file    = $_POST['name_file'];
} 
elseif ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
	// Использовался метод GET для передачи параметров
	if (isset($_GET['submit0'])) 		    $submit0  	    = $_GET['submit0'];
	if (isset($_GET['submit1'])) 		    $submit1  	    = $_GET['submit1'];
	if (isset($_GET['submit2'])) 		    $submit2  	    = $_GET['submit2'];
	if (isset($_GET['submit3'])) 		    $submit3  	    = $_GET['submit3'];
	if (isset($_GET['submit4'])) 		    $submit4  	    = $_GET['submit4'];
	if (isset($_GET['submit5'])) 		    $submit5  	    = $_GET['submit5'];
	if (isset($_GET['submit6'])) 		    $submit6  	    = $_GET['submit6'];
	if (isset($_GET['submit7'])) 		    $submit7  	    = $_GET['submit7'];
	if (isset($_GET['submit8'])) 		    $submit8  	    = $_GET['submit8'];
	if (isset($_GET['submit9'])) 		    $submit9  	    = $_GET['submit9'];
	if (isset($_GET['submit10'])) 		    $submit10 	    = $_GET['submit10'];
	if (isset($_GET['ud1'])) 		        $ud1 	        = $_GET['ud1'];
	if (isset($_GET['ud2']))		        $ud2 	        = $_GET['ud2'];
	if (isset($_GET['chag']))		        $chag 	        = $_GET['chag'];
	if (isset($_GET['id']))			        $id 	        = $_GET['id'];
	if (isset($_GET['id_razdel']))		    $id_razdel 	    = $_GET['id_razdel'];
	if (isset($_GET['id_ob']))		        $id_ob	        = $_GET['id_ob'];
	if (isset($_GET['priz_zagol'])) 	    $priz_zagol	    = $_GET['priz_zagol'];
	if (isset($_GET['text_poisk'])) 	    $text_poisk	    = $_GET['text_poisk'];
	if (isset($_GET['telefon']))		    $telefon   	    = $_GET['telefon'];
	if (isset($_GET['telefon2']))		    $telefon2  	    = $_GET['telefon2'];
	if (isset($_GET['otzyw_text']))		    $otzyw_text  	= $_GET['otzyw_text'];
	if (isset($_GET['login']))		        $login       	= $_GET['login'];
	if (isset($_GET['parol']))		        $parol       	= $_GET['parol'];
	if (isset($_GET['zena']))		        $zena     	    = $_GET['zena'];
	if (isset($_GET['short_message'])) 	    $short_message 	= $_GET['short_message'];
	if (isset($_GET['message'])) 		    $message 	    = $_GET['message'];
	if (isset($_GET['id_ed_izm']))		    $id_ed_izm	    = $_GET['id_ed_izm'];
	if (isset($_GET['telefon2']))		    $telefon2	    = $_GET['telefon2'];
	if (isset($_GET['slowo2']))		        $slowo2		    = $_GET['slowo2'];
	if (isset($_GET['name_razdel']))	    $name_razdel	= $_GET['name_razdel'];
	if (isset($_GET['name_ed_izm']))	    $name_ed_izm	= $_GET['name_ed_izm'];
	if (isset($_GET['wyb_id_ed_izm']))	    $wyb_id_ed_izm	= $_GET['wyb_id_ed_izm'];
	if (isset($_GET['kol_povt_slow_ob']))   $kol_povt_slow_ob = $_GET['kol_povt_slow_ob'];
	if (isset($_GET['chtenie_ob1']))        $chtenie_ob1    = $_GET['chtenie_ob1'];
	if (isset($_GET['sozdan_ob1']))         $sozdan_ob1     = $_GET['sozdan_ob1'];
	if (isset($_GET['izmen_ob1']))          $izmen_ob1      = $_GET['izmen_ob1'];
	if (isset($_GET['udal_ob1']))	        $udal_ob1       = $_GET['udal_ob1']; 
    if (isset($_GET['id_user_razdel']))     $id_user_razdel = $_GET['id_user_razdel'];
	if (isset($_GET['id_user']))            $id_user        = $_GET['id_user'];
	if (isset($_GET['name_file']))           $name_file    = $_GET['name_file'];
}
else
{
	// Использовался неизвестный метод для передачи параметров
	exit();
}


// Создание массива вариантов выбора.
$spisok[0] = "     ";
$spisok[1] = "Выкл.";
$spisok[2] = "Вкл. ";

// Выполнить соединение с MySQL и базой данных и получить дескриптор соединения с MySQL.
$rez_soed_mysql = Connect_chernyh5();


////////////////////////////////////
//
//printf("\n Результат соединения с MySQL %d ",$rez_soed_mysql);
//
////////////////////////////////////


if ($rez_soed_mysql > 0)
{
	// Успешное соединении с MySQL и базой данных

	if ($submit1)
	{
		// Предыдущим окном было окно ввода объявления.
		if (HostBlackList($HTTP_X_FORWARDED_FOR,$rez_soed_mysql)==0)
		{
			// IP-адрес хоста с которого подано объявление не встречается черном списке
			// Записать объявление в базу данных.

			// Перевести цену из строки в число.
			$zena1 = StrToFloat($zena);

			// Записать объявление в базу данных.
			$rez_zapros = mysql_query("INSERT INTO obyavleniya VALUES (NULL,'$id_razdel','$short_message','$message','$parol',timestamp(curdate(),curtime()),'$zena1','$id_ed_izm',1,'$HTTP_X_FORWARDED_FOR',0)",$rez_soed_mysql);
			//printf("\n Результат записи в базу данных нового объявления = %d  ",$rez_zapros);

			// Получить идентификатор последней созданной записи в таблице "obyavleniya".
			$rez_zapros = mysql_query("SELECT LAST_INSERT_ID()",$rez_soed_mysql);

			$last_insert_id = 0;
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
				$last_insert_id = $tek_stroka[0];
				break;
			}

			// Выделить из текста объявления номера телефонов.
			$kol_telefon=0;
			$telefon2 = Telefon_Text($message,$kol_telefon);

			// Создать записи в таблице telefon.
			for ($i=0; $i<$kol_telefon; $i++)
			{
				$rez_zapros = mysql_query("INSERT INTO telefon VALUES (NULL,'$telefon2[$i]','$last_insert_id')",$rez_soed_mysql);
			}

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

                    //printf("\n Идёт поиск слова %s в таблице word_index  ",$slowo_zagl_bukw);
					// Определить сколько раз это слово уже встречалось в этом объявлении.
					$rez_zapros = mysql_query("SELECT count(*) FROM word_index WHERE (IDobyavleniya='$last_insert_id') and (text='$slowo_zagl_bukw') ",$rez_soed_mysql);

                    //printf("\n После поиска слова %s в таблице word_index    rez_zapros = %3d   ",$slowo_zagl_bukw,$rez_zapros  );

					$kol_povt_slow_ob = 0;	
					while ($tek_stroka = mysql_fetch_row($rez_zapros))
    				{
						$kol_povt_slow_ob = $tek_stroka[0];
						break;
					}

					if ($kol_povt_slow_ob == 0)
					{
						// Данное слово еще не встречалось в объявлении.
						// Добавить запись о данном слове в объявлении в таблицу "word_index".
						$rez_zapros = mysql_query("INSERT INTO word_index VALUES (NULL,'$last_insert_id','$slowo_zagl_bukw',0)",$rez_soed_mysql);
						// printf("\n +");
					}
				}
			}

			// Создать текст письма направляемого пользователям службы сообщений.
			$tema = "Нов.объяв.разд. ".$name_razdel;
			$message = "Создано новое объявление в разделе : ".$name_razdel."\n                  Тема объявления :  ".$short_message."\n                 Текст объявления :  ".$message."\n Значения для поиска и сортировки : 0 руб. за ".$name_ed_izm;

			// Выбрать из таблицы user_razdel пользователей службы сообщений которым надо отослать сообщение о создании нового объявления
			// и отослать текст этого объявления.
			//
			$rez_zapros = mysql_query("SELECT IDuser FROM user_razdel WHERE IDrazdel='$id_razdel' and sozdan=1 ",$rez_soed_mysql);

			// Перебор в цикле всех адресатов которым надо направить это письмо
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
			{
				// Отправка письма очередному адресату
				$id_priemnik = $tek_stroka[0];
				$rez_zapros1 = mysql_query("INSERT INTO mail VALUES (NULL,5,'$id_priemnik',timestamp(curdate(),curtime()),'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0,'$tema','$message')",$rez_soed_mysql);
			}

            // Загрузить файлы с изображениями
            
            // Каталог в который идёт загрузка
            $target_dir = 'img/';
 
            if( isset($_FILES['fileUpload']['name']))   
            {
                // Определить количество выбранных для загрузки файлов
                $total_files = count($_FILES['fileUpload']['name']);

                //printf("\n\n Передано на загрузку %d файлов  ", $total_files);    
 
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
			            $rez_zapros = mysql_query("INSERT INTO ris VALUES (NULL,'$target','$last_insert_id')",$rez_soed_mysql); // Создать запись в таблице "ris" об очередном загруженном файле 'target' для объявления 'last_insert_id'
                    }
                }
            }
            else
            {
                //printf("\n\n Нет файлов для загрузки ");    
            }

			// Следующим экраном установить экрану № 2 'Просмотр объявлений раздела'.
			$id=2;
		}
		else
		{
			// IP-адрес текущего компьютера найден в черном списке.
			// Выдать на экран сообщение об ошибке и вернуться к вводу объявления.
			//
			printf('<H3> 		 Не выполнено !!!   </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 			 <A href="%s?id=1&id_razdel=%d"> Переход к повторному вводу символов. </A>   </H3>',$PHP_SELF, $id_razdel);

			// Исключить появление списка разделов.
			$id=1000000;
		}

	}

	if ($submit2)
	{
		// Предыдущим окном было окно создания нового раздела.
		//
		if ( HostBlackList($HTTP_X_FORWARDED_FOR,$rez_soed_mysql)==0)
		{
			// IP-адрес текущего компьютера отсуствует в черном списке.
			// Записать новый раздел в базу данных.

			// Создать новый раздел с указанным наименованием.
			$rez_zapros = mysql_query("INSERT INTO razdel VALUES (NULL,'$name_razdel')",$rez_soed_mysql);

			// Следующим экраном будет экран будет экран выбора раздела.
			$id=0;
		}
		else
		{
			// IP-адрес текущего компьютера найден в черном списке.
			// Выдать на экран сообщение об ошибке и вернуться к вводу наименования нового раздела.
			//
			printf('<H3> 		Не выполнено  !!! </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 			 <A href="%s?id=7"> Переход к повторному вводу символов. </A>   </H3>',$PHP_SELF);

			// Исключить появление списка разделов.
			$id=1000000;
		}
	}


	if ($submit3)
	{
		// Предыдущим окном было окно редактирования объявления.

		if ( HostBlackList($HTTP_X_FORWARDED_FOR,$rez_soed_mysql)==0)
		{
			// IP-адрес текущего компьютера отсуствует в черном списке.

			// Обновление объявления с идентификационным номером $id_ob путем записи в поля k_text, text, parol, data_time новых значений
			// переданных через переменные $short_message, $message, $parol.
			$rez_zapros = mysql_query("UPDATE obyavleniya SET k_text='$short_message', text='$message', parol='$parol', zena='$zena', IDed_izm='$wyb_id_ed_izm',IP='$HTTP_X_FORWARDED_FOR' WHERE ID='$id_ob' ",$rez_soed_mysql);

			// Выделить из текста объявления номера телефонов.

			// Найти в таблицы telefon записи со значение поля "IDobyavleniya" равным идентификатору текущего объявления 
			// и удалить их.
			$rez_zapros = mysql_query("DELETE FROM telefon WHERE IDobyavleniya='$id_ob' ",$rez_soed_mysql);

			// Выделить из текста объявления номера телефонов.
			$kol_telefon=0;
			$telefon2 = Telefon_Text($message,$kol_telefon);

			// Создать записи в таблице telefon.
			for ($i=0; $i<$kol_telefon; $i++)
			{
				$rez_zapros = mysql_query("INSERT INTO telefon VALUES (NULL,'$telefon2[$i]','$id_ob')",$rez_soed_mysql);
			}

			// Выполнить запрос извлекающий код раздела в котором расположено измененное объявление
			$rez_zapros = mysql_query("SELECT * FROM obyavleniya WHERE ID='$id_ob' ",$rez_soed_mysql);
			$id_razdel = -1;
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
				$id_razdel = $tek_stroka[1];
			}

			// Выполнить запрос извлекающий наименование раздела в котором расположено объявление.
			$rez_zapros = mysql_query("SELECT * FROM razdel WHERE ID='$id_razdel' ",$rez_soed_mysql);
			$name_razdel="";
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
				$name_razdel = $tek_stroka[1];
			}

			// Создать текст письма направляемого пользователям службы сообщений.
			$tema = "Измен.объяв.разд. ".$name_razdel;
			$message = "Изменено объявление из раздела ".$name_razdel."\n     Тема объявления :  ".$short_message."\n    Текст объявления :  ".$message;

			// Выбрать из таблицы user_razdel пользователей службы сообщений которым надо отослать сообщение об изменении объявления
			// и отослать новый текст этого объявления.
			//
			$rez_zapros = mysql_query("SELECT IDuser FROM user_razdel WHERE IDrazdel='$id_razdel' and izmen=1 ",$rez_soed_mysql);

			// Перебор в цикле всех адресатов которым надо направить это письмо
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
				// Отправка письма очередному адресату
				$id_priemnik = $tek_stroka[0];
				$rez_zapros1 = mysql_query("INSERT INTO mail VALUES (NULL,5,'$id_priemnik',timestamp(curdate(),curtime()),'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0,'$tema','$message')",$rez_soed_mysql);
			}



            // Загрузить файлы с изображениями
            
            // Каталог в который идёт загрузка
            $target_dir = 'img/';
 
            if( isset($_FILES['fileUpload']['name']))   
            {
                // Определить количество выбранных для загрузки файлов
                $total_files = count($_FILES['fileUpload']['name']);

                //printf("\n\n Передано на загрузку %d файлов  ", $total_files);    
 
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
			            $rez_zapros = mysql_query("INSERT INTO ris VALUES (NULL,'$target','$id_ob')",$rez_soed_mysql);  // Создать запись в таблице "ris" об очередном загруженном файле 'target' для объявления 'id_ob'
                    }
                }
            }
            else
            {
                // Нет файлов для загрузки. Выдать на экран предупреждающее сообщение.
                printf("\n\n Нет файлов для загрузки ");    
            }

			// Переход к экрану № 3 просмотра полного текста объявления.
			$id=3;
		}
		else
		{
			// IP-адрес текущего компьютера найден в черном списке.
			// Выдать на экран сообщение об ошибке и вернуться к вводу наименования нового раздела.
			//
			printf('<H3> 		Не выполнено !!!  </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 			 <A href="%s?id=0"> Продолжить </A>   </H3>',$PHP_SELF);

			// Исключить появление списка разделов.
			$id=1000000;
		}
	}

	if ($submit4)
	{
		// Предыдущим окном было окно редактирования объявления.
		// Переход к экрану № 3 просмотра полного текста объявления  без внесения изменений.
		$id=3;
	}


	if ($submit5)
	{
		// Экран установки флажков включения/выключения отсылки сообщений для текущего пользователя и раздела доски объявлений.

		// Найти идентификатор пользователя по логину и паролю.
		$rez_zapros = mysql_query("SELECT * FROM user WHERE login='$login' and parol='$parol' ",$rez_soed_mysql	 );

		$fam1	 ="";
		$im1 	 ="";
		$ot1 	 ="";
		$id_user = -1;
		$i=0;

		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			$fam1	 = $tek_stroka[3];
			$im1 	 = $tek_stroka[4];
			$ot1 	 = $tek_stroka[5];
			$id_user = $tek_stroka[0];
			printf("\n <H2>          			 		%s %s %s        </H2>", $tek_stroka[3], $tek_stroka[4], $tek_stroka[5]);
			$i++;
		}


		if ($id_user == -1)
		{
			// Не найден пользователь с указанным логином и паролем.
			printf("\n\n");
			printf("<H2>					Не найден пользователь с указанным логином и паролем !!!	</H2>");
			printf("\n\n");
			printf("\n\n\n");
			printf('<H3>							<A href="%s?id=0"> Продолжение </A> </H3>  ',$PHP_SELF);
		}
		else
		{
			// Найден пользователь с указанным логином и паролем
			// Найти идентификационный код раздела доски объявлений по логину и паролю.
			$id_razdel = -1;
			$rez_zapros = mysql_query("SELECT * FROM razdel WHERE name='$name_razdel' ",$rez_soed_mysql);

			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
				$id_razdel = $tek_stroka[0];
				printf("<H2>        					%s          </H2>", $tek_stroka[1]);
			}

			// Считать из таблицы user_razdel текущее состояние включения/выключения для текущего пользователя и раздела.
			//
			$rez_zapros = mysql_query("SELECT * FROM user_razdel WHERE IDuser='$id_user' and IDrazdel='$id_razdel'  ",$rez_soed_mysql);

			$chtenie_ob1 	=  0;
			$sozdan_ob1  	=  0;
			$izmen_ob1   	=  0;
			$udal_ob1    	=  0;
			$id_user_razdel = -1;

			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
				$chtenie_ob1 	= $tek_stroka[3];
				$sozdan_ob1  	= $tek_stroka[4];
				$izmen_ob1   	= $tek_stroka[5];
				$udal_ob1    	= $tek_stroka[6];
				$id_user_razdel = $tek_stroka[0];
			}

			?>
			<form method="post" action="<?php echo $PHP_SELF?>">
			<input type=hidden name="id_user_razdel" value="<?php echo $id_user_razdel ?>">
			<input type=hidden name="id_user" 	 value="<?php echo $id_user        ?>">
			<input type=hidden name="id_razdel" 	 value="<?php echo $id_razdel      ?>">
			<?php

			$html_text_wybor_priz_chten = BoundToList( $spisok, $chtenie_ob1+1, "chtenie_ob1" );
			printf("\n							Чтение    : %s", $html_text_wybor_priz_chten );

			$html_text_wybor_priz_sozdan = BoundToList( $spisok, $sozdan_ob1+1, "sozdan_ob1" );
			printf("\n							Создание  : %s", $html_text_wybor_priz_sozdan );

			$html_text_wybor_priz_izmen = BoundToList( $spisok, $izmen_ob1+1, "izmen_ob1" );
			printf("\n							Изменение : %s", $html_text_wybor_priz_izmen );

			$html_text_wybor_priz_udal = BoundToList( $spisok, $udal_ob1+1, "udal_ob1" );
			printf("\n							Удаление  : %s", $html_text_wybor_priz_udal );

			printf("\n \n ");

			?>
   									<input type="Submit" name="submit7" value="Сохранить">    <input type="Submit" name="submit6" value="Отмена">
			</form>
			<?php
		}

		// Исключить появление списка разделов.
		$id=1000000;

	}

	if ($submit6)
	{
		// В предыдущем экране была нажата кнопка "Отмена".
		// Переход к экрану № 0
		$id=0;
	}


	if ($submit7)
	{
		// Предыдущим экраном был экран установки флажков включения/выключения отсылки сообщений для текущего пользователя и
		// раздела доски объявлений. Там была нажата кнопка "Сохранить".

		if ( HostBlackList($HTTP_X_FORWARDED_FOR,$rez_soed_mysql)==0 )
		{
			// IP-адрес хоста с которого подано объявление не встречается черном списке

			// Коррекция значения флажков.
	       	$chtenie_ob1= $chtenie_ob1 - 1;
			$sozdan_ob1 = $sozdan_ob1  - 1;
			$izmen_ob1  = $izmen_ob1   - 1;
			$udal_ob1   = $udal_ob1    - 1;

			//printf("\n id_user= %d    id_razdel= %d    chtenie_ob1= %d    sozdan_ob1= %d    izmen_ob1= %d   udal_ob1= %d ",$id_user,$id_razdel,$chtenie_ob1,$sozdan_ob1,$izmen_ob1,$udal_ob1);
			//printf("\n id_user_razdel= %d  ",$id_user_razdel);
			printf("\n\n");

			// Записать новое состояние флажков включения/выключения отсылки сообщений для текущего пользователя и раздела доски объявлений в базу данных.
			if ($id_user_razdel != -1)
			{
				// В таблице закрепления пользователей за разделами уже существует запись по данному пользователю и разделу, обновить ее.
				//printf("\n  Обновить  запись в таблице закрепления пользователей за разделами ");
				$rez_zapros = mysql_query("UPDATE user_razdel SET chtenie='$chtenie_ob1',sozdan='$sozdan_ob1',izmen='$izmen_ob1',udal='$udal_ob1' WHERE ID='$id_user_razdel' ",$rez_soed_mysql);
			}
			else
			{
				// В таблице закрепления пользователей за разделами отсуствует запись по данному пользователю и разделу, создать в ее.
				//printf("\n  Создание записи в таблице закрепления пользователей за разделами ");
				$rez_zapros = mysql_query("INSERT INTO user_razdel VALUES (NULL,'$id_user','$id_razdel','$chtenie_ob1','$sozdan_ob1','$izmen_ob1','$udal_ob1')",$rez_soed_mysql);
			}

			//printf("\n Результат операции = %d  ",$rez_zapros);

			// Переход к экрану № 0
			$id=0;
		}
		else
		{
			// IP-адрес текущего компьютера найден в черном списке.
			printf('<H3> 		Не выполнено !!!  </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 			 			<A href="%s?id=8"> Повторить </A>   </H3>',$PHP_SELF);

			// Исключить появление списка разделов.
			$id=1000000;
		}
	}


	if ($submit8)
	{
		// Предыдущим экраном был экран ввода номера телефона. Там была нажата кнопка "Далее".
		printf("<H2>  Поиск объявлений в которых встречается телефон :  %s  </H2>  \n",$telefon);

		// Выделить из текста объявления номер телефона без "-" и "8".
		$kol_telefon=0;
		$telefon2 = Telefon_Text($telefon,$kol_telefon);

		// Установить начальное значение счетчика объявлений.
		$j=1;

		printf("<table border=1> ");

		// Перебор в цикле всех номеров телефонов.
		for ($i=0; $i<$kol_telefon; $i++)
		{
			$rez_zapros = mysql_query("SELECT obyavleniya.data_time, obyavleniya.k_text, obyavleniya.text, obyavleniya.ID, obyavleniya.IDrazdel FROM telefon,obyavleniya WHERE (telefon.name ='$telefon2[$i]') and (telefon.IDobyavleniya = obyavleniya.ID) ORDER BY obyavleniya.ID DESC",$rez_soed_mysql);

			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
				printf("<tr>");
				$data_time1 = $tek_stroka[0];
				$k_text1    = $tek_stroka[1];
				$text1      = $tek_stroka[2];
				$id_ob1     = $tek_stroka[3];
				$id_razdel1 = $tek_stroka[4];
				printf("\n  <th> %d </th>  <td> %s </td> <th> %s </th> <td> %s </td>  <td> %s </td> ", $j, $telefon2[$i], $data_time1, $k_text1 , $text1);
	            printf('<td> <A href="%s?id=3&id_ob=%d&priz_zagol=%d&id_razdel=%d"> Перейти</A> </td> ',$PHP_SELF, $id_ob1, 1, $id_razdel1);
				printf("</tr>");
				
				// Нарастить значение счетчика объявлений.
				$j++;
			}
		}

		printf("</table>");

		if ($j==1)
		{
			// Не найдены объявления в которых встречается указанный номер телефона.
			printf("<H2>  		Не найдены 		</H2>  \n");
		}

		// Выдать на экран кнопку "Продолжение".
		printf('<H3>	 	<A href="%s?id=0"> Продолжение </A>   </H3>',$PHP_SELF);

		// Исключить появление списка разделов.
		$id=1000000;
	}


	if ($submit9)
	{
		// Предыдущим экраном был экран ввода комбинации слов. Там была нажата кнопка "Поиск".
		printf("<H3>  Поиск объявлений в которых встречается комбинация слов :  %s  </H3>  \n",$text_poisk);

		// Создать уникальный идентификатор сессии из двух последних цифр IP-адреса и минуты и секунды текущейго времени.
		$chas           = (int) date('H');
		$min            = (int) date('i');
		$sek            = (int) date('s');
		$ip_adrees_array= explode(".",$HTTP_X_FORWARDED_FOR);
		$ip_adrees0     = (int) $ip_adrees_array[0];
		$ip_adrees1     = (int) $ip_adrees_array[1];
		$ip_adrees2     = (int) $ip_adrees_array[2];
		$ip_adrees3     = (int) $ip_adrees_array[3];
		$nom_session    = ($ip_adrees2*256 + $ip_adrees3)*3600 + $min*60 + $sek;
//		printf("\n  № сессии %d  ", $nom_session  );

		// Удаление из таблицы "temp_word" строк со значением в колонке "code_session" равным уникальному
		// идентификатору текущей сессии.
		$rez_zapros = mysql_query("DELETE FROM temp_word WHERE code_session='$nom_session'",$rez_soed_mysql);

		// Обнулить счетчик слов в таблице "slowa_temp_word".
		$kol_slow_temp_word = 0;

		// Обнулить указатель позиции в тексте
		$poz_text = 0;

		// Очистить слово
		$slowo = "";

		// Определить длину текста
		$dl_text = strlen($text_poisk);

        // Разбиение поисковой строки на отдельные слова
		while ($poz_text < $dl_text)
		{
			// Считать символ из текущей позиции текста
			$s = $text_poisk[$poz_text];

			if (($s == " ") || ($s == "(") || ($s == ")") || ($s == ".") || ($s == ",")  || ($s == "-"))
			{
				// Обнаружен конец слова

				if (strlen($slowo) > 0)
				{
					// Слово не пустое. Записать в массив найденное слово со степенью близости 10.
					$slowo = StrToUpper_UTF8($slowo);
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo, 10, 1, $kol_slow_temp_word );

					// Очистить слово
					$slowo = "";
				}

				// Пропустить в тексте пробелы и другие посторонние символы.
				while (($poz_text < $dl_text) && (($s == " ") || ($s == "(") || ($s == ")") || ($s == ".") || ($s == ",") || ($s == "-") ))
				{
					$poz_text++;
					$s = $text_poisk[$poz_text];
				}

				// Если текст закончился тогда выход из цикла
				if ($poz_text >= $dl_text) break;
			}
			else
			{
				// Считанный символ является буквой или цифрой. Присоединить его к слову.
				$slowo .= $s;

				// Нарастить указатель позиции в тексте.
				$poz_text++;
			}
		}

		if (strlen($slowo) > 0)
		{
			// Слово не пустое. Записать в массив найденное слово со степенью близости 10
			$slowo = StrToUpper_UTF8($slowo);
			Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo, 10, 1, $kol_slow_temp_word );
		}

        ///////////////////////////////////////////////////////////////////////////////
        //
        //printf("\n  ГЕНЕРАЦИЯ ОШИБОК В СЛОВАХ    ");
        //
        //////////////////////////////////////////////////////////////////////////////

		// Генерация ошибок в словах

		// Внесение однократных ошибок.

        ////////////////////////////////////////////////////////////////////////////
        //
        //printf("\n  ВНЕСЕНИЕ ОДНОКРАТНЫХ ОШИБОК    ");
        //
        ////////////////////////////////////////////////////////////////////////////

		// Перебор в цикле слов имеющих уровень близости = 10 и генерация ошибок
		$rez_zapros = mysql_query("SELECT * FROM temp_word WHERE code_session='$nom_session' and urov_blis=10 and  P=1 ",$rez_soed_mysql);

        ////////////////////////////////////////////////////////////////////////////
        //
        //printf("\n  Перебор в цикле слов имеющих уровень близости = 10 и генерация ошибок    ");
        //
        ////////////////////////////////////////////////////////////////////////////

		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			// Считать очередное слово c уровнем близости = 10
			$slowo = $tek_stroka[2];

			// Определить длину слова
            $dl_slowo = strlen_UTF8($slowo);

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //
            //printf("\n\n\n - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            //printf("\n\n  Очередное слово с уровенем близости = 10  %s   Длина слова = %d  \n ", $slowo, $dl_slowo);
            //printf("\n  ");
            //
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //
            //printf("\n\n  Потеря буквы в слове   \n\n");
            //
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    

			if ($dl_slowo >=2)
			{
				// Генерация ошибки - потеря буквы в слове.
				for ($i=0; $i<=$dl_slowo-1; $i++)
				{
					$slowo1 = substr_UTF8($slowo,1,$i).substr_UTF8($slowo,$i+2,$dl_slowo-$i-1);
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 1, $kol_slow_temp_word  );
				}
			}

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //
            //printf("\n\n  Замена одной буквы в слове на другую   \n\n");
            //
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    

			// Генерация ошибки - замена одной буквы в слове на другую.
            for ($i=0; $i<=$dl_slowo-1; $i++)			
			{
				for ($kod_bukw=144; $kod_bukw<=175; $kod_bukw++)
				{
					$slowo1 = substr_UTF8($slowo,1,$i).chr(208).chr($kod_bukw).substr_UTF8($slowo,$i+2,$dl_slowo-$i-1);
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );
				}
			}

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //
            //printf("\n\n  Перестановка букв в слове   \n\n");
            //
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    

			// Генерация ошибки - перестановка букв в слове
			for ($i=1; $i<=$dl_slowo-1; $i++)
			{
				$slowo1 = substr_UTF8($slowo,1,$i-1).substr_UTF8($slowo,$i+1,1).substr_UTF8($slowo,$i,1).substr_UTF8($slowo,$i+2, $dl_slowo-$i-1);   			
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word);
			}

            /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //
            //printf("\n\n  Вставка буквы до, в середине и после слова  \n\n");
            //
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    

			// Вставка буквы в середине.
			for ($i=1; $i<=$dl_slowo; $i++)
			{
				for ($kod_bukw=144; $kod_bukw<=175; $kod_bukw++)
				{
						$slowo1 = substr_UTF8($slowo,1,$i-1).chr(208).chr($kod_bukw).substr_UTF8($slowo,$i,$dl_slowo-$i+1);
						Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );
				}
			}

			// Вставка буквы справа.
			for ($kod_bukw=144; $kod_bukw<=175; $kod_bukw++)
			{
					$slowo1 = $slowo.chr(208).chr($kod_bukw);
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );
			}

			if ($dl_slowo > 3)
			{

                /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //
                //printf("\n Длина слова больше 3   :   Изменение окончания ");
                //
                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    

				// Считать последние один, два, три символа слова.
				$odn_posled_symb  = substr_UTF8( $slowo, $dl_slowo,   1);
				$dva_posled_symb  = substr_UTF8( $slowo, $dl_slowo-1, 2);
				$tri_posled_symb  = substr_UTF8( $slowo, $dl_slowo-2, 3);

                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //
                //printf("\n\n   Последний один символ = %s ", $odn_posled_symb );
                //printf("\n     Последние два символа = %s ", $dva_posled_symb );
                //printf("\n     Последние три символа = %s ", $tri_posled_symb );
                //
                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    

				// Создание падежей для существительных

				// Получить существительное без окончания
				if ( ($tri_posled_symb=="АМИ") || ($tri_posled_symb=="ЯМИ") )       $sdwig = 3;

				elseif  ( ($dva_posled_symb=="ОМ") || ($dva_posled_symb=="ЕМ") ||
					      ($dva_posled_symb=="ОЙ") || ($dva_posled_symb=="ЕЙ") ||
			              ($dva_posled_symb=="ЕВ") || ($dva_posled_symb=="ОВ") ||
				  	      ($dva_posled_symb=="ЕК") || ($dva_posled_symb=="ОК") ||
			              ($dva_posled_symb=="АМ") || ($dva_posled_symb=="ЯМ") ||
				  	      ($dva_posled_symb=="АХ") || ($dva_posled_symb=="ЯХ") ||
				  	      ($dva_posled_symb=="КИ") || ($dva_posled_symb=="КА") ||
					      ($dva_posled_symb=="КУ") || ($dva_posled_symb=="НА") ||
					      ($dva_posled_symb=="ЕН") || ($dva_posled_symb=="ЫМ") ||
					      ($dva_posled_symb=="ИМ"))   				                $sdwig = 2;

				elseif  ( ($odn_posled_symb=="И") || ($odn_posled_symb=="Ы") ||
				  	      ($odn_posled_symb=="У") || ($odn_posled_symb=="Е") ||
		  	          	  ($odn_posled_symb=="А") || ($odn_posled_symb=="Я") ||
                          ($odn_posled_symb=="Ю") || ($odn_posled_symb=="Ь")) 				                $sdwig = 1;

				else  								                                $sdwig = 0;

                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //
                //printf("\n\n   Сдвиг = %d ", $sdwig );
                //printf("\n\n   Создание падежей для существительных  \n\n");
                //
                ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    

				$nach_slowa = substr_UTF8($slowo, 1, $dl_slowo-$sdwig);

				// Вставить существительное без окончания
				$slowo1 = $nach_slowa;
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "А".
				$slowo1 = $nach_slowa."А";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "Я".
				$slowo1 = $nach_slowa."Я";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "У".
				$slowo1 = $nach_slowa."У";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "Ю".
				$slowo1 = $nach_slowa."Ю";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "Е".
				$slowo1 = $nach_slowa."Е";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ОМ".
				$slowo1 = $nach_slowa."ОМ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ЕМ".
				$slowo1 = $nach_slowa."ЕМ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ОЙ".
				$slowo1 = $nach_slowa."ОЙ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "И".
				$slowo1 = $nach_slowa."И";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "Ы".
				$slowo1 = $nach_slowa."Ы";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ЕЙ".
				$slowo1 = $nach_slowa."ЕЙ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ЕВ".
				$slowo1 = $nach_slowa."ЕВ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ОВ".
				$slowo1 = $nach_slowa."ОВ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ЕК".
				$slowo1 = $nach_slowa."ЕК";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ОК".
				$slowo1 = $nach_slowa."ОК";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "АМ".
				$slowo1 = $nach_slowa."АМ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ЯМ".
				$slowo1 = $nach_slowa."ЯМ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "АМИ".
				$slowo1 = $nach_slowa."АМИ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ЯМИ".
				$slowo1 = $nach_slowa."ЯМИ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "АХ".
				$slowo1 = $nach_slowa."АХ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ЯХ".
				$slowo1 = $nach_slowa."ЯХ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "КИ".
				$slowo1 = $nach_slowa."КИ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "КА".
				$slowo1 = $nach_slowa."КА";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "КАМИ".
				$slowo1 = $nach_slowa."КАМИ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "КЯМИ".
				$slowo1 = $nach_slowa."КЯМИ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "КУ".
				$slowo1 = $nach_slowa."КУ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "ЕН".
				$slowo1 = $nach_slowa."ЕН";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Вставить существительное с окончанием "НА".
				$slowo1 = $nach_slowa."НА";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Добавление окончания "А" (родительный и винительный падежи).
				$slowo1 = $slowo."А";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Добавление окончания "У" (дательный падеж).
				$slowo1 = $slowo."У";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );
				
				$slowo1 = $slowo."Ю";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );
				
				$slowo1 = $slowo."Ь";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Добавление окончания "ЫМ" (творительный падеж).
				$slowo1 = $slowo."ЫМ";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

				// Добавление окончания "Е" (предложный падеж).
				$slowo1 = $slowo."Е";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );


                /////////////////////////////////////////////////////////////////////////////////////////////////////////////
                //
                 
                //
                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////





				// Создание падежей для прилагательных

				if ( ($dva_posled_symb=="АЯ") || ($dva_posled_symb=="ЯЯ") ||
				     ($dva_posled_symb=="ИЙ") || ($dva_posled_symb=="ЫЙ") ||
				     ($dva_posled_symb=="ОЙ") || ($dva_posled_symb=="ЕЙ") ||
				     ($dva_posled_symb=="ИМ") || ($dva_posled_symb=="ЫМ") ||
				     ($dva_posled_symb=="ОМ") || ($dva_posled_symb=="ЕМ") ||
				     ($dva_posled_symb=="ЫХ") || ($dva_posled_symb=="ИХ") ||
				     ($dva_posled_symb=="УЮ") || ($dva_posled_symb=="ЮЮ") ||
				     ($dva_posled_symb=="ИЕ") || ($dva_posled_symb=="ЫЕ"))	            $sdwig = 2;

				elseif  ( ($tri_posled_symb=="ОГО") || ($tri_posled_symb=="ЕГО") ||
				  	      ($tri_posled_symb=="ОМУ") || ($tri_posled_symb=="ЕМУ") ||
				  	      ($tri_posled_symb=="ЫМИ") || ($tri_posled_symb=="ИМИ"))       $sdwig = 3;

				else  								                                    $sdwig = 0;


				if ($sdwig > 0)
				{
					// Получить прилагательное без окончания
					$nach_slowa = substr_UTF8($slowo, 1, $dl_slowo-$sdwig);

                    ///////////////////////////////////////////////////////////////////////////////////////////////////
                    //
                    //printf("\n\n   Создание падежей для прилагательных  \n\n");
                    //
                    ///////////////////////////////////////////////////////////////////////////////////////////////////        

					// Вставить прилагательное с окончанием "АЯ".
					$slowo1 = $nach_slowa."АЯ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ИЙ".
					$slowo1 = $nach_slowa."ИЙ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ЫЙ".
					$slowo1 = $nach_slowa."ЫЙ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ОЙ".
					$slowo1 = $nach_slowa."ОЙ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ЕЙ".
					$slowo1 = $nach_slowa."ЕЙ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ОГО".
					$slowo1 = $nach_slowa."ОГО";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ЕГО".
					$slowo1 = $nach_slowa."ЕГО";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "УЮ".
					$slowo1 = $nach_slowa."УЮ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ЮЮ".
					$slowo1 = $nach_slowa."ЮЮ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ОМУ".
					$slowo1 = $nach_slowa."ОМУ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ЕМУ".
					$slowo1 = $nach_slowa."ЕМУ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ИМ".
					$slowo1 = $nach_slowa."ИМ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ЫМ".
					$slowo1 = $nach_slowa."ЫМ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ИМ".
					$slowo1 = $nach_slowa."ИМ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ОМ".
					$slowo1 = $nach_slowa."ОМ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ЕМ".
					$slowo1 = $nach_slowa."ЕМ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ЫМИ".
					$slowo1 = $nach_slowa."ЫМИ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ИМИ".
					$slowo1 = $nach_slowa."ИМИ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ЫХ".
					$slowo1 = $nach_slowa."ЫХ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ИХ".
					$slowo1 = $nach_slowa."ИХ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ИЕ".
					$slowo1 = $nach_slowa."ИЕ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить прилагательное с окончанием "ЫЕ".
					$slowo1 = $nach_slowa."ЫЕ";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );
				}
			}

			if ($dl_slowo > 4)
			{
				// Считать последние два и четыре символа слова.
				$dva_posled_symb  = substr_UTF8( $slowo, $dl_slowo-2, 2);
				$che_posled_symb  = substr_UTF8( $slowo, $dl_slowo-3, 4);

                ///////////////////////////////////////////////////////////////////////////////////////////////////
                //
                //printf("\n\n   Длина слова больше 4  \n\n");
                //
                ///////////////////////////////////////////////////////////////////////////////////////////////////        

				if ( ($che_posled_symb=="КАМИ") || ($che_posled_symb=="КЯМИ") )
				{
					$sdwig = 4;
					$nach_slowa = substr_UTF8($slowo, 1, $dl_slowo-$sdwig);

                    ///////////////////////////////////////////////////////////////////////////////////////////////////
                    //
                    //printf("\n\n   Обработка слов с окончанием КАМИ  КЯМИ  \n\n");
                    //
                    ///////////////////////////////////////////////////////////////////////////////////////////////////        

					// Вставить существительное с окончанием "ОК".
					$slowo1 = $nach_slowa."ОК";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );

					// Вставить существительное с окончанием "ЕК".
					$slowo1 = $nach_slowa."ЕК";
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 9, 0, $kol_slow_temp_word );
				}
			}
		}

		// Внесение двухкратных ошибок.

        ////////////////////////////////////////////////////////////////////////////
        //
        //printf("\n\n  ВНЕСЕНИЕ ДВУХКРАТНЫХ ОШИБОК  \n\n ");
        //
        ////////////////////////////////////////////////////////////////////////////

		// Перебор в цикле слов имеющих уровень близости = 9 и генерация ошибок
		$rez_zapros = mysql_query("SELECT * FROM temp_word WHERE code_session='$nom_session' and urov_blis=9 and P=1 ",$rez_soed_mysql);

		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			// Считать очередное слово c текущим уровнем близости
			$slowo = $tek_stroka[2];

			// Определить длину слова
			$dl_slowo = strlen_UTF8($slowo);

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //
            //printf("\n\n\n - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            //printf("\n\n  Очередное слово с уровенем близости = 9  %s   Длина слова = %d  \n ", $slowo, $dl_slowo);
            //printf("\n  ");
            //
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

			if ($dl_slowo >=2)
			{
				// Генерация ошибки - потеря буквы в слове.
				for ($i=0; $i<$dl_slowo; $i++)
				{
					$slowo1 = substr_UTF8($slowo,1,$i).substr_UTF8($slowo,$i+2,$dl_slowo-$i-1);
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 8, 1, $kol_slow_temp_word );
				}
			}
		}

        ////////////////////////////////////////////////////////////////////////////
        //
        //printf("\n\n  ВНЕСЕНИЕ ТРЁХКРАТНОЙ ОШИБКИ  \n\n ");
        //
        ////////////////////////////////////////////////////////////////////////////

		// Внесение трехкратных ошибок.

		// Перебор в цикле слов имеющих уровень близости = 8 и генерация ошибок
		$rez_zapros = mysql_query("SELECT * FROM temp_word WHERE code_session='$nom_session' and urov_blis=8 and P=1 ",$rez_soed_mysql);

		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			// Считать очередное слово c текущим уровнем близости
			$slowo = $tek_stroka[2];

			// Определить длину слова
			$dl_slowo = strlen_UTF8($slowo);

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //
            //printf("\n\n\n - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            //printf("\n\n  Очередное слово с уровенем близости = 8  %s   Длина слова = %d  \n ", $slowo, $dl_slowo);
            //printf("\n  ");
            //
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

			if ($dl_slowo >=2)
			{
				// Генерация ошибки - потеря буквы в слове.
				for ($i=0; $i<$dl_slowo; $i++)
				{
					$slowo1 = substr_UTF8($slowo,1,$i).substr_UTF8($slowo,$i+2,$dl_slowo-$i-1);
					Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 7, 1, $kol_slow_temp_word );
				}
			}

			// Считать последний символ слова.
			$posled_symb  = substr_UTF8( $slowo, $dl_slowo, 1);

			if (($posled_symb=="И") || ($posled_symb=="Ы") || ($posled_symb=="У") || ($posled_symb=="Е"))
			{
                ///////////////////////////////////////////////////////////////////////////////////////////////////
                //
                //printf("\n\n   Обработка слов с окончанием И Ы У Е \n\n");
                //
                ///////////////////////////////////////////////////////////////////////////////////////////////////        

				// Буквы "И","Ы","У","Е" стоящие на конце слова заменить на "А".
				$slowo1 = substr_UTF8($slowo,1,$dl_slowo-1)."А";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 7, 1, $kol_slow_temp_word );
			}
		}


        ////////////////////////////////////////////////////////////////////////////
        //
        //printf("\n\n  ВНЕСЕНИЕ ЧЕТЫРЁХКРАТНОЙ ОШИБКИ  \n\n ");
        //
        ////////////////////////////////////////////////////////////////////////////

		// Внесение четырехкратных ошибок.

		// Перебор в цикле слов имеющих уровень близости = 7 и генерация ошибок
		$rez_zapros = mysql_query("SELECT * FROM temp_word WHERE code_session='$nom_session' and urov_blis=7 and P=1 ",$rez_soed_mysql);

		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			// Считать очередное слово c текущим уровнем близости
			$slowo = $tek_stroka[2];

			// Определить длину слова
			$dl_slowo = strlen_UTF8($slowo);

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //
            //printf("\n\n\n - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - ");
            //printf("\n\n  Очередное слово с уровенем близости = 7  %s   Длина слова = %d  \n ", $slowo, $dl_slowo);
            //printf("\n  ");
            //
            ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

			// Считать последний символ слова.
			$posled_symb  = substr_UTF8( $slowo, $dl_slowo, 1);

			if (($posled_symb=="И") || ($posled_symb=="Ы") || ($posled_symb=="У") || ($posled_symb=="Е"))
			{
                ///////////////////////////////////////////////////////////////////////////////////////////////////
                //
                //printf("\n\n   Обработка слов с окончанием И Ы У Е \n\n");
                //
                ///////////////////////////////////////////////////////////////////////////////////////////////////        

				// Буквы "И","Ы","У","Е" стоящие на конце слова заменить на "А".
				$slowo1 = substr_UTF8($slowo,1,$dl_slowo-1)."А";
				Wstawka_slowa_temp_word( $rez_soed_mysql, $nom_session, $slowo1, 6, 1, $kol_slow_temp_word);
			}
		}

		// Удаление из таблицы "temp_rez_seek" строк  со значением в колонке "code_session" равным уникальному идентификатору текущей сессии.
		$rez_zapros = mysql_query("DELETE FROM temp_rez_seek WHERE code_session='$nom_session'",$rez_soed_mysql);

//		printf("\n Кол. комбинаций слов  %d ",$kol_slow_temp_word);

		// Заполнение таблицы "temp_rez_seek".
		$rez_zapros = mysql_query("SELECT * FROM temp_word WHERE code_session='$nom_session' ORDER BY ID ",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
//			printf("\n %d  %s  %d  %d ", $tek_stroka[3], $tek_stroka[2], $tek_stroka[3], $tek_stroka[4]);

			// Взять очередное слово из массива полученных слов.
			$slowo = $tek_stroka[2];
			$blis  = $tek_stroka[3];

			// Выбрать из таблицы  "word_index" строки со словом "slowo".
			$rez_zapros1 = mysql_query("SELECT IDobyavleniya FROM word_index WHERE text='$slowo'  ",$rez_soed_mysql);

			while ($tek_stroka1 = mysql_fetch_row($rez_zapros1))
    		{
				// Считать идентификационный код очередного объявления содержащего слово "slowo".
				$id_ob1 = $tek_stroka1[0];

				// Определить количество объявлений с идентификационным кодом "id_ob1" в таблице "temp_rez_seek".
				$kol_ob2=0;
				$rez_zapros2 = mysql_query("SELECT count(*) FROM temp_rez_seek WHERE code_session='$nom_session' and IDobyavleniya='$id_ob1' ",$rez_soed_mysql);
				while ($tek_stroka2 = mysql_fetch_row($rez_zapros2))
    			{
					$kol_ob2 = $tek_stroka2[0];
					break;
				}

				if ($kol_ob2 > 0)
				{
					// Таблица "temp_rez_seek" уже содержит строку для объявления с идентификационным кодом "id_ob1".
					// Нарастить в значение записанное в поле "BLIS" на величину степени близости "blis".
					$rez_zapros3 = mysql_query("UPDATE temp_rez_seek SET BLIS=BLIS+'$blis' WHERE code_session='$nom_session' and IDobyavleniya='$id_ob1' ",$rez_soed_mysql);
//					printf("\n В таблице temp_rez_seek нарастить значение поля BLIS для объявления с идент.объявления %d   добавочная степень близ. %d   ",$id_ob1, $blis);
				}
				else
				{
					// В таблице "temp_rez_seek" нет строки для объявления с идентификационным кодом "id_ob1".
					// Создать ее и записать в поле "BLIS" значение степени близости "blis".
					$rez_zapros3 = mysql_query("INSERT INTO temp_rez_seek VALUES (NULL,'$nom_session','$id_ob1','$blis')",$rez_soed_mysql);
//					printf("\n В таблицу temp_rez_seek вставить строку с идент.объявления %d   степень близ. %d   ",$id_ob1, $blis);
				}
			}
		}

		// Выдать на экран таблицу temp_rez_seek
		printf("<table border=1> ");

		printf("<tr>");
		printf("\n  <th> № </th> <th> Похожесть </th>  <th> Код </th> <th> Дата и время создания </th> <th> Текст объявления </th> ");
		printf("</tr>");

		$rez_zapros = mysql_query("SELECT temp_rez_seek.BLIS, temp_rez_seek.IDobyavleniya, obyavleniya.data_time, obyavleniya.text, obyavleniya.IDrazdel FROM temp_rez_seek,obyavleniya  WHERE (temp_rez_seek.code_session='$nom_session') and (temp_rez_seek.IDobyavleniya = obyavleniya.ID) ORDER BY temp_rez_seek.BLIS DESC ",$rez_soed_mysql);
		$nomer_ob=1;
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
		{
			printf("<tr>");
 			printf("\n  <th> %4d </th> <th> %d </th> <th> %d </th> <th> %s </th>  <td> %s </td> ",$nomer_ob, $tek_stroka[0], $tek_stroka[1], $tek_stroka[2], $tek_stroka[3]);
	        printf('<td> <A href="%s?id=3&id_ob=%d&priz_zagol=%d&id_razdel=%d"> Перейти</A> </td> ',$PHP_SELF, $tek_stroka[1], 1, $tek_stroka[4]);
 			printf("</tr>");
			$nomer_ob++;
		}

		printf("</table>");

		// Удаление из таблицы "temp_word" строк со значением в колонке "code_session" равным уникальному идентификатору текущей сессии.
		$rez_zapros = mysql_query("DELETE FROM temp_word WHERE code_session='$nom_session'",$rez_soed_mysql);

		// Удаление из таблицы "temp_rez_seek" строк  со значением в колонке "code_session" равным уникальному идентификатору текущей сессии.
		$rez_zapros = mysql_query("DELETE FROM temp_rez_seek WHERE code_session='$nom_session'",$rez_soed_mysql);

		// Создать текст письма направляемого пользователям службы сообщений.
		$tema    = "Задан поиск по словам";
		$message = "\n Задан поиск по словам : <<".$text_poisk." >> с IP-адреса ".$HTTP_X_FORWARDED_FOR."\n Запрос выполнен успешно найдено ".sprintf("%d",$nomer_ob-1)." объявлений. ";

		// Отправка письма пользователю службы сообщений с id = 3
		$rez_zapros1 = mysql_query("INSERT INTO mail VALUES (NULL,5,3,timestamp(curdate(),curtime()),'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0,'$tema','$message')",$rez_soed_mysql);

		// Выдать на экран кнопку "Продолжение".
		printf('<H3>	 	<A href="%s?id=0"> Продолжение </A>   </H3>',$PHP_SELF);

		// Исключить появление списка разделов.
		$id=1000000;
	}


	if ($submit10)
	{
		// Предыдущим экраном был экран ввода отзыва. Там была нажата кнопка "Отправить отзыв".
		//
		// Записать отзыв в таблицу "otzyw" базы данных и вернуться к предыдущему экрану.
		$rez_zapros = mysql_query("INSERT INTO otzyw VALUES (NULL,'$id_ob','$otzyw_text',timestamp(curdate(),curtime()),'$HTTP_X_FORWARDED_FOR')",$rez_soed_mysql);

		// Переход к экрану выдачи объявления.
		$id=3;
	}

	if ($ud1 == 1)
	{
		// Форма для ввода пароля на управление объявлением.
		?>
		<form method="post" action="<?php echo $PHP_SELF?>">
		  			   <input type=hidden name="id_ob" value="<?php echo $id_ob?>">
		  			   <input type=hidden name="ud1"   value=2 		     ">

	Введи пароль для изменения и удаления объявления : <input type="password"  name="parol" value=""><br>



                					   <input type="Submit" name="submit0" value="Ввод">   <input type="Reset" name="Reset" value="Очистка">
		</form>
		<?php

		// Исключить появление списка разделов.
		$id=1000000;
	}

	if ($ud1 == 2)
	{
		if ( HostBlackList($HTTP_X_FORWARDED_FOR,$rez_soed_mysql)==0)
		{
			// IP-адрес текущего компьютера отсуствует в черном списке.

			// Сравнение указанного пароля с паролем этого объявления.
			$rez_zapros = mysql_query("SELECT * FROM obyavleniya WHERE ID=$id_ob",$rez_soed_mysql);
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
   			{
				$parol_ob = $tek_stroka[4];
			}

			if ($parol == $parol_ob)
			{
				// Введеный пароль совпадает с паролем этого объявления.
				// Удалить это объявление
				//
				// Выполнить запрос извлекающий код раздела в котором расположено удаляемое объявление, а так же текст объявления и его тему.
				$rez_zapros = mysql_query("SELECT * FROM obyavleniya WHERE ID=$id_ob",$rez_soed_mysql);
				$id_razdel = -1;
				while ($tek_stroka = mysql_fetch_row($rez_zapros))
    				{
					$id_razdel = $tek_stroka[1];
					$short_message1 = $tek_stroka[2];
					$message1 = $tek_stroka[3];
				}

				// Удалить объявление с указанным идентификационным кодом.
				$rez_zapros = mysql_query("DELETE FROM obyavleniya WHERE ID='$id_ob' ",$rez_soed_mysql);

				// Удалить записи из таблицы "telefon" со значением поля "IDobyavleniya"
				// равным идентификатору удаляемого объявления.
				$rez_zapros = mysql_query("DELETE FROM telefon WHERE IDobyavleniya='$id_ob' ",$rez_soed_mysql);

				// Удалить записи из таблицы "otzyw" со значением поля "IDobyavleniya"
				// равным идентификатору удаляемого объявления.
				$rez_zapros = mysql_query("DELETE FROM otzyw WHERE IDobyavleniya='$id_ob' ",$rez_soed_mysql);

				// Удалить записи из таблицы "word_index" со значением поля "IDobyavleniya"
				// равным идентификатору удаляемого объявления.
				$rez_zapros = mysql_query("DELETE FROM word_index WHERE IDobyavleniya='$id_ob' ",$rez_soed_mysql);


                // Удаление файлов с картинками соответствующих данному объявлению
		        $rez_zapros = mysql_query("SELECT * FROM ris WHERE IDobyavleniya='$id_ob'  ",$rez_soed_mysql);
		        while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	        {
                    // Прочитать из таблицы "ris" очередной файл с картинкой
			        $file_name = $tek_stroka[1];

                    // Удалить очередной файл с картинкой			        
			        $rez_ud = unlink($file_name);
			        
			        if ($rez_ud == true)
			        {
			            printf("<br> файл %s удалён ", $file_name);    
			        }
			        else
			        {
			            printf("<br> файл %s не удалён ", $file_name);    
			        }
		        }
                
                // Удалить из таблицы "ris" все строки по текущему удаляемому объявлению
				$rez_zapros = mysql_query("DELETE FROM ris WHERE IDobyavleniya='$id_ob' ",$rez_soed_mysql);

				// Выполнить запрос извлекающий наименование раздела в котором расположено удаляемое объявление.
				$rez_zapros = mysql_query("SELECT * FROM razdel WHERE ID=$id_razdel",$rez_soed_mysql);
				$name_razdel="";
				while ($tek_stroka = mysql_fetch_row($rez_zapros))
    				{
					$name_razdel = $tek_stroka[1];
				}

				// Выбрать из таблицы user_razdel пользователей службы сообщений которым надо отослать сообщение о удалении объявления
				// и отослать текст этого объявления.
				//
				$rez_zapros = mysql_query("SELECT IDuser FROM user_razdel WHERE IDrazdel='$id_razdel' and udal=1 ",$rez_soed_mysql);

				// Создать текст письма направляемого пользователям службы сообщений.
				$tema = "Удал.объяв.разд. ".$name_razdel;
				$message = "Удалено объявление из раздела ".$name_razdel."\n     Тема объявления :  ".$short_message1."\n    Текст объявления :  ".$message1;

				// Перебор в цикле всех адресатов которым надо направить это письмо
				while ($tek_stroka = mysql_fetch_row($rez_zapros))
    				{
					// Взять очередного адресата
					$id_priemnik = $tek_stroka[0];

					// Отправка письма
					$rez_zapros1 = mysql_query("INSERT INTO mail VALUES (NULL,5,'$id_priemnik',timestamp(curdate(),curtime()),'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0,'$tema','$message')",$rez_soed_mysql);
				}

				// Следующим экраном установить экрану № 2 'Просмотр объявлений раздела'.
				$id=2;
			}
			else
			{
				// Введенный пароль не совпадает с паролем этого объявления.
				// Выдать на экран сообщение об ошибке.
				//
				printf("\n\n\n\n\n <H2> 				Задан неправильный пароль при удалении объявления !!!   </H2>\n\n\n\n\n");
				printf('<H3>	  					<A href="%s?id=3&id_ob=%d"> Перейти к просмотру объявления </A>   </H3>',$PHP_SELF,$id_ob);

				// Исключить появление списка разделов.
				$id=1000000;
			}
		}
		else
		{
			// IP-адрес текущего компьютера найден в черном списке.

			printf('<H3> 		Не выполнено  !!!  </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 												  </H3>');
			printf('<H3> 			 			<A href="%s?id=0"> Продожить </A>   </H3>',$PHP_SELF);

			// Исключить появление списка разделов.
			$id=1000000;
		}
	}


	if ($ud2 == 1)
	{
		// Удаление раздела.

		// Подсчет количества объявлений в разделе предназначенном для удаления.
		$rez_zapros = mysql_query("SELECT count(*) FROM obyavleniya WHERE IDrazdel=$id_razdel ",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
			$kol_ob_razdel = $tek_stroka[0];
		}

		if ($kol_ob_razdel > 0)
		{
			// Раздел не пуст. Его удаление невозможно.
			printf("\n <H2> 					Раздел не пуст. Его удаление невозможно !!!		</H2>");

			// Следующим экраном установить экрану № 2 'Просмотр объявлений раздела'.
			$id=2;
		}
		else
		{
			// Раздел пуст. Можно его удалить.
			$rez_zapros = mysql_query("DELETE FROM razdel WHERE ID=$id_razdel ",$rez_soed_mysql);

			// Следующим экраном установить экран № 0 'Список разделов доски объявлений'.
			$id=0;
		}
	}

	if ($chag == 1)
	{
		// Шагнуть на одно объявление назад
		$rez_zapros = mysql_query("SELECT * FROM obyavleniya WHERE IDrazdel=$id_razdel and ID<$id_ob ORDER BY ID DESC LIMIT 1 ",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			$id_ob = $tek_stroka[0];
		}
	}

	if ($chag == 2)
	{
		// Шагнуть на одно объявление вперед
		$rez_zapros = mysql_query("SELECT * FROM obyavleniya WHERE IDrazdel=$id_razdel and ID>$id_ob ORDER BY ID LIMIT 1 ",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			$id_ob = $tek_stroka[0];
		}
	}

	if ($id == 0)
 	{
		// Выдать экран № 0.

		// Выполнить запрос извлекающий 7 самых свежих объявлений.
		printf("<H1>	Самые свежие  </H1>");

		// Выполнить запрос извлекающий 7 самых свежих объявлений отсортированные по убыванию номера объявления.
		$rez_zapros = mysql_query("SELECT * FROM obyavleniya ORDER BY ID DESC LIMIT 7 ",$rez_soed_mysql);

		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
			if ($tek_stroka[6] > 0)
			{
				// Для данного объявления есть цена.
				// Считать единицу измерения.
				$ed_izm1 = $tek_stroka[7];
				$rez_zapros1 = mysql_query("SELECT * FROM ed_izm WHERE ID='$ed_izm1' ",$rez_soed_mysql);
				$name_ed_izm1 = "";

				while ($tek_stroka1 = mysql_fetch_row($rez_zapros1))
    			{
					$name_ed_izm1 = $tek_stroka1[1];
				}

				// Создать добавочное сообщение о цене и единице измерения.
				$dobavka = sprintf(" Цена %10.2f руб. за %s ",$tek_stroka[6],$name_ed_izm1);
			}
			else
			{
				// Для данного объявления нет цены. Создать пустое добавочное сообщение.
				$dobavka = " ";
			}

			printf('<H2>	<A href="%s?id=3&id_ob=%d&priz_zagol=%d"> %s  %s  %s </A>	 </H2>',$PHP_SELF,$tek_stroka[0],1,$tek_stroka[5],$tek_stroka[2],$dobavka);
		}

        //////////////////////////////////////////////////////////////////////////////////////////////////////////
        //

		// Поле ввода слов для поиска.
		?>
		<form method="post" action="<?php echo $PHP_SELF?>">
  		Найдется все : <input type="Text" name="text_poisk" size="60" value="">  <input type="Submit" name="submit9" value="Найти"> <input type="Reset" name="Reset" value="Очистка">
		</form>
		<form method="post" action="<?php echo $PHP_SELF?>">
     Где встречается телефон : <input type="Text" name="telefon" value="">  <input type="Submit" name="submit8" value="Найти">  <input type="Reset" name="Reset" value="Очистка"> 
		</form>
		<?php

        //
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////

		// Выполнить запрос извлекающий список разделов доски объявлений.
		$rez_zapros = mysql_query("SELECT * FROM razdel ORDER BY ID",$rez_soed_mysql);

		// Выдать список разделов доски объявления.
		printf("<H1>	Разделы  </H1>");
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
			printf('<H1>	  <A href="%s?id=2&id_razdel=%d"> %s </A>   </H1>',$PHP_SELF,$tek_stroka[0],$tek_stroka[1]);
    		}

//		// Выдать пункт для поиска объявления по номеру телефона.
//		printf('<H1>	  <A href="%s?id=9"> ПОИСК ОБЪЯВЛЕНИЯ ПО НОМЕРУ ТЕЛЕФОНУ   </A>   </H1>',$PHP_SELF);

		// Выдать пункт для выхода.
		printf('<H1>	  <A href= %s/index.html> ВЫХОД  </A>   </H1>',$addr_ret);

		printf("\n\n\n\n");
		printf('<H1>	<A href="%s?id=7"> Создание нового раздела </A> </H1>  ',$PHP_SELF);
		printf('<H1>	<A href="%s?id=8"> Автоматическая отсылка сообщения при добавлении, изменении и удалении объявления в разделе. </A> </H1>  ',$PHP_SELF);
	}

	if ($id == 1)
   	{
		// Выдать экран № 1 (Подача нового объявления в указанный раздел).

		$rez_zapros = mysql_query("SELECT * FROM razdel WHERE ID=$id_razdel",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
   		{
			printf("\n");
			$name_razdel = $tek_stroka[1];
			printf("\n\n <H1> 				 	Подача нового объявления в раздел : %s 			</H1>",$name_razdel);
		}

		// Создание HTML кода выполняющего выбор из справочника единиц измерения.
		$HTMLtext_wyb_ed_izm = FieldToList( "ed_izm", "ID", "name", "id_ed_izm", 1, $rez_soed_mysql );

		// Форма для ввода краткого содержания объявления, текста объявления, цифр на картинках.
		?>
		<form method="post" action="<?php echo $PHP_SELF?>" enctype="multipart/form-data" >
			 			  	  <input type=hidden name="name_razdel" value="<?php echo $name_razdel?>">
			  			  	  <input type=hidden name="id_razdel" value="<?php echo $id_razdel?>">
			  Краткое содержание объявления : <input type="Text" name="short_message" value=""><br>
			Пароль для изменения и удаления : <input type="password" name="parol" value=""><br>
		<textarea name="message" rows="20" cols="130"></textarea><br>
					   Цена : <input type="Text" 	 name="zena" 					size="10"  maxlength="10" 	value="" > руб. за <?php printf(" %s ",$HTMLtext_wyb_ed_izm) ?> <br>
                Выбери файлы с изображениями :  <input type="file" name="fileUpload[]" multiple > <br>
	                       			<input type="Submit" name="submit1" value="Подать объявление">    <input type="Reset" name="Reset" value="Очистка">
		</form>
		<?php
	}


	if ($id == 2)
   	{
		// Выдать экран № 2 (Объявления указанного раздела отсортированные по номеру объявления по убыванию.

		// Выполнить запрос извлекающий наименование раздела с указанным номером.
		$rez_zapros = mysql_query("SELECT * FROM razdel WHERE ID=$id_razdel",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
			printf("  <H2>  				   		%s        </H2> ", $tek_stroka[1] );
		}

		// Выполнить запрос извлекающий все объявления по выбранному разделу отсортированные по убыванию номера объявления.
		$rez_zapros = mysql_query("SELECT * FROM obyavleniya WHERE IDrazdel='$id_razdel' ORDER BY ID DESC ",$rez_soed_mysql);

		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
			if ($tek_stroka[6] > 0)
			{
				// Для данного объявления есть цена.
				// Считать единицу измерения.
				$ed_izm1 = $tek_stroka[7];
				$rez_zapros1 = mysql_query("SELECT * FROM ed_izm WHERE ID='$ed_izm1' ",$rez_soed_mysql);
				$name_ed_izm1 = "";

				while ($tek_stroka1 = mysql_fetch_row($rez_zapros1))
    				{
					$name_ed_izm1 = $tek_stroka1[1];
				}

				// Создать добавочное сообщение о цене и единице измерения.
				$dobavka = sprintf(" Цена %10.2f руб. за %s ",$tek_stroka[6],$name_ed_izm1);
			}
			else
			{
				// Для данного объявления нет цены. Создать пустое добавочное сообщение.
				$dobavka = " ";
			}

			printf('<H3>	<A href="%s?id=3&id_ob=%d&priz_zagol=%d""> %s  %s  %s </A>	 </H3>',$PHP_SELF,$tek_stroka[0],0,$tek_stroka[5],$tek_stroka[2],$dobavka);
		}

		// Выдать на экран кнопки "Переход к выбору раздела","Подать новое объявление".
		printf("\n\n	<H2>                            ");
		printf('		<A href="%s?id=0"		> Выход из раздела</A>',$PHP_SELF );
		printf('		<A href="%s?id=1&id_razdel=%d"	> Создать новое объявление  </A>',$PHP_SELF, $id_razdel);
		printf('		<A href="%s?ud2=1&id_razdel=%d" > Удаление раздела</A>',$PHP_SELF, $id_razdel);
		printf("	</H2>\n\n\n");
	}

	if ($id == 3)
   	{
		// Выдать экран № 3 (Выдать полный текст выбранного объявления).
		// Выполнить запрос извлекающий полный текст объявления с идентификационым кодом $id_ob
		$short_message = " ";
		$message = " ";
		$rez_zapros = mysql_query("SELECT * FROM obyavleniya WHERE ID='$id_ob' ",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
		{
			$id_razdel = $tek_stroka[1];
			$short_message = $tek_stroka[2];
			$message = $tek_stroka[3];
			printf("\n<H3> 			%s %s </H3> ", $tek_stroka[5], $short_message);
			printf("\n<H3>");
			print_string_utf8($message, 80);
			printf("\n</H3>");
			printf("\n\n\n");
		}

		// Получить наименование раздела по его коду.
		$rez_zapros = mysql_query("SELECT * FROM razdel WHERE ID='$id_razdel' ",$rez_soed_mysql);
		$name_razdel = " ";
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			$name_razdel = $tek_stroka[1];
		}

        // Выдать все рисунки относящиеся к этому объявлению
		$rez_zapros = mysql_query("SELECT * FROM ris WHERE IDobyavleniya='$id_ob'  ",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	{
			$file_name = $tek_stroka[1];
			printf("<br><br>");			
			printf("<img src='%s'  alt='%s'>", $file_name, $file_name);
			printf("<br>");			
		}

		// Выдать кнопки : Возврат к просмотру списка объявлений раздела, Удаление объявления, Редактирование объявления .
		printf("\n\n	<H1>                            ");

		if ($priz_zagol == 1)
		{
			printf('<H3><A href="%s?id=0"> Возврат к заголовку </A>    </H3>',$PHP_SELF);
		}
		else
		{
		    printf("<H3>");
			printf('   <A href="%s?id=2&id_razdel=%d"> Возврат к разделу %s</A>   ',$PHP_SELF, $id_razdel, $name_razdel );
			printf('   <A href="%s?ud1=1&id_ob=%d"> Удалить объявление</A>',$PHP_SELF, $id_ob);
			printf('   <A href="%s?id=4&id_ob=%d"> Редактировать объявление</A>   ',$PHP_SELF, $id_ob );
			printf("\n\n");
			printf('  <A href="%s?id=3&id_razdel=%d&id_ob=%d&chag=1">  <-- Предыдущее</A>  ',$PHP_SELF, $id_razdel,$id_ob);
			printf('  <A href="%s?id=3&id_razdel=%d&id_ob=%d&chag=2"> Следующее --> </A>  ',$PHP_SELF, $id_razdel,$id_ob );
		   	printf("</H3>");
		}

		printf("\n\n	</H1>                            ");

		// Создать текст письма направляемого пользователям службы сообщений.
		$tema = "Прочит.объяв.разд. ".$name_razdel;
		$message = "Прочитано объявление из раздела ".$name_razdel."\n     Тема объявления :  ".$short_message."\n    Текст объявления :  ".$message."\n\n    PHP_SELF= ".$PHP_SELF."\n    HTTP_HOST= ".$HTTP_HOST."\n    HTTP_X_FORWARDED_FOR= ".$HTTP_X_FORWARDED_FOR;

		// Выбрать из таблицы user_razdel пользователей службы сообщений которым надо отослать сообщение о прочтении объявления
		// и отослать текст этого объявления.
		$rez_zapros = mysql_query("SELECT IDuser FROM user_razdel WHERE IDrazdel='$id_razdel' and chtenie=1 ",$rez_soed_mysql);

		// Перебор в цикле всех адресатов которым надо направить это письмо
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
		{
			// Взять очередного адресата
			$id_priemnik = $tek_stroka[0];

			// Отправка письма
			$rez_zapros1 = mysql_query("INSERT INTO mail VALUES (NULL,5,'$id_priemnik',timestamp(curdate(),curtime()),'0000-00-00 00:00:00','0000-00-00 00:00:00',0,0,'$tema','$message')",$rez_soed_mysql);
		}

		// Подсчитать количество отзывов на данное объявление.
		$kol_otzyw=0;
		$rez_zapros = mysql_query("SELECT count(*) FROM otzyw WHERE IDobyavleniya='$id_ob'",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
		{
			$kol_otzyw=$tek_stroka[0];
			break;
		}

		if ($kol_otzyw > 0)
		{
			// На данное объявление есть отзывы.

			// Выбрать все отзывы на это объявление.
			$rez_zapros = mysql_query("SELECT * FROM otzyw WHERE IDobyavleniya='$id_ob' ORDER BY ID DESC",$rez_soed_mysql);

			// Выдать все отзывы на страницу.
			printf("<H1>");
			printf("<table border=1> ");
			printf("<tr>");
			printf("\n	<th> Дата и время </th> <td> IP адрес автора </td> <th>  Отзыв </th>");
			printf("</tr>");

			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				printf("<tr>");
				printf("\n	<th> %s </th> <td> %s </td> <th> %s </th>", $tek_stroka[3], $tek_stroka[4], $tek_stroka[2] );
				printf("</tr>");
			}

			printf("</table>");
			printf("</H1>");
		}

		// Выдать на экран поле для ввода нового отзыва.
		printf("\n\n\n\n\n					НАПИШИ ОТЗЫВ НА ОБЪЯВЛЕНИЕ ");
		?>
		<form method="post" action="<?php echo $PHP_SELF?>">
		<input type=hidden name="id_ob" value="<?php echo $id_ob?>">
		<textarea name="otzyw_text" rows="20" cols="130"></textarea><br>

	                       			<input type="Submit" name="submit10" value="Отправить отзыв">    <input type="Reset" name="Reset" value="Очистка">
		</form>
		<?php
	}



	if ($id == 4)
   	{
		// Форма для ввода пароля на управление объявлением.
		?>
		<form method="post" action="<?php echo $PHP_SELF?>">
		  			   <input type=hidden name="id_ob" value="<?php echo $id_ob?>">
		  			   <input type=hidden name="id"    value=5 		     ">

	Введи пароль для изменения и удаления объявления : <input type="password"  name="parol" value=""><br>



	               					   <input type="Submit" name="submit0" value="Ввод">   <input type="Reset" name="Reset" value="Очистка">
		</form>
		<?php
	}


	if ($id == 5)
   	{
		// Сравнение указанного пароля с паролем этого объявления.
		printf("\n  Введен пароль %s          Код объявления %s     ",$parol, $id_ob );

		$rez_zapros = mysql_query("SELECT * FROM obyavleniya WHERE ID=$id_ob",$rez_soed_mysql);
		while ($tek_stroka = mysql_fetch_row($rez_zapros))
    		{
			$parol_ob = $tek_stroka[4];
		}

		if ($parol == $parol_ob)
		{
			// Выдать экран № 5 (Редактирование выбранного объявления.

			// Выполнить запрос извлекающий полный текст объявления с идентификационым кодом $id_ob
			$rez_zapros = mysql_query("SELECT * FROM obyavleniya WHERE ID=$id_ob",$rez_soed_mysql);
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				$short_message1 = $tek_stroka[2];
				$parol1		= $tek_stroka[4];
				$message1 	= $tek_stroka[3];
				$zena1		= sprintf("%10.2f   ", $tek_stroka[6]);
				$ed_izm1	= $tek_stroka[7];
			}

			// Создание HTML кода выполняющего выбор из справочника единиц измерения.
			$HTMLtext_wyb_ed_izm = FieldToList( "ed_izm", "ID", "name", "wyb_id_ed_izm", $ed_izm1, $rez_soed_mysql );

			// Форма для редактирования объявления.
			?>
	        <form method="post" action="<?php echo $PHP_SELF?>" enctype="multipart/form-data" >
				  			  <input type=hidden 	 name="id_ob" value="<?php echo $id_ob ?>	size="40" maxlength="99" ">
  Краткое содержание объявления : <input type="Text" 	 name="short_message" 				size="80"  maxlength="127"    	value="<?php echo $short_message1 ?>" >	<br>
Пароль для изменения и удаления : <input type="password" name="parol" 	  							    	value="<?php echo $parol1 	  ?>" >	<br>
 	       Текст объявления	: <textarea              name="message"                                 rows="20"  cols="130"  	><?php echo $message1	  ?> </textarea><br>
                           Цена : <input type="Text" 	 name="zena" 					size="10"  maxlength="10" 	value="<?php echo $zena1	  ?>" > руб. за <?php printf(" %s ",$HTMLtext_wyb_ed_izm) ?> <br>
           Выбери файлы с изображениями : <input type="file" name="fileUpload[]" multiple > <br>
	                       				  <input type="Submit" name="submit3" value="Сохранить объявление">    <input type="Submit" name="submit4" value="Оставить без изменения">    <input type="Reset" name="Reset" value="Очистка" >
			</form>
			<?php

            // Выдать все рисунки относящиеся к этому объявлению
		    $rez_zapros = mysql_query("SELECT * FROM ris WHERE IDobyavleniya='$id_ob'  ",$rez_soed_mysql);
		    while ($tek_stroka = mysql_fetch_row($rez_zapros))
    	    {
			    $file_name = $tek_stroka[1];
			    printf("<br>");			

                //  !!! Переписать ссылку
                printf('<A href="%s?id=10&name_file=%s&id_ob=%d&parol=%s"> Удалить картинку</A> ', $PHP_SELF, urlencode($file_name), $id_ob, $parol);
			    printf("<img src='%s'  alt='%s'>", $file_name, $file_name);
		    }
	      }
	      else
	      {
			// Введенный пароль не совпадает с паролем этого объявления.
			// Выдать на экран сообщение об ошибке.
			//
			printf("\n\n\n\n\n <H2> 				Задан неправильный пароль для редактирования объявления !!!   </H2>\n\n\n\n\n");
			printf('<H2>	  					<A href="%s?id=3&id_ob=%d"> Перейти к просмотру объявления </A>   </H2>',$PHP_SELF,$id_ob);
	      }
	}


	if ($id == 7)
 	{
		// Выдать экран № 7 (Создание нового раздела).
		// Форма для ввода наименования нового раздела.
		?>
		<form method="post" action="<?php echo $PHP_SELF?>">

			      Название нового раздела : <input type="Text" name="name_razdel" value=""><br>
					  		<input type="Submit" name="submit2" value="Создать раздел">    <input type="Reset" name="Reset" value="Очистка">
		</form>
		<?php
	}



	if ($id == 8)
   	{
		// Выдать экран № 8. Автоматическая отсылка сообщения о создании, изменении или удалении объявления.
		// Форма для ввода имени пользователя, пароля, раздела доски объявлений.
		?>
		<form method="post" action="<?php echo $PHP_SELF?>">

  Логин пользователя службы сообщений которому придут уведомления о действиях с объявлениями  : <input type="Text" name="login" value=""><br>
  Пароль пользователя службы сообщений которому придут уведомления о действиях с объявлениями : <input type="password" name="parol" value=""><br>
			<?php
			$rez_zapros = mysql_query("SELECT * FROM razdel ORDER BY name ",$rez_soed_mysql);
                        printf("                                              Раздел доски объявлений : <SELECT name='name_razdel'> ");
			while ($tek_stroka = mysql_fetch_row($rez_zapros))
    			{
				printf("\n <OPTION> %s", $tek_stroka[1]);
			}
			printf("\n </SELECT><br> \n");
			?>
	                    								<input type="Submit" name="submit5" value="Далее">    <input type="Reset" name="Reset" value="Очистка">    <input type="Submit" name="submit6" value="Отмена">
		</form>

		<?php
	}


	if ($id == 9)
	{
		// Выдать экран № 9. Поиск объявлений по номеру телефона.
		// Форма для ввода номера телефона.
		?>
		<form method="post" action="<?php echo $PHP_SELF?>">

      		Введи номер телефона : <input type="Text" name="telefon" value=""><br>

				<input type="Submit" name="submit8" value="Далее">    <input type="Reset" name="Reset" value="Очистка">    <input type="Submit" name="submit6" value="Отмена">
		</form>

		<?php
	}


    if ($id == 10)
    {
        // Удаление картинки из объявления
        printf(" Удаление картинки %s ",$name_file);

        // Удалить очередной файл с картинкой			        
		$rez_ud = unlink($name_file);

        // Удалить из таблицы "ris" все строки по текущему удаляемому объявлению
		$rez_zapros = mysql_query("DELETE FROM ris WHERE IDobyavleniya ='$id_ob' AND name_file = '$name_file'        ",$rez_soed_mysql);


		if ($rez_ud == true)
		{
		     printf("<br> файл %s удалён ", $name_file);    
		}
		else
		{
		     printf("<br> файл %s не удалён ", $name_file);    
		}

        // Выдать сообщение "Продолжить"
		printf("<br>"); 
        printf('<A href="%s?id=5&id_ob=%d&parol=%s"> Продолжить</A> ', $PHP_SELF, $id_ob, $parol);
    }




//	if ($id == 69)
//	{
//		// Удалить все таблицы базы данных 
//		printf("\n Раздел удаления  таблиц базы данных ");
//      Delete_All($rez_soed_mysql);
//	}


//	if ($id == 70)
//	{
//		// Создать все таблицы базы данных 
//		printf("\n Раздел создания  таблиц базы данных ");
//        Create_all($rez_soed_mysql);
//	}

//	if ($id == 71)
//	{
//       // Загрузить все таблицы базы данных
//		printf("\n Загрузить все таблицы базы данных ");
//        Zagruzka_dannyh($rez_soed_mysql);
//    }



//////////////////////////////////////////////////////////////////////////////////////////////////
//

// 	Разрыв соединения с MySQL
	$rez_razryv_mysql = mysql_close($rez_soed_mysql);

//	printf("\n\n Результат разрыва соединения с MySQL = %d  ",$rez_razryv_mysql);

//	if ($rez_razryv_mysql > 0)
//	{
//		printf("\n\n Успешный разрыв соединении с MySQL ");
//	}
//	else
//	{
//		printf("\n\n Ошибка при разрыве соединения с MySQL ");
//	}

//
///////////////////////////////////////////////////////////////////////////////////////////////////



}
else
{
	printf("\n\n Ошибка при соединении с MySQL или базой данных  ");
}


printf("\n\n PHP_SELF = %s ",$PHP_SELF);
printf("\n\n HTTP_HOST = %s ",$HTTP_HOST);
printf("\n\n HTTP_X_FORWARDED_FOR = %s ", $HTTP_X_FORWARDED_FOR);
printf("\n\n\n");

//printf('<A href="%s"> Запустить заново </A>',$PHP_SELF);
//printf("\n\n");

//printf('<A href="%s?id=69"> Запустить заново и удалить все таблицы базы данных ( id=69 ) </A>',$PHP_SELF);
//printf("\n\n");

//printf('<A href="%s?id=70"> Запустить заново и создать все таблицы базы данных ( id=70 ) </A>',$PHP_SELF);
//printf("\n\n");

//printf('<A href="%s?id=71"> Запустить заново и заполнить все таблицы базы данных ( id=71 ) </A>',$PHP_SELF);
//printf("\n\n");

// phpinfo();


?>


</PRE>

</BODY>

</HTML>