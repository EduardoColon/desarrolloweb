
function actualizarPantalla(valor){

    document.calculator.ans.value+= valor;

}

function calcularResultado(){

    document.calculator.ans.value=eval(document.calculator.ans.value);
    
}