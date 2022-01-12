<HTML>
    <head>
        <body>
            <?php
            $connect = mysqi_connect("localhost", "root", "", "users");
            
            $sql = "SELECT * FROM admin";
            
            $result = mysqli_query($connect, $sql);
            
            $json_array = array();
            
            while)$row = mysqli_fetch_assoc($result))
            {
            
            $json_array[] = $row;
            
            }
            
            echo json_encode($json_array);
            
            /*echo '<pre>';
            print_r($jsn_array);
            echo '</pre>';*/
            
            ?>
            
            
        </body>
    </head>
</HTML>