<div class="heading">
	<ol class="breadcrumb">
		<li><a href="#/">Dashboard</a></li>
		<li><a href="javascript:void(0)">blog</a></li>
	</ol>
</div>

<div class="col-sm-12 well">
	<div class="col-sm-6" ng-class="{'col-sm-12': !showData}">
		<form class="admin-form" name="form1" id="form1" method="post" action=""
			autocomplete="off" enctype="multipart/form-data">
			<input name="b_id" ng-model="x.b_id" hidden>

			<div class="admin-stepper" ng-init="step='basic'; showData=true; showSeo=true">
				<button type="button" class="admin-step" ng-class="{'is-active': step==='basic'}" ng-click="step='basic'">Basic</button>
				<button type="button" class="admin-step" ng-class="{'is-active': step==='seo'}" ng-click="step='seo'">SEO</button>
				<button type="button" class="admin-step" ng-class="{'is-active': step==='content'}" ng-click="step='content'">Content</button>
				<button type="button" class="admin-step" ng-class="{'is-active': step==='publish'}" ng-click="step='publish'">Publish</button>
				<button type="button" class="admin-step" ng-class="{'is-active': step==='media'}" ng-click="step='media'">Media</button>
			</div>

			<div ng-show="step==='basic'">
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="admin-section-title">Basic Info</div>
			</div>
			<div class="col-sm-2 ">
				<label>Title</label>
			</div>
			<div class="col-sm-10">
				<input name="title" class="form-control" ng-model="x.title" required ng-keyup="slugify()">
			</div>
			</div>

			<div ng-show="step==='seo'">
			<div class="clearfix"></div>
			<div class="col-sm-12 d-flex align-items-center justify-content-between">
				<div class="admin-section-title">SEO</div>
				<a href="javascript:void(0)" class="btn btn-default btn-xs" ng-click="showSeo=!showSeo">
					{{showSeo ? 'Hide SEO' : 'Show SEO'}}
				</a>
			</div>
			<div class="col-sm-2 " ng-show="showSeo">
				<label>Slug (URL)</label>
			</div>
			<div class="col-sm-10" ng-show="showSeo">
				<input name="slug" class="form-control" ng-model="x.slug" placeholder="auto-generated-if-empty">
			</div>

			<div class="clearfix"></div>
			<div class="col-sm-2 " ng-show="showSeo">
				<label>Meta Title</label>
			</div>
			<div class="col-sm-10" ng-show="showSeo">
				<input name="meta_title" class="form-control" ng-model="x.meta_title" placeholder="SEO title">
			</div>

			<div class="clearfix"></div>
			<div class="col-sm-2 " ng-show="showSeo">
				<label>Meta Description</label>
			</div>
			<div class="col-sm-10" ng-show="showSeo">
				<textarea name="meta_desc" class="form-control" ng-model="x.meta_desc" rows="2" placeholder="SEO description"></textarea>
			</div>
			</div>

			<div ng-show="step==='content'">
			<div class="clearfix"></div>

			<div class="col-sm-12">
				<div class="admin-section-title">Content</div>
			</div>
			<div class="col-sm-2 ">
				<label>Description</label>
			</div>
			<div class="col-sm-10">

				<summernote config="options" ng-model="x.description"></summernote>
				<textarea name="description" ng-model="x.description" hidden></textarea>
			</div>
			</div>

			<div ng-show="step==='publish'">
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="admin-section-title">Publish Details</div>
			</div>
			<div class="col-sm-2 ">
				<label>Date</label>
			</div>
			<div class="col-sm-10">
				<input name="date" id="DOB1" class="form-control" ng-model="x.date"
					required>
			</div>

			<div class="clearfix"></div>
			<div class="col-sm-2 ">
				<label>Time</label>
			</div>
			<div class="col-sm-10">
				<input name="time" class="form-control" ng-model="x.time" required>
			</div>
			</div>

			<div ng-show="step==='media'">
			<div class="clearfix"></div>
			<div class="col-sm-12">
				<div class="admin-section-title">Media</div>
			</div>

			<div class="col-sm-2 ">
				<label>Author</label>
			</div>
			<div class="col-sm-10">
				<input name="author" class="form-control" ng-model="x.author" placeholder="Author name (optional)">
			</div>
			<div class="col-sm-2 ">
				<label>Tags/Keywords</label>
			</div>
			<div class="col-sm-10">
				<input name="tags" class="form-control" ng-model="x.tags" placeholder="keyword1, keyword2 (optional)">
			</div>

			<div class="clearfix"></div>
			<!-- <div class="col-sm-2">
				<label>Select Image</label> url? <input type="checkbox"
					ng-model="x.url_type"
					style="width: 20px; height: 20px; border: 0px; shadow: none"
					ng-true-value="'1'" ng-false-value="'0'">
			</div> -->
			<div class="col-sm-4" ng-if="x.url_type!='1'">
				<input type="file" name="image">
				  <input ng-model="x.image" name="old_image" hidden>
				<p class="help-block" style="font-size: 12px">Select any picture to
					view on your page.</p>
			</div>
			

		
              
				<div class="col-sm-3" ng-show="x.image">
					<img src="<?=base_url("assets/uploads/blog/thumb")?>/{{x.image}}" class="img-responsive" style="height: 150px;">
				</div>
			</div>
			
			<div class="clearfix"></div>

			<div class="col-sm-12">
				<div id="webprogress" style="display: none">
					<img src="<?=base_url()?>assets/images/progress/load1.gif">
				</div>
				<button type="submit" id="submitbtn" accesskey="s"
					ng-click="save_data(x)" class="btn btn-info"
					ng-disabled="form1.$invalid">
					<u><b>S</b></u>ave
				</button>
				<a class="btn btn-default" accesskey="c" ng-click="filter_new()"><u><b>C</b></u>lear</a>
				<br>
				<br>
			</div>
		</form>
	</div>

	<div class="admin-data-toggle">
		<button type="button" class="btn btn-default btn-xs" ng-click="showData=!showData">
			{{showData ? 'Hide Records' : 'Show Records'}}
		</button>
	</div>
	<div class="admin-data-panel" ng-show="showData">
		<?php include 'data.php';?>
	</div>
   
</div>

