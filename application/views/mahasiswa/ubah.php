<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					Form Ubah Data Mahasiswa
					</div>
						<div class="card-body">
							<form action="" method="post">
								<input type="hidden" name="id" value="<?php echo $mahasiswa['id'];?>">
								<div class="form-group">
									<label for="nama">Nama</label>
									<input type="text" name="nama" class="form-control" id="nama" value="<?php echo $mahasiswa['nama'];?>">
									<small  class="form-text text-danger"><?php echo form_error('nama');?></small>
								</div>
								<div class="form-group">
									<label for="nim">Nomor Induk Mahasiswa</label>
									<input type="number" name="nim" class="form-control" id="nim" value="<?php echo $mahasiswa['nim'];?>">
									<small  class="form-text text-danger"><?php echo form_error('nim');?></small>
								</div>
								<div class="form-group">
									<label for="email">Alamat email</label>
									<input type="email" name="email" class="form-control" id="email" value="<?php echo $mahasiswa['email'];?>">
									<small  class="form-text text-danger"><?php echo form_error('email');?></small>
								</div>
								<div class="form-group">
									<label for="jurusan">Jurusan</label>
									<select class="form-control" id="jurusan" name="jurusan">
										<?php foreach ($jurusan as $j): ?>
											<?php if($j == $mahasiswa['jurusan']): ?>
												<option value="<?php echo $j;?>" selected><?php echo $j;?></option>
											<?php else: ?>
												<option value="<?php echo $j;?>"><?php echo $j;?></option>
											<?php endif; ?>
										<?php endforeach; ?>
									</select>
								</div>
								<button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>