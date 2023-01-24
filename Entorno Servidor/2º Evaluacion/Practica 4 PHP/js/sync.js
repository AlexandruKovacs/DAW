var xhttp = new XMLHttpRequest();

xhttp.open('GET', 'hora-servidor.php', false);
xhttp.send();

if (xhttp.status == 200) {
    alert("OK");
} else {
    alert("ERROR");
}

alert(xhttp.response);