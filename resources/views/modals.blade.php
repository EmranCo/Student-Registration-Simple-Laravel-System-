<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.modal-confirm {		
	color: #636363;
	width: 325px;
}

#success .modal-confirm{
    font-size: 14px;
}

.modal-confirm .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-confirm .modal-header {
	border-bottom: none;   
	position: relative;
}
.modal-confirm h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-confirm .form-control, .modal-confirm .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-confirm .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-confirm .modal-footer {
	border: none;
	text-align: center;
	border-radius: 5px;
	font-size: 13px;
}	
.modal-confirm .icon-box {
	color: #fff;		
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}

#success .modal-confirm .icon-box
{
    background: #82ce34;
}

#faild .modal-confirm .icon-box
{
    background: #ef513a;
}

.modal-confirm .icon-box i {
	position: relative;
}

#success .modal-confirm .icon-box i {
	font-size: 58px;
	top: 3px;
}

#faild .modal-confirm .icon-box i {
	font-size: 56px;
	top: 4px;
}

.modal-confirm.modal-dialog {
	margin-top: 80px;
}
.modal-confirm .btn {
	color: #fff !important;
	border-radius: 4px !important;
	text-decoration: none !important;
	transition: all 0.4s !important;
	line-height: normal !important;
	border: none !important;
}

#success .modal-confirm .btn{
    background: #82ce34 !important;
}

#faild .modal-confirm .btn{
    background: #ef513a !important;
}

.modal-confirm .btn::before
{
    display: none;
}

.modal-confirm .btn:hover, .modal-confirm .btn:focus {
	outline: none;
}

#success .modal-confirm .btn:hover, 
#success .modal-confirm .btn:focus {
	background: #6fb32b;
}

#faild .modal-confirm .btn:hover, 
#faild .modal-confirm .btn:focus {
	background: #da2c12;
}

.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>


<div id="success" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE876;</i>
				</div>				
				<h4 class="modal-title w-100">أحســـنت</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">إجابتك صحيحة</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-success btn-block" data-bs-dismiss="modal">حسنا</button>
			</div>
		</div>
	</div>
</div> 

<div id="faild" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-header">
				<div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>				
				<h4 class="modal-title w-100">عذرا !</h4>	
			</div>
			<div class="modal-body">
				<p class="text-center">إجابتك غير صحيحة!. 
                    <br> 
                    برجاء المحاولة مرة اخرى.</p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger btn-block" data-bs-dismiss="modal">حسنا</button>
			</div>
		</div>
	</div>
</div> 

<div id="thanks" class="modal fade">
	<div class="modal-dialog modal-confirm">
		<div class="modal-content">
			<div class="modal-body">
				<p class="text-center">Thank you</p>
			</div>
		</div>
	</div>
</div> 