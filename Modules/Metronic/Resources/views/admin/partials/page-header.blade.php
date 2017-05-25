<h3 class="page-title">{{ @$title ? $title : ''}}</h3>
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<i class="fa fa-home"></i>
			<a href="{{url('dashboard')}}">Home</a>
			<i class="fa fa-angle-right"></i>
		</li>
		<li>
			<a href="#">{{ @$title ? $title : ''}}</a>
		</li>
	</ul>
</div>