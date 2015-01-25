{{partial('shared/header')}}

{{get_title()}}

<div class="container">
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-4">
			<div class="panel panel-info">
				<div class="panel-body">
				   {{ form('register/register') }}
				   	<legend>Register Student</legend>
				   
				   	<div class="form-group">
				   		<label for="">Full Name</label>
				  {{form.render("full_name")}}
				   	</div>

				   <div class="form-group">
				   		<label for="">Student ID</label>
				   {{form.render("student_id")}}
				   	</div>

				   	<div class="form-group">
				   		<label for="">Password</label>
				  {{form.render('password')}}
				   	</div>

				   	<div class="form-group">
				   		<label for="">Email Address</label>
				 {{form.render('email')}}
				   	</div>
			{{ submit_button('Register','class':'btn btn-danger') }} 
				 
			{{ link_to('users/index','Login here Students')}}
				  {{ end_form() }}
				</div>
			</div>
			
		</div>
	</div>
</div>