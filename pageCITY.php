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
        <h2>CITY Table</h2>

        <button onclick="opcl1()">INSERT</button>
        <button onclick="opcl2()">SELECT</button>
        <button onclick="opcl3()">UPDATE</button>
        <button onclick="opcl4()">DELETE</button>


        <div id="canoc1">
            <form method="post">
                <label>ID</label><br>
                <input type="number" id="inid" name="inid" min="1" max="9999" maxlength="4" class="boxes" required="required"><br>

                <label>Country Name</label><br>
                <input type="text" id="inname" name="inname" maxlength="35" class="boxes"><br>

                <label>Country Code</label><br>
                <input type="text" id="incc" name="incc" min="3" maxlength="3" class="boxes" required="required"><br>

                <label>District</label><br>
                <input type="text" id="indis" name="indis" maxlength="40" class="boxes"><br>

                <label>Population</label><br>
                <input type="number" id="inpop" name="inpop" min="1" max="1439323776" maxlength="10" class="boxes"><br>

                <input type="submit" name="subinname" value="Insert" class="ok"><br>
            </form>
        </div>
        <div id="canoc2">
            <form method="post">
                <label>ID</label><br>
                <input type="number" name="selid" min="1" max="9999" maxlength="4" class="boxes"><br>

                <input type="submit" name="selname" value="Select" target="_blank" class="ok"><br>
            </form>
        </div>
        <div id="canoc3">
            <form method="post">
                <label>ID(Old)</label><br>
                <input type="number" id="oupid" name="oupid" min="1" max="9999" maxlength="4" class="boxes" required="required"><br>

                <label>ID(New)</label><br>
                <input type="number" id="nupid" name="nupid" min="1" max="9999" maxlength="4" class="boxes" required="required"><br>

                <label>Country Name(New)</label><br>
                <input type="text" id="nupname" name="nupname" maxlength="35" class="boxes"><br>

                <label>Country Code(New)</label><br>
                <input type="text" id="nupcc" name="nupcc" min="3" maxlength="3" class="boxes" required="required"><br>

                <label>District(New)</label><br>
                <input type="text" id="nupdis" name="nupdis" maxlength="40" class="boxes"><br>

                <label>Population(New)</label><br>
                <input type="number" id="nuppop" name="nuppop" min="1" max="1439323776" maxlength="10" class="boxes"><br>

                <input type="submit" name="upname" value="Update" class="ok"><br>
            </form>
        </div>
        <div id="canoc4">
            <form method="post">
                <label>ID</label><br>
                <input type="number" id="delid" name="delid" min="1" max="9999" maxlength="4" class="boxes" required="required"><br>

                <label>Country Code</label><br>
                <input type="text" id="delcc" name="delcc" min="3" maxlength="3" class="boxes" required="required"><br>

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
            echo "<table> <tr> <th>ID</th> <th>Country Name</th> <th>Country Code</th> <th>District</th> <th>Population</th> </tr> <tr>";

            // ----------SELECT------------------------
            if(isset($_POST["selname"])){
                $searchvalue = $_POST["selid"];
                $sql = "SELECT * FROM city WHERE (ID LIKE '%$searchvalue%')" ;
            }else{
                $sql = "SELECT * FROM city";
            }
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                echo "<td>" . $row["ID"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["CountryCode"]. "</td><td>". $row["District"] . "</td><td>". $row["Population"] . "</tr><tr>";
            }

            // ----------DELETE------------------------
            if(isset($_POST["delname"])){
                $sql_delete = "DELETE FROM city WHERE ID = '" . $_POST["delid"] ."' AND CountryCode = '" . $_POST["delcc"] ."'";
                mysqli_query($conn, $sql_delete);
                echo '<script type="text/javascript">;alert("Data Deleted.");window.location="pageCITY.php";</script>';
                $sql_delete -> free_result();
            }

            // ----------INSERT------------------------
            if(isset($_POST["subinname"])){
                $sql_insert = "INSERT INTO city (ID,Name,CountryCode,District,Population) VALUES ("  . $_POST["inid"] . ", '" . $_POST["inname"] . "', '". $_POST["incc"] . "', '". $_POST["indis"] . "', ". $_POST["inpop"] . ")";
                mysqli_query($conn, $sql_insert);
                echo '<script type="text/javascript">;alert("Data Inserted.");window.location="pageCITY.php";</script>';
                $sql_insert -> free_result();
            }


            // ----------UPDATE------------------------
            if(isset($_POST["upname"])){
                $sql_update = "UPDATE city SET ID=" . $_POST["nupid"] . ", Name=" . $_POST["nupname"] . ", CountryCode='" . $_POST["nupcc"]. "', District='" . $_POST["nupdis"]. "', Population='" . $_POST["nuppop"]. "' WHERE ID=" . $_POST["oupid"];
                mysqli_query($conn, $sql_update);
                echo '<script type="text/javascript">;alert("Data Updated.");window.location="pageCITY.php";</script>';
                $sql_update -> free_result();
            }


            echo "</tr></table>";
            $conn->close();
        ?>


        <script src="mainscript.js"></script>
    </body>

</html>