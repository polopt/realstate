<div id="slider_wrapper">
    <div class="flexslider">
        <ul class="slides">
            <!----------------#Property Images Slider#------------------------->
            <li>
                <img src="/uploads/dummy-1500x700.png" alt="15421 Southwest 39th Terrace"/>
            </li>
            <li>
                <img src="/uploads/slider02.jpg" alt="700 Front Street, Key West, FL"/>
            </li>
        </ul>
    </div>
    <div id="menu">
        <!----------------------------------- #Contact Information# ------------------------------------------>
        <span class="contact-info"><i class="contact-email"></i><a href="#login_form" id="login_pop">Login</a></span>
        <span class="contact-info"><i class="contact-email"></i><a href="#join_form" id="join_pop">Registar</a></span>
        <!--                        <span class="contact-info"><i class="contact-phone"></i>+351 916 458 456</span>-->
        <!---------------------------------------------------------------------------------------------------->

    </div>
    <div id="search">
        <form method="post" action="/search">
            <div class="logo_slider"><img src="/media/images/logo.jpg" /></div>
            <div class="form_search">
                <input type="search" placeholder="Onde" /> <input type="text" placeholder="O que?" /><input type="submit" id="submit_search" value=""/>
            </div>
        </form>
    </div>
</div>
<!-- /#slider-wrapper -->
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
