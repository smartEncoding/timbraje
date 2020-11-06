function add()
    {
        save_method = 'add';
        $('#formulario')[0].reset(); // reset form on modals
        $('#modal-title').html('Nuevo Libro');
        //$('[name="id"]').val(0);
        $('#modal_form_subcat').modal('show'); // show bootstrap modal when complete loaded
        $('[name="id_current"]').val();
    }

var modalConfirm = function(callback)
	{
  
  		$("#btn-confirm").on("click", function()
  			{
			    $("#mi-modal").modal('show');
  			});

  		$("#modal-btn-si").on("click", function()
  			{
			    callback(true);
			    $("#mi-modal").modal('hide');
		  	});
  
  		$("#modal-btn-no").on("click", function()
  			{
			    callback(false);
			    $("#mi-modal").modal('hide');
		 	});
	};

	modalConfirm(function(confirm)
		{
	  		if(confirm)
		  		{
		    		//Acciones si el usuario confirma
		    		var id = $('#id_to_delete').val();
			        var url=base_url+"tipos_libro/remove";
    				$('#id_to_delete').val(0);
			        $.ajax({
			            url: url,
			            type: "POST",
			            data:'id_to_delete='+id,
			            dataType: "JSON",
			            success: function (data)
			            {
			                if (data.success)
			                {
			                     reload_table();
			                } 
			                else
			                {
								return false;
			                }
			            },
			            error: function (jqXHR, textStatus, errorThrown)
			            {
			                $('#errors').html(errorThrown);
			            }
			        });// END AJAX
		  		}
    		$('#id_to_delete').val(0);
		});



function eliminar(id)
    {
    	$('#id_to_delete').val(id);
    	$("#mi-modal").modal('show');                   
    }


var table;
            
$(document).ready(function () {

    table = $('#table').DataTable(
            {
                
                "language": {"url": base_url+'resources/modules/datatables/languaje/spanish.json'},
                "processing": true, //Feature control the processing indicator.
                "PaginationType": "bootstrap",
                "bInfo" : false,
                "bAutoWidth": false,
                "serverSide": true, //Feature control DataTables' server-side processing mode.
                "lengthMenu": [[12, 25, 50, -1], [12, 25, 50, "Todos"]],
                // Load data for the table's content from an Ajax source
                "ajax": {
                    //"data": $("#frmcuentas").serialize(),
                    "url": base_url+"tipos_libro/listar",
                    "type": "POST"
                },

                "columnDefs": [ { 
                    'targets':2,
                    'searchable':false,
                    'orderable':false,
                    'className':'dt-body-center',
                    'render': function ( data, type, row ) {
                                        if ( type === 'display' ) {
                                            if (data=='1')
                                                return '<input type="checkbox" checked disabled class="editor-active">';
                                            else
                                                return '<input type="checkbox"  disabled class="editor-active">';
                                        }
                                        return data;
                                    },
                                    className: "dt-body-center"
                                },
                            ],
             });// END DATATABLE

    });// END DOCUMENT READY
                                /*
                                    */
function limpia_form(que_form)
    {
        $("#" + que_form)[0].reset();
    }



function reload_table()
    {
		$("#loader").show();
        table.ajax.reload(null, false); //reload datatable ajax 
		$("#loader").hide();
    }


function edit(id)
    {
        save_method = 'update';
        var anUrl=base_url+"Tipos_libro/edit";
		$("#loader").show();
        $.ajax({
            url: anUrl,
            type: "POST",
            data:'id='+id,
            dataType: "JSON",
            success: function (data)
            {
                $('#modal-title').html('Modificacion de Libro');
                $('#formulario')[0].reset(); // reset form on modals
                $('#errors').html('');
                if (data.db.activo!=0)
                    $("#activo").prop("checked",data.db.activo);
                else
                    $("#activo").removeProp("checked");

                //$('[name="activo"]').val(data.db.activo);
                $('[name="nombre"]').val(data.db.nombre);
                $('[name="id_current"]').val(data.db.id);
                
                $('#modal_form_subcat').modal('show'); // show bootstrap modal when complete loaded

				$("#loader").hide();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
				$("#loader").hide();
                alert('Error al Procesar datos');
            }
        });
    }    
   
$(document).ready(function () 
{
    $(function(){
            $('#formulario').on('submit', function(e){
                e.preventDefault();
            	$("#loader").show();
                var page_to_post=base_url+'tipos_libro/'+save_method;
                var datos={
                    'activo':document.getElementById("activo").checked ? 1 : 0,
                    'nombre':$("#nombre").val(),
                    'id_current':$("#id_current").val()
                    };

                $.ajax(
                {
                    type: "POST",
                    url: page_to_post,
                    dataType: 'json',
                    data:datos,//$('#formulario').serialize(),
                    success:function(data)
                        {  
            				$("#loader").hide();
                            if ($('[name="id_current"]').val()==0)     
                                {
                                    if (data.success)
                                        {
                                            limpia_form('formulario');
                                        }
                                }
                            else
                            	{
									$('#modal_form_subcat').modal('hide'); // show bootstrap modal when complete loaded
                            	}	
                            reload_table();
                        },
		            error: function (jqXHR, textStatus, errorThrown)
			            {
            				$("#loader").hide();
			                alert('Error al Procesar datos');
			            }
                }); // fin Ajax
            }) // en .on(submit)
    }) // end function
});// END DOCUMENT READY
