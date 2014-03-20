<html>
<head>
    <style type="text/css">
        #background {
            position: fixed;
            left: 0px;
            top: 0px;
            background-size: 100%;
            width: 100%;
            height: 100%;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -o-user-select: none;
            user-select: none;
            z-index: 9990;
        }
    </style>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            var images = ['OUT01ari.jpg', 'OUT02adobe.jpg', 'OUT03alife.jpg', 'OUT04chinup.jpg', 'OUT05datenightwinecologne.jpg', 'OUT06officechair.jpg', 'OUT07printer.jpg', 'OUT08whitewall.jpg', 'OUT09umbrella.jpg', 'OUT10converse.jpg', 'OUT11wardrobebar.jpg'];
            $('#background').css({'background-image': 'url(images/' + images[Math.floor(Math.random() * images.length)] + ')'});
        });
    </script>
</head>
<body>
<div id="background"></div>
<div class="container">
</div>
</body>
</html>