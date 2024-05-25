<?php   
include ('phpScript/dbconnect.php') ; 
include ('phpScript/functions.php') ; 
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>RoomSoom Home Page</title>
    <link rel="shortcut icon" href="asset/images/logo.png" type="image/x-icon">
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ===FONTAWESOME CDN=== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ===/FONTAWESOME CDN=== -->

    <!-- =======GOOGLE FONT CDN======= -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap');
    </style>

</head>

<body>
    <!-- ===== HEADER SECTION ===== -->
    <?php  include './header_footer/header.php' ;      ?>
    <!-- ===== /HEADER SECTION ===== -->

    <div class="wrapperTop">


        <div class="listing_mainCont__mGx_Q">
            <div class="listing_propertyListingHeaderStrip__xBAGY">
                <div class="listing_containerFilter__Hf7fG">
                    <div class="listing_filterText__NBMu3">
                        <?php  if(isset($_GET['']))  ?>
                        <p class="listing_fitBtn__F6dJr"><span>All Properties</span></p>
                        <h2> Properties</h2>
                        <p>Between the old-world charm, mind-blowing cuisines and thriving IT industry, the city of
                            never fails to impress. And with Roomsoom’s beautiful, convenient living spaces, you
                            can enjoy it all!.</p>
                    </div>
                    <!-- <div class="listing_propertyListingFilterWrap__BZk1N">
                        <div class="listing_sidebar__hWf_t">
                            <div class="listing_cityWrap__rgiBQ">
                                <div class="form_groups">
                                    <div class=" css-b62m3t-container"><span id="react-select-38-live-region"
                                            class="css-7pg0cj-a11yText"></span><span aria-live="polite"
                                            aria-atomic="false" aria-relevant="additions text"
                                            class="css-7pg0cj-a11yText"></span>
                                        <div class="head-select-search__control css-1s2u09g-control">
                                            <div
                                                class="head-select-search__value-container head-select-search__value-container--has-value css-1d8n9bt">
                                                <div class="head-select-search__single-value css-qc6sy-singleValue">City
                                                    </div>
                                                <div class="head-select-search__input-container css-ackcql"
                                                    data-value=""><input class="head-select-search__input"
                                                        autocapitalize="none" autocomplete="off" autocorrect="off"
                                                        id="react-select-38-input" spellcheck="false" tabindex="0"
                                                        type="text" aria-autocomplete="list" aria-expanded="false"
                                                        aria-haspopup="true" role="combobox" value=""
                                                        style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                </div>
                                            </div>
                                            <div class="head-select-search__indicators css-1wy0on6"><span
                                                    class="head-select-search__indicator-separator css-1okebmr-indicatorSeparator"></span>
                                                <div class="head-select-search__indicator head-select-search__dropdown-indicator css-tlfecz-indicatorContainer"
                                                    aria-hidden="true"><svg height="20" width="20" viewBox="0 0 20 20"
                                                        aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                        <path
                                                            d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                        </path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing_cityWrap__rgiBQ">
                                <div class="form_groups">
                                    <div class=" css-b62m3t-container"><span id="react-select-39-live-region"
                                            class="css-7pg0cj-a11yText"></span><span aria-live="polite"
                                            aria-atomic="false" aria-relevant="additions text"
                                            class="css-7pg0cj-a11yText"></span>
                                        <div class="head-select-search__control css-1s2u09g-control">
                                            <div
                                                class="head-select-search__value-container head-select-search__value-container--has-value css-1d8n9bt">
                                                <div class="head-select-search__single-value css-qc6sy-singleValue">
                                                    Locality</div>
                                                <div class="head-select-search__input-container css-ackcql"
                                                    data-value=""><input class="head-select-search__input"
                                                        autocapitalize="none" autocomplete="off" autocorrect="off"
                                                        id="react-select-39-input" spellcheck="false" tabindex="0"
                                                        type="text" aria-autocomplete="list" aria-expanded="false"
                                                        aria-haspopup="true" role="combobox" value=""
                                                        style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                </div>
                                            </div>
                                            <div class="head-select-search__indicators css-1wy0on6"><span
                                                    class="head-select-search__indicator-separator css-1okebmr-indicatorSeparator"></span>
                                                <div class="head-select-search__indicator head-select-search__dropdown-indicator css-tlfecz-indicatorContainer"
                                                    aria-hidden="true"><svg height="20" width="20" viewBox="0 0 20 20"
                                                        aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                        <path
                                                            d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                        </path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing_cityWrap__rgiBQ">
                                <div class="form_groups">
                                    <div class=" css-b62m3t-container"><span id="react-select-40-live-region"
                                            class="css-7pg0cj-a11yText"></span><span aria-live="polite"
                                            aria-atomic="false" aria-relevant="additions text"
                                            class="css-7pg0cj-a11yText"></span>
                                        <div class="head-select-search__control css-1s2u09g-control">
                                            <div
                                                class="head-select-search__value-container head-select-search__value-container--has-value css-1d8n9bt">
                                                <div class="head-select-search__single-value css-qc6sy-singleValue">
                                                    Property Type</div>
                                                <div class="head-select-search__input-container css-ackcql"
                                                    data-value=""><input class="head-select-search__input"
                                                        autocapitalize="none" autocomplete="off" autocorrect="off"
                                                        id="react-select-40-input" spellcheck="false" tabindex="0"
                                                        type="text" aria-autocomplete="list" aria-expanded="false"
                                                        aria-haspopup="true" role="combobox" value=""
                                                        style="color: inherit; background: 0px center; opacity: 1; width: 100%; grid-area: 1 / 2; font: inherit; min-width: 2px; border: 0px; margin: 0px; outline: 0px; padding: 0px;">
                                                </div>
                                            </div>
                                            <div class="head-select-search__indicators css-1wy0on6"><span
                                                    class="head-select-search__indicator-separator css-1okebmr-indicatorSeparator"></span>
                                                <div class="head-select-search__indicator head-select-search__dropdown-indicator css-tlfecz-indicatorContainer"
                                                    aria-hidden="true"><svg height="20" width="20" viewBox="0 0 20 20"
                                                        aria-hidden="true" focusable="false" class="css-8mmkcg">
                                                        <path
                                                            d="M4.516 7.548c0.436-0.446 1.043-0.481 1.576 0l3.908 3.747 3.908-3.747c0.533-0.481 1.141-0.446 1.574 0 0.436 0.445 0.408 1.197 0 1.615-0.406 0.418-4.695 4.502-4.695 4.502-0.217 0.223-0.502 0.335-0.787 0.335s-0.57-0.112-0.789-0.335c0 0-4.287-4.084-4.695-4.502s-0.436-1.17 0-1.615z">
                                                        </path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="listing_searchButtonWrap__EzZKq"><button class="listing_mainBtn__myddz">Find my
                                    Roomsoom</button></div>
                        </div>
                    </div> -->
                    <div class="listing_property_filter  ">
                        <div class="listing_property_filter_heading">
                            <h4 style="color:white;">Search By Location</h4>
                        </div>
                        <form action="search_property.php" method="get">
                            <select name="city" id="">
                                <option value="">Choose City</option>
                                <option value="delhi">Delhi</option>
                                <option value="noida">Noida</option>
                                <option value="gurgaon">Gurgaon</option>
                                <option value="pune">Pune</option>
                                <option value="banglore">Banglore</option>
                                <option value="hyderabad">Hyderabad</option>
                            </select>
                            <input type="submit" name="search_property" value="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="listing_floatingBtn__fLL3K">
                <div class="listing_filtersBtns__Aw1Ux">
                    <!-- <button>
                        <p>Filter <span><img alt="filter"
                                    srcset="/_next/static/media/Filter.cd942981.svg 1x, /_next/static/media/Filter.cd942981.svg 2x"
                                    src="/_next/static/media/Filter.cd942981.svg" width="20" height="20"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></span>
                        </p>
                    </button>
                    <button>
                        <p>Sort By <span><img alt="sort"
                                    srcset="	https://housr.in/_next/static/media/Sort.71b8b782.svg 1x, 	https://housr.in/_next/static/media/Sort.71b8b782.svg 2x"
                                    src="	https://housr.in/_next/static/media/Sort.71b8b782.svg" width="20" height="20"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></span>
                        </p>
                    </button> -->
                    <div class="listing_property_filter  ">
                        <div class="listing_property_filter_heading">
                            <h4 style="color:white;">Search By Location</h4>
                        </div>
                        <form class="filter_form" action="search_property.php" method="get">
                            <select class="filter_select_option" name="city" id="">
                                <option value="">Choose City</option>
                                <option value="delhi">Delhi</option>
                                <option value="noida">Noida</option>
                                <option value="gurgaon">Gurgaon</option>
                                <option value="pune">Pune</option>
                                <option value="banglore">Banglore</option>
                                <option value="hyderabad">Hyderabad</option>
                            </select>
                            <input type="submit" name="search_property" value="Search">
                        </form>
                    </div>
                </div>
            </div>
            <div class="listing_navigation__Wwevg">
                <div class="listing_left__b5p23">
                    <!-- <p class="breadcrumb"><span class="breadcrumb-item"><a href="/">Home</a></span><span
                            class="breadcrumb-item"><span></span></span></p> -->
                    <!-- <h5>8+ Stays Available Now</h5> -->
                </div>
                <div class="listing_right__KSxXz">
                    <!-- <div class="dropdown">
                        <button class="dropbtn">
                            <p>Sort by <img alt="sort"
                                    srcset="	https://housr.in/_next/static/media/Sort.71b8b782.svg 1x, 	https://housr.in/_next/static/media/Sort.71b8b782.svg 2x"
                                    src="	https://housr.in/_next/static/media/Sort.71b8b782.svg" width="20" height="20"
                                    decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></p>
                        </button>
                        <div class="dropdown-content">
                            <form action="" method="post" class=" ">
                                <p>Low to High</p>
                            <p>High to Low</p>
                               
                            </form>
                        </div>
                    </div> -->
                    <form class="num_filter_form" action="" method="post">
                        <input class="input_num_field" type="text" name="start_price"
                            value="<?php if(isset($_POST['start_price'])){echo $_POST['start_price']; } ?>"
                            placeholder="Enter Start Price" id="">
                        <input class="input_num_field" type="text" name="end_price"
                            value="<?php if(isset($_POST['end_price'])){echo $_POST['end_price']; } ?>"
                            placeholder="Enter end Price" id="">
                        <input class="input_submit_field" type="submit" name="filter_by_price" value="Filter">
                    </form>
                </div>
            </div>

            <div class="listing_container__P9mcK">
                <div class="listing_gridlayout__SQwz8" id="all_property">


                    <?php  
                    if(isset($_POST['start_price']) && isset($_POST['end_price'])){
                            $start_price = $_POST['start_price'];
                            $end_price = $_POST['end_price'];

                            $filter_sql = "SELECT * FROM `properties` WHERE solo_room_price BETWEEN $start_price AND $end_price";
                            $filter_result = mysqli_query($conn, $filter_sql);
                            $filter_num_row = mysqli_num_rows($filter_result);

                            if($filter_num_row==0){
                                echo "<h2 class='zero_properties'>Zero Result Found</h2>";
                            }

                            while($row = mysqli_fetch_assoc($filter_result)){
                                $s_id = $row['s_id'];
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
                                                                  href='property_details.php?property_id=$s_id'><img
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

                    }else{
                        get_properties();
                    }
                        
                    ?>
                </div>
            </div>
            <div class="listing_filterPhone__Fcmrh">
                <div class="listing_sidemeunbox__PQyTf">
                    <div class="listing_sideMenuHide__JRHnQ" id="listing_hidesideMenuBar__xi1iy">
                        <div class="listing_sidemenu_container_Hide__aZ0Ww">
                            <div class="listing_navbarclose__BPhIj"><i class="listing_ticlose__IuP8i"><img
                                        alt="housr coliving"
                                        srcset="/_next/static/media/CloseBtn.b04e4862.svg 1x, /_next/static/media/CloseBtn.b04e4862.svg 2x"
                                        src="/_next/static/media/CloseBtn.b04e4862.svg" width="24" height="24"
                                        decoding="async" data-nimg="1" loading="lazy" style="color: transparent;"></i>
                            </div>
                            <div class="undefined">
                                <div class="listing_sidemenu_links__5DQJV">
                                    <ul>
                                        <li class="listing_underline__rySpo">
                                            <p>City</p>
                                            <div class="listing_iconsRot__zDTCz"><img alt="downarrow"
                                                    srcset="/_next/static/media/DownArrowGrey.02340a5c.svg 1x, /_next/static/media/DownArrowGrey.02340a5c.svg 2x"
                                                    src="/_next/static/media/DownArrowGrey.02340a5c.svg" width="20"
                                                    height="20" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></div>
                                        </li>
                                        <ul class="listing_hasChildrenHide__dYuYg">
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="gurgaon" id="city" value="gurgaon"><label
                                                    for="gurgaon">Gurgaon</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox" name="pune"
                                                    id="city" value="pune"><label for="pune">Pune</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="hyderabad" id="city" value="hyderabad"><label
                                                    for="hyderabad"></label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="bangalore" id="city" value="bangalore"><label
                                                    for="bangalore">Bangalore</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="visakhapatnam" id="city" value="visakhapatnam"><label
                                                    for="Visakhapatnam">Visakhapatnam</label></li>
                                        </ul>
                                        <li class="listing_underline__rySpo">
                                            <p>Locality</p>
                                            <div class="listing_iconsRot__zDTCz"><img alt="downarrow"
                                                    srcset="/_next/static/media/DownArrowGrey.02340a5c.svg 1x, /_next/static/media/DownArrowGrey.02340a5c.svg 2x"
                                                    src="/_next/static/media/DownArrowGrey.02340a5c.svg" width="20"
                                                    height="20" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></div>
                                        </li>
                                        <ul class="listing_hasChildrenHide__dYuYg">
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="gachibowli" id="gachibowli" value="gachibowli"><label
                                                    for="gachibowli">Gachibowli</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="kondapur" id="kondapur" value="kondapur"><label
                                                    for="kondapur">Kondapur</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="madhapur" id="madhapur" value="madhapur"><label
                                                    for="madhapur">Madhapur</label></li>
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="gowlidoddy" id="gowlidoddy" value="gowlidoddy"><label
                                                    for="gowlidoddy">Gowlidoddy</label></li>
                                        </ul>
                                        <li class="listing_underline__rySpo">
                                            <p>Property Type</p>
                                            <div class="listing_iconsRot__zDTCz"><img alt="downarrow"
                                                    srcset="/_next/static/media/DownArrowGrey.02340a5c.svg 1x, /_next/static/media/DownArrowGrey.02340a5c.svg 2x"
                                                    src="/_next/static/media/DownArrowGrey.02340a5c.svg" width="20"
                                                    height="20" decoding="async" data-nimg="1" loading="lazy"
                                                    style="color: transparent;"></div>
                                        </li>
                                        <ul class="listing_hasChildrenHide__dYuYg">
                                            <li class="listing_childrenCheck__DSi14"><input type="checkbox"
                                                    name="coliving" id="coliving" value="coliving"><label
                                                    for="coliving">Roomsoom Coliving</label></li>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="listing_Searchbtn__CDdcb"><button>
                                        <p>Find my Roomsoom</p>
                                    </button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card_container__Klf5R">
            <div class="connect_container__bcQb3">
                <div class="connect_conMain__cK61x">
                    <div class="connect_contDiv__7rJQb"><img alt="tulip"
                            src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Ftulip.672e4c41.png&w=750&q=75"
                            width="689" height="608" decoding="async" data-nimg="1" loading="lazy"
                            style="color: transparent;">
                        <div class="connect_content__pCbDN">
                            <h2>Connect with Roomsoom</h2>
                            <p>Drop your concern, query or <br> feedback and we will get back <br> to you in no time.
                            </p>
                        </div>
                    </div>
                    <div class="connect_formDiv__8Vdin">
                        <div class="connect_content__pCbDN">
                            <h2>Connect with Roomsoom</h2>
                            <p>Drop your concern, query or <br> feedback and we will get back <br> to you in no time.
                            </p>
                        </div>
                        <div class="connect_formSec__aDH2S">
                            <form action="phpScript/email_msg.php" method="post">
                                <input type="text" placeholder="Name" class="connect_first__fZlm4" name="name"
                                    required="" id="name">
                                <input type="text" placeholder="Phone Number" name="phone" required="" id="phone">
                                <input type="text" placeholder="Query/Concern" class="undefined connect_textarea__8_xfI"
                                    name="message" id="message">
                                <input type="hidden" id="gclid_field" name="gclid_field" value="">
                                <div class="connect_btn__ywWeC">
                                    <input type="submit" class="connect_btnVal__bocrs" name="send_message"
                                        value="Send message">
                                </div>
                            </form>
                            <div class="connect_support__UbvMq">
                                <p>**You’d hear from us in the next 24 hours, but if you don’t, reach out at
                                    contact@roomsoom.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content_container__LwrrU">
                <div class="content_mainCont__xmz_n">
                    <div class="content_content__HcMmG">
                        <div class="content_heading__x5_Hn">
                            <h3>Exploring the World of Roomsoom Coliving</h3>
                        </div>

                        <!-- VERTICLE TAB -->
                        <div class="verticle_tab">
                            <div class="tab">
                                <button class="tablinks" onclick="openCity(event, 'overview')"
                                    id="defaultOpen">Overview</button>
                                <button class="tablinks" onclick="openCity(event, 'hasslefree')">Hassle-free Luxury
                                    Coliving with Roomsoom</button>
                                <button class="tablinks" onclick="openCity(event, 'convenience')">The Convenience of
                                    Luxury Coliving with Roomsoom</button>
                                <button class="tablinks" onclick="openCity(event, 'privacy')" id="defaultOpen">The Ideal
                                    Blend of Privacy & Socialization at Roomsoom Luxury Coliving</button>
                                <button class="tablinks" onclick="openCity(event, 'benifits')">Hidden Benefits of
                                    Roomsoom
                                    Coliving: More Than Just a Home</button>
                                <button class="tablinks" onclick="openCity(event, 'community')">Joining the Roomsoom
                                    Coliving
                                    Community</button>
                            </div>

                            <div id="overview" class="tabcontent">

                                <p>In today's fast-paced world, finding a place to call home that offers both comfort
                                    and
                                    convenience can be a challenge. But with HouRoomsoomsr Coliving, the answer is
                                    simple. We
                                    provide fully furnished and serviced apartments that make hassle-free living a
                                    reality.
                                    Scroll below to take a comprehensive journey through the world of Roomsoom,
                                    exploring
                                    the
                                    myriad benefits and amenities that come with choosing us as your home away from
                                    home.
                                </p>
                            </div>

                            <div id="hasslefree" class="tabcontent">

                                <p>At Roomsoom, we understand that your time is valuable, and the last thing you want to
                                    worry
                                    about is setting up your new apartment. That's why our luxury apartments for rent
                                    are
                                    ready for you to move in. From cosy bedrooms to well-equipped kitchens and stylish
                                    living areas, we've thought of every detail to make your stay comfortable. <br><br>

                                    Roomsoom Coliving spaces exemplify our core philosophy. We believe in creating a
                                    community
                                    where individuals can live together harmoniously, sharing experiences and building
                                    connections. Our apartments for rent are designed to foster this sense of community
                                    with
                                    an array of breakout zones such as theatre rooms, rooftop putting, gaming zones,
                                    fitness
                                    centres, and more. <br><br>

                                    In addition to the convenience of modern luxury apartments, we offer spacious common
                                    areas where you can interact with fellow residents, creating an enriching social
                                    experience.</p>
                            </div>

                            <div id="convenience" class="tabcontent">
                                <p>Coliving with Roomsoom means enjoying a host of amenities that simplify your daily
                                    life.
                                    When you sign up for a Roomsoom stay, you never have to stress about finding a maid,
                                    cook,
                                    or laundry service nearby. Our professional housekeeping services ensure that your
                                    space
                                    remains pristine. Laundry becomes a breeze with doorstep service. Moreover, we’ve
                                    also
                                    got your F&B sorted. Craving a gourmet meal? Enjoy a lavish spread of scrumptious,
                                    healthy, and hygienic food every day. <br> <br>

                                    Roomsoom Coliving goes above and beyond to fulfil your expectations of a seamless
                                    stay.
                                    Whether you're working from home or indulging in a Sunday Netflix binge, we ensure
                                    you
                                    stay connected with super-speed Wi-Fi. To top it all, our hospitality transcends any
                                    other coliving player because Roomsoom offers you easy access to 24/7 assistance
                                    from
                                    IHM-trained Resident Managers at the property and our user-friendly app. <br><br>

                                    With Roomsoom, you don't just find a place to live; you find a community that
                                    matches
                                    your
                                    vibe. Explore Roomsoom Coliving and Apartments for Rent effortlessly, as we want you
                                    to
                                    discover the perfect housing solution with ease.</p>
                            </div>
                            <div id="privacy" class="tabcontent">
                                <p>
                                    One of the unique aspects of Roomsoom Coliving is our ability to strike the perfect
                                    balance
                                    between privacy and community living. Our furnished chic rooms provide the ideal
                                    home
                                    for working professionals, offering every amenity imaginable. But it's not just
                                    about
                                    your room; it's about the incredible breakout zones we provide. From gaming zones to
                                    pool tables, theatre rooms to rooftop putting, and fitness zones, we've created
                                    spaces
                                    for you to socialize with ease. <br><br>

                                    The biggest plus? Our weekly community events. From pet therapy to stand-up comedy,
                                    DJ
                                    Nights, and Open Mics, our superb community team organizes varied community events
                                    to
                                    cater to the diverse interests of Roomsoom Homies. These gatherings bring residents
                                    together, fostering a sense of belonging and camaraderie. It's more than just a
                                    place to
                                    stay; it's a vibrant community waiting to welcome you.
                                </p>
                            </div>
                            <div id="benifits" class="tabcontent">
                                <p>
                                    While the luxury apartments and community events are major attractions, Roomsoom
                                    offers
                                    a
                                    range of hidden benefits that make your stay even more delightful. Here are some of
                                    them: <br><br>

                                    <b> Hangout Spaces for a Weekend Movie Binge - Roomsoom's Theatre Rooms</b> <br>
                                    Imagine having a state-of-the-art theatre right within your living space. Roomsoom's
                                    theatre rooms are equipped with high-quality audiovisual systems, comfortable
                                    seating,
                                    and every OTT subscription. It's the perfect setting for a weekend movie binge with
                                    friends or even a solo cinematic escape. <br><br>

                                    <b>Fitness Zones for a Healthy Lifestyle</b> <br>
                                    Maintaining a healthy lifestyle is made easy at Roomsoom Luxury Coliving. Our
                                    fitness
                                    zones
                                    are well-equipped with modern gym equipment. Whether you're a fitness enthusiast or
                                    just
                                    looking to stay active, you'll have everything you need right at your doorstep.
                                    <br><br>

                                    <b>Rooftop for Leisure</b> <br>
                                    For those moments when you need to unwind and enjoy some fresh air, our rooftop
                                    spaces
                                    offer the perfect solution. You can relax with a book, soak in the sun, or simply
                                    take
                                    in the panoramic views of the city. <br><br>

                                    <b>Vending Machines for Snack Cravings</b> <br>
                                    Late-night snack cravings? No problem. Roomsoom provides vending machines stocked
                                    with
                                    a
                                    variety of snacks and beverages, ensuring that you have access to your favourite
                                    treats
                                    24/7.
                                </p>
                            </div>
                            <div id="community" class="tabcontent">
                                <p>When you choose Roomsoom Luxury Coliving, you're not just renting an apartment;
                                    you're
                                    becoming part of a vibrant and forward-thinking community. We believe in creating a
                                    space where individuals can thrive, connect, and create lasting memories. <br><br>

                                    Our community is a melting pot of cultures, professions, and backgrounds. It's a
                                    place
                                    where you can learn, grow, and forge friendships that last a lifetime. Whether
                                    you're
                                    new to the city or simply seeking a change of scenery, Roomsoom welcomes you with
                                    open
                                    arms. <br><br>

                                    In conclusion, Roomsoom is more than just a housing solution; it's a lifestyle
                                    choice.
                                    With
                                    hassle-free luxury coliving, unmatched convenience, and a thriving community, we
                                    offer
                                    the ultimate living experience for working professionals. Say goodbye to the stress
                                    of
                                    setting up a new home and embrace the comfort and convenience of Roomsoom, your
                                    destination
                                    for luxury coliving. <br><br>

                                    Discover a world where luxury and community meet seamlessly, where comfort and
                                    convenience redefine your living experience. Choose Roomsoom Coliving for a life
                                    that's
                                    both extraordinary and effortless. Join us in creating a brighter and more inclusive
                                    future, one community at a time.</p>
                            </div>
                        </div>
                        <!-- /VERTICLE TAB -->
                        <div class="mobile_collapsible_tab">
                            <button type="button" class="collapsible">Overview</button>
                            <div class="content">
                                <p>In today's fast-paced world, finding a place to call home that offers both comfort
                                    and
                                    convenience can be a challenge. But with Roomsoom Coliving, the answer is simple. We
                                    provide fully furnished and serviced apartments that make hassle-free living a
                                    reality.
                                    Scroll below to take a comprehensive journey through the world of Roomsoom,
                                    exploring
                                    the
                                    myriad benefits and amenities that come with choosing us as your home away from
                                    home.</p>
                            </div>
                            <button type="button" class="collapsible">Hassle-free Luxur Coliving with Roomsoom</button>
                            <div class="content">
                                <p>At Roomsoom, we understand that your time is valuable, and the last thing you want to
                                    worry
                                    about is setting up your new apartment. That's why our luxury apartments for rent
                                    are
                                    ready for you to move in. From cosy bedrooms to well-equipped kitchens and stylish
                                    living areas, we've thought of every detail to make your stay comfortable. <br><br>

                                    Roomsoom Coliving spaces exemplify our core philosophy. We believe in creating a
                                    community
                                    where individuals can live together harmoniously, sharing experiences and building
                                    connections. Our apartments for rent are designed to foster this sense of community
                                    with
                                    an array of breakout zones such as theatre rooms, rooftop putting, gaming zones,
                                    fitness
                                    centres, and more. <br><br>

                                    In addition to the convenience of modern luxury apartments, we offer spacious common
                                    areas where you can interact with fellow residents, creating an enriching social
                                    experience.</p>
                            </div>
                            <button type="button" class="collapsible">The Convenience of Luxury Coliving with
                                Roomsoom</button>
                            <div class="content">
                                <p>Coliving with Roomsoom means enjoying a host of amenities that simplify your daily
                                    life.
                                    When you sign up for a Roomsoom stay, you never have to stress about finding a maid,
                                    cook,
                                    or laundry service nearby. Our professional housekeeping services ensure that your
                                    space
                                    remains pristine. Laundry becomes a breeze with doorstep service. Moreover, we’ve
                                    also
                                    got your F&B sorted. Craving a gourmet meal? Enjoy a lavish spread of scrumptious,
                                    healthy, and hygienic food every day. <br> <br>

                                    Roomsoom Coliving goes above and beyond to fulfil your expectations of a seamless
                                    stay.
                                    Whether you're working from home or indulging in a Sunday Netflix binge, we ensure
                                    you
                                    stay connected with super-speed Wi-Fi. To top it all, our hospitality transcends any
                                    other coliving player because Roomsoom offers you easy access to 24/7 assistance
                                    from
                                    IHM-trained Resident Managers at the property and our user-friendly app. <br><br>

                                    With Roomsoom, you don't just find a place to live; you find a community that
                                    matches
                                    your
                                    vibe. Explore Roomsoom Coliving and Apartments for Rent effortlessly, as we want you
                                    to
                                    discover the perfect housing solution with ease.</p>
                            </div>
                            <button type="button" class="collapsible">The Ideal Blend of Privacy & Socialization at
                                Roomsoom Luxury Coliving</button>
                            <div class="content">
                                <p>One of the unique aspects of Roomsoom Coliving is our ability to strike the perfect
                                    balance
                                    between privacy and community living. Our furnished chic rooms provide the ideal
                                    home
                                    for working professionals, offering every amenity imaginable. But it's not just
                                    about
                                    your room; it's about the incredible breakout zones we provide. From gaming zones to
                                    pool tables, theatre rooms to rooftop putting, and fitness zones, we've created
                                    spaces
                                    for you to socialize with ease. <br><br>

                                    The biggest plus? Our weekly community events. From pet therapy to stand-up comedy,
                                    DJ
                                    Nights, and Open Mics, our superb community team organizes varied community events
                                    to
                                    cater to the diverse interests of Roomsoom Homies. These gatherings bring residents
                                    together, fostering a sense of belonging and camaraderie. It's more than just a
                                    place to
                                    stay; it's a vibrant community waiting to welcome you.</p>
                            </div>
                            <button type="button" class="collapsible">Hidden Benefits of Roomsoom Coliving: More Than
                                Just
                                a Home</button>
                            <div class="content">
                                <p>
                                    While the luxury apartments and community events are major attractions, Roomsoom
                                    offers
                                    a range of hidden benefits that make your stay even more delightful. Here are some
                                    of them: <br> <br>

                                    <b> Hangout Spaces for a Weekend Movie Binge - Roomsoom's Theatre Rooms</b> <br>
                                    Imagine having a state-of-the-art theatre right within your living space. Roomsoom's
                                    theatre rooms are equipped with high-quality audiovisual systems, comfortable
                                    seating, and every OTT subscription. It's the perfect setting for a weekend movie
                                    binge with friends or even a solo cinematic escape. <br><br>

                                    <b>Fitness Zones for a Healthy Lifestyle</b><br>
                                    Maintaining a healthy lifestyle is made easy at Roomsoom Luxury Coliving. Our
                                    fitness
                                    zones are well-equipped with modern gym equipment. Whether you're a fitness
                                    enthusiast or just looking to stay active, you'll have everything you need right at
                                    your doorstep. <br><br>

                                    <b>Rooftop for Leisure</b><br>
                                    For those moments when you need to unwind and enjoy some fresh air, our rooftop
                                    spaces offer the perfect solution. You can relax with a book, soak in the sun, or
                                    simply take in the panoramic views of the city. <br><br>

                                    <b>Vending Machines for Snack Cravings</b> <br>
                                    Late-night snack cravings? No problem. Roomsoom provides vending machines stocked
                                    with
                                    a variety of snacks and beverages, ensuring that you have access to your favourite
                                    treats 24/7.
                                </p>
                            </div>
                            <button type="button" class="collapsible">Joining the Roomsoom Coliving Community</button>
                            <div class="content">
                                <p>
                                    When you choose Roomsoom Luxury Coliving, you're not just renting an apartment;
                                    you're
                                    becoming part of a vibrant and forward-thinking community. We believe in creating a
                                    space where individuals can thrive, connect, and create lasting memories. <br><br>

                                    Our community is a melting pot of cultures, professions, and backgrounds. It's a
                                    place where you can learn, grow, and forge friendships that last a lifetime. Whether
                                    you're new to the city or simply seeking a change of scenery, Roomsoom welcomes you
                                    with open arms. <br><br>

                                    In conclusion, Roomsoom is more than just a housing solution; it's a lifestyle
                                    choice.
                                    With hassle-free luxury coliving, unmatched convenience, and a thriving community,
                                    we offer the ultimate living experience for working professionals. Say goodbye to
                                    the stress of setting up a new home and embrace the comfort and convenience of
                                    Roomsoom, your destination for luxury coliving. <br><br>

                                    Discover a world where luxury and community meet seamlessly, where comfort and
                                    convenience redefine your living experience. Choose Roomsoom Coliving for a life
                                    that's
                                    both extraordinary and effortless. Join us in creating a brighter and more inclusive
                                    future, one community at a time.
                                </p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="faqs_faqscontainer__on7i_">
                <div class="faqs_faqtitle__pTGTz">
                    <h3>FAQs</h3>
                </div>

                <button type="button" class="collapsible">What is Roomsoom Coliving all about?</button>
                <div class="content">
                    <p>At Roomsoom, we've combined equal parts innovation, convenience, community and opulence to create
                        an
                        extraordinary living experience for India’s working professionals.</p>
                </div>
                <button type="button" class="collapsible">How does Roomsoom Coliving set itself apart from traditional
                    housing options?</button>
                <div class="content">
                    <p>Roomsoom Luxury Coliving stands out by offering fully furnished and ready-to-move-in properties.
                        Unlike traditional housing, you don't have to worry about purchasing furniture, setting up
                        utilities, or dealing with complicated paperwork. With Roomsoom, you can enjoy a comfortable and
                        hassle-free living space from day one!</p>
                </div>
                <button type="button" class="collapsible">What does a Roomsoom membership include?</button>
                <div class="content">
                    <p>As a Roomsoom member, you get access to beautifully designed, fully-furnished spaces managed to
                        perfection and other irresistible privileges. Roomsoom Homies (our residents) enjoy an array of
                        all-inclusive amenities, premium services, priority access to Roomsoom’s latest launches,
                        personalised assistance from IHM-trained resident managers, special offers and discounts, and
                        invitations to exclusive community events.</p>
                </div>
                <button type="button" class="collapsible">What are the locations where Roomsoom Coliving is currently
                    available?</button>
                <div class="content">
                    <p>Roomsoom is omnipresent across almost all the major metropolitans of the country, including
                        Gurugram, Hyderabad, Pune, Bangalore and Vizag.</p>
                </div>
                <button type="button" class="collapsible">How do I book a Roomsoom Coliving or apartments for
                    rent?</button>
                <div class="content">
                    <p>To book Roomsoom’s Luxury Coliving, apartments/house for rent, simply visit our website or get in
                        touch with us at +918810107070. You can browse available modern luxury apartments, house for
                        rent or flats for rent; choose your preferred location, and complete the booking process online.
                    </p>
                </div>
                <button type="button" class="collapsible">Are the apartments/flats at Roomsoom Co living
                    pet-friendly?</button>
                <div class="content">
                    <p>We understand that pets are part of the family. While not all Roomsoom spaces are pet-friendly,
                        Roomsoom Homes allows pets. Please check the specific apartment listing for more details.
                    </p>
                </div>
                <button type="button" class="collapsible">What is the duration of stay required at Roomsoom Luxury
                    Coliving?</button>
                <div class="content">
                    <p>Roomsoom offers flexible stay options including modern luxury apartments, house/flats for rent
                        and
                        Luxury Coliving. Our minimum lock-in period is as short as three months while it can be as long
                        as several months, depending on your needs.
                    </p>
                </div>
                <button type="button" class="collapsible">Do I need to bring my own furniture and appliances to stay at
                    Roomsoom Co living?</button>
                <div class="content">
                    <p>No, you don't need to bring anything with you, just a bag of clothes and rest we’ve got covered.
                        Roomsoom Co living and apartments/flats for rent come fully furnished and equipped with
                        everything
                        you need for a comfortable stay.
                    </p>
                </div>
                <button type="button" class="collapsible">How is security ensured at Roomsoom properties?</button>
                <div class="content">
                    <p>Your safety is our priority. We follow 3-tier security procedures at Roomsoom Co living &
                        Roomsoom
                        Homes. We have advanced security measures in place, including secure access control & CCTV
                        surveillance, to ensure a safe living environment for our residents.
                    </p>
                </div>

            </div>
        </div>
        <!-- ===== FOOTER SECTION ===== -->
        <?php  include './header_footer/footer.php' ;      ?>
        <!-- ===== /FOOTER SECTION ===== -->



        <!-- =======JS FILES LINKS -->
        <script src="js/side_nav.js"></script>
        <script src="js/request-call.js"></script>
        <script src="js/collapsiblFAQ.js"></script>
        <script src="js/explore_tab.js"></script>
        <script src="js/properties.js"></script>
        <script src="js/active_class.js"></script>
        <script src="js/login_info_popup.js"></script>

        <!-- =======BOOTSTRAP JS CDN========== -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>


</body>

</html>