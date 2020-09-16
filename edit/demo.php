<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/jquery-ui.css">
    <link rel="stylesheet" href="../css/edit.css" type="text/css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/html2canvas.js"></script>
    <script type="text/javascript" src="../js/jquery.plugin.html2canvas.js"></script>
    <script src="../jquery/jquery-ui.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <?php
    include("../navigation/nav-to-edit.php");
    ?>
    <div class="text-center sidebar">
        <a id="icon-link" class="icon-link" href="#home"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M19.5 10V5a.5.5 0 0
                        0-.5-.5h-4.5V10h5zm0 1.5h-5v8H19a.5.5 0 0 0
                        .5-.5v-7.5zm-6.5-7H5a.5.5 0 0 0-.5.5v14c0
                        .28.22.5.5.5h8v-15zM5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2
                        2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2z"></path>
            </svg><span id="icon-text" class="icon-text">Templates</span></a>
        <a id="icon-link" class="icon-link" href="#services"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0
                        1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2zm0 1.5a.5.5 0 0
                        0-.5.5v14c0 .28.22.5.5.5h14a.5.5 0 0 0 .5-.5V5a.5.5 0 0
                        0-.5-.5H5zm5.75 10.1l3.05-4.15a2 2 0 0 1 3.22-.01L21
                        15.78V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-.09l3.82-5.25a2
                        2 0 0 1 3.22 0l.7.95zm3.6 4.9H19a.5.5 0 0 0
                        .5-.5v-2.72l-3.69-4.94a.5.5 0 0 0-.8 0l-3.33 4.53 2.68
                        3.63zm-5.51-4.96a.5.5 0 0 0-.81 0l-3.44 4.74a.5.5 0 0 0
                        .41.22h7.5l-3.66-4.96zM8.5 10a1.5 1.5 0 1 1 0-3 1.5 1.5
                        0 0 1 0 3z"></path>
            </svg><span id="icon-text" class="icon-text"><br>Photos</span></a>
        <a id="icon-link" class="icon-link" href="#clients"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M3.5 20.61h6v-6h-6v6zm-.5-7.5h7a1
                        1 0 0 1 1 1v7a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-7a1 1 0 0 1
                        1-1zm11.54-3.5h5.92L17.5 4.06l-2.96 5.55zm7.63.03a1 1 0
                        0 1-.88 1.47H13.7a1 1 0 0 1-.88-1.47l3.79-7.11a1 1 0 0 1
                        1.76 0l3.8 7.11zM17.5 20.81a3.2 3.2 0 1 0 0-6.4 3.2 3.2
                        0 0 0 0 6.4zM4.68 7.4l2 2 3.38-3.37a1.41 1.41 0 1
                        0-2-2L6.68 5.4 5.32 4.02a1.42 1.42 0 0 0-2 2L4.68
                        7.4zm-2.12 0l-.3-.31a2.91 2.91 0 1 1
                        4.12-4.13l.3.31.31-.3a2.92 2.92 0 0 1 4.13 4.12L7.39
                        10.8a1 1 0 0 1-1.41 0L2.56 7.4zM17.5 22.3a4.7 4.7 0 1 1
                        0-9.4 4.7 4.7 0 0 1 0 9.4z"></path>
            </svg><span id="icon-text" class="icon-text">Elements</span></a>
        <a id="icon-link" class="icon-link" href="#contact"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path d="M4.03
                        21.03a.75.75 0 0 1-1.06-1.06l17-17a.75.75 0 0 1 1.06
                        1.06l-17 17zm4.5.5a.75.75 0 0 1-1.06-1.06l13-13a.75.75 0
                        0 1 1.06 1.06l-13 13zm5 0a.75.75 0 0
                        1-1.06-1.06l8-8a.75.75 0 0 1 1.06 1.06l-8
                        8zm5.5-.5a.75.75 0 0 1-1.06-1.06l2-2a.75.75 0 0 1 1.06
                        1.06l-2 2zm-15.5-4.5a.75.75 0 0 1-1.06-1.06l13-13a.75.75
                        0 0 1 1.06 1.06l-13 13zm0-5a.75.75 0 0
                        1-1.06-1.06l8-8a.75.75 0 0 1 1.06 1.06l-8
                        8zm.5-5.5a.75.75 0 0 1-1.06-1.06l2-2a.75.75 0 0 1 1.06
                        1.06l-2 2z" fill="currentColor"></path>
            </svg><span id="icon-text" class="icon-text"><br>Text</span></a>
        <a id="icon-link" class="icon-link" href="#contact"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" d="M12.75 13.81v7.44a.75.75 0 1
                        1-1.5 0v-7.4L9.49 15.6a.75.75 0 1
                        1-1.06-1.06l2.35-2.36c.68-.68 1.8-.68 2.48 0l2.35
                        2.36a.75.75 0 1 1-1.06 1.06l-1.8-1.8zM9
                        18v1.5H6.75v-.01A5.63 5.63 0 0 1 5.01 8.66a6 6 0 0 1
                        11.94-.4 5.63 5.63 0 0 1 .3 11.23v.01H15V18h1.88a4.12
                        4.12 0 1 0-1.5-7.97A4.51 4.51 0 0 0 11 4.5a4.5 4.5 0 0
                        0-4.43 5.29 4.13 4.13 0 0 0 .68 8.2V18H9z"></path>
            </svg><span id="icon-text" class="icon-text">Bkground</span></a>
        <a id="icon-link" class="icon-link" href="#contact"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M18
                        5.5h-5.25V18c0 .28.22.5.5.5h2a.75.75 0 1 1 0
                        1.5h-6.5a.75.75 0 1 1 0-1.5h2a.5.5 0 0 0
                        .5-.5V5.5H6a.5.5 0 0 0-.5.5v1.25a.75.75 0 0 1-1.5
                        0V5.5C4 4.67 4.67 4 5.5 4h13c.83 0 1.5.67 1.5
                        1.5v1.75a.75.75 0 1 1-1.5 0V6a.5.5 0 0 0-.5-.5z"></path>
            </svg><span id="icon-text" class="icon-text">Uploasd</span></a>

    </div>

    <div id="side-panel" class=" flex-wrap side-panel">

        <button class="b_poster"><img class="poster" id="poster1" src="../image/createdesign/page_1_thumb_large.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="postre2" src="../image/createdesign/greeting.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="poster3" src="../image/createdesign/happybirthday.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="posrer4" src="../image/createdesign/business.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="poster5" src="../image/createdesign/invitation.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="poster6" src="../image/createdesign/page_1_thumb_large.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="postre7" src="../image/createdesign/greeting.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="poster8" src="../image/createdesign/happybirthday.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="posrer9" src="../image/createdesign/business.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="poster10" src="../image/createdesign/invitation.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="poster5" src="../image/createdesign/invitation.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="poster6" src="../image/createdesign/page_1_thumb_large.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="postre7" src="../image/createdesign/greeting.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="poster8" src="../image/createdesign/happybirthday.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="posrer9" src="../image/createdesign/business.jpg" alt="Snow"></button>
        <button class="b_poster"><img class="poster" id="poster10" src="../image/createdesign/invitation.jpg" alt="Snow"></button>
    </div>
    <div class="left">
    <input style="left:400px;" id="btn-Convert-Html2Image" class="btn-download" type="submit" value="DOWNLOAD ME" onclick="capture();">
    </div>
    <form method="POST" enctype="multipart/form-data" action="../save.php" id="myForm">
        <input type="hidden" name="img_val" id="img_val" value="">
    </form>
    <div class="left canvas-back">

        <div class="left canvas-back">
            <div class="mycanvas" id="containment-wrapper">
                <div style="top:6px;left:90px;" id="draggable" class="my ui-widget-content draggable">
                    <img src="../image/images.jpg" alt="image
                    for resizing">
                    <!-- Define corners -->
                    <div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div>
                    <div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div>
                    <div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div>
                    <div class="ui-resizable-handle ui-resizable-se" id="segrip"></div>
                </div>
                <div style="top:60px;left:4px;" id="draggable" class="my ui-widget-content draggable">
                    <img src="../image/images.jpg" alt="image
                    for resizing">
                    <!-- Define corners -->
                    <div class="ui-resizable-handle ui-resizable-nw" id="nwgrip"></div>
                    <div class="ui-resizable-handle ui-resizable-ne" id="negrip"></div>
                    <div class="ui-resizable-handle ui-resizable-sw" id="swgrip"></div>
                    <div class="ui-resizable-handle ui-resizable-se" id="segrip"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="side-panal-close" style="cursor:pointer" class="text-center side-panal-close"><a class="" href="#">
            <</a> <svg viewBox="0 0 32 112" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.626 17.865l-1.94-1.131C17.684 14.981 16 12.608 16 10.133V0H0v112h16v-10.135c0-2.475 1.684-4.849 4.686-6.6l1.94-1.131C28.628 90.632 32 85.885 32 80.934v-49.87c0-4.95-3.372-9.698-9.374-13.199" fill="#293039"></path></svg></div>

    <script type="text/javascript">
        $(function() {
            $(".icon-link").click(function() {
                document.getElementsByClassName("side-panel")[0].style.display = 'block';
                document.getElementsByClassName("side-panal-close")[0].style.display = 'block';
                $('.icon-link').css('background', 'black'); //WIll remove `color` css from all `li` elements
                $(this).css('background', '#293039'); //Will apply `red` to current element
            });

        });
        $(function() {
            $("#side-panal-close").click(function() {
                document.getElementsByClassName("side-panel")[0].style.display = 'none';
                document.getElementsByClassName("side-panal-close")[0].style.display = 'none';
                $('.icon-link').css('background', 'black');
            });

        });
        var positions = JSON.parse(localStorage.positions || "{}");
        var size = JSON.parse(localStorage.size || "{}");
        $(function() {
            var d = $(".my").attr("id", function(i) {
                return "draggable_" + i
            })
            $.each(positions, function(id, pos) {
                $("#" + id).css(pos)
            })
            $.each(size, function(id, siz) {
                $("#" + id).css(siz)
            })

            d.draggable();

            d.resizable({
                handles: {
                    'ne': '#negrip',
                    'se': '#segrip',
                    'sw': '#swgrip',
                    'nw': '#nwgrip',
                }
            });

        });

        function capture() {
            $('#containment-wrapper').html2canvas({
                onrendered: function(canvas) {
                    $('#img_val').val(canvas.toDataURL("image/png"));
                    document.getElementById("myForm").submit();
                }
            });
        }
    </script>
</body>

</html>