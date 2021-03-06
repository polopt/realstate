<style>
    .ui-autocomplete-loading {
        background: white url('images/ui-anim_basic_16x16.gif') right center no-repeat;
    }
    #city { width: 25em; }

    #images-list li {
        margin-left: 2px;
        float: left;
    }
    #images-list img {
        height: 100px;
    }
</style>

<script>
    $(function() {
        function log( message ) {
            $( "#zone_id" ).val(message);
        }

        $( "#city" ).autocomplete({
            source: function( request, response ) {
                $.ajax({
                    url: "/welcome/search",
                    dataType: "json",
                    method: "post",
                    data: {
                        featureClass: "P",
                        style: "full",
                        maxRows: 12,
                        search: request.term
                    },
                    success: function( data ) {
                        response( $.map( data.result, function( item ) {
                            return {
                                label: item.name,
                                value: item.name
                            }
                        }));
                    }
                });
            },
            minLength: 4,
            messages: {
                noResults: '',
                results: ''
            },
            select: function( event, ui ) {
                log( ui.item.id);
            },
            open: function() {
                $( this ).removeClass( "ui-corner-all" ).addClass( "ui-corner-top" );
            },
            close: function() {
                $( this ).removeClass( "ui-corner-top" ).addClass( "ui-corner-all" );
            }

        });
    });
</script>

<div id="slider_wrapper">
    <div id="slider_wrapper_new2">
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
<div id="search" class="center-block">
    <form method="post" action="/search" class="navbar-form navbar-left" role="search">
<!--        <div class="logo_slider">-->
<!--            <img src="/media/images/logo_80.jpg" height="100%"/>-->
<!--        </div>-->
<!--        <div class="form-group form_search">-->
<!--                    <span class="slogan">-->
<!--                        <a href="#">Investir</a> | <a href="#">Reabilitar</a> | <a href="#">Viver</a>-->
<!--                    </span>-->
<!--                    <span class="form_inputs">-->
<!--                        <input type="text" class="" placeholder="Onde" />-->
<!--                    </span>-->
<!--                    <span class="submit_div">-->
<!--                        <button onclick="#" id="" type="button"><img src="/media/images/search-icon.png" /></button>-->
<!--                    </span>-->
<!--        </div>-->
        <table>
            <tr>
                <td><img src="/media/images/logo_80.jpg" height="100%"/></td>
                <td class="text"></td>
                <td class="text-color">
                    <span class="slogan"><a href="#">Investir</a> | <a href="#">Reabilitar</a> | <a href="#">Viver</a></span>
                </td>
                <td class="text-color"><input type="text" id="city" name="city" placeholder="Onde?"/></td>
                <td class="text-color">
                    <button onclick="#" id="" type="submit"><img src="/media/images/search-icon.png" /></button>
                </td>
                <input type="hidden" name="zone_id" />
            </tr>
        </table>
    </form>
</div>
<!-- /#slider-wrapper -->
<?=new View("/template/login")?>
