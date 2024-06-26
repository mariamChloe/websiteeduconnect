<?php if ( ! defined( 'ABSPATH' )  ) { die; }

$prefix_page_opts = 'appilo_meta';

CSF::createMetabox( $prefix_page_opts, array(
  'title'        => 'Page Options',
  'post_type'    => ['page','post'],
  'show_restore' => false,
  'theme'=> 'light',
) );

//
// Create a section
//
CSF::createSection( $prefix_page_opts, array(
  'title'  => 'General',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

  array(
	  'id'          => 'multi_page_menu',
	  'type'        => 'select',
	  'title'       => 'Select Menu',
	  'chosen'      => true,
	  'multiple'    => false,
	  'default' => 'default',
	  'options'     => [
		  'default' => 'Select',
		  '1' => 'One Page Menu',
		  '2' => 'Multi Page Menu'
	  ],
  ),
    array(
      'id'    => 'header_switch',
      'type'  => 'switcher',
      'title' => 'Enable custom header',
      'help'  => 'If you want to use custom header other than set in customiser',
    ),
    array(
      'id'          => 'meta_header',
      'type'        => 'select',
      'title'       => 'Select header',
      'chosen'      => true,
      'multiple'    => false,
      'dependency' => array('header_switch', '==', 'true' ),
      'options'     => appilo_post_type('appilo_template'),
    ),

    array(
      'id'    => 'footer_switch',
      'type'  => 'switcher',
      'title' => 'Enable custom footer',
      'help'  => 'If you want to use custom footer other than set in customiser',
    ),
    array(
      'id'          => 'meta_footer',
      'type'        => 'select',
      'title'       => 'Select footer',
      'chosen'      => true,
      'multiple'    => false,
      'dependency' => array( 'footer_switch', '==', 'true' ),
      'options'     => appilo_post_type('appilo_template'),
    ),

  )
) );
