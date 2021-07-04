<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Grupo Cristão Mãos de Luz - Organização De Caridade, Projeto Social</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<meta name="description" content="<?=$description?>">-->
    <meta name="description" content="Grupo Cristão Mãos de Luz - organização de caridade, grupo ecumênico, localizado em Fortaleza/CE." />
	<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW"> <!-- Remove this Robots Meta Tag, to allow indexing of site -->
    <link rel="icon" href="<?=base_url('assets/img/logoMl.ico')?>">
    
    <title><?=$title?></title>

    <link href="<?=base_url('assets/scripts/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/scripts/bootstrap/css/bootstrap-responsive.min.css')?>" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Icons -->
    <link href="<?=base_url('assets/scripts/icons/general/stylesheets/general_foundicons.css')?>" media="screen" rel="stylesheet" type="text/css" />  
    <link href="<?=base_url('assets/scripts/icons/social/stylesheets/social_foundicons.css')?>" media="screen" rel="stylesheet" type="text/css" />
    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <link rel="stylesheet" href="<?=base_url('assets/scripts/fontawesome/css/font-awesome.min.css')?>">
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

    <link href="<?=base_url('assets/scripts/carousel/style.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/scripts/camera/css/camera.css')?>" rel="stylesheet" type="text/css" />
    
    <link href="<?=base_url('assets/scripts/wookmark/css/style.css')?>" rel="stylesheet" type="text/css" />
    <link href="<?=base_url('assets/scripts/yoxview/yoxview.css')?>" rel="stylesheet" type="text/css" />

    <link href="http://fonts.googleapis.com/css?family=Syncopate" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Abel" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Pontano+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet" type="text/css">

    <link href="<?=base_url('assets/styles/custom.css')?>" rel="stylesheet" type="text/css" />
    
    <link href="<?=base_url('assets/styles/main.css')?>" rel="stylesheet" />
    <script type="text/javascript" src="<?=base_url('assets/scripts/tradutor.js')?>"></script>

</head>
<body id="pageBody">



<div id="google_translate_element"></div> 
            <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>     

            <br />
            
            <div class="navbar">
                <div class="navbar-inner">
                    <ul class="nav">
                        <li><a href="javascript:void(0)" class="pt" onclick="ChangeLang('pt')" title="Traduzir para portugu&ecirc;s"><img src="<?=base_url('assets/img/images/portugues.gif')?>" border="0" alt="Portugues" /></a></li>
                        <li><a href="javascript:void(0)" class="en" onclick="ChangeLang('en')" title="Translate to English"><img src="<?=base_url('assets/img/images/english.gif')?>" border="0" alt="English" /></a></li>
                        <li><a href="javascript:void(0)" class="es" onclick="ChangeLang('es')" title="Traducir al espa&ntilde;ol"><img src="<?=base_url('assets/img/images/espanol.gif')?>" border="0" alt="Spanish" /></a></li>
                        <li><a href="javascript:void(0)" class="it" onclick="ChangeLang('it')" title="Traduci in italiano"><img src="<?=base_url('assets/img/images/italiano.png')?>" border="0" alt="Italian" /></a></li>
                        <!--<li><a href="javascript:void(0)" class="de" onclick="ChangeLang('de')" title="&Uuml;bersetzen in Deutsch"><img src="<?=base_url('assets/img/images/alemao.png')?>" border="0" alt="Deutsch" /></a></li>-->
                        <!--<li><a href="javascript:void(0)" class="fr" onclick="ChangeLang('fr')" title="Traduire en fran&ccedil;ais"><img src="<?=base_url('assets/img/images/frances.png')?>" border="0" alt="French" /></a></li>-->
                    </ul>
                </div>
            </div>



<div id="divBoxed" class="container">

    <div class="transparent-bg" style="position: absolute;top: 0;left: 0;width: 100%;height: 100%;z-index: -1;zoom: 1;"></div>

    <div class="divPanel notop nobottom">
            <div class="row-fluid">
                <div class="span12">

                    <div id="divLogo" class="pull-left">
                        <a href="<?=base_url()?>" id="divSiteTitle"><img src="<?=base_url('assets/img/logo-maosdeluz.png')?>" style="margin:-35px 40px -35px;" alt=""></a><br />
                        <!--<a href="index.html" id="divTagLine">Your Tag Line Here</a>-->
                    </div>

                    <div id="divMenuRight" class="pull-center">
                    <div class="navbar">
                        <button type="button" class="btn btn-navbar-highlight btn-large btn-primary" data-toggle="collapse" data-target=".nav-collapse">
                            NAVIGATION <span class="icon-chevron-down icon-white"></span>
                        </button>
                        <div class="nav-collapse collapse">
                            <ul class="nav nav-pills ddmenu">
                            <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'index') ? 'active' : null; ?>"><a href="<?=base_url()?>">Início</a></li>
                            <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'Institucional') ? 'active' : null; ?>"><a href="<?=base_url('institucional')?>">Institucional</a></li>
                            <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'Noticias') ? 'active' : null; ?>"><a href="<?=base_url('noticias')?>">Notícias</a></li>                       
							<li class="dropdown">
                            <a href="#" class="dropdown-toggle">Projetos<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'VivenciaCrista') ? 'active' : null; ?>"><a href="<?=base_url('vivenciaCrista')?>">Vivência Cristã</a></li>
                            <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'CaravanaEvangelho') ? 'active' : null; ?>"><a href="<?=base_url('caravanaEvangelho')?>">Caravana do Evangelho</a></li>
                            <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'Dignidade') ? 'active' : null; ?>"><a href="<?=base_url('dignidade')?>">Dignidade</a></li>
							<li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'EnsinandoPescar') ? 'active' : null; ?>"><a href="<?=base_url('ensinandoPescar')?>">Ensinando a Pescar</a></li>
                            </ul>
                            </li>
						    
						    <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'Galeria') ? 'active' : null; ?>"><a href="<?=base_url('galeria')?>">Galeria</a></li>
						    <li class="<?=($this->router->fetch_class() == 'Contato' && $this->router->fetch_method() == 'Contato') ? 'active' : null; ?>"><a href="<?=base_url('contato')?>">Contato</a></li>                            
                            <li class="<?=($this->router->fetch_class() == 'Principal' && $this->router->fetch_method() == 'Doacao') ? 'active' : null; ?>"><a href="<?=base_url('doacao')?>">Doação</a></li>
                            </ul>
                            </div>
                    </div>

                    </div>

                </div>
            </div>