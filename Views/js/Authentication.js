function HabilitarCampos(){
    var correo = document.getElementById("correoElectronico").value;
    var clave = document.getElementById("contrasena").value;

    if(correo.trim() != "" && clave.trim() != "")
    {
      //docuement.getElementById("btnIniciarSesion").disable = false;
      $("#btnIniciarSesion").prop("disabled", false);
    }else{
      $("#btnIniciarSesion").prop("disabled", true);
    }
    //$("#btnIniciarSesion").disabled = false;
  } 

  function HabilitarRegistro(){

    password1 = document.getElementById("contrasena").value;
    password2 = document.getElementById("contrasena2").value;
  
    if(password1 == password2){
      console.log('Contraseña valida');
      $("#btnRegistrarse").prop("disabled", false);
    }else{
      console.log('Contraseña invalida');
      $('#mensajeContrasena').html('Las contraseñas no coinciden');
    }
  }

  function ValidarCorreo(){

    var email = $('#correoElectronico').val();

    $.ajax({
      type: "POST",
      url: '../Controllers/AuthenticationController.php',
      datatype: 'json',
      data: {
        'BuscarUsuario':'BuscarUsuario',
        'Correo':email
      },
      success: function(respuesta){
        console.log(respuesta);
        if(respuesta == '1'){
          console.log('Correo electronico ya registrado');
          $('#mensaje').html('Correo electronico ya registrado');
          
        }else{
          console.log('Correo electronico valido');
          $('#mensaje').html('Correo electronico valido');
        }
      }
    })
  }

function RecuperarContraseña(){

    var email = $('#emailRecuperar').val();

    $.ajax({
      type: "POST",
      url: '../Controllers/AuthenticationController.php',
      datatype: 'json',
      data: {
        'RecuperarUsuario':'RecuperarUsuario',
        'Correo':email
      },
      success: function(respuesta){
        console.log(respuesta);
        if(respuesta == '1'){

        }else{

        }
      }
    })
  }




