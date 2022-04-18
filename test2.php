<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="search_form" action="code2.php" method="">
        <button type="submit" name="submit">click</button>
    </form>
    <script>
        var num = 10;
        document.getElementById('search_form').action = 'code2.php?num=' + num;
    </script>
</body>
</html>