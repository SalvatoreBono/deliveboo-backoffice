function validate() {
  const name = document.getElementById('inputname');
  const img = document.getElementById('inputimg');
  const description = document.getElementById('inputdescription');
  const price = document.getElementById('inputprice');
  const radios = document.querySelectorAll('.type-radios');

  const nameError = document.getElementById('error-name');
  nameError.textContent = '';
  const imgError = document.getElementById('error-img');
  imgError.textContent = '';
  const descriptionError = document.getElementById('error-description');
  descriptionError.textContent = '';
  const priceError = document.getElementById('error-price');
  priceError.textContent = '';
  const radiosError = document.querySelectorAll('.type-radios');
  radiosError.textContent = '';

  let valid = true;

  if (!name.value) {
    nameError.textContent = "The name field is required!";
    name.focus();
    valid = false;
  }
  if (!img.value) {
    imgError.textContent = 'The img field is required!';
    img.focus();
    valid = false;
  }
  if (!description.value) {
    descriptionError.textContent = 'The description field is required!';
    description.focus();
    valid = false;
  }
  if (!price.value) {
    priceError.textContent = 'The price field is required!';
    price.focus();
    valid = false;
  }
  let radioSelected = false;
  for (const radio of radios) {
    if (radio.checked) {
      radioSelected = true;
      break;
    }
  }
  
  if (!radioSelected) {
    radiosError.textContent = 'Please select a radio option!';
    valid = false;
  }
  

  return valid;
}