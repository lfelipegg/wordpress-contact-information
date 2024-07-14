<?php

/**
 * Plugin Name: Contact Information
 * Description: Adds "Contact Information" in Appearance -> Themes -> Customize. You can call the settings in php with: get_theme_mod(*Value*, ''); Where value can be ,'contact_phone','whatsapp_phone','contact_title','contact_text','facebook_url','instagram_url','tiktok_url',
'x_url' or 'youtube_url'
 * Author: Luis Felipe Gonzalez Guajardo
 * Github:
 * Version: 1.0
 */

function add_contact_information($wp_customize)
{
	// Add a new section for Contact Information
	$wp_customize->add_section('contact_information', array(
		'title'       => __('Contact Information', 'mytheme'),
		'description' => __('Add your contact details here', 'mytheme'),
		'priority'    => 30,
	));
	// Add title Setting
	$wp_customize->add_setting('contact_title', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));

	// Add title Control
	$wp_customize->add_control('contact_title', array(
		'label' => __('Titulo', 'mytheme'),
		'section'  => 'contact_information', // Add to the Site Identity section
		'settings' => 'contact_title',
		'type' => 'text',
	));
	// Add text Setting
	$wp_customize->add_setting('contact_text', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));

	// Add text Control
	$wp_customize->add_control('contact_text', array(
		'label' => __('Texto', 'mytheme'),
		'section'  => 'contact_information', // Add to the Site Identity section
		'settings' => 'contact_text',
		'type' => 'text',
	));
	// Add Email Setting
	$wp_customize->add_setting('contact_email', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_email',
		'transport' => 'refresh',
	));

	// Add Email Control
	$wp_customize->add_control('contact_email', array(
		'label' => __('Email', 'mytheme'),
		'section'  => 'contact_information', // Add to the Site Identity section
		'settings' => 'contact_email',
		'type' => 'email',
	));

	// Add Phone Number Setting
	$wp_customize->add_setting('contact_phone', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));

	// Add Phone Number Control
	$wp_customize->add_control('contact_phone', array(
		'label' => __('Teléfono', 'mytheme'),
		'section'  => 'contact_information', // Add to the Site Identity section
		'settings' => 'contact_phone',
		'type' => 'text',
	));

	// Add Whatsapp Number Setting
	$wp_customize->add_setting('whatsapp_phone', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));

	// Add Whatsapp Number Control
	$wp_customize->add_control('whatsapp_phone', array(
		'label' => __('Whatsapp', 'mytheme'),
		'section'  => 'contact_information', // Add to the Site Identity section
		'settings' => 'whatsapp_phone',
		'type' => 'text',
	));
	// Add Facebook URL Setting
	$wp_customize->add_setting('facebook_url', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));

	// Add Facebook URL Control
	$wp_customize->add_control('facebook_url', array(
		'label' => __('Facebook', 'mytheme'),
		'section'  => 'contact_information', // Add to the Site Identity section
		'settings' => 'facebook_url',
		'type' => 'text',
	));
	// Add Instagram URL Setting
	$wp_customize->add_setting('instagram_url', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));

	// Add Instagram URL Control
	$wp_customize->add_control('instagram_url', array(
		'label' => __('Instagram', 'mytheme'),
		'section'  => 'contact_information', // Add to the Site Identity section
		'settings' => 'instagram_url',
		'type' => 'text',
	));
	// Add TikTok URL Setting
	$wp_customize->add_setting('tiktok_url', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));

	// Add TikTok URL Control
	$wp_customize->add_control('tiktok_url', array(
		'label' => __('Tiktok', 'mytheme'),
		'section'  => 'contact_information', // Add to the Site Identity section
		'settings' => 'tiktok_url',
		'type' => 'text',
	));
	// Add Youtube URL Setting
	$wp_customize->add_setting('youtube_url', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));
	// Add Youtube URL Control
	$wp_customize->add_control('youtube_url', array(
		'label' => __('Youtube', 'mytheme'),
		'section'  => 'contact_information', // Add to the Site Identity section
		'settings' => 'youtube_url',
		'type' => 'text',
	));

	// Add X URL Setting
	$wp_customize->add_setting('x_url', array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => 'refresh',
	));
	// Add X URL Control
	$wp_customize->add_control('x_url', array(
		'label' => __('X (Twitter)', 'mytheme'),
		'section'  => 'contact_information', // Add to the Site Identity section
		'settings' => 'x_url',
		'type' => 'text',
	));
	// Add Logo Setting
	$wp_customize->add_setting('site_logo', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
		'transport'         => 'refresh',
	));

	// Add Logo Control
	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo', array(
		'label'    => __('Site Logo', 'mytheme'),
		'section'  => 'title_tagline', // Add to the Site Identity section
		'settings' => 'site_logo',
	)));
}
add_action('customize_register', 'add_contact_information');

function get_social_icon_svg($link, $className = '')
{
	// Initialize an empty variable to hold the SVG code
	$svg = '';

	// Check for specific keywords in the link and assign the corresponding SVG
	if (strpos($link, 'facebook') !== false) {
		$svg = '<svg class="' . $className . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"/></svg>';
	} elseif (strpos($link, 'tiktok') !== false) {
		$svg = '<svg class="' . $className . '" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12.53.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>';
	} elseif (strpos($link, 'instagram') !== false) {
		$svg = '<svg class="' . $className . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>';
	} elseif (strpos($link, 'twitter') !== false || strpos($link, 'x.com') !== false) {
		$svg = '<svg class="' . $className . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>';
	} elseif (strpos($link, 'youtube') !== false) {
		$svg = '<svg class="' . $className . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>';
	} elseif (strpos($link, 'apple') !== false) {
		$svg = '<svg class="' . $className . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M22 17.607c-.786 2.28-3.139 6.317-5.563 6.361-1.608.031-2.125-.953-3.963-.953-1.837 0-2.412.923-3.932.983-2.572.099-6.542-5.827-6.542-10.995 0-4.747 3.308-7.1 6.198-7.143 1.55-.028 3.014 1.045 3.959 1.045.949 0 2.727-1.29 4.596-1.101.782.033 2.979.315 4.389 2.377-3.741 2.442-3.158 7.549.858 9.426zm-5.222-17.607c-2.826.114-5.132 3.079-4.81 5.531 2.612.203 5.118-2.725 4.81-5.531z"/></svg>';
	} elseif (strpos($link, 'spotify') !== false) {
		$svg = '<svg class="' . $className . '" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M19.098 10.638c-3.868-2.297-10.248-2.508-13.941-1.387-.593.18-1.22-.155-1.399-.748-.18-.593.154-1.22.748-1.4 4.239-1.287 11.285-1.038 15.738 1.605.533.317.708 1.005.392 1.538-.316.533-1.005.709-1.538.392zm-.126 3.403c-.272.44-.847.578-1.287.308-3.225-1.982-8.142-2.557-11.958-1.399-.494.15-1.017-.129-1.167-.623-.149-.495.13-1.016.624-1.167 4.358-1.322 9.776-.682 13.48 1.595.44.27.578.847.308 1.286zm-1.469 3.267c-.215.354-.676.465-1.028.249-2.818-1.722-6.365-2.111-10.542-1.157-.402.092-.803-.16-.895-.562-.092-.403.159-.804.562-.896 4.571-1.045 8.492-.595 11.655 1.338.353.215.464.676.248 1.028zm-5.503-17.308c-6.627 0-12 5.373-12 12 0 6.628 5.373 12 12 12 6.628 0 12-5.372 12-12 0-6.627-5.372-12-12-12z"/></svg>';
	} elseif (strpos($link, 'amazon') !== false) {
		$svg = '<svg class="' . $className . '" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M13.958 10.09c0 1.232.029 2.256-.591 3.351-.502.891-1.301 1.438-2.186 1.438-1.214 0-1.922-.924-1.922-2.292 0-2.692 2.415-3.182 4.7-3.182v.685zm3.186 7.705c-.209.189-.512.201-.745.074-1.052-.872-1.238-1.276-1.814-2.106-1.734 1.767-2.962 2.297-5.209 2.297-2.66 0-4.731-1.641-4.731-4.925 0-2.565 1.391-4.309 3.37-5.164 1.715-.754 4.11-.891 5.942-1.095v-.41c0-.753.06-1.642-.383-2.294-.385-.579-1.124-.82-1.775-.82-1.205 0-2.277.618-2.54 1.897-.054.285-.261.567-.549.582l-3.061-.333c-.259-.056-.548-.266-.472-.66.704-3.716 4.06-4.838 7.066-4.838 1.537 0 3.547.41 4.758 1.574 1.538 1.436 1.392 3.352 1.392 5.438v4.923c0 1.481.616 2.13 1.192 2.929.204.287.247.63-.01.839-.647.541-1.794 1.537-2.423 2.099l-.008-.007zm3.559 1.988c-2.748 1.472-5.735 2.181-8.453 2.181-4.027 0-7.927-1.393-11.081-3.706-.277-.202-.481.154-.251.416 2.925 3.326 6.786 5.326 11.076 5.326 3.061 0 6.614-1.214 9.066-3.494.406-.377.058-.945-.357-.723zm.67 2.216c-.091.227.104.32.31.147 1.339-1.12 1.685-3.466 1.411-3.804-.272-.336-2.612-.626-4.04.377-.22.154-.182.367.062.337.805-.096 2.595-.312 2.913.098.319.41-.355 2.094-.656 2.845z" fill-rule="evenodd" clip-rule="evenodd"/></svg>';
	}

	return $svg;
}
