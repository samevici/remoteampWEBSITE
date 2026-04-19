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

                $sql = "select * from fx_settings;";
                $result = mysqli_query($conn, $sql);
                foreach ($result as $row) {{echo "{$row['hi']}, {$row['band']}, {$row['lo']}, {$row['rescut']}, {$row['resfeed']}, {$row['distgain']}, {$row['distclip']}, {$row['volume']}";}

            

?>

