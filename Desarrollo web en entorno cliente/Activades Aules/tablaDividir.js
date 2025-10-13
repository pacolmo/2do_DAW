const mostrarTabla = (event) => {
    event.preventDefault();
    const numero = Number(document.getElementById('numero').value);

    if (numero >= 1 && numero <= 10) {
        let tabla = document.getElementById('fraolmseg@alu.edu.gva.es');
        let tabladividir = `<h2>Tabla de dividir del número ${numero}</h2>`;
        tabladividir += '<ul>';

        for (let i = 1; i <= 10; i++) {
            tabladividir += `<li>${numero} / ${i} = ${numero / i}</li>`;
        }

        tabladividir += '</ul>';
        tabla.innerHTML = tabladividir;

    } else {
        alert('El número introducido debe estar entre 0 y 10 (ambos inclusive');
        document.getElementById("numero").value = '';
    }
}