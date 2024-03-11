<?php

namespace UltimatePostKit\Admin;



if (!defined('ABSPATH')) {
    exit;
} // Exit if accessed directly

if (!function_exists('is_plugin_active')) {
    include_once(ABSPATH . 'wp-admin/includes/plugin.php');
}

class ModuleService {

    public static function get_widget_settings($callable) {

        $settings_fields = [
            'ultimate_post_kit_active_modules' => [
                [
                    'name'         => 'alex-grid',
                    'label'        => esc_html__('Alex Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/alex-grid/',
                    'video_url'    => 'https://youtu.be/criKI7Mm-5g',
                ],
                [
                    'name'         => 'alex-carousel',
                    'label'        => esc_html__('Alex Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/alex-carousel/',
                    'video_url'    => 'https://youtu.be/nmMajegrTiM',
                ],
                [
                    'name'         => 'alice-grid',
                    'label'        => esc_html__('Alice Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/alice-grid/',
                    'video_url'    => 'https://youtu.be/E7W5WSAvxbA',
                ],
                [
                    'name'         => 'alice-carousel',
                    'label'        => esc_html__('Alice Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/alice-carousel/',
                    'video_url'    => 'https://youtu.be/I0i6q45j6Ps',
                ],
                [
                    'name'         => 'alter-grid',
                    'label'        => esc_html__('Alter Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/alter-grid/',
                    'video_url'    => 'https://youtu.be/lJdoW-aPAe8',
                ],
                [
                    'name'         => 'alter-carousel',
                    'label'        => esc_html__('Alter Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/alter-carousel/',
                    'video_url'    => 'https://youtu.be/KInlL05e_lk',
                ],
                [
                    'name'         => 'amox-grid',
                    'label'        => esc_html__('Amox Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/amox-grid/',
                    'video_url'    => 'https://youtu.be/BeJ77OLErAk',
                ],
                [
                    'name'         => 'amox-carousel',
                    'label'        => esc_html__('Amox Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/amox-carousel/',
                    'video_url'    => 'https://youtu.be/3FoLaHsyB0g',
                ],
                [
                    'name'         => 'atlas-slider',
                    'label'        => esc_html__('Atlas Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/atlas-slider/',
                    'video_url'    => 'https://youtu.be/kM1G84F5Pb4',
                ],
                [
                    'name'         => 'author',
                    'label'        => esc_html__('Author', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/author/',
                    'video_url'    => 'https://youtu.be/rW8rTtw62ko',
                ],

                [
                    'name'         => 'banner',
                    'label'        => esc_html__('Banner', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "off",
                    'widget_type'  => 'free',
                    'content_type' => 'others new',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/banner/',
                    'video_url'    => '',
                ],

                [
                    'name'         => 'berlin-slider',
                    'label'        => esc_html__('Berlin Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/berlin-slider/',
                    'video_url'    => 'https://youtu.be/VErUARoiMKo',
                ],
                [
                    'name'         => 'buzz-list',
                    'label'        => esc_html__('Buzz List', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'list',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/buzz-list/',
                    'video_url'    => 'https://youtu.be/fxjL-ugL_Ls',
                ],
                [
                    'name'         => 'buzz-list-carousel',
                    'label'        => esc_html__('Buzz List Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/buzz-list-carousel/',
                    'video_url'    => 'https://youtu.be/fxjL-ugL_Ls',
                ],
                [
                    'name'         => 'camux-slider',
                    'label'        => esc_html__('Camux Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/camux-slider/',
                    'video_url'    => '',
                ],
                [
                    'name'         => 'classic-list',
                    'label'        => esc_html__('Classic List', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'list',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/classic-list/',
                    'video_url'    => 'https://youtu.be/A6z4z_Ki1kw',
                ],
                [
                    'name'         => 'crystal-slider',
                    'label'        => esc_html__('Crystal Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/crystal-slider/',
                    'video_url'    => 'https://youtu.be/wZNw_prt-uI',
                ],
                [
                    'name'         => 'carbon-slider',
                    'label'        => esc_html__('Carbon Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/carbon-slider/',
                    'video_url'    => 'https://youtu.be/1NNnJRZxxpc',
                ],
                [
                    'name'         => 'elite-grid',
                    'label'        => esc_html__('Elite Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/elite-grid/',
                    'video_url'    => 'https://youtu.be/J0AfZvRWClw',
                ],
                [
                    'name'         => 'elite-carousel',
                    'label'        => esc_html__('Elite Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/elite-carousel/',
                    'video_url'    => 'https://youtu.be/iod230fVndQ',
                ],
                [
                    'name'         => 'exotic-list',
                    'label'        => esc_html__('Exotic List', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'list new',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/exotic-list/',
                    'video_url'    => '',
                ],
                [
                    'name'         => 'fanel-list',
                    'label'        => esc_html__('Fanel List', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'list',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/fanel-list/',
                    'video_url'    => 'https://youtu.be/nGAoLOoNYk4',
                ],
                [
                    'name'         => 'featured-list',
                    'label'        => esc_html__('Featured List', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'list',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/featured-list/',
                    'video_url'    => 'https://youtu.be/Q-Pm-6Kkmr4',
                ],
                [
                    'name'         => 'forbes-tabs',
                    'label'        => esc_html__('Forbes Tabs', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'tabs',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/forbes-tabs/',
                    'video_url'    => 'https://youtu.be/lc0WNMtjP_k',
                ],
                [
                    'name'         => 'foxico-slider',
                    'label'        => esc_html__('Foxico Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/foxico-slider/',
                    'video_url'    => '',
                ],
                [
                    'name'         => 'grove-timeline',
                    'label'        => esc_html__('Grove Timeline', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'timeline',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/grove-timeline/',
                    'video_url'    => 'https://youtu.be/FPkHDXCMrjk',
                ],
                [
                    'name'         => 'hansel-slider',
                    'label'        => esc_html__('Hansel Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/hansel-slider/',
                    'video_url'    => 'https://youtu.be/tC7WGeMQkSQ',
                ],
                [
                    'name'         => 'harold-list',
                    'label'        => esc_html__('Harold List', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'list',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/harold-list/',
                    'video_url'    => 'https://youtu.be/gmMpNuw4LD8',
                ],
                [
                    'name'         => 'harold-carousel',
                    'label'        => esc_html__('Harold List carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/harold-carousel/',
                    'video_url'    => 'https://youtu.be/M9GruY3beAk',
                ],
                [
                    'name'         => 'hazel-grid',
                    'label'        => esc_html__('Hazel Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/hazel-grid/',
                    'video_url'    => 'https://youtu.be/Uy_rOg8lQJM',
                ],
                [
                    'name'         => 'hazel-carousel',
                    'label'        => esc_html__('Hazel Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/hazel-carousel/',
                    'video_url'    => 'https://youtu.be/N1f6AanD3gM',
                ],
                [
                    'name'         => 'holux-tabs',
                    'label'        => esc_html__('Holux Tabs', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'tabs',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/holux-tabs/',
                    'video_url'    => 'https://youtu.be/P-y7v3RRP1M',
                ],
                [
                    'name'         => 'iconic-slider',
                    'label'        => esc_html__('Iconic Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "off",
                    'widget_type'  => 'pro',
                    'content_type' => 'slider new',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/iconic-slider/',
                    'video_url'    => '',
                ],
                [
                    'name'         => 'kalon-grid',
                    'label'        => esc_html__('Kalon Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/kalon-grid/',
                    'video_url'    => 'https://youtu.be/sxePbXHbVdw',
                ],
                [
                    'name'         => 'kalon-carousel',
                    'label'        => esc_html__('Kalon Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/kalon-carousel/',
                    'video_url'    => 'https://youtu.be/zTS25x7KWTA',
                ],
                [
                    'name'         => 'maple-grid',
                    'label'        => esc_html__('Maple Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/maple-grid/',
                    'video_url'    => 'https://youtu.be/teraPP36sgQ',
                ],
                [
                    'name'         => 'maple-carousel',
                    'label'        => esc_html__('Maple Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/maple-carousel/',
                    'video_url'    => 'https://youtu.be/h9KTG-DIbm4',
                ],
                [
                    'name'         => 'news-ticker',
                    'label'        => esc_html__('News Ticker', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/news-ticker/',
                    'video_url'    => 'https://youtu.be/xiKwQActvwk',
                ],
                [
                    'name'         => 'newsletter',
                    'label'        => esc_html__('Newsletter', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/newsletter/',
                    'video_url'    => 'https://youtu.be/8ZgQVoSPEyw',
                ],
                [
                    'name'         => 'noxe-slider',
                    'label'        => esc_html__('Noxe Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/noxe-slider/',
                    'video_url'    => 'https://youtu.be/CyhG4NK8_lo',
                ],
                [
                    'name'         => 'optick-slider',
                    'label'        => esc_html__('Optick Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/optick-slider/',
                    'video_url'    => 'https://youtu.be/gqTNcaH7Qy4',
                ],
                [
                    'name'         => 'timeline',
                    'label'        => esc_html__('Oras Timeline', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'timeline',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/timeline/',
                    'video_url'    => 'https://youtu.be/kggB0k9WJ1U',
                ],
                [
                    'name'         => 'paradox-slider',
                    'label'        => esc_html__('Paradox Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/paradox-slider/',
                    'video_url'    => 'https://youtu.be/2ZYnLz__uA4',
                ],
                [
                    'name'         => 'pholox-slider',
                    'label'        => esc_html__('Pholox Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/pholox-slider/',
                    'video_url'    => '',
                ],
                [
                    'name'         => 'pixina-grid',
                    'label'        => esc_html__('Pixina Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/pixina-grid/',
                    'video_url'    => 'https://youtu.be/oCPys6NyKDo',
                ],
                [
                    'name'         => 'pixina-carousel',
                    'label'        => esc_html__('Pixina Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/pixina-carousel/',
                    'video_url'    => 'https://youtu.be/ebSyK__cMhw',
                ],
                [
                    'name'         => 'post-accordion',
                    'label'        => esc_html__('Accordion', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/post-accordion/',
                    'video_url'    => 'https://youtu.be/lxGeTthE_lA',
                ],
                [
                    'name'         => 'post-calendar',
                    'label'        => esc_html__('Post Calendar', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/post-calendar/',
                    'video_url'    => 'https://youtu.be/_MhyGAgj8yw',
                ],
                [
                    'name'         => 'post-category',
                    'label'        => esc_html__('Category', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/post-category/',
                    'video_url'    => 'https://youtu.be/3S5hRqxTDTo',
                ],
                [
                    'name'         => 'category-carousel',
                    'label'        => esc_html__('Category Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/category-carousel/',
                    'video_url'    => '',
                ],
                [
                    'name'         => 'ramble-grid',
                    'label'        => esc_html__('Ramble Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/ramble-grid/',
                    'video_url'    => 'https://youtu.be/mKdxqk3M2qI',
                ],
                [
                    'name'         => 'ramble-carousel',
                    'label'        => esc_html__('Ramble Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/ramble-carousel/',
                    'video_url'    => 'https://youtu.be/vv10IM0pCHA',
                ],
                [
                    'name'         => 'reading-progress',
                    'label'        => esc_html__('Reading Progress Bar', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/reading-progress/',
                    'video_url'    => 'https://youtu.be/9N_2WDXUjo0',
                ],
                [
                    'name'         => 'reading-progress-circle',
                    'label'        => esc_html__('Reading Progress Circle', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/reading-progress-circle/',
                    'video_url'    => '',
                ],
                [
                    'name'         => 'recent-comments',
                    'label'        => esc_html__('Recent Comments', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/recent-comments/',
                    'video_url'    => 'https://youtu.be/_RFwr9Lx7Gs',
                ],
                [
                    'name'         => 'scott-list',
                    'label'        => esc_html__('Scott List', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'list',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/scott-list/',
                    'video_url'    => 'https://youtu.be/twaysnvoWkM',
                ],
                [
                    'name'         => 'skide-slider',
                    'label'        => esc_html__('Skide Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/skide-slider/',
                    'video_url'    => 'https://youtu.be/7-7PbdFi_Ks',
                ],
                [
                    'name'         => 'soft-timeline',
                    'label'        => esc_html__('Soft Timeline', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'timeline',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/soft-timeline/',
                    'video_url'    => 'https://youtu.be/5scXg5bsGDc',
                ],
                [
                    'name'         => 'sline-slider',
                    'label'        => esc_html__('Sline Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'slider',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/sline-slider/',
                    'video_url'    => '',
                ],
                [
                    'name'         => 'stone-hover',
                    'label'        => esc_html__('Stone Hover', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "off",
                    'widget_type'  => 'pro',
                    'content_type' => 'others new',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/stone-hover/',
                    'video_url'    => '',
                ],
                [
                    'name'         => 'snog-slider',
                    'label'        => esc_html__('Snog Slider', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "off",
                    'widget_type'  => 'free',
                    'content_type' => 'slider new',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/snog-slider/',
                    'video_url'    => '',
                ],
                [
                    'name'         => 'snap-timeline',
                    'label'        => esc_html__('Snap Timeline', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'timeline',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/snap-timeline/',
                    'video_url'    => 'https://youtu.be/KCBjzS_1lE0',
                ],
                [
                    'name'         => 'static-social-count',
                    'label'        => esc_html__('Social Count(Static)', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/static-social-count/',
                    'video_url'    => 'https://youtu.be/MmbdYPee9qw',
                ],
                [
                    'name'         => 'social-share',
                    'label'        => esc_html__('Social Share', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/social-share/',
                    'video_url'    => 'https://youtu.be/77S087dzK3Q',
                ],
                [
                    'name'         => 'social-link',
                    'label'        => esc_html__('Social Link', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/social-link/',
                    'video_url'    => 'https://youtu.be/MCH3v8iwrTw',
                ],
                [
                    'name'         => 'tag-cloud',
                    'label'        => esc_html__('Tag Cloud', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'others',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/tag-cloud/',
                    'video_url'    => 'https://youtu.be/DLl_bqh_E2M',
                ],
                [
                    'name'         => 'tiny-list',
                    'label'        => esc_html__('Tiny List', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'list',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/tiny-list/',
                    'video_url'    => 'https://youtu.be/PZlXofIOy68',
                ],
                [
                    'name'         => 'wixer-grid',
                    'label'        => esc_html__('Wixer Grid', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'grid',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/wixer-grid/',
                    'video_url'    => 'https://youtu.be/MeR0jXdpYc0',
                ],
                [
                    'name'         => 'wixer-carousel',
                    'label'        => esc_html__('Wixer Carousel', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'carousel',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/wixer-carousel/',
                    'video_url'    => 'https://youtu.be/NxelaRS-a9o',
                ],
                [
                    'name'         => 'welsh-list',
                    'label'        => esc_html__('Welsh List', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'pro',
                    'content_type' => 'list',
                    'demo_url'     => 'https://bdthemes.net/demo/wordpress/ultimate-post-kit/demo/welsh-list/',
                    'video_url'    => '',
                ]
            ],

            'ultimate_post_kit_elementor_extend' => [
                [
                    'name'         => 'animations',
                    'label'        => esc_html__('Animations', 'ultimate-post-kit'),
                    'type'         => 'checkbox',
                    'default'      => "on",
                    'widget_type'  => 'free',
                    'content_type' => 'new',
                    'demo_url'     => '',
                    'video_url'    => '',
                ]
            ],
            'ultimate_post_kit_api_settings'     => [
                [
                    'name'  => 'mailchimp_group_start',
                    'label' => esc_html__('Mailchimp Access', 'ultimate-post-kit'),
                    'desc'  => __('Go to your Mailchimp > Website > Domains > Extras > API Keys (<a href="http://prntscr.com/xqo78x" target="_blank">http://prntscr.com/xqo78x</a>) then create a key and paste here. You will get the audience ID here: <a href="http://prntscr.com/xqnt5z" target="_blank">http://prntscr.com/xqnt5z</a>', 'ultimate-post-kit'),
                    'type'  => 'start_group',

                ],
                [
                    'name'              => 'mailchimp_api_key',
                    'label'             => esc_html__('Mailchimp API Key', 'ultimate-post-kit'),
                    'placeholder'       => '',
                    'type'              => 'text',
                    'sanitize_callback' => 'sanitize_text_field'

                ],
                [
                    'name'              => 'mailchimp_list_id',
                    'label'             => esc_html__('Audience ID', 'ultimate-post-kit'),
                    'placeholder'       => '',
                    'type'              => 'text',
                    'sanitize_callback' => 'sanitize_text_field'

                ],
                [
                    'name' => 'mailchimp_group_end',
                    'type' => 'end_group',
                ],

            ],
            'ultimate_post_kit_other_settings'   => [

                [
                    'name'  => 'enable_category_image_group_start',
                    'label' => esc_html__('Category Image', 'ultimate-post-kit'),
                    'desc'  => __('Display exclusive category avatar by turning on this switcher. The Category image will be visible for all post widgets if the category is turned on from the widget controls.', 'ultimate-post-kit'),
                    'type'  => 'start_group',
                    // 'content_type' => 'new',
                ],

                [
                    'name'    => 'category_image',
                    'label'   => esc_html__('Category Image', 'ultimate-post-kit'),
                    'type'    => 'checkbox',
                    'default' => "off",
                    'widget_type' => 'free',
                    // 'demo_url'  => 'https://elementpack.pro/knowledge-base/how-to-use-element-pack-template-library/',
                    // 'video_url' => 'https://youtu.be/IZw_iRBWbC8',
                ],

                [
                    'name' => 'category_image_group_end',
                    'type' => 'end_group',
                ],

                [
                    'name'         => 'duplicator_group_start',
                    'label'        => esc_html__('Duplicator', 'ultimate-post-kit'),
                    'desc'         => __('Just hit the button below to enable the duplicator. It can duplicate anything like posts,pages and elementor templates. A masterclass duplication with just one click.', 'ultimate-post-kit'),
                    'type'         => 'start_group',
                    'content_type' => 'new',
                ],

                [
                    'name'        => 'duplicator',
                    'label'       => esc_html__('Duplicator', 'ultimate-post-kit'),
                    'type'        => 'checkbox',
                    'default'     => 'off',
                    'widget_type' => 'free',
                    'demo_url'    => 'https://www.ultimatepostkit.pro/knowledge-base/how-to-use-ultimate-post-kit-duplicator/',
                    'video_url'   => '',
                ],

                [
                    'name' => 'duplicator_group_end',
                    'type' => 'end_group',
                ],

                [
                    'name'  => 'live_copy_group_start',
                    'label' => esc_html__('Live Copy or Paste', 'ultimate-post-kit'),
                    'desc'  => __('Live copy is a copy feature that allow you to copy and paste content from one domain to another. For example you can copy demo content directly from our demo website.', 'ultimate-post-kit'),
                    'type'  => 'start_group',
                    'content_type' => 'new',
                ],

                [
                    'name'      => 'live-copy',
                    'label'     => esc_html__('Live Copy/Paste', 'ultimate-post-kit'),
                    'type'      => 'checkbox',
                    'default'   => 'off',
                    'widget_type' => 'free',
                    'demo_url'  => 'https://www.ultimatepostkit.pro/knowledge-base/how-to-use-live-copy-option/',
                    'video_url' => 'https://youtu.be/jOdWVw2TCmo',

                ],

                [
                    'name' => 'live_copy_group_end',
                    'type' => 'end_group',
                ],

                [
                    'name'  => 'enable_video_link_group_start',
                    'label' => esc_html__('Video Link Meta', 'ultimate-post-kit'),
                    'desc'  => __('If you need to display video features in your website so please enable this option.', 'ultimate-post-kit'),
                    'type'  => 'start_group',
                    'content_type' => 'new',
                ],

                [
                    'name'    => 'video_link',
                    'label'   => esc_html__('Video Link', 'ultimate-post-kit'),
                    'type'    => 'checkbox',
                    'default' => "off",
                    'widget_type' => 'free',
                ],

                [
                    'name' => 'video_link_group_end',
                    'type' => 'end_group',
                ]
            ]
        ];

        $settings                    = [];
        $settings['settings_fields'] = $settings_fields;

        return $callable($settings);
    }

    private static function _is_plugin_installed($plugin, $plugin_path) {
        $installed_plugins = get_plugins();
        return isset($installed_plugins[$plugin_path]);
    }

    public static function is_module_active($module_id, $options, $module_path = BDTUPK_MODULES_PATH) {
        if (!isset($options[$module_id])) {
            if (file_exists($module_path . $module_id . '/module.info.php')) {
                $module_data = require $module_path . $module_id . '/module.info.php';
                return $module_data['default_activation'];
            }
        } else {
            return $options[$module_id] == 'on';
        }
    }

    public static function is_plugin_active($plugin_path) {
        if ($plugin_path) {
            return is_plugin_active($plugin_path);
        }
    }

    public static function has_module_style($module_id, $module_path = BDTUPK_MODULES_PATH) {
        if (file_exists($module_path . $module_id . '/module.info.php')) {
            $module_data = require $module_path . $module_id . '/module.info.php';

            if (isset($module_data['has_style'])) {
                return $module_data['has_style'];
            }
        }
    }

    public static function has_module_script($module_id, $module_path = BDTUPK_MODULES_PATH) {
        if (file_exists($module_path . $module_id . '/module.info.php')) {
            $module_data = require $module_path . $module_id . '/module.info.php';

            if (isset($module_data['has_script'])) {
                return $module_data['has_script'];
            }
        }
    }
}
