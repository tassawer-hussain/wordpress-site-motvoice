<?php



/*  ----------------------------------------------------------------------------
	EXTERNAL PLUGINS DATA IMPORT
*/
/* -- ACF -- */
// Field groups
$field_group_app_listing_details = td_demo_data::acf_import_field_group( 'https://cloud.tagdiv.com/demos/Newspaper/app_find_pro/data/acf/group_63d140a2cfadd.json' );

// Post types
$post_type_app_listings = td_demo_data::acf_import_post_type( 'https://cloud.tagdiv.com/demos/Newspaper/app_find_pro/data/acf/post_type_6463338eba68c.json' );

// Taxonomies
$taxonomy_categories = td_demo_data::acf_import_taxonomy( 'https://cloud.tagdiv.com/demos/Newspaper/app_find_pro/data/acf/taxonomy_6463344f1c7d0.json' );
$taxonomy_locations = td_demo_data::acf_import_taxonomy( 'https://cloud.tagdiv.com/demos/Newspaper/app_find_pro/data/acf/taxonomy_646334dea7c02.json' );
$taxonomy_tags = td_demo_data::acf_import_taxonomy( 'https://cloud.tagdiv.com/demos/Newspaper/app_find_pro/data/acf/taxonomy_646334b0352f1.json' );



/*  ----------------------------------------------------------------------------
	SUBSCRIPTION - start phase 1
*/
update_option( 'users_can_register', true );
global $wpdb;
$disable_wizard = $wpdb->get_var( "SELECT value FROM tds_options WHERE name = 'disable_wizard'");
if ( empty($disable_wizard) ) {

td_demo_subscription::add_account_details( array(
		'company_name' => 'Demo Company',
		'billing_cui' => '75864589',
		'billing_j' => '10/120/2021',
		'billing_address' => '2656 Farm Meadow Drive',
		'billing_city' => 'Tucson',
		'billing_country' => 'Arizona',
		'billing_email' => 'yourcompany@website.com',
		'billing_bank_account' => 'NL43INGB4186520410',
		'billing_post_code' => '85712',
		'billing_vat_number' => '75864589',
		'options' => 'a:1:{s:15:"td_demo_content";i:1;}',
	)
);

td_demo_subscription::add_payment_bank( array(
		'account_name' => 'Alpha Bank Account',
		'account_number' => '123456',
		'bank_name' => 'Alpha Bank',
		'routing_number' => '123456',
		'iban' => 'NL43INGB4186520410',
		'bic_swift' => '123456',
		'description' => 'Make your payment directly into our bank account. Please use your Subscription ID as the payment reference. Your subscription will be activated when the funds are cleared in our account.',
		'instruction' => 'Payment method instructions go here.',
		'is_active' => '1',
		'options' => 'a:1:{s:15:"td_demo_content";i:1;}',
	)
);

td_demo_subscription::add_option( array(
		'name' => 'td_demo_content',
		'value' => '1',
	)
);

}

$plan_basic___yearly_plan_id = td_demo_subscription::add_plan( array(
		'name' => 'Basic - Yearly Plan - APP Find PRO',
		'price' => '50',
        'interval' => 'year',
        'interval_count' => 1,
        'trial_days' => '0',
        'is_free' => '0',
        'is_unlimited' => '0',
		'options' => 'a:2:{s:15:"td_demo_content";i:1;s:9:"unique_id";s:15:"396492b0e8f1646";}',
        'publishing_limits' => 'a:1:{i:0;O:8:"stdClass":3:{s:9:"post_type";s:17:"tdcpt_app_listing";s:5:"limit";s:2:"20";s:5:"track";b:1;}}',
	)
);

$plan_free_plan_id = td_demo_subscription::add_plan( array(
		'name' => 'Free Plan - APP Find PRO',
		'price' => '',
        'interval' => '',
        'interval_count' => 0,
        'trial_days' => '0',
        'is_free' => '1',
        'is_unlimited' => '0',
		'options' => 'a:2:{s:15:"td_demo_content";i:1;s:9:"unique_id";s:15:"726492b0e8f16a0";}',
        'publishing_limits' => 'a:1:{i:0;O:8:"stdClass":3:{s:9:"post_type";s:17:"tdcpt_app_listing";s:5:"limit";s:1:"1";s:5:"track";b:0;}}',
	)
);

$plan_basic___monthly_plan_id = td_demo_subscription::add_plan( array(
		'name' => 'Basic - Monthly Plan - APP Find PRO',
		'price' => '10',
        'interval' => 'month',
        'interval_count' => 1,
        'trial_days' => '0',
        'is_free' => '0',
        'is_unlimited' => '0',
		'options' => 'a:2:{s:15:"td_demo_content";i:1;s:9:"unique_id";s:15:"196492b0e8f16f7";}',
        'publishing_limits' => 'a:1:{i:0;O:8:"stdClass":3:{s:9:"post_type";s:17:"tdcpt_app_listing";s:5:"limit";s:1:"2";s:5:"track";b:1;}}',
	)
);

$plan_pro___monthly_plan_id = td_demo_subscription::add_plan( array(
		'name' => 'Pro - Monthly Plan - APP Find PRO',
		'price' => '15',
        'interval' => 'month',
        'interval_count' => 1,
        'trial_days' => '0',
        'is_free' => '0',
        'is_unlimited' => '0',
		'options' => 'a:2:{s:15:"td_demo_content";i:1;s:9:"unique_id";s:15:"986492b0e8f174c";}',
        'publishing_limits' => 'a:1:{i:0;O:8:"stdClass":3:{s:9:"post_type";s:17:"tdcpt_app_listing";s:5:"limit";s:1:"5";s:5:"track";b:1;}}',
	)
);

$plan_pro___yearly_plan_id = td_demo_subscription::add_plan( array(
		'name' => 'Pro - Yearly Plan - APP Find PRO',
		'price' => '100',
        'interval' => 'year',
        'interval_count' => 1,
        'trial_days' => '0',
        'is_free' => '0',
        'is_unlimited' => '0',
		'options' => 'a:2:{s:15:"td_demo_content";i:1;s:9:"unique_id";s:15:"246492b0e8f17a9";}',
        'publishing_limits' => 'a:1:{i:0;O:8:"stdClass":3:{s:9:"post_type";s:17:"tdcpt_app_listing";s:5:"limit";s:2:"50";s:5:"track";b:1;}}',
	)
);

$page_payment_page_id_id = td_demo_content::add_page( array(
	'title' => 'Checkout',
	'file' => 'tds_checkout.txt',
));

td_demo_subscription::add_option( array(
	'name' => 'payment_page_id',
	'value' => $page_payment_page_id_id,
	)
);

$page_create_account_page_id_id = td_demo_content::add_page( array(
	'title' => 'Login/Register',
	'file' => 'tds_login_register.txt',
));

td_demo_subscription::add_option( array(
	'name' => 'create_account_page_id',
	'value' => $page_create_account_page_id_id,
	)
);

td_demo_subscription::add_option( array(
	'name' => 'go_wizard',
	'value' => '1',
	)
);

td_demo_subscription::add_option( array(
	'name' => 'wizard_company_complete',
	'value' => '1',
	)
);

td_demo_subscription::add_option( array(
	'name' => 'wizard_payments_complete',
	'value' => '1',
	)
);

td_demo_subscription::add_option( array(
	'name' => 'wizard_plans_complete',
	'value' => '1',
	)
);

td_demo_subscription::add_option( array(
	'name' => 'wizard_locker_complete',
	'value' => '1',
	)
);

td_demo_subscription::add_option( array(
	'name' => 'disable_wizard',
	'value' => '1',
	)
);


/*  ---------------------------------------------------------------------------- 
	SUBSCRIPTION - end phase 1
*/

/*  ---------------------------------------------------------------------------- 
	CATEGORIES
*/
$cat_blog_id = td_demo_category::add_category(array(
	'category_name' => 'Blog',
	'parent_id' => 0,
	'category_template' => '',
	'top_posts_style' => '',
	'description' => '',
	'background_td_pic_id' => '',
	'boxed_layout' => 'hide',
	'sidebar_id' => '',
	'tdc_layout' => '', //THE MODULE ID 1 2 3 NO NAME JUST ID 
	'tdc_sidebar_pos' => '', //sidebar_left, sidebar_right, no_sidebar 
));


/*  ---------------------------------------------------------------------------- 
	 CLOUD TEMPLATES(MODULES)
*/
$template_module_template_app_listings_3_id = td_demo_content::add_cloud_template( array(
	'title' => 'Module Template - APP Listings - 3 - APP Find PRO',
	'file' => 'module_template_app_listings_3_cloud_template.txt',
	'template_type' => 'module',
	'module_template_id' => '1491',
));

$template_module_template_posts_id = td_demo_content::add_cloud_template( array(
	'title' => 'Module Template - Posts - APP Find PRO',
	'file' => 'module_template_posts_cloud_template.txt',
	'template_type' => 'module',
	'module_template_id' => '1143',
));

$template_module_template_app_listings_2_id = td_demo_content::add_cloud_template( array(
	'title' => 'Module Template - APP Listings - 2 - APP Find PRO',
	'file' => 'module_template_app_listings_2_cloud_template.txt',
	'template_type' => 'module',
	'module_template_id' => '1003',
));

$template_module_template_app_listings_1_id = td_demo_content::add_cloud_template( array(
	'title' => 'Module Template - APP Listings - 1 - APP Find PRO',
	'file' => 'module_template_app_listings_1_cloud_template.txt',
	'template_type' => 'module',
	'module_template_id' => '824',
));


/*  ---------------------------------------------------------------------------- 
	ATTACHMENTS
*/

/*  ---------------------------------------------------------------------------- 
	PAGES
*/
$page_tds_switching_plans_wizard_id = td_demo_content::add_page( array(
    'title' => 'Subscribe',
    'file' => 'subscribe.txt',
    'demo_unique_id' => '576492b0e91aba2',
));

$page_new_listing_id = td_demo_content::add_page( array(
    'title' => 'New APP Listing',
    'file' => 'new_listing.txt',
    'demo_unique_id' => '966492b0e91b8cc',
));

$page_my_account_app_listings_id = td_demo_content::add_page( array(
    'title' => 'My Account - APP Listings',
    'file' => 'my_account_app_listings.txt',
    'demo_unique_id' => '636492b0e9199a8',
));

$page_my_account_favorite_applications_id = td_demo_content::add_page( array(
    'title' => 'My Account - Favorite Applications',
    'file' => 'my_account_favorite_applications.txt',
    'demo_unique_id' => '725892c0e9109a8',
));

$page_favorite_applications_id = td_demo_content::add_page( array(
    'title' => 'Favorite Applications',
    'file' => 'favorite_applications.txt',
    'demo_unique_id' => '183453b0e61a8eb',
));

$page_my_account_page_id_id = td_demo_content::add_page( array(
	'title' => 'My Account',
	'file' => 'tds_my_account.txt',
    'demo_unique_id' => '36632fff9fo21ac',
));

td_demo_subscription::add_option( array(
	'name' => 'my_account_page_id',
	'value' => $page_my_account_page_id_id,
	)
);

$page_blog_id = td_demo_content::add_page( array(
	'title' => 'Blog',
	'file' => 'blog.txt',
	'demo_unique_id' => '746492b0e91a1d9',
));

$page_software_applications_id = td_demo_content::add_page( array(
	'title' => 'Software Applications',
	'file' => 'software_applications.txt',
	'demo_unique_id' => '616492b0e91a621',
));

$page_home_id = td_demo_content::add_page( array(
	'title' => 'Home',
	'file' => 'home.txt',
	'homepage' => true,
	'demo_unique_id' => '536492b0e91c329',
));


/*  ---------------------------------------------------------------------------- 
	SUBSCRIPTION - start phase 2
*/

/*  ---------------------------------------------------------------------------- 
	SUBSCRIPTIONS
*/
// add locker
$post_tds_default_wizard_locker_id = td_demo_content::add_post( array(
	'post_type' => 'tds_locker',
	'title' => 'Wizard Locker (default)',
	'file' => '',
	'categories_id_array' => [],
			'tds_locker_settings' => array(
				'tds_title' => 'This Content Is Only For Subscribers',
				'tds_message' => 'Please subscribe to unlock this content.',
				'tds_input_placeholder' => '',
				'tds_submit_btn_text' => 'Subscribe to unlock',
				'tds_after_btn_text' => '',
				'tds_pp_msg' => 'I consent to processing of my data according to <a href=\"#\">Terms of Use</a> & <a href=\"#\">Privacy Policy</a>',
			),
	'tds_payable' => 'paid_subscription',
	'tds_paid_subs_plan_ids' => [$plan_free_plan_id,$plan_basic___monthly_plan_id,$plan_basic___yearly_plan_id],
	'tds_paid_subs_page_id' => $page_tds_switching_plans_wizard_id,
	)
);

// add post meta for default locker
td_demo_content::add_locker_meta( array(
	'tds_locker_id' => (int) get_option( 'tds_default_locker_id' ),
	'tds_locker_meta' => array(
			'tds_locker_settings' => array(
				'tds_title' => 'This Content Is Only For Subscribers',
				'tds_message' => 'Please subscribe to unlock this content. Enter your email to get access.',
				'tds_input_placeholder' => 'Please enter your email address.',
				'tds_submit_btn_text' => 'Subscribe to unlock',
				'tds_after_btn_text' => 'Your email address is 100% safe from spam!',
				'tds_pp_msg' => 'I consent to processing of my data according to <a href=\"#\">Terms of Use</a> & <a href=\"#\">Privacy Policy</a>',
			),
		)
	)
);

td_util::update_option('tds_demo_options', 'a:1:{s:5:"plans";a:5:{i:0;a:2:{s:9:"unique_id";s:15:"396492b0e8f1646";s:4:"name";s:19:"Basic - Yearly Plan";}i:1;a:2:{s:9:"unique_id";s:15:"726492b0e8f16a0";s:4:"name";s:9:"Free Plan";}i:2;a:2:{s:9:"unique_id";s:15:"196492b0e8f16f7";s:4:"name";s:20:"Basic - Monthly Plan";}i:3;a:2:{s:9:"unique_id";s:15:"986492b0e8f174c";s:4:"name";s:18:"Pro - Monthly Plan";}i:4;a:2:{s:9:"unique_id";s:15:"246492b0e8f17a9";s:4:"name";s:17:"Pro - Yearly Plan";}}}');


/*  ---------------------------------------------------------------------------- 
	SUBSCRIPTION - end phase 2
*/

/*  ---------------------------------------------------------------------------- 
	POSTS
*/
$post_td_post_unleashing_the_maximum_capabilities_of_your_device_id = td_demo_content::add_post( array(
	'title' => 'Unleashing the Maximum Capabilities of Your Device',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'tds_locker' => '19',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_the_ideal_apps_to_suit_your_requirements_id = td_demo_content::add_post( array(
	'title' => 'The Ideal Apps to Suit Your Requirements',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_unlocking_the_full_potential_of_your_device_id = td_demo_content::add_post( array(
	'title' => 'Unlocking the Full Potential of Your Device',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_finding_the_perfect_apps_for_your_needs_id = td_demo_content::add_post( array(
	'title' => 'Finding the Perfect Apps for Your Needs',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_a_comprehensive_guide_to_app_directory_services_id = td_demo_content::add_post( array(
	'title' => 'A Comprehensive Guide to App Directory Services',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_your_roadmap_to_the_best_apps_for_productivity_id = td_demo_content::add_post( array(
	'title' => 'Your Roadmap to the Best Apps for Productivity',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_benefits_of_submitting_your_app_to_a_directory_id = td_demo_content::add_post( array(
	'title' => 'Benefits of Submitting Your App to a Directory',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_enhancing_learning_in_the_digital_age_id = td_demo_content::add_post( array(
	'title' => 'Enhancing Learning in the Digital Age',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_empowering_entrepreneurs_with_essential_tools_id = td_demo_content::add_post( array(
	'title' => 'Empowering Entrepreneurs with Essential Tools',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_best_social_media_app_directory_guide_id = td_demo_content::add_post( array(
	'title' => 'Best Social Media App Directory Guide',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_5',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_creativity_and_productivity_for_artists_id = td_demo_content::add_post( array(
	'title' => 'Creativity and Productivity for Artists',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_1',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_the_essential_apps_for_health_and_fitness_id = td_demo_content::add_post( array(
	'title' => 'The Essential Apps for Health and Fitness',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_2',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_unveiling_hidden_gems_for_productivity_id = td_demo_content::add_post( array(
	'title' => 'Unveiling Hidden Gems for Productivity',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_3',
	'categories_id_array' => array($cat_blog_id,),
));

$post_td_post_discover_the_best_apps_for_every_need_id = td_demo_content::add_post( array(
	'title' => 'Discover the Best Apps for Every Need',
	'file' => 'post_default.txt',
	'featured_image_td_id' => 'td_pic_4',
	'categories_id_array' => array($cat_blog_id,),
));


/*  ---------------------------------------------------------------------------- 
	PRODUCTS
*/

/*  ---------------------------------------------------------------------------- 
	TAXONOMIES
*/
$tax_term_functionality_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Functionality',
	'taxonomy' => 'tdc-review-criteria',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
	'filter_image' => '',
	'tax_term_meta' => array( 
		'tdb_filter_color' => '',
	),
));

$tax_term_design_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Design',
	'taxonomy' => 'tdc-review-criteria',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
	'filter_image' => '',
	'tax_term_meta' => array( 
		'tdb_filter_color' => '',
	),
));

$tax_term_usability_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Usability',
	'taxonomy' => 'tdc-review-criteria',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
	'filter_image' => '',
	'tax_term_meta' => array( 
		'tdb_filter_color' => '',
	),
));

$tax_term_value_for_money_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Value for money',
	'taxonomy' => 'tdc-review-criteria',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
	'filter_image' => '',
	'tax_term_meta' => array( 
		'tdb_filter_color' => '',
	),
));

$tax_term_crm_software_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'CRM Software',
	'taxonomy' => 'tdtax_app_category',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));

$tax_term_project_management_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Project Management',
	'taxonomy' => 'tdtax_app_category',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));

$tax_term_email_marketing_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Email Marketing',
	'taxonomy' => 'tdtax_app_category',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));

$tax_term_human_resources_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Human Resources',
	'taxonomy' => 'tdtax_app_category',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));

$tax_term_romania_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Romania',
	'taxonomy' => 'tdtax_app_location',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));

$tax_term_germany_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Germany',
	'taxonomy' => 'tdtax_app_location',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));

$tax_term_spain_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Spain',
	'taxonomy' => 'tdtax_app_location',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));

$tax_term_italy_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Italy',
	'taxonomy' => 'tdtax_app_location',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));

$tax_term_newspaper_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Newspaper',
	'taxonomy' => 'tdtax_app_tag',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));

$tax_term_software_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Software',
	'taxonomy' => 'tdtax_app_tag',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));

$tax_term_directory_id = td_demo_tax::add_taxonomy( array(
	'taxonomy_name' => 'Directory',
	'taxonomy' => 'tdtax_app_tag',
	'taxonomy_template' => '',
	'parent_id' => 0,
	'description' => '',
));


/*  ---------------------------------------------------------------------------- 
	CPTs
*/
$cpt_td_post_hrhub_id = td_demo_content::add_cpt( array(
	'title' => 'HRHub',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_6',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_human_resources_id ),
		'tdtax_app_location' => array( $tax_term_germany_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_talenttrackr_id = td_demo_content::add_cpt( array(
	'title' => 'TalentTrackr',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_7',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_crm_software_id ),
		'tdtax_app_location' => array( $tax_term_spain_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_hr360_id = td_demo_content::add_cpt( array(
	'title' => 'HR360',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_8',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array(
		'tdtax_app_category' => array( $tax_term_human_resources_id ),
		'tdtax_app_location' => array( $tax_term_italy_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_workforcepro_id = td_demo_content::add_cpt( array(
	'title' => 'WorkForcePro',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_9',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_human_resources_id ),
		'tdtax_app_location' => array( $tax_term_italy_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_hrgenius_id = td_demo_content::add_cpt( array(
	'title' => 'HRGenius',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_10',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_human_resources_id ),
		'tdtax_app_location' => array( $tax_term_romania_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_hrmaster_id = td_demo_content::add_cpt( array(
	'title' => 'HRMaster',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_6',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_human_resources_id ),
		'tdtax_app_location' => array( $tax_term_romania_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_talentohr_id = td_demo_content::add_cpt( array(
	'title' => 'TalentoHR',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_7',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_human_resources_id ),
		'tdtax_app_location' => array( $tax_term_germany_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_peopleconnect_id = td_demo_content::add_cpt( array(
	'title' => 'PeopleConnect',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_8',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_human_resources_id ),
		'tdtax_app_location' => array( $tax_term_spain_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_clickboost_id = td_demo_content::add_cpt( array(
	'title' => 'ClickBoost',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_9',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_email_marketing_id ),
		'tdtax_app_location' => array( $tax_term_romania_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_emailgenius_id = td_demo_content::add_cpt( array(
	'title' => 'EmailGenius',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_10',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_email_marketing_id ),
		'tdtax_app_location' => array( $tax_term_germany_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_opentrackr_id = td_demo_content::add_cpt( array(
	'title' => 'OpenTrackr',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_6',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_email_marketing_id ),
		'tdtax_app_location' => array( $tax_term_spain_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_mailflow_id = td_demo_content::add_cpt( array(
	'title' => 'MailFlow',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_7',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_email_marketing_id ),
		'tdtax_app_location' => array( $tax_term_italy_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_engagemail_id = td_demo_content::add_cpt( array(
	'title' => 'EngageMail',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_8',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_email_marketing_id ),
		'tdtax_app_location' => array( $tax_term_germany_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_reachconnect_id = td_demo_content::add_cpt( array(
	'title' => 'ReachConnect',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_9',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_email_marketing_id ),
		'tdtax_app_location' => array( $tax_term_spain_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_inboxmaster_id = td_demo_content::add_cpt( array(
	'title' => 'InboxMaster',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_10',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_email_marketing_id ),
		'tdtax_app_location' => array( $tax_term_italy_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_teamsync_id = td_demo_content::add_cpt( array(
	'title' => 'TeamSync',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_6',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_project_management_id ),
		'tdtax_app_location' => array( $tax_term_spain_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_taskgenius_id = td_demo_content::add_cpt( array(
	'title' => 'TaskGenius',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_7',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_project_management_id ),
		'tdtax_app_location' => array( $tax_term_italy_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_mailpro_id = td_demo_content::add_cpt( array(
	'title' => 'MailPro',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_8',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_email_marketing_id ),
		'tdtax_app_location' => array( $tax_term_romania_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_teamplanr_id = td_demo_content::add_cpt( array(
	'title' => 'TeamPlanr',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_9',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_project_management_id ),
		'tdtax_app_location' => array( $tax_term_italy_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_taskmaster_id = td_demo_content::add_cpt( array(
	'title' => 'TaskMaster',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_10',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_project_management_id ),
		'tdtax_app_location' => array( $tax_term_romania_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_projectpulse_id = td_demo_content::add_cpt( array(
	'title' => 'ProjectPulse',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_6',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_project_management_id ),
		'tdtax_app_location' => array( $tax_term_germany_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_tasksync_id = td_demo_content::add_cpt( array(
	'title' => 'TaskSync',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_7',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_project_management_id ),
		'tdtax_app_location' => array( $tax_term_romania_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_projectflow_id = td_demo_content::add_cpt( array(
	'title' => 'ProjectFlow',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_8',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_project_management_id ),
		'tdtax_app_location' => array( $tax_term_germany_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_protasker_id = td_demo_content::add_cpt( array(
	'title' => 'ProTasker',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_9',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_project_management_id ),
		'tdtax_app_location' => array( $tax_term_spain_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_fusionedge_id = td_demo_content::add_cpt( array(
	'title' => 'FusionEdge',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_10',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_crm_software_id ),
		'tdtax_app_location' => array( $tax_term_spain_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_revivocrm_id = td_demo_content::add_cpt( array(
	'title' => 'RevivoCRM',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_6',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_crm_software_id ),
		'tdtax_app_location' => array( $tax_term_italy_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_stellarcrm_id = td_demo_content::add_cpt( array(
	'title' => 'StellarCRM',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_7',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_crm_software_id ),
		'tdtax_app_location' => array( $tax_term_germany_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_zenithconnect_id = td_demo_content::add_cpt( array(
	'title' => 'ZenithConnect',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_8',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_crm_software_id ),
		'tdtax_app_location' => array( $tax_term_spain_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_cybervance_id = td_demo_content::add_cpt( array(
	'title' => 'Cybervance',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_9',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_crm_software_id ),
		'tdtax_app_location' => array( $tax_term_italy_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_nexuspro_id = td_demo_content::add_cpt( array(
	'title' => 'NexusPro',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_10',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_crm_software_id ),
		'tdtax_app_location' => array( $tax_term_romania_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_novusflow_id = td_demo_content::add_cpt( array(
	'title' => 'NovusFlow',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_6',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_crm_software_id ),
		'tdtax_app_location' => array( $tax_term_germany_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));

$cpt_td_post_velocrm_id = td_demo_content::add_cpt( array(
	'title' => 'VeloCRM',
	'type' => 'tdcpt_app_listing',
	'file' => 'tdcpt_app_listing_default.txt',
	'cpt_image_td_id' => 'td_pic_7',
	'post_meta' => array( 
		'tdcf_app_url' => 'aHR0cHM6Ly9leGFtcGxlLmNvbQ==',
		'_tdcf_app_url' => 'ZmllbGRfNjNkMTQwYTQ2ZTZkZQ==',
		'tdcf_app_phone' => 'KzEgNTU1LTEyMy00NTY3',
		'_tdcf_app_phone' => 'ZmllbGRfNjNkMTQwYjg2ZTZkZg==',
		'tdcf_app_email' => 'ZW1haWxAZXhhbXBsZS5jb20=',
		'_tdcf_app_email' => 'ZmllbGRfNjNkMTQwZDU2ZTZlMA==',
		'tdcf_app_features' => 'VXNlciBhdXRoZW50aWNhdGlvbg0KUHVzaCBub3RpZmljYXRpb25zDQpTb2NpYWwgbWVkaWEgaW50ZWdyYXRpb24NCkluLWFwcCBtZXNzYWdpbmcNCkxvY2F0aW9uLWJhc2VkIHNlcnZpY2VzDQpPZmZsaW5lIG1vZGUNCkN1c3RvbWl6YWJsZSBzZXR0aW5ncw0KSW4tYXBwIHB1cmNoYXNlcw0KQXVnbWVudGVkIHJlYWxpdHkgKEFSKQ0KQW5hbHl0aWNzIGFuZCByZXBvcnRpbmcNCk11bHRpLWxhbmd1YWdlIHN1cHBvcnQNClZvaWNlIHJlY29nbml0aW9uDQpCYXJjb2RlL1FSIGNvZGUgc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggdGhpcmQtcGFydHkgc2VydmljZXMNClBlcnNvbmFsaXplZCByZWNvbW1lbmRhdGlvbnMNCk9mZmxpbmUgZGF0YSBzeW5jaHJvbml6YXRpb24NCkdhbWlmaWNhdGlvbiBlbGVtZW50cw0KVm9pY2UvdmlkZW8gY2FsbGluZw0KRG9jdW1lbnQvaW1hZ2Ugc2Nhbm5pbmcNCkludGVncmF0aW9uIHdpdGggd2VhcmFibGUgZGV2aWNlcw==',
		'_tdcf_app_features' => 'ZmllbGRfNjQ5MDc2MGFlOGZmNg==',
	),
	'cpt_taxonomies' => array( 
		'tdtax_app_category' => array( $tax_term_crm_software_id ),
		'tdtax_app_location' => array( $tax_term_romania_id ),
		'tdtax_app_tag' => array( $tax_term_directory_id, $tax_term_newspaper_id, $tax_term_software_id ),
	),
    'td_post_theme_settings' => array(
        'td_gallery_imgs' => array('tdx_pic_3', 'tdx_pic_4', 'tdx_pic_6')
    ),
));


/*  ---------------------------------------------------------------------------- 
	MENUS
*/
$menu_td_demo_footer_menu_id = td_demo_menus::create_menu('td-demo-footer-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_link( array(
	'title' => 'How It Works',
	'add_to_menu_id' => $menu_td_demo_footer_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link( array(
	'title' => 'FAQ',
	'add_to_menu_id' => $menu_td_demo_footer_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_link( array(
	'title' => 'Resources',
	'add_to_menu_id' => $menu_td_demo_footer_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_page(array(
	'title' => 'Blog',
	'add_to_menu_id' => $menu_td_demo_footer_menu_id,
	'page_id' => $page_blog_id,
	'parent_id' => ''
));

$menu_td_demo_footer_menu_extra_id = td_demo_menus::create_menu('td-demo-footer-menu-extra', ''); 


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_page(array(
	'title' => 'Software Applications',
	'add_to_menu_id' => $menu_td_demo_footer_menu_extra_id,
	'page_id' => $page_software_applications_id,
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link( array(
	'title' => 'About Us',
	'add_to_menu_id' => $menu_td_demo_footer_menu_extra_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_2_id = td_demo_menus::add_link( array(
	'title' => 'Contact',
	'add_to_menu_id' => $menu_td_demo_footer_menu_extra_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_3_id = td_demo_menus::add_link( array(
	'title' => 'Careers',
	'add_to_menu_id' => $menu_td_demo_footer_menu_extra_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_td_demo_header_menu_id = td_demo_menus::create_menu('td-demo-header-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_link( array(
	'title' => 'Software Categories',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_taxonomy( array(
	'title' => 'CRM Software',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'taxonomy' => 'tdtax_app_category',
	'tax_id' => $tax_term_crm_software_id,
	'parent_id' => $menu_item_0_id
));

$menu_item_2_id = td_demo_menus::add_taxonomy( array(
	'title' => 'Project Management',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'taxonomy' => 'tdtax_app_category',
	'tax_id' => $tax_term_project_management_id,
	'parent_id' => $menu_item_0_id
));

$menu_item_3_id = td_demo_menus::add_taxonomy( array(
	'title' => 'Email Marketing',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'taxonomy' => 'tdtax_app_category',
	'tax_id' => $tax_term_email_marketing_id,
	'parent_id' => $menu_item_0_id
));

$menu_item_4_id = td_demo_menus::add_taxonomy( array(
	'title' => 'Human Resources',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'taxonomy' => 'tdtax_app_category',
	'tax_id' => $tax_term_human_resources_id,
	'parent_id' => $menu_item_0_id
));

$menu_item_5_id = td_demo_menus::add_page(array(
	'title' => 'Software Applications',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'page_id' => $page_software_applications_id,
	'parent_id' => ''
));

$menu_item_6_id = td_demo_menus::add_page(array(
	'title' => 'Submit Your APP',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'page_id' => $page_new_listing_id,
	'parent_id' => ''
));

$menu_item_7_id = td_demo_menus::add_page(array(
	'title' => 'Subscribe',
	'add_to_menu_id' => $menu_td_demo_header_menu_id,
	'page_id' => $page_tds_switching_plans_wizard_id,
	'parent_id' => ''
));

$menu_td_demo_sub_footer_menu_id = td_demo_menus::create_menu('td-demo-sub-footer-menu', ''); 


/*  ---------------------------------------------------------------------------- 
	MENUS ITEMS
*/
$menu_item_0_id = td_demo_menus::add_link( array(
	'title' => 'Terms & Conditions',
	'add_to_menu_id' => $menu_td_demo_sub_footer_menu_id,
	'url' => '#',
	'parent_id' => ''
));

$menu_item_1_id = td_demo_menus::add_link( array(
	'title' => 'Privacy Policy',
	'add_to_menu_id' => $menu_td_demo_sub_footer_menu_id,
	'url' => '#',
	'parent_id' => ''
));


/*  ---------------------------------------------------------------------------- 
	CLOUD TEMPLATES
*/
$template_search_template_app_listings_id = td_demo_content::add_cloud_template( array(
	'title' => 'Search Template - APP Listings - APP Find PRO',
	'file' => 'search_cloud_template.txt',
	'template_type' => 'search',
));

td_demo_misc::update_global_cpt_template( 'tdb_template_' . $template_search_template_app_listings_id, 'tdcpt_app_listing', 'search_tpl' );

td_demo_misc::update_global_search_template( 'tdb_template_' . $template_search_template_app_listings_id );

$template_404_template_id = td_demo_content::add_cloud_template( array(
	'title' => '404 Template - APP Find PRO',
	'file' => '404_cloud_template.txt',
	'template_type' => '404',
));

td_demo_misc::update_global_404_template( 'tdb_template_' . $template_404_template_id );


$template_single_template_id = td_demo_content::add_cloud_template( array(
	'title' => 'Single Template - APP Find PRO',
	'file' => 'post_cloud_template.txt',
	'template_type' => 'single',
));

td_util::update_option( 'td_default_site_post_template', 'tdb_template_' . $template_single_template_id );


$template_tag_template_id = td_demo_content::add_cloud_template( array(
	'title' => 'Tag Template - APP Find PRO',
	'file' => 'tag_cloud_template.txt',
	'template_type' => 'tag',
));

td_demo_misc::update_global_tag_template( 'tdb_template_' . $template_tag_template_id );


$template_date_template_id = td_demo_content::add_cloud_template( array(
	'title' => 'Date Template - APP Find PRO',
	'file' => 'date_cloud_template.txt',
	'template_type' => 'date',
));

td_demo_misc::update_global_date_template( 'tdb_template_' . $template_date_template_id );


$template_category_template_id = td_demo_content::add_cloud_template( array(
	'title' => 'Category Template - APP Find PRO',
	'file' => 'cat_cloud_template.txt',
	'template_type' => 'category',
));

td_demo_misc::update_global_category_template( 'tdb_template_' . $template_category_template_id );


$template_custom_taxonomy_template_app_listing_taxonomies_id = td_demo_content::add_cloud_template( array(
	'title' => 'Custom Taxonomy Template - APP Listing Taxonomies - APP Find PRO',
	'file' => 'custom_taxonomy_template_app_listing_taxonomies_cloud_template.txt',
	'template_type' => 'cpt_tax',
));

td_demo_misc::update_global_cpt_template( 'tdb_template_' . $template_custom_taxonomy_template_app_listing_taxonomies_id, 'tdcpt_app_listing', 'archive_tpl' );


td_demo_misc::update_global_cpt_tax_template( 'tdb_template_' . $template_custom_taxonomy_template_app_listing_taxonomies_id, 'app_listing_category' );


td_demo_misc::update_global_cpt_tax_template( 'tdb_template_' . $template_custom_taxonomy_template_app_listing_taxonomies_id, 'tdtax_app_category' );


td_demo_misc::update_global_cpt_tax_template( 'tdb_template_' . $template_custom_taxonomy_template_app_listing_taxonomies_id, 'tdtax_app_tag' );


td_demo_misc::update_global_cpt_tax_template( 'tdb_template_' . $template_custom_taxonomy_template_app_listing_taxonomies_id, 'tdtax_app_location' );


$template_custom_post_type_template_app_listing_id = td_demo_content::add_cloud_template( array(
	'title' => 'Custom Post Type Template - APP Listing - APP Find PRO',
	'file' => 'cpt_cloud_template.txt',
	'template_type' => 'cpt',
));

td_demo_misc::update_global_cpt_template( 'tdb_template_' . $template_custom_post_type_template_app_listing_id, 'app_listing' );


td_demo_misc::update_global_cpt_template( 'tdb_template_' . $template_custom_post_type_template_app_listing_id, 'tdcpt_app_listing' );


$template_footer_template_id = td_demo_content::add_cloud_template( array(
	'title' => 'Footer Template - APP Find PRO',
	'file' => 'footer_template_cloud_template.txt',
	'template_type' => 'footer',
));

td_demo_misc::update_global_footer_template( 'tdb_template_' . $template_footer_template_id );


$template_header_template_id = td_demo_content::add_cloud_template( array(
	'title' => 'Header Template - APP Find PRO',
	'file' => 'header_template_cloud_template.txt',
	'template_type' => 'header',
));

td_demo_misc::update_global_header_template( 'tdb_template_' . $template_header_template_id );



/*  ---------------------------------------------------------------------------- 
	GENERAL SETTINGS
*/
td_demo_misc::update_background('', false);

td_demo_misc::update_background_mobile('');

td_demo_misc::update_background_login('');

td_demo_misc::update_background_header('');

td_demo_misc::update_background_footer('');

td_demo_misc::update_footer_text('');

td_demo_misc::update_logo(array('normal' => '','retina' => '','mobile' => '',));

td_demo_misc::update_footer_logo(array('normal' => '','retina' => '',));

td_demo_misc::add_social_buttons(array());

$generated_css = td_css_generator(); 
if ( function_exists('tdsp_css_generator') ) { 
	$generated_css .= tdsp_css_generator();
}
td_util::update_option( 'tds_user_compile_css', $generated_css );

// cloud templates metas
td_demo_content::update_meta( $template_footer_template_id, 'tdc_footer_template_id', $template_footer_template_id );

td_demo_content::update_meta( $template_header_template_id, 'tdc_header_template_id', $template_header_template_id );
update_post_meta( $template_header_template_id, 'header_mobile_menu_id', $menu_td_demo_header_menu_id );

// pages metas