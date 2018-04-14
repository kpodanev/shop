<?php


/**
 * Загрузка файлов на сервер
 * @param string $filename имя файла без расширения
 * @param string $path поленый путь к директории куда файл будет сохранен
 */
function upload($filename, $path = null)
{
    if(!$path){
        $path = dirname(__DIR__).'/upload';
    }

    if(!is_dir($path)){
        die(sprintf("%s не являетя дирректорией", $path));
    }
    
    $type = $_FILES['image']['type'];
    $tmpPath = $_FILES['image']['tmp_name'];
    $fullName = generateName($filename, $type);
    if(file_exists($tmpPath)){
        copy($tmpPath, $path.'/'.$fullName);
        return $fullName;
    }
}

function generateName($name, $type)
{
    $map = [
        'image/jpeg' => '.jpg',
        'image/png' => '.png'
    ];
    return $name.$map[$type];
}