function changeColorText() {
  setInterval(() => {
    var fm = document.querySelector(".form h3");
    var a = Math.floor(Math.random() * 256);
    var b = Math.floor(Math.random() * 256);
    var c = Math.floor(Math.random() * 256);
    fm.style.color = "rgb(" + a + ", " + b + ", " + c + ")";
    fm.style.textShadow = "-2px 2px 8px rgb(" + c + ", " + b + ", " + a + ")";
  }, 500);
}

function inputInfo() {
  var input = document.querySelectorAll(".input-text input");
  var label = document.querySelectorAll(".input-text label");

  for (let i = 0; i < input.length; i++) {
    input[i].addEventListener("keyup", () => {
      label[i].style.top = "-15px";
      label[i].style.fontSize = "100%";
      label[i].style.opacity = "1";
      label[i].style.color = "#45f3ff";
      input[i].style.background = "#45f3ff";
      label[i].style.textShadow = "-2px 2px 8px #fff";
    });

    input[i].addEventListener("click", () => {
      label[i].style.top = "-15px";
      label[i].style.fontSize = "100%";
      label[i].style.opacity = "1";
      label[i].style.color = "#45f3ff";
      input[i].style.background = "#45f3ff";
      label[i].style.textShadow = "-2px 2px 8px #fff";
    });

    if (input[i].value != "") {
      label[i].style.top = "-15px";
      label[i].style.fontSize = "100%";
      label[i].style.opacity = "1";
      label[i].style.color = "#45f3ff";
      input[i].style.background = "#45f3ff";
      label[i].style.textShadow = "-2px 2px 8px #fff";
    }
    input[i].addEventListener("blur", () => {
      if (input[i].value == "") {
        label[i].style.top = "50%";
        label[i].translateY = "-50%";
        label[i].style.fontSize = "80%";
        label[i].style.color = "#fff";
        label[i].style.opacity = ".7";
        input[i].style.background = "#1c1c1c";
        label[i].style.textShadow = "none";
      }
    });
  }
}

inputInfo();

function showPass() {
  var eye = document.getElementById("display-pass");
  var pass = document.getElementById("password");

  if (eye == null || pass == null) return;
  eye.addEventListener("click", () => {
    if (pass.type === "text") {
      eye.classList.replace("bi-eye", "bi-eye-slash");
      pass.type = "password";
    } else {
      eye.classList.replace("bi-eye-slash", "bi-eye");
      pass.type = "text";
    }
  });

  // var eye = document.getElementById("display-pass");
  pass.addEventListener("click", () => {
    eye.style.color = "#333";
  });

  pass.addEventListener("blur", () => {
    if (pass.value == "") {
      eye.style.color = "#fff";
    } else {
      eye.style.color = "#333";
    }
  });
}

showPass();

var url = window.location.href;
if (url.includes("admin/login") || url.includes("admin/forgotpwd")) {
  document.body.style.overflow = "hidden";

  changeColorText();
} else {
  document.body.style.overflow = "visible";
}
