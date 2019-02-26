


/*--
***************************************
Seleccionador para actualizar 
***************************************
--*/
function Select_Detalle(Select_ID) {
    $("#ID_Registro").val(Select_ID);
    $.post("roles_abc.php", {
            Select_ID: Select_ID
        },
        function (data, status) {
            var registro = JSON.parse(data);
            $("#ID_Registro_Update").val(registro.ID);
            $("#actualiza_imagen").show();
        }
    );
}

/*--
***************************************
Seleccionador para eliminar 
***************************************
--*/
function Select_Elimina(Select_ID) {
    $("#ID_Registro").val(Select_ID);
    $.post("roles_abc.php", {
            Select_ID: Select_ID
        },
        function (data, status) {
            var registro = JSON.parse(data);
            document.getElementById('Nombre_Elimina').innerHTML = registro.Nombre;
            $("#ID_Registro_Elimina").val(registro.ID);
            $("#Elimina_Registro").show();
        }
    );
}

/*--
***************************************
Seleccionador para actualizar datos
***************************************
--*/
function Select_Detalle_Datos(Select_ID) {
    $("#ID_Registro").val(Select_ID);
    $.post("roles_abc.php", {
            Select_ID: Select_ID
        },
        function (data, status) {
            var registro = JSON.parse(data);
            $("#ID_Registro_Update_Datos").val(registro.ID);
            $("#Nombre_Update").val(registro.Nombre);
            $("#actualiza_datos").show();
        }
    );
}

