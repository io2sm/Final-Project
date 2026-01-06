// Login Error

const findError = new URLSearchParams(window.location.search);
const found = findError.has("error");

if (found) {
  alert("Incorrect email or password. Please try again");
}

document.getElementById("changeTitleBtn").onclick = function () {
  if (
    document.getElementById("hero-title").innerText === "Let's start training!"
  ) {
    document.getElementById("hero-title").innerText = "Feel The difference";
  } else {
    document.getElementById("hero-title").innerText = "Let's start training!";
  }
};
