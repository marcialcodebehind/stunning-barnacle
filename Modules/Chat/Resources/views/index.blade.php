@extends('metronic::admin.layouts.master')
@push('style')
<style>
  [v-cloak] {
    display: none;
  }
</style>
@endpush
@section('page_body')
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN SAMPLE FORM PORTLET-->
		<div id="message_app">
			<div class="portlet light ">
				<div class="portlet-title">
					<div class="caption">
						<i class="icon-bubbles font-red-sunglo"></i>
						<span class="caption-subject bold uppercase"> Chatroom</span>
						<span class="badge" v-cloak> @{{ usersInRoom.length }}</span>
					</div>
					<div class="actions">
						<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
					</div>
				</div>
				<div class="portlet-body" id="chats">
					<div class="scroller" style="height: 450px;" data-always-visible="1" data-rail-visible1="1">
						<ul class="chats">
							<chat-log :messages="messages"></chat-log>
						</ul>
					</div>
					<chat-composer @messagesent="addMessage"></chat-composer>
				</div>
			</div>
		</div>
		<!-- END SAMPLE FORM PORTLET-->
	</div>
</div>
@stop
@push('scripts')
	<script type="text/javascript">
		var username = "{{Auth::user()->name}}";
	</script>
    <script type="text/javascript" src="{{mix('/js/message.js')}}"></script>
@endpush