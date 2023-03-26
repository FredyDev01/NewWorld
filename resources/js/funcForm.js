const Formulario = document.getElementById('FormUpt')
const CtnInps = document.querySelectorAll('.CtnInp')


/*------------VALIDACION DEL FORMULARIO------------*/
function ValInputs(){
    const EstInputs = []    
    CtnInps.forEach(e => {
        var InpAct = e.getElementsByTagName('input')[0]
        var Estado = true
        switch(InpAct.name){
            case 'Nombres':
            case 'Apellidos':
                if(InpAct.value.length == 0) Estado = false
                break;
            case 'Telefono':
                if(InpAct.value.length != 9 || isNaN(InpAct.value)) Estado = false
                break;
            case 'Email':
                if(InpAct.value.length < 14 || InpAct.value.indexOf('@') == -1) Estado = false
                break;
        }
        EstInputs.push({Estado})
    })    
    const isCorrect = EstInputs.every(e => e.Estado)
    if(!isCorrect) StyleInps(EstInputs)
    return isCorrect
}


function StyleInps(ListArray){
    CtnInps.forEach((e, ind) => {
        e.getElementsByTagName('input')[0].classList.remove('InpSuccess')
        e.getElementsByTagName('input')[0].classList.remove('InpError')            
        e.getElementsByClassName('Success')[0].classList.remove('Show')
        e.getElementsByClassName('Error')[0].classList.remove('Show')  
        if(ListArray.length){
            e.getElementsByTagName('input')[0].classList.add(ListArray[ind].Estado ? 'InpSuccess' : 'InpError')          
            e.getElementsByClassName(ListArray[ind].Estado ? 'Success' : 'Error')[0].classList.add('Show')            
        }
    })
}


/*------------ENVIO DE DATOS A PHP------------*/
function SubInputs(){
    const DataForm = Object.fromEntries(new FormData(Formulario))
    $.ajax({
        method: 'POST',
        url: './email/sendemail.php',
        ContentType: 'application/json',
        data: DataForm
    }).then((x)=> {        
        console.log(x)
        var strList = x.split('Response->')
        var response = JSON.parse(strList[strList.length - 1])                        
        if(response.Estado){
            Formulario['txtNom'].value = ''
            Formulario['txtApe'].value = ''
            Formulario['txtTel'].value = ''
            Formulario['txtEma'].value = ''
        }
        StyleInps([])        
        Swal.fire({icon: response.Estado ? 'success' : 'error', text: response.Mensaje})        
    })    
}


Formulario.addEventListener('submit', (e) => {
    e.preventDefault()
    if(ValInputs()) SubInputs()
})