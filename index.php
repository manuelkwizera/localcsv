<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script>
        /*
        var a = 10;
        $(document).ready(function(){
            $("#myInput").val(a);
        });
        */
    </script>
</head>
<body>
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

       if(isset($_POST['search'])){
        $find = $_POST['find'];
        $csv = array();
        $ch = fopen("lacaldata.csv", "r");
        $header_row = fgetcsv($ch);

        /* This will loop through all the rows until it reaches the end */
        while($row = fgetcsv($ch)) {
            if (in_array($find, $row)) {
                //echo '<div>' . implode(' | ', $row) . ' </div>';
                $csv = $row;
                //header('Location: index.php');
                //print_r($csv);
                //echo $csv[0];

            }
        }
    }
    ?>
<form action="" method="POST">
<table>
  <tr>
    <th>
        Name: <input type="text" name="name" id="name"><br><br>
        Age: <input type="number" name="age" id="age"><br><br>
        <button type="submit" name="submit">Save Data</button>
    </th>
    <th>
        search: <input type="text" name="find"><br><br>
        <button type="submit" name="search">Search Data</button>
    </th>
  </tr>
</table>
</form>
    
        

    <script>
        var name = '<?php echo $csv[0]; ?>';
        var age ='<?php echo $csv[1]; ?>';
    
        
        $(document).ready(function(){
            $("#name").val(name);
            $("#age").val(age);
        });
        
        
    </script>

</body>
</html>