<?php
if (isset($_POST['hidden1'])) {
   echo "You submitted {$_POST['hidden1']}";
   die;
}

echo <<<HTML
   <form name="myform" action="{$_SERVER['PHP_SELF']}" method="post" id="myform">
      <input type="submit" name="submit" value="Test this mess!" />
      <input type="hidden" name="hidden1" id="hidden1" />
   </form>

   <script type="text/javascript">
       var name = "kwikwi";
      document.getElementById("hidden1").value = name;
   </script>
HTML;
?>