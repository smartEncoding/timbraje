$(document).ready(function() {
	
	if( $('.has-datetimepicker').length ) 
	{
		$('.has-datetimepicker').datetimepicker();
	}
	
	if( $('.has-datepicker').length )
	{
		$('.has-datepicker').datetimepicker({format: 'DD/MM/YYYY'});
	} 

	
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
});