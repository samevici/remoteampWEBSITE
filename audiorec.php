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
                
                //get time for unique recording filename
                date_default_timezone_set('America/New_York');
                $unixtime = time();
                $newtime = date("Ymd_His", $unixtime); 

                foreach ($_GET as $x=>$y)
                    {
                        $recordstatus = htmlspecialchars("{$y}");
                    };

            
                if ($recordstatus == "1") {
                 shell_exec('arecord -D plughw:2,0 -fS16_LE -r44100 -q /home/recordings/recording'.$unixtime.'.wav');
                } elseif ($recordstatus == "0") {
                 shell_exec('pkill arecord');
                }
                
            
                mysqli_close($conn);

?>
