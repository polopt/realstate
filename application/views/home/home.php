<script type="text/javascript">
    <!--------------------------------#Do not edit this sections unless you know what are you doing#------------------------------->
        jQuery(document).ready(function(){
            // Tab contents = .inside
            var tag_cloud_class = '#tagcloud';
            //Fix for tag clouds - unexpected height before .hide()
            var tag_cloud_height = jQuery( '#tagcloud').height();
            jQuery( '.inside ul li:last-child').css( 'border-bottom','0px' ); // remove last border-bottom from list in tab content
            jQuery( '.realTabs').each(function(){
                jQuery(this).children( 'li').children( 'a:first').addClass( 'selected' ); // Add .selected class to first tab on load
            });
            jQuery( '.inside > *').hide();
            jQuery( '.inside > *:first-child').show();
            jQuery( '.realTabs li a').click(function(evt){ // Init Click funtion on Tabs
                var clicked_tab_ref = jQuery(this).attr( 'href' ); // Strore Href value
                jQuery(this).parent().parent().children( 'li').children( 'a').removeClass( 'selected' ); //Remove selected from all tabs
                jQuery(this).addClass( 'selected' );
                jQuery(this).parent().parent().parent().children( '.inside').children( '*').hide();
                jQuery( '.inside ' + clicked_tab_ref).fadeIn(500);
                evt.preventDefault();
            });
        });
    <!------------------------------------------------------------------------------------------------------------------------------>
</script>
<script type='text/javascript' src='/media/js/jquery.form.min.js'></script>
<script type='text/javascript' src='/media/js/jpages.js'></script>
<script type='text/javascript' src='/media/library/bootstrap/js/bootstrap.min.js'></script>
<script type='text/javascript' src='/media/js/jquery.jcarousel.min.js'></script>
<script type='text/javascript' src='/media/js/jquery.flexslider.js'></script>
<script type='text/javascript' src='/media/js/html5shiv.js'></script>
<script type='text/javascript' src='/media/js/jquery.placeholder.js'></script>
<script type='text/javascript' src='/media/js/jquery.selectbox.js'></script>
<script type='text/javascript' src='/media/js/map-highlight.js'></script>
<script type='text/javascript' src='/media/js/real-expert.js'></script>
<script type='text/javascript' src='/media/js/selectivizr.min.js'></script>
<script type='text/javascript' src='/media/js/respond.min.js'></script>

<div class="content-wrapper clearfix">
    <div id="headline_wrapper">
        <div id="headline_container" class="container">
            <section class="headline-title">
                <!------------------------------#Headline#----------------------------------------->
                <h3>Propriedades ....</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, facilis hic fuga iure molestiae doloremque. Voluptatibus, animi, veritatis.
                </p>
                <!--------------------------------------------------------------------------------->
            </section>
            <section class="property-search">
                <div class="row-fluid">
                    <div id="map_search" class="span5">
                        <!------------------------------------#Map Area#----------------------------------------------------->
                        <img class="map" src="/media/images/maps/usa-map.png" usemap="#usa_map" alt="usa map" />
                        <map name="usa_map" id="usa_map">
                            <area shape="poly" coords="29,43,26,51,24,61,20,68,14,74,13,87,36,93,51,97,70,101,75,81,73,75,77,70,80,64,78,58,67,55,52,56,42,54,36,53" href="#" alt="Oregon" title="Oregon"  />
                            <area shape="poly" coords="14,88,12,94,11,99,7,103,9,108,9,117,8,120,13,132,16,139,17,146,17,152,18,155,22,164,25,169,25,175,33,177,38,183,41,186,42,186,45,191,51,199,59,201,69,203,75,202,75,197,78,190,80,187,77,177,40,128,46,97,14,88" href="#" alt="California" title="California"  />
                            <area shape="poly" coords="92,30,85,27,84,36,82,43,80,51,79,58,82,63,79,67,76,72,73,74,75,78,75,85,69,101,117,109,120,80,116,81,109,81,106,81,106,78,103,75,101,71,100,68,98,68,96,65,96,61,97,58,97,54,95,50,91,45,90,39,90,34,91,30" href="#" alt="Idaho" title="Idaho"  />
                            <area shape="poly" coords="46,97,45,103,44,109,42,118,40,125,42,132,50,142,59,156,67,166,73,174,77,178,78,167,81,169,84,168,85,159,90,126,94,106" href="#" alt="Nevada" title="Nevada"  /><area shape="poly" coords="121,78,124,77,130,79,143,80,155,81,170,82,174,82,175,40,147,38,133,36,113,33,101,31,91,30,91,34,91,39,92,44,94,48,97,52,98,57,97,62,98,65,100,68,103,71,103,76,106,78,110,81,118,81" href="#" alt="Montana" title="Montana"  />
                            <area shape="poly" coords="123,224,124,204,126,183,128,164,115,163,97,161,85,158,85,163,84,169,79,168,77,176,78,180,79,185,80,187,77,190,75,196,75,203,73,205,77,208,89,214,99,219,107,222,114,223" href="#" alt="Arizona" title="Arizona"  />
                            <area shape="poly" coords="127,164,132,122,116,120,115,109,94,106,91,124,88,143,86,157,98,161,110,162" href="#" alt="Utah" title="Utah"  />
                            <area shape="poly" coords="172,125,173,82,154,81,141,80,131,80,122,78,120,85,119,97,118,106,117,110,117,120,131,122,151,124" href="#" alt="Myoming" title="Myoming"  />
                            <area shape="poly" coords="188,167,188,126,172,125,144,124,132,122,128,164,156,167" href="#" alt="Colorado" title="Colorado"  />
                            <area shape="poly" coords="146,220,178,220,178,167,154,166,136,166,128,165,126,187,125,200,124,214,124,224,130,224,130,221,137,220" href="ht#" alt="New Mexico" title="New Mexico"  />
                            <area shape="poly" coords="228,73,228,67,226,61,226,52,223,41,208,40,187,41,176,40,175,60,175,72,195,73" href="#" alt="North Dakota" title="North Dakota"  />
                            <area shape="poly" coords="230,106,231,98,231,88,231,81,227,73,202,73,175,73,174,93,174,104,202,104,218,105" href="#" alt="South Dakota" title="South Dakota"  />
                            <area shape="poly" coords="243,135,237,128,235,119,233,111,229,106,210,104,197,104,174,104,173,124,188,125,189,135" href="#" alt="Nebraska" title="Nebraska"  />
                            <area shape="poly" coords="251,166,250,143,245,139,246,136,218,136,189,135,189,167,221,168" href="#" alt="Kansas" title="Kansas"  />
                            <area shape="poly" coords="252,201,252,186,251,173,250,167,226,168,206,167,189,168,180,168,179,172,204,173,205,192,208,195,211,194,213,197,219,198,223,200,228,201,238,200,245,200,248,199" href="#" alt="Oklahoma" title="Oklahoma"  />
                            <area shape="poly" coords="261,241,263,227,259,221,258,203,253,202,248,199,239,201,231,201,221,200,215,198,211,195,206,194,204,173,179,173,178,221,147,221,152,228,159,233,162,238,163,242,175,250,178,248,180,246,182,244,185,243,187,243,189,243,193,244,198,249,205,260,207,263,211,271,214,278,220,281,229,283,228,274,229,267,233,260,243,255,252,248" href="#" alt="Texas" title="Texas"  />
                            <area shape="poly" coords="271,94,267,89,263,86,259,84,258,79,258,75,256,72,260,67,259,61,266,53,274,45,264,46,257,45,252,41,249,42,242,41,238,36,236,39,223,41,225,49,226,56,228,66,228,72,228,76,231,82,232,97,251,96,261,95" href="#" alt="Minnesota" title="Minnesota"  />
                            <area shape="poly" coords="273,127,277,121,276,119,282,115,281,109,278,105,273,102,272,96,260,96,232,98,230,105,233,109,235,119,237,126,251,128,263,126" href="#" alt="Iowa" title="Iowa"  />
                            <area shape="poly" coords="293,174,295,169,296,164,295,160,292,158,292,154,288,152,284,151,285,147,285,145,285,143,283,143,280,141,277,137,274,133,273,127,238,128,243,135,247,135,244,137,247,142,249,148,250,157,250,162,251,169,252,172,264,170,277,169,287,168,289,169,291,171" href="#" alt="Missouri" title="Missouri"  />
                            <area shape="poly" coords="259,207,263,208,272,207,281,208,284,206,281,200,284,196,286,188,289,185,292,177,292,174,288,173,287,170,279,169,266,170,256,172,251,172,252,186,253,201,257,202" href="#" alt="Arkansas" title="Arkansas"  />
                            <area shape="poly" coords="297,161,301,161,301,157,304,155,304,152,304,149,305,146,308,142,308,138,306,132,306,126,304,119,304,112,302,108,298,102,285,104,278,105,282,109,282,113,280,116,277,121,275,123,274,127,274,132,275,134,278,136,280,139,283,141,286,143,285,147,284,149,286,151,290,151,292,151,292,153,292,155,292,158,293,159,297,161" href="#" alt="Illinois" title="Illinois"  />
                            <area shap</div>
                    <area shape="poly" coords="311,108,319,106,328,105,334,104,337,101,337,96,341,93,339,88,338,83,335,80,333,80,332,83,329,85,326,84,326,79,330,75,330,72,328,68,325,65,317,63,316,65,315,72,313,74,310,73,308,76,308,83,309,89,310,93,311,99,310,106" href="#" alt="Michigan" title="Michigan"  />
                    <area shape="poly" coords="325,107,318,107,308,108,303,110,305,118,306,124,307,130,307,138,309,142,307,148,305,152,312,149,317,148,319,147,322,145,324,142,328,138,329,134,328,129,326,118,326,110" href="#" alt="Indiana" title="Indiana"  />
                    <area shape="poly" coords="352,138,352,133,354,129,357,124,360,121,363,118,362,113,361,106,360,102,359,97,354,101,349,104,345,106,340,106,335,106,329,105,326,105,325,108,326,114,327,120,328,126,328,132,329,133,333,134,336,136,342,137,346,137,350,137" href="h#" alt="Ohio" title="Ohio"  />
                    <area shape="poly" coords="296,167,305,167,306,164,313,163,327,163,338,160,349,159,356,149,352,142,350,139,350,136,340,137,336,137,332,135,330,134,328,138,327,141,325,143,322,147,321,148,319,149,313,150,311,150,309,151,306,152,304,155,304,158,304,160,299,161,297,164" href="#" alt="Kentucky" title="Kentucky"  />
                    <area shape="poly" coords="309,182,316,181,327,179,336,178,339,177,343,174,345,172,349,168,354,165,359,162,361,159,361,155,351,156,343,159,335,160,329,162,319,164,313,164,306,165,305,167,302,167,298,167,295,167,294,171,293,175,292,178,291,182,292,183,301,183,305,183,309,183" href="#" alt="Tennessee" title="Tennessee"  />
                    <area shape="poly" coords="310,232,319,230,318,226,321,223,334,223,342,221,340,213,340,208,339,203,337,199,335,193,330,179,315,181,309,183,309,204,308,227" href="#" alt="Alabama" title="Alabama"  />
                    <area shape="poly" coords="393,282,397,277,395,272,396,266,397,261,394,256,390,250,388,246,386,241,382,235,379,229,375,223,373,219,371,221,371,223,370,223,362,223,358,223,348,224,343,224,340,224,336,223,331,222,320,223,323,226,322,229,329,228,334,228,338,230,341,233,344,233,347,232,351,231,355,231,357,231,362,231,365,234,367,237,368,240,368,243,369,247,369,251,372,252,370,255,371,257,372,258,375,261,377,262,380,264,382,268,384,271,385,272,388,273,389,276,390,279,390,280" href="#" alt="Florida" title="Florida"  />
                    <area shape="poly" coords="370,222,374,218,375,209,375,204,375,203,374,201,371,197,369,195,366,193,363,190,360,188,357,184,355,181,353,181,351,178,350,177,344,177,341,178,340,178,336,179,335,180,332,180,333,189,335,194,337,197,338,202,339,205,340,206,340,209,341,213,340,215,341,218,343,222,351,223,357,223,363,224,369,223" href="#" alt="Georgia" title="Georgia"  />
                    <area shape="poly" coords="377,204,380,200,384,196,387,192,389,187,391,183,393,179,391,176,387,174,382,173,377,173,371,173,369,172,365,172,359,172,354,173,353,175,351,178,355,180,360,185,364,189,369,192,373,197,375,201,375,204" href="#" alt="South Carolina" title="South Carolina"  />
                    <area shape="poly" coords="342,176,353,176,355,173,357,171,365,171,370,170,376,171,381,172,386,171,389,173,391,175,396,177,399,177,401,173,401,171,405,169,411,165,411,162,412,159,417,150,411,146,402,147,389,151,371,155,362,156,357,162,354,165,349,169,348,170,341,177" href="#" alt="North Calorina" title="North Calorina"  />
                    <area shape="poly" coords="405,109,413,115,417,105,415,99,415,96,414,91,407,91,403,88,401,86,390,87,378,90,369,93,364,95,363,93,359,96,364,115,364,119" href="#" alt="Pennsylvania, New Jersey" title="Pennsylvania, New Jersey"  />
                    <area shape="poly" coords="415,88,428,82,432,79,440,80,443,77,442,71,431,69,431,62,427,57,423,50,422,46,418,42,403,49,409,66,413,72,414,79" href="#" alt="Vermont, New Hampshire, Massachusetts, Connecticut, Rhode Island" title="Vermont, New Hampshire, Massachusetts, Connecticut, Rhode Island"  />
                    <area shape="poly" coords="410,145,406,141,403,134,401,131,396,127,394,126,393,122,390,119,385,117,376,116,364,119,359,124,352,133,350,140,353,144,355,147,350,156,364,155,380,152,398,149,408,145" href="#" alt="Virginia, West Virginia" title="Virginia, West Virginia"  />
                    <area shape="poly" coords="78,58,79,51,80,47,80,45,82,42,82,39,82,37,83,34,83,31,84,28,81,26,76,25,72,25,69,24,63,23,60,22,55,20,52,20,50,18,47,18,45,17,45,18,45,20,46,22,47,23,46,24,44,25,42,26,40,25,38,24,35,23,32,22,31,21,30,24,30,27,30,29,30,32,30,34,30,38,30,40,30,42,31,42,33,45,35,46,36,48,36,50,36,50,37,51,43,52,44,52,47,54,48,54,53,54,57,55,60,55,65,55,70,56,74,56,75,58" href="#" alt="Washington" title="Washington"  />
                    <area shape="poly" coords="299,102,298,98,297,94,297,91,297,88,297,85,299,82,299,79,298,77,296,79,293,80,294,77,294,76,295,73,295,71,294,69,292,67,289,65,286,65,283,65,281,65,279,65,275,64,272,62,269,61,270,58,267,59,266,60,262,61,261,63,260,66,260,68,260,70,258,71,257,72,258,75,259,78,258,79,259,82,260,84,262,84,262,85,265,87,267,89,269,90,270,92,272,94,273,96,274,98,275,101,275,103,276,104,280,104,284,104,286,103,289,103,291,103,294,103,296,103,298,103" href="#" alt="Wisconsin" title="Wisconsin"  />
                    <area shape="poly" coords="261,241,265,241,268,242,273,243,277,244,278,241,280,240,282,241,286,243,289,245,290,247,291,247,292,245,293,244,295,246,296,246,298,246,299,245,298,244,298,243,299,243,300,243,302,245,303,245,304,245,305,245,303,243,302,243,301,242,301,241,301,240,302,239,302,237,302,236,300,236,299,236,298,236,295,237,293,237,292,236,292,234,294,234,297,233,298,233,298,232,298,230,298,229,297,228,294,227,292,227,289,227,287,227,284,227,283,226,282,226,284,224,284,222,284,219,284,216,284,213,285,211,285,210,284,209,282,208,278,208,275,208,272,208,270,208,269,208,266,208,264,208,263,208,262,208,260,208,259,209,259,212,259,215,259,217,259,218,260,221,261,223,263,226,263,227,263,229,263,230,263,233,263,235,262,238,262,239,262,240,262,240" href="#" alt="Luoisiana" title="Luoisiana"  />
                    <area shape="poly" coords="430,59,431,55,432,53,432,51,433,49,435,48,437,47,438,46,438,44,438,42,439,39,440,39,441,39,442,39,444,38,446,37,447,35,448,33,449,30,449,29,448,28,446,27,445,26,443,24,441,21,439,20,438,18,438,17,438,15,437,14,437,13,436,12,435,10,435,10,434,9,433,8,432,8,430,8,430,8,428,9,427,10,427,10,426,11,424,11,424,11,423,12,422,13,422,14,422,16,422,18,422,19,421,22,421,23,422,24,422,26,422,27,422,30,422,32,422,33,422,35,421,36,421,37,420,39,420,40,420,41,421,42,422,44,423,45,423,46,424,48,426,50,427,52,428,53,429,55,429,56" href="#" alt="Maine" title="Maine"  />
                    <area shape="poly" coords="364,92,364,88,366,87,368,86,369,85,367,83,367,82,368,80,371,79,374,78,375,78,377,77,381,75,384,74,385,71,387,69,387,67,386,65,386,63,387,61,387,59,388,57,390,55,392,53,395,52,397,51,401,49,403,48,405,57,406,59,407,62,407,65,408,67,409,68,410,70,411,71,412,74,412,75,413,79,413,81,413,83,413,85,413,86,413,88,413,90,413,91,412,91,408,90,407,90,405,88,402,86,401,86,399,86,397,86,393,86,390,86,387,87,383,88,380,89,376,90,371,91,368,92,367,93,366,94" href="#" alt="New York" title="New York"  />
                    <area shape="poly" coords="400,127,399,124,397,122,397,120,397,116,398,114,401,114,401,115,401,119,402,120,403,122,405,124,405,126,408,127,408,129,408,132,408,135,410,134,411,131,412,129,413,126,412,124,412,122,411,120,409,119,408,118,408,116,407,116,407,114,406,113,406,112,402,111,400,111,397,111,392,112,389,113,389,114,388,116,389,118,390,119,392,120,393,120,395,119,396,119,397,119,397,121,398,123,399,122" href="#" alt="Delaware, Maryland, Washington DC" title="Delaware, Maryland, Washington DC"  />
                    </map>
                    <!------------------------------------#End of Map Area#---------------------------------------------->
                </div>
                <div class="span7">
                    <div class="search-wrapper">
                        <!------------------------------------#Property Search Form#-------------------------------->
                        <div class="search-title">Find Property</div>
                        <div class="search-form-v1">
                            <span class="search-or">or</span>
                            <p class="search-info">Address, Suburbs, Postcodes, or Regions (separated by commas)</p>
                            <form class="advance-search-form-v1 clearfix form-inline" action="#" method="get">
                                <div class="option-bar location">
                                    <input class="input-location" type="text" name="real_location" placeholder="e.g. 21 street, Many Hill, New York" />
                                </div>
                                <div class="option-bar status">
												<span class="selectwrap">
													<select name="real_status" id="select-status" class="search-select">
                                                        <option value="for-rent">For Rent</option><option value="on-sale">On Sale</option>
                                                        <option value="any" selected>Status</option>
                                                    </select>
												</span>
                                </div>
                                <div class="option-bar type">
												<span class="selectwrap">
													<select name="real_type" id="select-type" class="search-select">
                                                        <option value="apartments">Apartments</option><option value="bungalows">Bungalows</option><option value="condominium">Condominium</option><option value="villas">Villas</option><option value="any" selected="selected">Type - Any</option>													</select>
												</span>
                                </div>
                                <div class="option-bar bedroom">
												<span class="selectwrap">
													<select name="real_bedroom" id="select-bedroom" class="search-select">
                                                        <option value="1">1</option><option value="2">2</option><option value="3">3</option>
                                                        <option value="4">4</option><option value="5">5</option><option value="6">6</option>
                                                        <option value="7">7</option><option value="8">8</option><option value="9">9</option>
                                                        <option value="10">10</option><option value="any" selected="selected">Bedroom</option>
                                                    </select>
												</span>
                                </div>
                                <div class="option-bar bathroom">
												<span class="selectwrap">
													<select name="real_bathroom" id="select-bathroom" class="search-select">
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="any" selected="selected">Bathroom</option>
                                                    </select>
												</span>
                                </div>
                                <div class="option-bar min-price">
												<span class="selectwrap">
													<select name="min_price" id="select-min-price" class="search-select">
                                                        <option value="1000">$1,000</option>
                                                        <option value="5000">$5,000</option>
                                                        <option value="10000">$10,000</option>
                                                        <option value="50000">$50,000</option>
                                                        <option value="100000">$100,000</option>
                                                        <option value="200000">$200,000</option>
                                                        <option value="300000">$300,000</option>
                                                        <option value="400000">$400,000</option>
                                                        <option value="500000">$500,000</option>
                                                        <option value="600000">$600,000</option>
                                                        <option value="700000">$700,000</option>
                                                        <option value="800000">$800,000</option>
                                                        <option value="900000">$900,000</option>
                                                        <option value="1000000">$1,000,000</option>
                                                        <option value="1500000">$1,500,000</option>
                                                        <option value="2000000">$2,000,000</option>
                                                        <option value="2500000">$2,500,000</option>
                                                        <option value="5000000">$5,000,000</option>
                                                        <option value="any" selected="selected">Min. Price</option>
                                                    </select>
												</span>
                                </div>
                                <div class="option-bar max-price">
												<span class="selectwrap">
													<select name="max_price" id="select-max-price" class="search-select">
                                                        <option value="5000">$5,000</option>
                                                        <option value="10000">$10,000</option>
                                                        <option value="50000">$50,000</option>
                                                        <option value="100000">$100,000</option>
                                                        <option value="200000">$200,000</option>
                                                        <option value="300000">$300,000</option>
                                                        <option value="400000">$400,000</option>
                                                        <option value="500000">$500,000</option>
                                                        <option value="600000">$600,000</option>
                                                        <option value="700000">$700,000</option>
                                                        <option value="800000">$800,000</option>
                                                        <option value="900000">$900,000</option>
                                                        <option value="1000000">$1,000,000</option>
                                                        <option value="1500000">$1,500,000</option>
                                                        <option value="2000000">$2,000,000</option>
                                                        <option value="2500000">$2,500,000</option>
                                                        <option value="5000000">$5,000,000</option>
                                                        <option value="10000000">$10,000,000</option>
                                                        <option value="any" selected="selected">Max. Price</option>
                                                    </select>
												</span>
                                </div>
                                <div class="option-submit">
                                    <input type="submit" class="advance-button-search" value="&nbsp;" />
                                </div>
                            </form>
                        </div>
                        <!------------------------------------#End of Property Search Form#-------------------------------->
                    </div>
                </div>
        </div>
        </section>
    </div>
</div><!-- /#headline-wrapper -->
<div id="property_list" class="container">
<div id="title-listing" class="container">
    <!-----------------------------#Listing Title#-------------------------------->
    <div class="property-list-title">Featured Properties</div>
    <!----------------------------#/Listing Title#-------------------------------->
    <div class="property-list-by">
        <!---------------------------#Property Listing Filter#-------------------->
        <a class="current" href="#">All</a>
        <a class="" href="#">Apartments</a>
        <a class="" href="#">Bungalows</a>
        <a class="" href="#">Condominium</a>
        <a class="" href="#">Villas</a>
        <!--------------------------#/Property Listing Filter#-------------------->
    </div>
</div><!-- /#title-listing -->
<div class="row-fluid property-row">
    <!---------------------#Featured Properties Listing#------------------------------>
    <div class="span3">
        <article class="property-item">
            <div class="property-/media/images">
                <!---------------------------------#Property /media/images#------------------------------->
                <a href="property-single.html" title="Florida 5, Pinecrest, FL">
                    <img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="Florida 5, Pinecrest, FL" title="Florida 5, Pinecrest, FL" />
                </a>
                <!---------------------------------#/Property /media/images#------------------------------>

                <!-------------------------#Property Status#------------------------->
                <div class="property-status status-35-text">On Sale</div>
                <!-------------------------#/Property Status#------------------------>

            </div><!-- /.property-/media/images -->
            <div class="property-attribute">
                <!---------------------------------#Property Title#------------------------->
                <h3 class="attribute-title"><a href="property-single.html" title="Florida 5, Pinecrest, FL" >Florida 5, Pinecrest, FL</a><i class="icon-heart"></i></h3>
                <span class="attribute-city">Miami</span>
                <div class="attribute-price">
                    <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                </div>
                <!---------------------------------#/Property Title#------------------------->
            </div>
            <div class="property-meta clearfix">
                <!--------------------------------#Property Information#--------------------------------------->
                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240M</span></div>
                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span></div>
                <!--------------------------------#/Property Information#--------------------------------------->
            </div>
        </article>
    </div>
    <div class="span3">
        <article class="property-item">
            <div class="property-/media/images">
                <a href="property-single.html" title="3015 Grand Avenue, CocoWalk">
                    <img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="3015 Grand Avenue, CocoWalk" title="3015 Grand Avenue, CocoWalk" />
                </a>
                <div class="property-status status-28-text">For Rent</div>
            </div><!-- /.property-/media/images -->
            <div class="property-attribute">
                <h3 class="attribute-title">
                    <a href="property-single.html" title="3015 Grand Avenue, CocoWalk" >3015 Grand Avenue, CocoWalk</a>
                    <i class="icon-heart"></i>
                </h3>
                <span class="attribute-city">Miami</span>
                <div class="attribute-price">
                    <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                </div>
            </div>
            <div class="property-meta clearfix">
                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">250 M</span></div>
                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
            </div>
        </article>
    </div>
    <div class="span3">
        <article class="property-item">
            <div class="property-/media/images">
                <a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="1200 Anastasia Avenue, Coral Gables" title="1200 Anastasia Avenue, Coral Gables" /></a>
                <div class="property-status status-35-text">On Sale</div>
            </div><!-- /.property-/media/images -->
            <div class="property-attribute">
                <h3 class="attribute-title"><a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables" >1200 Anastasia Avenue, Cora...</a><i class="icon-heart"></i></h3>
                <span class="attribute-city">Miami</span>
                <div class="attribute-price">
                    <span class="attr-pricing"><sup class="price-curr">$</sup>5,600</span>
                </div>
            </div>
            <div class="property-meta clearfix">
                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>
                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
            </div>
        </article>
    </div>
    <div class="span3">
        <article class="property-item">
            <div class="property-/media/images">
                <a href="property-single.html" title="60 Merrick Way, Miami"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="60 Merrick Way, Miami" title="60 Merrick Way, Miami" /></a>
                <div class="property-status status-28-text">For Rent</div>
            </div><!-- /.property-/media/images -->
            <div class="property-attribute">
                <h3 class="attribute-title"><a href="property-single.html" title="60 Merrick Way, Miami" >60 Merrick Way, Miami</a><i class="icon-heart"></i></h3>
                <span class="attribute-city">Miami</span>
                <div class="attribute-price">
                    <span class="attr-pricing"><sup class="price-curr">$</sup>5,000</span>
                </div>
            </div>
            <div class="property-meta clearfix">
                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">280M</span></div>
                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">6</span></div>
            </div>
        </article>
    </div>
</div>
<div class="row-fluid">
    <div class="span3">
        <article class="property-item">
            <div class="property-/media/images">
                <a href="property-single.html" title="15421 Southwest 39th Terrace"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="15421 Southwest 39th Terrace" title="15421 Southwest 39th Terrace" /></a>
                <div class="property-status status-28-text">For Rent</div>
            </div><!-- /.property-/media/images -->
            <div class="property-attribute">
                <h3 class="attribute-title"><a href="property-single.html" title="15421 Southwest 39th Terrace" >15421 Southwest 39th Terrac...</a><i class="icon-heart"></i></h3>
                <span class="attribute-city">Miami</span>
                <div class="attribute-price">
                    <span class="attr-pricing"><sup class="price-curr">$</sup>3,850</span>
                </div>
            </div>
            <div class="property-meta clearfix">
                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240 M</span></div>
                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">2</span></div>
            </div>
        </article>
    </div>
    <div class="span3">
        <article class="property-item">
            <div class="property-/media/images">
                <a href="property-single.html" title="700 Front Street, Key West, FL"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="700 Front Street, Key West, FL" title="700 Front Street, Key West, FL" /></a>
                <div class="property-status status-35-text">On Sale</div>
            </div><!-- /.property-/media/images -->
            <div class="property-attribute">
                <h3 class="attribute-title">
                    <a href="property-single.html" title="700 Front Street, Key West, FL" >700 Front Street, Key West,...</a>
                    <i class="icon-heart"></i>
                </h3>
                <span class="attribute-city">Miami</span>
                <div class="attribute-price">
                    <span class="attr-pricing"><sup class="price-curr">$</sup>34,400</span>
                </div>
            </div>
            <div class="property-meta clearfix">
                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>
                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span></div>
            </div>
        </article>
    </div>
    <div class="span3">
        <article class="property-item">
            <div class="property-/media/images">
                <a href="property-single.html" title="1903 Hollywood Boulevard"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="1903 Hollywood Boulevard" title="1903 Hollywood Boulevard" /></a>
                <div class="property-status status-35-text">On Sale</div>
            </div><!-- /.property-/media/images -->
            <div class="property-attribute">
                <h3 class="attribute-title"><a href="property-single.html" title="1903 Hollywood Boulevard" >1903 Hollywood Boulevard</a><i class="icon-heart"></i></h3>
                <span class="attribute-city">Toronto</span>
                <div class="attribute-price">
                    <span class="attr-pricing"><sup class="price-curr">$</sup>9,800</span>
                </div>
            </div>
            <div class="property-meta clearfix">
                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">450 M</span></div>
                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
            </div>
        </article>
    </div>
    <div class="span3">
        <article class="property-item">
            <div class="property-/media/images">
                <a href="property-single.html" title="401 Biscayne Boulevard, Miami">
                    <img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="401 Biscayne Boulevard, Miami" title="401 Biscayne Boulevard, Miami" /></a>
                <div class="property-status status-28-text">For Rent</div>
            </div><!-- /.property-/media/images -->
            <div class="property-attribute">
                <h3 class="attribute-title"><a href="property-single.html" title="401 Biscayne Boulevard, Miami" >401 Biscayne Boulevard, Mia...</a><i class="icon-heart"></i></h3>
                <span class="attribute-city">Miami</span>
                <div class="attribute-price">
                    <span class="attr-pricing"><sup class="price-curr">$</sup>45,000</span>
                </div>
            </div>
            <div class="property-meta clearfix">
                <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">300M</span></div>
                <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">5</span></div>
                <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">7</span></div>
            </div>
        </article>
    </div>
</div><!-- /.row-fluid -->
<!-------------------------------------#/Featured Properties Listing#--------------------------------------->
</div><!-- /#property_list -->
<div id="property_info">
    <div class="container carousel-wrapper">
        <div id="recent-title-listing" class="container">
            <div class="recent-property-list-title">Recent Properties</div>
            <div class="recent-property-list-by">
                <div class="jcarousel-control">
                    <a href="#" class="jcarousel-control-prev">
									<span class="icon-stack">
									  <i class="icon-stop icon-stack-base"></i>
									  <i class="icon-chevron-left"></i>
									</span>
                    </a>
                    <a href="#" class="jcarousel-control-next">
									<span class="icon-stack">
									  <i class="icon-stop icon-stack-base"></i>
									  <i class="icon-chevron-right"></i>
									</span>
                    </a>
                </div>
            </div>
        </div><!-- /#title-listing -->
        <div class="jcarousel container">
            <div class="jcontainer">
                <div class="span3">
                    <article class="property-item">
                        <div class="property-/media/images">
                            <a href="property-single.html" title="Florida 5, Pinecrest, FL"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="Florida 5, Pinecrest, FL" title="Florida 5, Pinecrest, FL" /></a>
                            <div class="property-status status-35-text">On Sale</div>
                        </div><!-- /.property-/media/images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="Florida 5, Pinecrest, FL" >Florida 5, Pinecrest, FL</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-/media/images">
                            <a href="property-single.html" title="3015 Grand Avenue, CocoWalk"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="3015 Grand Avenue, CocoWalk" title="3015 Grand Avenue, CocoWalk" /></a>
                            <div class="property-status status-28-text">For Rent</div>
                        </div><!-- /.property-/media/images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="3015 Grand Avenue, CocoWalk" >3015 Grand Avenue, CocoWalk</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>16,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">250 M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-/media/images">
                            <a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="1200 Anastasia Avenue, Coral Gables" title="1200 Anastasia Avenue, Coral Gables" /></a>
                            <div class="property-status status-35-text">On Sale</div>
                        </div><!-- /.property-/media/images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="1200 Anastasia Avenue, Coral Gables" >1200 Anastasia Avenue, Cora...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>5,600</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-/media/images">
                            <a href="property-single.html" title="60 Merrick Way, Miami"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="60 Merrick Way, Miami" title="60 Merrick Way, Miami" /></a>
                            <div class="property-status status-28-text">For Rent</div>
                        </div><!-- /.property-/media/images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="60 Merrick Way, Miami" >60 Merrick Way, Miami</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>5,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">280M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">6</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-/media/images">
                            <a href="property-single.html" title="15421 Southwest 39th Terrace"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="15421 Southwest 39th Terrace" title="15421 Southwest 39th Terrace" /></a>
                            <div class="property-status status-28-text">For Rent</div>
                        </div><!-- /.property-/media/images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="15421 Southwest 39th Terrace" >15421 Southwest 39th Terrac...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>3,850</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">240 M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">2</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-/media/images">
                            <a href="property-single.html" title="700 Front Street, Key West, FL"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="700 Front Street, Key West, FL" title="700 Front Street, Key West, FL" /></a>
                            <div class="property-status status-35-text">On Sale</div>
                        </div><!-- /.property-/media/images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="700 Front Street, Key West, FL" >700 Front Street, Key West,...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>34,400</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">200M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">4</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">5</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-/media/images">
                            <a href="property-single.html" title="1903 Hollywood Boulevard"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-35 wp-post-image" alt="1903 Hollywood Boulevard" title="1903 Hollywood Boulevard" /></a>
                            <div class="property-status status-35-text">On Sale</div>
                        </div><!-- /.property-/media/images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="1903 Hollywood Boulevard" >1903 Hollywood Boulevard</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Toronto</span>
                            <div class="attribute-price">
											<span class="attr-pricing">
											<sup class="price-curr">$</sup>9,800</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">450 M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">3</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">4</span></div>
                        </div>
                    </article>
                </div>
                <div class="span3">
                    <article class="property-item">
                        <div class="property-/media/images">
                            <a href="property-single.html" title="401 Biscayne Boulevard, Miami"><img width="540" height="360" src="uploads/dummy-540x360.png" class="status-28 wp-post-image" alt="401 Biscayne Boulevard, Miami" title="401 Biscayne Boulevard, Miami" /></a>
                            <div class="property-status status-28-text">For Rent</div>
                        </div><!-- /.property-/media/images -->
                        <div class="property-attribute">
                            <h3 class="attribute-title"><a href="property-single.html" title="401 Biscayne Boulevard, Miami" >401 Biscayne Boulevard, Mia...</a><i class="icon-heart"></i></h3>
                            <span class="attribute-city">Miami</span>
                            <div class="attribute-price">
                                <span class="attr-pricing"><sup class="price-curr">$</sup>45,000</span>
                            </div>
                        </div>
                        <div class="property-meta clearfix">
                            <div class="meta-size meta-block"><i class="ico-size"></i><span class="meta-text">300M</span></div>
                            <div class="meta-bedroom meta-block"><i class="ico-bedroom"></i><span class="meta-text">5</span></div>
                            <div class="meta-bathroom meta-block"><i class="ico-bathroom"></i><span class="meta-text">7</span></div>
                        </div>
                    </article>
                </div>
            </div><!-- jcontainer -->
        </div><!-- /.jcarousel -->
    </div><!-- /.container -->
</div><!-- /#property_info -->
<div id="property_partner">
    <div class="container">
        <!--------------------------------------#Partners Section#----------------------------------------------->
        <header class="partner-header">
            <!--#Partners Title#--><h3 class="partner-title">Our Partners</h3><!--#/Partners Title#-->
        </header>
        <p class="partner-excerpt">
            <!---------------#Parners Excerpt#---------------->
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque vitae fermentum diam, vitae gravida eros. Proin interdum imperdiet
            <!---------------#/Partners Excerpt#-------------->
        </p>
        <div id="partners_slider" class="partners-logo-wrapper">
            <div class="partner-list">
                <div class="partner-item">
                    <!-------------#Partners Logo and URL#------------------->
                    <a target="_blank" href="http://www.graphicriver.net" title="graphicriver">
                        <img width="170" height="55" src="uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver" title="graphicriver" />
                    </a>
                    <!-------------#Partners Logo and URL#------------------->
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.themeforest.net" title="Themeforest2">
                        <img width="170" height="55" src="uploads/themeforest-170x55.png" class="attachment-partners-thumb wp-post-image" alt="Themeforest2" title="Themeforest2" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.photodune.net" title="Photodune2">
                        <img width="170" height="55" src="uploads/photodune-170x55.png" class="attachment-partners-thumb wp-post-image" alt="Photodune2" title="Photodune2" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.graphicriver.net" title="graphicriver2">
                        <img width="170" height="55" src="uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver2" title="graphicriver2" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.videohive.net" title="videohive">
                        <img width="170" height="55" src="uploads/videohive-170x55.png" class="attachment-partners-thumb wp-post-image" alt="videohive" title="videohive" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.activeden.net" title="activeden">
                        <img width="170" height="55" src="uploads/activeden-170x55.png" class="attachment-partners-thumb wp-post-image" alt="activeden" title="activeden" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.themeforest.net" title="themeforest">
                        <img width="170" height="55" src="uploads/themeforest-170x55.png" class="attachment-partners-thumb wp-post-image" alt="themeforest" title="themeforest" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.photodune.net" title="photodune">
                        <img width="170" height="55" src="uploads/photodune-170x55.png" class="attachment-partners-thumb wp-post-image" alt="photodune" title="photodune" />
                    </a>
                </div>
                <div class="partner-item">
                    <a target="_blank" href="http://www.graphicriver.net" title="graphicriver">
                        <img width="170" height="55" src="uploads/graphicriver-170x55.png" class="attachment-partners-thumb wp-post-image" alt="graphicriver" title="graphicriver" />
                    </a>
                </div>
            </div>
            <div class="partner-control">
                <a href="#" class="partner-prev"><span class="icon-stack"><i class="icon-stop icon-stack-base"></i><i class="icon-chevron-left"></i></span></a>
                <a href="#" class="partner-next"><span class="icon-stack"><i class="icon-stop icon-stack-base"></i><i class="icon-chevron-right"></i></span></a>
            </div>
        </div>
        <!--------------------------------------#/Partners Section#----------------------------------------------->
    </div>
</div><!-- /#property_partner -->
</div><!-- /.content-wrapper -->
<section id="footer_widgets">
    <div id="footer_widget_wrapper">
        <!--------------------------------------#Footer Widgets Area#----------------------------------->
        <div class="container">
            <div class="row-fluid">
                <div id="text-2" class="span4 widget widget_text">
                    <h3 class="widget-title">About Real Expert</h3>
                    <div class="textwidget">
                        <p>Aquam est tortor, sagittis in fringilla in, pellent esque nec erat.  Aenean semper, neque non faucibus. tortor, sagittis in fringilla in, pellent esque nec eratsemper, neque non.</p>
                        <p>Malesuada, dui felis tempor felis, vel varius ante diam ut mais eque non faucibus. tortor, sagittis. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</p>
                    </div>
                </div>
                <div id="pages-2" class="span2 widget widget_pages">
                    <h3 class="widget-title">Quick Links</h3>
                    <ul>
                        <li class="page_item page-item-14"><a href="#">Blog</a></li>
                        <li class="page_item page-item-18"><a href="#">Contact Us</a></li>
                        <li class="page_item page-item-115"><a href="#">Listing</a></li>
                        <li class="page_item page-item-1864"><a href="#">Property Listing</a></li>
                        <li class="page_item page-item-1681"><a href="#">Property Search</a></li>
                        <li class="page_item page-item-1675"><a href="#">Special Tabs</a></li>
                    </ul>
                </div>
                <div id="pages-5" class="span2 widget widget_pages">
                    <h3 class="widget-title">Another Links</h3>
                    <ul>
                        <li class="page_item page-item-14"><a href="#">Blog</a></li>
                        <li class="page_item page-item-18"><a href="#">Contact Us</a></li>
                        <li class="page_item page-item-115"><a href="#">Listing</a></li>
                        <li class="page_item page-item-1864"><a href="#">Property Listing</a></li>
                        <li class="page_item page-item-1681"><a href="#">Property Search</a></li>
                        <li class="page_item page-item-1675"><a href="#">Special Tabs</a></li>
                    </ul>
                </div>
                <div id="blog-widget-2" class="span4 widget blog">
                    <h3 class="widget-title">Recent Blogs</h3>
                    <ul class="footer-blog">
                        <li>
                            <a href="#">
                                <img width="70" height="60" src="uploads/dummy-70x60.png" class="alignleft wp-post-image" alt="Lectus non rutrum pulvinar urna leo dignissim lorem" />
                            </a>
                            <a href="#">Lectus non rutrum pulvinar urna leo dignissim lorem</a><br />
                            <span class="blog-date">On : October 30, 2013</span>
                        </li>
                        <li>
                            <a href="#">
                                <img width="70" height="60" src="uploads/dummy-70x60.png" class="alignleft wp-post-image" alt="Aenean dignissim dignissim lorem pellentesque felis risus" /></a>
                            <a href="#">Aenean dignissim dignissim lorem pellentesque felis risus</a><br />
                            <span class="blog-date">On : September 25, 2013</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--------------------------------------#/Footer Widgets Area#----------------------------------->
    </div><!-- /.footer-widget-wrapper -->
</section><!-- #footer_widgets -->