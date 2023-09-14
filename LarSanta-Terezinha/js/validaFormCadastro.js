function validaFormCadastro() {
    // Get the values of the input fields
    const name = document.getElementById("name").value;
    const address = document.getElementById("address").value;
    const phone = document.getElementById("phone").value;
    const city = document.getElementById("city").value;
    const document = document.getElementById("document").value;
  
    // Check if any field is empty or does not meet the minimum length requirement
    if (name === "" || name.length < 8) {
      alert("Please enter a valid name (minimum 8 characters).");
      return false;
    }
    if (address === "" || address.length < 20) {
      alert("Please enter a valid address (minimum 20 characters).");
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
    }
  
    // If all fields are valid, allow the form to submit
    return true;
  }