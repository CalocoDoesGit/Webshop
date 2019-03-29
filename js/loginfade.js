loginfade("in");

function loginfade(Direction) {
        
    if (Direction == "in") {
        $('#Login-GrayFade').css({ "top": "0%", "opacity": "1" });
        $('#Login-Body').css({ "top": "50%" });
    } else if (Direction == "out") {
        $('#Login-GrayFade').css({ "top": "-100%", "opacity": "0" });
        $('#Login-Body').css({ "top": "-50%" });
    }

}