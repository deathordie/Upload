<?php
    if(isset($_POST['Upload'])){
        $checktype = false;
         for($i=0; $i<count($_FILES['file']['name']);$i++){
            If($_FILES['file']['type'][$i] == 'image/jpeg' || $_FILES['file']['type'][$i] == 'image/bmp' || $_FILES['file']['type'][$i] == 'image/png' || $_FILES['file']['type'][$i] == 'image/jpg'){
                $checktype = true;
            }
            else{
                $checktype = false;
                break;
            }
         }
         if($checktype == true){
            date_default_timezone_set('asia/bangkok');
            $str = "Pic".date('d-m-Y H-i-s');
            $des = '//172.16.2.55/drive-g/HBAY/Pic/'.$str;
            echo $des;
            mkdir($des,0777);
            for($i=0; $i<count($_FILES['file']['name']);$i++){
                move_uploaded_file($_FILES['file']['tmp_name'][$i],$des.'/Pic'.$i.'.jpg');
            }
        }
         else
            echo "<script lang='javascript'>alert('กรุณาเลือกไฟล์รูปภาพเท่านั้น');</script>";
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
        <form name="upload" method="post" enctype="multipart/form-data" >
            <table align="center">
                <tr><td colspan="2"><label align="center"><h2>ระบบอัพโหลดรูปภาพ Hbay</h2></label></td><tr>
                <tr><td>ไฟล์</td><td><input type="file" name="file[]" multiple="multiple"></td></tr>
                <tr><td colspan="2"><input type="submit" name="Upload" value="Upload"></td></tr>
            </table>
        </form>
    </body>
</html>
