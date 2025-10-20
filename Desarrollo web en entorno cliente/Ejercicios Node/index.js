const alumno = new Object()
alumno.nombre = 'Carlos';    // se crea la propiedad 'nombre' y se le asigna un valor
alumno['apellidos'] = 'Pérez Ortiz';   // se crea la propiedad 'apellidos'
alumno.edad = 19;

const alumno = {
    nombre: 'Carlos',
    apellidos: 'Pérez Ortiz',
    edad: 19,
};

console.log(alumno.nombre);       // imprime 'Carlos'
console.log(alumno['nombre']);   // imprime 'Carlos'

let prop = 'nombre';
console.log(alumno[prop]);
console.log(alumno.ciclo);