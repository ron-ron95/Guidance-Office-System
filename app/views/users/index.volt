{{ content()}}
{{partial('shared/header')}}
 

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Sign in to Guidance office</h1>
            <div class="account-wall">
                    {{image('img/spcfi.png','class':'profile-img')}}
                  {{ form('users/start','class':'form-signin') }}
                <div class="form-group">  {{login.render('lastname')}}  </div>
                 <div class="form-group">  {{login.render('password')}} </div>
                 {{ submit_button('Login','class':'btn btn-lg btn-primary btn-block') }}
                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                {{ end_form() }}
            </div>
            <a href="#" class="text-center new-account">Create an account </a>
        </div>
    </div>
</div>

