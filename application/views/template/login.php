<script>
    $(document).ready(function(){
        $("#login_button").click(function () {
            $req = {};
            $req.username = $("#login").val();
            $req.password = $("#password").val();
            $.ajax({
                type: "POST",
                url: '/welcome/login',
                data: $req,
                beforeSend: function () {

                },
                success: function (data) {
                    alert(data);
                }
            });
        })
    });
</script>

<a href="#x" class="overlay" id="login_form"></a>
<div class="popup">
    <h2><?=_("Login")?></h2>
    <p><?=__("Please enter your login and password here")?></p>
    <div>
        <label for="login"><?=__("Login")?></label>
        <input type="text" id="login" value=""/>
    </div>
    <div>
        <label for="password"><?=__("Password")?></label>
        <input type="password" id="password" value=""/>
    </div>
    <input type="button" id="login_button" value="<?=__("Log In")?>" />
    <a class="close" href="#close"></a>
</div>

<!-- popup form #2 -->
<a href="#x" class="overlay" id="join_form"></a>
<div class="popup">
    <h2><?=__("Sign Up")?></h2>
    <p><?=__("Please enter your details here")?></p>
    <div>
        <label for="email"><?=__("Login (Email)")?></label>
        <input type="text" id="email" value=""/>
    </div>
    <div>
        <label for="pass"><?=__("Password")?></label>
        <input type="password" id="pass" value=""/>
    </div>
    <div>
        <label for="firstname"><?=__("First name")?></label>
        <input type="text" id="firstname" value=""/>
        57
    </div>
    <div>
        <label for="lastname"><?=__("Last name")?></label>
        <input type="text" id="lastname" value=""/>
    </div>
    <input type="button" value="<?=__("Sign Up")?>"/>&nbsp;&nbsp;&nbsp;or&nbsp;&nbsp;&nbsp;<a href="#login_form" id="login_pop"><?=__("Log In")?></a>
    <a class="close" href="#close"></a>
</div>
