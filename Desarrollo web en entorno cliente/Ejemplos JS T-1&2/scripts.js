function funcion1() {
  let f1_num = 3;
  console.log("Ejecutando función 1");
  funcion2();
}

function funcion2() {
  let f2_string =  'hola'
  console.log("Ejecutando función 2");
  funcion3();
}

function funcion3() {
  let f3_und;
  console.log("Ejecutando función 3");
  console.log("Cadena de llamadas completada ✅");
}

funcion1();