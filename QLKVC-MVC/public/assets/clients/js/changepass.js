const Pass_INVALID = "Mật khẩu có độ dài 4-30 kí tự";

const input = document.querySelectorAll(".input");
const label = document.querySelectorAll(".label");
const stt = document.querySelector(".stt");
for (let i = 0; i < input.length; i++) {
  if (input[i].value != "") {
    label[i].style.top = "10px";
    label[i].style.fontSize = "70%";
    label[i].style.color = "green";
    label[i].style.opacity = "1";
  }

  input[i].addEventListener("keypress", () => {
    label[i].style.top = "10px";
    label[i].style.fontSize = "70%";
    label[i].style.color = "green";
    label[i].style.opacity = "1";
  });

  input[i].addEventListener("click", () => {
    label[i].style.top = "10px";
    label[i].style.fontSize = "70%";
    label[i].style.color = "green";
    label[i].style.opacity = "1";
  });

  input[i].addEventListener("blur", () => {
    if (input[i].value == "") {
      label[i].style.top = "50%";
      label[i].translateY = "-50%";
      label[i].style.fontSize = "100%";
      label[i].style.color = "black";
      label[i].style.opacity = ".5";
      input[i].style.border = "1px solid #cfd1db";
      stt[i].style.display = "none";
    }
  });
}

function check() {
  var btn = document.getElementById("btn-changepass");
  var pass1 = document.getElementById("new-pass");
  var pass2 = document.getElementById("confirm-new-pass");
  if (pass1.value.length < 4 || pass1.value.label > 30) {
    stt.innerHTML = Pass_INVALID;
    pass1.focus();
    pass1.classList.add("error-form");
    btn.type = "button";
  } else {
    if (pass1.value != pass2.value) {
      stt.innerHTML = "Mật khẩu mới phải trùng nhau";
      pass1.classList.add("error-form");
      pass2.classList.add("error-form");
      btn.type = "button";
    } else {
      stt.innerHTML = "";
      btn.type = "submit";
    }
  }
}
