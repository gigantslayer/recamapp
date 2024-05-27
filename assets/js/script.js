$navbar = $(".navbar-customer");
$(window).scroll(function (e) {
  if ($(document).scrollTop() > 0) {
    $navbar.addClass("shadow-sm");
  } else {
    $navbar.removeClass("shadow-sm");
  }
});
function hitungtotal(){
   var totalbayar = document.getElementById('totalbayar').value;
   var bayar = document.getElementById('bayar').value;

  var kembalian = parseInt(bayar)  - parseInt(totalbayar);
  if (!isNaN(kembalian)) {
    document.getElementById('kembalian').value = kembalian;
  }    
}

function previewfile() {
  const picture = document.querySelector("#file-input");
  const pictureLabel = document.querySelector("#file-label");
  const imgPreview = document.querySelector("#file-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile2() {
  const picture = document.querySelector("#file2-input");
  const pictureLabel = document.querySelector("#file2-label");
  const imgPreview = document.querySelector("#file2-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile3() {
  const picture = document.querySelector("#file3-input");
  const pictureLabel = document.querySelector("#file3-label");
  const imgPreview = document.querySelector("#file3-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile4() {
  const picture = document.querySelector("#file4-input");
  const pictureLabel = document.querySelector("#file4-label");
  const imgPreview = document.querySelector("#file4-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile5() {
  const picture = document.querySelector("#file5-input");
  const pictureLabel = document.querySelector("#file5-label");
  const imgPreview = document.querySelector("#file5-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}



function previewfile6() {
  const picture = document.querySelector("#file6-input");
  const pictureLabel = document.querySelector("#file6-label");
  const imgPreview = document.querySelector("#file6-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile7() {
  const picture = document.querySelector("#file7-input");
  const pictureLabel = document.querySelector("#file7-label");
  const imgPreview = document.querySelector("#file7-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile8() {
  const picture = document.querySelector("#file8-input");
  const pictureLabel = document.querySelector("#file8-label");
  const imgPreview = document.querySelector("#file8-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}
function previewfile9() {
  const picture = document.querySelector("#file9-input");
  const pictureLabel = document.querySelector("#file9-label");
  const imgPreview = document.querySelector("#file9-preview");

  pictureLabel.textContent = picture.files[0].name;

  const filePicture = new FileReader();
  filePicture.readAsDataURL(picture.files[0]);

  filePicture.onload = function (e) {
    imgPreview.src = e.target.result;
  };

}

function previewPassword(elem, id) {
  const iconEye = elem.lastChild;
  // const elmPassword =
  //   elem.parentElement.parentElement.parentElement.firstElementChild;
  const elmPassword = document.getElementById(id);
  if (iconEye.classList.contains("fa-eye-slash")) {
    iconEye.classList.replace("fa-eye-slash", "fa-eye");
    elmPassword.setAttribute("type", "text");
  } else {
    iconEye.classList.replace("fa-eye", "fa-eye-slash");
    elmPassword.setAttribute("type", "password");
  }
}

function openDeleteModal(elem, link) {
  const id = $(elem).data("id");
  $("#valueId").attr("value", id);
  $("#formLinkDelete").attr("action", link);
}

function openDoneModal(elem, link) {
  const id = $(elem).data("id");
  $("#valueDoneId").attr("value", id);
  $("#formLinkDone").attr("action", link);
}

function openCancelModal(elem, link) {
  const id = $(elem).data("id");
  $("#valueCancelId").attr("value", id);
  $("#formLinkCancel").attr("action", link);
}

function openUpdateModal(elem, link) {
  const id = $(elem).data("id");
  $("#valueIdStatus").attr("value", id);
  $("#formLinkUpdate").attr("action", link);
}

function siswaModal(){
      $(document).on('click', '#siswa', function (e) {
        document.getElementById("nisn").value = $(this).attr('data-nisn');
        document.getElementById("idsiswa").value = $(this).attr('data-idsiswa');
        document.getElementById("namasiswa").value = $(this).attr('data-namasiswa');

        $('#modal').modal('hide');
      }); 
      
}
function departemenModal(){
      $(document).on('click', '#departemen', function (e) {
        document.getElementById("id_departemen").value = $(this).attr('data-iddepartemen');
        document.getElementById("nama_departemen").value = $(this).attr('data-namadepartemen');

        $('#modal').modal('hide');
      }); 
      
}
function kelasModal(){
      $(document).on('click', '#kelas', function (e) {
        document.getElementById("idkelas").value = $(this).attr('data-idkelas');
        document.getElementById("namakelas").value = $(this).attr('data-namakelas');

        $('#modal1').modal('hide');
      }); 
      
}


