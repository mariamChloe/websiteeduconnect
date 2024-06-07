<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class it_counter extends Widget_Base {

   public function get_name() {
      return 'it-counter';
   }

   public function get_title() {
      return __( 'IT Counter', 'appilo' );
   }
    public function get_categories() {
		return [ 'appilo-core' ];
	}
   public function get_icon() {
        return 'eicon-number-field';
   }

    protected function register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'counter_title', [
                'label' => __( 'Title', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'Satisfied Client' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_number', [
                'label' => __( 'Number', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '1200' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'counter_number_extend', [
                'label' => __( 'Number Unit', 'appilo' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( '+' , 'appilo' ),
                'label_block' => true,
            ]
        );
        $repeater->add_control(
            'icon_img', [
                'label' => __( 'Image', 'appilo' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' =>  get_template_directory_uri(). '/img/combine/ach-icon1.png',
                ],
            ]
        );
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => '',
                    'library' => '',
                ],
            ]
        );
        $this->add_control(
            'list',
            [
                'label' => __( 'Counter List', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'counter_number' => __( '1200', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '845', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '978', 'appilo' ),
                    ],
                    [
                        'counter_number' => __( '647', 'appilo' ),
                    ],


                ],
                'title_field' => '{{{ counter_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'stya',
            [
                'label' => __( 'Style', 'appilo' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'title_color',
            [
                'label' => __( 'Title Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-achivement-innerbox .it-up-achivement-text p' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'title_typo',
                'label' => __( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-achivement-innerbox .it-up-achivement-text p',
            ]
        );
        $this->add_control(
            'i_color',
            [
                'label' => __( 'Icon Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-achivement-innerbox i' => 'color: {{VALUE}}',
                    '{{WRAPPER}} .it-up-achivement-innerbox svg' => 'fill: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'icon_size',
            [
                'label' => __( 'Icon Size', 'appilo' ),
                'type' => Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'default' => [
                    'unit' => 'px',
                    'size' => 50,
                ],
                'selectors' => [
                    '{{WRAPPER}} .it-up-achivement-innerbox i' => 'font-size: {{SIZE}}{{UNIT}};',
                    '{{WRAPPER}} .it-up-achivement-innerbox svg' => 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'number_color',
            [
                'label' => __( 'Number Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-achivement-innerbox .it-up-achivement-text h3' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'number_typo',
                'label' => __( 'Number Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-achivement-innerbox .it-up-achivement-text h3',
            ]
        );
        $this->add_control(
            'number_suff_color',
            [
                'label' => __( 'Suffix Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .it-up-achivement-innerbox .it-up-achivement-text strong' => 'color: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'inner_padding',
            [
                'label' => __( 'Inner Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .it-up-achivement-innerbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_control(
            'mbca',
            [
                'label' => __( 'Border Color', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bga_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-up-achivement-innerbox .inner-border',
            ]
        );
        $this->add_control(
            'mbcaa',
            [
                'label' => __( 'Border Dot', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_baga_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-up-achivement-innerbox .inner-border:before, {{WRAPPER}} .it-up-achivement-innerbox .inner-border:after',
            ]
        );
        $this->add_responsive_control(
            'section_padding',
            [
                'label' => __( 'Section Padding', 'appilo' ),
                'type' => Controls_Manager::DIMENSIONS,
                'size_units' => [ 'px', '%', 'em' ],
                'selectors' => [
                    '{{WRAPPER}} .it-up-achivement-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Box_Shadow::get_type(),
            [
                'name' => 'section_shadow',
                'label' => __( 'Shadow', 'appilo' ),
                'selector' => '{{WRAPPER}} .it-up-achivement-innerbox',
            ]
        );
        $this->add_control(
            'mbc',
            [
                'label' => __( 'Box Background', 'appilo' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'main_bg_color',
                'label' => __( 'Main BG', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'show_label' => true,
                'separator' => 'after',
                'selector' => '{{WRAPPER}} .it-up-achivement-innerbox',
            ]
        );
        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();

    echo '<div  class="it-up-achivement-content">
				<div class="row">';
            if ( $settings['list'] ) {
                foreach ($settings['list'] as $item) {
                    echo'<div class="col-lg-3 col-md-6" id="counter-dynamic' . $item['_id'] . '">
						<div class="it-up-achivement-innerbox position-relative text-center">
							<span class="inner-border"></span>
							<div class="it-up-achivement-icon">';
                            if ($item['icon']) {
                                \Elementor\Icons_Manager::render_icon($item['icon'], ['aria-hidden' => 'true']);
                            }
                            if ($item['icon_img']['url']){
                                     echo '<img src="' . $item['icon_img']['url'] . '" alt>';
                            }
                            echo '</div>
							<div class="it-up-achivement-text pera-content headline-1">
								<h3 class="counter">' . $item['counter_number'] . '</h3><strong>' . $item['counter_number_extend'] . '</strong>
								<p>' . $item['counter_title'] . '</p>
							</div>
						</div>
					</div>';
                }
            }
                echo'</div>
			</div>';
    }



    protected function content_template() {}

   public function render_plain_content( $instance = [] ) {}

}
Plugin::instance()->widgets_manager->register( new it_counter );
?>