const NAME_INVALID = "Tên không hợp lệ";
const Email_INVALID =
  "Email chỉ chứa kí tự 0-9, a-z hoặc (.) có độ dài từ 6-30 ký tự";
const User_INVALID =
  "Tài khoản không được chứa kí tự đặc biệt và bắt đầu bằng chữ cái";
const USer_Short = "Tài khoản có độ dài 6-20 kí tự";
const Pass_INVALID = "Mật khẩu có độ dài 4-30 kí tự";
var toggle = document.querySelector(".bi-eye-slash"),
  pass = document.querySelector(".pass");
toggle.addEventListener("click", () => {
  if (pass.type === "password") {
    pass.type = "text";
    toggle.classList.replace("bi-eye-slash", "bi-eye");
  } else {
    pass.type = "password";
    toggle.classList.replace("bi-eye", "bi-eye-slash");
  }
});

const input = document.querySelectorAll(".input");
const label = document.querySelectorAll(".label");
const stt = document.querySelectorAll(".stt");
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

function inputEmail() {
  var email = document.getElementById("signup-email");
  var email_invalid = document.querySelector(".email-invalid");
  if (validationEmail(email.value)) {
    if (email.classList.contains("error-form")) {
      email.classList.remove("error-form");
    }
    email.classList.add("success-form");
    email_invalid.innerHTML = "";
  } else {
    if (email.classList.contains("success-form")) {
      email.classList.remove("success-form");
    }
    email.classList.add("error-form");
    email_invalid.innerHTML = Email_INVALID;
  }
}

function inputFName() {
  var name = document.querySelectorAll(".signupName");
  var name_invalid = document.querySelectorAll(".name-invalid");
  for (let i = 0; i < name.length; i++) {
    name[i].addEventListener("keyup", () => {
      if (validationName(name[i].value)) {
        if (name[i].classList.contains("error-form")) {
          name[i].classList.remove("error-form");
        }
        name[i].classList.add("success-form");
        name_invalid[i].innerHTML = "";
      } else {
        if (name[i].classList.contains("success-form")) {
          name[i].classList.remove("success-form");
        }
        name[i].classList.add("error-form");
        name_invalid[i].innerHTML = NAME_INVALID;
      }
    });
  }
}

inputFName();

function inputUser() {
  var user = document.getElementById("signup-username");
  var user_invalid = document.querySelector(".user-invalid");

  var leng = user.value.length;

  if (leng < 6 || leng > 20) {
    user.classList.add("error-form");
    user_invalid.innerHTML = USer_Short;
  } else {
    user_invalid.innerHTML = "";
    if (validationUser(user.value)) {
      if (user.classList.contains("error-form")) {
        user.classList.remove("error-form");
      }
      user.classList.add("success-form");
      user_invalid.innerHTML = "";
    } else {
      if (user.classList.contains("success-form")) {
        user.classList.remove("success-form");
      }
      user.classList.add("error-form");
      user_invalid.innerHTML = User_INVALID;
    }
  }
}

function inputPass() {
  var pass = document.getElementById("signup-password");
  var pass_invalid = document.querySelector(".pass-invalid");

  if (pass.value.length < 4 || pass.value.length > 30) {
    if (pass.classList.contains("success-form")) {
      pass.classList.remove("success-form");
    }
    pass.classList.add("error-form");
    pass_invalid.innerHTML = Pass_INVALID;
  } else {
    if (pass.classList.contains("error-form")) {
      pass.classList.remove("error-form");
    }
    pass.classList.add("success-form");
    pass_invalid.innerHTML = "";
  }
}

function signupBtn() {
  var chk = document.getElementById("chk");
  var btn = document.getElementById("btn-signup");

  var count = 0;
  for (let i = 0; i < input.length; i++) {
    if (input[i].value !== "") {
      if (!chk.checked) {
        alert("Bạn chưa đồng ý với điều khoản của công ty");
        btn.type = "button";
        return;
      }
      if (input[i].classList.contains("error-form")) {
        input[i].focus();
        btn.type = "button";
        return;
      }

      if (chk.checked && input[i].classList.contains("success-form")) {
        count++;
      }
    }
  }

  if (count == input.length) {
    btn.type = "submit";
  }
}

var thongbao = document.querySelector(".thongbao");
if (thongbao.innerHTML === "Đăng ký thành công!") {
  thongbao.style.color = "#4cd137";
} else {
  thongbao.style.color = "#e74c3c";
}

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

async function changeText() {
  var title = document.querySelectorAll(".title span");
  var tl = document.querySelector(".title");
  var color = new Array(
    "red",
    "blue",
    "green",
    "#f1c40f",
    "#9b59b6",
    "#e67e22",
    "black"
  );

  while (true) {
    var cl = color[Math.floor(Math.random() * 5)];
    for (let i = 0; i < title.length; i++) {
      title[i].style.color = cl;
      await sleep(100);
    }
  }
}

if (
  window.location.href.includes("login") ||
  window.location.href.includes("forgotpassword")
) {
  changeText();
}
