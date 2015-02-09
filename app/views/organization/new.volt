
 {{content()}}


<div class="container">
    <div class="row">
        <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
        <div class="panel panel-primary">
              <div class="panel-heading">
                    <h3 class="panel-title">Fill Up your Organization</h3>
              </div>
              <div class="panel-body">
             {{form('organization/create')}}
                <div class="form-group">
                        <label>Name of the Organization</label>
                          {{org.render('name_org')}}  
                    </div>

                        <div class="form-group">
                        <label>Position of the Organization</label>
                          {{org.render('position')}}  
                    </div>

                        <div class="form-group">
                        <label>Year of the Organization</label>
                          {{org.render('year')}}  
                    </div>
                        <div class="form-group">
                        <label>Student Id</label>
                          {{org.render('studentId')}}  
                    </div>
                      {{flash.output()}}
                    {{submit_button('Save your Organization','class':'btn btn-success')}}
             {{end_form()}}
              </div>
        </div>
        </div>
    </div>
</div>