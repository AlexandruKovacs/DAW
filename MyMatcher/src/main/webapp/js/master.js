function myFunction() {
  var x = document.getElementById("verPassword");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
