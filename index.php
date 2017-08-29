<?php
    var_dump($_GET);
    $path = __DIR__."/";
    $folder = $_GET["folder"];
    $files = $_GET["files"];

    if (mkdir($path.$folder, 0777)) {
        echo "Create folder: ".$path.$folder."<br>";
        $path = $path.$folder."/";
    } else {
        echo "Don`t create folder: ".$path.$folder."<br>";
        exit;
    }
    for ($i=0; $i<strlen($files); $i+=2){
        $namefile = $files[$i].$files[$i+1].".txt";
        if (fopen($path.$namefile, "x+"))
            echo "Create file: ".$path.$namefile."<br>";
        else
            echo "Don`t create file: ".$path.$namefile."<br>";
}