<Strong>Upload de foto de perfil</Strong>
<hr>
<div class="container">
    <div class="row">
	    <div class="col-6 offset-3 jumbotron" style="margin-top: 50px width: 400px;">
		    <form action="?p=salvar" enctype="multipart/form-data" method="POST">
				<input type="hidden" name="acao" value="foto-educador">
			    <div class="form-group">
					<input type="file" name="arquivo" accept="image/*">
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Enviar</button>
				</div>
			</form>
        </div>
    </div>
</div>