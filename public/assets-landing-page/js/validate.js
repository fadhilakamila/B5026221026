function validateForm() {
    var name = document.getElementById("name");
    var msgName = document.getElementById("msg-name");
    
    var email = document.getElementById("email");
    var msgEmail = document.getElementById("msg-email");
    
    var subject = document.getElementById("subject");
    var msgSubject = document.getElementById("msg-subject");
    
    var message = document.getElementById("message");
    var msgMessage = document.getElementById("msg-message");
    
    // 1. Nama tidak diisi
    if (name.value.trim() === "") {
      name.focus();
      msgName.innerHTML = "Nama harus diisi!";
      return false;
    }
  
    // 2. Nama tidak boleh diisi dengan angka atau karakter khusus
    if (!/^[a-zA-Z\s]+$/.test(name.value)) {
      name.focus();
      msgName.innerHTML = "Nama tidak boleh mengandung angka atau karakter khusus!";
      return false;
    }
  
    // 3. Email tidak diisi
    if (email.value.trim() === "") {
      email.focus();
      msgEmail.innerHTML = "E-mail harus diisi!";
      return false;
    }
  
    // 4. Subject tidak diisi
    if (subject.value.trim() === "") {
      subject.focus();
      msgSubject.innerHTML = "Subjek harus diisi!";
      return false;
    }
  
    // 5. Message tidak diisi
    if (message.value.trim() === "") {
      message.focus();
      msgMessage.innerHTML = "Pesan harus diisi!";
      return false;
    }
    
    // 6. Message tidak boleh lebih dari 250 karakter
    if (message.value.length > 250) {
      message.focus();
      msgMessage.innerHTML = "Pesan tidak boleh lebih dari 250 karakter!";
      return false;
    }
  
    return true; // All validations passed
  }
  