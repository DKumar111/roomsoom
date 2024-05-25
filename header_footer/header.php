<!-- <div class="header">
    <div class="header_logo">
        <a href="index.php">
            <img src="./asset/images/logo.png" alt="ROOMSOOM LOGO">
        </a>
    </div>
    <div class="header_links">
        <div class="header_links_list">
            <ul>
                
                <div class="dropdown">
                    <p class="dropbtn">City<i class="fa-solid fa-angle-down"></i></p>
                    <div class="dropdown-content">
                        <a href="#">Noida</a>
                        <a href="#">Gurugram</a>
                        <a href="#">Delhi</a>
                    </div>
                </div>
                <li><a href="privileges.php">Privileges</a></li>
                <li><a href="howtobook.php">How To Book </a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="header_contact">
                    call on us
                    </br>
                    <a class="phone_number" href="tel:+919354637571">9354637571</a>
                </li>
             
            </ul>
        </div>
        <div class="header__right_link">
            <div class="call__btn">
                Call Us
            </div>

            <div class="hamburger">
                <a href="javascript:void(0);" class="icon" onclick="openNav()">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
        </div>
    </div>
</div> -->


<div class="Header_container__C_MY0">
    <div>
        <div class="Header_headerContainer__5aj_6">
            <div class="Header_housrlogo___lZQa">
                <a href="index.php"><img alt="Housr Logo" src="asset/images/logo.png" width="537" height="168"
                        decoding="async" data-nimg="1" loading="lazy" style="color:transparent">
                </a>
            </div>
            <div class="Header_navlinks__vW8HS">
                <div class="Header_links__Sm49Z">
                    <ul class="Header_ullinks__V1SBq" id="Header_ullinks__V1SBqAasd">
                        <li class=" select Header_hasChildren__rMIjs ">
                            <p class="Header_cityNAme__Cs_WE" id="fetch_value">
                                <a  href="properties.php">All Property</a>
                                <!-- <img alt="housr coliving"
                                    srcset="https://housr.in/_next/static/media/DownArrowGrey.02340a5c.svg 1x, https://housr.in/_next/static/media/DownArrowGrey.02340a5c.svg 2x"
                                    src="https://housr.in/_next/static/media/DownArrowGrey.02340a5c.svg" width="20"
                                    height="20" decoding="async" data-nimg="1" class="Header_svg__77EI_" loading="lazy"
                                    style="color:transparent"> -->
                            </p>
                            <!-- <ul class="Header_subparent__L3nAB " id="fetch_value">
                                    
                                    <li class="Header_childrenli__awXTw " ><a
                                            href="properties.php?gurgaon" onclick="showData(this.value)">
                                            <p>Gurgaon</p>
                                        </a></li>
                                    <li class="Header_childrenli__awXTw " ><a
                                            href="properties.php?hyderabad" onclick="showData(this.value)">
                                            <p>Hyderabad</p>
                                        </a></li>
                                    <li class="Header_childrenli__awXTw " ><a
                                            href="properties.php?pune" onclick="showData(this.value)">
                                            <p>Pune</p>
                                        </a></li>
                                    <li class="Header_childrenli__awXTw " ><a
                                            href="properties.php?banglore" onclick="showData(this.value)">
                                            <p>Bangalore</p>
                                        </a></li>
                                    <li class="Header_childrenli__awXTw "  id="labelNew1"><a
                                            href="properties.php?noida" onclick="showData(this.value)">
                                            <p>Noida</p>
                                        </a></li>
                                    <li class="Header_childrenli__awXTw "  id="labelNew1"><a
                                            href="properties.php?delhi" onclick="showData(this.value)">
                                            <p>Delhi</p>
                                        </a></li>
                                </ul> -->

                        </li>
                        <li class=""><a  href="privileges.php">
                                <p>Privileges<span class="Header_line__mjz8n"></span></p>
                            </a></li>
                        <li class=""><a  href="howtobook.php">
                                <p>How to book<span class="Header_line__mjz8n"></span></p>
                            </a></li>
                        <li class=""><a  href="blog.php">
                                <p>Blog<span class="Header_line__mjz8n"></span></p>
                            </a></li>
                        <li class=""><a  href="about.php">
                                <p class="Header_activTrue__TuZRY">About Us<span class="Header_line__mjz8n"></span></p>
                            </a></li>
                        <li class="Header_cta__n6O_m">call us on<br><a href="tel:+918810107070">+91 8810107070</a></li>
                        <li class="Header_or__6HQDc">
                            <p>Or</p>
                        </li>
                        <li class="Header_btnMain__yY24_" onclick="openCallSlide()"><button>
                                <p>Request a Call</p>
                            </button></li>
                        <?php 
                            if(!isset($_SESSION['username'])){  
                                echo '
                        <li style="margin-right: -1rem;" class="Header_btnMain__yY24_">
                            <a  href="login.php">
                                <p style="font-size: 1rem;">Login</p>
                            </a>
                        </li>
                        <li style="margin-right: -2.5rem;" class="Header_btnMain__yY24_">
                            <a href="register.php">
                                <p style="font-size: 1rem;">Register</p>
                            </a>
                        </li>';
                            }else{
                                echo '
                                <li style="margin-right: -1rem;" class="Header_btnMain__yY24_">
                            <a  >
                                <p onclick="openForm()" id="clickme" style="font-size: 1rem;">'. $_SESSION['username'].'</p>
                            </a>
                        </li> ';
                            }
                        ?>
                    </ul>
                    <ul class="Header_hambugMain__fAu4a">
                        <li class="Header_btnMain__yY24_"><button><a href="tel:+919090908778">
                                    <p>Call Us</p>
                                </a></button></li>
                        <li class="Header_hamburgerRotateMenu__94riJ Header_hamburger__3CpRW" id="header_hamburgerMenu"
                            onclick="openNav()">
                            <span></span><span></span><span></span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- MOBILE NAVIGATION -->
            <div class="mobileSide_nav" id="mobile_side_nav">
                <div class="mobileSide_nav_links">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a class="mb_nav_btn " href="index.php">Home</a>
                    <a class="mb_nav_btn " href="properties.php">All Properties</a>
                    <a class="mb_nav_btn " href="privileges.php">Privileges</a>
                    <a class="mb_nav_btn " href="howtobook.php">How to book</a>
                    <a class="mb_nav_btn " href="blog.php">Blog</a>
                    <a class="mb_nav_btn " href="about.php">About Us</a>
                </div>
                <div class="" style="position: absolute; top: 1rem; right: 2rem; display: flex;">
                    <!-- <a style="font-size: 1rem;" class="login_register_btns" href="login.php">Login</a>
                    <a style="font-size: 1rem;" class="login_register_btns" href="register.php">Registre</a> -->
                    <?php 
                            if(!isset($_SESSION['username'])){  
                                echo '
                                <a style="font-size: 1rem;" class="login_register_btns" href="login.php">Login</a>
                                <a style="font-size: 1rem;" class="login_register_btns" href="register.php">Registre</a>
                                ';
                            }else{
                                echo '
                                <a style="font-size: 1rem;" class="login_register_btns" href="login.php">'. $_SESSION['username'].'</a>
                                <a style="font-size: 1rem;" class="login_register_btns" href="logout.php">Logout</a>';
                            }
                        ?>
                </div>
            </div>

            <!-- /MOBILE NAVIGATION -->
        </div>
        <!-- <div class="Header_conSideBar__FF5_Z">
            <div class="Header_sideNavbarHide__jBzJY" id="Header_hideRequestCall__ccd3y">
                <div class="Request_sidenavbarwrap__aGiHI">
                    <div class="Request_navbarclose__3OV_2"><i class="Request_ticlose__EOdR2"><svg width="16"
                                height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 6L6 18" stroke="#ffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M6 6L18 18" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg></i></div>
                    <form class="Request_request_form_hide__kCv2O">
                        <div class="Request_row__6M_4y">
                            <div class="Request_collg12__ydKml">
                                <div class="Request_form_group__Oji2N">
                                    <h4 class="Request_requestheading__9BKm5">Name*</h4><input type="text"
                                        class="Request_form_control___8p8V Request_request_call__31CJk"
                                        placeholder="Name" name="name" id="name" required="" value="">
                                </div>
                            </div>
                            <div class="Request_collg12__ydKml">
                                <div class="Request_form_group__Oji2N undefined">
                                    <h4 class="Request_requestheading__9BKm5">Phone Number*</h4>
                                    <div class="Request_flagInput__hbIfw">
                                        <div class="Request_requestabs__pGqBe"><img alt="indian flag"
                                                srcset="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findiaflag.fabd691d.png&amp;w=48&amp;q=75 1x, /_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findiaflag.fabd691d.png&amp;w=96&amp;q=75 2x"
                                                src="/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findiaflag.fabd691d.png&amp;w=96&amp;q=75"
                                                width="48" height="48" decoding="async" data-nimg="1"
                                                class="Request_requestimg__IJ8hp" loading="lazy"
                                                style="color:transparent">
                                            <p class="Request_request_phone__dIxxQ">+91</p>
                                        </div><input type="number"
                                            class="Request_form_control___8p8V Request_request_call__31CJk undefined"
                                            placeholder="Phone" name="phone" id="phone" required="" value="">
                                    </div>
                                </div>
                            </div><input type="hidden" id="gclid_field" name="gclid_field" value="">
                            <div class="Request_collg12__ydKml">
                                <div class="Request_form_group__Oji2N">
                                    <h4 class="Request_requestheading__9BKm5">City*</h4><select name="city" id="city"
                                        required="" class="Request_form_control___8p8V Request_request_call__31CJk">
                                        <li value="">Select City</li>
                                        <li value="Gurgaon">Gurgaon</li>
                                        <li value="Hyderabad">Hyderabad</li>
                                        <li value="Pune">Pune</li>
                                        <li value="Bangalore">Bangalore</li>
                                        <li value="Vizag">Vizag</li>
                                    </select>
                                </div>
                            </div>
                            <div class="Request_collg12__ydKml Request_reqBtn__wNQr6"><input type="submit"
                                    class="Request_requestbtn__1OWxp" value="Request Call"></div>
                        </div>
                    </form>
                    <p class="Request_getBack__fl85o">we will get back to you in less <br> than 24 hours*</p>
                </div>
            </div>
        </div>
        <div class="Header_sidemeunbox__V4iAC" id="header_sideMenuebox">
            <div class="Header_sideMenuHide__PFxW6" id="Header_hidesideMenuBar__afqLo">
                <div class="sidemenu_sidemenu_container_Hide__E_P4M">
                    <div class="sidemenu_navbarclose__yJudx"><i class="sidemenu_ticlose__f3SZ8"
                            onclick="closeNav()"><img alt="housr coliving"
                                srcset="/_next/static/media/CloseBtn.b04e4862.svg 1x, /_next/static/media/CloseBtn.b04e4862.svg 2x"
                                src="/_next/static/media/CloseBtn.b04e4862.svg" width="24" height="24" decoding="async"
                                data-nimg="1" loading="lazy" style="color:transparent"></i></div>
                    <div class="undefined">
                        <div class="sidemenu_sidemenu_links__inU4m">
                            <ul>
                                <li><a href="/">
                                        <p>Home</p>
                                    </a></li>
                                <li><a href="/privileges">
                                        <p>privileges</p>
                                    </a></li>
                                <li><a href="/how-to-book">
                                        <p>How to Book</p>
                                    </a></li>
                                <li><a href="/blog">
                                        <p>Blog</p>
                                    </a></li>
                                <li><a href="/about">
                                        <p>About Us</p>
                                    </a></li>
                                <li class="undefined sidemenu_border_none__Zq_RM">
                                    <p>City</p>
                                    <div class="sidemenu_iconsRot__IUu8f"><img alt="down"
                                            srcset="https://housr.in/_next/static/media/DownArrowGrey.02340a5c.svg 1x, https://housr.in/_next/static/media/DownArrowGrey.02340a5c.svg 2x"
                                            src="https://housr.in/_next/static/media/DownArrowGrey.02340a5c.svg"
                                            width="20" height="20" decoding="async" data-nimg="1" loading="lazy"
                                            style="color:transparent">
                                    </div>
                                </li>
                                <ul class="sidemenu_hasChildrenHide__I2CI8">
                                    <li class="sidemenu_childrenli__yAwxH"><a href="/gurgaon">
                                            <p>Gurgaon</p>
                                        </a></li>
                                    <li class="sidemenu_childrenli__yAwxH"><a href="/hyderabad">
                                            <p>Hyderabad</p>
                                        </a></li>
                                    <li class="sidemenu_childrenli__yAwxH"><a href="/pune">
                                            <p>Pune</p>
                                        </a></li>
                                    <li class="sidemenu_childrenli__yAwxH"><a href="/bangalore">
                                            <p>Bangalore</p>
                                        </a></li>
                                    <li class="sidemenu_childrenli__yAwxH sidemenu_border_none__Zq_RM"
                                        id="labelNewPhone"><a href="/visakhapatnam">
                                            <p>Visakhapatnam</p>
                                        </a></li>
                                </ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <div class="Header_conSideBar__FF5_Z" id="Header__Request-Call">
            <div class="Header_sideNavbar__gp0Um" id="Header_requestcall___TRMx">
                <div class="Request_sidenavbarwrap__aGiHI">
                    <div class="Request_navbarclose__3OV_2" onclick="closeCallSlide()"><i
                            class="Request_ticlose__EOdR2"><svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M18 6L6 18" stroke="#ffff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M6 6L18 18" stroke="#fff" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                            </svg></i></div>
                    <form action="./phpScript/requestCall.php" class="Request_request_form__E83IV" method="post">
                        <div class="Request_row__6M_4y">
                            <div class="Request_collg12__ydKml">
                                <div class="Request_form_group__Oji2N">
                                    <h4 class="Request_requestheading__9BKm5">Name*</h4>
                                    <input type="text" class="Request_form_control___8p8V Request_request_call__31CJk"
                                        placeholder="Name" name="name" id="name" required="" autocomplete="on" value="">
                                </div>
                            </div>
                            <div class="Request_collg12__ydKml">
                                <div class="Request_form_group__Oji2N undefined">
                                    <h4 class="Request_requestheading__9BKm5">Phone Number*</h4>
                                    <div class="Request_flagInput__hbIfw">
                                        <div class="Request_requestabs__pGqBe"><img alt="indian flag"
                                                src="https://housr.in/_next/image?url=%2F_next%2Fstatic%2Fmedia%2Findiaflag.fabd691d.png&w=48&q=75"
                                                width="48" height="48" decoding="async" data-nimg="1"
                                                class="Request_requestimg__IJ8hp" loading="lazy"
                                                style="color:transparent">
                                            <p class="Request_request_phone__dIxxQ">+91</p>
                                        </div>
                                        <input type="number"
                                            class="Request_form_control___8p8V Request_request_call__31CJk undefined"
                                            placeholder="Phone" name="phone" id="phone" required="" autocomplete="on"
                                            value="">
                                    </div>
                                </div>
                            </div><input type="hidden" id="gclid_field" name="gclid_field" value="">
                            <div class="Request_collg12__ydKml">
                                <div class="Request_form_group__Oji2N">
                                    <h4 class="Request_requestheading__9BKm5">City*</h4>
                                    <select name="city" id="city" required=""
                                        class="Request_form_control___8p8V Request_request_call__31CJk">
                                        <option value="">Select City</option>
                                        <option value="Gurgaon">Gurgaon</option>
                                        <option value="Hyderabad">Hyderabad</option>
                                        <option value="Pune">Pune</option>
                                        <option value="Bangalore">Bangalore</option>
                                        <option value="Vizag">Vizag</option>
                                    </select>
                                </div>
                            </div>
                            <div class="Request_collg12__ydKml Request_reqBtn__wNQr6">
                                <input type="submit" class="Request_requestbtn__1OWxp" name="requestCall"
                                    value="Request Call">
                            </div>
                        </div>
                    </form>
                    <p class="Request_getBack__fl85o">we will get back to you in less <br> than 24 hours*</p>
                </div>
            </div>
        </div>
        <div class="login_info_popup" id="login_info_popup">
            <span onclick="closeForm()" class="close_login_info_btn">&times;</span>
            <div class="login_info_email"><?php echo $_SESSION['email'] ?></div>
            <div class="login_info_user_img">
                <img width="40px" height="40px" src="asset/images/testimonials-img/user1.webp" alt="">
            </div>
            <div class="login_info_user_name">
                Hi, <?php echo $_SESSION['username']  ?>
            </div>
            <div class="login_info_logout_btn">
                <a href="logout.php">Logout</a>
            </div>
            <div class="login_info_pp_pc">
                <a href="privacy-policy.php">Privacy Policy</a>
                <a href="terms-conditions.php">Terms and Condition</a>
            </div>
        </div>
    </div>
</div>