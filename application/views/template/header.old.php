<header id="header" role="banner">
    <div class="header-background">
        <div class="container">
            <div class="row-fluid">
                <div class="pull-left">
                    <!---------------------------- #Site Logo# ------------------------->
                    <a href="index.html" title="Imobiliaria" rel="home"><img class="site-logo" src="" alt="And You" /></a><!-- TODO: Logo -->
                    <!------------------------------------------------------------------>
                </div>
                <div class="pull-right">
                    <div class="top-menu">
                        <!----------------------------------- #Contact Information# ------------------------------------------>
                        <span class="contact-info"><i class="contact-email"></i><a href="#login_form" id="login_pop">Login</a></span>
                        <span class="contact-info"><i class="contact-email"></i><a href="#join_form" id="join_pop">Registar</a></span>
<!--                        <span class="contact-info"><i class="contact-phone"></i>+351 916 458 456</span>-->
                        <!---------------------------------------------------------------------------------------------------->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="nav-background">
        <div class="container">
            <div class="clearfix navbar">
<!--                <div class="navbar-inner">-->
<!--                    <div class="container">-->
<!--                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">-->
<!--                            <span class="icon-bar"></span>-->
<!--                            <span class="icon-bar"></span>-->
<!--                            <span class="icon-bar"></span>-->
<!--                        </a>-->
<!--                        <div class="nav-collapse collapse">-->
<!--                            <nav id="nav-main" role="navigation">-->
<!--                                <ul id="menu-primary-menu" class="nav">-->
<!--                                    -->
                        <?php
//                                    foreach ($main_menu as $menu) {
//                                        if (!isset($menu['sub_menu'])) {
//                                            echo '<li class="menu-item menu-item-type-post_typ menu-item-object-page current-menu-item"><a href="' . $menu['url'] . '" title="' . $menu['label'] . '">' . $menu['label'] . '</a></li>';
//                                        } else {
//                                            echo '<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-home menu-item-has-children dropdown"><a href="' . $menu['url'] . '" title="' . $menu['label'] . '">' . $menu['label'] . '</a>';
//                                            echo '<ul class="dropdown-menu">';
//                                            foreach ($menu['sub_menu'] as $key => $cat) {
//                                                echo '<li class="menu-item menu-item-type-post_type menu-item-object-page"><a href="'.$cat['url'].'" title="">' . $cat['label']. '</a></li>';
//                                            }
//                                            echo "</ul></li>";
//                                        }
//                                    }
                        ?>
<!--                                </ul>-->
<!---->
<!--                                <div id="social-network">-->
<!--                                    <!-----------------------------------------#Social Icon URL#------------------------------>
<!--                                    <a class="fb" href="http://www.facebook.com/" title="Facebook"><i class="icon-facebook"></i></a>-->
<!--                                    <a class="tw" href="http://www.twitter.com/" title="Twitter"><i class="icon-twitter"></i></a>-->
<!--                                    <a class="rss" href="http://feeds.feedburner.com/" title="RSS"><i class="icon-rss"></i></a>-->
<!--                                    <a class="gp" href="http://www.plus.google.com/" title="Google Plus"><i class="icon-google-plus"></i></a>-->
<!--                                    <!---------------------------------------------------------------------------------------->
<!--                                </div>-->
<!--                            </nav> <!-- /#nav-main -->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
            </div><!-- /.navbar -->
        </div>
    </div>
</header><!-- /#header -->
<a href="#x" class="overlay" id="login_form"></a>
<div class="popup">
    <h2>Welcome Guest!</h2>

    <p>Please enter your login and password here</p>

    <div>
        <label for="login">Login</label>
        <input type="text" id="login" value=""/>
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" id="password" value=""/>
    </div>
    <input type="button" value="Log In"/>
    <a class="close" href="#close"></a>
</div>

<!-- popup form #2 -->
<a href="#x" class="overlay" id="join_form"></a>
<div class="popup">
    <h2>Sign Up</h2>

    <p>Please enter your details here</p>

    <div>
        <label for="email">Login (Email)</label>
        <input type="text" id="email" value=""/>
    </div>
    <div>
        <label for="pass">Password</label>
        <input type="password" id="pass" value=""/>
    </div>
    <div>
        <label for="firstname">First name</label>
        <input type="text" id="firstname" value=""/>
        57
    </div>
    <div>
        <label for="lastname">Last name</label>
        <input type="text" id="lastname" value=""/>
    </div>
    <input type="button" value="Sign Up"/>&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;<a href="#login_form" id="login_pop">Log
        In</a>
    <a class="close" href="#close"></a>
</div>

