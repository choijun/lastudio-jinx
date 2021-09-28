<?php

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

if(!function_exists('jinx_setup_customizer')){
    function jinx_setup_customizer( $args ){
        $args['prefix']      = 'jinx';
        $args['options']    = [
            /** `General` panel */
            'general_settings' => array(
                'title'       => esc_html__( 'General Site settings', 'jinx' ),
                'priority'    => 40,
                'type'        => 'panel',
            ),
            /** `Favicon` section */
            'favicon' => array(
                'title'       => esc_html__( 'Favicon', 'jinx' ),
                'priority'    => 10,
                'panel'       => 'general_settings',
                'type'        => 'section',
            ),
            /** `Logo` section */
            'logos' => array(
                'title'       => esc_html__( 'Logo', 'jinx' ),
                'priority'    => 15,
                'panel'       => 'general_settings',
                'type'        => 'section',
            ),
            'logo_default' => array(
                'title'    => esc_html__( 'Logo', 'jinx' ),
                'section'  => 'logos',
                'priority' => 20,
                'field'     => 'image',
                'type'     => 'control',
                'button_labels' => array(
                    'select' => esc_html__( 'Select Logo', 'jinx' ),
                    'remove' => esc_html__( 'Remove Logo', 'jinx' ),
                    'change' => esc_html__( 'Change Logo', 'jinx' ),
                ),
            ),
            'logo_transparency' => array(
                'title'    => esc_html__( 'Logo Transparency', 'jinx' ),
                'section'  => 'logos',
                'priority' => 25,
                'field'     => 'file',
                'type'     => 'control',
                'button_labels' => array(
                    'select' => esc_html__( 'Select Logo', 'jinx' ),
                    'remove' => esc_html__( 'Remove Logo', 'jinx' ),
                    'change' => esc_html__( 'Change Logo', 'jinx' ),
                ),
            ),
            /** `Preloader` panel */
            'preloader' => array(
                'title'       => esc_html__( 'Page preloader', 'jinx' ),
                'priority'    => 15,
                'panel'       => 'general_settings',
                'type'        => 'section',
            ),
            'page_preloader' => array(
                'title'    => esc_html__( 'Show page preloader', 'jinx' ),
                'section'  => 'preloader',
                'priority' => 10,
                'default'  => false,
                'field'     => 'checkbox',
                'type'     => 'control',
                'transport'=> 'postMessage',
            ),
            'page_preloader_type' => array(
                'title'    => esc_html__( 'Page preloader type', 'jinx' ),
                'section'  => 'preloader',
                'priority' => 15,
                'field'     => 'select',
                'default'  => '1',
                'type'     => 'control',
                'choices'  => [
                    '1' => esc_html__( 'Type 1', 'jinx' ),
                    '2' => esc_html__( 'Type 2', 'jinx' ),
                    '3' => esc_html__( 'Type 3', 'jinx' ),
                    '4' => esc_html__( 'Type 4', 'jinx' ),
                    '5' => esc_html__( 'Type 5', 'jinx' ),
                    'custom' => esc_html__( 'Custom', 'jinx' ),
                ],
                'transport'=> 'postMessage',
            ),
            'page_preloader_custom' => array(
                'title'    => esc_html__( 'Custom page preloader image', 'jinx' ),
                'section'  => 'preloader',
                'priority' => 20,
                'field'     => 'image',
                'type'     => 'control',
                'transport'=> 'postMessage',
            ),
            /** `Color Schema` panel */
            'accent_color' => array(
                'title'   => esc_html__( 'Accent color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 20,
                'transport'=> 'postMessage',
            ),
            'primary_text_color' => array(
                'title'   => esc_html__( 'Primary Text color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 25,
                'transport'=> 'postMessage',
            ),
            'secondary_text_color' => array(
                'title'   => esc_html__( 'Secondary Text color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 30,
                'transport'=> 'postMessage',
            ),
            'invert_text_color' => array(
                'title'   => esc_html__( 'Invert Text color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 35,
                'transport'=> 'postMessage',
            ),
            'link_color' => array(
                'title'   => esc_html__( 'Link color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 40,
                'transport'=> 'postMessage',
            ),
            'link_hover_color' => array(
                'title'   => esc_html__( 'Link hover color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 45,
                'transport'=> 'postMessage',
            ),
            'h1_color' => array(
                'title'   => esc_html__( 'H1 color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 50,
                'transport'=> 'postMessage',
            ),
            'h2_color' => array(
                'title'   => esc_html__( 'H2 color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 55,
                'transport'=> 'postMessage',
            ),
            'h3_color' => array(
                'title'   => esc_html__( 'H3 color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 60,
                'transport'=> 'postMessage',
            ),
            'h4_color' => array(
                'title'   => esc_html__( 'H4 color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 65,
                'transport'=> 'postMessage',
            ),
            'h5_color' => array(
                'title'   => esc_html__( 'H5 color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 70,
                'transport'=> 'postMessage',
            ),
            'h6_color' => array(
                'title'   => esc_html__( 'H6 color', 'jinx' ),
                'section' => 'colors',
                'field'   => 'hex_color',
                'type'    => 'control',
                'priority' => 75,
                'transport'=> 'postMessage',
            ),
            /** `Typography Settings` panel */
            'typography' => array(
                'title'       => esc_html__( 'Typography', 'jinx' ),
                'description' => esc_html__( 'Configure typography settings', 'jinx' ),
                'priority'    => 45,
                'type'        => 'panel',
            ),
            /** `Body text` section */
            'body_typography' => array(
                'title'       => esc_html__( 'Body text', 'jinx' ),
                'priority'    => 5,
                'panel'       => 'typography',
                'type'        => 'section',
            ),
            'body_font_family' => array(
                'title'   => esc_html__( 'Font Family', 'jinx' ),
                'section' => 'body_typography',
                'field'   => 'fonts',
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'body_font_style' => array(
                'title'   => esc_html__( 'Font Style', 'jinx' ),
                'section' => 'body_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_styles(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'body_font_weight' => array(
                'title'   => esc_html__( 'Font Weight', 'jinx' ),
                'section' => 'body_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_weight(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'body_font_size' => array(
                'title'       => esc_html__( 'Font Size, px', 'jinx' ),
                'section'     => 'body_typography',
                'field'       => 'number',
                'input_attrs' => array(
                    'min'  => 6,
                    'max'  => 50,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'body_line_height' => array(
                'title'       => esc_html__( 'Line Height', 'jinx' ),
                'description' => esc_html__( 'Relative to the font-size of the element', 'jinx' ),
                'section'     => 'body_typography',
                'field'       => 'number',
                'input_attrs' => array(
                    'min'  => 1.0,
                    'max'  => 3.0,
                    'step' => 0.1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'body_letter_spacing' => array(
                'title'       => esc_html__( 'Letter Spacing, px', 'jinx' ),
                'section'     => 'body_typography',
                'field'       => 'number',
                'input_attrs' => array(
                    'min'  => -10,
                    'max'  => 10,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'body_character_set' => array(
                'title'   => esc_html__( 'Character Set', 'jinx' ),
                'section' => 'body_typography',
                'default' => 'latin',
                'field'   => 'select',
                'choices' => jinx_customizer_get_character_sets(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'body_text_align' => array(
                'title'   => esc_html__( 'Text Align', 'jinx' ),
                'section' => 'body_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_text_aligns(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),

            /** `H1 Heading` section */
            'h1_typography' => array(
                'title'       => esc_html__( 'H1 Heading', 'jinx' ),
                'priority'    => 10,
                'panel'       => 'typography',
                'type'        => 'section',
            ),
            'h1_font_family' => array(
                'title'   => esc_html__( 'Font Family', 'jinx' ),
                'section' => 'h1_typography',
                'field'   => 'fonts',
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h1_font_style' => array(
                'title'   => esc_html__( 'Font Style', 'jinx' ),
                'section' => 'h1_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_styles(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h1_font_weight' => array(
                'title'   => esc_html__( 'Font Weight', 'jinx' ),
                'section' => 'h1_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_weight(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h1_font_size' => array(
                'title'       => esc_html__( 'Font Size, px', 'jinx' ),
                'section'     => 'h1_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => 10,
                    'max'  => 200,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h1_line_height' => array(
                'title'       => esc_html__( 'Line Height', 'jinx' ),
                'description' => esc_html__( 'Relative to the font-size of the element', 'jinx' ),
                'section'     => 'h1_typography',
                'field'       => 'number',
                'input_attrs' => array(
                    'min'  => 1.0,
                    'max'  => 3.0,
                    'step' => 0.1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h1_letter_spacing' => array(
                'title'       => esc_html__( 'Letter Spacing, px', 'jinx' ),
                'section'     => 'h1_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => -10,
                    'max'  => 10,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h1_character_set' => array(
                'title'   => esc_html__( 'Character Set', 'jinx' ),
                'section' => 'h1_typography',
                'default' => 'latin',
                'field'   => 'select',
                'choices' => jinx_customizer_get_character_sets(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h1_text_align' => array(
                'title'   => esc_html__( 'Text Align', 'jinx' ),
                'section' => 'h1_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_text_aligns(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),

            /** `H2 Heading` section */
            'h2_typography' => array(
                'title'       => esc_html__( 'H2 Heading', 'jinx' ),
                'priority'    => 15,
                'panel'       => 'typography',
                'type'        => 'section',
            ),
            'h2_font_family' => array(
                'title'   => esc_html__( 'Font Family', 'jinx' ),
                'section' => 'h2_typography',
                'field'   => 'fonts',
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h2_font_style' => array(
                'title'   => esc_html__( 'Font Style', 'jinx' ),
                'section' => 'h2_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_styles(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h2_font_weight' => array(
                'title'   => esc_html__( 'Font Weight', 'jinx' ),
                'section' => 'h2_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_weight(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h2_font_size' => array(
                'title'       => esc_html__( 'Font Size, px', 'jinx' ),
                'section'     => 'h2_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => 10,
                    'max'  => 200,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h2_line_height' => array(
                'title'       => esc_html__( 'Line Height', 'jinx' ),
                'description' => esc_html__( 'Relative to the font-size of the element', 'jinx' ),
                'section'     => 'h2_typography',
                'field'       => 'number',
                'input_attrs' => array(
                    'min'  => 1.0,
                    'max'  => 3.0,
                    'step' => 0.1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h2_letter_spacing' => array(
                'title'       => esc_html__( 'Letter Spacing, px', 'jinx' ),
                'section'     => 'h2_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => -10,
                    'max'  => 10,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h2_character_set' => array(
                'title'   => esc_html__( 'Character Set', 'jinx' ),
                'section' => 'h2_typography',
                'default' => 'latin',
                'field'   => 'select',
                'choices' => jinx_customizer_get_character_sets(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h2_text_align' => array(
                'title'   => esc_html__( 'Text Align', 'jinx' ),
                'section' => 'h2_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_text_aligns(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),

            /** `H3 Heading` section */
            'h3_typography' => array(
                'title'       => esc_html__( 'H3 Heading', 'jinx' ),
                'priority'    => 20,
                'panel'       => 'typography',
                'type'        => 'section',
            ),
            'h3_font_family' => array(
                'title'   => esc_html__( 'Font Family', 'jinx' ),
                'section' => 'h3_typography',
                'field'   => 'fonts',
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h3_font_style' => array(
                'title'   => esc_html__( 'Font Style', 'jinx' ),
                'section' => 'h3_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_styles(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h3_font_weight' => array(
                'title'   => esc_html__( 'Font Weight', 'jinx' ),
                'section' => 'h3_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_weight(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h3_font_size' => array(
                'title'       => esc_html__( 'Font Size, px', 'jinx' ),
                'section'     => 'h3_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => 10,
                    'max'  => 200,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h3_line_height' => array(
                'title'       => esc_html__( 'Line Height', 'jinx' ),
                'description' => esc_html__( 'Relative to the font-size of the element', 'jinx' ),
                'section'     => 'h3_typography',
                'field'       => 'number',
                'input_attrs' => array(
                    'min'  => 1.0,
                    'max'  => 3.0,
                    'step' => 0.1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h3_letter_spacing' => array(
                'title'       => esc_html__( 'Letter Spacing, px', 'jinx' ),
                'section'     => 'h3_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => -10,
                    'max'  => 10,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h3_character_set' => array(
                'title'   => esc_html__( 'Character Set', 'jinx' ),
                'section' => 'h3_typography',
                'default' => 'latin',
                'field'   => 'select',
                'choices' => jinx_customizer_get_character_sets(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h3_text_align' => array(
                'title'   => esc_html__( 'Text Align', 'jinx' ),
                'section' => 'h3_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_text_aligns(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),

            /** `H4 Heading` section */
            'h4_typography' => array(
                'title'       => esc_html__( 'H4 Heading', 'jinx' ),
                'priority'    => 25,
                'panel'       => 'typography',
                'type'        => 'section',
            ),
            'h4_font_family' => array(
                'title'   => esc_html__( 'Font Family', 'jinx' ),
                'section' => 'h4_typography',
                'field'   => 'fonts',
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h4_font_style' => array(
                'title'   => esc_html__( 'Font Style', 'jinx' ),
                'section' => 'h4_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_styles(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h4_font_weight' => array(
                'title'   => esc_html__( 'Font Weight', 'jinx' ),
                'section' => 'h4_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_weight(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h4_font_size' => array(
                'title'       => esc_html__( 'Font Size, px', 'jinx' ),
                'section'     => 'h4_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => 10,
                    'max'  => 200,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h4_line_height' => array(
                'title'       => esc_html__( 'Line Height', 'jinx' ),
                'description' => esc_html__( 'Relative to the font-size of the element', 'jinx' ),
                'section'     => 'h4_typography',
                'field'       => 'number',
                'input_attrs' => array(
                    'min'  => 1.0,
                    'max'  => 3.0,
                    'step' => 0.1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h4_letter_spacing' => array(
                'title'       => esc_html__( 'Letter Spacing, px', 'jinx' ),
                'section'     => 'h4_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => -10,
                    'max'  => 10,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h4_character_set' => array(
                'title'   => esc_html__( 'Character Set', 'jinx' ),
                'section' => 'h4_typography',
                'default' => 'latin',
                'field'   => 'select',
                'choices' => jinx_customizer_get_character_sets(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h4_text_align' => array(
                'title'   => esc_html__( 'Text Align', 'jinx' ),
                'section' => 'h4_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_text_aligns(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),

            /** `H5 Heading` section */
            'h5_typography' => array(
                'title'       => esc_html__( 'H5 Heading', 'jinx' ),
                'priority'    => 30,
                'panel'       => 'typography',
                'type'        => 'section',
            ),
            'h5_font_family' => array(
                'title'   => esc_html__( 'Font Family', 'jinx' ),
                'section' => 'h5_typography',
                'field'   => 'fonts',
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h5_font_style' => array(
                'title'   => esc_html__( 'Font Style', 'jinx' ),
                'section' => 'h5_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_styles(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h5_font_weight' => array(
                'title'   => esc_html__( 'Font Weight', 'jinx' ),
                'section' => 'h5_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_weight(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h5_font_size' => array(
                'title'       => esc_html__( 'Font Size, px', 'jinx' ),
                'section'     => 'h5_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => 10,
                    'max'  => 200,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h5_line_height' => array(
                'title'       => esc_html__( 'Line Height', 'jinx' ),
                'description' => esc_html__( 'Relative to the font-size of the element', 'jinx' ),
                'section'     => 'h5_typography',
                'field'       => 'number',
                'input_attrs' => array(
                    'min'  => 1.0,
                    'max'  => 3.0,
                    'step' => 0.1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h5_letter_spacing' => array(
                'title'       => esc_html__( 'Letter Spacing, px', 'jinx' ),
                'section'     => 'h5_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => -10,
                    'max'  => 10,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h5_character_set' => array(
                'title'   => esc_html__( 'Character Set', 'jinx' ),
                'section' => 'h5_typography',
                'default' => 'latin',
                'field'   => 'select',
                'choices' => jinx_customizer_get_character_sets(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h5_text_align' => array(
                'title'   => esc_html__( 'Text Align', 'jinx' ),
                'section' => 'h5_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_text_aligns(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),

            /** `H6 Heading` section */
            'h6_typography' => array(
                'title'       => esc_html__( 'H6 Heading', 'jinx' ),
                'priority'    => 35,
                'panel'       => 'typography',
                'type'        => 'section',
            ),
            'h6_font_family' => array(
                'title'   => esc_html__( 'Font Family', 'jinx' ),
                'section' => 'h6_typography',
                'field'   => 'fonts',
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h6_font_style' => array(
                'title'   => esc_html__( 'Font Style', 'jinx' ),
                'section' => 'h6_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_styles(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h6_font_weight' => array(
                'title'   => esc_html__( 'Font Weight', 'jinx' ),
                'section' => 'h6_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_font_weight(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h6_font_size' => array(
                'title'       => esc_html__( 'Font Size, px', 'jinx' ),
                'section'     => 'h6_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => 10,
                    'max'  => 200,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h6_line_height' => array(
                'title'       => esc_html__( 'Line Height', 'jinx' ),
                'description' => esc_html__( 'Relative to the font-size of the element', 'jinx' ),
                'section'     => 'h6_typography',
                'field'       => 'number',
                'input_attrs' => array(
                    'min'  => 1.0,
                    'max'  => 3.0,
                    'step' => 0.1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h6_letter_spacing' => array(
                'title'       => esc_html__( 'Letter Spacing, px', 'jinx' ),
                'section'     => 'h6_typography',
                'field'        => 'lakit_responsive',
                'unit'        => 'px',
                'responsive'  => true,
                'input_attrs' => array(
                    'min'  => -10,
                    'max'  => 10,
                    'step' => 1,
                ),
                'type' => 'control',
                'transport'=> 'postMessage',
            ),
            'h6_character_set' => array(
                'title'   => esc_html__( 'Character Set', 'jinx' ),
                'section' => 'h6_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_character_sets(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
            'h6_text_align' => array(
                'title'   => esc_html__( 'Text Align', 'jinx' ),
                'section' => 'h6_typography',
                'field'   => 'select',
                'choices' => jinx_customizer_get_text_aligns(),
                'type'    => 'control',
                'transport'=> 'postMessage',
            ),
        ];
        return $args;
    }
}
add_filter('lastudio-kit/theme/customizer/options', 'jinx_setup_customizer');

/**
 * Move native `site_icon` control (based on WordPress core) into custom section.
 *
 * @since 1.0.0
 * @param  object $wp_customize
 * @return void
 */
if(!function_exists('jinx_customizer_change_core_controls')){
    function jinx_customizer_change_core_controls( $wp_customize ) {
        $wp_customize->remove_control('display_header_text');
        $wp_customize->remove_control('header_textcolor');
        $wp_customize->get_control( 'site_icon' )->section      = 'jinx_favicon';
        $wp_customize->get_control( 'background_color' )->label = esc_html__( 'Body Background Color', 'jinx' );
        $wp_customize->get_section( 'colors' )->title = esc_html__( 'Color Scheme', 'jinx' );
    }
}

// Move native `site_icon` control (based on WordPress core) in custom section.
add_action( 'customize_register', 'jinx_customizer_change_core_controls', 20 );


/**
 * Get font styles
 *
 * @since 1.0.0
 * @return array
 */
if(!function_exists('jinx_customizer_get_font_styles')){
    function jinx_customizer_get_font_styles() {
        return apply_filters( 'jinx-theme/font/styles', array(
            'normal'  => esc_html__( 'Normal', 'jinx' ),
            'italic'  => esc_html__( 'Italic', 'jinx' ),
            'oblique' => esc_html__( 'Oblique', 'jinx' ),
            'inherit' => esc_html__( 'Inherit', 'jinx' ),
        ) );
    }    
}


/**
 * Get character sets
 *
 * @since 1.0.0
 * @return array
 */
if(!function_exists('jinx_customizer_get_character_sets')){
    function jinx_customizer_get_character_sets() {
        return apply_filters( 'jinx-theme/font/character_sets', array(
            'latin'        => esc_html__( 'Latin', 'jinx' ),
            'greek'        => esc_html__( 'Greek', 'jinx' ),
            'greek-ext'    => esc_html__( 'Greek Extended', 'jinx' ),
            'vietnamese'   => esc_html__( 'Vietnamese', 'jinx' ),
            'cyrillic-ext' => esc_html__( 'Cyrillic Extended', 'jinx' ),
            'latin-ext'    => esc_html__( 'Latin Extended', 'jinx' ),
            'cyrillic'     => esc_html__( 'Cyrillic', 'jinx' ),
        ) );
    }
}

/**
 * Get text aligns
 *
 * @since 1.0.0
 * @return array
 */
if(!function_exists('jinx_customizer_get_text_aligns')){
    function jinx_customizer_get_text_aligns() {
        return apply_filters( 'jinx-theme/font/text-aligns', array(
            'inherit' => esc_html__( 'Inherit', 'jinx' ),
            'center'  => esc_html__( 'Center', 'jinx' ),
            'justify' => esc_html__( 'Justify', 'jinx' ),
            'left'    => esc_html__( 'Left', 'jinx' ),
            'right'   => esc_html__( 'Right', 'jinx' ),
        ) );
    }   
}

/**
 * Get font weights
 *
 * @since 1.0.0
 * @return array
 */
if(!function_exists('jinx_customizer_get_font_weight')){
    function jinx_customizer_get_font_weight() {
        return apply_filters( 'jinx-theme/font/weight', array(
            '100' => '100',
            '200' => '200',
            '300' => '300',
            '400' => '400',
            '500' => '500',
            '600' => '600',
            '700' => '700',
            '800' => '800',
            '900' => '900',
        ) );
    }   
}