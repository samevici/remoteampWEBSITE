<!DOCTYPE html>
<html>
    <head>
        <title>REMOTEFX Control</title>

        <script>
           /* async function getValues() {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.open("GET", "insertion.php?" + this.id + "=" this.innerHTML, false);
                xmlHttp.send();
            }*/

           /* async function refreshValues() {
                 var xmlHttp = new XMLHttpRequest();
                  xmlHttp.open("GET", "insertion.php?", false);
                  const result  



            }
*/

        </script> 
    </head>
    <body>
        <h1> REMOTEFX  Control</h1>
        <form action="insertion.php" method="GET">
            <p><label for="hi"> High pass %: </label><input type="text" id="hi" name="hi" />   <button type="submit">Update</button></p>
        </form>

        <form action="insertion.php" method="GET">
            <p><label for="band"> Band pass %: </label><input type="text" id="band" name="band" /> <button type="submit">Update</button></p>
        </form>

        <form action="insertion.php" method="GET">
            <p><label for="lo"> Low pass %: </label><input type="text" id="lo" name="lo" /> <button type="submit">Update</button></p>
        </form>

        <form action="insertion.php" method="GET">
            <p><label for="rescut"> Resonance cutoff %: </label><input type="text" id="rescut" name="rescut" /> <button type="submit">Update</button></p>
        </form>

        <form action="insertion.php" method="GET">
            <p><label for="resfeed"> Resonance feedback %: </label><input type="text" id="resfeed" name="resfeed" /> <button type="submit">Update</button></p>
        </form>

        <form action="insertion.php" method="GET">
            <p><label for="distgain"> Distortion gain %: </label><input type="text" id="distgain" name="distgain" /> <button type="submit">Update</button></p>
        </form>

        <form action="insertion.php" method="GET">
            <p><label for="distclip"> Distortion clipping %: </label><input type="text" id="distclip" name="distclip" /> <button type="submit">Update</button></p>
        </form>

        <form action="insertion.php" method="GET">
            <p><label for="volume"> Volume %: </label><input type="text" id="volume" name="volume" /> <button type="submit">Update</button></p>
        </form>

        <input type="button" onclick="alert('This will eventually do something')" value="EEPROMwrite">
        <input type="button" onclick="alert('This will eventually do something')" value="record">

    </body>