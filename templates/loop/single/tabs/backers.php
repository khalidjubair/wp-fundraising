<?php
if ( ! defined( 'ABSPATH' ) ) exit;
global $post;
$html       = '';
$product_id = $post->ID;
$baker_list = WP_Fundraising_Actions::wf_get_orders_ID_list_per_campaign();

$wf_roi = get_post_meta($product_id, '_wf_roi', true);
$user = wp_get_current_user();
$author = get_the_author();
$allowed_roles = array('subscriber', 'administrator');
if( array_intersect($allowed_roles, $user->roles ) ) {
    if($user->user_login == $author || $user->roles == 'administrator'){
        $roi_show = true;
    }else{
        $roi_show = false;
    }
}

if(!empty($baker_list)):
    ?><div class="xs-backers-lsit-wraprer">
    <ul class="fundpress-backer-lsit"> <?php
    foreach($baker_list as $order){
        $price_roi = 0;
        $order = new WC_Order($order);
        $price = $order->get_total();
        $price_roi = $price + ($price * $wf_roi)/100;

        $html .= '<li class="row xs-margin-0">';
        $html .= '<div class="row xs-margin-0 col-md-6 text-left">';

        $html .= '<div class="xs-avatar full-round">';
        $html .= get_avatar( $order->get_billing_email(), 100 );
        $html .= '</div>';

        $html .= '<div class="fundpress-backer-info">';

        $contributor_show   = get_post_meta( $product_id, '_wf_mark_contributors_as_anonymous', true );
        $html .= '<h4 class="color-green regular xs-mb-0">'.date('F d, Y', strtotime($order->get_date_created())).'</h4>';
        if($contributor_show == 'yes'):
            $html .= '<h3 class="color-navy-blue semi-bold">'.esc_html__('Anonymous','wp-fundraising').'</h3>';
        else:
            $html .= '<h3 class="color-navy-blue semi-bold">'.$order->get_billing_first_name().' '.$order->get_billing_last_name().'</h3>';
        endif;

        if($order->get_total() != null){
            $html .= '<h4 class="color-green regular xs-mb-0">'.wc_price($order->get_total()).'</h4>';
        }
        $html .= '</div>';

        $html .= '</div>';
        $html .= '<div class="fundpress-backer-info pull-right">';

        if($roi_show && $order->get_total() != null){
            $html .= '<h4 class="color-green regular xs-mb-0">Return: '.wc_price($price_roi).'</h4>';
        }
        $html .= '</div>';
        $html .= '</li>';
    }

    $html .= '</ul></div>';
else:
    $html .= esc_html__( 'Sorry, no backer for this campaign.','wp-fundraising' );
endif;
echo $html;