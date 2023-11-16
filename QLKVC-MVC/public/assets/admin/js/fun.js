function postData(ma, name, dob, user, email, sdt, addr, active) {
  document.getElementById("edit-idCus").value = ma;
  document.getElementById("edit-name").value = name;
  document.getElementById("edit-dob").value = dob;
  document.getElementById("edit-user").value = user;
  document.getElementById("edit-email").value = email;
  document.getElementById("edit-phone").value = sdt;
  document.getElementById("edit-add").value = addr;
  if (active == 1) {
    document.getElementById("edit-active").value = "Đã kích hoạt";
  } else {
    document.getElementById("edit-active").value = "Chưa kích hoạt";
  }
}

function postDataVe(ma, ten, vt, mo, dong, lon, be) {
  document.getElementById("edit-makhu").value = ma;
  document.getElementById("edit-tenkhu").value = ten;
  document.getElementById("edit-vitri").value = vt;
  document.getElementById("edit-giomo").value = mo;
  document.getElementById("edit-giodong").value = dong;
  document.getElementById("edit-venl").value = lon;
  document.getElementById("edit-vete").value = be;
}

function postDataNv(ma, user, name, email, sdt, dob, addr, cv, luong, kvc) {
  var chucvu = document.querySelectorAll("#edit-cv option");
  for (let i = 0; i < chucvu.length; i++) {
    chucvu[i].removeAttribute("selected");
    if (chucvu[i].value === cv) {
      chucvu[i].setAttribute("selected", "selected");
    }
  }

  var kv = document.querySelectorAll("#edit-kvc option");
  for (let i = 0; i < kv.length; i++) {
    kv[i].removeAttribute("selected");
    if (kv[i].value === kvc) {
      kv[i].setAttribute("selected", "selected");
    }
  }

  document.getElementById("edit-employee").value = ma;
  document.getElementById("edit-name").value = name;
  document.getElementById("edit-dob").value = dob;
  document.getElementById("edit-user").value = user;
  document.getElementById("edit-email").value = email;
  document.getElementById("edit-phone").value = sdt;
  document.getElementById("edit-add").value = addr;
  document.getElementById("edit-luong").value = luong;
  // document.getElementById("edit-kvc").value = kvc;
}

function dataDelete(ma) {
  var id = document.querySelectorAll(".del-id");
  for (let i = 0; i < id.length; i++) {
    id[i].innerHTML = '"' + ma + '"';
    id[i].value = ma;
  }
}

var edit = document.querySelectorAll(".editRow");
var dialogEdit = document.querySelector(".edit");
var confirmDelete = document.querySelector(".confirm-del");
var confirmDuyet = document.querySelector(".confirm-duyet");
var dialogAdd = document.querySelector(".addInfo");
for (let i = 0; i < edit.length; i++) {
  edit[i].addEventListener("click", () => {
    dialogEdit.showModal();
  });
}

var deleteRow = document.querySelectorAll(".deleteRow");
for (let i = 0; i < deleteRow.length; i++) {
  deleteRow[i].addEventListener("click", () => {
    confirmDelete.showModal();
  });
}

function showDialogAdd() {
  dialogAdd.showModal();
}
var dialogClose = document.querySelectorAll(".close-dialog");
for (let i = 0; i < dialogClose.length; i++) {
  dialogClose[i].addEventListener("click", () => {
    confirmDelete.close();
    dialogEdit.close();
    dialogAdd.close();
  });
}

var btnduyet = document.querySelectorAll(".btnDuyet");
for (let i = 0; i < btnduyet.length; i++) {
  btnduyet[i].addEventListener("click", () => {
    confirmDuyet.showModal();
  });
}

var close_dialog_duyet = document.querySelectorAll(".close-dialog-duyet");
for (let i = 0; i < close_dialog_duyet.length; i++) {
  close_dialog_duyet[i].addEventListener("click", () => {
    confirmDuyet.close();
  });
}
