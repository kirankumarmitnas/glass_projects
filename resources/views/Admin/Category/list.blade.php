<?php
use App\Libraries\AdminConfig;
use CodeIgniter\Pager\PagerRenderer;
$prePath=AdminConfig::get('prePath'); 
$permissions=AdminConfig::get('permissions');
$permissionsStatus=isEmptyArray($permissions);
echo view('Admin/common/headerSection');
$genderWiseTypes=\App\Libraries\CommonMethods::getGenderWiseTypes(0);
?>
<section class="content">
<div class="container-fluid">
<div class="row p-3 align-items-center justify-content-around">
<div class="col-md-6 col-8">
<p class="pageTitle fs-5">Category List</p>
</div>
<div class="col-md-6 col-4 mb-3 text-end">
<button type="button" data-bs-toggle2="offcanvas" data-bs-target2="#canvasModel" aria-controls2="canvasModel" class="btn btn-outline-success btn-sm" name="addCategoryBtn"><i class="fas fa-plus me-2"></i>New Category</button>
</div>
<div class="col-md-12 p-0">
<div class="card">
  <div class="card-body">
	<div class="row">
	
	<div class="col-md-12">
	<div class="table-responsive">
	<table class="table">
	<thead>
	<tr>
	<th scope="col" style="width:5%;">#</th>
	<th scope="col" style="width:35%;">Name</th>
	<th scope="col" style="width:15%;">Gender Wise</th>
	<th scope="col" style="width:15%;">Status</th>
	<th scope="col" class="d-none" style="width:15%;">Position</th>
	<th scope="col" style="width:15%;">Last Modified</th>
	<th scope="col" style="width:15%;">Action</th>
	</tr>
	</thead>
	<tbody>
	<?php
	$categoryDetails=checkVariable($result['categoryDetails'],0);
	if(isEmptyArray($categoryDetails)>0)
	{
		$i = 1;
		if(isset($result['listIndex']) && intval($result['listIndex'])>0)
		{
		$i=$result['listIndex'];
		}
		foreach($categoryDetails as $category)
		{
		$srNo=checkVariable($category['srNo'],0,'intval');
		$cName=checkVariable($category['name'],0,'trim');
		$genderWise=checkVariable($category['genderWise'],0,'intval');
		$cOrder=checkVariable($category['cOrder'],0,'intval');
		$cStatus=checkVariable($category['cStatus'],0,'intval');
		$updatedOn=checkVariable($category['updatedOn'],0);
		$found=searchValueInArray(array('data'=>$genderWiseTypes,'search'=>array('id'=>$genderWise),'type'=>1,'isSingle'=>1));
		$genderWiseName=(isEmptyArray($found)>0) ?  checkVariable($found['name'],'','trim') : '';
		?>
		<tr>
		<td>
		<label class="form-check-label">
		<?php echo $i; ?>
		<?php if($permissionsStatus>0 && in_array(4,$permissions)==true) { ?>
		<button data-value="<?php echo $srNo; ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="remove Category Details" type="button" class="btn btn-outline-danger  btn-sm ms-1" name="removeBtn"><i class="fas fa-trash "></i></button>
		<?php } ?>
		</label>
		</td>
		<td><span class="cName"><?php echo $cName;?></td>
		<td><span class="genderWise" data-value="<?php echo $genderWise;?>" ><?php echo $genderWiseName;?></span></td>
		<td>
		<?php if($cStatus==1): ?>
		<button type="button" data-value="<?php echo $srNo;?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Disable Category" class=" btn btn-xs btnNone" name="statusBtn" ><i class="fas fa-toggle-on icon on"></i></button>
		<?php else : ?>
		<button type="button" data-value="<?php echo $srNo;?>" data-bs-toggle="tooltip" data-bs-placement="top" title="Enable Category" class=" btn btn-xs btnNone" name="statusBtn" ><i class="fas fa-toggle-off icon off"></i></button>
		<?php endif ?>
		</td>
		<td class="d-none">
		<div class="input-group">
		<span class="input-group-text"><i class="fa-solid fa-arrow-down-a-z"></i></span>
		<input type="text" aria-label="First name"  maxlength="5" class="form-control onlyNumber">
		<button class="btn btn-outline-secondary" name="positionBtn" type="button"><i class="fas fa-save"></i></button>
		</div>
		</td>
		<td data-sort="<?php echo strtotime($updatedOn); ?>" ><?php echo date("d-m-Y h:i A",strtotime($updatedOn)); ?></td>
		<td>
		<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
		<?php if($permissionsStatus>0 && in_array(1,$permissions)==true) { ?>
		<a href="<?php echo site_url($prePath.'stall/quotation/details/view/'.$srNo); ?>" class="btn btn-secondary btn-sm d-none"><i class="fas fa-eye "></i></a>
		<?php } ?>
		<?php if($permissionsStatus>0 && in_array(3,$permissions)==true) { ?>
		<button data-value="<?php echo $srNo; ?>" class="btn btn-warning btn-sm" name="editBtn"><i class="fas fa-edit "></i></button>
		<?php } ?>
		</div>
		</td>
		</tr>
		<?php
		$i++;
		}
	}
	?>
	</tbody>
	</table>
	</div>
	</div>
	<div class="col-md-12">
	<?php
	$pagination=checkVariable($result['pagination'],0);
	if(isEmptyArray($pagination)>0)
	{
	$pagger=checkVariable($pagination['pager'],0);
	$pagerHTML=checkVariable($pagination['pagerHTML'],0);
	echo $pagerHTML;
	}
	?>
	</div>

	</div>
  </div>
</div>
</div>


</div>
</div>
</section>
<script type="text/javascript">
let genderWiseTypes='<?php echo json_encode($genderWiseTypes);?>';
$(document).ready(function(e){
	if(genderWiseTypes!='')
	{
		genderWiseTypes=$.parseJSON(genderWiseTypes);
	}
	var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
	var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
	return new bootstrap.Tooltip(tooltipTriggerEl)
	});
	$('.select2').select2();
	$('.table').DataTable({"paging": false,"lengthChange": true,"searching": true,"ordering": true,"info": true,"autoWidth": false,});
	$('button[name="addCategoryBtn"]').on('click',function(e){
		var t=$(this);
		var input='<div class="row">'+
		'<form action="#" name="saveCategoryForm" class="col-md-12" method="POST" enctype="multipart/form-data" accept-charset="utf-8">'+
		'<div class="mb-3">'+
		'<label class="form-label">Category Name</label>'+
		'<input type="text" class="form-control form-control-sm" name="categoryName" placeholder="Category Name" required />'+
		'</div>'+
		'<div class="mb-3 genderWiseBlock"></div>'+
		'<div class="mb-3"><hr></div>'+
		'<div class="mb-3 text-center">'+
		'<button type="submit" class="btn btn-sm btn-success">'+
		'<span><i class="fas fa-save me-2"></i>Save</span>'+
		'<span class="d-none"><i class="fa-solid fa-circle-notch animate__rotateIn animate__animated animate__infinite  animate__faster me-2"></i>Processing</span>'+
		'</button>'+
		'</div>'+
		'</form>'+
		'</div>';
		if(input!='')
		{
			input=$.parseHTML(input);
			input=$(input);
			if($.isEmptyObject(genderWiseTypes)==false)
			{
				var genderWiseStr='';
				$.each(genderWiseTypes,function(i,obj){
					var gName=isset(obj.name) ? obj.name : '';
					var gID=isset(obj.id) ? toNumber(obj.id) : -1;
					var isChecked='';
					if(gID!=-1)
					{
						if(gID==0)
						{
							isChecked=' checked ';
						}
						genderWiseStr+='<div class="form-check form-check-inline">'+
						'<input class="form-check-input" '+isChecked+' type="radio" checked name="genderWise" value="'+gID+'" required />'+
						'<label class="form-check-label">'+gName+'</label>'+
						'</div>';
					}
				});
				if(genderWiseStr!='')
				{
					input.find(".genderWiseBlock").html(genderWiseStr);
				}
			}
		}
		dialogModel.find(".modal-title").text('Add Category');
		dialogModel.find(".modal-body .container-fluid").html(input);
		dialogModel.find(".modal-footer").addClass('d-none');
		dialogBox.show();
	});
	$('body').on('click','button[name="editBtn"]',function(e){
		var t=$(this);
		var parent=t.closest('tr') || 0;
		var value=t.attr("data-value") || 0;
		var cName=parent.find('.cName').text() || '';
		var genderWise=toNumber(parent.find('.genderWise').attr("data-value"));
		value=toNumber(value);
		if(value>0)
		{
			var input='<div class="row">'+
			'<form action="#" name="updateCategoryForm" class="col-md-12" method="POST" enctype="multipart/form-data" accept-charset="utf-8">'+
			'<input type="hidden" name="categoryID"  value="'+value+'" />'+
			'<div class="mb-3">'+
			'<label class="form-label">Category Name</label>'+
			'<input type="text" class="form-control form-control-sm" name="categoryName" placeholder="Category Name" required />'+
			'</div>'+
			'<div class="mb-3 genderWiseBlock"></div>'+
			'<div class="mb-3"><hr></div>'+
			'<div class="mb-3 text-center">'+
			'<button type="submit" class="btn btn-sm btn-warning">'+
			'<span><i class="fas fa-save me-2"></i>Update</span>'+
			'<span class="d-none"><i class="fa-solid fa-circle-notch animate__rotateIn animate__animated animate__infinite  animate__faster me-2"></i>Processing</span>'+
			'</button>'+
			'</div>'+
			'</form>'+
			'</div>';
			if(input!='')
			{
				input=$.parseHTML(input);
				input=$(input);
				input.find('input[name="categoryName"]').val(cName);
				if($.isEmptyObject(genderWiseTypes)==false)
				{
					var genderWiseStr='';
					$.each(genderWiseTypes,function(i,obj){
						var gName=isset(obj.name) ? obj.name : '';
						var gID=isset(obj.id) ? toNumber(obj.id) : -1;
						var isChecked='';
						if(gID!=-1)
						{
							if(gID==0)
							{
								isChecked=' checked ';
							}
							genderWiseStr+='<div class="form-check form-check-inline">'+
							'<input class="form-check-input" '+isChecked+' type="radio" checked name="genderWise" value="'+gID+'" required />'+
							'<label class="form-check-label">'+gName+'</label>'+
							'</div>';
						}
					});
					if(genderWiseStr!='')
					{
						input.find(".genderWiseBlock").html(genderWiseStr);
					}
				}
				input.find('input[name="genderWise"][value="'+genderWise+'"]').prop("checked",true);
			}
			dialogModel.find(".modal-title").text('Edit Category Details');
			dialogModel.find(".modal-body .container-fluid").html(input);
			dialogModel.find(".modal-footer").addClass('d-none');
			dialogBox.show();
		}
	});
	$("body").on("submit",'form[name="saveCategoryForm"]',function(e){
		e.preventDefault();
		var t=$(this);
		var submitBtn=t.find('button[type="submit"]');
		$.ajax({
		url: "<?php echo site_url($prePath.'/category/add');?>",
		type: "POST",
		data: new FormData(this),
		contentType: false,
		cache: false,
		processData: false,
		success: function(data) {
			submitBtn.prop("disabled",false).children("span").eq(0).removeClass("d-none");
			submitBtn.children("span").eq(1).addClass("d-none");
			var status=0;
			var msg='';
			if(data!='' && data.length>1)
			{
				var result=$.parseJSON(data);
				if($.isEmptyObject(result)==false)
				{
					status=isset(result.status) ? toNumber(result.status) : 0;
					msg=isset(result.status) ? result.msg : '';
				}
			}
			if(status==1)
			{
				window.location.reload();
			}
			else if($.inArray(status,[-1,-2])==true)
			{
				$.alert({
				title: 'Error!',
				content: msg,
				});
			}
			else if(status==-11)
			{
				$.each(msg,function(field,info){
					if(field.trim()!='' && info.trim()!='')
					{
						var validation='<div id="validationServerUsernameFeedback" class="invalid-feedback">'+info+' </div>';
						t.find("[name='"+field+"']").focus().addClass('is-invalid').parent().append(validation);
					}
				});
			}
			else
			{
				$.alert({
				title: 'Error!',
				content: 'Internal Error Occur!',
				});
			}
		},
		error: function() {
			submitBtn.prop("disabled",false).children("span").eq(0).removeClass("d-none");
			submitBtn.children("span").eq(1).addClass("d-none");
		},
		beforeSend: function() {
			submitBtn.prop("disabled",true).children("span").eq(0).addClass("d-none");
			submitBtn.children("span").eq(1).removeClass("d-none");
			t.find("input,select").removeClass("is-invalid");
			t.find(".invalid-feedback").remove();
		},
		});
	});
	$("body").on("submit",'form[name="updateCategoryForm"]',function(e){
		e.preventDefault();
		var t=$(this);
		var submitBtn=t.find('button[type="submit"]');
		$.ajax({
		url: "<?php echo site_url($prePath.'/category/update');?>",
		type: "POST",
		data: new FormData(this),
		contentType: false,
		cache: false,
		processData: false,
		success: function(data) {
			submitBtn.prop("disabled",false).children("span").eq(0).removeClass("d-none");
			submitBtn.children("span").eq(1).addClass("d-none");
			var status=0;
			var msg='';
			if(data!='' && data.length>1)
			{
				var result=$.parseJSON(data);
				if($.isEmptyObject(result)==false)
				{
					status=isset(result.status) ? toNumber(result.status) : 0;
					msg=isset(result.status) ? result.msg : '';
				}
			}
			if(status==1)
			{
				window.location.reload();
			}
			else if($.inArray(status,[-1,-2])==true)
			{
				$.alert({
				title: 'Error!',
				content: msg,
				});
			}
			else if(status==-11)
			{
				$.each(msg,function(field,info){
					if(field.trim()!='' && info.trim()!='')
					{
						var validation='<div id="validationServerUsernameFeedback" class="invalid-feedback">'+info+' </div>';
						t.find("[name='"+field+"']").focus().addClass('is-invalid').parent().append(validation);
					}
				});
			}
			else
			{
				$.alert({
				title: 'Error!',
				content: 'Internal Error Occur!',
				});
			}
		},
		error: function() {
			submitBtn.prop("disabled",false).children("span").eq(0).removeClass("d-none");
			submitBtn.children("span").eq(1).addClass("d-none");
		},
		beforeSend: function() {
			submitBtn.prop("disabled",true).children("span").eq(0).addClass("d-none");
			submitBtn.children("span").eq(1).removeClass("d-none");
			t.find("input,select").removeClass("is-invalid");
			t.find(".invalid-feedback").remove();
		},
		});
	});	
	$("body").on("click",'button[name="statusBtn"]',function(e){
	var t=$(this);
	var userStatus=(t.find(".on").length>0) ? 0 : 1;
	var categoryID=toNumber(t.attr('data-value') || 0);
	var onTitle='Enable Category';
	var offTitle='Disable Category';
	if(categoryID>0)
	{
		$.confirm({	
		title: 'Confirm!',	
		content: 'Are you sure?',
		buttons: {
		cancel: function () {},
		yes: {
		text: 'Yes', // With spaces and symbols
		action: function () {
		var formdata={'categoryID':categoryID,'status':userStatus};
		$.ajax({url: "<?php echo site_url($prePath.'/category/status');?>",type: "POST",data:formdata,cache:false,
		beforeSend:function(){ 
		t.prop("disabled",true);
		},
		error:function(){ t.prop("disabled",false); },
		complete:function(){ t.prop("disabled",false); },
		success: function(data)   
		{
			t.prop("disabled",false);
			var status=0;
			var msg='';
			if(data!='' && data.length>1)
			{
				var result=$.parseJSON(data);
				if($.isEmptyObject(result)==false)
				{
					status=isset(result.status) ? toNumber(result.status) : 0;
					msg=isset(result.status) ? result.msg : '';
				}
			}
			if(status==1)
			{
				//(t.find(".active").length>0) ? 0 : 1;
				if(userStatus==1)
				{
					t.attr("data-original-title",offTitle).find("i").removeClass("off fa-toggle-off").addClass("on fa-toggle-on");
				}
				else
				{	
					t.attr("data-original-title",onTitle).find("i").removeClass("on fa-toggle-on").addClass("off fa-toggle-off");
				}
			}
			else if(msg!='')
			{
				$.alert({
				title: 'Error!',
				content: msg,
				});
			}
			else
			{
				$.alert({
				title: 'Error!',
				content: 'Internal Error Occur!',
				});
			}
		}
		});	
		
		}
		}
		}
		});
	}
	});
	$("body").on("click",'button[name="removeBtn"]',function(e){
		var t=$(this);
		var categoryID=toNumber(t.attr('data-value') || 0);
		if(categoryID>0)
		{
		$.confirm({	
		title: 'Confirm!',	
		content: 'Are you sure?',
		buttons: {
		cancel: function () {},
		yes: {
		text: 'Yes', // With spaces and symbols
		action: function () {
		var formdata={'categoryID':categoryID};
		$.ajax({url: "<?php echo site_url($prePath.'/category/remove');?>",type: "POST",data:formdata,cache:false,
		beforeSend:function(){ 
		t.prop("disabled",true);
		},
		error:function(){ t.prop("disabled",false); },
		complete:function(){ t.prop("disabled",false); },
		success: function(data)   
		{
			t.prop("disabled",false);
			var status=0;
			var msg='';
			if(data!='' && data.length>1)
			{
				var result=$.parseJSON(data);
				if($.isEmptyObject(result)==false)
				{
					status=isset(result.status) ? toNumber(result.status) : 0;
					msg=isset(result.status) ? result.msg : '';
				}
			}
			if(status==1)
			{
				window.location.reload();
			}
			else if(status==-2)
			{
				$.alert({
				title: 'Warning',
				content: 'Invalid Member ID',
				});
				t.find("input").val('');
			}
			else
			{
				$.alert({
				title: 'Error!',
				content: 'Internal Error Occur!',
				});
			}
		}
		});	
		}
		}
		}
		});	
		}
	});
	
});
</script>
<?php echo view('Admin/common/footerSection'); ?>