{{partial('shared/header')}}


{{javascript_include('js/bootstrap.js')}}
{{javascript_include('js/jquery-1.8.3.min.js')}}

<div class="container">
	
 <div class="row">
		<div class="col-md-4">
            <div class="well well-sm">
                <div class="media">
                    <a class="thumbnail pull-left" href="#">
                        {{image('img/user.png')}}
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading">{{full_name}}</h4>
                        <h5 class="media-heading">{{email_address}}</h5>
                        <h5>Student ID:{{student_id}}</h5>
                		<p><span class="label label-info">888 photos</span> <span class="label label-warning">150 followers</span></p>
                        <p>
                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-ban-circle"></span> Unfollow</a>
                        </p>
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
        
        {{link_to('club/index','class':'list-group-item',"<i class='glyphicon glyphicon-folder-close'></i>School Organization")}}
         
         {{link_to('health/index','class':'list-group-item',"<i class='glyphicon glyphicon-plus-sign'></i>Health")}}

     	{{link_to('health/index','class':'list-group-item',"<i class='glyphicon glyphicon-globe'></i>Location")}}
        {{link_to('users/logout','class':'list-group-item',"<i class='glyphicon glyphicon-arrow-right'></i>Logout")}}
        

         
    </div>        
        </div>
	</div>
	</div>