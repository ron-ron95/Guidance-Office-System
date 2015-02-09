    {{partial('layouts/public')}}
 
 <div class="container">
 	{{flash.output()}}
 		<div class="row">
 			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-md-offset-3">
 				 <div class="panel panel-primary">
 				 	  <div class="panel-heading">
 				 			<h3 class="panel-title">Students Login</h3>
 				 	  </div>
 				 	  <div class="panel-body">
 				 		{{form('students/start')}} 
 				 			    <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                      {{login.render('full_name')}}                                     
                                    </div>
 				 	<div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                      {{login.render('studentId')}}                                     
                                    </div>
 				 		 
 				 			 	{{submit_button('Login','class':'btn btn-success')}}
 				 		{{end_form()}}

 				 		
 				 	  </div>
 				 </div>
 				</div>
 			</div>
 		</div>
 </div>
