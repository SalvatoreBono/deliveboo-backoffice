function validate() {
  const email = document.getElementById('inputemail');
  const phone = document.getElementById('inputphone');
  const activity_name = document.getElementById('inputactivity_name');
  const img = document.getElementById('inputimg');
  const address = document.getElementById('inputaddress');
  const checkboxes = document.querySelectorAll('.type-checkbox');

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

  let valid = true;

  if (!email.value) {
    mailError.textContent = "The email field is required!";
    email.focus();
    valid = false;
  }
  if (!phone.value) {
    phoneError.textContent = 'The phone field is required!';
    phone.focus();
    valid = false;
  } else if (phone.value.length !== 10) {
    phoneError.textContent = 'The phone number must be 10 digits long!';
    phone.focus();
    valid = false;
  }
  if (!activity_name.value) {
    activitynameError.textContent = 'The activity name field is required!';
    activity_name.focus();
    valid = false;
  }
  if (!img.value) {
    imgError.textContent = 'The image field is required!';
    img.focus();
    valid = false;
  }
  if (!address.value) {
    addressError.textContent = 'The address field is required!';
    address.focus();
    valid = false;
  }
  
  let atLeastOneChecked = false;
  for (const checkbox of checkboxes) {
    if (checkbox.checked) {
      atLeastOneChecked = true;
      break;
    }
  }

  if (!atLeastOneChecked) {
    typeError.textContent = 'Select at least one type!';
    valid = false;
  }

  return valid;
}
