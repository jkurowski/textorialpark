const resizeDelay = 200;

function onWindowResize() {
    window.setTimeout(function () {
        const e = $('#plan-holder').width();
        $("#invesmentplan").mapster("resize",e);
    }, resizeDelay);
}

$(document).ready(function(){
    $(".plan-control a").hover(function() {
        const e = $(this).attr("data-building");
        $("area[alt='building-"+ e +"']").mapster("set", true, {
            fillColor: "9a192b",
            fillOpacity: 0.8
        })
    }, function() {
        $("area").mapster("set", false);
    });

    $('#invesmentplan').mapster({
        fillColor: '9a192b',
        fillOpacity: 0.8,
        clickNavigate: true
    });
});

$(window).bind('resize', onWindowResize);
