<!DOCTYPE html>
<html>
    <head>
        <title>REMOTEFX Control</title>

        <script>

        function sleep(ms) {
              return new Promise(resolve => setTimeout(resolve, ms));
            }
        async function insertValues(field) {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.open("GET", "insertion.php?"+field+"="+document.getElementById(field).value, false);
                xmlHttp.send();
            }
        
         async function eepromWrite() {
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.open("GET", "insertion.php?eepromw=1", false);
                xmlHttp.send();

                await sleep(650);

                xmlHttp.open("GET", "insertion.php?eepromw=0", false);
                xmlHttp.send();
            }
        
        async function recording() {

                let status = document.getElementById("RecordStatus").value;
                if (status == "0")
                 {
                    document.getElementById("RecordStatus").value = "1";
                    document.getElementById("RecordStatus").innerHTML = "RECORDING!";
                 }
                if (status == "1")
                 {
                    document.getElementById("RecordStatus").value = "0";
                    document.getElementById("RecordStatus").innerHTML = "OFF";
                 }
               
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.open("GET", "insertion.php?record="+document.getElementById("RecordStatus").value, false);
                xmlHttp.send();
            }

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
        
            <p><label for="hi"> High pass %: </label><input type="text" id="hi" name="hi"  value="50"/> <button onclick='insertValues("hi")'>Update</button></p>
       

   
            <p><label for="band"> Band pass %: </label><input type="text" id="band" name="band" value="50"/> <button onclick='insertValues("band")'>Update</button></p>
   

       
            <p><label for="lo"> Low pass %: </label><input type="text" id="lo" name="lo" value="50"/> <button onclick='insertValues("lo")'>Update</button></p>

            <p><label for="rescut"> Resonance cutoff %: </label><input type="text" id="rescut" name="rescut" value="50"/> <button onclick='insertValues("rescut")'>Update</button></p>


            <p><label for="resfeed"> Resonance feedback %: </label><input type="text" id="resfeed" name="resfeed" value="50"/>  <button onclick='insertValues("resfeed")'>Update</button></p>

            <p><label for="distgain"> Distortion gain %: </label><input type="text" id="distgain" name="distgain" value="50" /> <button onclick='insertValues("distgain")'>Update</button></p>
   

            <p><label for="distclip"> Distortion clipping %: </label><input type="text" id="distclip" name="distclip" value="50"/> <button onclick='insertValues("distclip")'>Update</button></p>
        
      
            <p><label for="volume"> Volume %: </label><input type="text" id="volume" name="volume" value="50"/> <button onclick='insertValues("volume")'>Update</button></p>


       <input type="button" onclick="eepromWrite()" value="EEPROMwrite">  <p id="EEPROMstatus"> </p>
       <input type="button" onclick="recording()" value="Record"> <p id="RecordStatus" value="0">OFF</p>

    </body>