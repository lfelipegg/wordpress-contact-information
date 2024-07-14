Documentation for add_contact_information Function
Purpose

The add_contact_information function adds a new section, "Contact Information," to the WordPress Customizer. This section allows the user to input and manage various contact details, including titles, text, email, phone numbers, and social media URLs.
Usage

This function is hooked to the customize_register action, which is used to add custom sections, settings, and controls to the WordPress Customizer.
Parameters

    $wp_customize: An instance of the WP_Customize_Manager class. This parameter is automatically passed by WordPress when the function is hooked to the customize_register action.

Function Definition

php

function add_contact_information($wp_customize) {
    // Add a new section for Contact Information
    $wp_customize->add_section('contact_information', array(
        'title'       => __('Contact Information', 'mytheme'),
        'description' => __('Add your contact details here', 'mytheme'),
        'priority'    => 30,
    ));

    // Add settings and controls for various contact information fields

    // Title
    $wp_customize->add_setting('contact_title', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_title', array(
        'label' => __('Titulo', 'mytheme'),
        'section'  => 'contact_information',
        'settings' => 'contact_title',
        'type' => 'text',
    ));

    // Text
    $wp_customize->add_setting('contact_text', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_text', array(
        'label' => __('Texto', 'mytheme'),
        'section'  => 'contact_information',
        'settings' => 'contact_text',
        'type' => 'text',
    ));

    // Email
    $wp_customize->add_setting('contact_email', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_email',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_email', array(
        'label' => __('Email', 'mytheme'),
        'section'  => 'contact_information',
        'settings' => 'contact_email',
        'type' => 'email',
    ));

    // Phone Number
    $wp_customize->add_setting('contact_phone', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('contact_phone', array(
        'label' => __('Teléfono', 'mytheme'),
        'section'  => 'contact_information',
        'settings' => 'contact_phone',
        'type' => 'text',
    ));

    // Whatsapp Number
    $wp_customize->add_setting('whatsapp_phone', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control('whatsapp_phone', array(
        'label' => __('Whatsapp', 'mytheme'),
        'section'  => 'contact_information',
        'settings' => 'whatsapp_phone',
        'type' => 'text',
    ));

    // Social Media URLs
    $social_media_settings = array(
        'facebook_url' => __('Facebook', 'mytheme'),
        'instagram_url' => __('Instagram', 'mytheme'),
        'tiktok_url' => __('Tiktok', 'mytheme'),
        'youtube_url' => __('Youtube', 'mytheme'),
        'x_url' => __('X (Twitter)', 'mytheme')
    );

    foreach ($social_media_settings as $setting_id => $label) {
        $wp_customize->add_setting($setting_id, array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control($setting_id, array(
            'label' => $label,
            'section'  => 'contact_information',
            'settings' => $setting_id,
            'type' => 'text',
        ));
    }

    // Site Logo
    $wp_customize->add_setting('site_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo', array(
        'label'    => __('Site Logo', 'mytheme'),
        'section'  => 'title_tagline',
        'settings' => 'site_logo',
    )));
}
add_action('customize_register', 'add_contact_information');

Detailed Breakdown

    Add Section: Contact Information

    php

$wp_customize->add_section('contact_information', array(
    'title'       => __('Contact Information', 'mytheme'),
    'description' => __('Add your contact details here', 'mytheme'),
    'priority'    => 30,
));

    Adds a new section titled "Contact Information" to the Customizer.

Add Setting and Control: Title

php

$wp_customize->add_setting('contact_title', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh',
));

$wp_customize->add_control('contact_title', array(
    'label' => __('Titulo', 'mytheme'),
    'section'  => 'contact_information',
    'settings' => 'contact_title',
    'type' => 'text',
));

    Adds a setting and control for the "Titulo" (Title) field.

Add Setting and Control: Text

php

$wp_customize->add_setting('contact_text', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh',
));

$wp_customize->add_control('contact_text', array(
    'label' => __('Texto', 'mytheme'),
    'section'  => 'contact_information',
    'settings' => 'contact_text',
    'type' => 'text',
));

    Adds a setting and control for the "Texto" (Text) field.

Add Setting and Control: Email

php

$wp_customize->add_setting('contact_email', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_email',
    'transport' => 'refresh',
));

$wp_customize->add_control('contact_email', array(
    'label' => __('Email', 'mytheme'),
    'section'  => 'contact_information',
    'settings' => 'contact_email',
    'type' => 'email',
));

    Adds a setting and control for the "Email" field.

Add Setting and Control: Phone Number

php

$wp_customize->add_setting('contact_phone', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh',
));

$wp_customize->add_control('contact_phone', array(
    'label' => __('Teléfono', 'mytheme'),
    'section'  => 'contact_information',
    'settings' => 'contact_phone',
    'type' => 'text',
));

    Adds a setting and control for the "Teléfono" (Phone) field.

Add Setting and Control: Whatsapp Number

php

$wp_customize->add_setting('whatsapp_phone', array(
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field',
    'transport' => 'refresh',
));

$wp_customize->add_control('whatsapp_phone', array(
    'label' => __('Whatsapp', 'mytheme'),
    'section'  => 'contact_information',
    'settings' => 'whatsapp_phone',
    'type' => 'text',
));

    Adds a setting and control for the "Whatsapp" field.

Add Settings and Controls: Social Media URLs

The code adds settings and controls for various social media URLs including Facebook, Instagram, TikTok, YouTube, and X (Twitter):

php

$social_media_settings = array(
    'facebook_url' => __('Facebook', 'mytheme'),
    'instagram_url' => __('Instagram', 'mytheme'),
    'tiktok_url' => __('Tiktok', 'mytheme'),
    'youtube_url' => __('Youtube', 'mytheme'),
    'x_url' => __('X (Twitter)', 'mytheme')
);

foreach ($social_media_settings as $setting_id => $label) {
    $wp_customize->add_setting($setting_id, array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control($setting_id, array(
        'label' => $label,
        'section'  => 'contact_information',
        'settings' => $setting_id,
        'type' => 'text',
    ));
}

    Adds settings and controls for Facebook, Instagram, TikTok, YouTube, and X (Twitter) URLs.

Add Setting and Control: Site Logo

php

    $wp_customize->add_setting('site_logo', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
        'transport'         => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo', array(
        'label'    => __('Site Logo', 'mytheme'),
        'section'  => 'title_tagline',
        'settings' => 'site_logo',
    )));

        Adds a setting and control for the site logo, using WP_Customize_Image_Control to allow image uploads.

Adding the Function to the Customizer

The function is added to the WordPress Customizer using the customize_register action:

php

add_action('customize_register', 'add_contact_information');

Summary

This code defines a function add_contact_information that adds a new "Contact Information" section to the WordPress Customizer. It includes settings and controls for various contact details such as title, text, email, phone number, Whatsapp number, and multiple social media URLs. Additionally, it adds a setting and control for uploading a site logo. The function is hooked to the customize_register action to integrate it into the Customizer.
