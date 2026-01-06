// Login Error

const findError = new URLSearchParams(window.location.search);
const found = findError.has("error");

if (found) {
  alert("Incorrect email or password. Please try again");
}

