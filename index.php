<?php
    if(isset($_POST['Upload'])){
        $checktype ='';
         for($i=0; $i<count($_FILES['file']['name']);$i++){
             
            If($_FILES['file']['type'][$i] != 'image/jpeg'){
                $checktype = FALSE;
                
                }
            else{
                
                if($checktype == false)
                    $checktype = FALSE;        
                else
                    $checktype = true;
            }
        }
        if($checktype == 0)
            echo "<script lang='javascript'>alert('กรุณาเลือกไฟล์รูปภาพเท่านั้น');</script>";
        else
        echo $checktype;
    }
        /*If($_FILES['file']['type'] == 'image/jpeg'){
            date_default_timezone_set('asia/bangkok');
            $str = "Pic".date('d-m-Y H-i-s');
            //mkdir($str);
            for($i=0;$i<= count($_FILES['file']['name']);$i++){
               move_uploaded_file($_FILES['file']['name'][$i],'/'.$str);
            }
            
        }
        else
        echo "<script lang='javascript'>alert('กรุณาเลือกไฟล์รูปภาไเท่านั้น');</script>";
         
         */
    
    
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
                <tr><td>ไฟล์</td><td><input type="file" name="file[]" multiple="multiple"></td></tr>
                <tr><td colspan="2"><input type="submit" name="Upload" value="Upload"></td></tr>
            </table>
        </form>
    </body>
</html>
