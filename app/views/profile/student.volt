 {{ content() }}

<div class="container">
	
		<div class="row">
			<div class="col-xs-5 col-sm-5 col-md-5 col-lg-5">
				<div class="panel panel-primary ">
					<div class="panel-heading">
							 Student Profile
							</div>
								<div class="panel-body">
				<div class="input-group date">
		<input type="text" class="form-control" id="sandbox-container"><span class="input-group-addon">
		<i class="glyphicon glyphicon-th"></i></span>
		</div>
					</div>
				</div>
			</div>
		</div>
</div>

<script>

$('#sandbox-container .input-group date').datepicker({
    forceParse: false,
    calendarWeeks: true,
    autoclose: true,
    todayHighlight: true
});

</script>
 