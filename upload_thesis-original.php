<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <?php include 'config/config.php'; ?>
        <?php include 'Macros/DatabaseFunctions.php'; ?>
        <?php include 'Macros/CommonFunctions.php'; ?>
        <?php
        session_start();
        if (!isset($_SESSION['user_nm'])) {
            header("Location: " . constant("HOST11") . "/login.php");
        }

        $pageResult = "NONE";
        if ($_SESSION['pass_changed'] == "NO") {
            $pageResult = "PASS_NOT_CHANGED";
        } else if ($_SESSION['permission'] == "NO") {
            $pageResult = "NO_PERMISSION";
        } else {
            $result = getLastDate($_SESSION['class']);
            if ($result == "DONE") {
                $pageResult = "DONE";
            } else {
                $pageResult = "DATABASE_ERROR";
            }
            $pageResult = "DONE";
        }
        ?>
        <link rel="stylesheet" href="<?php echo constant("HOST11") . '/web/css/UserStyleSheet.css' ?>" type="text/css" />
        <title>Online Thesis Manager</title>
        <script type="text/javascript">
            var errorString="";
            function validator(){
                errorString="";
                var flag=true;
                if(document.forms.frmThesis.elements.txtTitle.value==""){
                    errorString=errorString+"\n\n Enter thesis title.";
                    flag=false;
                }
                if(document.forms.frmThesis.elements.txtAbstract.value==""){
                    errorString=errorString+"\n\n Enter abstract.";
                    flag=false;
                }
                var fileName=document.forms.frmThesis.elements.fileThesis.value;
                if(fileName==""){
                    errorString=errorString+"\n\n Choose a valid file (only pdf).";
                    flag=false;
                }else{
                    var dotIndex=fileName.lastIndexOf(".");
                    if(dotIndex==-1 || fileName.substring(dotIndex+1).toUpperCase()!="PDF"){
                        errorString=errorString+"\n\n Choose a valid file (only pdf).";
                        flag=false;
                    }
                }
                
                return flag;
            }
            function displayOverwriteWarning(){
                var check=document.frmThesis.elements.chkOverwrite;
                if(check.checked){
                    if(!confirm("Overwritting will delete your previous uploaded records.\n Do you want to overwrite??")){
                        check.checked=false;
                    }
                }
            }
            function formSubmit(){
                
                if(validator()){
                    if(confirm(" *****Be sure about the PDF file you are uploading*****.\n You are not allowed to upload multiple times. \n Do you want to proceed??")){
                        document.forms['frmThesis'].submit();
                    }
                }else{
                    alert("UNABLE TO SUBMIT:"+errorString);
                }
            }
        </script>
    </head>
    <body>
        <div id="bodyPanel">
            <div id="adminHeader">
                <div id="adminHeaderTitle">
                    <?php include 'Macros/headerImage.php'; ?>
                </div>
                <div id="adminHeaderLocation">Department of CSE, IIT Guwahati</div>
            </div>
            <div id="adminVMenu">
                <?php include 'Macros/VerticalMenuItems.php'; ?>
            </div>
            <div id="adminMiddle">
                <?php
                if ($pageResult == "PASS_NOT_CHANGED") {
                    echo '<div style="color: green;font-size: 28px; text-align: center;width: 100%">****Welcome, ' . strtoupper($_SESSION['name']) . '****</div>';
                    echo '<div style="padding-left: 50px; font-size: 20px; color: red"><br/><br/><br/><br/><br/><b>YOU HAVE TO CHANGE YOUR PASSWORD FIRST.</div>';
                } else if ($pageResult == "NO_PERMISSION") {
                    echo '<div style="color: green;font-size: 28px; text-align: center;width: 100%">****Welcome, ' . strtoupper($_SESSION['name']) . '****</div>';
                    echo '<div style="color: green;font-size: 28px; text-align: center;width: 100%;padding-top: 50px">Sorry!! Currently you don\'t have permission for upload.</div>';
                    echo '<div style="padding-left: 10px; text-align: center; font-size: 20px; color: red"><br/><br/><br/>TAKE PERMISSION FROM YOUR ADVISOR.</div>';
                    echo '<div style="padding-left: 10px; text-align: center; font-size: 15px; color: black">
                        <br/><br/><br/>
                        <b>Admin</b> can also grant you permission but only if your advisor is out of station.
                        </div>';
                } else if ($pageResult == "DATABASE_ERROR") {
                    echo '<b>SOME DATABASE ERROR OCCURED. TRY AGAIN.';
                } else {
                    ?>
                    <div style="color: green;font-size: 28px; text-align: center;width: 100%">****Welcome, <?php echo strtoupper($_SESSION['name']) ?>****</div>
                    <?php
                    if ($_SESSION['last_date'] >= mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"))) {
                        echo '<div style="color: green;font-size: 16px; text-align: center;width: 100%"><br/></div>';
                    } else {
                        echo '<div style="color: red;font-size: 16px; text-align: center;width: 100%">You are uploading your thesis after deadline.</div>';
                    }
                    ?>
                    <div style="text-align: center;">
                        <form enctype="multipart/form-data" name="frmThesis" method="POST" action="FormProcessor/ProcessThesisUpload.php">

                            <table style="width: 100%" border="0">
                                <tr>
                                    <td style="width: 20%"><div style="text-align: left;color: blue;font-weight: bold">Roll Number: </div></td>
                                    <td style="width: 80%"><div style="text-align: left"><?php echo $_SESSION['roll_number'] ?></div></td>
                                </tr>
                                <tr><td colspan="2" style="height: 15px"></td></tr>
                                <tr>
                                    <td style="width: 20%"><div style="text-align: left;color: blue;font-weight: bold">Class: </div></td>
                                    <td style="width: 80%">
                                        <div style="text-align: left">
                                            <?php
                                            if ($_SESSION['class'] == "BT") {
                                                echo "B.Tech";
                                            } else {
                                                echo "M.Tech";
                                            }
                                            ?>
                                        </div>
                                    </td>
                                </tr>
                                <tr><td colspan="2" style="height: 15px"></td></tr>
                                <tr>
                                    <td style="width: 20%"><div style="text-align: left;color: blue;font-weight: bold">Thesis Title: </div></td>
                                    <td style="width: 80%"><div style="text-align: left"><input type="text" name="txtTitle" value="" size="80" /></div></td>
                                </tr>
                                <tr><td colspan="2" style="height: 15px"></td></tr>
                                <tr>
                                    <td style="width: 20%"><div style="text-align: left;color: blue;font-weight: bold">Advisor: </div></td>
                                    <td style="width: 80%">
                                        <div style="text-align: left">
                                            <?php 
                                            echo $_SESSION['advisor_name'];
                                            unset($_SESSION['advisor_list']) 
                                            ?>
                                        </div></td>
                                </tr>
                                <tr><td colspan="2" style="height: 15px"></td></tr>
    <!--                                <tr>
                                    <td style="width: 20%" colspan="2">
                                        <div style="text-align: left;color: blue;font-weight: bold">
                                            Have you taken permission from your guide? 
                                            &nbsp;&nbsp;&nbsp;<select name="chkPermission">
                                                    <option value="NONE">Select</option>
                                                    <option value="YES">Yes, I have taken.</option>
                                                    <option value="NO">No, I will inform him/her later.</option>
                                                </select>
                                        </div>
                                    </td>
                                </tr>-->
    <!--                                <tr><td colspan="2" style="height: 15px"></td></tr>-->
                                <tr>
                                    <td style="width: 20%"><div style="text-align: left;color: blue;font-weight: bold">Abstract: </div></td>
                                    <td style="width: 80%">
                                        <div style="text-align: left">
                                            <textarea name="txtAbstract" rows="8" cols="50">
                                            </textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr><td colspan="2" style="height: 15px"></td></tr>
                                <tr>
                                    <td style="width: 20%"><div style="text-align: left;color: blue;font-weight: bold">Upload Thesis : </div></td>
                                    <td style="width: 80%">
                                        <div style="text-align: left">
                                            <input type="file" name="fileThesis" value="" />
    <!--                                            <input type="hidden" name="MAX_FILE_SIZE" value="5000000"/>-->
                                            <span style="color: green;padding-left: 20px">(Upload only in PDF format.)</span>
                                        </div>
                                    </td>
                                </tr>
                                <tr><td colspan="2" style="height: 15px"></td></tr>
                                <tr>
                                    <td style="width: 80%" colspan="2">
                                        <div style="text-align: right;padding-right: 150px">
                                            <span style="color: blue;font-style: italic;padding-right: 10px">Overwrite Older Post</span>
                                            <span style="padding-right: 50px"><input type="checkbox" name="chkOverwrite" value="ON" onclick="displayOverwriteWarning()" /></span>
                                            <input type="button" value="Submit" name="buttonSubmit" onclick="formSubmit()" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 80%" colspan="2">
                                        <span style="color: red;font-size: 30px">Be careful!!!</span>
                                        <span style="color: #990000">You are allowed to upload only once. You have to take permission for your every uploading attempt.</span>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                    <?php
                    unset($_SESSION['last_date']);
                }
                ?>
            </div>
            <div id="adminFooter">
                <?php include 'Macros/AdminFooter.php'; ?>
            </div>
        </div>
    </body>
</html>
