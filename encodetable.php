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

                $potvalues =[];
                while ($row = mysqli_fetch_assoc($result)) {
                     $potvalues[] = $row; // Adds each row as a nested array
                }

                echo json_encode($potvalues);
?>