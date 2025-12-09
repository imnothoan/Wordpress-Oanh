<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Real Estate Developer 
 */

get_header(); ?>

<div class="box-image position-relative">
    <div class="single-page-img"></div>
    <div class="page-header">
        <h1><?php the_title();?></h1> 
        <span class="page-breadcrumb"><?php real_estate_developer_the_breadcrumb(); ?></span> 
    </div>
</div>

<?php do_action( 'real_estate_developer_page_top' ); ?>

<main id="maincontent" class="middle-align pt-5" role="main"> 
    <div class="container">
        <?php $real_estate_developer_theme_lay = get_theme_mod( 'real_estate_developer_page_layout','One_Column');
            if($real_estate_developer_theme_lay == 'One_Column'){ ?>
            
                <?php while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content-page'); 
                endwhile; ?>
        <?php }else if($real_estate_developer_theme_lay == 'Right_Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-page'); 
                    endwhile; ?>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </div>
            </div>
        <?php }else if($real_estate_developer_theme_lay == 'Left_Sidebar'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </div>
                <div class="col-lg-8 col-md-8">
                    
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-page'); 
                    endwhile; ?>
                </div>
            </div>
        <?php }else {?>
            <div class="row">
                <div class="col-lg-8 col-md-8">
                    
                    <?php while ( have_posts() ) : the_post();
                        get_template_part( 'template-parts/content-page'); 
                    endwhile; ?>
                </div>
                <div id="sidebar" class="col-lg-4 col-md-4">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </div>
            </div>
        <?php } ?>
        <?php echo esc_html (real_estate_developer_edit_link()); ?>
    </div>
</main>

<?php do_action( 'real_estate_developer_page_bottom' ); ?>

<?php get_footer(); ?>