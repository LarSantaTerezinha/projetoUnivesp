function validaLoginForm() {
    // Get the values of the input fields
    const email = document.getElementById("email").value;
    const senha = document.getElementById("senha").value;
    
  
    // Check if any field is empty or does not meet the minimum length requirement
    if (email === "" || email.length < 5 || senha === "" || senha.length < 7) {
      alert("Email ou senha inválidos. Não pode em branco. Tamanho minimo: email 5 caracteres e senha 7 caracteres");
      return false;
    }/*
    if (senha === "" || senha.length < 7) {
      alert("Senha não pode estar em branco e deve conter mais de 8 caracteres. Verificar!");
      return false;
    }
    if (phone === "" || phone.length < 12 || isNaN(phone)) {
      alert("Please enter a valid phone number (minimum 12 numeric characters).");
      return false;
    }
    if (city === "" || city.length < 8) {
      alert("Please enter a valid city (minimum 8 characters).");
      return false;
    }
    if (document === "" || document.length < 12 || isNaN(document)) {
      alert("Please enter a valid document number (minimum 12 numeric characters).");
      return false;
    }*/
  
    // If all fields are valid, allow the form to submit
    return true;
  }

  function validaEmail (email) {
    var emailPattern =  /^[_a-z0-9._%-]+@[a-zA-Z0-9,-]+\.[a-zA-Z0-9-]{2,}$/u;
    if(!emailPattern.test(email)) {
      alert("Email fora do padrão nome@dominio.com. Verificar.");
    }
    return true; 
  }