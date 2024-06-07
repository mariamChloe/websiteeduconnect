<?php

namespace Elementor;

if (!defined('ABSPATH')) exit; // Exit if accessed directly

class bx_service extends Widget_Base
{

    public function get_name()
    {
        return 'bx-service';
    }

    public function get_title()
    {
        return __('Business Expert Service', 'appilo');
    }

    public function get_categories()
    {
        return ['appilo-core'];
    }

    public function get_icon()
    {
        return 'eicon-sitemap';
    }

    public function render_plain_content($instance = [])
    {
    }

    protected function register_controls()
    {


        $this->start_controls_section(
            'services',
            [
                'label' => __('Service', 'appilo'),
                'tab' => Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new Repeater();
        $repeater->add_control(
            'img',
            [
                'label' => __( 'Choose Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __('Icon', 'appilo'),
                'type' => Controls_Manager::ICONS,
                'default' => [
                    'value' => 'flaticon-light-bulb',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => __('Title', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Banking Solution', 'appilo'),
            ]
        );
        $repeater->add_control(
            'info',
            [
                'label' => __('Info', 'appilo'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.', 'appilo'),
            ]
        );
        $repeater->add_control(
            'read-more',
            [
                'label' => __('Read More', 'appilo'),
                'type' => Controls_Manager::TEXT,
                'default' => __('Read More', 'appilo'),
            ]
        );
        $repeater->add_control(
            'service_url', [
                'label' => __('Link', 'appilo'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'service_list',
            [
                'label' => __('Service List', 'appilo'),
                'type' => Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'title' => 'Banking Solution',
                    ],
                    [
                        'title' => 'Envestment Plan',
                    ],
                    [
                        'title' => 'Taxes Planning',
                    ],
                    [
                        'title' => 'Banking Solution',
                    ],

                ],
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'section_style',
            [
                'label' => __('Style', 'appilo'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'title_color',
            [
                'label' => __('Title Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-service-content .apbc-headline h5' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_fonts',
                'label' => __('Title Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-service-content .apbc-headline h5',
            ]
        );
        $this->add_control(
            'info_color',
            [
                'label' => __('Info Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-service-content .apbc-pera-txt p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'info_fonts',
                'label' => __('Info Typography', 'appilo'),
                'selector' => '{{WRAPPER}} .apbc-service-content .apbc-pera-txt p',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'icon_style',
            [
                'label' => __( 'Icon Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcnt');
        $this->start_controls_tab(
            'icon_normal',
            [
                'label' => esc_html__( 'Normal', 'xltab' ),
            ]
        );
        $this->add_control(
            'icon-color',
            [
                'label' => __('Icon Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-service-slider .apbc-service-single .apbc-icon-wrapper i' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'icon-bg',
            [
                'label' => __('Icon Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-service-slider .apbc-service-single .apbc-icon-wrapper i' => 'background-color: {{VALUE}}',
                ],
            ]
        );

        $this->end_controls_tab();
        $this->start_controls_tab(
            'icon_hover',
            [
                'label' => esc_html__( 'Hover', 'xltab' ),
            ]
        );$this->add_control(
        'icon-hover-color',
        [
            'label' => __('Icon Hover Color', 'appilo'),
            'type' => Controls_Manager::COLOR,
            'selectors' => [
                '{{WRAPPER}} .apbc-service-slider .apbc-service-single:hover .apbc-icon-wrapper i' => 'color: {{VALUE}}',
            ],
        ]
    );
        $this->add_control(
            'icon-hover-bg',
            [
                'label' => __('Icon Hover Background', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-service-slider .apbc-service-single:hover .apbc-icon-wrapper i' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();


        $this->start_controls_section(
            'btn-style',
            [
                'label' => __( 'Read More Style', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->start_controls_tabs('tpcndfet');

        $this->start_controls_tab(
            'tp12',
            [
                'label' => esc_html__( 'Normal', 'xltab' ),
            ]
        );
        $this->add_control(
            'btn_color',
            [
                'label' => __('Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-service-slider .apbc-service-single .apbc-service-content .apbc-readmore-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();

        $this->start_controls_tab(
            'tp22',
            [
                'label' => esc_html__( 'Hover', 'xltab' ),
            ]
        );
        $this->add_control(
            'btn_hover_color',
            [
                'label' => __('Hover Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-service-slider .apbc-service-single:hover .apbc-readmore-btn' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->end_controls_tab();
        $this->end_controls_tabs();
        $this->end_controls_section();
        $this->start_controls_section(
            'slider_navigate_btn',
            [
                'label' => __( 'Slide Button', 'webangon' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'inactive_color',
            [
                'label' => __('Inactive Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-service-slider .slick-dots li button' => 'background-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'active_color',
            [
                'label' => __('Active Color', 'appilo'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .apbc-service-slider .slick-dots li.slick-active button' => 'background-color: {{VALUE}}',
                ],
            ]
        );


        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();

        echo '<div class="apbc-service-slider">';

        if ($settings['service_list']) {
            foreach ($settings['service_list'] as $service) {

                echo '<div class="apbc-service-single">
                    <div class="apbc-img-wrapper">
                        '. get_that_image($service['img']) .'
                    </div>
                    <div class="apbc-icon-wrapper">';
                Icons_Manager::render_icon($service['icon'], ['aria-hidden' => 'true']);
                echo '</div>
                    <div class="apbc-service-content">
                        <div class="apbc-headline">
                            <a ' . get_that_link($service['service_url']) . '><h5>' . $service['title'] . '</h5></a>
                        </div>
                        <div class="apbc-pera-txt">
                            <p>' . $service['info'] . '</p>
                        </div>
                        <div class="apbc-readmore-btn">
                            <a ' . get_that_link($service['service_url']) . '>' . $service['read-more'] . '<i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>';
            }
        }
        echo '</div>';


    }



    protected function content_template()
    {
    }

}

Plugin::instance()->widgets_manager->register(new bx_service());