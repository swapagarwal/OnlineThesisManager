
<?php
ini_set("display_errors", 0);

//require 'simple_html_dom/simple_html_dom.php';

session_start();

include '../config/config.php';



//header("Location: " . constant("HOST11") . "/user_result.php");
//chdir('C:\Program Files (x86)\Softinterface, Inc\DiffDoc');
//echo shell_exec('DiffDoc  /M C:\Users\Swapnil\Downloads\CS221\15oct1.pdf /S C:\Users\Swapnil\Downloads\CS221\15oct2.pdf /I /W /E /B /T C:\Users\Swapnil\Downloads\CS221\Report.HTM /O /L C:\Users\Swapnil\Downloads\CS221\compare.LOG /X');

function check($file) {
    //$html = file_get_contents('C:\Users\Swapnil\Downloads\CS221\Report.HTM');
    $inerhtml = "";
    $html = file_get_contents($file);
    $doc = new DOMDocument();
    $doc->loadHTML($html);
    $sxml = simplexml_import_dom($doc);
    //print_r($sxml);
    $match = 0;
    $total = 0;
    foreach ($sxml->body->div->center->table->tr as $row) {
        //print_r($row);
        $t1 = $row->td[1]->children();
        $t2 = $row->td[2]->children();
        if (array_key_exists('font', $t1) and array_key_exists('font', $t2)) {
            //$match+=str_word_count($t1->font->b->font);
            //$total+=str_word_count($t1->font->b->font);
            //$match+=str_word_count($t2->font->b->font);
            $total+=str_word_count($t2->font->b->font);
        } else {
            //$match+=str_word_count($row->td[1]);
            //$total+=str_word_count($row->td[1]);
            $match+=str_word_count($row->td[2]);
            $total+=str_word_count($row->td[2]);
        }
    }
    if ($total == 0)
        $inerhtml = $inerhtml . '100';
    else
        $inerhtml = $inerhtml . round(($match / $total) * 100, 2);


    return $inerhtml;
}

function generateSummary($fileName) {
    //echo "once";
    $inerhtml = "<table align='center'>";

    //chdir edit it
    // echo getcwd(). '<br>';
    chdir("..");
    chdir("Upload");
    chdir($_SESSION['class']);
    chdir("Report");
    chdir($fileName);
    //echo '<br>'.getcwd();
    //echo  '..\Upload\\' . $_SESSION['class'] . '\Report\\' . $fileName . '\\'.'<br/>';
    //echo '<br/>'.getcwd();

    $inerhtml = $inerhtml . '<tr style="text-align: center;width: 480px;font-size: 30px;color: darkred"><td colspan="2">Plagiarism Summary</td></tr>';
    $inerhtml = $inerhtml . '<tr style="text-align: center;width: 480px;font-size: 25px;color: blue"><td colspan="2">' . $fileName . '.pdf</td></tr>';

    $inerhtml = $inerhtml . '<tr style="text-align: center;width: 480px;font size: 25px; background-color: #63DDEB;color: white;font-weight: bold">
            <td style="width: 300px">File</td>
            <td style="width: 200px">Percentage Match</td>
        </tr>';
	$count=count(glob("*.HTM"));
	echo $count;
    foreach (glob("*.HTM") as $file) {
        $inerhtml = $inerhtml . '<tr style="text-align: center;width: 480px;background-color: #F7C6CC;font size: 18px; color: black;font-weight: normal">
                <td style="width: 300px"><a href="' . constant("HOST11") . '/Upload/' . $_SESSION['class'] . '/Report/' . $fileName . '/' . $file . '">' . substr($file, 0, -4) . '.pdf</a></td>
                <td style="width: 200px">' . check($file) . '%<br></td>
            </tr>';
		$count--;
		if($count>0)parseResult($file, $fileName,0);
		else parseResult($file, $fileName,1);
    }

    $inerhtml = $inerhtml . "</table>";

    file_put_contents('summary.html', $inerhtml);

    //parseResult('120101004.HTM', $fileName);

    return $inerhtml;
}
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <div id="dataHolder">

        </div>
        <?php

        function parseResult($filename, $file, $last) {
            $_SESSION['parseDataFolder'] = $file;
            $_SESSION['parseDataFile'] = $filename;
			$_SESSION['last'] = $last;
            //header("Location: " . constant("HOST11") . "/FormProcessor/parser.php");
            ?>
            <script src="jquery.js"></script>
            <script>
                $(document).ready(function() {

                    var classType = '<?php echo $_SESSION['class'] ?>';
                    var folder = '<?php echo $_SESSION['parseDataFolder'] ?>';
                    var file = '<?php echo $_SESSION['parseDataFile'] ?>';
					var last = '<?php echo $_SESSION['last'] ?>';
					var HOST11 = '<?php echo constant('HOST11') ?>'; 
                    var url = '../Upload/' + classType + '/Report/' + folder + '/' + file;
                    //alert(last);//alert(url);
                    $('#dataHolder').load(url, function() {
                        //alert("aaa");
                        $('#dataHolder').find("h1").text("side by side comparison");

                        $('#dataHolder').find('p').last().remove();
						$('#dataHolder').find('p').last().remove();

                        $('#dataHolder').find("tr").each(function(index) {
                            //console.log($(this).find('font').length);
                            if (index != 0) {
                                $child = $(this).find('font');

                                if ($child.length == 0) {
                                    $(this).css("color", "red");
                                } else {
                                    $cols = $(this).children();

                                    $cols.each(function(index) {
                                        if (index == 1 || index == 2) {
                                            $newtemp = $(this).children('font').children('b').children('font');
                                            $(this).children('font').attr('color', 'red');
                                            if ($newtemp != null) {
                                                $newtemp.each(function() {
                                                    $(this).attr('color', 'black')
                                                });
                                            } /*else {
                                             $(this).css("color", "red");
                                             console.log($(this).html());
                                             }*/
                                        }
                                    });


                                    //console.log($col1.children('font').first().children('b').first().html());
                                }
                            }
                            console.log($(this).html());
                        });

                        $.post("savefile.php", {filename: file, foldername: folder, data: $("#dataHolder").html()}, function(resp) {
                            //alert(resp);
							if(last==1){
								HOST11+="/user_result.php";
								//alert(HOST11);
								window.location.replace(HOST11);
							}
                        });
                    });

                });
            </script>
            <?php
            unset($_SESSION['parseDataFolder']);
            unset($_SESSION['parseDataFile']);
			unset($_SESSION['last']);
			//$count--;
			//if($count==0)header("Location: " . constant("HOST11") . "/user_result.php");
        }
        
        if (isset($_SESSION['reportFolderName'])) {
            generateSummary($_SESSION['reportFolderName']);
            unset($_SESSION['reportFolderName']);

            //echo 'aaaaaaaaaaaaaa';
        }

        //echo "aaaaaaaaaaa" . '<br>';
        //echo "Location: " . constant("HOST11") . "/user_result.php";
        
        //sleep(5);
        //echo "<script type='text/javascript'>alert('Redirecting');window.location.assign('" . constant("HOST11") . "/user_result.php');</script>";
        ?>
    </body>
</html>