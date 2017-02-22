<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
    'menu_title'      => 'Tema Ayarları',
    'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
    'menu_slug'       => 'cs-framework',
    'ajax_save'       => false,
    'show_reset_all'  => false,
    'framework_title' => 'Freelancer',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
    'name'        => 'setting',
    'title'       => 'Genel Ayarlar',
    'icon'        => 'fa fa-cog',

    // begin: fields
    'fields'      => array(

        // begin: a field
        array(
            'id'      => 'name',
            'type'    => 'text',
            'title'   => 'Adınız',
            'desc'    => 'Hasan Güler'
        ),
        // end: a field

        // begin: a field
        array(
            'id'      => 'position',
            'type'    => 'text',
            'title'   => 'Ünvanınız',
            'desc'    => 'Web Developer'
        ),
        // end: a field

        array(
            'id'      => 'desc',
            'type'    => 'wysiwyg',
            'title'   => 'Hakkımda',
            'help'    => 'Kendi Hakkınzda Bilgi Verebilirsiniz',
        ),

        array(
            'id'      => 'low_desc',
            'type'    => 'textarea',
            'title'   => 'Kısa Bilgi',
            'help'    => 'Alt Kısımda Bulunan Kısa Bilgi',
        ),

        array(
            'id'      => 'maskot',
            'type'    => 'upload',
            'title'   => 'Maskot',
            'desc'    => 'Eğerki Resim Yüklemezseniz Aynı Resim Kalır',
            'help'    => 'Sizi Tanımlayan Resmi Yükleyiniz',
        ),
    ), // end: fields
);

// ------------------------------
// a option contact information   -
// ------------------------------
$options[] = array(
    'name'        => 'contact_information',
    'title'       => 'İletisim Bilgileri',
    'icon'        => 'fa fa-user',
    'fields'      => array(
        array(
            'id'      => 'mail',
            'type'    => 'text',
            'title'   => 'Mail Adresi',
            'desc'    => 'Size Ulasacakları Mail Adresi'
        ),
        array(
            'id'      => 'location',
            'type'    => 'text',
            'title'   => 'Konum',
            'desc'    => 'Bursa / Türkiye'
        ),
        array(
            'id'      => 'facebook',
            'type'    => 'text',
            'title'   => 'Faceebook',
            'desc'    => 'https://www.facebook.com'
        ),
        array(
            'id'      => 'g_plus',
            'type'    => 'text',
            'title'   => 'Google Plus',
            'desc'    => 'https://plus.google.com/'
        ),
        array(
            'id'      => 'twitter',
            'type'    => 'text',
            'title'   => 'Twitter',
            'desc'    => 'https://twitter.com/'
        ),
        array(
            'id'      => 'linkedin',
            'type'    => 'text',
            'title'   => 'Linkedin',
            'desc'    => 'https://www.linkedin.com/'
        ),
    )
);

CSFramework::instance( $settings, $options );
