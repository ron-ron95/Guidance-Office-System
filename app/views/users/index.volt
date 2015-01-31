{{ content() }}
{{partial('shared/header')}}
 
 
     <div class="container">
    <div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-md-offset-4">
            <div class="panel panel-info">
                <div class="panel-body">
                   {{ form('users/start') }}
                    <legend>Login Student</legend>
                   
                    <div class="form-group">
                        <label for="">Last Name</label>
                  {{login.render('lastname')}}                  
                    </div>

                  

                    <div class="form-group">
                        <label for="">Password</label>
                   {{login.render('password')}}
                    </div>

                
                   
            {{ submit_button('Login','class':'btn btn-danger') }} {{ link_to('register/index','Register here Students')}}
                  {{ end_form() }}
                </div>
            </div>
            
        </div>
    </div>
</div>