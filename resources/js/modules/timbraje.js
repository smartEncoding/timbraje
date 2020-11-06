var editor;

$(document).ready(function () 
{
        var selected = [];

        table_detalle = $("#table-detalle").DataTable({
                "dom":'<t<"col-10 ml-auto mr-auto"<"text-center">>>',
                
                "columns": [
                        {},
                        {},
                        {},
                        {},
                        {},
                        {},
                        {},
                        {},
                        {},
                        {
                            render: function ( data, type, row ) {
                                if ( type === 'display' ) {
                                    if (row[7]==1)
                                        return '<input type="checkbox" checked disabled class="editor-active">';
                                    else
                                        return '<input type="checkbox"  disabled class="editor-active">';
                                }
                                return data;
                            },
                            className: "dt-body-center"
                        },
                        {
                        data: null,
                        className: "center",
                        defaultContent: '<button href="" class="editor_remove">Borrar</button>'
                        }
                ],
                "columnDefs":[
                    {
                    "targets": [ 8 ],
                    "visible": false,
                    "searchable": false
                    }
                    ]
        });
                
     
        // Delete a record
        $('#table-detalle').on('click', 'button.editor_remove', function (e) {
            e.preventDefault();
            let toRemove = $(this).closest('tr');
            let DataTmp = table_detalle.row(toRemove).data();

            table_detalle.row(toRemove).remove();
            $(this).closest('tr').remove()
        } );
     
        
        $( "form" ).on( "submit", function( event ) 
            {
                event.preventDefault();
                var productos = get_detalles();
                var receptor = get_datos_receptor();
                $.ajax(
                        {
                        url: 'guardar_comprobante',
                        type: "POST",
                        data: {'receptor': receptor, 'productos': productos},
                        dataType: 'json',
                        success: function (data, textStatus, jqXHR)
                        {
                            if (data.success)
                                {
                                    console.log("perfect");
                                    limpiar_form();
                                    selected = [];
                                    document.getElementById("id_empresa").focus();
                                }
                            else
                                {
                                    console.log("Error al guardar doc");
                                    iziToast.show({
                                            title: data.validaciones.error.title,
                                            message: data.validaciones.error.message,
                                            position: 'topCenter',
                                            color: data.validaciones.error.color,
                                            icon: 'error'
                                            }); 
                                    alert(data.validaciones.error.message);
                                }
                        },
                        error: function(data) {
                                console.log("Error al comunicarse con servidor");
                        }
                });
            });

        $("#agregar_detalle").on('click', function(e){

                e.preventDefault();



                selected[0]={'posicion':table_detalle.rows().count() + 1,
                'mes_d':$("#mes_d").val()+'/'+$("#anio_d").val(),
                'anio_d':$("#anio_d").val(),
                'mes_h':$("#mes_h").val()+'/'+$("#anio_h").val(),
                'anio_h':$("#anio_h").val(),
                'desde':$("#desde").val(),
                'hasta':$("#hasta").val(),
                'id_libro':$("#id_tipo_libro").val(),
                'nomlibro':$('#id_tipo_libro option:selected').text(),
                'nulo':document.getElementById("nulos").checked,
                };

                dataPut = [
                        selected[0].posicion,
                        selected[0].mes_d,
                        selected[0].mes_h,
                        selected[0].anio,
                        selected[0].desde,
                        selected[0].hasta,
                        selected[0].id_libro,
                        selected[0].nomlibro,
                        selected[0].nulo,
                        // selected[0].acciones,
                ];
                var receptor = get_datos_receptor();
                $.ajax(
                        {
                        url: base_url+'comprobantes_timbraje/verifica',
                        type: "POST",
                        data: {'receptor': receptor, 'productos': selected},
                        dataType: 'json',
                        success: function (data, textStatus, jqXHR)
                        {
                            if (data.success)
                                {
                                    console.log("perfect");
                                    table_detalle.row.add(dataPut).draw(false);
                                    limpiar_form();
                                    selected = [];
                                    document.getElementById("mes").focus();
                                }
                            else
                                {
                                    console.log("Error al guardar doc");
                                    iziToast.show({
                                            title: data.validaciones.error.title,
                                            message: data.validaciones.error.message,
                                            position: 'topCenter',
                                            color: data.validaciones.error.color,
                                            icon: 'error'
                                            }); 
                                    alert(data.validaciones.error.message);
                                }
                        },
                        error: function(data) {
                                console.log("Error al comunicarse con servidor");
                        }
                });


        });
        
                  
        function limpiar_form(){
                var container = $("#form-control-detalle");
                $(container.find(".mes")).val("");
                $(container.find(".anio")).val("");
                $(container.find(".desde")).val("");
                $(container.find(".hasta")).val("");
                $(container.find(".nulas")).val("");
        }

        function get_datos_receptor(){
                let container = $("#form-control-encabezado");
                let out = {
                        empresa: $("#id_empresa").val(),
                        usuario: $(container.find("#id_usuario")).val(),
                        numero: $(container.find("#numero")).val(),
                        fecha: $(container.find("#fecha")).val(),
                        anulado: document.getElementById("nulo").checked,
                };
                return out;
        }

        function get_detalles()
            {
                console.log(table_detalle.rows);
                let data = table_detalle.rows().data();
                let dataPost = [];
                if(data.length > 0){
                        for (let index = 0; index < data.length; index++) {
                                dataPost.push(data.row(index).data());
                        }
                }
                return dataPost;
            }


        });