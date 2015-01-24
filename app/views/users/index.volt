
{{partial('shared/header')}}
{{get_title( )}}
 
 <div class="container">
 	<div class="row">
 		<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5 col-md-offset-4">
 			<div class="panel panel-default">
 				<div class="panel-body">
 				    {{ form('users/start') }}
 				   	<legend>Student Login</legend>
 				   	<div class="form-group">
 				   		<label for="">Full Name</label>
 				   	{{ text_field('full_name','class':'form-control','placeholder':'Full Name') }}
 				   	</div>
 				   	<div class="form-group">
 				   		<label for="">Password</label>
 				  {{ password_field('password','class':'form-control','placeholder':'Password') }}
 				   	</div>
 				   {{ submit_button('Login','class':'btn btn-danger')}} {{link_to('register/index','Sign up here Students')}}
 				   {{ end_form() }}
 				</div>
 			</div>
 		</div>
 	</div>
 </div>