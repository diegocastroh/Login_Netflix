const $dialog = document.getElementById("dialog");
const $icon = document.getElementById("icon");
const $confirmBtn = document.getElementById("confirmBtn");
$icon.addEventListener("click", () => {
    $dialog.showModal();
    document.querySelector("body").style.filter = "blur(1rem)";
})
$dialog.addEventListener("close", () => {
    document.querySelector("body").style.filter = "blur(0)";
    if ($dialog.returnValue === "cancel") return;

})


// In your Javascript (external .js resource or <script> tag)
$(document).ready(function() {
    $('.js-example-basic-single').select2();
    listar_departamento();
});

$("#sel_departamento").change(function() {
    var iddepartamento = $("#sel_departamento").val();
    listar_pronvincia(iddepartamento);
})

$("#sel_provincia").change(function() {
    var idprovincia = $("#sel_provincia").val();
    listar_distrito(idprovincia);
})