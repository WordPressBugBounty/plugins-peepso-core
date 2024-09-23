<?php
if (!class_exists('PeepSo3_Search_Adapter')) {
    require_once(dirname(__FILE__) . '/search_adapter.php');
    //new PeepSoError('Autoload issue: PeepSo3_Search_Adapter not found ' . __FILE__);
}

if (!class_exists('PeepSo3_Search_Adapter_WP')) {
    require_once(dirname(__FILE__) . '/search_adapter_wp.php');
    //new PeepSoError('Autoload issue: PeepSo3_Search_Adapter_WP not found ' . __FILE__);
}

class PeepSo3_Search_Adapter_WP_AwesomeSupport_Documentation extends PeepSo3_Search_Adapter_WP
{
}

add_action('init', function(){

    if(class_exists('WPAS_Documentation')) {
        new PeepSo3_Search_Adapter_WP_AwesomeSupport_Documentation(
            'documentation',
            __('Documentation', 'peepso-core'),
            '/?post_type=documentation&s='
        );
    }

});