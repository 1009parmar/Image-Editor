

/////////////// java script to edit image draggeble and resizeble /////////////////

var positions = JSON.parse(localStorage.positions || "{}");
            var size = JSON.parse(localStorage.size || "{}");
           
            $(function () {
                var d = $(".my").attr("id", function (i) {
                    return "draggable_" + i
                })
                $.each(positions, function (id, pos) {
                    $("#" + id).css(pos)
                })
                $.each(size, function (id, siz) {
                    $("#" + id).css(siz)
                })
            
                d.draggable({
                    containment: "#containment-wrapper",
                    scroll: false,
                    stop: function (event, ui) {
                        positions[this.id] = ui.position
                        localStorage.positions = JSON.stringify(positions)
                    }
                });
                
                d.resizable({
                    containment: "#containment-wrapper",
                    scroll: false,
                    stop: function (event, ui) {
                        size[this.id] = ui.size
                        localStorage.size = JSON.stringify(size)
                    }
                });
            
            });



///////////////// java  script to save image /////////////
var btn1 = document.getElementById("save-me");
btn1.addEventListener('click', function(){
    location.reload();
});     


////////////////// javascript to download an image ////////////
$(function() {
    var element = $("#containment-wrapper"); // global variable
    var getCanvas; // global variable
   
    html2canvas(element, {
        onrendered: function(canvas) {
            $("#previewImage").append(canvas);
            getCanvas = canvas;
        }
    });
    var btn = document.getElementById("btn-Convert-Html2Image");
    btn.addEventListener('click', function download() {
    
        var imgageData = getCanvas.toDataURL("image/png");
        // Now browser starts downloading it instead of just showing it
        var newData = imgageData.replace(/^data:image\/png/, "data:application/octet-stream");
        $("#btn-Convert-Html2Image").attr("download", "your_pic_name.png").attr("href", newData);
        location.reload(true);
    });
    
});  

