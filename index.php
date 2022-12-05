<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function Man() {
        echo "ahoj";
    }
    function PrintDate(){
        $date = date("d/m/Y\nh:i:s a.\n");
        echo $date;
    }
    function PrintSaveData(){
        date_default_timezone_set("Europe/Bratislava");
        $date = date("d/m/Y\nh:i:s a.\n");
        file_put_contents("test.txt", $date, FILE_APPEND);
        $data = file_get_contents("test.txt");
        echo $data;
    }
    function StudentTime(){
        date_default_timezone_set("Europe/Bratislava");
        $time = date("H;i");
        $data_cas = "";
        $data = "";
        if ($time >= 8 and $time < 20){
            $data_cas = "Meskanie";
            file_put_contents("cas.txt", $data_cas);
        }   
        elseif ($time < 8){
            $data_cas = "Vcas";
            file_put_contents("cas.txt", $data_cas);
        } else die("nemoze");
        $data = file_get_contents("test.log").file_get_contents("cas.txt");
        $data = explode(",", $data);
        foreach ($data as $gay){
            echo "$gay - $data_cas <br>";
        }
    }
    // StudentTime();
    // Man();
    // PrintSaveData();
    // PrintDate();


    ?>
</body>
</hml>