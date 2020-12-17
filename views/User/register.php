<div class="container p-4">
	<form action="adduser" method="POST" enctype="multipart/form-data">
		<div class="row">
			<div class=" col-sm-6 col-md-3">
				<div class="card-header" id="img">
					<img src=" <?php echo URL.RQ?>img/defauld.jpg" class="imageUser" alt="">
				</div>
				<div class="card-body">
					<div class="caption text-center">
						<label class="btn btn-primary" for="files">Cargar foto</label>
						<input accept="image/" name="img" type="file" id="files">
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-5">
				<div class="panel panel-primary">
						<div class="panel heading">
								<h3 class="panel-title">Registrar usuarios</h3>
						</div>
						<div class="panel-body">
							<div class="accordion" id="accordionExample">
								<div class="card">
									<div class="card-header" id="headingone">
										<div class="nb-0 t">
											<button class="btn bg-dark btn-link text-light" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" type="button" aria-controls="collapseOne">
												Ingresar Informacion
											</button>
										</div>
									</div>
								</div>

								<div id="collapseOne" class="collapse show" aria-labelledby="headingone" data-parent="#accordionExample">
									<div class="card-body">
										<div class="form-group">
											<input type="text" name="nid" placeholder="NID" class="form-control" value="<?php echo $model1->NID?? '' ?>" autofocus>
											<span class="text-danger"></span>
										</div>
										<div class="form-group">
											<input type="text" name="name" placeholder="Name" class="form-control" autofocus>
											<span class="text-danger"></span>
										</div>
										<div class="form-group">
											<input type="text" name="lastname" placeholder="Last name" class="form-control" autofocus>
											<span class="text-danger"></span>
										</div>
										<div class="form-group">
											<input type="phone" name="phone" placeholder="Phone" class="form-control" autofocus>
											<span class="text-danger"></span>
										</div>
										<div class="form-group">
											<input type="phone" name="user" placeholder="Enter the user" class="form-control" autofocus>
											<span class="text-danger"></span>
										</div>
										<div class="form-group">
											<input type="email" name="email" placeholder="Email" class="form-control" autofocus>
											<span class="text-danger"></span>
										</div>
										<div class="form-group">
											<input type="password" name="password" placeholder="Password" class="form-control" autofocus>
											<span class="text-danger"></span>
										</div>
										<div class="form-group">
											<input type="submit" class="btn btn-outline-danger">
											<input type="reset" class="btn btn-outline-warning">
										</div>
									</div>
								</div>

							</div>
						</div>
				</div>
			</div>
		</div>
	</form>
</div>