@extends('metronic::admin.layouts.master')
@section('page_body')
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN SAMPLE FORM PORTLET-->
		<div id="el"></div>

		<!-- using string template here to work around HTML <option> placement restriction -->
		<script type="text/x-template" id="demo-template">
		  <div>
		    <p>Selected: @{{ selected }}</p>
		    <select2 :options="options" v-model="selected">
		      <option disabled value="0">Select one</option>
		    </select2>
		  </div>
		</script>

		<script type="text/x-template" id="select2-template">
		  <select>
		    <option value="1">One</option>
		    <option value="2">Two</option>
		  </select>
		</script>
		<!-- END SAMPLE FORM PORTLET-->
	</div>
</div>
@stop
@push('scripts')
<script type="text/javascript" src="{{mix('/js/setting.js')}}"></script>
@endpush