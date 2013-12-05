<?php
session_start();
include '../config/config.php';
?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div id="dataHolder">

        </div>

        <script src="jquery.js"></script>
        <script>
            $(document).ready(function() {
                var classType = '<?php echo $_SESSION['class'] ?>';
                var folder = '<?php echo $_SESSION['parseDataFolder'] ?>';
                var file = '<?php echo $_SESSION['parseDataFile'] ?>';
                var url = '../Upload/' + classType + '/Report/' + folder + '/' + file;
                $('#dataHolder').load(url);
                alert("aaa");

                $("h1").text("Plagiarism Report");
                
                $('p').last().remove();
                $('p').last().remove();


                $("tr").each(function(index) {
                    //console.log($(this).find('font').length);
                    if(index!=0){
                        $child = $(this).find('font');

                        if ($child.length == 0) {
                            $(this).css("color", "red");
                        } else {
                            $cols = $(this).children();

                            $cols.each(function(index) {
                                if (index == 1 || index == 2) {
                                    $newtemp = $(this).children('font').children('b').children('font').text()
                                    if($newtemp!=null)
                                        $(this).text($newtemp);
                                }
                            });


                            //console.log($col1.children('font').first().children('b').first().html());
                        }
                    }
                    //alert($(this).html());
                });
                
                $.post("savefile.php", {filename: file, foldername: folder, data: $("#dataHolder").html()}, function(data){
                    alert(data);
                    
                    <?php //header("Location: " . constant("HOST11") . "/"); ?>
                    
                });
                
            });
        </script>
    </body>
</html>

