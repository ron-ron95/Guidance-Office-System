
{{ content() }}

 
<div class="container">
    <div class="row">
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
            <div class="panel panel-success">
                  <div class="panel-heading">
                        <h3 class="panel-title">Organization</h3>
                 {{link_to('organization/new','class':'btn btn-xs btn-success','<i class="glyphicon glyphicon-plus"></i> Create Organization')}}
                  </div>
                  <div class="panel-body">
                       <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Name of Org</th>
                                    <th>Position</th>
                                    <th>Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% if page.items is defined %}
                             {% for organization in page.items %}
                                <tr>
                                    <td>{{ organization.name_org }}</td>
                                    <td>{{ organization.position }}</td>
                                    <td>{{ organization.year }}</td>
                         <td>{{ link_to("organization/edit/"~organization.id,'class':'btn btn-success','<i class="glyphicon glyphicon-edit"></i> Edit') }} 
                           {{ link_to("organization/delete/"~organization.id,'class':'btn btn-danger', '<i class="glyphicon glyphicon-trash"></i> Delete') }}</td>
                                </tr>
                                 {% endfor %}
                                    {% endif %}
                            </tbody>
                              <tbody>
                        </table> 
                            <ul class="pagination">
                <li><td>{{ link_to("organization/search?page="~page.next, "&laquo;") }}</td></li>
                <li><td>{{ link_to("organization/search", "First") }}</td></li>
                 <li><td>{{ link_to("organization/search?page="~page.before, "Previous") }}</td></li>
                <li><td>{{ link_to("organization/search?page="~page.last, "&raquo;") }}</td></li>
                <li><td>{{  page.current~"/"~page.total_pages }}</td></li>
                            </ul>
                  </div>
            </div>
        </div>
    </div>
</div>

 
 