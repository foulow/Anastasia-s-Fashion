function minimizer(){

    var minimized = $("#minimized").val();

    if(minimized == 0){
        //mostrar
        $(".carritot").css("bottom","350px");
        $(".carritob").css("bottom","0px");
        $("#minimized").val('1');
    }else{
        //minimizar

        $(".carritot").css("bottom","0px");
        $(".carritob").css("bottom","-350px");
        $("#minimized").val('0');
    }
}
