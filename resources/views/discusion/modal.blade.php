<div class="modal fade modal-slide-in-right" aria-hidden="true" role="dialog" tabindex="-1" id="modal-delete-{{$d->iddiscusion}}">

	{{form::Open(array('action'=>array('DiscusionController@destroy',$d->iddiscusion),'method'=>'delete'))}}

	<div class="modal-dialog">
	 <div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">x</span>
			</button>
			<h4 class="modal-title"> Eliminar discusion </h4>
		</div>

		<div class="modal-body">
			<p> Confirme si desea Eliminar la discusion </p>
		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-success" data-dismiss="modal">Cerrar </button>
			<button type="submit" class="btn btn-success">Confirmar</button>
		</div>
	</div>
</div>
{{Form::Close()}}
