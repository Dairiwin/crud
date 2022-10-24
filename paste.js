
    //Asigno el evento "click" del botón para provoar el copiado
    document.getElementById('btnCopiar').addEventListener('click', copiarAlPortapapeles);

    //Función que lanza el copiado del código
    function copiarAlPortapapeles(ev){
        var codigoACopiar = document.getElementById('textoACopiar');    //Elemento a copiar
        //Debe estar seleccionado en la página para que surta efecto, así que...
        var seleccion = document.createRange(); //Creo una nueva selección vacía
        seleccion.selectNodeContents(codigoACopiar);    //incluyo el nodo en la selección
        //Antes de añadir el intervalo de selección a la selección actual, elimino otros que pudieran existir (sino no funciona en Edge)
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(seleccion);  //Y la añado a lo seleccionado actualmente
        try {
            var res = document.execCommand('copy'); //Intento el copiado
            if (res)
                exito();
            else
                fracaso();

            mostrarAlerta();
        }
        catch(ex) {
            excepcion();
        }
        window.getSelection().removeRange(seleccion);
    }


///////
// Auxiliares para mostrar y ocultar mensajes
///////
    var divAlerta = document.getElementById('alerta');

    function exito() {
        divAlerta.innerText = '¡¡Copiado al portapapeles!!';
        divAlerta.classList.add('alert-success');
    }

    function fracaso() {
        divAlerta.innerText = '¡¡Ha fallado el copiado al portapapeles!!';
        divAlerta.classList.add('alert-warning');
    }

    function excepcion() {
        divAlerta.innerText = 'Se ha producido un error al copiar al portapaples';
        divAlerta.classList.add('alert-danger');
    }

    function mostrarAlerta() {
        divAlerta.classList.remove('invisible');
        divAlerta.classList.add('visible');
        setTimeout(ocultarAlerta, 1500);
    }

    function ocultarAlerta() {
        divAlerta.innerText = '';
        divAlerta.classList.remove('alert-success', 'alert-warning', 'alert-danger', 'visible');
        divAlerta.classList.add('invisible');
    }