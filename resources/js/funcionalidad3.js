var regName = / ^ [a-zA-Z] + [a-zA-Z] + $ / ;
var nombre = documento .getElementById ( 'nombre1' ) .value;
if (! regName.test (nombre)) {
    alerta ( 'Nombre inválido dado.' );
} else {
    alerta ( 'nombre válido dado.' );
}