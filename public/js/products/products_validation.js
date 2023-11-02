function validate() {
  const name = document.getElementById('inputname');
  const img = document.getElementById('inputimg');
  const description = document.getElementById('inputdescription');
  const price = document.getElementById('inputprice');
  const radios = document.getElementsByName('visible');

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
  } else if (price.value <= 0) {
    priceError.textContent = 'The price field must be greater than 0!';
    price.focus();
    valid = false;
  }

  let radioChecked = false;

  for (let i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      radioChecked = true;
      break;
    }
  }

  if (!radioChecked) {
    radiosError.textContent = 'Please select a radio option!';
    valid = false;
  }
  return valid;
}