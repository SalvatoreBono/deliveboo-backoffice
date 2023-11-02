// creo la funzione validate che passo al form per effettuare appunto le varie validazioni dei campi del form
function validate() {
  // richiamo nelle seguenti costanti gli id dei vari campi del form, per il campo checkbox utilizzo la classe tramite querySelectorAll
  const email = document.getElementById('inputemail');
  const phone = document.getElementById('inputphone');
  const activity_name = document.getElementById('inputactivity_name');
  const img = document.getElementById('inputimg');
  const address = document.getElementById('inputaddress');
  const checkboxes = document.querySelectorAll('.type-checkbox');

  // richiamo gli id dei div assegnati ad ogni campo del form a cui aggiungiamo un messaggio di errore momentaneamente vuoto
  const mailError = document.getElementById('error-email');
  mailError.textContent = '';
  const phoneError = document.getElementById('error-phone');
  phoneError.textContent = '';
  const activitynameError = document.getElementById('error-activityname');
  activitynameError.textContent = '';
  const imgError = document.getElementById('error-img');
  imgError.textContent = '';
  const addressError = document.getElementById('error-address');
  addressError.textContent = '';
  const typeError = document.getElementById('error-type');
  typeError.textContent = '';

  // assegno il valore true alla variabile valid che poi diventerà false all'interno di ogni condizione
  let valid = true;

  // creo le varie condizioni dove al loro interno passo i vari messaggi di errore nel caso in cui il campo viene lasciato vuoto oppure riempito con valori non idonei
  if (!email.value) {
    mailError.textContent = "The email field is required!";
    valid = false;
  }
  if (!phone.value) {
    phoneError.textContent = 'The phone field is required!';
    valid = false;
  } else if (phone.value.length !== 10) {
    phoneError.textContent = 'The phone number must be 10 digits long!';
    valid = false;
  }
  if (!activity_name.value) {
    activitynameError.textContent = 'The activity name field is required!';
    valid = false;
  }
  if (!img.value) {
    imgError.textContent = 'The image field is required!';
    valid = false;
  }
  if (!address.value) {
    addressError.textContent = 'The address field is required!';
    valid = false;
  }
  
  // creo una variabile checkboxChecked  a cui assegno il valore false
  let checkboxChecked = false;
  // creo un ciclo che va ad applicare la condizione ad ogni checkbox
  for (const checkbox of checkboxes) {
    // creo la condizione che passa il valore true alla variabile checkboxChecked
    if (checkbox.checked) {
      checkboxChecked = true;
      break;
    }
  }

  // assegno il messaggio d'errore al campo visible nel caso in cui non viene selezionata nessuna checkbox
  if (!checkboxChecked) {
    typeError.textContent = 'Select at least one type!';
    valid = false;
  }

  // ritorno la variabile valid
  return valid;
}
