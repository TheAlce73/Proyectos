function registraUser() {

  var llamadaServidor = new XMLHttpRequest();

  llamadaServidor.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("aviso").innerHTML = this.responseText;
    }
  };


  llamadaServidor.open("POST", "../php/registrauser.php", true);
  llamadaServidor.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  var usuario = document.getElementById("user").value;
  var password = document.getElementById("pass").value;
  llamadaServidor.send("user="+usuario+"&pass="+password);
}
