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
      $output .= "<div class='listing_colLayout__IVj18'>
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
                                              href='property_details.php?property_id={$row['s_id']}&city={$row['city']}'><img
                                                  alt='{$row['city']}'
                                                 
                                                  src='asset/property_image/{$row['property_image']}'
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
                          <h2>Roomsoom {$row['locality']}, {$row['city']}</h2>
                          <div class='card_city__IHjt6'>
                              <h4><img alt='locationpin'
                                     
                                      src='./asset/images/locationicon.svg' width='15'
                                      height='15' decoding='async' data-nimg='1' loading='lazy'
                                      style='color: transparent;'>{$row['locality']}, </h4>
                                      <span>{$row['gender']}</span>
                                    
                          </div>
                      </div>
                      <div class='card_priceMain__09p_D'>
                          <div class='card_priceCard__pJnps'>
                              <h4>Rent Starting at</h4>
                              <h5><span class='card_start__0HNld'></span> Rs.
                              {$row['solo_room_price']}<span>/mo*</span></h5>
                          </div>
                      </div>
                  </a></div>
          </div>
      </div>
      </div>";
    }

    echo $output;
  }else{
    echo "<h2>No Record Found.</h2>"; exit;
    
  }

?>
