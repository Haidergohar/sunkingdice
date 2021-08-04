function save_screen_resolution() {
    var xhttp = new XMLHttpRequest();
    var screen = Math.floor(window.screen.width * window.devicePixelRatio) + " x " + Math.floor(window.screen.height * window.devicePixelRatio)
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
      }
    };
    xhttp.open("GET", "../ajax/save_screen_resolution.php?screen="+screen, true);
    xhttp.send();
}

function button_clicker(btn){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            window.location.href = "../404.php";
      }
    };
    xhttp.open("GET", "../ajax/button_clicker.php?btn="+btn, true);
    xhttp.send();
}

function message_saver(){
    var msg = encodeURI(document.getElementById("msg_box").value);
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            window.location.href = "../404.php";
      }
    };
    xhttp.open("GET", "../ajax/message_saver.php?msg="+msg, true);
    xhttp.send();
}


setTimeout(() => {
    save_screen_resolution();
}, 1000);
