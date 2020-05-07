<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>WORLD Dataset</title>
        <link rel="stylesheet" type="text/css" href="main.css" />
        <!-- <link rel="shortcut icon" type="image/x-icon" href="titlelogo.jpg" /> -->
    </head>

    <body style="background-color:#242222;">
        <h1><a href="index.php">WORLD</a></h1>
        <h2>LANG Table</h2>

        <button onclick="opcl1()">INSERT</button>
        <button onclick="opcl2()">SELECT</button>
        <button onclick="opcl3()">UPDATE</button>
        <button onclick="opcl4()">DELETE</button>

        <div id="canoc1">
            <form method="post">
                <label>Country Code</label><br>
                <input type="text" id="incc" name="incc" minlength="3" maxlength="3" class="boxes" required="required"><br>

                <label>Language</label><br>
                <input type="text" id="inlang" name="inlang" maxlength="30" class="boxes" required="required"><br>

                <label>Is it Official?</label><br>
                <input type="text" id="inoff" name="inoff" maxlength="1" class="boxes"><br>

                <label>Total Speakers</label><br>
                <input type="number" id="inttl" name="inttl" min="0" max="100" maxlength="3" step=".1" class="boxes"><br>

                <input type="submit" name="inname" value="Insert" class="ok"><br>
            </form>
        </div>
        <div id="canoc2">
            <form method="post">
                <label>Country Code</label><br>
                <input type="text" name="selcc" maxlength="3" class="boxes"><br>

                <input type="submit" name="selname" value="Select" target="_blank" class="ok"><br>
            </form>
        </div>
        <div id="canoc3">
            <form method="post">
                <label>Country Code(Old)</label><br>
                <input type="text" id="oupcc" name="oupcc" minlength="3" maxlength="3" class="boxes" required="required"><br>

                <label>Country Code(New)</label><br>
                <input type="text" id="nupcc" name="nupcc" min="3" maxlength="3" class="boxes" required="required"><br>

                <label>Language(New)</label><br>
                <input type="text" id="nuplang" name="nuplang" maxlength="30" class="boxes" required="required"><br>

                <label>Is it Official?(New)</label><br>
                <input type="text" id="nupoff" name="nupoff" maxlength="1" class="boxes"><br>

                <label>Total Speakers(New)</label><br>
                <input type="number" id="nupttl" name="nupttl" maxlength="3" min="0" max="100" class="boxes" step=".1"><br>

                <input type="submit" name="upname" value="Update" class="ok"><br>
            </form>
        </div>
        <div id="canoc4">
            <form method="post">
                <label>Country Code</label><br>
                <input type="text" id="delcc" name="delcc" maxlength="3" class="boxes" required="required"><br>

                <input type="submit" name="delname" value="Delete" class="ok"><br>
            </form>
        </div>

        <br><br>

        <?php
            //create new connection
            $conn = mysqli_connect("localhost","root","","world");

            mysqli_set_charset($conn,"utf8");

            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            echo "<table> <tr> <th>Country Code</th> <th>Language</th> <th>Is it Official?</th> <th>Total Speakers(%)</th> </tr> <tr>";

            // ----------SELECT------------------------
            if(isset($_POST["selname"])){
                $searchvalue = $_POST["selcc"];
                $sql = "SELECT * FROM countrylanguage WHERE (CountryCode LIKE '%$searchvalue%')" ;
            }else{
                $sql = "SELECT * FROM countrylanguage";
            }
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo "<td>" . $row["CountryCode"]. "</td><td>" . $row["Language"]. "</td><td>" . $row["IsOfficial"]. "</td><td>". $row["Percentage"] ."</tr><tr>";
            }

            
            // ----------DELETE------------------------
            if(isset($_POST["delname"])){
                $sql_delete = "DELETE FROM countrylanguage WHERE CountryCode = '" . $_POST["delcc"] ."' ";
                mysqli_query($conn, $sql_delete);
                echo '<script type="text/javascript">;alert("Data Deleted.");window.location="pageLANG.php";</script>';
                $sql_delete -> free_result();
            }

            // ----------INSERT------------------------
            if(isset($_POST["inname"])){
                $sql_insert = "INSERT INTO countrylanguage (CountryCode,Language,IsOfficial,Percentage) VALUES ('"  . $_POST["incc"] . "', '" . $_POST["inlang"] . "', '". $_POST["inoff"] . "', ". $_POST["inttl"] . ")";
                mysqli_query($conn, $sql_insert);
                echo '<script type="text/javascript">;alert("Data Inserted.");window.location="pageLANG.php";</script>';
                $sql_insert -> free_result();
            }


            // ----------UPDATE------------------------
            if(isset($_POST["upname"])){
                $sql_update = "UPDATE countrylanguage SET CountryCode=" . $_POST["nupcc"] . ", Language='" . $_POST["nuplang"]. "', IsOfficial='" . $_POST["nupoff"]. "', Percentage='" . $_POST["nupttl"]. "' WHERE CountryCode=" . $_POST["oupcc"];
                mysqli_query($conn, $sql_update);
                echo '<script type="text/javascript">;alert("Data Updated.");window.location="pageLANG.php";</script>';
                $sql_update -> free_result();
            }


            echo "</tr></table>";
            $conn->close();
        ?>

        <script src="mainscript.js"></script>
    </body>

</html>