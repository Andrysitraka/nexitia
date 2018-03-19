<?php
vc_map( array(
		"name"        => __( "Kobra Hover Effects", "kobra_vc" ),
		"base"        => "kobra_hover",
		"icon"        => "kobra_wappericon",
		"category"    => 'Kobra Hover Effects',
		'description' => 'Icon animation with Text',
		// 'admin_enqueue_css' => array(plugins_url('css/vc_extensions_cq_admin.css', __FILE__)),
		"params"      => array(
			// General Settings fields
			array(
				"type"        => "dropdown",
				"heading"     => __( "Select Style" ),
				"param_name"  => "select_style",
				"admin_label" => true,
				"value"       => array(
					'Square'  => 'square',
					'Circle'  => 'circle',
					'Square2' => 'square2',
				),
				"std"         => 'square',
			),
			// Select Square Field
			array(
				"type"        => "dropdown",
				"heading"     => __( "Select Effects" ),
				"param_name"  => "square",
				"admin_label" => true,
				"value"       => array(
					'Effects 1'             => 'style1',
					'Effects 2'             => 'style2',
					'Effects 3'             => 'style3',
					'Effects 4'             => 'style4',
					'Effects 5'             => 'style5',
					'Effects 6 - pro Only'  => 'style6',
					'Effects 7 - pro Only'  => 'style7',
					'Effects 8 - pro Only'  => 'style8',
					'Effects 9 - pro Only'  => 'style9',
					'Effects 10 - pro Only' => 'style10',
					'Effects 11 - pro Only' => 'style11',
					'Effects 12 - pro Only' => 'style12',
					'Effects 13 - pro Only' => 'style13',
					'Effects 14 - pro Only' => 'style14',
					'Effects 15 - pro Only' => 'style15',
					'Effects 16 - pro Only' => 'style16',
					'Effects 17 - pro Only' => 'style17',
					'Effects 18 - pro Only' => 'style18',
				),
				"std"         => 'style1',
				"dependency"  => array( 'element' => 'select_style', 'value' => 'square' ),
			),

			// Select Square Field
			array(
				"type"        => "dropdown",
				"heading"     => __( "Select Effects" ),
				"param_name"  => "square2",
				"admin_label" => true,
				"value"       => array(
					'Effects 1'             => 'style1',
					'Effects 2'             => 'style2',
					'Effects 3'             => 'style3',
					'Effects 4'             => 'style4',
					'Effects 5'             => 'style5',
					'Effects 6 - pro Only'  => 'style6',
					'Effects 7 - pro Only'  => 'style7',
					'Effects 8 - pro Only'  => 'style8',
					'Effects 9 - pro Only'  => 'style9',
					'Effects 10 - pro Only' => 'style10',
					'Effects 11 - pro Only' => 'style11',
					'Effects 12 - pro Only' => 'style12',
					'Effects 13 - pro Only' => 'style13',
					'Effects 14 - pro Only' => 'style14',
					'Effects 15 - pro Only' => 'style15',
					'Effects 16 - pro Only' => 'style16',
					'Effects 17 - pro Only' => 'style17',
					'Effects 18 - pro Only' => 'style18',
					'Effects 19 - pro Only' => 'style19',
					'Effects 20 - pro Only' => 'style20',
					'Effects 21 - pro Only' => 'style21',
					'Effects 22 - pro Only' => 'style22',
					'Effects 23 - pro Only' => 'style23',
					'Effects 24 - pro Only' => 'style24',
					'Effects 25 - pro Only' => 'style25',
					'Effects 26 - pro Only' => 'style26',
					'Effects 27 - pro Only' => 'style27',
					'Effects 28 - pro Only' => 'style28',
					'Effects 29 - pro Only' => 'style29',
					'Effects 30 - pro Only' => 'style30',
					'Effects 31 - pro Only' => 'style31',
					'Effects 32 - pro Only' => 'style32',
					'Effects 33 - pro Only' => 'style33',
					'Effects 34 - pro Only' => 'style34',
					'Effects 35 - pro Only' => 'style35',
					'Effects 36 - pro Only' => 'style36',
					'Effects 37 - pro Only' => 'style37',
					'Effects 38 - pro Only' => 'style38',
					'Effects 39 - pro Only' => 'style39',
					'Effects 40 - pro Only' => 'style40',
					'Effects 41 - pro Only' => 'style41',
				),
				"std"         => 'style1',
				"dependency"  => array( 'element' => 'select_style', 'value' => 'square2' ),
			),

			// Select Circle Field
			array(
				"type"        => "dropdown",
				"heading"     => __( "Select Effects" ),
				"param_name"  => "circle",
				"admin_label" => true,
				"value"       => array(
					'Effects 1'             => 'circle1',
					'Effects 2'             => 'circle2',
					'Effects 3'             => 'circle3',
					'Effects 4'             => 'circle4',
					'Effects 5'             => 'circle5',
					'Effects 6 - pro Only'  => 'circle6',
					'Effects 7 - pro Only'  => 'circle7',
					'Effects 8 - pro Only'  => 'circle8',
					'Effects 9 - pro Only'  => 'circle9',
					'Effects 10 - pro Only' => 'circle10',
					'Effects 11 - pro Only' => 'circle11',
					'Effects 12 - pro Only' => 'circle12',
					'Effects 13 - pro Only' => 'circle13',
					'Effects 14 - pro Only' => 'circle14',
					'Effects 15 - pro Only' => 'circle15',
					'Effects 16 - pro Only' => 'circle16',
					'Effects 17 - pro Only' => 'circle17',
					'Effects 18 - pro Only' => 'circle18',
					'Effects 19 - pro Only' => 'circle19',
					'Effects 20 - pro Only' => 'circle20',
					'Effects 21 - pro Only' => 'circle21',
					'Effects 22 - pro Only' => 'circle22',
				),
				"dependency"  => array( 'element' => 'select_style', 'value' => 'circle' ),
			),

			// Attached Image Field
			array(
				"type"        => "attach_image",
				"heading"     => __( "Upload Image", "ultimate_vc" ),
				"param_name"  => "images",
				"value"       => "",
				"description" => __( "Select images from media library.", "ultimate_vc" ),
			),
			// Title Field
			array(
				"type"        => "textfield",
				/* "holder" => "div", */
				"class"       => "",
				"heading"     => __( "Title", 'ultimate_vc' ),
				"param_name"  => "title",
				"admin_label" => true,
				"value"       => "Title Goes Here"
				/* "description" => __("Provide the title for the iHover.", 'ultimate') */
			),
			// Description Field
			array(
				"type"        => "textarea",
				/* "holder" => "div", */
				"class"       => "",
				"heading"     => __( "Description", 'ultimate_vc' ),
				"param_name"  => "descript",
				"admin_label" => true,
				"value"       => "Description Goes Here"
				/* "description" => __("Provide the title for the iHover.", 'ultimate') */
			),
			
			//////////////////////////////////////////////////
			//////////////////// PREMIUM OPTION //////////////
			/////////////////////////////////////////////////
			// Background Color
			array(
				"type"        => "colorpicker",
				"class"       => "",
				"heading"     => __( "<h3>Click Below to Buy Pro Version & Get Awesome Feature:<a href='http://codecans.com/items/kobra-hover-effects-for-visual-composer-pro/' target='_blank'><span class='but_kobra'></br><img src='http://codecans.com/tutorials/images/buy_now.gif' /></span></a></h3></br>Item Background color - <span class='pro_title'>(Pro Versin Only ) </span> - <a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro Version</a>", "my-text-domain" ),
				"param_name"  => "bg_color",
				"value"       => '#FF0000', //Default Red color
				"description" => __( "Item Background color Option Work With Pro Version only", "my-text-domain" ),
				"group"       => "Options",
			),
			
			// Circle Animation
			array(
				"type"        => "dropdown",
				"heading"     => __( "Circle Hover Animation" ),
				"param_name"  => "cir_anima",
				"admin_label" => true,
				"value"       => array(
					'Left To Right'   => 'left_to_right',
					'Right To Left 2' => 'right_to_left',
					'Top To Bottom'   => 'top_to_bottom',
					'Bottom To Top'   => 'bottom_to_top',
				),
				"std"         => 'left_to_right',
				"dependency"  => array( 'element' => 'select_style', 'value' => 'circle' ),
				"group"       => "Options",
			),

			// Title Font Size Field
			array(
				'type'        => 'prime_slider',
				'heading'     => __( 'Title Text Font Size', 'team_vc' ),
				'param_name'  => 'title_size',
				'tooltip'     => __( 'Choose Member Name Font Size Here. For large numbers it\'s better use 18px Font Size.', 'team_vc' ),
				'min'         => 1,
				'max'         => 100,
				'step'        => 1,
				'value'       => 18,
				'unit'        => 'px',
				"description" => __( "Chose Title Text Size as Pixel. Default is 18px", "my-text-domain" ),
				"group"       => "Options",
			),
			// Description Font Size Field
			array(
				'type'        => 'prime_slider',
				'heading'     => __( 'Description Text Size', 'team_vc' ),
				'param_name'  => 'desc_size',
				'tooltip'     => __( 'Choose Member Name Font Size Here. For large numbers it\'s better use 18px Font Size.', 'team_vc' ),
				'min'         => 1,
				'max'         => 100,
				'step'        => 1,
				'value'       => 15,
				'unit'        => 'px',
				"description" => __( "Chose Title Description Size as Pixel. Default is 15px", "my-text-domain" ),
				"group"       => "Options",
			),
			// Tilte Color
			array(
				"type"        => "colorpicker",
				"class"       => "",
				"heading"     => __( "Title Text color", "my-text-domain" ),
				"param_name"  => "title_color",
				"value"       => '#FFFFFF', //Default Red color
				"description" => __( "Chose Title Font Color From Color Picker, Default is #FFFFFF", "my-text-domain" ),
				"group"       => "Options",
			),
			// Description Color
			array(
				"type"        => "colorpicker",
				"heading"     => __( "Description Text color", "my-text-domain" ),
				"param_name"  => "descr_color",
				"value"       => '#FFFFFF', //Default Red color
				"description" => __( "Chose Description Font Color Here. Default is #FFFFFF", "my-text-domain" ),
				"group"       => "Options",
			),

			// Image Height And Width
			array(
				'type'        => 'prime_slider',
				'heading'     => __( 'Image Height & Width', 'team_vc' ),
				//"edit_field_class" => "vc_col-xs-6 vc_column",
				'param_name'  => 'main_height_width',
				'tooltip'     => __( 'Add Main Images Height & Width. You can use different Image Height and width as you like.', 'team_vc' ),
				'min'         => 200,
				'max'         => 1500,
				'step'        => 1,
				'value'       => 305,
				'unit'        => 'px',
				"description" => __( "Add Main Images Height & Width as Pixel. Default is 305px", "my-text-domain" ),
				"group"       => "Custom Image Size",
			),
			// Circle Spiner Height And Width
			array(
				'type'        => 'prime_slider',
				'heading'     => __( 'Circle Spiner Height & Width', 'team_vc' ),
				//"edit_field_class" => "vc_col-xs-6 vc_column",
				'param_name'  => 'circle_spiner_height_width',
				'tooltip'     => __( 'Add Main Images Height & Width. You can use different Image Height and width as you like.', 'team_vc' ),
				'min'         => 150,
				'max'         => 1500,
				'step'        => 1,
				'value'       => 315,
				'unit'        => 'px',
				"description" => __( "Add Circle Spiner Height & Width as Pixel. You should increase more 10 than main Height and Width", "my-text-domain" ),
				"group"       => "Custom Image Size",
				"dependency"  => array( 'element' => 'circle', 'value' => 'circle1' ),
			),

			// Responsive 768 Height And Width
			array(
				'type'        => 'prime_slider',
				'heading'     => __( 'Height & Width (768) Responsive', 'team_vc' ),
				//"edit_field_class" => "vc_col-xs-6 vc_column",
				'param_name'  => 'img768_height_width',
				'tooltip'     => __( 'Add Responsive Images Height & Width. This is Height and width when your Items Going Tablet.', 'team_vc' ),
				'min'         => 100,
				'max'         => 1000,
				'step'        => 1,
				'value'       => 250,
				'unit'        => 'px',
				"description" => __( "Add Responsive Images Height & Width as Pixel. Default is 250px", "my-text-domain" ),
				"group"       => "Custom Image Size",
			),

			array(
				"type"        => "prime_switch",
				"class"       => "",
				"heading"     => __( "Button & External Link?  - <span class='pro_title'>(Pro Versin Only ) </span> - <a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro Version</a>", "prime_vc" ),
				"param_name"  => "kb_button",
				'value'       => array( __( 'Show Button', 'kobra_vc' ) => 'off' ),
				"options"     => array(
					"on" => array(
						"label" => __( "", "prime_vc" ),
						"on"    => "Yes",
						"off"   => "No",
					),
				),
				"default_set" => false,
				"description" => "Switch Yes If you want to Add Button On items. Default Is False",
				"dependency"  => array( 'element' => 'select_style', 'value' => 'square' ),
				//"group"       => "Premium Options",
			),

			// Link Field
			array(
				"type"        => "vc_link",
				"class"       => "",
				"heading"     => __( "URL (Link) - <span class='pro_title'>(Pro Versin Only ) </span> - <a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro Version</a>", 'kobra_vc' ),
				"param_name"  => "link",
				"description" => __( "Provide the link here.", 'kobra_vc' ),
				"dependency"  => array( 'element' => 'kb_button', 'value' => 'on' ),
				//"group"       => "Premium Options",
			),

			array(
				"type"        => "dropdown",
				"holder"      => "",
				"class"       => "kobra_vc",
				"heading"     => __( "Chose Button - <span class='pro_title'>(Pro Versin Only ) </span> - <a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro Version</a>", "kobra_vc" ),
				"param_name"  => "button_choser",
				"value"       => array(
					__( "Default", "kobra_vc" ) => "btn-default",
					__( "Primary", "kobra_vc" ) => "btn-primary",
					__( "Success", "kobra_vc" ) => "btn-success",
					__( "Info", "kobra_vc" )    => "btn-info",
					__( "Warning", "kobra_vc" ) => "btn-warning",
					__( "Danger", "kobra_vc" )  => "btn-danger",
					__( "Link", "kobra_vc" )    => "btn-link",
				),
				"description" => __( "Select the Different Type of button", "kobra_vc" ),
				"dependency"  => array( 'element' => 'kb_button', 'value' => 'on' ),
				//"group"       => "Premium Options",
			),

			// Button Font Size
			array(
				"type"        => "textfield",
				"heading"     => __( "Button Text Size - <span class='pro_title'>(Pro Versin Only ) </span> - <a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro Version</a>", 'ultimate_vc' ),
				"param_name"  => "Button_size",
				"admin_label" => true,
				"value"       => "12",
				"description" => __( "This Option Works only With Pro Version", "my-text-domain" ),
				//"group"       => "Premium Options",
				"dependency"  => array( 'element' => 'kb_button', 'value' => 'on' ),
			),
			// Button Text Color
			array(
				"type"        => "colorpicker",
				"class"       => "",
				"heading"     => __( "Button Text color - <span class='pro_title'>(Pro Versin Only ) </span> - <a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro Version</a>", "my-text-domain" ),
				"param_name"  => "button_color",
				"value"       => '#FFFFFF', //Default Red color
				"description" => __( "This Option Works only With Pro Version", "my-text-domain" ),
				//"group"       => "Premium Options",
				"dependency"  => array( 'element' => 'kb_button', 'value' => 'on' ),
			),

			array(
				"type"        => "prime_switch",
				"heading"     => __( "External Link? - <span class='pro_title'>(Pro Versin Only ) </span> - <a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro Version</a>", "prime_vc" ),
				"param_name"  => "circle_button",
				'value'       => array( __( 'Link', 'kobra_vc' ) => 'off' ),
				"options"     => array(
					"on" => array(
						"label" => __( "", "prime_vc" ),
						"on"    => "Yes",
						"off"   => "No",
					),
				),
				"default_set" => false,
				"description" => "Switch Yes If you want to Add Button On items. Default Is False",
				"dependency"  => array( 'element' => 'select_style', 'value' => 'circle' ),
				//"group"       => "Premium Options",
			),

			// Link Field
			array(
				"type"        => "vc_link",
				"class"       => "",
				"heading"     => __( "URL (Link) - <span class='pro_title'>(Pro Versin Only ) </span> - <a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro Version</a>", 'kobra_vc' ),
				"param_name"  => "link_circle",
				"description" => __( "Provide the link here.", 'kobra_vc' ),
				"dependency"  => array( 'element' => 'circle_button', 'value' => 'on' ),
				//"group"       => "Premium Options",

			),
			
			// Link Field
			array(
				"type"        => "vc_link",
				"class"       => "",
				"heading"     => __( "URL (Link) - <span class='pro_title'>(Pro Versin Only ) </span> - <a target=\'_blank\' href=\'http://codecans.com/items/rd-hover-effects-pro/\'> <i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro Version</a>", 'kobra_vc' ),
				"param_name"  => "square2_link",
				"description" => __( "Provide the link here.", 'kobra_vc' ),
				"dependency"  => array( 'element' => 'select_style', 'value' => 'square2' ),
				//"group"       => "Premium Options",

			),
		),
	) );