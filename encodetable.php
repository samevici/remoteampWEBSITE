 <?php

                $server = "localhost";
                $username = "php";
                $password = "victorphpass";
                $database = "remotefx";
                $conn = mysqli_connect($server, $username, $password, $database);
            
                // Check for successful connection
                if (!$conn) {
                    die("Connection failed: {mysqli_connect_error()}");
                }


                $sql = "select * from fx_settings where id=1;";
                $result = mysqli_query($conn, $sql);
                
                while ($row = mysqli_fetch_assoc($result)) {
                      echo json_encode($row);
                }

                mysqli_close($conn);

?>