<div id="search" class="center-block">
    <form method="post" action="/search" class="navbar-form navbar-left" role="search">
        <div class="logo_slider"><img src="/media/images/logo_80.jpg" /></div>
        <div class="form-group form_search">
                    <span class="slogan">
                        <a href="#">Investir</a> | <a href="#">Reabilitar</a> | <a href="#">Viver</a>
                    </span>
                    <span class="form_inputs">
                        <input type="text" class="" placeholder="Onde" />
                    </span>
                    <span class="submit_div">
                        <button onclick="#" id="" type="button"><img src="/media/images/search-icon.png" /></button>
<!--                        <input type="submit" id="submit_search" value=""/>-->
                    </span>
        </div>
    </form>
</div>

<div id="slider_wrapper">
    <div class="flexslider2">
                <img src="/media/images/background.jpg" alt=""/>
    </div>
    <div id="menu">
        <!----------------------------------- #Contact Information# -------------------------------------->
        <span class="contact-info"><i class="contact-email"></i><a href="#login_form" id="login_pop">Login</a></span>
        <span class="contact-info"><i class="contact-email"></i><a href="#join_form" id="join_pop">Registar</a></span>
<!--        <span class="contact-info"><i class="contact-phone"></i>+351 916 458 456</span>-->
        <!------------------------------------------------------------------------------------------------>

    </div>
</div>

<!-- /#slider-wrapper -->
<?=new View("/template/login")?>
