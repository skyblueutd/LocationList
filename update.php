<?php
include "dbopen.php";

if(isset($_POST["country"])){
    $countryid=$_POST["country"];
    $statequery="select * from location where parent_id=$countryid and location_type=1";
    echo $statequery;
    $run_query=mysqli_query($con,$statequery);
    if(mysqli_num_rows($run_query)>0){
        while($row=$run_query->fetch_assoc()){
            $id=$row["location_id"];
            $name=$row["name"];
            echo "<option value='$id'>$name</option>";
        }
    }
}

if(isset($_POST["state"])){
    $stateid=$_POST["state"];
    $cityquery="select * from location where parent_id=$stateid and location_type=2";
    echo $cityquery;
    $run_query=mysqli_query($con,$cityquery);
    if(mysqli_num_rows($run_query)>0){
        while($row=$run_query->fetch_assoc()){
            $id=$row["location_id"];
            $name=$row["name"];
            echo "<option value='$id'>$name</option>";
        }
    }
}


?>

