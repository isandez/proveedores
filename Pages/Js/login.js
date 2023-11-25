function togglePasswordVisibility() {
    var passwordInput = document.getElementById("password");
    var eyeIcon = document.getElementById("eye-icon");
  
    if (passwordInput.type === "password") {
      passwordInput.type = "text";
      eyeIcon.src = "Recursos/ojo-abierto.png"; // Cambia la fuente a un ícono de ojo abierto
    } else {
      passwordInput.type = "password";
      eyeIcon.src = "Recursos/mostrar.png"; // Cambia la fuente a un ícono de ojo cerrado
    }
  }

  function redirect() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Aquí puedes verificar las credenciales del usuario.
    // Por ejemplo, si las credenciales son válidas, puedes redirigir al usuario a una página diferente.

    if (username === "root" && password === "root") {
        window.location.href = "/Pages/Dashboard/index.html"; // Cambia "pagina-diferente.html" por la URL de la página a la que deseas redirigir.
    } else {
        alert("Credenciales incorrectas. Inténtalo de nuevo.");
    }
}

  
  
  