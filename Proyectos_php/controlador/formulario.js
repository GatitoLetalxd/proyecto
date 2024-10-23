const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');
const expresiones = {
    nombre: /^[a-zA-Z]{1,40}$/,
    apellido: /^[a-zA-Z]/,
    edad: /^[0-9]{1,3}$/,
    correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    password: /^.{4,20}$/
}

const campos = {
    correo: false,
    password: false
}
const valor = {
    correo1: true,
    password1: true
}

const validarFormulario = (e) => {
    
    // console.log('se ejecuto el script');
    // console.log(e.target.name);
    switch(e.target.name){
        case "correo":
            console.log('script funcionando')
            if(e.target.value.trim() === ''){
                // console.log("vacio");
                document.getElementById('contenedor_correo').classList.add('dato_incorrecto')
                document.querySelector('#formulario .formulario_error_correo_vacio').classList.add('formulario-error-activo')
                document.querySelector('#formulario .formulario_error_correo').classList.remove('formulario-error-activo')
                document.querySelector('#formulario .formulario_error_incorrecto').classList.remove('formulario-error-activo')
                campos['correo'] = false;
                valor['correo1'] = true;
            }else{
                if(expresiones.correo.test(e.target.value)){
                    document.querySelector('#formulario .formulario_error_correo_vacio').classList.remove('formulario-error-activo')
                    document.getElementById('contenedor_correo').classList.remove('dato_incorrecto')
                    document.querySelector('#formulario .formulario_error_correo').classList.remove('formulario-error-activo')
                    document.querySelector('#formulario .formulario_error_incorrecto').classList.remove('formulario-error-activo')
                    document.querySelector('#formulario .formulario_error_vacio').classList.remove('formulario-error-activo')
                    campos['correo'] = true;
                    valor['correo1'] = false;
                }else{
                    document.querySelector('#formulario .formulario_error_correo_vacio').classList.remove('formulario-error-activo')
                    document.getElementById('contenedor_correo').classList.add('dato_incorrecto')
                    document.querySelector('#formulario .formulario_error_correo').classList.add('formulario-error-activo')
                    document.querySelector('#formulario .formulario_error_incorrecto').classList.remove('formulario-error-activo')
                    document.querySelector('#formulario .formulario_error_vacio').classList.remove('formulario-error-activo')
                    campos['correo'] = false;
                    valor['correo1'] = false;

                }
            }
        break;
        case "password":
            console.log('script funcionando')
            if(e.target.value === ''){
                document.getElementById('contenedor_password').classList.add('dato_incorrecto')
                document.querySelector('#formulario .formulario_error_contraseña_vacio').classList.add('formulario-error-activo')
                document.querySelector('#formulario .formulario_error_contraseña').classList.remove('formulario-error-activo')
                document.querySelector('#formulario .formulario_error_incorrecto').classList.remove('formulario-error-activo')
                campos['password'] = false;
                valor['password1'] = true;
            }else{
                if(expresiones.password.test(e.target.value)){
                    document.querySelector('#formulario .formulario_error_contraseña_vacio').classList.remove('formulario-error-activo')
                    document.getElementById('contenedor_password').classList.remove('dato_incorrecto')
                    document.querySelector('#formulario .formulario_error_contraseña').classList.remove('formulario-error-activo')
                    document.querySelector('#formulario .formulario_error_incorrecto').classList.remove('formulario-error-activo')
                    document.querySelector('#formulario .formulario_error_vacio').classList.remove('formulario-error-activo')  
                    campos['password'] = true;
                    valor['password1'] = false;
                }else{
                    document.querySelector('#formulario .formulario_error_contraseña_vacio').classList.remove('formulario-error-activo')
                    document.getElementById('contenedor_password').classList.add('dato_incorrecto')
                    document.querySelector('#formulario .formulario_error_contraseña').classList.add('formulario-error-activo')
                    document.querySelector('#formulario .formulario_error_incorrecto').classList.remove('formulario-error-activo')
                    document.querySelector('#formulario .formulario_error_vacio').classList.remove('formulario-error-activo')
                    campos['password'] = false;
                    valor['password1'] = false;
                }
            }
            
        break;
    }
}

inputs.forEach((input)=> {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

formulario.addEventListener('submit',(e)=>{
    
    if(valor.correo1 == true || valor.password1 == true){
        console.log("vacio");
        document.querySelector('#formulario .formulario_error_vacio').classList.add('formulario-error-activo')
        e.preventDefault();
    }else{
        if(campos.correo == false || campos.password == false ){
            // formulario.reset();
            e.preventDefault();
            console.log("datos incorrectos")
            document.querySelector('#formulario .formulario_error_incorrecto').classList.add('formulario-error-activo')
            
    
        }else{
            if(campos.correo == true && campos.password == true){
                // validador_de_sesion= document.getElementById('php').getAttribute('data-temp');
                // console.log(validador_de_sesion)
                // // e.preventDefault();
                // if(validador_de_sesion == "2"){
                //     console.log("error")
                //     e.preventDefault();
                // }else{
                //     console.log("sesion inciada")
                // }
            

            }   
                
            
        }
    }
    
});

// () => {
//     console.log('Presiono una tecla');
// }