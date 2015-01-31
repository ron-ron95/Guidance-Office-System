 {{ content() }}

<div class="container">
	
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-primary ">
					<div class="panel-heading">
							Personal Background
							</div>
								<div class="panel-body">
								<div class="form-group">
	  				Name {{profile.render('firstname')}} {{profile.render('lastname')}} 
	  				{{profile.render('middlename')}}
	  				NickName{{profile.render('nickname')}}</div>
	  				<div class="form-group">
	  				Course {{profile.render('course')}}
	  				Year {{profile.render('year')}}
	  				Age {{profile.render('age')}}
	  				Gender  {{profile.render('gender')}}
	  				</div>
		</div>
					</div>
				</div>
			</div>
		</div>
</div>

 
 