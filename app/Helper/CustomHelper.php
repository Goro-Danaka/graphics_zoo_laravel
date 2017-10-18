<?php

namespace App\Helper;

 
class Custom {
    /**
     * @param int $user_id User-id
     * 
     * @return string
     */

    public static function getPortfolioFeaturedImageUrlUsingObj($portfolio) {
        $featured_image_url = '';

        if ($portfolio->image):            
            if ($portfolio->image_type == config('constants.PORTFOLIO_FEATURED_IMAGE')):
                $featured_image_url = config('constants.PORTFOLIO_IMAGE_URL'). '/' . $portfolio->id . '/' . $portfolio->image;
                return $featured_image_url;
            endif;            
        endif;

        return $featured_image_url;
    }

    public static function getPostFeaturedImageUrlUsingObj($post) {
        $featured_image_url = '';
        if ($post->image):
            $featured_image_url = config('constants.POST_IMAGE_URL') . '/' . $post->id . '/' . $post->image;
        endif;
        return $featured_image_url;
    }

    public static function checkActivePageFrontEnd($current_controller, $current_action, $controller_to_check, $action_to_check) {
        $active_item_class = '';
        if (strtolower($current_controller) == strtolower($controller_to_check)):
            if (strtolower($current_action) == strtolower($action_to_check)):
                $active_item_class = 'current-menu-item current_page_item';
            endif;
        endif;

        return $active_item_class;
    }
}