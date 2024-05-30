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
        $solo_room_price = $row['solo_room_price'];
        $property_image = $row['property_image'];
        $property_image2 = $row['property_image2'];
        $property_image3 = $row['property_image3'];
        
        echo "
        <div class='listing_colLayout__IVj18'>
        <div class='card_containerGrid__KnWKY card_container__i1o_z' id='onlyHide'>
            <div class='card_cardMain__HVzkv'>
                <div class='propThum'>
                    <div class='slick-slider slick-initialized' dir='ltr'>
                  
                        <div class='slick-list'>
                            <div class='slick-track'
                                style='width: 2212px; opacity: 1; transform: translate3d(-948px, 0px, 0px);'>
                                <div data-index='-1' tabindex='-1' class='slick-slide slick-cloned'
                                    aria-hidden='true' style='width: 316px;'>
                                    <div>
                                        <div class='card_thumbnail__iAMJV' tabindex='-1'
                                            style='width: 100%; display: inline-block;'>
                                            <div class='card_upcoming__ezcIg'>
                                                
                                            </div>
                                            <a
                                                href='property_details.php?property_id=$s_id&city=$city'>
                                                <img alt='$city' src='asset/property_image/$property_image'
                                                    width='600' height='600' decoding='async'
                                                    data-nimg='1' loading='lazy' style=''></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
                <div class='textMain'><a href=''>
                        <div class='card_propName__G6qT3'>
                            <h2>Roomsoom $locality, $city</h2>
                            <div class='card_city__IHjt6'>
                                <h4><img alt='locationpin'
                                       
                                        src='./asset/images/locationicon.svg' width='15'
                                        height='15' decoding='async' data-nimg='1' loading='lazy'
                                        style='color: transparent;'>$locality, <span style='font-size: 0.7rem; z-index: 1;'></span></h4>
                                        <span>$gender</span>
                                      
                            </div>
                        </div>
                        <div class='card_priceMain__09p_D'>
                            <div class='card_priceCard__pJnps'>
                                <h4>Rent Starting at</h4>
                                <h5><span class='card_start__0HNld'></span> Rs.
                                $solo_room_price<span>/mo*</span></h5>
                            </div>
                            <div></div>
                        </div>
                    </a></div>
            </div>
        </div>
        </div>
        ";
    }
}

function sort_property(){
    global $conn;

    if(isset($_POST['low_to_high'])){
        $sort_sql = "SELECT * FROM `properties` ORDER BY 'twin_sharing_price','solo_room_price' ASC";
        $sql_to_high_result = mysqli_query($conn, $sort_sql);
        while($row = mysqli_fetch_assoc($sql_to_high_result)){
            $city = $row['city'];
            $locality = $row['locality'];
            $property_type = $row['property_type'];
            $twin_sharing_price = $row['twin_sharing_price'];
            $solo_room_price = $row['solo_room_price'];
            $property_image = $row['property_image'];
            
            echo "
            <div class='listing_colLayout__IVj18'>
            <div class='card_containerGrid__KnWKY card_container__i1o_z' id='onlyHide'>
                <div class='card_cardMain__HVzkv'>
                    <div class='propThum'>
                        <div class='slick-slider slick-initialized' dir='ltr'>
                      
                            <div class='slick-list'>
                                <div class='slick-track'
                                    style='width: 2212px; opacity: 1; transform: translate3d(-948px, 0px, 0px);'>
                                    <div data-index='-1' tabindex='-1' class='slick-slide slick-cloned'
                                        aria-hidden='true' style='width: 316px;'>
                                        <div>
                                            <div class='card_thumbnail__iAMJV' tabindex='-1'
                                                style='width: 100%; display: inline-block;'>
                                                <div class='card_upcoming__ezcIg'>
                                                    
                                                </div><a
                                                    href='property_details.php?property_id=$s_id&city=$city'><img
                                                        alt='$city'
                                                        src='asset/property_image/$property_image'
                                                        width='600' height='600' decoding='async'
                                                        data-nimg='1' loading='lazy' style=''></a>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                           
                           
                        </div>
                    </div>
                    <div class='textMain'><a href=''>
                            <div class='card_propName__G6qT3'>
                                <h2>Roomsoom $locality, $city</h2>
                                <div class='card_city__IHjt6'>
                                    <h4><img alt='locationpin'
                                           
                                            src='./asset/images/locationicon.svg' width='15'
                                            height='15' decoding='async' data-nimg='1' loading='lazy'
                                            style='color: transparent;'>$locality, </h4>
                                            
                                </div>
                            </div>
                            <div class='card_priceMain__09p_D'>
                                <div class='card_priceCard__pJnps'>
                                    <h4>twin Sharing</h4>
                                    <h5><span class='card_start__0HNld'>Starting at </span> Rs.
                                    $twin_sharing_price<span>/mo*</span></h5>
                                </div>
                                <div class='card_priceCard__pJnps'>
                                    <h4>solo Room</h4>
                                    <h5><span class='card_start__0HNld'>Starting at </span> Rs.
                                    $solo_room_price<span>/mo*</span></h5>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
            ";
        }
    }
    elseif (isset($_POST['high_to_low'])) {
        $sort_to_low_sql = "SELECT * FROM `properties` ORDER BY 'twin_sharing_price','solo_room_price' DESC";
        $result_to_low_query = mysqli_query($conn, $sort_to_low_sql);

        while($row = mysqli_fetch_assoc($result_to_low_query)){
            $city = $row['city'];
            $locality = $row['locality'];
            $property_type = $row['property_type'];
            $twin_sharing_price = $row['twin_sharing_price'];
            $solo_room_price = $row['solo_room_price'];
            $property_image = $row['property_image'];
            
            echo "
            <div class='listing_colLayout__IVj18'>
            <div class='card_containerGrid__KnWKY card_container__i1o_z' id='onlyHide'>
                <div class='card_cardMain__HVzkv'>
                    <div class='propThum'>
                        <div class='slick-slider slick-initialized' dir='ltr'>
                      
                            <div class='slick-list'>
                                <div class='slick-track'
                                    style='width: 2212px; opacity: 1; transform: translate3d(-948px, 0px, 0px);'>
                                    <div data-index='-1' tabindex='-1' class='slick-slide slick-cloned'
                                        aria-hidden='true' style='width: 316px;'>
                                        <div>
                                            <div class='card_thumbnail__iAMJV' tabindex='-1'
                                                style='width: 100%; display: inline-block;'>
                                                <div class='card_upcoming__ezcIg'>
                                                    
                                                </div><a
                                                    href='property_details.php?property_id=$s_id&city=$city'><img
                                                        alt='$city'
                                                       
                                                        src='asset/property_image/$property_image'
                                                        width='600' height='600' decoding='async'
                                                        data-nimg='1' loading='lazy' style=''></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index='0' class='slick-slide' tabindex='-1' aria-hidden='true'
                                        style='outline: none; width: 316px;'>
                                        <div>
                                            <div class='card_thumbnail__iAMJV' tabindex='-1'
                                                style='width: 100%; display: inline-block;'>
                                                <div class='card_upcoming__ezcIg'>
                                                    
                                                </div><a
                                                    href='property_details.php?property_id=$s_id&city=$city'><img
                                                        alt='$city'
                                                       
                                                        src='asset/property_image/$property_image'
                                                        width='600' height='600' decoding='async'
                                                        data-nimg='1' loading='lazy' style=''></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index='1' class='slick-slide' tabindex='-1' aria-hidden='true'
                                        style='outline: none; width: 316px;'>
                                        <div>
                                            <div class='card_thumbnail__iAMJV' tabindex='-1'
                                                style='width: 100%; display: inline-block;'>
                                                <div class='card_upcoming__ezcIg'>
                                                    
                                                </div><a
                                                    href='property_details.php?property_id=$s_id&city=$city'><img
                                                        alt='$city'
                                                       
                                                        src='asset/property_image/$property_image'
                                                        width='600' height='600' decoding='async'
                                                        data-nimg='1' loading='lazy' style=''></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index='2' class='slick-slide slick-active slick-current'
                                        tabindex='-1' aria-hidden='false'
                                        style='outline: none; width: 316px;'>
                                        <div>
                                            <div class='card_thumbnail__iAMJV' tabindex='-1'
                                                style='width: 100%; display: inline-block;'>
                                                <div class='card_upcoming__ezcIg'>
                                                    
                                                </div><a
                                                    href='property_details.php?property_id=$s_id&city=$city'><img
                                                        alt='$city'
                                                       
                                                        src='asset/property_image/$property_image'
                                                        width='600' height='600' decoding='async'
                                                        data-nimg='1' loading='lazy' style=''></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index='3' tabindex='-1' class='slick-slide slick-cloned'
                                        aria-hidden='true' style='width: 316px;'>
                                        <div>
                                            <div class='card_thumbnail__iAMJV' tabindex='-1'
                                                style='width: 100%; display: inline-block;'>
                                                <div class='card_upcoming__ezcIg'>
                                                    
                                                </div><a
                                                    href='property_details.php?property_id=$s_id&city=$city'><img
                                                        alt='$city'
                                                       
                                                        src='asset/property_image/$property_image'
                                                        width='600' height='600' decoding='async'
                                                        data-nimg='1' loading='lazy' style=''></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index='4' tabindex='-1' class='slick-slide slick-cloned'
                                        aria-hidden='true' style='width: 316px;'>
                                        <div>
                                            <div class='card_thumbnail__iAMJV' tabindex='-1'
                                                style='width: 100%; display: inline-block;'>
                                                <div class='card_upcoming__ezcIg'>
                                                    
                                                </div><a
                                                    href='property_details.php?property_id=$s_id&city=$city'><img
                                                        alt='$city'
                                                       
                                                        src='asset/property_image/$property_image'
                                                        width='600' height='600' decoding='async'
                                                        data-nimg='1' loading='lazy' style=''></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div data-index='5' tabindex='-1' class='slick-slide slick-cloned'
                                        aria-hidden='true' style='width: 316px;'>
                                        <div>
                                            <div class='card_thumbnail__iAMJV' tabindex='-1'
                                                style='width: 100%; display: inline-block;'>
                                                <div class='card_upcoming__ezcIg'>
                                                    
                                                </div><a
                                                    href='property_details.php?property_id=$s_id&city=$city'><img
                                                        alt='$city'
                                                       
                                                        src='asset/property_image/$property_image'
                                                        width='600' height='600' decoding='async'
                                                        data-nimg='1' loading='lazy' style=''></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                    </div>
                    <div class='textMain'><a href=''>
                            <div class='card_propName__G6qT3'>
                                <h2>Roomsoom $locality, $city</h2>
                                <div class='card_city__IHjt6'>
                                    <h4><img alt='locationpin'
                                           
                                            src='./asset/images/locationicon.svg' width='15'
                                            height='15' decoding='async' data-nimg='1' loading='lazy'
                                            style='color: transparent;'>$locality, </h4>
                                            <span><img alt='locationpin'
                                           
                                </div>
                            </div>
                            <div class='card_priceMain__09p_D'>
                                <div class='card_priceCard__pJnps'>
                                    <h4>twin Sharing</h4>
                                    <h5><span class='card_start__0HNld'>Starting at </span> Rs.
                                    $twin_sharing_price<span>/mo*</span></h5>
                                </div>
                                <div class='card_priceCard__pJnps'>
                                    <h4>solo Room</h4>
                                    <h5><span class='card_start__0HNld'>Starting at </span> Rs.
                                    $solo_room_price<span>/mo*</span></h5>
                                </div>
                            </div>
                        </a></div>
                </div>
            </div>
        </div>
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
            $solo_room_price = $row['solo_room_price'];
            $property_image = $row['property_image'];

            echo "
            <div class='listing_colLayout__IVj18'>
            <div class='card_containerGrid__KnWKY card_container__i1o_z' id='onlyHide'>
                <div class='card_cardMain__HVzkv'>
                <div class='propThum'>
                    <div class='slick-slider slick-initialized' dir='ltr'>
                  
                        <div class='slick-list'>
                            <div class='slick-track'
                                style='width: 2212px; opacity: 1; transform: translate3d(-948px, 0px, 0px);'>
                                <div data-index='-1' tabindex='-1' class='slick-slide slick-cloned'
                                    aria-hidden='true' style='width: 316px;'>
                                    <div>
                                        <div class='card_thumbnail__iAMJV' tabindex='-1'
                                            style='width: 100%; display: inline-block;'>
                                            <div class='card_upcoming__ezcIg'>
                                                
                                            </div><a
                                                href='property_details.php?property_id=$s_id&city=$city'><img
                                                    alt='$city'
                                                   
                                                    src='asset/property_image/$property_image'
                                                    width='600' height='600' decoding='async'
                                                    data-nimg='1' loading='lazy' style=''></a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
                <div class='textMain'><a href=''>
                        <div class='card_propName__G6qT3'>
                            <h2>Roomsoom $locality, $city</h2>
                            <div class='card_city__IHjt6'>
                                <h4><img alt='locationpin'
                                       
                                        src='./asset/images/locationicon.svg' width='15'
                                        height='15' decoding='async' data-nimg='1' loading='lazy'
                                        style='color: transparent;'>$locality, </h4>
                                       
                            </div>
                        </div>
                        <div class='card_priceMain__09p_D'>
                            <div class='card_priceCard__pJnps'>
                                <h4>Rent Starting at</h4>
                                <h5><span class='card_start__0HNld'> </span> Rs.
                                $solo_room_price<span>/mo*</span></h5>
                            </div>
                        </div>
                    </a></div>
            </div>
            </div>
            </div>
            ";
        }
    }
}

function search_by_city(){
    global $conn;

    if(isset($_GET['city'])){
        $city_result = $_GET['city'];
        $sql = "SELECT * FROM `properties` WHERE city = '$city_result' ";
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
            $solo_room_price = $row['solo_room_price'];
            $property_image = $row['property_image'];

            echo "
            <div class='listing_colLayout__IVj18'>
            <div class='card_containerGrid__KnWKY card_container__i1o_z' id='onlyHide'>
                <div class='card_cardMain__HVzkv'>
                <div class='propThum'>
                    <div class='slick-slider slick-initialized' dir='ltr'>
                  
                        <div class='slick-list'>
                            <div class='slick-track'
                                style='width: 2212px; opacity: 1; transform: translate3d(-948px, 0px, 0px);'>
                                <div data-index='-1' tabindex='-1' class='slick-slide slick-cloned'
                                    aria-hidden='true' style='width: 316px;'>
                                    <div>
                                        <div class='card_thumbnail__iAMJV' tabindex='-1'
                                            style='width: 100%; display: inline-block;'>
                                            <div class='card_upcoming__ezcIg'>
                                                
                                            </div><a
                                                href='property_details.php?property_id=$s_id&city=$city'><img
                                                    alt='$city'
                                                   
                                                    src='asset/property_image/$property_image'
                                                    width='600' height='600' decoding='async'
                                                    data-nimg='1' loading='lazy' style=''></a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
                <div class='textMain'><a href=''>
                        <div class='card_propName__G6qT3'>
                            <h2>Roomsoom $locality, $city</h2>
                            <div class='card_city__IHjt6'>
                                <h4><img alt='locationpin'
                                       
                                        src='./asset/images/locationicon.svg' width='15'
                                        height='15' decoding='async' data-nimg='1' loading='lazy'
                                        style='color: transparent;'>$locality, </h4>
                                        <span>$gender</span>
                                       
                            </div>
                        </div>
                        <div class='card_priceMain__09p_D'>
                            <div class='card_priceCard__pJnps'>
                                <h4>Rent Starting at</h4>
                                <h5><span class='card_start__0HNld'> </span> Rs.
                                $solo_room_price<span>/mo*</span></h5>
                            </div>
                        </div>
                    </a></div>
            </div>
            </div>
            </div>
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
            $solo_room_price = $row['solo_room_price'];
            $property_image = $row['property_image'];
            if($s_id == $p_id) continue;

            echo "
            <li class='card'>
            <div class='listing_colLayout__IVj18'>
            <div class='card_containerGrid__KnWKY card_container__i1o_z' id='onlyHide'>
                <div class='card_cardMain__HVzkv'>
                <div class='propThum'>
                    <div class='slick-slider slick-initialized' dir='ltr'>
                  
                        <div class='slick-list'>
                            <div class='slick-track'
                                style='width: 2212px; opacity: 1; transform: translate3d(-948px, 0px, 0px);'>
                                <div data-index='-1' tabindex='-1' class='slick-slide slick-cloned'
                                    aria-hidden='true' style='width: 316px;'>
                                    <div>
                                        <div class='card_thumbnail__iAMJV' tabindex='-1'
                                            style='width: 100%; display: inline-block;'>
                                            <div class='card_upcoming__ezcIg'>
                                                
                                            </div><a
                                                href='property_details.php?property_id=$s_id&city=$city'><img
                                                    alt='$city'
                                                   
                                                    src='asset/property_image/$property_image'
                                                    width='600' height='600' decoding='async'
                                                    data-nimg='1' loading='lazy' style=''></a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
                <div class='textMain'><a href=''>
                        <div class='card_propName__G6qT3'>
                            <h2>Roomsoom $locality, $city</h2>
                            <div class='card_city__IHjt6'>
                                <h4><img alt='locationpin'
                                       
                                        src='./asset/images/locationicon.svg' width='15'
                                        height='15' decoding='async' data-nimg='1' loading='lazy'
                                        style='color: transparent;'>$locality, </h4>
                                        <span>$gender</span>
                                       
                            </div>
                        </div>
                        <div class='card_priceMain__09p_D'>
                            <div class='card_priceCard__pJnps'>
                                <h4>Rent Starting at</h4>
                                <h5><span class='card_start__0HNld'> </span> Rs.
                                $solo_room_price<span>/mo*</span></h5>
                            </div>
                        </div>
                    </a></div>
            </div>
            </div>
            </li>
            ";

        }
    
    }
}

?>