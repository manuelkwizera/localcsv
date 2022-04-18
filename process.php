<?php
    if (isset($_POST['submit'])) {
        $response = array();
        $posts = array();
        $name = $_POST['hidden1']; 
        echo $name;

        $file_name='results'. '.json';

        if(file_exists("$file_name")){
            echo "file alread exists";
            $data[] = $_POST['hidden1'];
            $inp = file_get_contents('results.json');
            $tempArray = json_decode($inp);
            array_push($tempArray, $data);
            $jsonData = json_encode($tempArray);
            file_put_contents('results.json', $jsonData);
        }
        else{
            $posts[] = array('title'=> 'name', 'url'=> $name);
            $response = $posts;
            $fp = fopen('results.json', 'w');
            fwrite($fp, json_encode($response));
            fclose($fp);
        }        

    }
?>