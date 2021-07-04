<div class="contentArea">

        <div class="divPanel notop page-content">

            <div class="breadcrumbs">
                <a href="class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'index') ? 'active' : null; ?>"></a><a href="<?=base_url()?>">Início</a> &nbsp;/&nbsp; <span>Contato</span>
            </div>
            	
            <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Contato - GCML - Organização de Caridade</h1>
                   	<h3 style="color:#FF6633;"><?php echo @$_GET['msg'];?></h3>
					<hr>
			<!--Start Contact form -->		

<form method="post" role="form">
  <fieldset>
    	
    <input type="text" name="nome" id="nome" value="<?=set_value('nome')?>"  class="input-block-level" placeholder="Nome" />
    <input type="text" name="email" id="email" value="<?=set_value('email')?>" class="input-block-level" placeholder="Email" />
    <input type="text" name="assunto" id="assunto" value="<?=set_value('assunto')?>" class="input-block-level" placeholder="Assunto" />
    <textarea rows="11" name="mensagem" id="mensagem" class="input-block-level" placeholder="Mensagem"><?=set_value('mensagem')?></textarea>
    <div class="actions">
	<input type="submit" value="Enviar" name="submit" id="submitButton" class="btn btn-info pull-right" title="Click here to submit your message!" />
	</div>
	
	</fieldset>
</form>				 
			<!--End Contact form -->											 
                </div>
				
			<!--Edit Sidebar Content here-->	
                <div class="span4 sidebar">

                    <div class="sidebox">
                        <h3 class="sidebox-title">Contato</h3>
                    <p>
                        <address><strong>Grupo Cristão Mãos de Luz - Fortaleza / CE</strong><br />                        
                        <strong>Whatsapp</strong><br/>
                        <abbr title="Phone">Celular:</abbr> (85) 99998 4056</address> 
                        <address>  <strong>Email</strong><br />
                        <a href="mailto:#">gcmlcaridade@gmail.com</a></address>  
                    </p>     
                     
					 <!-- Start Side Categories -->
        <h4 class="sidebox-title">Redes Sociais</h4>
        <ul>
          <li>www.maosdeluz.org.br-facebook</li>
          <li>instagram-@grupocri</li>
        </ul>
					<!-- End Side Categories -->
                    					
                    </div>
					
					
                    
                </div>
			<!--/End Sidebar Content-->
				
				
            </div>			
<div class="row featurette">
        <div class="col-md-2">
        </div>
            <div class="col-md-8">
                <?php if ($formErrors) {?>
                    <div class="alert alert-danger">
                        <?=$formErrors?>
                    </div>
                <?php }else{
                    if($this->session->flashdata('success_msg')) {?>
                    <div class="alert alert-success">
                        <?=$this->session->flashdata('success_msg')?>
                    </div>
                <?php } } ?>
                <form class="form-horizontal" method="POST" action="<?=base_url('contato')?>">
            </div>
        <div class="col-md-2">
        </div>
    </div>  
            <div id="footerInnerSeparator"></div>
        </div>
    </div>
    </div>
