@extends('metronic::admin.layouts.master')
@section('page_body')
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN SAMPLE FORM PORTLET-->
		<div id="app" class="portlet light ">
			<div class="portlet-title">
				<div class="caption font-green-haze">
					<i class="icon-settings font-green-haze"></i>
					<span class="caption-subject bold uppercase"> Chatroom</span>
					<span class="badge"> @{{ usersInRoom.length }}</span>
				</div>
				<div class="actions">
					<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#" class="form-horizontal form-row-sepe">
					<chat-log :messages="messages"></chat-log>
					<chat-composer v-on:messagesent="addMessage"></chat-composer>
				</form>
				<!-- END FORM-->
			</div>
		</div>
		<!-- END SAMPLE FORM PORTLET-->
	</div>
</div>
@stop
@push('scripts')
    <script type="text/javascript" src="{{mix('/js/message.js')}}"></script>
@endpush