<pre>
    <?php
    ini_set("display_errors", 0);

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
        
        $inerhtml = $inerhtml . round(($match / $total) * 100, 2);
        $inerhtml = $inerhtml . "% match!";
        $inerhtml = $inerhtml . "<br>";

        return $inerhtml;
    }

//check();
    function generateSummary($fileName){
        $inerhtml = "";
        
        //chdir edit it
        chdir('C:\Users\sankalp\Downloads\CS221\120101001');
        
        //echo getcwd();
        
        $inerhtml = $inerhtml . "Plagarism Report Summary";
        $inerhtml = $inerhtml . "<br/><b>File : </b>" . $fileName;
        
        foreach (glob("*.HTM") as $file) {
            $inerhtml = $inerhtml . "<br>";
            $inerhtml = $inerhtml . "<a href=''>" . $file . "</a>";
            $inerhtml = $inerhtml . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            $inerhtml = $inerhtml . check($file);
        }
        
        return $inerhtml;
    }
    
    function parsepage($filename){
        
    }
    
    echo generateSummary("random");
    ?>
</pre>