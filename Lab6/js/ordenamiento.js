function bubblesort(a,N) {
    var i=j=v=0;
    for(i=1;i<N;i++){
      
        (function (i) {
            setTimeout(function () {
                v=a[i];
        j=i;
        while(j>0 && a[j-1]>v) {
            a[j]=a[j-1];
            j--;
        };
        a[j]=v;  
        document.getElementById('datos').innerHTML = a;
            }, 500*i);
          })(i);
    } 

    mostrarMayor();
    mostrarMenor();
};


var x;


function imprimirSinOrdenar(){

    x = [...Array(20)].map(虚 => Math.floor(Math.random() * 1000));
    document.getElementById('datos').innerHTML = x;

}

function ordenar(){
    bubblesort(x, 20);
}

function mostrarMayor(){
    var mayor=0;
    for(var i = 0; i <20; i++){
        if(x[i] > mayor)
            mayor = x[i];
    }
    alert("El numero mayor es: " + mayor);
}
  
function mostrarMenor(){
    var menor= 1000;
    for(var i = 0; i <20; i++){
        if(x[i] < menor)
            menor = x[i];
    }
    alert("El numero menor es: " + menor);
}

