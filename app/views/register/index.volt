{{partial('shared/header')}}

{{get_title()}}

<div class="container">
	<div class="row">
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
				   {{ form('register/register') }}
				   	<legend>Register Student</legend>
				   
				   	<div class="form-group">
				   		<label for="">Full Name</label>
				  {{text_field('full_name','class':'form-control','placeholder':'Full Name')}}
				   	</div>

				   <div class="form-group">
				   		<label for="">Student ID</label>
				  {{text_field('student_id','class':'form-control','placeholder':'Student ID')}}
				   	</div>

				   	<div class="form-group">
				   		<label for="">Password</label>
				  {{password_field('password','class':'form-control','placeholder':'Password')}}
				   	</div>

				   	<div class="form-group">
				   		<label for="">Email Address</label>
				  {{text_field('email','class':'form-control','placeholder':'Email Address')}}
				   	</div>
			{{ submit_button('Register','class':'btn btn-danger') }} {{ link_to('users/index','Login here Students')}}
				  {{ end_form() }}
				</div>
			</div>
			
		</div>
	</div>
</div>