 {{partial('layouts/public')}}
<div class="container">
	    {{flash.output()}}
 <div class="row">
		<div class="col-md-4">
            <div class="well well-sm">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        {{image('img/user.png')}}
                    </a>

                    <div class="media-body">
                          {{profile.render('upload_picture')}}
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Profile</a></li>
        <li><a href="#tab2" data-toggle="tab">Settings<i class=" fa  fa-cog"></i></a></li>
            </ul>
                <div class="tab-content">
                <div class="tab-pane active" id="tab1">
                    <div class="jumbotron">
                      <div class="container">
                        <h1>Profile of the Student</h1>
                        <p>This were a student can view is own profile</p>
                        <p>
                          <a class="btn btn-primary btn-lg">Learn more</a>
                        </p>
                      </div>
                    </div>
        </div>
            <div class="tab-pane" id="tab2">
       <div class="jumbotron">
         <div class="container">
           <h1>Settings </h1>
           <p>were student can change his profile information</p>
           <p>
             <a class="btn btn-primary btn-lg">Learn more</a>
           </p>
         </div>
       </div>
        </div>
        </div>
</div>
        </div>
	</div>
 	<div class="row">
		<div class="col-sm-4 col-md-3 sidebar">
    <div class="mini-submenu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </div>
    <div class="list-group">
        <span href="#" class="list-group-item active">
            Profile Data
            <span class="pull-right" id="slide-submenu">
            </span>
        </span>
      	{{link_to('profile/student',"<i class='glyphicon glyphicon-user'></i>Student Profile",'class':'list-group-item')}} 
        
        {{link_to('organization/new','class':'list-group-item',"<i class='glyphicon glyphicon-folder-close'></i>School Organization")}}
         
         {{link_to('health/index','class':'list-group-item',"<i class='glyphicon glyphicon-plus-sign'></i>Health History")}}

     	{{link_to('know_yourself/index','class':'list-group-item',"<i class='glyphicon glyphicon-comment'></i>Know Your Self")}}
      {{link_to('know_yourself/index','class':'list-group-item',"<i class='glyphicon glyphicon-home'></i>Family Background")}}
            {{link_to('know_yourself/index','class':'list-group-item',"<i class='glyphicon glyphicon-book'></i>Educational Background")}}
        {{link_to('users/logout','class':'list-group-item',"<i class='glyphicon glyphicon-arrow-right'></i>Logout")}}

         
    </div>        
        </div>
	</div>
	</div>
 
 