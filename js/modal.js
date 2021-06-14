var modal = document.querySelector(".mymodal");
var formModal = document.querySelector(".formLogin");
var btn = document.querySelector(".img-circles");
var editBtn = document.querySelector("#ed-btn");
var editModal = document.querySelector(".edit-prd");
var editModal2 = document.querySelector(".edit-prd-2");
var editBtn2 = document.querySelector("#qt-btn");
var editBtnOut2 = document.querySelector("#btn_qt");
var editBtnOut = document.querySelector("#btn_edit");

btn.onclick = function () {
    modal.style.opacity = "1";
    modal.style.zIndex = "2000";
    formModal.style.transform  = "scale(1)";
}

/*
modal.onclick = function () {
    modal.style.opacity = "0"
    modal.style.zIndex = "-1"
    modal.style.transition  = ".4s"
    formModal.style.transform  = "scale(0)"
}
*/

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.opacity = "0";
        modal.style.zIndex = "-1";
        modal.style.transition  = ".4s";
        formModal.style.transform  = "scale(0)";
    }
}

// sms script

var btn_sms = document.querySelector(".btn-sms");
var sms_close = document.querySelector(".sms-close");
var sms_modal = document.querySelector(".sms-modal");

btn_sms.onclick = function sms(params) {
    // alert("funciona");
    sms_modal.style.top = "60px";
    sms_modal.style.zIndex = "1800";
    sms_modal.style.opacity = "1";
}

sms_close.onclick = function sms_close(params) {
    // alert("funciona");
    sms_modal.style.top = "100px";
    sms_modal.style.zIndex = "-1";
    sms_modal.style.opacity = "0";
}

// noticação script

var btn_not = document.querySelector(".btn-not");
var not_close = document.querySelector(".not-close");
var not_modal = document.querySelector(".not-modal");

btn_not.onclick = function sms(params) {
    // alert("funciona");
    not_modal.style.top = "60px";
    not_modal.style.zIndex = "1800";
    not_modal.style.opacity = "1";
}

not_close.onclick = function sms_close(params) {
    // alert("funciona");
    not_modal.style.top = "100px";
    not_modal.style.zIndex = "-1";
    not_modal.style.opacity = "0";
}

// condição se clicar em notificação ou em sms close

btn_sms.onclick = function sms(params) {
    // alert("funciona");
    sms_modal.style.top = "60px";
    sms_modal.style.zIndex = "1800";
    sms_modal.style.opacity = "1";

    // notficação

    not_modal.style.top = "100px";
    not_modal.style.zIndex = "-1";
    not_modal.style.opacity = "0";
}

btn_not.onclick = function sms(params) {
    // alert("funciona");
    not_modal.style.top = "60px";
    not_modal.style.zIndex = "1800";
    not_modal.style.opacity = "1";

    // sms content

    sms_modal.style.top = "100px";
    sms_modal.style.zIndex = "-1";
    sms_modal.style.opacity = "0";    
}