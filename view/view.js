$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
})


function login(){
    
    let user_name = $("#user_name").val();
    let password = $("#password").val();
    
    $.ajax({
        url: "../controller/controller.php?accion=login",
        type: "post",
        data: {user_name:user_name,password:password},
        dataType: "JSON",
        success: function(res){
            if(res.encontrado){
                alert(res.mensaje);
                $("#user_name").val("");
                $("#password").val("");
                setTimeout("location.href='../view/pagina_principal.php'", 40);
            }else{
                alert(res.mensaje);
                $("#user_name").val("");
                $("#password").val("");
            }
        //    if(res == "You are the admin... BIENVENIDO..."){
        //         alert(res);
        //         setTimeout("location.href='../view/pagina_principal.php'", 40);
        //    }else{
        //         alert("Nose que pedo");
        //    }
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.log(textStatus, errorThrown);
        }
    });
}

function insert(){
    let name = $("#name").val();
    let last_name = $("#last_name").val();
    let email = $("#email").val();
    let phone = $("#phone").val();

    $.ajax({
        url: "../controller/controller.php?accion=insert",
        type: "post",
        data: {name:name, last_name:last_name, email:email, phone:phone},
        success: function(){
            $("#name").val("");
            $("#last_name").val("");
            $("#email").val("");
            $("#phone").val("");
            //Aqui recargamos la tabla para que se actualicen los datos sin tener que salirnos del modal y recargar la pagina
            $("#tbody").load(" #tbody");
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.log(textStatus, errorThrown);
        }
    });
}

function search(){
    
    let search = $("#search").val();
    
    $.ajax({
        url: "../controller/controller.php?accion=search",
        type: "post",
        data: {search:search},
        // dataType: "JSON",
        success: function(res){
            console.log(res);
            // let arreglo = JSON.parse(res);
            // console.log(arreglo);
        },
        error: function(jqXHR, textStatus, errorThrown){
            console.log(textStatus, errorThrown);
        }
    });
}

function delet(idCUSTOMER){
    // alert(idCUSTOMER);
    if(confirm("Desea eliminar al usuario...")){
        $.ajax({
            url: "../controller/controller.php?accion=delete",
            type: "post",
            data: {idCUSTOMER:idCUSTOMER},
            success: function(){
                alert("ACTION COMPLETED...");
                $("#tbodyDelete").load(" #tbodyDelete");
            },
            error: function(jqXHR, textStatus, errorThrown){
                console.log(textStatus, errorThrown);
            }
        });
    }

}


