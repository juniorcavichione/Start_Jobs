					<!-- Login btn -->
            	<div class="btn-group" style="z-index: 9999;">
	                <a href="#" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                    <i class="icon-user mr-2"></i> Login / Área Exclusiva 
	                </a>
	
	                <div class="dropdown-menu dropdown-menu-right" id="js-login-dropdown-menu" style="width: 340px; max-width: 340px;">
	                    <div class="dropdown-menu-arrow"></div>
	                    
	                    <form class="px-5 py-4" method="post" action="https://www.sp.senac.br" id="login-form">
								
							<div class="alert alert-danger py-3 d-none" id="mensagem-erro-login-header" style="background:#f8d7da;border-color:#f5c6cb; color:#a94442"></div>
								
	                        <div class="form-group">
	                            
	                            <label for="login-email">E-mail</label>
	                            <div class="input-group mb-2">
	                                <div class="input-group-prepend">
	                                    <span class="input-group-text"><i class="icon-envelope"></i></span>
	                                </div>
	                                <input type="text" class="form-control" id="login-email" name="_com_liferay_login_web_portlet_LoginPortlet_login" placeholder="Digite seu e-mail" aria-label="Email" aria-describedby="login-email">
	                            </div>
	
	                        </div>
	
	                        <div class="form-group">
	
	                            <label for="login-password">Senha</label>
	                            <div class="input-group mb-2">
	                                <div class="input-group-prepend">
	                                    <span class="input-group-text"><i class="icon-key"></i></span>
	                                </div>
	                                <input type="password" class="form-control" id="login-password" name="_com_liferay_login_web_portlet_LoginPortlet_password" placeholder="Digite sua senha" aria-label="Password" aria-describedby="login-password">
	                            </div>
	
	                        </div>
	                        
	                        <div class="pt-1 pb-3">
	                        <small><a href="http://www.sp.senac.br/login-unico/SendPassword" target="_blank">Esqueceu sua senha?</a></small>
	                        </div>
	                      
	                        <button type="button" class="btn btn-primary w-100" id="btnLoginHeader">Entrar</button>
	                    </form>
	                    
	                    <div class="dropdown-divider"></div>
	
	                    <div class="px-5 pb-4">
	                        <div class="text-darker-gray py-3">Não tem cadastro?</div>
	                        <a href="https://www.sp.senac.br/usuario-unico/InsertUser" target="_blank" class="btn bg-btn-cadastre text-white w-100 ">Cadastre-se</a>
	                    </div>
	
	               </div>

            		</div>
            
				</div>
				<div id="txtUsuarioLogado" class="d-none" style="font-size:13px;font-family:Montserrat">
					<a href="#a" alt="Acesse seu área Exclusiva" style="text-decoration: none;" title="Acesse sua área Exclusiva" target="_self" class="ssp-linkAreaExclusivaLogin" id="linkAreaExclusivaLogin"><strong><span style="font-size: 14px">Olá,</span> <span class="ssp-nomeUsuario" id="nomeUsuario"></span>!</strong><br><span class="ssp-acesse-sua-area"><strong>Acesse sua área</strong></span></a> 
					<a class="encerrar_acesso d-none" href="#a"><i class="fa fa-sign-out" aria-hidden="true"></i> Sair</a>
				</div>
            </div>

        </div> 
        
    </div>