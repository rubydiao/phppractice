<?php
        if($_POST['answer'] == "อเมริกา" && $_POST['answer'] != null){
            echo "<script>alert('ตอบถูก!')</script>";
            header("Refresh:0 , url =  end.php");
            exit();
        }else{
            echo "<script>alert('ตอบผิด!')</script>";
            header("Refresh:0 , url =  davin4.php");
            exit();
        }
?>