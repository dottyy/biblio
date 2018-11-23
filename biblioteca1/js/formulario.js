var getData =function(){
	var carnet =document.getElementById("ci").value;
	var nombre =document.getElementById("Nombre").value;
	var apellido =document.getElementById("Apellido").value;
	var correo =document.getElementById("Correo").value;
	var telefono =document.getElementById("Telefono").value;
	var mensaje =document.getElementById("mensaje").value;
	if(carnet==""){
		document.getElementById("ci").focus();
	}else{if(nombre==""){
		document.getElementById("Nombre").focus();
		}else{if(apellido==""){
			document.getElementById("Apellido").focus();
			}else{if(correo==""){
				document.getElementById("Correo").focus();
				}else{if(telefono==""){
					document.getElementById("Telefono").focus();
					}else{if(mensaje==""){
					document.getElementById("mensaje").focus();
				}else{
					alert("Bienvenido "+nombre + apellido + "Nos comunicaremos con Usted en un lapso de 24 horas, GRACIAS POR SU PREFERENCIA");
					document.getElementById("ci").value="";
					document.getElementById("Nombre").value="";
					document.getElementById("Apellido").value="";
					document.getElementById("Correo").value="";
					document.getElementById("Telefono").value="";
					document.getElementById("mensaje").value="";
					}
		
				}
		
			}
		
		}
		
	}

	}
}