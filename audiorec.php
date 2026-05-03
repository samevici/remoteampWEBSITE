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
                
                //upon flag:
                $unixtime = time();
                $bufsize = 4096;

                $filein = fopen("php://input", "rb");
                $fileout = fopen("file"."{$unixtime}".".bin", "wb");

                while( $buf = fread($filein, $bufsize) ) {
                    fwrite($fileout, $buf);
                    }

                fclose($filein);
                fclose($fileout);

                mysqli_close($conn);

?>
