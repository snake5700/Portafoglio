<?php
    function openFile($filename = "Brave.csv"){
        $file = fopen($filename, "r+");
        if(!$file)
            die("Si prega di fornire un file, non una patata!");
        return $file;
    }

    /*********************************************************************************************/

    function sanify($data){
        foreach($data as $k => $v){
            switch($k){
                case 1: $data[$k] = urlencode(htmlspecialchars($v));
                        break;
                case 2: $data[$k] = htmlspecialchars(trim($v));
                        break;
                case 3: $data[$k] = password_hash($v, PASSWORD_DEFAULT);
                        break;
            }
        }
        return $data;
    }

    

    function readFromFile($stream){
        if(!$stream)
            die("Non posso leggere da questo file");
        $container = array();
        while(($data = fgetcsv($stream))){
            $data = sanify($data);
            array_push($container, $data);
        }
        return $container;
    }

    function writeReport($data){
        $file=fopen("report.json","w") or die("<p> Impossibile leggere file</p>"); // Replace.
        fwrite($file,$data);
    }
?>