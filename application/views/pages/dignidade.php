<div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'index') ? 'active' : null; ?>"></a><a href="<?=base_url()?>">Início</a> &nbsp;/&nbsp; <span>Projeto Dignidade</span>
            </div>

            <div class="row-fluid">
			
			
            	<!--Edit Main Content Area here-->
                <div class="span9" id="divMain">

                    <h3>Projeto Dignidade</h3>
					<hr/>
                    <h4 class="title">Objetivos Gerais</h4> 	
                    <p>Realizar pequenas benfeitorias em residências carentes, escolas públicas em situações precárias bem como em instituições caritativas sem fins lucrativos;</p>
                    <p>Fornecer material hospitalar para indivíduos carentes;</p>
                    <p>Distribuir material escolar para crianças necessitadas.</p>
                    
                    <p><a href="https://goo.gl/forms/FOz4XcXU3WHie3Jh2" target="_blank"><strong>Preencha aqui o seu cadastro e participe</strong>.</a></p>

                    <hr/>
                    <h4 class="title">Doações</h4>
                    <p><strong>Doações em depósito:</strong></p>
                    <p>Bando Bradesco</p>
                    <p>Ag.: 2572-0 C/c. 55251-8</p>
                    <p>GRUPO CRISTAO MAOS DE LUZ-GCML</p>
                    <p>CNPJ-26152309/0001-90</p>
                    <p><strong>Doação via PIX</strong>:</p>
                    <p>Chave PIX: 26152309/0001-90</p>
                    <p><strong>Doação online</strong></p>
                    <p>Faça aqui suas doações o online ao projeto dignidade.</p>
                    <!-- INICIO FORMULARIO BOTAO PAGSEGURO -->
                    <form action="https://pagseguro.uol.com.br/checkout/v2/donation.html" method="post">
                    <!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
                    <input type="hidden" name="currency" value="BRL" />
                    <input type="hidden" name="receiverEmail" value="gcmlcaridade@gmail.com" />
                    <input type="hidden" name="iot" value="button" />
                    <input type="image" src="https://stc.pagseguro.uol.com.br/public/img/botoes/doacoes/120x53-doar-azul.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
                    </form>
                    <!-- FINAL FORMULARIO BOTAO PAGSEGURO -->
				</div>	                             
                    					                  
				<!--/End Main Content Area here-->	
                <div class="span3">                
				<img src="<?=base_url('assets/img/proLogo/dignidade.jpg')?>" alt="">
                </div>
	
							
            </div>

            <div id="footerInnerSeparator"></div>
        </div>
    </div>
    </div>