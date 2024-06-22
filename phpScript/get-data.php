<?php

include 'dbconnect.php';
//  $conn = mysqli_connect("localhost","root","","testing") or die("Connection failed");

 if(isset($_POST['range1']) && isset($_POST['range2'])){
    $min = $_POST['range1'];
    $max = $_POST['range2'];

    $sql = "SELECT * FROM `properties` WHERE solo_room_price BETWEEN {$min} AND {$max}";
 }else{
    $min = '';
    $max = '';
    $sql = "SELECT * FROM `properties` ORDER BY s_id asc";
 }

  $result = mysqli_query($conn,$sql) or die("Query Unsuccessful.");
  $output = '';

  if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
            $output .= "
      <a style='text-decoration: none;border: 1px solid rgb(218, 218, 218);border-radius: 7px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 3px 0 rgba(0, 0, 0, 0.1)' href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'>
        <div  class='property_card_container'>
            <div style='overflow:hidden;border-radius:7px;' class='card_img_section'>
                <img width='100%' height='200px' src='asset/property_image/{$row['property_image']}' alt=''>
            </div>
            <div  class='card_desc_section'>
                <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;border-bottom: 1px solid gray;' class=''>
                    <div style='display:flex;flex-direction:column;gap:0.4rem;' class=''>
                        <p style='color: rgb(59, 59, 59);font-size:1rem;font-weight:bold;'>Roomsoom {$row['locality']}</p>
                        <p style='color: rgb(129, 129, 129);font-size:0.8rem;'>PG in {$row['city']}</p>
                    </div>
                    <div class=''>
                        <div style='color: rgb(59, 59, 59);padding: 0.9rem;color: rgb(53 52 52);background-color: #edc2af;clip-path: xywh(0 5px 100% 75% round 15% 0);font-weight: 700;font-size: 0.7rem;' class=''>{$row['gender']}</div>
                    </div>
                </div>
                <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;' class=''>
                    <div class=''>
                        <div style='color: rgb(129, 129, 129);font-size:0.7rem;' class=''>Rent starts at</div>
                        <div style='color: rgb(59, 59, 59);font-weight: bold;' class=''><span style='padding-right:0.5rem;'><i class='fa-solid fa-indian-rupee-sign'></i></span>{$row['solo_room_price']}*</div>
                    </div>
                    <div class=''>
                        <div style='color: rgb(59, 59, 59);' class=''><span class='discount_section'> {$row['discount']}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </a>
      ";
    }

    echo $output;
  }else{
    echo "<h2>No Record Found.</h2>"; exit;
    
  }

?>
