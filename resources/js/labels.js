let frutas = []                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                

function Marco() {
    var fechasolicitud = document.getElementById('fechasolicitud').value;
    var periodo = document.getElementById('periodo').value;
    var tipobeca = document.getElementById("tipobeca").value;
    var nombre = document.getElementById("nombre").value;
    var matricula = document.getElementById("matricula").value;
    var cuatrimestre = document.getElementById("cuatrimestre").value;
    var telefono = document.getElementById("telefono").value;
    var lengua = document.getElementById("lengua").value;
    var cual_lengua = document.getElementById("cual_lengua").value;
    var carrera = document.getElementById("carrera").value;
    var sexo = document.getElementById("sexo").value;
    var recibeotrabeca = document.getElementById("recibeotrabeca").value;
    var otrotipobeca = document.getElementById("otrotipobeca").value;
    var cualtipobeca = document.getElementById("cualtipobeca").value;
    var apoyoeconomico = document.getElementById("apoyoeconomico").value;
    var quienapoyoeconomico = document.getElementById("quienapoyoeconomico").value;
    var ocupacionPadre = document.getElementById("ocupacionPadre").value;
    var ocupacionMadre = document.getElementById("ocupacionMadre").value;
    var principalapoyoeconomico = document.getElementById("principalapoyoeconomico").value;
    var ingresomensual = document.getElementById("ingresomensual").value;
    var gastodiario = document.getElementById("gastodiario").value;
    var dependenciaeconomica = document.getElementById("dependenciaeconomica").value;
    var trabajoestudio = document.getElementById("trabajoestudio").value;
    var horastrabajoestudio = document.getElementById("horastrabajoestudio").value;
    var rentaestudio = document.getElementById("rentaestudio").value;
    var pagorentaestudio = document.getElementById("pagorentaestudio").value;
    var localidad = document.getElementById("localidad").value;
    var municipio = document.getElementById("municipio").value;
    var estado = document.getElementById("estado").value;
    var casa = document.getElementById("casa").value;
    var otra_casa = document.getElementById("otra_casa").value;
    var personascasa = document.getElementById("personascasa").value;
    var cuartoscasa = document.getElementById("cuartoscasa").value;
    var cbtelefono = document.getElementById("cbtelefono").value;
    var cbdrenaje = document.getElementById("cbdrenaje").value;
    var cbalumbradopublico = document.getElementById("cbalumbradopublico").value;
    var cbcallespavimentadas = document.getElementById("cbcallespavimentadas").value;
    var viajecasa = document.getElementById("viajecasa").value;
    var gastopasaje = document.getElementById("gastopasaje").value;
    var gastodesayuno = document.getElementById("gastodesayuno").value;
    var gastocomida = document.getElementById("gastocomida").value;
    var gastocena = document.getElementById("gastocena").value;
    var gastototal = document.getElementById("gastototal").value;
    var ingresopadre = document.getElementById("ingresopadre").value;
    var ingresomadre = document.getElementById("ingresomadre").value;
    var ingresohermanos = document.getElementById("ingresohermanos").value;
    var ingresootros = document.getElementById("ingresootros").value;
    var ingresototal = document.getElementById("ingresototal").value;
    var gastoalimento = document.getElementById("gastoalimento").value;
    var gastovestido = document.getElementById("gastovestido").value;
    var gastocelular = document.getElementById("gastocelular").value;
    var gastotransporte = document.getElementById("gastotransporte").value;
    var gastorenta = document.getElementById("gastorenta").value;
    var otrosgastos = document.getElementById("otrosgastos").value;
    var gastosemanal = document.getElementById("gastosemanal").value;


    frutas.push(fechasolicitud, periodo, tipobeca,nombre,matricula,
        cuatrimestre,telefono,lengua,cual_lengua,carrera,sexo,recibeotrabeca,
        otrotipobeca,cualtipobeca,apoyoeconomico,quienapoyoeconomico,ocupacionPadre,ocupacionMadre,
        principalapoyoeconomico,ingresomensual,gastodiario,dependenciaeconomica,trabajoestudio,
        horastrabajoestudio,rentaestudio,pagorentaestudio,localidad,municipio,estado,
        casa,otra_casa,personascasa,cuartoscasa,cbtelefono,cbdrenaje,cbalumbradopublico,
        cbcallespavimentadas,viajecasa,gastopasaje,gastodesayuno,gastocomida,gastocena,gastototal,
        ingresopadre,ingresomadre,ingresohermanos,ingresootros,ingresototal,gastoalimento,
        gastovestido,gastocelular,gastotransporte,gastorenta,otrosgastos,gastosemanal);
    console.log(frutas);

}