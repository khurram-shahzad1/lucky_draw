<?php include "comp/header.php";
include "core/dbconfig.php";
if(isset($_GET["id"])){
$order_id = $_GET['id'];
}


?>



<!--begin::Body-->

<body id="kt_body"
	class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
		<!--begin::Logo-->
		<a href="dashboard">
			<img alt="Logo" width="50%" src="assets/media/logos/logo.png" />
		</a>
		<!--end::Logo-->
		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<!--begin::Aside Mobile Toggle-->
			<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
				<span></span>
			</button>
			<!--end::Aside Mobile Toggle-->
			<!--begin::Topbar Mobile Toggle-->
			<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
				<span class="svg-icon svg-icon-xl">
					<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
						height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path
								d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
								fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path
								d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
								fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--end::Topbar Mobile Toggle-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header Mobile-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">
			<!--begin::Aside-->
			<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
				<!--begin::Brand-->
				<div class="brand flex-column-auto" id="kt_brand">
					<!--begin::Logo-->
					<a href="dashboard">
						<img alt="Logo" width="50%" src="assets/media/logos/logo.png" />
					</a>
					<!--end::Logo-->
					<!--begin::Toggle-->
					<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
						<span class="svg-icon svg-icon svg-icon-xl">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
								width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path
										d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
										fill="#000000" fill-rule="nonzero"
										transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
									<path
										d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
										fill="#000000" fill-rule="nonzero" opacity="0.3"
										transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</button>
					<!--end::Toolbar-->
				</div>
				<!--end::Brand-->
				<!--begin::Aside Menu-->
				<?php include "comp/sidebar.php"?>
			</div>
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<?php include "comp/main_nav.php"?>
				<!--begin::Content-->
				<div class="alert alert-custom alert-outline-success fade mb-5 position-fixed" id="alert_hostel" style="z-index: 99; background:#fff; position:relative; right:25px;" role="alert">
					<div class="alert-icon"><i class="flaticon-warning"></i></div>
					<div class="alert-text">A simple primary alert—check it out!</div>
					<div class="alert-close">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true"><i class="ki ki-close"></i></span>
						</button>
					</div>
				</div>
				<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
					<!--begin::Entry-->
					<div class="d-flex flex-column-fluid">
						<!--begin::Container-->
						<!--begin::Container-->
						<div class="container">
							<div class="card card-custom" id="hide_data">
								<div class="card-header">
									<h3 class="card-title">
										Create Order
									</h3>
								</div>
   <form method="POST" id="insert_form">
    <div class="table-repsonsive">
     <span id="error"></span>
     <table class="table table-bordered" id="item_table">
      <tr>
       <th>Line</th>
       <th>Coupon/Voucher No</th>
       <th>Big</th>
	   <th>Small</th>
       <th><button type="button" name="add" class="btn btn-success btn-sm add">+</button></th>
      </tr>
     </table>
     <div>
      <input type="hidden" name="order_id" value="<?php echo $order_id; ?>" />
      <input type="submit" name="submit" class="btn btn-primary ml-3 mb-3" value="Create Order" />
     </div>
	
    </div>
   </form>
   
  </div>

  <div class="container">
							<div class="card card-custom" id="view_data">
								
     </div>
    </div>

						</div>
			
						</div>
						<!--end::Container-->
						<!--end::Container-->
					</div>
					<!--end::Entry-->
				</div>
				<!--end::Content-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->



	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop">
		<span class="svg-icon">
			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
				height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
					<path
						d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
						fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
	</div>
	<!--end::Scrolltop-->
	<?php include "comp/footer.php"?>

	<script>
	
$(document).ready(function(){
 
 $(document).on('click', '.add', function(){
  var html = '';

  html += '<tr>';
  html += '<td><input type="number" name="line[]" class="form-control line" /></td>';
  html += '<td><input type="number"  name="number[]" class="form-control number" /></td>';
  html += '<td><input type="number" name="big[]" class="form-control big" /></td>';
  html += '<td><input type="number" name="small[]" class="form-control small" /></td>';
  html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove">-</button></td></tr>';
  $('#item_table').append(html);
  count();
 });
 $(document).on('click', '.remove', function(){
  $(this).closest('tr').remove();
  count();	
 });

 function count(){
		$('#item_table > tbody  > tr').each(function(index, tr) { 
  			if(index!=0)
			  {
				let row = $('#item_table').find('tr').eq(index);
				row.find('.line').val(index);
			  }
		});
	}
 $('#insert_form').on('submit', function(event){
  event.preventDefault();
  var error = '';
  $('.line').each(function(){
   if($(this).val() == '')
   {
    error += "<p>Enter Line</p>";
    return false;
   }
  });
  
  $('.number').each(function(){
   if($(this).val() == '')
   {
    error += "<p>Enter Coupon/Voucher</p>";
    return false;
   }
  });
  
  $('.big').each(function(){
   if($(this).val() == '')
   {
    error += "<p>Enter Big Field </p>";
    return false;
   }
  });
  $('.small').each(function(){
   if($(this).val() == '')
   {
    error += "<p>Enter Small Field</p>";
    return false;
   }
  });
  var form_data = $(this).serialize();
  if(error == '')
  {
   $.ajax({
    url:"core/actions.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     if(data == "0")
     {
	$('#error').html('<div class="alert alert-danger">'+error+'</div>');
     }
	 else
  {
    $('#hide_data').remove();
	$('#view_data').html(data); 
	 
	let copyBtn = document.getElementById('copy');

copyBtn.addEventListener('click', copyText);

function copyText(ev){
  let div = document.getElementById('copy_data');
  let text = div.innerText;
  let textArea  = document.createElement('textarea');
  textArea.width  = "1px"; 
  textArea.height = "1px";
  textArea.background =  "transparents" ;
  textArea.value = text;
  document.body.append(textArea);
  textArea.select();
  document.execCommand('copy');   //No i18n
  document.body.removeChild(textArea);
  alert("Text Copied!");

}
  }
    }
   });
  }else{
  $('#error').html('<div class="alert alert-danger">'+error+'</div>');
}
 });
 


});

</script>