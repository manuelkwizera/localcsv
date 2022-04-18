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
         $file_name='results'. '.json';
         if(file_exists("$file_name")){
            $data = file_get_contents ("results.json");
            $json = json_decode($data, true);
            foreach ($json as $key => $value) {
                if (!is_array($value)) {
                    echo $key . '=>' . $value . '<br/>';
                } else {
                    foreach ($value as $key => $val) {
                        echo $key . '=>' . $val . '<br/>';
                    }
                }
            }
         }
    ?>
    <form action="process.php" method="post">
        <input type="hidden" name="hidden1" id="hidden1" />
        <input type="submit" name="submit" value="Test this mess!" />
    </form>
    <script type="text/javascript">
       var name = "eric";
      document.getElementById("hidden1").value = name;
   </script>
</body>
</html>