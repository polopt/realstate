<div id="slider_wrapper">
    <div class="flexslider">
        <ul class="slides">
            <!----------------#Property Images Slider#------------------------->
<!--            <li>-->
<!--                <img src="/uploads/dummy-1500x700.png" alt="15421 Southwest 39th Terrace"/>-->
<!--            </li>-->
            <li>
                <img src="/media/images/background.jpg" alt=""/>
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
                <div class="logo_slider"><img src="/media/images/logo_80.jpg" /></div>
                <div class="form_search">
                    <div class="form_inputs">
                        <input type="search" placeholder="Onde" /> <input type="text" placeholder="O que?" />
                    </div>
                    <div class="submit_div">
                        <input type="submit" id="submit_search" value=""/>
                    </div>
                </div>
        </form>
    </div>
</div>
<!-- /#slider-wrapper -->
<?=new View("/template/login")?>