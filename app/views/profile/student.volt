 {{ content() }}
  

<div class="container">
	<div class="row">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		
			<div class="panel panel-primary">
				  <div class="panel-heading">
						<h3 class="panel-title">Student Background Profile</h3>
				  </div>
				  <div class="panel-body">
					{{form('profile/save')}}
					<div class="form-group">
						<label>Upload Picture</label>
						  {{profile.render('upload_picture')}}  
					</div>

					<div class="form-group">
						<label>Nick Name</label>
						 {{profile.render('nick_name')}}
					</div>
					<div class="form-group">
						<label>Email</label>
						 {{profile.render('email')}}
					</div>
					<div class="form-group">
						<label>Age</label>
						 {{profile.render('age')}}
					</div>

					<div class="form-group">
						<label>Gender</label>
						 {{profile.render('gender')}}
					</div>

					<div class="form-group">
						<label>Birth Place</label>
						 {{profile.render('birth_place')}}
					</div>

					<div class="form-group">
						<label>Birth Date</label>
						 {{profile.render('birth_date')}}
					</div>


					<div class="form-group">
						<label>Present Address</label>
						 {{profile.render('present_address')}}
					</div>

					<div class="form-group">
						<label>Telephone Number</label>
						 {{profile.render('telno_a1')}}
					</div>

					<div class="form-group">
						<label>Provincial Address</label>
						 {{profile.render('provincial_address')}}
					</div>

						<div class="form-group">
						<label>Telephone Number</label>
						 {{profile.render('telno_a2')}}
					</div>

					<div class="form-group">
						<label>Mobile Number</label>
						 {{profile.render('mobile_number')}}
					</div>

							<div class="form-group">
						<label>Nationality</label>
						 {{profile.render('nationality')}}
					</div>

						<div class="form-group">
						<label>Religion</label>
						 {{profile.render('religion')}}
					</div>

						<div class="form-group">
						<label>Height</label>
						 {{profile.render('height')}}
					</div>

						<div class="form-group">
						<label>Weight</label>
						 {{profile.render('weight')}}
					</div>
			 {{flash.output()}}
			 {{submit_button('Save Student','class':'btn btn-success')}}

		
					{{end_form()}}
				  </div>
			</div>
		</div>


	</div>


</div>

 
 