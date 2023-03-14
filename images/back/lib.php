<?php
session_start();
    $conn = new mysqli("185.229.114.1" , "u433475616_topValue" , "topValue123456789" , "u433475616_topValue");
    if ($conn->connect_error) {
        $massage="Connection Filed : ".$conn->coconnect_error;
    }
    function select($table,$query="1"){
        global $conn;
        $sql = "SELECT * FROM ".$table." WHERE ".$query.";";
        $res = $conn->query($sql);
        if($res){
            if(mysqli_num_rows($res) > 0){
                $data = [];
                while($x = mysqli_fetch_assoc($res)){
                    $data[] = $x;
                }
                return $data;
            }
        }
        return [];
    }


    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST["Add_request"])){
        $date = date('Y-m-d\TH:i:s');
        $department ="";
        if($_POST["department"] == ""){
            $department = "تواصل";
        }else{
            $department =$_POST["department"];
        }
        $sql="INSERT INTO `Request`( `name`, `email`, `phoneNumber`, `company_name`, `department`, `city`,`date`, `details`)
         VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["company"]."','".$department."','".$_POST["city"]."','".$date."','".$_POST["details"]."')";
        
        if($conn->query($sql) === true){
            echo "<h1><center> Update successful </center></h1>";  
            header("Location:https://topvaluecompany.com/top-value/index.php");
            exit;
        }else{
            echo"
            <div style='text-align: center;'>
            <img src='../images/testing.png' style='width: 200px;height: 200px;'>
            <h3 style='color: red;'>Error we cant send this request!</h3>
            <a href='https://topvaluecompany.com/top-value/index.php' style='display: block;
                border: 3px solid transparent;
                width: fit-content;
                margin: 0 auto 30px;
                font-weight: bold;
                font-size: 22px;
                padding: 10px 30px;
                border-radius: 6px;
                color: #f44036;
                border-color: #f44036;
                background: linear-gradient(to right, #f44036 50%, white 50%);
                background-size: 200% 100%;
                background-position: right bottom; text-decoration: none;'>back to re enter data</a>
            </div>";
            exit;				
        }
        $conn->close();
    }

?>
