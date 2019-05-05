<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Tambah Data Mahasiswa
					</div>
						<div class="card-body">
							<form action="" method="post">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama">
									<small  class="form-text text-danger"><?php echo form_error('nama');?></small>
								</div>
								<div class="form-group">
									<label for="nim">Nomor Induk Mahasiswa</label>
									<input type="number" name="nim" class="form-control" id="nim">
									<small  class="form-text text-danger"><?php echo form_error('nim');?></small>
								</div>
								<div class="form-group">
									<label for="email">Alamat email</label>
									<input type="email" name="email" class="form-control" id="email">
									<small  class="form-text text-danger"><?php echo form_error('email');?></small>
								</div>
								<div class="form-group">
									<label for="jurusan">Jurusan</label>
									<select class="form-control" id="jurusan" name="jurusan">
										<?php foreach ($jurusan as $j): ?>
											<option value="<?php echo $j;?>"><?php echo $j;?></option>
										<?php endforeach; ?>
									</select>
								</div>
								<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>