const resizeDelay = 200;

function onWindowResize() {
    window.setTimeout(function () {
        const e = $('#plan-holder').width();
        $("#invesmentplan").mapster("resize",e);
    }, resizeDelay);
}

$(document).ready(function() {

// Tooltip
    $('area[title]').each(function () {
        const $this = $(this);
        const clas = $this.attr('class');
        $this.qtip({
            content: $this.attr('title'),
            position: {
                my: 'bottom center',
                at: 'bottom center',
                target: 'mouse',
                adjust: {x:0, y: -10} ,
            },
            style: {
                classes: clas,
                tip: {
                    corner: true,
                    mimic: false,
                    width: 12,
                    height: 8,
                    border: true,
                    offset: 0
                }
            },
        });
    });


    const sold = '0063a9'; // mieszkanie sprzedane
    const reservation = '940000'; // mieszkanie zarezerwowane
    const forsale = '3a9019'; // mieszkanie na sprzedaz
    const rent = 'de8300'; // mieszkanie wynajete
    const hoverOpacity = 0.8;
    const normalState = 0.5;

    const tabEl = document.querySelectorAll('button[data-bs-toggle="tab"]');
    tabEl.forEach(function(el){
        el.addEventListener('shown.bs.tab', function (event) {
            const e = $('.floor-plan-holder').width();
            $(".floorplan").mapster("resize",e);
        })
    })

    $(".floorplan").mapster({
        onClick: function() {
            const a = $(this).attr("data-roomstatus");
            // if (a !== "2") {
            //     window.open(this.href, "_self")
            // } else {
            //     return false
            // }

            window.open(this.href, "_self")
        },
        fillOpacity: hoverOpacity,
        onMouseover: function() {
            const a = $(this).attr("data-roomstatus");
            if (a === "2") {
                $(this).mapster("set", false).mapster("set", true, {
                    fillColor: reservation,
                    fillOpacity: hoverOpacity
                })
            }
            if (a === "3") {
                $(this).mapster("set", false).mapster("set", true, {
                    fillColor: sold,
                    fillOpacity: hoverOpacity
                })
            }
            if (a === "1") {
                $(this).mapster("set", false).mapster("set", true, {
                    fillColor: forsale,
                    fillOpacity: hoverOpacity
                })
            }
            if (a === "4") {
                $(this).mapster("set", false).mapster("set", true, {
                    fillColor: rent,
                    fillOpacity: hoverOpacity
                })
            }
        },
        onMouseout: function() {
            $(this).mapster("set", false);
            $("area[data-roomstatus='2']").mapster("set", true, {
                fillColor: reservation,
                fillOpacity: normalState
            });
            $("area[data-roomstatus='3']").mapster("set", true, {
                fillColor: sold,
                fillOpacity: normalState
            });
            $("area[data-roomstatus='1']").mapster("set", true, {
                fillColor: forsale,
                fillOpacity: normalState
            });
            $("area[data-roomstatus='4']").mapster("set", true, {
                fillColor: rent,
                fillOpacity: normalState
            })
        }
    });

    $("area[data-roomstatus='2']").mapster("set", true, {
        fillColor: reservation,
        fillOpacity: normalState
    });
    $("area[data-roomstatus='3']").mapster("set", true, {
        fillColor: sold,
        fillOpacity: normalState
    });
    $("area[data-roomstatus='1']").mapster("set", true, {
        fillColor: forsale,
        fillOpacity: normalState
    });
    $("area[data-roomstatus='4']").mapster("set", true, {
        fillColor: rent,
        fillOpacity: normalState
    });
});

$(window).bind('resize', onWindowResize);
