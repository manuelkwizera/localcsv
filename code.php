<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $age = $_POST['age'];
        $file_open = fopen("lacaldata.csv", "a");
        $form_data = array(
            'name'    =>  $name,
            'age'   =>  $age,
        );
        fputcsv($file_open, $form_data);
        header('Location: index.php');
    }

    if(isset($_POST['fetch'])){
        $csv = array();
        $lines = file('lacaldata.csv', FILE_IGNORE_NEW_LINES);

    foreach ($lines as $key => $value){
        $csv[$key] = str_getcsv($value);    
    }
    echo '<pre>';
    print_r($csv);
    echo '</pre>';
    }

    if(isset($_POST['search'])){
        $find = $_POST['find'];
        global $csv = array();
        $ch = fopen("lacaldata.csv", "r");
        $header_row = fgetcsv($ch);

        /* This will loop through all the rows until it reaches the end */
        while($row = fgetcsv($ch)) {
            if (in_array($find, $row)) {
                //echo '<div>' . implode(' | ', $row) . ' </div>';
                $csv = $row;
                header('Location: index.php');
                //print_r($csv);

            }
        }
    }
?>