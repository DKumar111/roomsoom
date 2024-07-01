<?php
// DATABASE CONNECTION
include 'dbconnect.php';


//getting all properties
function get_properties(){
    global $conn;
    $select_query = "SELECT * FROM `properties` ";
    $result_query = mysqli_query($conn, $select_query);
    while($row = mysqli_fetch_assoc($result_query)){
        $s_id = $row['s_id'];
        $city = $row['city'];
        $locality = $row['locality'];
        $property_type = $row['property_type'];
        $gender = $row['gender'];
        $discount = $row['discount'];
        $rent_price = $row['rent_price'];
        $property_image = $row['property_image'];
        $property_image2 = $row['property_image2'];
        $property_image3 = $row['property_image3'];
        
        echo "
         <a style='text-decoration: none;border: 1px solid rgb(218, 218, 218);border-radius: 7px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 3px 0 rgba(0, 0, 0, 0.1)'
                         href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'>
                         <div class='property_card_container'>
                             <div style='overflow:hidden;border-radius:7px;' class='card_img_section'>
                                 <div class='slider'>
                                     <div class='inner'>
                                         <div class='item active'>
                                             <div class=' image'>
                                                <img width='100%' height='200px' src='asset/property_image/{$row['property_image']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item'>
                                             <div class='image'>
                                                 <img width='100%' height='200px' src='asset/property_image/{$row['property_image2']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item '>
                                             <div class=' image'>
                                               <img width='100%' height='200px' src='asset/property_image/{$row['property_image3']}' alt=''>
                                             </div>
                                         </div>
                                     </div>
                                     <div class='left_right_btn'>
                                     <button  id='Previous_button' class='button'  class='prev'>&lt;</button>
                                     <button  id='Next_button'     class='button' class='next'>&gt;</button>
                                     </div>
                                    <p class='addtowishlist' data-data='{$row['s_id']}'><i class='fa-regular fa-heart'></i></p>
                                 </div>
                             </div>
                             <div class='card_desc_section'>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;border-bottom: 1px solid gray;' class=''>
                                        
                                     <div style='display:flex;flex-direction:column;gap:0.4rem;' class=''>
                                         <p style='color: rgb(59, 59, 59);font-size:1rem;font-weight:bold;'>Roomsoom {$row['locality']}
                                         </p>
                                         <p style='color: rgb(129, 129, 129);font-size:0.8rem;'>{$row['property_type']} in {$row['city']}</p>
                                     </div>
                                     <div class=''>
                                         <div style='color: rgb(59, 59, 59);padding: 0.9rem;color: rgb(53 52 52);background-color: #edc2af;clip-path: xywh(0 5px 100% 75% round 15% 0);font-weight: 700;font-size: 0.7rem;'
                                             class=''>{$row['gender']}</div>
                                     </div>
                                 </div>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;'
                                     class=''>
                                     <div class=''>
                                         <div style='color: rgb(129, 129, 129);font-size:0.7rem;' class=''>Rent starts at</div>
                                         <div style='color: rgb(59, 59, 59);font-weight: bold;' class=''><span
                                                 style='padding-right:0.5rem;'><i
                                                     class='fa-solid fa-indian-rupee-sign'></i></span>{$row['rent_price']}*</div>
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
}

function sort_property(){
    global $conn;

    if(isset($_POST['low_to_high'])){
        $sort_sql = "SELECT * FROM `properties` ORDER BY 'twin_sharing_price','rent_price' ASC";
        $sql_to_high_result = mysqli_query($conn, $sort_sql);
        while($row = mysqli_fetch_assoc($sql_to_high_result)){
            $city = $row['city'];
            $locality = $row['locality'];
            $property_type = $row['property_type'];
            $twin_sharing_price = $row['twin_sharing_price'];
            $rent_price = $row['rent_price'];
            $property_image = $row['property_image'];
            
            echo "
             <a style='text-decoration: none;border: 1px solid rgb(218, 218, 218);border-radius: 7px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 3px 0 rgba(0, 0, 0, 0.1)'
                         href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'>
                         <div class='property_card_container'>
                             <div style='overflow:hidden;border-radius:7px;' class='card_img_section'>
                                 <div class='slider'>
                                     <div class='inner'>
                                         <div class='item active'>
                                             <div class=' image'>
                                                <img width='100%' height='200px' src='asset/property_image/{$row['property_image']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item'>
                                             <div class='image'>
                                                 <img width='100%' height='200px' src='asset/property_image/{$row['property_image2']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item '>
                                             <div class=' image'>
                                               <img width='100%' height='200px' src='asset/property_image/{$row['property_image3']}' alt=''>
                                             </div>
                                         </div>
                                     </div>
                                     <button id='Previous_button' class='button'  class='prev'>&lt;</button>
                                     <button id='Next_button'     class='button' class='next'>&gt;</button>
                                 </div>
                             </div>
                             <div class='card_desc_section'>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;border-bottom: 1px solid gray;'
                                     class=''>
                                     <div style='display:flex;flex-direction:column;gap:0.4rem;' class=''>
                                         <p style='color: rgb(59, 59, 59);font-size:1rem;font-weight:bold;'>Roomsoom {$row['locality']}
                                         </p>
                                         <p style='color: rgb(129, 129, 129);font-size:0.8rem;'>{$row['property_type']} in {$row['city']}</p>
                                     </div>
                                     <div class=''>
                                         <div style='color: rgb(59, 59, 59);padding: 0.9rem;color: rgb(53 52 52);background-color: #edc2af;clip-path: xywh(0 5px 100% 75% round 15% 0);font-weight: 700;font-size: 0.7rem;'
                                             class=''>{$row['gender']}</div>
                                     </div>
                                 </div>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;'
                                     class=''>
                                     <div class=''>
                                         <div style='color: rgb(129, 129, 129);font-size:0.7rem;' class=''>Rent starts at</div>
                                         <div style='color: rgb(59, 59, 59);font-weight: bold;' class=''><span
                                                 style='padding-right:0.5rem;'><i
                                                     class='fa-solid fa-indian-rupee-sign'></i></span>{$row['rent_price']}*</div>
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
    }
    elseif (isset($_POST['high_to_low'])) {
        $sort_to_low_sql = "SELECT * FROM `properties` ORDER BY 'twin_sharing_price','rent_price' DESC";
        $result_to_low_query = mysqli_query($conn, $sort_to_low_sql);

        while($row = mysqli_fetch_assoc($result_to_low_query)){
            $city = $row['city'];
            $locality = $row['locality'];
            $property_type = $row['property_type'];
            $twin_sharing_price = $row['twin_sharing_price'];
            $rent_price = $row['rent_price'];
            $property_image = $row['property_image'];
            
            echo "
             <a style='text-decoration: none;border: 1px solid rgb(218, 218, 218);border-radius: 7px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 3px 0 rgba(0, 0, 0, 0.1)'
                         href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'>
                         <div class='property_card_container'>
                             <div style='overflow:hidden;border-radius:7px;' class='card_img_section'>
                                 <div class='slider'>
                                     <div class='inner'>
                                         <div class='item active'>
                                             <div class=' image'>
                                                <img width='100%' height='200px' src='asset/property_image/{$row['property_image']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item'>
                                             <div class='image'>
                                                 <img width='100%' height='200px' src='asset/property_image/{$row['property_image2']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item '>
                                             <div class=' image'>
                                               <img width='100%' height='200px' src='asset/property_image/{$row['property_image3']}' alt=''>
                                             </div>
                                         </div>
                                     </div>
                                     <button id='Previous_button' class='button'  class='prev'>&lt;</button>
                                     <button id='Next_button'     class='button' class='next'>&gt;</button>
                                 </div>
                             </div>
                             <div class='card_desc_section'>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;border-bottom: 1px solid gray;'
                                     class=''>
                                     <div style='display:flex;flex-direction:column;gap:0.4rem;' class=''>
                                         <p style='color: rgb(59, 59, 59);font-size:1rem;font-weight:bold;'>Roomsoom {$row['locality']}
                                         </p>
                                         <p style='color: rgb(129, 129, 129);font-size:0.8rem;'>{$row['property_type']} in {$row['city']}</p>
                                     </div>
                                     <div class=''>
                                         <div style='color: rgb(59, 59, 59);padding: 0.9rem;color: rgb(53 52 52);background-color: #edc2af;clip-path: xywh(0 5px 100% 75% round 15% 0);font-weight: 700;font-size: 0.7rem;'
                                             class=''>{$row['gender']}</div>
                                     </div>
                                 </div>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;'
                                     class=''>
                                     <div class=''>
                                         <div style='color: rgb(129, 129, 129);font-size:0.7rem;' class=''>Rent starts at</div>
                                         <div style='color: rgb(59, 59, 59);font-weight: bold;' class=''><span
                                                 style='padding-right:0.5rem;'><i
                                                     class='fa-solid fa-indian-rupee-sign'></i></span>{$row['rent_price']}*</div>
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
    }
}


function get_searched_result(){
    global $conn;
    if(isset($_GET['search_property'])){
        $get_city = $_GET['city'];
        $search_query = "SELECT * FROM `properties` WHERE city like '%$get_city%'";
        $result_query = mysqli_query($conn, $search_query);
        $num_of_rows = mysqli_num_rows($result_query);
        if($num_of_rows==0){
            echo "<h2 class='zero_properties'>No Result Found</h2>";
        }

        while($row = mysqli_fetch_assoc($result_query)){
            $s_id = $row['s_id'];
            $city = $row['city'];
            $locality = $row['locality'];
            $property_type = $row['property_type'];
            $rent_price = $row['rent_price'];
            $property_image = $row['property_image'];

            echo "
             <a style='text-decoration: none;border: 1px solid rgb(218, 218, 218);border-radius: 7px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 3px 0 rgba(0, 0, 0, 0.1)'
                         href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'>
                         <div class='property_card_container'>
                             <div style='overflow:hidden;border-radius:7px;' class='card_img_section'>
                                 <div class='slider'>
                                     <div class='inner'>
                                         <div class='item active'>
                                             <div class=' image'>
                                                <img width='100%' height='200px' src='asset/property_image/{$row['property_image']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item'>
                                             <div class='image'>
                                                 <img width='100%' height='200px' src='asset/property_image/{$row['property_image2']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item '>
                                             <div class=' image'>
                                               <img width='100%' height='200px' src='asset/property_image/{$row['property_image3']}' alt=''>
                                             </div>
                                         </div>
                                     </div>
                                     <button id='Previous_button' class='button'  class='prev'>&lt;</button>
                                     <button id='Next_button'     class='button' class='next'>&gt;</button>
                                 </div>
                             </div>
                             <div class='card_desc_section'>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;border-bottom: 1px solid gray;'
                                     class=''>
                                     <div style='display:flex;flex-direction:column;gap:0.4rem;' class=''>
                                         <p style='color: rgb(59, 59, 59);font-size:1rem;font-weight:bold;'>Roomsoom {$row['locality']}
                                         </p>
                                         <p style='color: rgb(129, 129, 129);font-size:0.8rem;'>{$row['property_type']} in {$row['city']}</p>
                                     </div>
                                     <div class=''>
                                         <div style='color: rgb(59, 59, 59);padding: 0.9rem;color: rgb(53 52 52);background-color: #edc2af;clip-path: xywh(0 5px 100% 75% round 15% 0);font-weight: 700;font-size: 0.7rem;'
                                             class=''>{$row['gender']}</div>
                                     </div>
                                 </div>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;'
                                     class=''>
                                     <div class=''>
                                         <div style='color: rgb(129, 129, 129);font-size:0.7rem;' class=''>Rent starts at</div>
                                         <div style='color: rgb(59, 59, 59);font-weight: bold;' class=''><span
                                                 style='padding-right:0.5rem;'><i
                                                     class='fa-solid fa-indian-rupee-sign'></i></span>{$row['rent_price']}*</div>
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
    }
}

function search_by_city(){
    global $conn;

    if(isset($_GET['city'])){
        $city_result = $_GET['city'];
        $sql = "SELECT * FROM `properties` WHERE city LIKE '%{$city_result}%' ";
        $sql_result = mysqli_query($conn , $sql);
        $num_count = mysqli_num_rows($sql_result);
        if($num_count == 0){
            echo "<h2>No Result Found</h2>";
        }

        while($row = mysqli_fetch_assoc($sql_result)){
            $s_id = $row['s_id'];
            $city = $row['city'];
            $locality = $row['locality'];
            $property_type = $row['property_type'];
            $gender = $row['gender'];
            $rent_price = $row['rent_price'];
            $property_image = $row['property_image'];

            echo "
             <a style='text-decoration: none;border: 1px solid rgb(218, 218, 218);border-radius: 7px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 3px 0 rgba(0, 0, 0, 0.1)'
                         href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'>
                         <div class='property_card_container'>
                             <div style='overflow:hidden;border-radius:7px;' class='card_img_section'>
                                 <div class='slider'>
                                     <div class='inner'>
                                         <div class='item active'>
                                             <div class=' image'>
                                                <img width='100%' height='200px' src='asset/property_image/{$row['property_image']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item'>
                                             <div class='image'>
                                                 <img width='100%' height='200px' src='asset/property_image/{$row['property_image2']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item '>
                                             <div class=' image'>
                                               <img width='100%' height='200px' src='asset/property_image/{$row['property_image3']}' alt=''>
                                             </div>
                                         </div>
                                     </div>
                                     <button id='Previous_button' class='button'  class='prev'>&lt;</button>
                                     <button id='Next_button'     class='button' class='next'>&gt;</button>
                                 </div>
                             </div>
                             <div class='card_desc_section'>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;border-bottom: 1px solid gray;'
                                     class=''>
                                     <div style='display:flex;flex-direction:column;gap:0.4rem;' class=''>
                                         <p style='color: rgb(59, 59, 59);font-size:1rem;font-weight:bold;'>Roomsoom {$row['locality']}
                                         </p>
                                         <p style='color: rgb(129, 129, 129);font-size:0.8rem;'>{$row['property_type']} in {$row['city']}</p>
                                     </div>
                                     <div class=''>
                                         <div style='color: rgb(59, 59, 59);padding: 0.9rem;color: rgb(53 52 52);background-color: #edc2af;clip-path: xywh(0 5px 100% 75% round 15% 0);font-weight: 700;font-size: 0.7rem;'
                                             class=''>{$row['gender']}</div>
                                     </div>
                                 </div>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;'
                                     class=''>
                                     <div class=''>
                                         <div style='color: rgb(129, 129, 129);font-size:0.7rem;' class=''>Rent starts at</div>
                                         <div style='color: rgb(59, 59, 59);font-weight: bold;' class=''><span
                                                 style='padding-right:0.5rem;'><i
                                                     class='fa-solid fa-indian-rupee-sign'></i></span>{$row['rent_price']}*</div>
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
    }else{
        echo "no result";
    }
}

    //SECTOR WISE SEARCH
    function sector_wise_search(){
        global $conn;

        if(isset($_GET['locality'])){
            $city_result = $_GET['locality'];
            $sql = "SELECT * FROM `properties` WHERE locality LIKE '%{$city_result}%' ";
            $sql_result = mysqli_query($conn , $sql);
            $num_count = mysqli_num_rows($sql_result);
            if($num_count == 0){
                echo "<h2>No Result Found</h2>";
            }
    
            while($row = mysqli_fetch_assoc($sql_result)){
                $s_id = $row['s_id'];
                $city = $row['city'];
                $locality = $row['locality'];
                $property_type = $row['property_type'];
                $gender = $row['gender'];
                $rent_price = $row['rent_price'];
                $property_image = $row['property_image'];
                $property_image2 = $row['property_image2'];
                $property_image3 = $row['property_image3'];
    
                echo "
               <a style='text-decoration: none;border: 1px solid rgb(218, 218, 218);border-radius: 7px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 3px 0 rgba(0, 0, 0, 0.1)'
                         href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'>
                         <div class='property_card_container'>
                             <div style='overflow:hidden;border-radius:7px;' class='card_img_section'>
                                 <div class='slider'>
                                     <div class='inner'>
                                         <div class='item active'>
                                             <div class=' image'>
                                                <img width='100%' height='200px' src='asset/property_image/{$row['property_image']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item'>
                                             <div class='image'>
                                                 <img width='100%' height='200px' src='asset/property_image/{$row['property_image2']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item '>
                                             <div class=' image'>
                                               <img width='100%' height='200px' src='asset/property_image/{$row['property_image3']}' alt=''>
                                             </div>
                                         </div>
                                     </div>
                                     <button id='Previous_button' class='button'  class='prev'>&lt;</button>
                                     <button id='Next_button'     class='button' class='next'>&gt;</button>
                                 </div>
                             </div>
                             <div class='card_desc_section'>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;border-bottom: 1px solid gray;'
                                     class=''>
                                     <div style='display:flex;flex-direction:column;gap:0.4rem;' class=''>
                                         <p style='color: rgb(59, 59, 59);font-size:1rem;font-weight:bold;'>Roomsoom {$row['locality']}
                                         </p>
                                         <p style='color: rgb(129, 129, 129);font-size:0.8rem;'>{$row['property_type']} in {$row['city']}</p>
                                     </div>
                                     <div class=''>
                                         <div style='color: rgb(59, 59, 59);padding: 0.9rem;color: rgb(53 52 52);background-color: #edc2af;clip-path: xywh(0 5px 100% 75% round 15% 0);font-weight: 700;font-size: 0.7rem;'
                                             class=''>{$row['gender']}</div>
                                     </div>
                                 </div>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;'
                                     class=''>
                                     <div class=''>
                                         <div style='color: rgb(129, 129, 129);font-size:0.7rem;' class=''>Rent starts at</div>
                                         <div style='color: rgb(59, 59, 59);font-weight: bold;' class=''><span
                                                 style='padding-right:0.5rem;'><i
                                                     class='fa-solid fa-indian-rupee-sign'></i></span>{$row['rent_price']}*</div>
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
        }
    }
   

// SCRIPT FOR NEARBY SUGGESTION PROPERTY

function get_nearby_property(){
    global $conn;
    if(isset($_GET['property_id']) && isset($_GET['city'])){
        $p_id = $_GET['property_id'];
        $p_city = $_GET['city'];

        $nearby_sql = "SELECT * FROM `properties` WHERE city = '$p_city' ";
        $nearby_result = mysqli_query($conn , $nearby_sql);
        $num_count1 = mysqli_num_rows($nearby_result);

        if($num_count1 == 0){
            echo "<h2>No Result Found</h2>";
        }
        while($row = mysqli_fetch_assoc($nearby_result)){
            $s_id = $row['s_id'];
            $city = $row['city'];
            $locality = $row['locality'];
            $property_type = $row['property_type'];
            $gender = $row['gender'];
            $rent_price = $row['rent_price'];
            $property_image = $row['property_image'];
            $property_image2 = $row['property_image2'];
            $property_image3 = $row['property_image3'];
            if($s_id == $p_id) continue;

            echo "
            <a style='text-decoration: none;border: 1px solid rgb(218, 218, 218);border-radius: 7px; box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.1), 0 4px 3px 0 rgba(0, 0, 0, 0.1)'
                         href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'>
                         <div class='property_card_container'>
                             <div style='overflow:hidden;border-radius:7px;' class='card_img_section'>
                                 <div class='slider'>
                                     <div class='inner'>
                                         <div class='item active'>
                                             <div class=' image'>
                                                <img width='100%' height='200px' src='asset/property_image/{$row['property_image']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item'>
                                             <div class='image'>
                                                 <img width='100%' height='200px' src='asset/property_image/{$row['property_image2']}' alt=''>
                                             </div>
                                         </div>
                                         <div class='item '>
                                             <div class=' image'>
                                               <img width='100%' height='200px' src='asset/property_image/{$row['property_image3']}' alt=''>
                                             </div>
                                         </div>
                                     </div>
                                     <button id='Previous_button' class='button'  class='prev'>&lt;</button>
                                     <button id='Next_button'     class='button' class='next'>&gt;</button>
                                 </div>
                             </div>
                             <div class='card_desc_section'>
                             <div class='like_btn' id='like_Btn'><i id='icon' onclick='return like()' style='padding-left:1rem;' class='fa-regular fa-heart'></i></div>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;border-bottom: 1px solid gray;'
                                     class=''>
                                     <div style='display:flex;flex-direction:column;gap:0.4rem;' class=''>
                                         <p style='color: rgb(59, 59, 59);font-size:1rem;font-weight:bold;'>Roomsoom {$row['locality']}
                                         </p>
                                         <p style='color: rgb(129, 129, 129);font-size:0.8rem;'>{$row['property_type']} in {$row['city']}</p>
                                     </div>
                                     <div class=''>
                                         <div style='color: rgb(59, 59, 59);padding: 0.9rem;color: rgb(53 52 52);background-color: #edc2af;clip-path: xywh(0 5px 100% 75% round 15% 0);font-weight: 700;font-size: 0.7rem;'
                                             class=''>{$row['gender']}</div>
                                     </div>
                                 </div>
                                 <div style='display: flex;justify-content: space-between;align-items: center;padding: 1rem 1rem;'
                                     class=''>
                                     <div class=''>
                                         <div style='color: rgb(129, 129, 129);font-size:0.7rem;' class=''>Rent starts at</div>
                                         <div style='color: rgb(59, 59, 59);font-weight: bold;' class=''><span
                                                 style='padding-right:0.5rem;'><i
                                                     class='fa-solid fa-indian-rupee-sign'></i></span>{$row['rent_price']}*</div>
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
    
    }
}

?>