<?php
namespace Elementor;

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly


class how_it_works extends Widget_Base {

    public function get_name() {
        return 'how_it_works';
    }

    public function get_title() {
        return __('Appilo How It Works', 'appilo');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['ashelement-addons'];
    }

    protected function register_controls() {

        $this->start_controls_section(
            'about_box',
            [
                'label' => __('Intro List', 'appilo'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        //Repeater
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'icon',
            [
                'label' => __( 'Icon', 'appilo' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );
        $repeater->add_control(
            'title',
            [
                'label' => __( 'Title', 'appilo' ),
                'type' => Controls_Manager::TEXT,
                'label_block' => true,
                'default' =>  __('It Consultancy', 'appilo'),
            ]
        );
        $repeater->add_control(
            'description',
            [
                'label' => __( 'Description', 'appilo' ),
                'type' => Controls_Manager::TEXTAREA,
                'label_block' => true,
                'default' =>  __('ut labore et dolore magna aliqua. se ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.', 'appilo'),
            ]
        );
        $this->add_control(
            'box_list',
            [
                'label' => __( 'Service Box', 'appilo' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'prevent_empty' => false,
                'title_field' => '{{{ title }}}',
            ]
        );
        $this->end_controls_section();



        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'Style Section', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
			'feature_title_style',
			[
				'label' => __( 'Title Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'title_color',
            [
                'label' =>   esc_html__( 'Title Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-process-column .aplpg-headline h5' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'title_typography',
                'label' =>   esc_html__( 'Title Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-process-column .aplpg-headline h5',
            ]
        );
        $this->add_control(
			'desc_style',
			[
				'label' => __( 'Description Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
            'description_color',
            [
                'label' =>   esc_html__( 'description Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-process-column .aplpg-pera-txt p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            Group_Control_Typography::get_type(),
            [
                'name' => 'description_typography',
                'label' =>   esc_html__( 'description Typography', 'appilo' ),
                'selector' => '{{WRAPPER}} .aplpg-process-column .aplpg-pera-txt p',
            ]
        );

        $this->add_control(
			'icon_style',
			[
				'label' => __( 'Icon Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);

        $this->add_control(
            'icon_color',
            [
                'label' =>   esc_html__( 'Icon Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-process-content .aplpg-process-column .aplpg-icon-wrapper i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'icon_normal_color',
            [
                'label' =>   esc_html__( 'Icon Normal BG Color', 'appilo' ),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .aplpg-process-content .aplpg-process-column .aplpg-icon-wrapper i' => 'background: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'icon_bg',
                'label' => __( 'Icon Hover Background', 'appilo' ),
                'types' => [ 'gradient' ],
                'selector' => '{{WRAPPER}} .aplpg-process-content .aplpg-process-column .aplpg-icon-wrapper i::after',
            ]
        );

        $this->add_control(
			'box_style',
			[
				'label' => __( 'Box Style', 'appilo' ),
				'type' => \Elementor\Controls_Manager::HEADING,
				'separator' => 'before',
			]
		);
        $this->add_control(
			'box_padding',
			[
				'label' => __( 'Box Padding', 'appilo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .aplpg-process-content .aplpg-process-column' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'box_bg',
                'label' => __( 'Icon Hover Background', 'appilo' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .aplpg-process-content .aplpg-process-column',
            ]
        );
        $this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name' => 'box_border',
				'label' => __( 'Border', 'appilo' ),
				'selector' => '{{WRAPPER}} .aplpg-process-content .aplpg-process-column',
			]
		);
        $this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow',
				'label' => __( 'Box Shadow', 'appilo' ),
				'selector' => '{{WRAPPER}} .aplpg-process-content .aplpg-process-column',
			]
		);



        $this->end_controls_section();

    }

    protected function render() {

    $settings = $this->get_settings();


        echo ' <div class="aplpg-process-content">
                    <div class="row">';

        if ( $settings['box_list'] ) {
            foreach ($settings['box_list'] as $box) {

        echo '<div class="col-lg-4 col-md-6">
                            <div class="aplpg-process-column wow fadeInUp">
                                <div class="aplpg-icon-wrapper">';

                \Elementor\Icons_Manager::render_icon( $box['icon'], [ 'aria-hidden' => 'true' ] );

                echo'</div>
                    <div class="aplpg-headline">
                        <h5>'.$box['title'].'</h5>
                    </div>
                    <div class="aplpg-pera-txt">
                        <p>'.$box['description'].'</p>
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
Plugin::instance()->widgets_manager->register( new how_it_works );
?>