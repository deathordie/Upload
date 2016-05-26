<?php
    if(isset($_POST['Upload'])){
        If($_FILES['file']['tmp_name']){
            date_default_timezone_set('asia/bangkok');
            $str = "Pic".date('dmY H-i-s');
            //mkdir($str);
            //move_uploaded_file($_FILES['file']['tmp_name'],'/'.$str);
            echo $_FILES['file']['name'];
            
        }
    }
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="post" enctype="multipart/form-data">
            <table align="center">
                <tr><td>ไฟล์</td><td><input type="file" name="file" multiple=""></td></tr>
                <tr><td colspan="2"><input type="submit" name="Upload" value="Upload"></td></tr>
            </table>
        </form>
    </body>
</html>
