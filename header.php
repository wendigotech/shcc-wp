<!doctype html> 
<html <?php language_attributes(); ?>> 
    <head> 
        <meta charset="<?php bloginfo( 'charset' ); ?>"> 
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> 
        <meta name="description" content=""> 
        <meta name="author" content="">          
        <!-- Bootstrap core CSS -->                                             
        <!-- Custom styles for this template -->                  
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>     
    <body class="<?php echo implode(' ', get_body_class()); ?>"> 
        <!-- Navigation -->         
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav"> 
            <div class="container"> 
                <?php if ( ! has_custom_logo() ) : ?>
                    <a class="navbar-brand js-scroll-trigger title text-dark" href="<?php echo esc_url( get_home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
                <?php else : ?>
                    <?php shcc_wp_the_custom_logo() ?>
                <?php endif; ?> 
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"> 
                    <?php _e( 'Menu', 'shcc_wp' ); ?> 
                    <i class="fa fa-bars"></i> 
                </button>                 
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <?php
                        PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="nav-item {CLASSES}" id="{ID}">
                            <a class="nav-link js-scroll-trigger" {ATTRS}>{TITLE}</a>
                        </li>';
                        wp_nav_menu( array(
                            'menu' => 'primary',
                            'container' => '',
                            'items_wrap' => '<ul class="navbar-nav text-uppercase ml-auto %2$s" id="%1$s">%3$s</ul>',
                            'walker' => new PG_Smart_Walker_Nav_Menu()
                    ) ); ?>
                </div>                 
            </div>             
        </nav>         
        <!-- Header -->         
        <header class="masthead"> 
            <div class="container"> 
                <div class="row"> 
                    <div class="col-md-6 left"> 
                        <div class="intro-text">
                            <?php _e( 'Have You Been… The Victim of Sexual Harassment?', 'shcc_wp' ); ?>
                        </div>                         
                        <div class="row intro-list"> 
                            <!-- <ul>
	          		<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Has sexual harassment caused you shame, resentment, anger or humiliation?</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Are you afraid of losing your job or future employment in your field?</li>
					<li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Have you endured these emotions and thoughts in the workplace through no fault of your own?</li>
				</ul>-->                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-arrow-orange.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Has sexual harassment caused you shame, resentment, anger or humiliation?', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-arrow-orange.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Are you afraid of losing your job or future employment in your field?', 'shcc_wp' ); ?></p> 
                            </div>                             
                            <div class="col-md-1"> 
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/SHCC-arrow-orange.png"> 
                            </div>                             
                            <div class="col-md-11"> 
                                <p><?php _e( 'Have you endured these emotions and thoughts in the workplace through no fault of your own?', 'shcc_wp' ); ?></p> 
                            </div>                             
                        </div>                         
                    </div>                     
                    <div class="col-md-6 custom-form"> 
                        <div class="row"> 
                            <div class="col-md-12"> 
                                <form class="form-horizontal" role="form"> 
                                    <fieldset> 
                                        <!-- Form Name -->                                         
                                        <div class="form-title"> 
                                            <legend>
                                                <?php _e( 'Free No Obligation Consultation', 'shcc_wp' ); ?>
                                            </legend>                                             
                                        </div>                                         
                                        <!-- Text input-->                                         
                                        <div class="form-body"> 
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="First Name *" class="form-control"> 
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Last Name *" class="form-control"> 
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Email *" class="form-control"> 
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="row"> 
                                                    <div class="col-md-6"> 
                                                        <div class="col-sm-12"> 
                                                            <input type="text" placeholder="Phone" class="form-control"> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                    <div class="col-md-6"> 
                                                        <div class="col-sm-12"> 
                                                            <input type="text" placeholder="Zip code*" class="form-control"> 
                                                            <i class="zip-home-fa fa fa-info-circle" aria-hidden="true"></i> 
                                                        </div>                                                         
                                                    </div>                                                     
                                                </div>                                                 
                                            </div>                                             
                                            <!-- Text input-->                                             
                                            <div class="form-group"> 
                                                <div class="col-sm-12"> 
                                                    <input type="text" placeholder="Comments *" class="form-control"> 
                                                    <i class="comments-home-fa fa fa-info-circle" aria-hidden="true"></i> 
                                                </div>                                                 
                                            </div>                                             
                                            <a class="btn btn-primary btn-xl col-md-12" href="#services"><?php _e( 'Yes, I would like a free consultation', 'shcc_wp' ); ?></a> 
                                        </div>                                         
                                    </fieldset>                                     
                                </form>                                 
                            </div>
                            <!-- /.col-lg-12 -->                             
                        </div>
                        <!-- /.row -->                         
                    </div>                     
                </div>                 
        </header>
        <div class="site-inner container-fluid">