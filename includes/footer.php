		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/browser.min.js"></script>
		<script src="assets/js/breakpoints.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
			integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
		</script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
			integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
		</script>

		<script>
			(function($) {
				var $formLogin = $('#login-form');
				var $formRegister = $('#register-form');
				var $formRecuperar = $('#recuperar-form');
				var $divForms = $('#div-forms');
				var $modalAnimateTime = 300;
				var $msgAnimateTime = 150;
				var $msgShowTime = 2000;
				/* $("form").submit(function() {
				    switch (this.id) {
				        case "login-form":
				            var $lg_username = $('#login_username').val();
				            var $lg_password = $('#login_password').val();
				            if ($lg_username == "ERROR") {
				                msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "error", "glyphicon-remove", "Login error");
				            } else {
				                msgChange($('#div-login-msg'), $('#icon-login-msg'), $('#text-login-msg'), "success", "glyphicon-ok", "Login OK");
				            }
				            return false;
				            break;
				        case "register-form":
				            var $rg_username = $('#register_username').val();
				            var $rg_email = $('#register_email').val();
				            var $rg_password = $('#register_password').val();
				            if ($rg_username == "ERROR") {
				                msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "error", "glyphicon-remove", "Register error");
				            } else {
				                msgChange($('#div-register-msg'), $('#icon-register-msg'), $('#text-register-msg'), "success", "glyphicon-ok", "Register OK");
				            }
				            return false;
				            break;
				        default:
				            return false;
				    }
				    return false;
				}); */
				$('#login_vai_registrar').click(function() {
					modalAnimate($formLogin, $formRegister)
				});
				$('#login_vai_recupera').click(function() {
					modalAnimate($formLogin, $formRecuperar);
				});
				$('#registra_voltar_logar').click(function() {
					modalAnimate($formRegister, $formLogin);
				});
				$('#registra_voltar_recupera').click(function() {
					modalAnimate($formRegister, $formRecuperar);
				});
				$('#recupera_voltar_registro').click(function() {
					modalAnimate($formRecuperar, $formRegister);
				});
				$('#recupera_voltar_logar').click(function() {
					modalAnimate($formRecuperar, $formLogin);
				});

				function modalAnimate($oldForm, $newForm) {
					var $oldH = $oldForm.height();
					var $newH = $newForm.height();
					$divForms.css("height", $oldH);
					$oldForm.fadeToggle($modalAnimateTime, function() {
						$divForms.animate({
							height: $newH
						}, $modalAnimateTime, function() {
							$newForm.fadeToggle($modalAnimateTime);
						});
					});
				}

				function msgFade($msgId, $msgText) {
					$msgId.fadeOut($msgAnimateTime, function() {
						$(this).text($msgText).fadeIn($msgAnimateTime);
					});
				}
			})(jQuery); // End of use strict
		</script>
		<script src="./assets/js/lgpd.js"></script>
		</body>

		</html>