<?php
if ( ! defined( 'ABSPATH' ) ) exit;
global $post, $wpdb;
$html       = '';
$prefix     = $wpdb->prefix;
$product_id = $post->ID;
$data_array = WP_Fundraising_Actions::wf_get_orders_ID_list_per_campaign();
$wf_roi = get_post_meta($product_id, '_wf_roi', true);

$args = array(
    'post_type'     => 'shop_order',
    'post_status'   => array('wc-completed','wc-on-hold'),
    'post__in'      => $data_array
);
$the_query = new WP_Query( $args );

if ( $the_query->have_posts() ) :
    
    ?>
    <div class="xs-backers-lsit-wraprer">
    <ul class="fundpress-backer-lsit">

    <?php
    while ( $the_query->have_posts() ) : $the_query->the_post();

        $post_id = get_the_ID();
        $order = new WC_Order($post_id);
        $price = $order->get_total();
        $price_roi = $price + ($price * $wf_roi)/100;

        $date=date_format($order->get_date_completed(),"d, F Y");
        $html .= '<li class="row xs-margin-0">';
        $html .= '<div class="row xs-margin-0 col-md-6 text-left">';

        $html .= '<div class="xs-avatar full-round">';
        $html .= get_avatar( $order->get_billing_email(), 100 );
        $html .= '</div>';

        $html .= '<div class="fundpress-backer-info">';

        $contributor_show   = get_post_meta( $product_id, '_wf_mark_contributors_as_anonymous', true );
        $html .= '<h4 class="color-green regular xs-mb-0">'.$date.'</h4>';
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
        if($order->get_total() != null){
            $html .= '<h4 class="color-green regular xs-mb-0">Return: '.wc_price($price_roi).'</h4>';
        }
        $html .= '</div>';
        $html .= '</li>';

    endwhile;
    wp_reset_postdata();

    $html .= '</ul></div>';
    ?>



<?php
else :
    $html .= esc_html__( 'Sorry, no backer for this campaign.','wp-fundraising' );
endif;

echo $html;