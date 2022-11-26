const captcha = document.querySelector(".captcha"),
  reloadBtn = document.querySelector(".reload-btn"),
  inputField = document.querySelector(".input-area input"),
  checkBtn = document.querySelector(".check-btn"),
  statusTxt = document.querySelector(".status-text");

//storing all captcha characters in array
let allCharacters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O',
  'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd',
  'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's',
  't', 'u', 'v', 'w', 'x', 'y', 'z', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
function getCaptcha() {
  for (let i = 0; i < 6; i++) { //getting 6 random characters from the array
    let randomCharacter = allCharacters[Math.floor(Math.random() * allCharacters.length)];
    captcha.innerText += ` ${randomCharacter}`; //passing 6 random characters inside captcha innerText
  }
}
getCaptcha();
reloadBtn.addEventListener("click", () => {
  removeContent();
  getCaptcha();
});

checkBtn.addEventListener("click", e => { e.preventDefault();
  statusTxt.style.display = "block";
  let inputVal = inputField.value.split('').join(' ');
  if (inputVal == captcha.innerText) { //Si coincide
    alert("Next papu");
    statusTxt.style.color = "#4db2ec";
    statusTxt.innerText = "No eres un robot xd";
    setTimeout(() => { //Borra el contenido y espera 2 seg
      removeContent();
      getCaptcha();
    }, 2000);
  } else {
    statusTxt.style.color = "#ff0000";
    statusTxt.innerText = "Intenta de nuevo bro";
  }
});

function removeContent() {
  inputField.value = "";
  captcha.innerText = "";
  statusTxt.style.display = "none";
}