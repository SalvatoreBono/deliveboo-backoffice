// creo la funzione validate che passo al form per effettuare appunto le varie validazioni dei campi del form
function validate() {
  // richiamo nelle seguenti costanti gli id dei vari campi del form, per il campo radio utilizzo il name
  const name = document.getElementById('inputname');
  const img = document.getElementById('inputimg');
  const description = document.getElementById('inputdescription');
  const price = document.getElementById('inputprice');
  const radios = document.getElementsByName('visible');

  // richiamo gli id dei div assegnati ad ogni campo del form a cui aggiungiamo un messaggio di errore momentaneamente vuoto
  const nameError = document.getElementById('error-name');
  nameError.textContent = '';
  const imgError = document.getElementById('error-img');
  imgError.textContent = '';
  const descriptionError = document.getElementById('error-description');
  descriptionError.textContent = '';
  const priceError = document.getElementById('error-price');
  priceError.textContent = '';
  const radiosError = document.getElementById('error-visible');
  radiosError.textContent = '';

  // assegno il valore true alla variabile valid che poi diventerà false all'interno di ogni condizione
  let valid = true;

  // creo le varie condizioni dove al loro interno passo i vari messaggi di errore nel caso in cui il campo viene lasciato vuoto oppure riempito con valori non idonei
  if (!name.value) {
    nameError.textContent = "È richiesto il campo nome!";
    valid = false;
  }
  if (!img.value) {
    imgError.textContent = 'È richiesto il campo immagine!';
    valid = false;
  }
  if (!description.value) {
    descriptionError.textContent = 'È richiesto il campo descrizione!';
    valid = false;
  }
  if (!price.value) {
    priceError.textContent = 'È richiesto il campo prezzo!';
    valid = false;
  } else if (price.value <= 0) {
    priceError.textContent = 'Il campo del prezzo deve essere maggiore di 0!';
    valid = false;
  }

  // creo una variabile radioChecked a cui assegno il valore false
  let radioChecked = false;

  // creo un ciclo che va ad applicare la condizione alle radios
  for (let i = 0; i < radios.length; i++) {
    // creo la condizione che passa il valore true alla variabile radioChecked
    if (radios[i].checked) {
      radioChecked = true;
      break;
    }
  }

  // assegno il messaggio d'errore al campo visible nel caso in cui non viene selezionata nessuna radio
  if (!radioChecked) {
    radiosError.textContent = 'Seleziona un\'opzione';
    valid = false;
  }
  // ritorno la variabile valid
  return valid;
}