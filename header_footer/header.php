<!-- <div style="z-index:10;" class="testing_mode">
    <h2>Website is in testing mode</h2>
</div>
<br> <br> -->
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
                        <li class=""><a href="index.php">
                                <p>Home<span class="Header_line__mjz8n"></span></p>
                            </a></li>
                        <li class=" select Header_hasChildren__rMIjs ">
                            <p class="Header_cityNAme__Cs_WE" id="fetch_value">
                                <a class="text-decoration-none" href="properties.php">All Property</a>
                            </p>
                        </li>
                        <li class=""><a href="howtobook.php">
                                <p>How to book<span class="Header_line__mjz8n"></span></p>
                            </a></li>
                        <li class=""><a href="about.php">
                                <p class="Header_activTrue__TuZRY">About Us<span class="Header_line__mjz8n"></span></p>
                            </a></li>
                        <li class="Header_cta__n6O_m">call us on<br><a href="tel:+918810107070">+91 8810107070</a></li>
                        <li class="Header_or__6HQDc">
                            <p>Or</p>
                        </li>
                        <li class="Header_btnMain__yY24_" onclick="openCallSlide()"><button>
                                <p>Request a Callback</p>
                            </button></li>
                        <?php 
                            if(!isset($_SESSION['username'])){  
                                echo '
                        <li style="/*margin-right: -1rem;*/" class="Header_btnMain__yY24_">
                            <a  href="login.php">
                                <p style="font-size: 1rem;">Login</p>
                            </a>
                        </li>
                        <li style="/*margin-right: -2.5rem;*/" class="Header_btnMain__yY24_">
                            <a href="register.php">
                                <p style="font-size: 1rem;">SignUp</p>
                            </a>
                        </li>';
                            }else{
                                echo '
                                <li style="/*margin-right: -1rem;*/" class="Header_btnMain__yY24_">
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


            <div class="mobileSide_nav" id="mobile_side_nav">
                <div class="mobileSide_nav_links">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a class="mb_nav_btn " href="index.php">Home</a>
                    <a class="mb_nav_btn " href="properties.php">All Properties</a>
                    <!-- <a class="mb_nav_btn " href="privileges.php">Privileges</a> -->
                    <a class="mb_nav_btn " href="howtobook.php">How to book</a>
                    <!-- <a class="mb_nav_btn " href="blog.php">Blog</a> -->
                    <a class="mb_nav_btn " href="about.php">About Us</a>
                </div>
                <div class="" style="position: absolute; top: 1rem; right: 0rem; display: flex;">
                    <?php 
                            if(!isset($_SESSION['username'])){  
                                echo '
                                <a style="font-size: 1rem; font-weight: 700; border-bottom:none;" class="login_register_btns" href="login.php">Login</a>
                                <a style="font-size: 1rem; font-weight: 700; padding-right:3.5rem;padding-left: 0 !important; border-bottom:none;" class="login_register_btns" href="register.php">SignUp</a>
                                ';
                            }else{
                                echo '
                                <a style="font-size: 1rem;" class="login_register_btns" href="login.php">'. $_SESSION['username'].'</a>
                                <a style="font-size: 1rem;" class="login_register_btns" href="logout.php">Logout</a>
                                <a style="font-size: 1rem;" class="login_register_btns" href="user_profile.php">Profile</a>';
                            }
                        ?>
                </div>
            </div>

        </div>

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
            <!-- <div class="user_propfile">
                <a href="user_profile.php">View Profile</a>
            </div> -->
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