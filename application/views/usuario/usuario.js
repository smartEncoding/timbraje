
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
			        var url=base_url+"usuario/remove";
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
    