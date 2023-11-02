// creo la funzione validate che passo al form per effettuare appunto le varie validazioni dei campi del form
function validate() {
  // richiamo nelle seguenti costanti gli id dei vari campi del form
  const name = document.getElementById('name');
  const surname = document.getElementById('surname');
  const email = document.getElementById('email');
  const password = document.getElementById('password');
  const passwordConfirm = document.getElementById('password-confirm');
  const vatNumber = document.getElementById('VAT_number');

  // richiamo gli id dei div assegnati ad ogni campo del form a cui aggiungiamo un messaggio di errore momentaneamente vuoto
  const nameError = document.getElementById('error-name');
  nameError.textContent = '';
  const surnameError = document.getElementById('error-surname');
  surnameError.textContent = '';
  const emailError = document.getElementById('error-email');
  emailError.textContent = '';
  const passwordError = document.getElementById('error-password');
  passwordError.textContent = '';
  const confirmpasswordError = document.getElementById('error-confirm-password');
  confirmpasswordError.textContent = '';
  const vatnumberError = document.getElementById('error-vat-number');
  vatnumberError.textContent = '';

  // assegno il valore true alla variabile valid che poi diventerà false all'interno di ogni condizione
  let valid = true;

  // creo le varie condizioni dove al loro interno passo i vari messaggi di errore nel caso in cui il campo viene lasciato vuoto oppure riempito con valori non idonei
  if (!name.value) {
    nameError.textContent = "The name field is required!";
    valid = false;
  }
  if (!surname.value) {
    surnameError.textContent = 'The surname field is required!';
    valid = false;
  }
  if (!email.value) {
    emailError.textContent = 'The email field is required!';
    valid = false;
  }
  if (!password.value) {
    passwordError.textContent = 'The password field is required!';
    valid = false;
  }
  if (!passwordConfirm.value) {
    confirmpasswordError.textContent = 'The confirm password field is required!';
    valid = false;
  }
  if (password.value !== passwordConfirm.value) {
    passwordError.textContent = 'The password and the confirm password must be the same!';
    passwordConfirm.value = '';
    valid = false;
  } 
  if (!vatNumber.value) {
    vatnumberError.textContent = 'The VAT number field is required!';
    valid = false;
  } else if (vatNumber.value.length <= 11) {
    vatnumberError.textContent = 'The VAT number must be at least 11 digits!';
    valid = false;
  } else if (isNaN(vatNumber.value)) {
    vatnumberError.textContent = 'The VAT number must be a number!';
    valid = false;
  }

  // ritorno la variabile valid
  return valid;
}