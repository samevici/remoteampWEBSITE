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

                $key =[];
                $resp = [];

                foreach ($_GET as $x=>$y)
                    {
                        $key[] = "{$x}";

                    };
                
                foreach ($_GET as $x=>$y)
                    {
                        $resp[] = htmlspecialchars("{$y}");

                    };
                
                $sql = "UPDATE fx_settings SET " . implode ($key) ." = " . implode($resp) . " WHERE id='1';";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);

?>
