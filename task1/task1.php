<?php
    $arb = "arabic";
    $eng = "english";
    mkdir($arb);
    mkdir($eng);
    echo "Arabic folder is created" . "<br>" . "English folder is created" . "<br>";
    echo"<br>";
    $myfiles = scandir("files");
    // echo "<pre>";
    // print_r($myfiles);
    for($i=0 ; $i< count($myfiles);$i++){
        $file = $myfiles[$i];
        $arr = explode("-",$file); 
        // echo "<pre>";
        // print_r($arr);
        // die();
        if (count($arr) > 1 ){
            // echo "<pre>";
            // print_r($arr);
            // die();
            $filetype= $arr[0];
            // echo $filetype;
            if ($filetype == "arb"){
                rename('files/' . $file, __DIR__ . '/' . $arb . '/' . $file); 
            }else if($filetype == "eng") {
                rename('files/' . $file, __DIR__ . '/' . $eng . '/' . $file);
            }else {
                echo " Invalid file: $file" . "<br>";
            }
            
        }
    }
?>