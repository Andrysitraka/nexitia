<?php
function kobra_hover_shortcode_function( $atts, $content = null, $tag ) {
	extract( shortcode_atts( array(
		'title'                      => 'Title Goes Here',
		'title_size'                 => '18',
		'title_color'                => '#FFFFFF',
		'main_height_width'          => '305',
		'img768_height_width'        => '250',
		'circle_spiner_height_width' => '315',
		'descript'                   => 'Description Goes Here',
		'desc_size'                  => '15',
		'descr_color'                => '#FFFFFF',
		'images'                     => '',
		'square'                     => 'style1',
		'circle'                     => 'circle1',
		'square2'                    => 'style1',
		'select_style'               => 'square',
		'button_choser'              => 'btn-default',
		'link_circle'                => '',
	), $atts ) );
	$content             = wpb_js_remove_wpautop( $content, true );
	$images              = wp_get_attachment_image_src( $images, 'full' );
	$title_size          = $atts['title_size'] != '' ? (int) esc_attr( $atts['title_size'] ) : 18;
	$main_height_width   = $atts['main_height_width'] != '' ? (int) esc_attr( $atts['main_height_width'] ) : 305;
	$img768_height_width = $atts['img768_height_width'] != '' ? (int) esc_attr( $atts['img768_height_width'] ) : 250;
	$output              = '';
	$output              .= '
			<style type="text/css">
			
			@media screen and (max-width: 1600px) and (min-width: 960px) {
			/* SQUARE EFFECTS CSS */
						.vc_view {
						  height: ' . $main_height_width . 'px;
						  width: ' . $main_height_width . 'px;
						}
						.vcrview {
					  height: ' . $main_height_width . 'px;
					  width: ' . $main_height_width . 'px;
						}
						.vcrview .container-kvcmask, .vcrview .content {
						  height: ' . $main_height_width . 'px;
						}
			/* CIRCLE EFFECTS CSS */
						.kov-items.circle.effect1  {
							height: ' . $main_height_width . 'px;
							width: ' . $main_height_width . 'px;
						}
						.kov-items.circle {
							height: ' . $main_height_width . 'px;
							width: ' . $main_height_width . 'px;
							left: 0;
						}
						.kov-items.circle .img {
						  height: ' . $main_height_width . 'px;
						  width: ' . $main_height_width . 'px;
						}
						.kov-items.circle.effect1 .spinner {
						  height: ' . $circle_spiner_height_width . 'px;
						  width: ' . $circle_spiner_height_width . 'px;
						}

						/* SQUARE 2 CSS */
						.kov-items.square {
						  height: ' . $main_height_width . 'px;
						  width: ' . $main_height_width . 'px;
						}
												
			}
			@media screen and (max-width: 959px) and (min-width: 768px) {
				
				/* SQUARE EFFECTS CSS */
						.vc_view {
						  height: ' . $img768_height_width . 'px;
						  width: ' . $img768_height_width . 'px;
						}
						.vcrview {
					  height: ' . $img768_height_width . 'px;
					  width: ' . $img768_height_width . 'px;
						}
						.vcrview .container-kvcmask, .vcrview .content {
						  height: ' . $img768_height_width . 'px;
						}
					/* CIRCLE EFFECTS CSS */
						.kov-items.circle {
							height: ' . $img768_height_width . 'px;
							width: ' . $img768_height_width . 'px;
							left: 0;
						}
						.kov-items.circle .img {
						  height: ' . $img768_height_width . 'px;
						  width: ' . $img768_height_width . 'px;
						}
				/* SQUARE2 EFFECTS CSS */
					.kov-items.square {
					  height: ' . $img768_height_width . 'px;
					  width: ' . $img768_height_width . 'px;
					}
						
				}	
			</style>	
			';

	$output .= '<div class="main">';
	if ( $select_style == "square" && $square == "style1" ) {
		$output .= ' 
		 <div class="vc_view view-first">
                    <img src="' . $images[0] . '"  alt="image-hover" />
                    <div style="background-color:rgb(26, 188, 156,0.8);" class="vcmask">
                        <h2 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h2>
                        <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
                    </div></div>';
	} else if ( $select_style == "square" && $square == "style2" ) {
		$output .= ' 
		 <div class="vc_view view-second">
                    <img src="' . $images[0] . '"  alt="image-hover" />
                     <div style="background-color:rgb(230, 126, 34,0.5);" class="vcmask">
                        <h2 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h2>
                        <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
                    </div></div>';
	} else if ( $select_style == "square" && $square == "style3" ) {
		$output .= '
		 <div class="vc_view view-third">
                    <img src="' . $images[0] . '"  alt="image-hover" />
                     <div style="background-color:rgb(142, 68, 173,0.8);" class="vcmask">
                        <h2 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h2>
                        <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
                    </div></div>';
	} else if ( $select_style == "square" && $square == "style4" ) {
		$output .= '
		 <div class="vc_view view-fourth">
                    <img src="' . $images[0] . '"  alt="image-hover" />
                     <div style="background-color:rgb(44, 62, 80);" class="vcmask">
                        <h2 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h2>
                        <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
                    </div></div>';
	} else if ( $select_style == "square" && $square == "style5" ) {
		$output .= '
		 <div class="vc_view view-fifth">
                    <img src="' . $images[0] . '"  alt="image-hover" />
                     <div style="background-color:rgb(39, 174, 96);" class="vcmask">
                        <h2 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h2>
                        <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
                    </div></div>';
	} elseif ( $select_style == "square" && $square == "style6" || $square == "style7" || $square == "style8" || $square == "style9" || $square == "style10" || $square == "style11" || $square == "style12" || $square == "style13" || $square == "style14" || $square == "style15" || $square == "style16" || $square == "style17" || $square == "style18" ) {
		$output .= ' <h3> This Square Style Only For Pro Version. To Get Pro Version <a href="http://codecans.com/items/kobra-hover-effects-for-visual-composer-pro/">Click Here </a></h3>';
	}
	if ( $select_style == "circle" && $circle == "circle1" ) {
		$output .= '
		  <div class="kov-items circle effect1"><a href="#" >
        <div class="spinner"></div>
        <div class="img"><img src="' . $images[0] . '" alt="img"></div>
        <div class="info">
          <div class="info-back" id="tex_contain">
                        <h2 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h2>
                        <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
          </div>
        </div></a></div>
                        ';
	} elseif ( $select_style == "circle" && $circle == "circle2" ) {
		$output .= '
			<div class="kov-items circle effect2 left_to_right"><a href="#" >
				<div class="img"><img src="' . $images[0] . '" alt="img"></div>
				<div class="info" id="tex_contain">
                        <h2 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h2>
                        <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
				</div></a></div>
                        ';
	} elseif ( $select_style == "circle" && $circle == "circle3" ) {
		$output .= '
			<div class="kov-items circle effect3 left_to_right"><a href="#" >
				<div class="img"><img src="' . $images[0] . '" alt="img"></div>
				<div class="info" id="tex_contain">
                        <h2 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h2>
                        <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
				</div></a></div>
				';
	} elseif ( $select_style == "circle" && $circle == "circle4" ) {
		$output .= '
			<div class="kov-items circle effect3 left_to_right"><a href="#" >
				<div class="img"><img src="' . $images[0] . '" alt="img"></div>
				<div class="info" id="tex_contain">
                        <h2 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h2>
                        <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
				</div></a></div>
                        ';
	} elseif ( $select_style == "circle" && $circle == "circle5" ) {
		$output .= '
			<div class="kov-items circle effect5"><a href="#" >
				<div class="img"><img src="' . $images[0] . '" alt="img"></div>
				<div class="info">
				<div class="info-back" id="tex_contain">
                        <h2 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h2>
                        <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
				</div></div></a></div>
                        ';
	} elseif ( $select_style == "circle" && $circle == "circle6" || $circle == "circle7" || $circle == "circle8" || $circle == "circle9" || $circle == "circle10" || $circle == "circle11" || $circle == "circle12" || $circle == "circle13" || $circle == "circle14" || $circle == "circle15" || $circle == "circle16" || $circle == "circle17" || $circle == "circle18" || $circle == "circle19" || $circle == "circle20" || $circle == "circle21" || $circle == "circle22" ) {
		$output .= ' <h3> This circle Style Only For Pro Version. To Get Pro Version <a href="http://codecans.com/items/kobra-hover-effects-for-visual-composer-pro/">Click Here </a></h3>';
	}
	if ( $select_style == "square2" && $square2 == "style1" ) {
		$output .= '<div class="kov-items square effect15 top_to_bottom"><a href="#">
        <div class="img"><img src="' . $images[0] . '" alt="img"></div>
        <div class="info">
              <h3 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h3>
               <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
        </div></a></div>';
	}
	if ( $select_style == "square2" && $square2 == "style2" ) {
		$output .= '<div class="kov-items square effect2"><a href="#">
        <div class="img"><img src="' . $images[0] . '" alt="img"></div>
        <div class="info">
              <h3 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h3>
               <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
        </div></a></div>';
	}
	if ( $select_style == "square2" && $square2 == "style3" ) {
		$output .= '<div class="kov-items square effect3 bottom_to_top"><a href="#">
        <div class="img"><img src="' . $images[0] . '" alt="img"></div>
        <div class="info">
              <h3 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h3>
               <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
        </div></a></div>';
	}
	if ( $select_style == "square2" && $square2 == "style4" ) {
		$output .= '<div class="kov-items square effect4"><a href="#">
        <div class="img"><img src="' . $images[0] . '" alt="img"></div>
        <div class="mask1"></div>
        <div class="mask2"></div>
        <div class="info">
              <h3 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h3>
               <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
        </div></a></div>';
	}
	if ( $select_style == "square2" && $square2 == "style5" ) {
		$output .= '<div class="kov-items square effect5 left_to_right"><a href="#">
        <div class="img"><img src="' . $images[0] . '" alt="img"></div>
        <div class="info">
              <h3 style="font-size:' . $title_size . 'px; color:' . $title_color . ';">' . $title . '</h3>
               <p  style="font-size:' . $desc_size . 'px; color:' . $descr_color . ';">' . $descript . '</p>
        </div></a></div>';
	}

	$output .= '</div>';

	return $output;
}

add_shortcode( 'kobra_hover', 'kobra_hover_shortcode_function' );