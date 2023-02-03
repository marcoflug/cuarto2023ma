class multi{
    constructor(numero1, numero2){
        this.numero1 = numero1;
        this.numero2 = numero2;
    }

    multi() {
        return this.numero1 * this.numero2;
    }
}

function proceso(){
    var n1=parseInt(document.getElementById("primern").value);
    var n2=parseInt(document.getElementById("secn").value);
    var obj= new multi(n1,n2);
    document.getElementById("Total").innerText="La respues es : "+obj.multi();
}