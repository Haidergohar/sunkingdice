function save_screen_resolution() {
    var xhttp = new XMLHttpRequest();
    var screen = Math.floor(window.screen.width * window.devicePixelRatio) + " x " + Math.floor(window.screen.height * window.devicePixelRatio)
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
      }
    };
    xhttp.open("GET", "ajax/save_screen_resolution.php?screen="+screen, true);
    xhttp.send();
}
save_screen_resolution();

function button_counter(){
    var xhttp = new XMLHttpRequest();
    var screen = Math.floor(window.screen.width * window.devicePixelRatio) + " x " + Math.floor(window.screen.height * window.devicePixelRatio)
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
      }
    };
    xhttp.open("GET", "ajax/button_counter.php?btn=increament", true);
    xhttp.send();
}