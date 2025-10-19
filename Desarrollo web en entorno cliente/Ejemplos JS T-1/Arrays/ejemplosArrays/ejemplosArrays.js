/*Tratemos 5 operaciones de array.
Crear un array styles con los items “Jazz” y “Blues”.
Agregar “Rock-n-Roll” al final.
Reemplazar el valor en el medio por “Classics”. Tu código para encontrar el valor medio debe funcionar con cualquier array de longitud impar.
Quitar el primer valor del array y mostrarlo.
Anteponer Rap y Reggae al array.*/

let styles =['Jazz','blues'];
console.log(styles);
styles.push('Rock&Roll');
console.log(styles);
styles[1] = 'Classics';
console.log(styles);
styles.shift();
console.log(styles);
styles.unshift('Rap','Reggae');
console.log(styles);