function validar(){

		var txtNombre = document.getElementById('name').value;
		var txtAppat = document.getElementById('lastp').value;
		var txtApmat = document.getElementById('lastm').value;
		var txtDireccion = document.getElementById('address').value;
		var genero = document.getElementsByName("gender");


		var banderaRBTN;



		if(txtNombre == null || txtNombre.length == 0 || /^\s+$/.test(txtNombre)){
			alert('ERROR: El campo nombre no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}

		if(txtAppat == null || txtAppat.length == 0 || /^\s+$/.test(txtAppat)){
			alert('ERROR: El campo Appat no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}
		if(txtApmat == null || txtApmat.length == 0 || /^\s+$/.test(txtApmat)){
			alert('ERROR: El campo Apmat no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}

		if(txtDireccion == null || txtDireccion.length == 0 || /^\s+$/.test(txtDireccion)){
			alert('ERROR: El campo direccion no debe ir vacío o lleno de solamente espacios en blanco');
			return false;
		}

		var seleccionado = false;
		for(var i=0; i<genero.length; i++) {
		  if(opciones[i].checked) {
		    seleccionado = true;
		    alert(genero);
		    break;
		  }
		}

		if(!seleccionado) {
		  return false;
		}
		if (genero1 !=="1"||genero !=="2") {
					alert(genero);
					return false;
				}
		//Test edad
		if(txtEdad == null || txtEdad.length == 0 || isNaN(txtEdad)){
			alert('ERROR: Debe ingresar una edad');
			return false;
		}

		//Test correo
		if(!(/\S+@\S+\.\S+/.test(txtCorreo))){
			alert('ERROR: Debe escribir un correo válido');
			return false;
		}

		//Test fecha
		if(!isNaN(txtFecha)){
			alert('ERROR: Debe elegir una fecha');
			return false;
		}

		//Test comboBox
		if(cmbSelector == null || cmbSelector == 0){
			alert('ERROR: Debe seleccionar una opcion del combo box');
			return false;
		}

		//Test checkBox
		if(!chkEstado.checked){
			alert('ERROR: Debe seleccionar el checkbox');
			return false;
		}

		//Test RadioButtons
		for(var i = 0; i < rbtGenero.length; i++){
			if(rbtGenero[i].checked){
				banderaRBTN = true;
				break;
			}
		}
		if(!banderaRBTN){
			alert('ERROR: Debe elegir una opción de radio button');
			return false;
		}

		return true;
	}
