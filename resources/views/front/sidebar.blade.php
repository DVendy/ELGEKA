<div class="samping">
	<h2>Login Sistem</h2>
	<br>
	<p>Silahkan masukkan username dan password Anda untuk masuk ke dalam sistem.</p>
	<br>
	<form action="#" method="POST" class="form-horizontal">
		<div class="form-group">
			<div class="col-sm-12">
				<input type="text" class="form-control" placeholder="Username">
			</div>
		</div>
		<div class="form-group">
			<div class="col-sm-12">
				<input type="text" class="form-control" placeholder="Password">
			</div>
		</div>
		<div class="form-actions text-right">
			<!--
			<button type="submit" class="btn btn-warning">Masuk</button>
		-->
			<a href="{{ URL('register') }}" class="btn btn-info">Daftar</a>
      	</div>
	</form>
</div>