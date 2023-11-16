function toggleCSKH() {
  var toggle = document.getElementById("cskh");

  toggle.addEventListener("click", () => {
    if (toggle.style.right === "0px" || toggle.style.right == 0) {
      toggle.style.right = "250px";
    } else {
      toggle.style.right = "0px";
    }
  });
}

toggleCSKH();

function header_fixed() {
  $(window).scrollTop() >= $("#top-nav").height()
    ? $("#header").addClass("header-fixed")
    : $("#header").removeClass("header-fixed");
  $(window).scroll(function () {
    $(window).scrollTop() >= $("#top-nav").height()
      ? $("#header").addClass("header-fixed")
      : $("#header").removeClass("header-fixed");
  });
}

header_fixed();

function footer_login() {
  $(window).scrollTop() >= $("#top-nav").height()
    ? $(".footer-login").addClass("footer-login-fixed")
    : $(".footer-login").removeClass("footer-login-fixed");
  $(window).scroll(function () {
    $(window).scrollTop() >= $("#top-nav").height()
      ? $(".footer-login").addClass("footer-login-fixed")
      : $(".footer-login").removeClass("footer-login-fixed");
  });
}

footer_login();

function ontop() {
  $("#btn-ontop").click(function (e) {
    e.preventDefault(), $("html,body").animate({ scrollTop: 0 }, 500);
  });
}

ontop();

function close_share() {
  $(".close-share").click(function () {
    $(".share").animate({ left: -60 }, 500);
    setTimeout(() => {
      $(".open-share").css("display", "block");
    }, 500);
  });
}

close_share();

function open_share() {
  $(".open-share").click(function () {
    $(".share").animate({ left: 0 }, 500);
    $(".open-share").css("display", "none");
  });
}

open_share();

function sleep(ms) {
  return new Promise((resolve) => setTimeout(resolve, ms));
}

let index_slide = 0;
let timeSlide = 4000;
async function run_slide() {
  while (true) {
    index_slide = 0;
    let slide = document.querySelectorAll(".slide");
    let btn = document.querySelectorAll("#focus-slide li");
    for (index_slide; index_slide < slide.length; index_slide++) {
      if (slide[index_slide].classList.contains("active-slide")) {
        await sleep(timeSlide);
        slide[index_slide].classList.remove("active-slide");
        btn[index_slide].classList.remove("active-btn-slide");
        if (index_slide < slide.length - 1) {
          slide[index_slide + 1].classList.add("active-slide");
          btn[index_slide + 1].classList.add("active-btn-slide");
        } else {
          index_slide = 0;
          slide[index_slide].classList.add("active-slide");
          btn[index_slide].classList.add("active-btn-slide");
        }
      }
    }
  }
}

run_slide();

$(".arrow-prev").click(function () {
  let slide = document.querySelectorAll(".slide");
  let btn = document.querySelectorAll("#focus-slide li");
  btn[index_slide].classList.remove("active-btn-slide");
  slide[index_slide].classList.remove("active-slide");
  if (index_slide == 0) {
    index_slide = btn.length;
  }
  btn[index_slide - 1].classList.add("active-btn-slide");
  slide[index_slide - 1].classList.add("active-slide");
  index_slide--;
});

$(".arrow-next").click(function () {
  let slide = document.querySelectorAll(".slide");
  let btn = document.querySelectorAll("#focus-slide li");
  btn[index_slide].classList.remove("active-btn-slide");
  slide[index_slide].classList.remove("active-slide");
  if (index_slide == btn.length - 1) {
    index_slide = -1;
  }
  btn[index_slide + 1].classList.add("active-btn-slide");
  slide[index_slide + 1].classList.add("active-slide");
  index_slide++;
});

function selectslide() {
  let slide = document.querySelectorAll(".slide");
  let btn = document.querySelectorAll("#focus-slide li");
  for (let i = 0; i < btn.length; i++) {
    btn[i].addEventListener("click", () => {
      for (let j = 0; j < slide.length; j++) {
        if (slide[j].classList.contains("active-slide")) {
          slide[j].classList.remove("active-slide");
        }
      }
      for (let z = 0; z < btn.length; z++) {
        if (btn[z].classList.contains("active-btn-slide")) {
          btn[z].classList.remove("active-btn-slide");
        }
      }
      slide[i].classList.add("active-slide");
      btn[i].classList.add("active-btn-slide");
      index_slide = i;
    });
  }
}

selectslide();

function dialog() {
  var toggle = document.getElementById("header-menu-icon");
  var menu = document.getElementById("menu");
  var close = document.getElementById("btn-close-menu");
  var share = document.querySelector(".share");
  toggle.addEventListener("click", () => {
    setTimeout(() => {
      menu.showModal();
      $("#menu").css("left", 0);
    }, 500);
  });

  close.addEventListener("click", () => {
    $("#menu").animate({ left: "-100%" }, 500);
    setTimeout(() => {
      menu.close();
      $("#menu").css("left", "-100%");
    }, 500);
  });
}

dialog();

function dragSlider() {
  var cardWrapper = document.getElementById("banner");
  let posX1 = 0;
  let posX2 = 0;
  cardWrapper.onmousedown = dragMouseDown;
  cardWrapper.onmouseup = dragMouseUp;
  function dragMouseDown(e) {
    e = e || window.event;
    e.preventDefault();
    posX1 = e.clientX;
  }

  function dragMouseUp(e) {
    e = e || window.event;
    e.preventDefault();
    posX2 = e.clientX;

    if (posX1 == 0 || posX2 == 0 || posX1 == posX2) return;
    if (posX1 > posX2) {
      $(".arrow-next").click();
    } else {
      $(".arrow-prev").click();
    }
  }
}

dragSlider();

function openDialog() {
  var dialog = document.getElementById("dialog-lich");
  var body = document.body;
  $(".home-lich").click(function () {
    dialog.showModal();
    body.style.overflow = "hidden";
  });
}

openDialog();

function closeLich() {
  var dialog = document.querySelector("#dialog-lich");
  $(".close-dialogLich").click(function () {
    dialog.close();
    document.body.style.overflow = "visible";
  });
}

closeLich();

function setBgrReadonly() {
  var input = document.getElementsByTagName("input");
  for (let i = 0; i < input.length; i++) {
    if (input[i].getAttribute("readonly") != null) {
      input[i].style.opacity = "0.7";
    }
  }
}

setBgrReadonly();

function datve() {
  var ng = document.querySelectorAll(".nguoi");
  var btn = document.getElementById("btn-datve");
  var khu = document.getElementById("select_khu");
  var giave = khu.value.split("-", 3);
  let dem = 0;
  for (let i = 0; i < ng.length; i++) {
    if (ng[i].value !== "") dem++;
  }

  if (giave[0] === "0") {
    btn.type = "button";
    alert("Vui lòng chọn khu vui chơi!");
    return;
  }

  if (dem == 0) {
    btn.type = "button";
    alert("Vui lòng nhập số người!");
  } else {
    btn.type = "submit";
  }
}

function tienVe() {
  var te = document.getElementById("ve_te");
  var nl = document.getElementById("ve_nl");
  var gia = document.querySelector(".giave");
  var gia1 = document.querySelector(".giave1");
  var khu = document.getElementById("select_khu");
  var dv = document.getElementById("select_dv");
  var trochoi = document.getElementById("select_tc");

  var giave = khu.value.split("-", 3);
  var veTe = parseFloat(giave[2]);
  var veNl = parseFloat(giave[1]);
  dv = parseFloat(dv.value.split("-", 2)[1]);
  trochoi = parseFloat(trochoi.value.split("-", 2)[1]);

  if (te.value == "") te.value = "0";
  if (nl.value == "") nl.value = "0";
  te = parseInt(te.value);
  nl = parseInt(nl.value);

  gia1.value = te * veTe + nl * veNl + dv + trochoi;
  gia.innerHTML = te * veTe + nl * veNl + dv + trochoi;
}

let date = new Date();
document.getElementById("tgthamquan").min =
  date.getFullYear() + "-" + date.getMonth() + "-" + date.getDay();
