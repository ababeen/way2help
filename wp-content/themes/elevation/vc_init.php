<?php 

/**
 * Force Visual Composer to initialize as "built into the theme". This will hide certain tabs under the Settings->Visual Composer page
 */
if( function_exists('vc_set_as_theme') ){
	function elevation_vc_Set_As_Theme() {
		vc_set_as_theme(true);
	}
	//add_action( 'vc_before_init', 'elevation_vc_Set_As_Theme' );
}

if(!( function_exists('candor_framework_custom_css_classes_for_vc_row_and_vc_column') )){
	function candor_framework_custom_css_classes_for_vc_row_and_vc_column( $class_string, $tag ) {
		if ( $tag == 'vc_column' || $tag == 'vc_column_inner' ) {
			$class_string = preg_replace( '/vc_col-sm-(\d{1,2})/', 'col-md-$1', $class_string );
		}
		return $class_string;
	}
	add_filter( 'vc_shortcodes_css_class', 'candor_framework_custom_css_classes_for_vc_row_and_vc_column', 10, 2 );
}




/**
 * Add Pages to VC Template system
 */
// Homepage
if(!( function_exists('candor_framework_elevation_homepage_template') )){
function candor_framework_elevation_homepage_template($data){
    $template               = array();
    $template['name']       = 'Homepage';
    $template['content']    = <<<CONTENT
      
[vc_row full_width="stretch_row_content" css=".vc_custom_1482608653209{margin-top: -200px !important;}"][vc_column][rev_slider alias="homepage"][/vc_column][/vc_row][vc_row el_id="about"][vc_column][elevation_section_title title="Get Involved"][/vc_column][/vc_row][vc_row css=".vc_custom_1482608755583{margin-top: -50px !important;}"][vc_column][elevation_service_box service_box="%5B%7B%22service_icon%22%3A%22fa%20fa-bullhorn%22%2C%22title%22%3A%22Volunteering%22%2C%22service_content%22%3A%22Our%20volunteers%20believe%20that%20they%20have%20to%20work%20free.%20They%20always%20fell%20happy%20to%20do%20something%20for%20the%20world.%22%2C%22bg_color%22%3A%22%239b59b6%22%7D%2C%7B%22service_icon%22%3A%22fa%20fa-money%22%2C%22title%22%3A%22Donating%22%2C%22service_content%22%3A%22Value%20of%20life%20is%20not%20in%20its%20duration%2C%20but%20it%20depends%20on%20how%20much%20you%20have%20donated%20others%20for%20their%20lives.%22%2C%22bg_color%22%3A%22%23f39c12%22%7D%2C%7B%22service_icon%22%3A%22fa%20fa-bullhorn%22%2C%22title%22%3A%22Supporting%22%2C%22service_content%22%3A%22Care%20for%20each%20other%20can%20make%20happy%20together.%20Feeling%20careless%20to%20other%20people%2C%20they%20have%20also%20feel%20careless%20for%20you%22%2C%22bg_color%22%3A%22%2327ae60%22%7D%5D"][/vc_column][/vc_row][vc_row full_width="stretch_row_content" css=".vc_custom_1457368118536{padding-top: 0px !important;padding-right: 0px !important;padding-left: 0px !important;}"][vc_column][elevation_content_image_box right_image="1951"]Patriotism express our character and work. We don’t know that we love to sacrifice our life for decrease poverty and help children.
He was born in Thebes, was a disciple of Diogenes, and also knew Alexander. His father, Ascondas, was rich and left him two hundred talents. One day he went to see a tragedy of Euripides, he felt inspired to the emergence of Telephus.[/elevation_content_image_box][/vc_column][/vc_row][vc_row full_width="stretch_row_content" parallax="content-moving" parallax_image="2057" el_class="causes"][vc_column][elevation_urgent_causes_box subtitle=""][/vc_column][/vc_row][vc_row content_placement="middle" el_class="text-center" el_id="volunteer"][vc_column][elevation_section_title title="VOLUNTEERS" subtitle="WE ALWAYS FIGHT AGAINST POVERTY AND HELP THEM WHO LOSS EVERYTHING BY NATURAL DIGESTER. THERE ARE DIFFERENT TYPES OF HELP PROVIDE BY OUR VOLUNTEER MEMBERS."][elevation_team pppage="10"][/vc_column][/vc_row][vc_row full_width="stretch_row_content"][vc_column][elevation_featured_content image_1="2047" image_2="2048"][/vc_column][/vc_row][vc_row full_width="stretch_row_content" el_class="helps text-center" css=".vc_custom_1460833483742{padding-top: 150px !important;}"][vc_column][elevation_section_title title="DONATE FOR" subtitle="WE ALWAYS FIGHT AGAINST POVERTY AND HELP THEM WHO LOSS EVERYTHING BY NATURAL DIGESTER. THERE ARE DIFFERENT TYPES OF HELP PROVIDE BY OUR VOLUNTEER MEMBERS."][vc_row_inner][vc_column_inner width="1/4"][elevation_donate_box donate_icon="fa fa-child" donate_title="CHILD CARE"]Fund raising events are really a win-win situation, the public likes getting involved in activities that help others and worth causes or individuals benefit from the effort.[/elevation_donate_box][/vc_column_inner][vc_column_inner width="1/4"][elevation_donate_box donate_icon="fa fa-globe" donate_title="Clean World"]Fund raising events are really a win-win situation, the public likes getting involved in activities that help others and worth causes or individuals benefit from the effort.[/elevation_donate_box][/vc_column_inner][vc_column_inner width="1/4"][elevation_donate_box]Fund raising events are really a win-win situation, the public likes getting involved in activities that help others and worth causes or individuals benefit from the effort.[/elevation_donate_box][/vc_column_inner][vc_column_inner width="1/4"][elevation_donate_box donate_icon="fa fa-leaf" donate_title="TREE PLANTING"]Fund raising events are really a win-win situation, the public likes getting involved in activities that help others and worth causes or individuals benefit from the effort.[/elevation_donate_box][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row_content"][vc_column][elevation_content_video_box]The story of R. G. LeTourneau. As he succeeded, he increased his giving to the point where he was giving 90% of his income to the Lord’s work.
R. G. LeTourneau says, "I shovel out the money, and God shovels it back—but God has a bigger shovel". You may be thinking, “I could give 90% too if I was a multi-millionaire.” Maybe so, but LeTourneau didn’t start out wealthy.[/elevation_content_video_box][/vc_column][/vc_row][vc_row el_id="causes"][vc_column][elevation_section_title title="MAIN CAUSES" subtitle="WE HAVE ALWAYS SHOW SOME SERIOUS CAUSES FOR OUR PROGRAM. THIS FOLLOWING PROGRAM ARE NOW MAIN CAUSES FOR OUR VOLUNTEER MEMBER AND VOLUNTEER."][elevation_causes pppage="10" causes_category="Help"][/vc_column][/vc_row][vc_row full_width="stretch_row_content" el_id="gallery"][vc_column][elevation_home_gallery_box parallax_image="1959"]Feel our gallery photos and you can realize how poor people passing their life. This is high time for save both people and children to make our world happy.[/elevation_home_gallery_box][/vc_column][/vc_row][vc_row el_id="events"][vc_column][elevation_events][/vc_column][/vc_row][vc_row full_width="stretch_row" parallax="content-moving" parallax_image="2065" css=".vc_custom_1468823131772{padding-top: 0px !important;padding-right: 0px !important;padding-bottom: 0px !important;padding-left: 0px !important;}" el_class="partners-section"][vc_column][elevation_partners images="1966,1965,1964,1963,1962,2076,2075,2074,2073,2072"][/vc_column][/vc_row][vc_row el_id="news"][vc_column][elevation_section_title title="LATEST NEWS"][elevation_blog pppage="5"][/vc_column][/vc_row][vc_row full_width="stretch_row_content" parallax="content-moving" parallax_image="1969" el_class="testimonial-section" css=".vc_custom_1462124706881{background-color: #0a0a0a !important;background-position: center;background-repeat: no-repeat !important;background-size: cover !important;}" el_id="test"][vc_column][elevation_testimonial testimonial_posts="5"][/vc_column][/vc_row][vc_row el_id="contact"][vc_column][elevation_section_title title="CONTACT US" subtitle="WE ARE ALWAYS READY FOR YOU. CONTACT WITH US FOR ANY TYPE OF HELP. WE ALWAYS TRY OUR BEST FOR HELPING PEOPLE. DROP AN EMAIL OR DIRECTLY COME TO OUR OFFICE."][contact-form-7 id="3"][/vc_column][/vc_row][vc_row full_width="stretch_row_content" parallax="content-moving" el_class="subscribe"][vc_column][elevation_subscribe_block mailchimp_form_id="1971"][/vc_column][/vc_row][vc_row full_width="stretch_row" parallax="content-moving" parallax_image="2055" parallax_speed_bg="1" css=".vc_custom_1468757218721{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}"][vc_column][elevation_call_to_action call_to_action_volunteer_title="Help by Become a Volunteers" call_to_action_volunteer_url="https://jeweltheme.com" call_to_action_causes_url="https://jeweltheme.com" feature_right_box_content="

On the other hand, we denounce with right ous indignation and dislike mens who are so beguiled

"][/vc_column][/vc_row]


CONTENT;
    array_unshift($data, $template);
    return $data;
}

add_filter( 'vc_load_default_templates', 'candor_framework_elevation_homepage_template' );
}