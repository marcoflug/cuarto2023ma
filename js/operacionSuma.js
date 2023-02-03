class operacion
{
    constructor(numero1, numero2)
    {
        this.numero1 =numero1;
        this.numero2 =numero2;
    }
    suma()
    {
        return this.numero1 + this.numero2;
    }
    resta()
    {
        return this.numero1 - this.numero2;  
    }
    multi()
    {
        return this.numero1 * this.numero2;
    }
    div()
    {
     if (this.numero2 === 0) {
        return "No se puede dividir para 0.";
        }
     else {
        return this.numero1 / this.numero2;
        }
    }

}

function procesoS()
{
    var n1=parseInt(document.getElementById("primern").value);
    var n2=parseInt(document.getElementById("secn").value);
    var obj= new operacion(n1,n2);
    document.getElementById("Total").innerText="La respues es : "+obj.suma();
}

function procesoR()
{
    var n1=parseInt(document.getElementById("primern").value);
    var n2=parseInt(document.getElementById("secn").value);
    var obj= new operacion(n1,n2);
    document.getElementById("Total").innerText="La respues es : "+obj.resta();
}

function procesoM()
{
    var n1=parseInt(document.getElementById("primern").value);
    var n2=parseInt(document.getElementById("secn").value);
    var obj= new operacion(n1,n2);
    document.getElementById("Total").innerText="La respues es : "+obj.multi();
}

function procesoD()
{
    var n1=parseInt(document.getElementById("primern").value);
    var n2=parseInt(document.getElementById("secn").value);
    var obj= new operacion(n1,n2);
    document.getElementById("Total").innerText="La respues es : "+obj.div();
}
