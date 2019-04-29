$(function(){	
$('#tPersona').DataTable();
});

$(function(){	
$('#tAfiliacion').DataTable();
});


function deleteFila(id){

	bootbox.confirm({
		message: "¿está seguro de eliminar el registro?",
		buttons :{
			confirm:{
				label: 'si',
				className: 'btn-danger'
			},
			cancel: {
				label: 'no',
				className: 'btn-info'
			}
		},

		callback: function (result){
			console.log (result);
			if (result){
				$.ajax({
					url:window.laravel.url+'/formulario/'+id,
					type: 'POST',
					data:{_token:window.laravel.token,
						_method:'DELETE'},
				})
				.done(function(res){
					console.log(res);
					console.log("Ajax ok.");
					if(res.status){
						$('#fila' +res.id).remove();
					}else{
						alert(res.msj);
					}
				}).fail(function(res){
					console.log("error:");
					console.log(res);
				})
				}
			}
		
	});
}