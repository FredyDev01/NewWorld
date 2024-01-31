const Formulario = document.getElementById("FormUpt");
const CtnInputs = document.querySelectorAll(".CtnInp");
const Inputs = document.querySelectorAll(".Inp");
const InpTelefono = document.getElementById("txtTel");

/*------------LIMITAR INPUT TELEFONO------------*/
function LimitInputNumber(e) {
  const { value } = e.target;
  let newValue = value.replace(/\D/g, "");
  newValue = newValue.substring(0, 9);
  e.target.value = newValue;
}

InpTelefono.addEventListener("input", LimitInputNumber);

/*------------VALIDACION DEL FORMULARIO------------*/
function ValInputs() {
  const EstInputs = [];
  CtnInputs.forEach((e) => {
    var InpAct = e.getElementsByTagName("input")[0];
    var Estado = true;
    switch (InpAct.name) {
      case "Nombres":
      case "Apellidos":
        if (InpAct.value.length == 0) Estado = false;
        break;
      case "Telefono":
        if (InpAct.value.length != 9 || isNaN(InpAct.value)) Estado = false;
        break;
      case "Email":
        if (InpAct.value.length < 14 || InpAct.value.indexOf("@") == -1)
          Estado = false;
        break;
    }
    EstInputs.push({ Estado });
  });
  const isCorrect = EstInputs.every((e) => e.Estado);
  if (!isCorrect) StyleInps(EstInputs);
  return isCorrect;
}

function StyleInps(ListArray) {
  CtnInputs.forEach((e, ind) => {
    e.getElementsByTagName("input")[0].classList.remove("InpSuccess");
    e.getElementsByTagName("input")[0].classList.remove("InpError");
    e.getElementsByClassName("Success")[0].classList.remove("Show");
    e.getElementsByClassName("Error")[0].classList.remove("Show");
    if (ListArray.length) {
      e.getElementsByTagName("input")[0].classList.add(
        ListArray[ind].Estado ? "InpSuccess" : "InpError"
      );
      e.getElementsByClassName(
        ListArray[ind].Estado ? "Success" : "Error"
      )[0].classList.add("Show");
    }
  });
}

/*------------ENVIO DE DATOS A PHP------------*/
function SubInputs() {
  const DataForm = Object.fromEntries(new FormData(Formulario));
  Swal.fire({
    html: `
    <div class='loader'>
        <div class='swal2-icon'>
            <div class='spinner'></div>
        </div>
        <h2 class='swal2-title'>Enviando correo...</h2>
        <p class='swal2-html-container'>
            El correo se esta enviando al administrador de la pagina, esto podria tardar algunos segundos
        </p>
    </div>
  `,
  });
  $.ajax({
    method: "POST",
    url: "./email/sendemail.php",
    ContentType: "application/json",
    data: DataForm,
  }).then((data) => {
    const { Estado, Mensaje } = JSON.parse(data);
    if (Estado) {
      Inputs.forEach((input) => (input.value = ""));
    }
    StyleInps([]);
    const Icono = Estado ? "success" : "error";
    const Titulo = Estado ? "Correo enviado" : "Correo no enviado";
    Swal.fire({
      icon: Icono,
      html: `
        <h2 class='swal2-title'>${Titulo}</h2>
        <p class='swal2-html-container'>
            ${Mensaje}
        </p>      
      `,
    });
  });
}

Formulario.addEventListener("submit", (e) => {
  e.preventDefault();
  if (ValInputs()) {
    SubInputs();
  }
});
