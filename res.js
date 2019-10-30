  // Your web app's Firebase configuration
    firebase.initializeApp({ // aqui tambien lo cambie
    apiKey: "AIzaSyCZTfcGWvoLhtGWKm1JIxb-_wWCVipxiDo",
    authDomain: "reservacion-bc34e.firebaseapp.com",
    databaseURL: "https://reservacion-bc34e.firebaseio.com",
    projectId: "reservacion-bc34e",
    storageBucket: "reservacion-bc34e.appspot.com",
    messagingSenderId: "1068494562428",
    appId: "1:1068494562428:web:b6faeed7e86491067315f9" });
  // Initialize Firebase 
 var db = firebase.firestore();
 
 //CAPTURAR FECHA ACTUAL
    var dt = new Date();
    var month = dt.getMonth() + 1;
    var mes = "";
    if(month == 1 || month == 2 || month == 3 || month == 4 || month == 5 || month == 6 || month == 7 || month == 8 || month == 9){
        mes = "0" + month;
    }else{
        mes = month;
    }
    var day = dt.getDate();
    var year = dt.getFullYear();
    var fecha_formato = year + "-" + mes + "-" + day;
    document.getElementById('fecha').value = fecha_formato;	
    console.log(fecha_formato);

    /*/CAPTURAR SEMANA
    var dias = (dt.getDate() + 7 );
    var semana = year + "-" + mes + "-" + dias;
    console.log(semana);*/

//guardar datos
function Add_res() {
    var responsable = document.getElementById('responsable').value;
    var fecha = document.getElementById('fecha').value;
    var zona = document.getElementById('zona').value;
    var hora = document.getElementById('hora').value;
    var telefono = document.getElementById('telefono').value;
    var cant_personas = document.getElementById('cant_personas').value;
    var estado;

    if (document.getElementById('zona').value == '' ){
        alert("debe ingresar datos");
    }else if (fecha < fecha_formato) {
        alert("debe ingresar una fecha valida!");
    }else{
    db.collection("Reservaciones").add({
            
            responsable: responsable,
            fecha: fecha,
            zona: zona,
            hora: hora,
            telefono: telefono,
            cant_personas: cant_personas,
            estado: "ep",

        })
        .then(function (docRef) {
            console.log("Document written with ID: ", docRef.id);
            responsable = document.getElementById('responsable').value = '';
            fecha = document.getElementById('fecha').value = fecha_formato;
            zona = document.getElementById('zona').value = '';
            hora = document.getElementById('hora').value = '';
            telefono = document.getElementById('telefono').value = '';
            cant_personas = document.getElementById('cant_personas').value = '';
            alert("reservacion Realizada Exitosamente!!");

        })
        .catch(function (error) {
            console.error("Error adding document: ", error);
        });
    }
}
//HORARIOS DIPONIBLES


/*
function ver_hora(){

	// var zona = document.getElementById("zona"); 
	// var hora = document.getElementById("hora"); 
	// var fecha = document.getElementById("fecha");
	 db.collection("horas").onSnapshot((querySnapshot) => {
	    //hora.innerHTML = "";
	    querySnapshot.forEach((doc) => {
	        
	        db.collection("Reservaciones").onSnapshot((querySnapshot1) => {
	            querySnapshot1.forEach((doc1) => {

	                if(doc.data().hora == doc1.data().hora){
	                   
	                }else{
	                    console.log(doc.data().hora);
	                    hora.innerHTML +=`
	                        <option >${doc.data().hora}</option>
	                    `;
	                }
	            });//cierre de forEach dentro de condicion
	        });//cierre de query snap shot dentro de condicion
	    });/*cierre de forEach*/
	//});/*cierre de query snap shot */



//
//}