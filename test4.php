<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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