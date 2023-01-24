var xhttp = new XMLHttpRequest();

xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        alert(this.response);
    }
};

xhttp.open('GET', 'hora-servidor.php', true);
xhttp.send();