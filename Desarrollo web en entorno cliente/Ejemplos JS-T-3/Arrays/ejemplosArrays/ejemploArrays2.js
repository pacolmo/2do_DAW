/*Suma de números ingresados
importancia: 4
Escribe una función sumInput() que:
Pida al usuario valores usando prompt y los almacene en el array.
Termine de pedirlos cuando el usuario ingrese un valor no numérico, una cadena vacía, o presione “Escape”.
Calcule y devuelva la suma de los items del array.
P.D. Un cero 0 es un número válido, por favor no detengas los ingresos con el cero.
 */

function sumInput() {
  let numeros = [];

  while (true) {
    let valor = prompt("Ingresa un número (o deja vacío para terminar):");

    // Si se cancela, deja vacío o no es un número, salimos del bucle
    if (valor === "" || valor === null || !isFinite(valor)) {
      break;
    }

    // Convertimos el valor a número y lo añadimos al array
    numeros.push(+valor);
  }

  // Calculamos la suma
  let suma = 0;
  for (let numero of numeros) {
    suma += numero;
  }

  return suma;
}

console.log(sumInput());
