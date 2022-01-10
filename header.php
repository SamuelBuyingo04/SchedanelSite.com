<?php
    include "admin/conn.php";

    //fetch settings
    $settings = mysqli_query($con,"SELECT * FROM settings");
    $setting  = mysqli_fetch_array($settings);
?>

<header class="main-header header-style-one">
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container">
                <div class="left-column">
                    <ul class="social-icon">
                    <li><a target="blank" href="<?php echo $setting['facebook']; ?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a target="blank" href="<?php echo $setting['twitter']; ?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a target="blank" href="<?php echo $setting['instagram']; ?>"><i class="fab fa-instagram"></i></a></li>
                        <li><a target="blank" href="<?php echo $setting['youtube']; ?>"><i class="fab fa-youtube"></i></a></li> 
                    </ul>
                </div>
                <div class="right-column">
                    <div class="location">
                    <span class="flaticon-cursor"></span>
                            <form action="#" class="location-switcher">
                                <select class="selectpicker">
                                    <option value="1">Uganda</option>
                                    <option value="2">Congo DRC</option>
                                    
                                </select>
                            </form>   
                    </div>
                    <div class="phone-number"><i class="flaticon-calling"></i><a href="tel:<?php  echo $setting['phone']; ?>"></a><?php  echo $setting['phone']; ?><</div>
                </div>
            </div>
        </div>
    </div>
</header>