<?php

    $manifest =array(
        'acceptable_sugar_flavors' => array('CE','PRO','CORP','ENT','ULT'),
        'acceptable_sugar_versions' => array(
            'exact_matches' => array('6.5.15'),
            'regex_matches' => array('6\\.[0-9]\\.[0-9]$'),
        ),
        'author' => 'Nic',
        'description' => 'Install a new field ABN in Accounts module',
        'icon' => '',
        'is_uninstallable' => true,
        'name' => 'ABN Field Installer',
        'published_date' => '2013-09-04 2013 01:01:01',
        'type' => 'module',
        'version' => '1.0',
    );
    
    $installdefs =array(
        'id' => 'package_1230001001',
        'language'=> array (
			array(
				'from'=> '<basepath>/files/Language/Accounts/en_us.lang.php',
				'to_module'=> 'Accounts',
				'language'=>'en_us'
			),
		),
		'custom_fields'=>array (
		    //Text
		    array(
		        'name' => 'abn_business',
		        'label' => 'LBL_TEXT_FIELD_ABN_BUSINESS',
		        'type' => 'varchar',
		        'module' => 'Accounts',
		        'help' => 'Australia Business Number',
		        'comment' => 'Australia Business Number',
		        'default_value' => '',
		        'max_size' => 255,
		        'required' => false, // true or false
		        'reportable' => true, // true or false
		        'audited' => false, // true or false
		        'importable' => 'true', // 'true', 'false', 'required'
		        'duplicate_merge' => false, // true or false
		    ),
		),
    );

?>