<html>
<html>
    <head>
        <script>
             

        </script>
    </head>
<body>

<?php
      include '../config/config.php';
      include 'PhpIncludeFiles/Database/calander.php';
  ?>
  <?php 
      $value="Create";
     // echo $_GET['submit'];
     if($_GET['submit']==$value)
      {
          
          
             $timefrom=$_GET['Fromtime'].':00';
             $timeto=$_GET['Totime'].':00';
             $content=$_GET['Content'];
            //echo $timeto.' '.$timefrom.' '.$content;
            $error=AddASchedule($timefrom,$timeto,$content);
                          
     }
?>  


<?php
        
     header('Location: Calander/CSchedule.php?error='.$error."");
?>
</body>
</html>