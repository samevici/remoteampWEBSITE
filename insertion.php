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

                //assumes a get with only one key/value pair

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
                
                $field = implode($key);
                $numVal =(int)implode($resp);
                
                //in all cases, prevent negative values from being inserted
                if ($numVal<0)
                    {
                        $numVal =0;
                    }

                //update fields according to scale
                if ($field === "rescut"|| $field === "resfeed" || $field === "distgain" || $field === "distclip" || $field === "volume")
                    {
                        if ($numVal>255)
                            {
                                $numVal=255;
                            }
                    }
                else
                    {

                        if ($numVal>100)
                            {
                                $numVal=100;
                            }
                    }
                
                $sql = "UPDATE fx_settings SET " . $field ." = " . $numVal . " WHERE id='1';";
                $result = mysqli_query($conn, $sql);

                mysqli_close($conn);

?>
