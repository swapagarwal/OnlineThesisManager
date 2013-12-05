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
      $value="FIX IT";
     // echo $_GET['submit'];
     if($_GET['submit']==$value)
      {
          
          
             $timefrom=$_GET['fromDate'].':00';
             $timeto=$_GET['toDate'].':00';
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