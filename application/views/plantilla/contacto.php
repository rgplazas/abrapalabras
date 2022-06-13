<style>
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i');.form-content-wrap{font-family:'Montserrat', sans-serif;font-size:16px;line-height:1.48;}
.form-content-wrap:first-child{padding-top:60px;}
.form-content-wrap img{width:100%;}
.item-wrap{border:2px solid #ccc;border-radius:5px;margin:20px auto;padding:30px 15px 0;width:100%;}

.item-image img{border:1px solid #ccc;border-radius:5px;width:100%;}
.item-title{color:#0097e6;font-size:32px;font-weight:bold;margin:0 auto 30px;}
.offer-main-buttons{border-radius:5px;font-weight:bold;max-width:210px;}
.offer-main-button-btn{background:#0097e6;border-radius:5px;padding:10px 0;margin:30px 0 0;cursor:pointer;transition:background 0.4s ease 0s;}
.offer-main-button-btn-txt{font-size:20px;color:#fff;display:block;text-align:center;}
.offer-main-button-bet{background:#397ab9;border-radius:5px;margin-top:5px;padding:20px 22px;cursor:pointer;transition:background 0.4s ease 0s;text-align:center;max-width:210px;}
.offer-main-button-bet-icon{display:inline-block;margin-right:5px;width:22px;}
.offer-main-button-bet-txt{color:#fff;display:inline-block;padding-top:5px;text-align:center;}
.colBottomMargin{margin-bottom:30px}
.scrollup{bottom:40px;color:#fd810f;font-size:42px;height:40px;position:fixed;right:22px;text-align:center;width:40px;z-index:999;}
.footer{padding-top:20px;position:fixed;bottom:0;background-color:#fff;width:100%;}
.modal-dialog{max-width:700px;margin:50px auto;}
.modal-header{border:none;padding:15px 5px 0;text-align:center;}
.modal-header .close{margin:0;padding:0 15px;color:#0097e6;opacity:1;}
.popup-title{color:#0097e6;font-size:24px;font-weight:bold;text-align:center;margin:0 auto 20px;}
.modal-body{padding:0 20px 15px;}
.popup-desc{color:#808080;font-size:24px;margin:30px auto;text-align:center;}
.popup-app-mercy{background:#0097e6;border-radius:5px;height:71px;padding:20px;text-align:center;}
.popup-app-mercy-icon{background:rgba(0, 0, 0, 0) url("../images/sprite.html") repeat scroll -40px -75px;display:inline-block;float:none;height:32px;vertical-align:middle;width:32px;}
.popup-app-mercy-txt{color:#fff;display:inline-block;font-size:15px;}
.popup-desc-email{color:#808080;font-size:17px;margin:30px auto 15px;text-align:center;}
.popup-input-mail{border:1px solid #cccccc;border-radius:5px;font-size:18px;height:50px;text-align:center;width:100%;}
.popup-form select{background-color:white;display:inline-block;box-sizing:border-box;-webkit-appearance:none;-moz-appearance:none;background-image:linear-gradient(45deg, transparent 50%, #009F98 50%),
linear-gradient(135deg, #009F98 50%, transparent 50%),
radial-gradient(transparent 66%, transparent 66%);background-position:calc(100% - 18px) calc(1em + 2px),
calc(100% - 13px) calc(1em + 2px),
calc(100% - .5em) .5em;background-size:5px 6px, 6px 5px, 1.5em 1.5em;background-repeat:no-repeat;}
.popup-form select:focus{background-image:linear-gradient(45deg, transparent 50%, #f58e03 50%),
linear-gradient(135deg, #f58e03 50%, transparent 50%),
radial-gradient(transparent 66%, transparent 66%);}
.btn{font-size:16px;overflow:hidden;padding:6px 20px;text-transform:uppercase;}
.btn-custom{background-color:#009F98;border:1px solid #3e3e3e;color:#fff;-webkit-box-shadow:0 0 1px transparent;box-shadow:0 0 1px transparent;display:inline-block;position:relative;-moz-transform:perspective(1px) translateZ(0px);-webkit-transform:perspective(1px) translateZ(0px);-o-transform:perspective(1px) translateZ(0px);-ms-transform:perspective(1px) translateZ(0px);transform:perspective(1px) translateZ(0px);-webkit-transition-duration:0.3s;transition-duration:0.3s;-webkit-transition-property:color;transition-property:color;vertical-align:middle;}
.btn-custom::before{background-color:#fb9902;bottom:0;content:"";left:0;position:absolute;right:0;top:0;-moz-transform:scaleX(0);-webkit-transform:scaleX(0);-o-transform:scaleX(0);-ms-transform:scaleX(0);transform:scaleX(0);-webkit-transform-origin:50%;transform-origin:50%;-webkit-transition-property:transform;transition-property:transform;-webkit-transition-duration:0.3s;transition-duration:0.3s;-webkit-transition-timing-function:ease-out;transition-timing-function:ease-out;z-index:-1;}
.btn-custom:hover, .btn-custom:focus, .btn-custom:active{border-color:#f58e03;}
.btn-custom:hover::before, .btn-custom:focus::before, .btn-custom:active::before{-moz-transform:scaleX(1);-webkit-transform:scaleX(1);-o-transform:scaleX(1);-ms-transform:scaleX(1);transform:scaleX(1);}
.btn.btn-custom.disabled{opacity:1;}
.btn.focus, .btn:focus, .btn:hover{color:#fff;}
.popup-form .form-group{position:relative;margin:0 0 30px;}
.popup-form .input-group-icon{position:absolute;top:0;}
.popup-form .form-group .input-group-icon{background-color:#009F98;border:none;border-radius:4px;border-bottom-right-radius:0;border-top-right-radius:0;color:#fff;display:table-cell;font-size:14px;height:100%;padding:5px 7px 7px;text-align:center;vertical-align:top;white-space:nowrap;width:40px;}
.popup-form .form-control{background-color:transparent;border:1px solid #009F98;padding-left:50px;}
.popup-form .form-control:focus, .popup-form .has-error .form-control:focus{border-color:#f58e03;box-shadow:0 1px 1px rgba(245, 142, 3, 0.075) inset, 0 0 8px rgba(245, 142, 3, 0.6);}
.popup-form .form-control:focus + .input-group-icon, #resetPassForm .has-error .form-control:focus + .input-group-icon{background-color:#f58e03;color:#fff;}
.popup-form .btn.dropdown-toggle.btn-default{background:transparent none repeat scroll 0 0;border:0 none;border-radius:0;box-shadow:none;font-size:14px;color:#555;padding:6px 0;text-shadow:none;}
.popup-form span.sub-text{bottom:50px;color:#ce0606;font-size:14px;position:absolute;right:50px;}
.popup-form .has-error .form-control{border-color:#ce0606;}
.popup-form .has-error .input-group-icon{background-color:#ce0606;color:#ffffff;}
.popup-form .help-block{color:#ce0606;font-size:14px;margin:0;padding-left:42px;position:absolute;top:-20px;}
.popup-form .text-success{color:#37a000;}
.popup-form .text-danger, .text-danger{color:#ce0606;}
.popup-form .btn.disabled{opacity:1;}
.popup-form .form-group .checkbox{margin:0;}
.popup-form input[type="checkbox"]{margin-top:4px;}
.popup-form .btn.btn-custom{transition:all 0.5s ease 0s;width:200px;border-radius:6px;}
.popup-form .btn.btn-custom::after{content:"\f0a9";font-family:fontawesome;font-size:22px;color:#fff;opacity:0;position:absolute;right:50px;transition:all 0.3s ease 0s;}
.popup-form .btn.btn-custom:hover::after{opacity:1;right:10px;top:2px;}
.h3.text-success, .h3.text-danger{margin:0 auto 30px;}
.popup-form .form-group h5{margin-top:0;}
#humanCheckCaptchaBox, #humanCheckCaptchaInput, #firstDigit, #secondDigit, #mathfirstnum, #mathsecondnum{display:inline;}
#humanCheckCaptchaInput.form-control{height:30px;margin-left:10px;padding:4px;text-align:center;width:45px;}
#firstDigit #mathfirstnum, #secondDigit #mathsecondnum{border:none;box-shadow:none;width:30px;height:30px;padding:0;pointer-events:none;text-align:center;}
@media screen and (max-width:420px){#firstDigit #mathfirstnum, #secondDigit #mathsecondnum{width:20px;}
}
@media screen and (max-width:360px){#contactForm{padding:50px 30px 20px;}
#contactForm span.sub-text{right:30px;}
}

</style>

<div  class="col-12 d-block d-sm-block d-md-none"><!--solo se visualiza modo mobil-->
      <br>
      <br>
      <br>
      <br>
      <br>
</div>
<div  class="col-12 d-none d-sm-none d-md-block"><!--solo se visualiza modo mobil-->
      <br>
      <br>
      <br>
</div>

<section id="contact-form-section" class="form-content-wrap">
		<div class="container">
			<div class="row">
				<div class="tab-content">
					<div class="col-sm-12">
						<div class="item-wrap">
							<div class="row">
								
								<div class="col-sm-12">
									<div class="item-content colBottomMargin">
										
								   </div><!--End item-content -->
								</div><!--End col -->
								<div class="col-md-12">
								
								
								<form id="contactForm" name="contactform" action="enviarContacto" data-toggle="validator" method="post" class="popup-form">
												<div class="row">
													<div id="msgContactSubmit" class="hidden"></div>
													
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="fname" id="fname" placeholder="Tu nombre*" class="form-control" type="text" required data-error="Por favor ingresa tu nombre"> 
														<div class="input-group-icon"><i class="fa fa-user"></i></div>
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="email" id="email" placeholder="Tu E-mail*" pattern=".*@\w{2,}\.\w{2,}" class="form-control" type="email" required data-error="Por favor ingresa un correo electrónico válido">
														<div class="input-group-icon"><i class="fa fa-envelope"></i></div>
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="phone" id="phone" placeholder="Teléfono*" class="form-control" type="text" required data-error="Por favor ingresa tu número de teléfono">
														<div class="input-group-icon"><i class="fa fa-phone"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-6">
														<div class="help-block with-errors"></div>
														<input name="subject" id="subject" placeholder="Asunto*" class="form-control" type="text" required data-error="Por favor ingresa el asunto">
														<div class="input-group-icon"><i class="fa fa-book"></i></div> 
													</div><!-- end form-group -->
													<div class="form-group col-sm-12">
														<div class="help-block with-errors"></div>
														<textarea rows="3" name="message" id="message" placeholder="Escribe tu comentario aquí*" class="form-control" required data-error="Por favor ingresa un mensaje"></textarea>
														<div class="textarea input-group-icon"><i class="fa fa-pencil"></i></div>
													</div><!-- end form-group -->
													
													<div class="form-group last col-sm-12">
														<button type="submit" id="submit" class="btn btn-custom"><i class='fa fa-envelope'></i> Enviar</button>
													</div><!-- end form-group -->	
											
													<span class="sub-text">* Campos requeridos</span>
													<div class="clearfix"></div>
												</div><!-- end row -->
											</form><!-- end form -->
											
											
									
									
								  
								
								</div>
							</div><!--End row -->
							
						
								
							
							<!-- Popup end -->
							
						</div><!-- end item-wrap -->
					</div><!--End col -->
				</div><!--End tab-content -->
			</div><!--End row -->
		</div><!--End container -->
	</section>
    <div class="colBottomMargin">
		&nbsp;<div class="colBottomMargin">&nbsp;</div>
	</div>
    <script src="<?php echo base_url().'assets/jquery/popper.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/jquery/validator.min.js'; ?>"></script>
    <script src="<?php echo base_url().'assets/jquery/js/contact-form.js'; ?>"></script>	        