<?


if (isset($_POST['upload']))
{
    //Список разрешенных файлов
    $whitelist = array(".gif", ".jpeg", ".png", ".jpg", ".bmp" );         
    $data = array();
    $error = true;
    
    //Проверяем разрешение файла
    foreach  ($whitelist as  $item) 
    {
        if (preg_match("/$item\$/i",$_FILES['userfile']['name'])) $error = false;
    }

    //если нет ошибок, грузим файл
    if(!$error) 
    { 
        $folder =  'img/';  //директория в которую будет загружен файл
        $uploadedFile =  $folder.basename($_FILES['userfile']['name']);
                
        if(is_uploaded_file($_FILES['userfile']['tmp_name']))
        {
            if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadedFile))
            {
                $data = $_FILES['userfile'];
            }
            else 
            {    
                $data['errors'] = "Во время загрузки файла произошла ошибка";
            }
        }
        else 
        {    
            $data['errors'] = "Файл не  загружен";
        }
    }
    else
    {
        $data['errors'] = 'Вы загружаете запрещенный тип файла';
    }

}
else
{
    die("ERROR");
}

?>