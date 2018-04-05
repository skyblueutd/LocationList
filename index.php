<!DOCTYPE html>
<?php
include "dbopen.php";
?>

<html>
    <head>
        <title>Location list </title>
        <style>
        .container{
            position:relative;
            left: 400px;
            top: 100px;
            width: 480px;
            height: 250px;
            padding-left:20px;
            border: 3px solid #73AD21;
        }
        #title{
            position: relative;
            left: 550px;
            top:50px;
        }
        .row{
            margin-top:40px;
        }
        .selector{
            width:300px;
            margin-right:20px;
            float:right;
            font-size:16px;
        }
        .labels{
            color:green;
            font-size:16px;
        }

        </style>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type=text/javascript src="HW5.js"></script>
    </head>
    <body>
        <h2 id='title'> Location List</h2>
        <div class="container">
            <div class="row">
                <label class="labels">Country</label>
                <select name="country" id="country" class="selector">
                    <option value="">Choose Country</option>

                    <?php
                    $country_sql="SELECT * FROM location where location_type=0";
                    $countries=mysqli_query($con,$country_sql);
                    if($countries==FALSE){
                        echo "query failed";
                    }
                    $countrynum=$countries->num_rows;
                    echo $countrynum;
                    if($countrynum>0){
                        while($row=$countries->fetch_assoc()){
                            echo '<option value='.$row["location_id"].'>'.$row["name"].'</option>';
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="row">
                <label class="labels">State</label>
                <select name="state" id="state" class="selector">
                    <option value="">Choose State</option>
                </select>    
            </div>

            <div class="row">
                <label class="labels">City</label>
                <select name="city" id="city" class="selector">
                    <option value="">Choose City</option>
                </select>    
            </div>

        </div>
    </body>
</html>
