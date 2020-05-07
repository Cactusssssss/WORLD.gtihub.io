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
        <h2>COUNTRY Table</h2>

        <button onclick="opcl1()">INSERT</button>
        <button onclick="opcl2()">SELECT</button>
        <button onclick="opcl3()">UPDATE</button>
        <button onclick="opcl4()">DELETE</button>
        
        <div id="canoc1">
            <form method="post">
                <label>Country Code</label><br>
                <input type="text" id="incc" name="incc" minlength="3" maxlength="3" class="boxes" required="required"><br>

                <label>Country Name</label><br>
                <input type="text" id="inname" name="inname" maxlength="50" class="boxes"><br>

                <label>Continent</label><br>
                <input type="text" id="incon" name="incon" maxlength="20" class="boxes"><br>

                <label>Region</label><br>
                <input type="text" id="inreg" name="inreg" maxlength="30" class="boxes"><br>

                <label>Surface Area</label><br>
                <input type="number" id="insur" name="insur" min="1" max="9999999999" maxlength="10" class="boxes"><br>

                <label>Independence Year</label><br>
                <input type="number" id="inindep" name="inindep" min="1000" max="9999" maxlength="4" class="boxes"><br>

                <label>Population</label><br>
                <input type="number" id="inpop" name="inpop" min="1" max="1439323776" maxlength="10" class="boxes"><br>

                <label>Life Expectancy</label><br>
                <input type="number" id="inlif" name="inlif" min="0" max="200" maxlength="3" step=".1" class="boxes"><br>

                <label>GNP</label><br>
                <input type="number" id="ingnp" name="ingnp" min="1000" max="9999" maxlength="4" class="boxes"><br>

                <label>GNPold</label><br>
                <input type="number" id="ingnpo" name="ingnpo" min="1000" max="9999" maxlength="4" class="boxes"><br>

                <label>Local Name</label><br>
                <input type="text" id="inlcl" name="inlcl" maxlength="100" class="boxes"><br>

                <label>Government</label><br>
                <input type="text" id="ingov" name="ingov" maxlength="20" class="boxes"><br>

                <label>Head of State</label><br>
                <input type="text" id="inhos" name="inhos" maxlength="100" class="boxes"><br>

                <label>Number of Capitals</label><br>
                <input type="number" id="incaps" name="incaps" min="1" max="9999" maxlength="4" class="boxes"><br>

                <label>Country Code(ISO-3166 ALpha 2 Format)</label><br>
                <input type="text" id="incc2" name="incc2" minlength="3" maxlength="3" class="boxes"><br>

                <input type="submit" name="subinname" value="Insert" class="ok"><br>
            </form>
        </div>

        <div id="canoc2">
            <form method="post">
                <label>Country Code</label><br>
                <input type="text" id="selcc" name="selcc" maxlength="3" class="boxes"><br>

                <input type="submit" name="selname" value="Select" target="_blank" class="ok"><br>
            </form>
        </div>

        <div id="canoc3">
            <form method="post">
                <label>Country Code(Old)</label><br>
                <input type="text" id="oupcc" name="oupcc" minlength="3" maxlength="3" class="boxes" required="required"><br>

                <label>Country Code(New)</label><br>
                <input type="text" id="nupcc" name="nupcc" minlength="3" maxlength="3" class="boxes" required="required"><br>

                <label>Country Name(New)</label><br>
                <input type="text" id="nupname" name="nupname" maxlength="50" class="boxes"><br>

                <label>Continent(New)</label><br>
                <input type="text" id="nupcon" name="nupcon" maxlength="20" class="boxes"><br>

                <label>Region(New)</label><br>
                <input type="text" id="nupreg" name="nupreg" maxlength="30" class="boxes"><br>

                <label>Surface Area(New)</label><br>
                <input type="number" id="nupsur" name="nupsur" min="1" max="9999999999" maxlength="10" class="boxes"><br>

                <label>Independence Year(New)</label><br>
                <input type="number" id="nupindep" name="nupindep" min="1000" max="9999" maxlength="4" class="boxes"><br>

                <label>Population(New)</label><br>
                <input type="number" id="nuppop" name="nuppop" min="1" max="1439323776" maxlength="10" class="boxes"><br>

                <label>Life Expectancy(New)</label><br>
                <input type="number" id="nuplif" name="nuplif" min="0" max="200" maxlength="3" step=".1" class="boxes"><br>

                <label>GNP(New)</label><br>
                <input type="number" id="nupgnp" name="nupgnp" min="1000" max="9999" maxlength="4" class="boxes"><br>

                <label>GNPold(New)</label><br>
                <input type="number" id="nupgnpo" name="nupgnpo" min="1000" max="9999" maxlength="4" class="boxes"><br>

                <label>Local Name(New)</label><br>
                <input type="text" id="nuplcl" name="nuplcl" maxlength="100" class="boxes"><br>

                <label>Government(New)</label><br>
                <input type="text" id="nupgov" name="nupgov" maxlength="20" class="boxes"><br>

                <label>Head of State(New)</label><br>
                <input type="text" id="nuphos" name="nuphos" maxlength="100" class="boxes"><br>

                <label>Number of Capitals(New)</label><br>
                <input type="number" id="nupcaps" name="nupcaps" min="1" max="9999" maxlength="4" class="boxes"><br>

                <label>Country Code(ISO-3166 ALpha 2 Format)(New)</label><br>
                <input type="text" id="nupcc2" name="nupcc2" minlength="3" maxlength="3" class="boxes"><br>

            <input type="submit" name="upname" value="Update" class="ok"><br>
            </form>
        </div>

        <div id="canoc4">
            <form method="post">
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
            echo "<table> <tr> <th>Country Code</th> <th>Country Name</th> <th>Continent</th> <th>Region</th> <th>Surface Area</th> <th>Independence Year</th> <th>Population</th> <th>Life Expectancy</th> <th>GNP</th> <th>Old GNP</th> <th>Local Name</th> <th>Government</th> <th>Head of State</th> <th>Number of Capitals</th> <th>Country Code(2)</th> </tr> <tr>";
           
            // ----------SELECT------------------------
            if(isset($_POST["selname"])){
                    $searchvalue = $_POST["selcc"];
                    $sql = "SELECT * FROM country WHERE (Code LIKE '%$searchvalue%')" ;
            }else{
                    $sql = "SELECT * FROM country";
            }
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                    echo "<td>" . $row["Code"]. "</td><td>" . $row["Name"]. "</td><td>" . $row["Continent"] . "</td><td>". $row["Region"] . "</td><td>". $row["SurfaceArea"] . "</td><td>". $row["IndepYear"] . "</td><td>". $row["Population"] . "</td><td>". $row["LifeExpectancy"] . "</td><td>". $row["GNP"] . "</td><td>". $row["GNPold"] . "</td><td>". $row["LocalName"] . "</td><td>". $row["GovernmentType"] . "</td><td>". $row["StateHead"] . "</td><td>". $row["Capital"] . "</td><td>" . $row["Code2"] ."</tr><tr>";
            }
            


            // ----------DELETE------------------------
            if(isset($_POST["delname"])){
                $sql_delete = "DELETE FROM country WHERE ID = '" . $_POST["delcc"] ."' ";
                mysqli_query($conn, $sql_delete);
                echo '<script type="text/javascript">;alert("Data Deleted.");window.location="pageCOUNTRY.php";</script>';
                $sql_delete -> free_result();
            }

            // ----------INSERT------------------------
            if(isset($_POST["subinname"])){
                $sql_insert = "INSERT INTO country (Code, Name, Continent, Region, SurfaceArea, IndepYear, Population, LifeExpectancy, GNP, GNPold, LocalName, GovernmentType, StateHead, Capital, Code2) VALUES ("  . $_POST["incc"] . ", '" . $_POST["inname"] . "', '". $_POST["incon"] . "', '". $_POST["inreg"] . "', ". $_POST["insur"] . $_POST["inindep"] . ", '" . $_POST["inpop"] . "', '". $_POST["inlif"] . "', '". $_POST["ingnp"] . "', ". $_POST["ingnpo"] . $_POST["inlcl"] . ", '" . $_POST["ingov"] . "', '". $_POST["inhos"] . "', '". $_POST["incaps"] . "', ". $_POST["incc2"] . ")";
                mysqli_query($conn, $sql_insert);
                echo '<script type="text/javascript">;alert("Data Inserted.");window.location="pageCOUNTRY.php";</script>';
                $sql_insert -> free_result();
            }


            // ----------UPDATE------------------------
            if(isset($_POST["upname"])){
                $sql_update = "UPDATE country SET Code=" . $_POST["nupcc"] . ", Name=" . $_POST["nupname"] . ", Continent='" . $_POST["nupcon"]. "', Region='" . $_POST["nupreg"]. "', SurfaceArea='" . $_POST["nupsur"]. "', IndepYear='" . $_POST["nupindep"]. "', Population='" . $_POST["nuppop"]. "', LifeExectancy='" . $_POST["nuplif"]. "', GNP='" . $_POST["nupgnp"]. "', GNPold='" . $_POST["nupgnpo"]. "', LocalName='" . $_POST["nuplcl"]. "', GovernmentType='" . $_POST["nupgov"]. "', StateHead='" . $_POST["nuphos"]. "', Capital='" . $_POST["nupcaps"]. "', Code2='" . $_POST["nupcc2"]. "' WHERE ID=" . $_POST["oupcc"];
                mysqli_query($conn, $sql_update);
                echo '<script type="text/javascript">;alert("Data Updated.");window.location="pageCOUNTRY.php";</script>';
                $sql_update -> free_result();
            }


            echo "</tr></table>";
            $conn->close();
        ?>


        <script src="mainscript.js"></script>
    </body>

</html>