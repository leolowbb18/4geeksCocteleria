//alert('Conectados');
$(document).ready(function(){
	var altura = $('.pegajoso').offset().top;
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.pegajoso').addClass('pegajoso-fixed');
		} else {
			$('.pegajoso').removeClass('pegajoso-fixed');
		}
	});
});

/* Arreglo para contener datos de usuarios. */
var usuarios_a = [];
/* Arreglo para poder eliminar personas. */ 
var copia = [];
/* Obtenemos nuestra tabla, para alli mostrar 
la tabla dinamica */
var table = document.getElementById("tabla");//Para mostrar los usuariosque se ingresaronal sistema.
/* Obtenemos nuestros botones a travez del
ID y la dom dejavascript */
var boton1 = document.getElementById("btn1");
var boton3 = document.getElementById("btn3");
var boton4 = document.getElementById("btn4");
var boton5 = document.getElementById("btn5");

/* Añadimos la funcion respectiva a cada boton */
boton1.addEventListener("click", cargar);
boton3.addEventListener("click", mostrar);
boton4.addEventListener("click", envioCorreo);
boton5.addEventListener("click", eliminar);

//Obtenemos el valor de cada input a travez de la DOM
var name1 = document.getElementById("nom1");
var name2 = document.getElementById("nom2");
var name3 = document.getElementById("ape1");
var name4 = document.getElementById("ape2");
var ced = document.getElementById("ci");
var correo = document.getElementById("mail");
var correo2 = document.getElementById("mail2");
var clave1 = document.getElementById("clave1");
var clave2 = document.getElementById("clave2");
var telefono = document.getElementById("telf");

var selecDia = document.getElementById("dia");
var opcDia = selecDia.options[selecDia.selectedIndex];

var selecMes = document.getElementById("mes");
var opcMes = selecMes.options[selecMes.selectedIndex];

var selecAnio = document.getElementById("anio");
var opcAnio = selecAnio.options[selecAnio.selectedIndex];

var selecSexo = document.getElementById("sexo");
var opcSexo = selecSexo.options[selecSexo.selectedIndex];
/* Agregamos el evento blur para corregir sino llenaron el campo
de forma correcta */
name1.addEventListener("blur", soloLetras);
name2.addEventListener("blur", soloLetras);
name3.addEventListener("blur", soloLetras);
name4.addEventListener("blur", soloLetras);
ced.addEventListener("blur", v_cedula);
telefono.addEventListener("blur", v_telefono);
correo.addEventListener("blur", v_mail);
correo2.addEventListener("blur", v_mail2);
clave1.addEventListener("blur", v_password);
clave2.addEventListener("blur", v_password2);

//Declaramos nuestro objeto para poder almacenar los usuarios y sus datos.
var usuarios = function (nombre1, nombre2, apellido1, apellido2, ci, correo, clave, telf, 
	dia, mes, anio, sexo){
	this.nombre1 = nombre1;
	this.nombre2 = nombre2;
	this.apellido1 = apellido1;
	this.apellido2 = apellido2;
	this.ci = ci;
	this.correo = correo;
	this.clave= clave;
	this.telf = telf;
	this.dia = dia;
	this.mes = mes;
	this.anio = anio;
	this.sexo = sexo;
	/*
	this.mostrar2 = function(){
		document.write(
			"Nombre1:"+" "+this.nombre1+"<br>"+
			"Nombre2:"+" "+this.nombre2+"<br>"+
			"Apellido1:"+" "+this.apellido1+"<br>"+
			"Apellido2:"+" "+this.apellido2+"<br>"+
			"Cedula:"+" "+this.ci+"<br>"+
			"Correo:"+" "+this.correo+"<br>"+
			"Clave:"+" "+this.clave+"<br>"+
			"Telf:"+" "+this.telf+"<br>"+
			"Dia:"+" "+this.dia+"<br>"+
			"Mes:"+" "+this.mes+"<br>"+
			"Anio:"+" "+this.anio+"<br>"+
			"Sexo:"+" "+this.sexo+"<br>");			
	}
	*/
}
/*var usu = new usuarios ("leo", "", "blanco", "bravo", 16972782, 
	"leolow18@hotmail.com", "Wa1", 000-0000000, 11, 11, 2016, "hombre");
*/

/* Ordenar elementos del arreglo por un atributo numerico */
Array.prototype.orderByNumber=function(property,sortOrder){
  // Primero se verifica que la propiedad sortOrder tenga un dato válido.
  if (sortOrder!=-1 && sortOrder!=1) sortOrder=1;
  this.sort(function(a,b){
    // La función de ordenamiento devuelve la comparación entre property de a y b.
    // El resultado será afectado por sortOrder.
    return (a[property]-b[property])*sortOrder;
  })
}

/* Ordenar elementos del arreglo por un atributo char */
Array.prototype.orderByString=function(property,sortOrder,ignoreCase){
  if (sortOrder!=-1 && sortOrder!=1) sortOrder=1;
  this.sort(function(a,b){
    var stringA=a[property],stringB=b[property];
    // Si un valor es null o undefined, se convierte a cadena vacía.
    if (stringA==null) stringA = '';
    if (stringB==null) stringB = '';
    // Si ignoreCase es true, se convierten ambas variables a minúsculas.
    if (ignoreCase==true){stringA=stringA.toLowerCase();stringB=stringB.toLowerCase()}
    var res = 0;
    if (stringA<stringB) res = -1;
    else if (stringA>stringB) res = 1;
    return res*sortOrder;
  })
}


//Con esta funcion tomamos los valores de los inputs para almacenarlos en nuestro 
//objeto.
function cargar(){
	//Obtenemos el valor de cada input a travez de la DOM
	var name1 = document.getElementById("nom1").value;
	var name2 = document.getElementById("nom2").value;
	var name3 = document.getElementById("ape1").value;
	var name4 = document.getElementById("ape2").value;
	var ced = document.getElementById("ci").value;
	var correo = document.getElementById("mail").value;
	var clave1 = document.getElementById("clave1").value;
	var telefono = document.getElementById("telf").value;

	var selecDia = document.getElementById("dia");
	var opcDia = selecDia.options[selecDia.selectedIndex];
	var dia11 = opcDia.value;

	var selecMes = document.getElementById("mes");
	var opcMes = selecMes.options[selecMes.selectedIndex];
	var mes11 = opcMes.value;

	var selecAnio = document.getElementById("anio");
	var opcAnio = selecAnio.options[selecAnio.selectedIndex];
	var anio11 = opcAnio.value;

	var selecSexo = document.getElementById("sexo");
	var opcSexo = selecSexo.options[selecSexo.selectedIndex];
	var sexo11 = opcSexo.value;
	
	var apro1 = 0;
	var apro2 = 0;
	apro1 = cedNoRepe(ced);
	apro2 = mailNoRepe(correo);
	
	/* Comprobamos que existan campos vacios */
	if(
		name1 != null && name1 != "" &&
		name2 != null && name2 != "" &&
		name3 != null && name3 != "" &&
		name4 != null && name4 != "" &&
		ced != null && ced != "" &&
		correo != null && correo != "" &&
		clave1 != null && clave1 != "" &&
		telefono != null && telefono != "" &&
		dia11 != null && dia11 != "" &&
		mes11 != null && mes11 != "" &&
		anio11 != null && anio11 != "" &&
		sexo11 != null && sexo11 != ""){
		if(apro1 == 0 && apro2 == 0){
		/* Ahora que tenemos todos los valores de cada input del formulario, instanciamos nuestro objeto 
		usuario con todos los valores para alamacenar al nuevo usuario. */
		emailjs.init("user_kqjGBIVRV9BnHUwTn35G7");
		emailjs.sendForm("leolowbb18","template_m8rgHUk5","form1");
		var usu = new usuarios (name1, name2, name3, name4, ced, correo, clave1, telefono, dia11, mes11, anio11, sexo11);
		/* Almacenamos el objeto dentro de un array. */
		usuarios_a.push(usu);

		vaciar();

		}
		else{
			if(apro1 == 1){
				alert("La cedula ya existe, por favor corrigela");
			}
			if(apro2 == 1){
				alert("El correo ya existe, por favor corrigelo");
			}
		}
	}else{
		alert("No puedes dejar campos vacios");
	}
}

function vaciar(){
	var name1 = document.getElementById("nom1");
	var name2 = document.getElementById("nom2");
	var name3 = document.getElementById("ape1");
	var name4 = document.getElementById("ape2");
	var ced = document.getElementById("ci");
	var correo = document.getElementById("mail");
	var correo2 = document.getElementById("mail2");
	var clave1 = document.getElementById("clave1");
	var clave2 = document.getElementById("clave2");
	var telefono = document.getElementById("telf");

	name1.value = "";
	name2.value = "";
	name3.value = "";
	name4.value = "";
	ced.value = "";	
	correo.value = "";
	correo2.value = "";
	clave1.value = "";
	clave2.value = "";
	telefono.value = "";
}

function mostrar(){
	/*Tomamos nuestra tabla dianmica y la vaciamos con una variable
	en caso de que posea datos anteriores.*/
	alert("Aqui estamos todos");
	var tabla = document.getElementById("tabla");
	tabla.innerHTML= "";

	/*Creamos la cabecera y lo pegamos de la tabla.*/
	var header = tabla.createTHead();
	/*Creamos la fila y se añade a la tabla.*/
	var cabezera = header.insertRow(-1);
	/*Insertamos la o las celdas(columnas) dentro de la fila */
	var titulo1 = cabezera.insertCell(0);
	var titulo2 = cabezera.insertCell(1);
	var titulo3 = cabezera.insertCell(2);
	var titulo4 = cabezera.insertCell(3);
	var titulo5 = cabezera.insertCell(4);
	var titulo6 = cabezera.insertCell(5);
	var titulo7 = cabezera.insertCell(6);
	var titulo8 = cabezera.insertCell(7);
	var titulo9 = cabezera.insertCell(8);
	var titulo10 = cabezera.insertCell(9);
	var titulo11 = cabezera.insertCell(10);
	var titulo12 = cabezera.insertCell(11);
	/* Le añadimos el titulo a nuestra cabezera de la tabla. */
	titulo1.innerHTML = "Nombre1";
	titulo2.innerHTML = "Nombre2";
	titulo3.innerHTML = "Apellido1";
	titulo4.innerHTML = "Apellido2";
	titulo5.innerHTML = "Cedula";
	titulo6.innerHTML = "Correo";
	titulo7.innerHTML = "Telefono";
	titulo8.innerHTML = "Clave";
	titulo9.innerHTML = "Dia";
	titulo10.innerHTML = "Mes";
	titulo11.innerHTML = "Anio";
	titulo12.innerHTML = "Sexo";
	/* Con el ciclo for vamos a llenar cada fila de la tabla con los
	datos de lu usuarios almacenados en nuestro objeto*/
	for( var i=0; i < usuarios_a.length; i++){
		/*Primero creamos la fila y todas las celdas que
		van dentro de esa fila.*/
		var row = tabla.insertRow(-1);
		/*con el -1 es para que inserte la fila despues
		del ultimo elemento.*/
		var cell1 = row.insertCell(0);
		var cell2 = row.insertCell(1);
		var cell3 = row.insertCell(2);
		var cell4 = row.insertCell(3);
		var cell5 = row.insertCell(4);
		var cell6 = row.insertCell(5);
		var cell7 = row.insertCell(6);
		var cell8 = row.insertCell(7);
		var cell9 = row.insertCell(8);
		var cell10 = row.insertCell(9);
		var cell11 = row.insertCell(10);
		var cell12 = row.insertCell(11);	

		//ahora le asignamos a cada celda un valor de nuestro objeto.
		cell1.innerHTML = usuarios_a[i].nombre1;
		cell2.innerHTML = usuarios_a[i].nombre2;
		cell3.innerHTML = usuarios_a[i].apellido1;
		cell4.innerHTML = usuarios_a[i].apellido2;
		cell5.innerHTML = usuarios_a[i].ci;
		cell6.innerHTML = usuarios_a[i].correo;
		cell7.innerHTML = usuarios_a[i].clave;
		cell8.innerHTML = usuarios_a[i].telf;
		cell9.innerHTML = usuarios_a[i].dia;
		cell10.innerHTML = usuarios_a[i].mes;
		cell11.innerHTML = usuarios_a[i].anio;
		cell12.innerHTML = usuarios_a[i].sexo;
	}
}

function ordenCedula(){
	usuarios_a.orderByNumber('ci',-1);
	mostrar();
}

function ordenApellido(){
	usuarios_a.orderByString('apellido1');
	mostrar();
}

function eliminar(){
	/* Pedimos la cedula de la persona a eliminar */
	var eliminado = prompt('A que persona desea eliminar','Cedula'); 
	/* Revisamos que la variableno este vacia o null. */
	if( eliminado != null || eliminado != ""){  
		/* Recorremos el arreglo. */
		for(var i = 0; i < usuarios_a.length; i++){ 
	    	/* Pasamos a otro arreglo todos los alumnos menos el elimnado. */
	    	if( usuarios_a[i].ci != eliminado){ 
	    		copia.push(usuarios_a[i]);
	    	}
	  	}
	  	usuarios_a.length=0; /* Vaciamos el arreglo salon */
	  	for(var i=0; i<copia.length; i++){ /* Pasamos los alumnos de copia a ususario_a. */
	  		usuarios_a.push(copia[i]);
	  	}
	  }copia.length=0; //Vaciamos copia, para que no guarde basura.
}

/* Recibimos un parametro que es la cedula de la persona
que se desea registar. Con esta funcion revisamos que la cedula no exista
en nuestro objeto usuarios_a*/
function cedNoRepe(c){
	var bandera1 = 0;
	for(var i = 0; i < usuarios_a.length; i++){ 
	    	/* Si hay alguna coincidencia la cedula ya existe, es decir
	    	bandera = 1 */
	    	if( usuarios_a[i].ci == c){ 
	    		bandera1 = 1;
	    	}
	  	} return bandera1
}
/* Recibimos un parametro que es el correo de la persona
que se desea registar. Con esta funcion revisamos que el correo no exista
en nuestro objeto usuarios_a*/
function mailNoRepe(m){
	var bandera1 = 0;
	for(var i = 0; i < usuarios_a.length; i++){ 
	    	/* Si hay alguna coincidencia el correo ya existe, es decir
	    	bandera = 1 */
	    	if( usuarios_a[i].correo == m){ 
	    		bandera1 = 1;
	    	}
	  	} return bandera1
}

/* Validaciones */
/* Validar que nombres y apellidos solo contengan letras con Blur.*/
function soloLetras(evento){    
	var patron1 = /^[a-zA-Z]*$/; 
	if(!patron1.test(evento.target.value)){
		alert('Ingreso algun caracter no permitido');
		evento.target.value = "";
	}
}
//validar el numero de cedula con onBlur.
function v_cedula(evento){
	var patron=/^[0-9]{0,2}[0-9]{3}[0-9]{3}$/;
  	  	if (!patron.test(evento.target.value)){
	  		alert('El valor no tiene el formato correcto');
	  		evento.target.value='';
		}
}

//validar el numero de telefono con onBlur.
function v_telefono(evento){
	var patron=/^[0-9]{3}\-[0-9]{7}$/;
  	if(evento.target.value!=""){
	  	if (!patron.test(evento.target.value)){
	  		alert('El valor no tiene el formato correcto');
	  		evento.target.value ='';
		}
	}
}

// Validar la direccion de correo electronico con onBlur.
function v_mail(evento){
    var patron = /^([a-z]+[a-z1-9._-]*)@{1}([a-z1-9\.]{2,})\.([a-z]{2,3})$/;
	if(evento.target.value!=""){   
	    if(!patron.test(evento.target.value)){
	    	alert('El correo no es valido (mail)');
	    	evento.target.value='';
	    }
	}
}
/* verificamos que ambos correos sean iguales */
function v_mail2(evento){
	var correo = document.getElementById("mail").value;
    if(evento.target.value != correo){
       alert('Los correos no coinciden');
       evento.target.value = "";
	}
}

function v_password(evento){
	var patron = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/;
  	if(evento.target.value!=""){
	  	if (!patron.test(evento.target.value)){
	  		alert('El valor no tiene el formato correcto');
	  		evento.target.value ='';
		}
	}
}

function v_password2(evento){
	var pas2 = document.getElementById("clave1").value;
    if(evento.target.value != pas2){
       alert('Las claves no coinciden');
       evento.target.value = "";
	}
}
/*emailJS*/
function envioCorreo(){
	emailjs.init("user_kqjGBIVRV9BnHUwTn35G7");
	alert('Esta es la funcion con EmailJs');
}


/*  De nuestra pagina de inicio sesion */
/* ============================================================ */
var sesion1 = document.getElementById('correoSesion');
var sesion2 = document.getElementById('clavesesion');

/* ============================================================ */
/*Esta es la funcion que va a permitir el acceso a nuestros usuarios */
function ingreso(){
	var sesion1 = document.getElementById('correoSesion').value;
	var sesion2 = document.getElementById('clavesesion').value;
	var bandera1 = 0;
	for(var i = 0; i < usuarios_a.length; i++){ 
	    	/* Si hay alguna coincidencia el correo ya existe, es decir
	    	bandera = 1 */
	    	if( usuarios_a[i].correo == sesion1 && usuarios_a[i].clave == sesion1){ 
	    		bandera1 = 1;
	    	}
	  	} 
	  	if(bandera1 == 1){
	  		alert("Puede ingresar al sistema");

	  	}
	  	else{
	  		alert("Sus datos no coinciden con el sistema");
	  		sesion1.value = "";
	  		sesion2.value = "";	
	  	}
}
/*  Ejemplo de un localstorage
var colocando = { 'uno': 1, 'dos': 2, 'tres': 3 };

// Colocando mi objeto Json dentro del localstorage
localStorage.setItem('prueba', JSON.stringify(colocando));

// Sacando el objeto Json del localstorage
var sacando = localStorage.getItem('prueba');

var probando = JSON.parse(sacando);

document.getElementById("name1").innerHTML = probando.dos;
*/
/* ===================== Navbar Pegajoso ================ 
$(document).ready(function(){
	var altura = $('.pegajoso').offset().top;
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.pegajoso').addClass('pegajoso-fixed');
		} else {
			$('.pegajoso').removeClass('pegajoso-fixed');
		}
	});
 
});
*/

	