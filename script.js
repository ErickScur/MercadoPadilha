
function confirmar(id){

    var ask = window.confirm("Tem certeza?");
    if (ask==true) {
        if(id==1){
        window.alert("Tudo foi apagado");
        window.location.href = "delete.php?id=1";
        }else if(id==2){
            window.alert("Tudo foi apagado");
            window.location.href = "delete.php?id=2";
        }else if(id==3){
            window.alert("Tudo foi apagado");
            window.location.href = "delete.php?id=3";
        }else if(id==4){
            window.alert("Tudo foi apagado");
            window.location.href = "delete.php?id=4";
        }else if(id==5){
            window.alert("Tudo foi apagado");
            window.location.href = "delete.php?id=5";
        }
        
    }
}
