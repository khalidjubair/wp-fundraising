<?php

/* ---------------------------------------------------------
 * Filters
 *
 * Class for registering filters
  ---------------------------------------------------------- */

if ( ! defined( 'ABSPATH' ) ) exit;


// Single Campaign Page

if (!function_exists('wf_single_backers_count_text')) {
    function wf_single_backers_count_text()
    {
        return apply_filters('wf_single_backers_count_text', __('Backers', 'wp-fundraising'));
    }
}

if (!function_exists('wf_single_backers_tab_text')) {
    function wf_single_backers_tab_text()
    {
        return apply_filters('wf_single_backers_tab_text', __('Backers', 'wp-fundraising'));
    }
}

if (!function_exists('wf_single_update_tab_text')) {
    function wf_single_update_tab_text()
    {
        return apply_filters('wf_single_update_tab_text', __('Update', 'wp-fundraising'));
    }
}

if (!function_exists('wf_single_invest_now_button_text')) {
    function wf_single_invest_now_button_text()
    {
        return apply_filters('wf_single_invest_now_button_text', __('Invest Now', 'wp-fundraising'));
    }
}

if (!function_exists('wf_single_fund_goal_text')) {
    function wf_single_fund_goal_text()
    {
        return apply_filters('wf_single_fund_goal_text', __('Goal', 'wp-fundraising'));
    }
}

if (!function_exists('wf_single_fund_raised_percent_text')) {
    function wf_single_fund_raised_percent_text()
    {
        return apply_filters('wf_single_fund_raised_percent_text', __('Fund Raised', 'wp-fundraising'));
    }
}

if (!function_exists('wf_single_fund_raised_text')) {
    function wf_single_fund_raised_text()
    {
        return apply_filters('wf_single_fund_raised_text', __('Pledged', 'wp-fundraising'));
    }
}

if (!function_exists('wf_single_related_campaign_title')) {
    function wf_single_related_campaign_title()
    {
        return apply_filters(
            'wf_single_related_campaign_title',
            sprintf(
                '<h2 class="color-navy-blue">%s</h2><span class="xs-separetor dashed-separetor fundpress-separetor"></span>' ,
                __('Other Project', 'wp-fundraising')
            )
        );
    }
}

if (!function_exists('wf_single_related_campaign_description')) {
    function wf_single_related_campaign_description()
    {
        return apply_filters(
            'wf_single_related_campaign_description',
            sprintf(
                '<p>%s</p>' ,
                __('FundPress has built a platform focused on aiding entrepreneurs, startups, and companies raise capital from anyone.', 'wp-fundraising')
            )
        );
    }
}

if (!function_exists('wf_single_reward_estimated_delivery_text')) {
    function wf_single_reward_estimated_delivery_text()
    {
        return apply_filters(
            'wf_single_reward_estimated_delivery_text',
            sprintf(
                '<h5>%s</h5>' ,
                __('Estimated Delivery', 'wp-fundraising')
            )
        );
    }
}

if (!function_exists('wf_single_reward_ship_to_text')) {
    function wf_single_reward_ship_to_text()
    {
        return apply_filters(
            'wf_single_reward_ship_to_text',
            sprintf(
                '<h5>%s</h5>' ,
                __('Ship To', 'wp-fundraising')
            )
        );
    }
}




// Archive Campaign Page

if (!function_exists('wf_archive_backers_count_text')) {
    function wf_archive_backers_count_text()
    {
        return apply_filters('wf_archive_backers_count_text', __('Backers', 'wp-fundraising'));
    }
}

if (!function_exists('wf_archive_fund_goal_text')) {
    function wf_archive_fund_goal_text()
    {
        return apply_filters('wf_archive_fund_goal_text', __('Goal', 'wp-fundraising'));
    }
}

if (!function_exists('wf_archive_fund_raised_percent_text')) {
    function wf_archive_fund_raised_percent_text()
    {
        return apply_filters('wf_archive_fund_raised_percent_text', __('Fund Raised', 'wp-fundraising'));
    }
}

if (!function_exists('wf_archive_fund_raised_text')) {
    function wf_archive_fund_raised_text()
    {
        return apply_filters('wf_archive_fund_raised_text', __('Pledged', 'wp-fundraising'));
    }
}

if (!function_exists('wf_archive_days_remaining_text')) {
    function wf_archive_days_remaining_text()
    {
        if (wf_date_remaining()) {
            return apply_filters('wf_archive_days_remaining_text', __('Days to go', 'wp-fundraising'));
        }else{
            return apply_filters('wf_archive_days_remaining_text', __('', 'wp-fundraising'));
        }
    }
}



//Login & Signup Filter

if (!function_exists('wf_login_signup_modal_class')) {
    function wf_login_signup_modal_class()
    {
        return apply_filters('wf_login_signup_modal_class', 'bd-login-modal');
    }
}

if (!function_exists('wf_login_label')) {
    function wf_login_label()
    {
        return apply_filters('wf_login_label', __('Login', 'wp-fundraising'));
    }
}

if (!function_exists('wf_login_button_text')) {
    function wf_login_button_text()
    {
        return apply_filters('wf_login_button_text', __('login now', 'wp-fundraising'));
    }
}

if (!function_exists('wf_signup_label')) {
    function wf_signup_label()
    {
        return apply_filters('wf_signup_label', __('SignUp', 'wp-fundraising'));
    }
}

if (!function_exists('wf_signup_button_text')) {
    function wf_signup_button_text()
    {
        return apply_filters('wf_signup_button_text', __('Signup', 'wp-fundraising'));
    }
}


//Dashboard Filter
if (!function_exists('wf_add_new_campaign_text')) {
    function wf_add_new_campaign_text()
    {
        return apply_filters('wf_add_new_campaign_text', __('Add New Campaign', 'wp-fundraising'));
    }
}


if (!function_exists('wf_dashboard_fund_goal_text')) {
    function wf_dashboard_fund_goal_text()
    {
        return apply_filters('wf_dashboard_fund_goal_text', __('Goal', 'wp-fundraising'));
    }
}

if (!function_exists('wf_dashboard_fund_raised_percent_text')) {
    function wf_dashboard_fund_raised_percent_text()
    {
        return apply_filters('wf_dashboard_fund_raised_percent_text', __('Fund Raised', 'wp-fundraising'));
    }
}

if (!function_exists('wf_dashboard_fund_raised_text')) {
    function wf_dashboard_fund_raised_text()
    {
        return apply_filters('wf_dashboard_fund_raised_text', __('Pledged', 'wp-fundraising'));
    }
}

if (!function_exists('wf_dashboard_days_remaining_text')) {
    function wf_dashboard_days_remaining_text()
    {
        if (wf_date_remaining()) {
            return apply_filters('wf_dashboard_days_remaining_text', __('Days to go', 'wp-fundraising'));
        }else{
            return apply_filters('wf_dashboard_days_remaining_text', __('', 'wp-fundraising'));
        }
    }
}



// Donate Modal Filter

if (!function_exists('wf_donate_modal_class')) {
    function wf_donate_modal_class()
    {
        return apply_filters('wf_donate_modal_class', 'bd-donate-modal-lg');
    }
}
if (!function_exists('wf_donate_modal_heading')) {
    function wf_donate_modal_heading()
    {
        return apply_filters(
            'wf_donate_modal_heading',
            sprintf(
                '<div class="xs-heading xs-mb-30">
                    <h2 class="xs-title">%1s</h2>
                    <p class="small">%2s "<span class="color-green">%3s</span>" %4s<span class="color-green">%5s</span>.</p>
                    <span class="xs-separetor v2"></span>
                </div>' ,
                __('Make a donation', 'wp-fundraising'),
                __('To learn more about make donate charity with us visit our', 'wp-fundraising'),
                __('Contact us', 'wp-fundraising'),
                __('site. By calling ', 'wp-fundraising'),
                __('+44(0) 800 883 8450 ', 'wp-fundraising')
            )
        );
    }
}



if (!function_exists('wf_donate_now_button_text')) {
    function wf_donate_now_button_text()
    {
        return apply_filters('wf_donate_now_button_text', __('Donate Now', 'wp-fundraising'));
    }
}
//
//if (!function_exists('wf_login_label')) {
//    function wf_login_label()
//    {
//        return apply_filters('wf_login_label', __('Login', 'wp-fundraising'));
//    }
//}
//
//if (!function_exists('wf_login_button_text')) {
//    function wf_login_button_text()
//    {
//        return apply_filters('wf_login_button_text', __('login now', 'wp-fundraising'));
//    }
//}
//
//if (!function_exists('wf_signup_label')) {
//    function wf_signup_label()
//    {
//        return apply_filters('wf_signup_label', __('SignUp', 'wp-fundraising'));
//    }
//}
//
//if (!function_exists('wf_signup_button_text')) {
//    function wf_signup_button_text()
//    {
//        return apply_filters('wf_signup_button_text', __('Signup', 'wp-fundraising'));
//    }
//}