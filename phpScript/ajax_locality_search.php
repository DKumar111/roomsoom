<?php
include 'dbconnect.php';

$locality_value = $_GET['q'];


$sql = "SELECT * FROM `properties` WHERE locality LIKE '%{$locality_value}%' ";

$result = mysqli_query($conn, $sql) or die("SQL Query failed");
$output = "";
if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
        $output.="
       <a style='text-decoration: none;border: 1px solid rgb(218, 218, 218);border-radius: 7px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1), 0 6px 9px 0 rgba(0, 0, 0, 0.1)' href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'>
        <div  class='property_card_container'>
            <div style='overflow:hidden;border-radius:7px;' class='card_img_section'>
                <img width='100%' height='200px' src='asset/property_image/{$row['property_image']}' alt=''>
            </div>
            <div  class='card_desc_section'>
                <div style='display: flex;justify-content: space-between;align-items: center;padding: 0rem 1rem;border-bottom: 1px solid gray;' class=''>
                    <div  class=''>
                        <p style='color: rgb(59, 59, 59);'>Roomsoom {$row['locality']}</p>
                        <p style='color: rgb(129, 129, 129);'>PG in {$row['city']}</p>
                    </div>
                    <div class=''>
                        <div style='color: rgb(59, 59, 59);' class=''>{$row['gender']}</div>
                    </div>
                </div>
                <!-- <hr style='border: 1px solid gray;'> -->
                <div style='display: flex;justify-content: space-between;align-items: center;padding: 0.5rem 1rem;' class=''>
                    <div class=''>
                        <div style='color: rgb(129, 129, 129);' class=''>Rent starts at</div>
                        <div style='color: rgb(59, 59, 59);font-weight: bold;' class=''><span style='padding-right:0.5rem;'><i class='fa-solid fa-indian-rupee-sign'></i></span>{$row['solo_room_price']}*</div>
                    </div>
                    <div class=''>
                        <div style='color: rgb(59, 59, 59);' class=''>{$row['discount']}</div>
                    </div>
                </div>
            </div>
        </div>
    </a>
        ";
    }

    mysqli_close($conn);

    echo $output;
}else{
    echo "<h2>No Record Found</h2>";
}

?>.