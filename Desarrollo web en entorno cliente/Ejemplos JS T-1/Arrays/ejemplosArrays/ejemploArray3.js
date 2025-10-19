let arr = [1,-2,3,4,-9,6];

//La tarea es encontrar, dentro de ’arr’, el subarray de elementos contiguos que tenga la suma máxima.
function getMaxSubSum(arr) {
  let maxSum = 0;
  let partialSum = 0;

  for (let nums of arr) { // por cada nums de arr
    partialSum += nums; // se lo suma a partialSum
    maxSum = Math.max(maxSum, partialSum); // registra el máximo
    if (partialSum < 0){
         partialSum = 0; // cero si se vuelve negativo
    }
  }

  return maxSum;
}

console.log(getMaxSubSum([-1, 2, 3, -9]) ); // 5