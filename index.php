<!DOCTYPE html>
<html>
    <head>
        <title>REMOTEFX Control</title>
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
        
                ?>
        <script>
            async function getValues() {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.open("GET", "remotevals")

            }


        </script>
    </head>
    <body>
        <h1> REMOTEFX  Control</h1>
        <form action="response.php" method="POST">
        <p><label for="hi"> High pass %: </label><input type="text" id="hi" name="hi" /></p>
        <p><label for="band"> Band pass %: </label><input type="text" id="band" name="band" /></p>
        <p><label for="lo"> Low pass %: </label><input type="text" id="lo" name="lo" /></p>
        <p><label for="rescut"> Resonance cutoff %: </label><input type="text" id="rescut" name="rescut" /></p>
        <p><label for="resfeed"> Resonance feedback %: </label><input type="text" id="resfeed" name="resfeed" /></p>
        <p><label for="distgain"> Distortion gain %: </label><input type="text" id="distgain" name="distgain" /></p>
        <p><label for="distclip"> Distortion clipping %: </label><input type="text" id="distclip" name="distclip" /></p>
        <p><label for="volume"> Volume %: </label><input type="text" id="volume" name="volume" /></p>

        <input type="button" onclick="alert('This will eventually do something')" value="EEPROMwrite">
        <input type="button" onclick="alert('This will eventually do something')" value="record">

    </body>