<div class="portlet light ">
				<div class="portlet-title">
					<div class="caption font-green-haze">
						<i class="icon-settings font-green-haze"></i>
						<span class="caption-subject bold uppercase"> Metronic Setting</span>
					</div>
					<div class="actions">
						<a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:;" data-original-title="" title=""></a>
					</div>
				</div>
				<div class="portlet-body form">
					<!-- BEGIN FORM-->
					<form action="#" class="form-horizontal form-row-sepe">
						<div class="form-body">
							@include('metronic::admin.partials._select_form', [
							    'title'=> 'Color Theme',
							    'items' => Modules\Metronic\Entities\MetronicSetting::themeColor(),
							    'field' => 'theme_color',
							    'name' => 'theme_color',
							    'column' => 'theme_color',
							    'selected' => Settings::get('theme_color')
							])
							@include('metronic::admin.partials._select_form', [
							    'title'=> 'Theme Style',
							    'items' => Modules\Metronic\Entities\MetronicSetting::themeStyle(),
							    'field' => 'theme_style',
							    'name' => 'theme_style',
							    'column' => 'theme_style',
							    'selected' => Settings::get('theme_style')
							])
							@include('metronic::admin.partials._select_form', [
							    'title'=> 'Layout',
							    'items' => Modules\Metronic\Entities\MetronicSetting::themeLayout(),
							    'field' => 'layout',
							    'name' => 'layout',
							    'column' => 'layout',
							    'selected' => Settings::get('layout')
							])
							@include('metronic::admin.partials._select_form', [
							    'title'=> 'Header',
							    'items' => Modules\Metronic\Entities\MetronicSetting::themeHeader(),
							    'field' => 'header',
							    'name' => 'header',
							    'column' => 'header',
							    'selected' => Settings::get('header')
							])
							<div class="form-group">
								<label class="control-label col-md-3">Top Dropdown</label>
								<div class="col-md-9">
									<select class="form-control select2me" data-placeholder="Select...">
										<option value="light">Light</option>
										<option value="dark">Dark</option>
									</select>
									
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Sidebar Mode</label>
								<div class="col-md-9">
									<select class="form-control select2me" @change="checkSetting" data-placeholder="Select...">
										<option value="default">Default</option>
										<option value="fixed">Fixed</option>
									</select>
									
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Sidebar Style</label>
								<div class="col-md-9">
									<select class="form-control select2me" data-placeholder="Select...">
										<option value="default">Default</option>
										<option value="compack">Compact</option>
									</select>
									
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Sidebar Menu</label>
								<div class="col-md-9">
									<select class="form-control select2me" data-placeholder="Select...">
										<option value="hover">Hover</option>
										<option value="accordion">Accordion</option>
									</select>
									
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Sidebar Position</label>
								<div class="col-md-9">
									<select class="form-control select2me" data-placeholder="Select...">
										<option value="left">Left </option>
										<option value="right">Right</option>
									</select>
									
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-3">Footer</label>
								<div class="col-md-9">
									<select class="form-control select2me" data-placeholder="Select...">
										<option value="default">Default</option>
										<option value="fixed">Fixed</option>
									</select>
									
								</div>
							</div>
							<div class="form-actions p-b-xs margin-bottom-10 margin-right-10">
							<div class="row">
								<div class="pull-right">
									<button type="submit" class="btn blue"><i class="fa fa-check"></i> Submit</button>
									<button type="button" class="btn default"><i class="fa fa-close"></i> Cancel</button>
								</div>
							</div>
						</div>
						</div>
						
					</form>
					<!-- END FORM-->
				</div>
			</div>