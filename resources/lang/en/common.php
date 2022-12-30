<?php
return [
    'title' => 'Title',
    'short_description' => 'Short Description',
    'long_description' => 'Long Description',
    'image' => 'Image',
    'upload_files' => 'Upload Files',
    'publish_on' => 'Publish On',
    'sms_notification' => 'SMS Notification',
    'push_notification' => 'Push Notification',
    'status' => 'Status',
    'active' => 'Active',
    'inactive' => 'Inactive',
    'submit' => 'Submit',
    'clear' => 'Clear',
    'cancel' => 'Cancel',
    'yes' => 'Yes',
    'no' => 'No',
    'farmers' => 'Farmers',
    'admin_users' => 'Admin Users',
    'bids' => 'Bids',
    'selling_requests' => 'Selling Requests',
    'news' => 'News',
    'faq' => 'FAQ',
    'marketing' => 'Marketing',
    'sms' => 'SMS',
    'notification' => 'Notification',
    'update' => 'Update',
    'notification' => 'Notification',
    'created_date' => 'Created Date',
    'actions' => 'Actions',
    'back_button' => 'Back',
    'filter_button' => 'Filter',
    'reset_button' => 'Reset',
    'from_date' => 'From Date',
    'to_date' => 'To Date',
    'uploaded_date' => 'Uploaded Date',
    'back_to_masters' => 'Back To Masters',
    'language' => 'Language',
    'accept_button' => 'Accept',
    'reject_button' => 'Reject',
    'reset_password_title' => 'Reset Password',
    'sign_out' => 'Sign Out',
    'dashboard_title' => 'Dashboard',
    'master_title' => 'Master',
    'all_option' => 'All',
    'select_country' => 'Select Country',
    'country' => 'Country',
    'hi' => 'Hi',
    'dashboard' => [
        'label' => [
            'farmers' => 'Farmers',
            'admin_users' => 'Admin Users',
            'bids' => 'Bids',
            'selling_requests' => 'Selling Requests',
            'news' => 'News',
            'marketing' => 'Marketing',
            'faq' => 'FAQs'
        ]
    ],
    'masters' => [
        'label' => [
            'delivery_location' => 'Delivery Location',
            'commodity' => 'Commodity',
            'specification' => 'Specification',
            'variety' => 'Variety',
            'country' => 'Country'
        ],
        'delivery_location' => [
            'delivery_location_list' => 'Delivery Location List',
            'add_delivery_location' => 'Add Delivery Location',
            'add_delivery_location_details' => 'Add Delivery Location Details',
            'name' => 'Delivery Location',
            'placeholder' => 'Enter delivery location name',
            'required' => 'Delivery location name is required',
            'max_length' => 'Location name must have less than 100 characters',
            'pattern' => 'Please enter a valid delivery location',
            'delivery_location_add_title' => 'Delivery Location - Add New',
            'delivery_location_update_title' => 'Delivery Location - Update',
            'update_delivery_location_details' => 'Update Delivery Location Details'
        ],
        'commodity' => [
            'commodity_list' => 'Commodity List',
            'add_commodity' => 'Add Commodity',
            'commodity_name' => 'Commodity Name',
            'add_commodity_details' => 'Add Commodity Details',
            'placeholder' => 'Enter your commodity name here...',
            'required' => 'Please enter commodity name',
            'pattern' => 'Please enter a valid commodity name',
            'commodity_add_title' => 'Commodity - Add New',
            'commodity_update_title' => 'Commodity - Update',
            'update_commodity_details' => 'Update Commodity Details'
        ],
        'specification' => [
            'specification_list' => 'Specification List',
            'add_specification' => 'Add Specification',
            'commodity_name' => 'Commodity Name',
            'specification_name' => 'Specification Name',
            'specification_placeholder' => 'Enter your specification name here...',
            'specification_max_length' => 'Specification name must have less than 100 characters',
            'specification_required' => 'Please enter specification name',
            'specification_pattern' => 'Please enter a valid specification name',
            'commodity_required' => 'Please select commodity',
            'select_commodity' => 'Select Commodity',
            'specification_add_title' => 'Specification - Add New',
            'specification_update_title' => 'Specification - Update',
            "add_specification_details" => 'Add Specification Details',
            'update_specification_details' => 'Update Specification Details'
        ],

        'variety' => [
            'variety_list' => 'Variety List',
            'add_variety' => 'Add Variety',
            'variety_add_title' => 'Variety - Add New',
            'variety_update_title' => 'Variety - Update',
            'add_variety_details' => 'Add Variety Details',
            'update_variety_details' => 'Update Variety Details',
            'name' => 'Variety Name',
            'placeholder' => 'Enter Variety name',
            'required' => 'Variety name is required',
            'maxlength' => 'Variety Name must have less than 100 characters',
            'pattern' => 'Please enter a valid variety name',

        ],
        'country' => [
            'country_list' => 'Country List',
            'add_country' => 'Add Country',
            'country_add_title' => 'Country - Add New',
            'country_update_title' => 'Country - Update',
            'add_country_details' => 'Add Country Details',
            'update_country_details' => 'Update Country Details',
            'country_name' => 'Country Name',
            'country_placeholder' => 'Enter Country Name',
            'country_required' => 'Country name is required',
            'country_maxlength' => 'Country must have less than 100 characters',
            'country_pattern' => 'Please enter a valid drop-off location',
            'abbreviation' => 'Abbreviation',
            'abbreviation_placeholder' => 'Enter Abbreviation',
            'abbreviation_required' => 'Enter Abbreviation',
            'abbreviation_maxlength' => 'Abbreviation Name must have less than 100 characters',
            'abbreviation_pattern' => 'Please enter a valid Abbreviation',
            'language' => 'Language',
            'language_placeholder' => 'Enter Language',
            'language_required' => 'Language is required',
            'language_maxlength' => 'Language Name must have less than 100 characters',
            'language_pattern' => 'Please enter a valid Language',
            'direction' => 'Direction',
            'direction_placholder' => 'Select Direction',
            'direction_required' => 'Please Select Direction',
            'duration' => 'Duration (in months)',
            'duration_placeholder' => 'Enter Duration',
            'duration_required' => 'Duration is required',
            'duration_maxlength' => 'Duration must have less than 5 characters',
            "timezone" => "Timezone",
            "timezone_placeholder" => "Enter Timezone(GMT/UTC)",
            "timezone_required" => "Timezone is required",
            "timezone_parsley_pattern" => "Please enter a valid timezone",

        ],

    ],
    'masters_error' =>  [
        'commodity' => [
            'name' => [
                'required' => 'Commodity name field is required.',
                'string' => 'Commodity name must be a string.',
                'max' => 'Commodity name may not be greater than :max.',
                'unique' => 'Commodity name has already been taken.',
            ],
            'status' => [
                'required' => 'status  field is required.',
                'in' => 'status is invalid.',
            ],
        ],
        'delivery_location' => [
            'name' => [
                'required' => 'The Delivery location name field is required.',
                'string' => 'The Delivery location must be a string.',
                'max' => 'The Delivery location name may not be greater than :max.',
                'unique' => 'The Delivery location name has already been taken.',
            ],
            'status' => [
                'required' => 'The status  field is required.',
                'in' => 'The status is invalid.',
            ],
        ],
        'specification' => [
            'name' => [
                'required' => 'The :attribute field is required.',
                'string' => 'The :attribute must be a string.',
                'max' => 'The :attribute name may not be greater than :max.',
                'unique' => 'The username has already been taken.',
            ],
            'commodity_id' => [
                'required' => 'The :attribute field is required.',
                'integer' => 'The :attribute must be a integer.',
                'exists' => 'The Selected commodity is invalid',
            ],
            'status' => [
                'required' => 'The status  field is required.',
                'in' => 'The status is invalid.',
            ],
        ],
        'variety' => [
            'name' => [
                'required' => 'The variety name field is required.',
                'string' => 'The variety name must be a string.',
                'max' => 'The variety name name may not be greater than :max.',
                'unique' => 'The variety name has already been taken.',
            ],
            'commodity_id' => [
                'required' => 'Please select the commodity',
            ],
            'status' => [
                'required' => 'The status  field is required.',
                'in' => 'The status is invalid.',
            ],
        ],
        'country' => [
            'name' => [
                'required' => 'The country name field is required.',
                'string' => 'The country name must be a string.',
                'max' => 'The country name may not be greater than :max.',
                'unique' => 'The country name has already been taken.',
            ],
            'language' => [
                'required' => 'The language field is required.',
                'string' => 'The language field is required.',
            ],
            'direction' => [
                'required' => 'The direction field is required.',
            ],
            'duration' => [
                'required' => 'The duration field is required.',
                'numeric' => 'The :attribute must be a number.'
            ],
            'status' => [
                'required' => 'The status  field is required.',
                'in' => 'The status is invalid.',
            ],
            'abbreviation' => [
                'required' =>  'The abbreviation is required.',
                'unique' => 'The abbreviation has already been taken.',
            ],
            'time_zone' => [
                'required' =>  'The timezone is required.',
            ],
        ]
    ],
    'reset_password' => [
        'label' => [
            "current_password" => 'Current Password',
            'new_password' => 'New Password',
            'confirm_password' => 'Confirm Password',
        ],
        "current_password" =>
        [
            'placeholder' => 'Enter Current Password here...',
            'maxlength' => 'Password must have less than 12 characters',
            'minlength' => 'Password must have more than 5 characters',
            'required' => 'Please enter Old password',
        ],
        'new_password' => [
            'placeholder' => 'Enter New password here...',
            'maxlength' => 'Password must have less than 12 characters',
            'minlength' => 'Password must have more than 5 characters',
            'required' => 'Please enter New password',
        ],
        'confirm_password' => [
            'placeholder' => 'Enter Confirm password here...',
            'maxlength' => 'Password must have less than 12 characters',
            'minlength' => 'Password must have more than 5 characters',
            'required' => 'Please enter confirm password',
        ],

        'validation_error' => [
            'old_password' => [
                'required' => 'The Current password field is required.',
            ],
            'password' => [
                'required' => 'The password field is required.',
                'confirmed' => 'The confirm password confirmation does not match.',
                'min' => 'The password must be at greater than 6 characters.'
            ],

        ]

    ],
    'back_button' => 'Back',
    'filter_button' => 'Filter',
    'reset_button' => 'Reset',
    'from_date' => 'From Date',
    'to_date' => 'To Date',
    'specification_list' => 'Specification List',
    'add_specification' => 'Add Specification',
    'specification_name' => 'Specification Name',
    'specification_add_title' => 'Specification - Add New',
    'specification_update_title' => 'Specification - Update',
    'update_specification_details' => 'Update Specification Details',
    'back_button' => 'Back',
    'filter_button' => 'Filter',
    'reset_button' => 'Reset',
    'all' => 'All',
    'selling_request' => [
        'list_title_page' => 'Selling Request',
        'list_title' => ' Selling Request List',
        'details_title_page' => 'Selling Details',
        'details_title' => 'Selling Details',
        'reject_success' => 'Selling request rejected successfully',
        'reject_error' => 'Selling request status not satisfied.',
        'details' => [
            'bid_id' => [
                'label' => 'Bid ID',
            ],
            'user_id' => [
                'label' => 'User ID',
            ],
            'username' => [
                'label' => 'Username',
            ],
            'month' => [
                'label' => 'Month',
            ],
            'tonnage' => [
                'label' => 'Tonnage',
            ],
            'commodity' => [
                'label' => 'Commodity',
            ],
            'variety' => [
                'label' => 'Variety',
            ],
            'specification' => [
                'label' => 'Specification',
            ],
            'delivery_type' => [
                'label' => 'Ex-Farm or Delivered',
            ],
            'delivery_address' => [
                'label' => 'Delivery Address',
            ],
            'postal_code' => [
                'label' => 'Postal Code',
            ],
        ],
        'status' => [
            "request_received" => "Request Received",
            "bid_sent" => "Bid Sent",
            "request_rejected_by_admin" => "Request Rejected by admin",
            "bid_accepted_by_farmer" => "Bid Accepted by farmer",
            "bid_reject_by_farmer" => "Bid Rejected by farmer/Counter-offer recieved", "counter_offer_accepted_by_admin" => "Counter-offer Accepted by admin", 
            "counter_offer_rejected_by_admin" => "Counter-offer Rejected by admin",
        ],
        'reject_popup' => [
            'title' => 'Do you really want to reject this selling request?',
            'confirm_button' => 'Yes',
            'cancel_button' => 'No',
        ],
        'reson_popup' => [
            'title' => 'Reason for reject',
            'form' => [
                'reason' => [
                    'label' => 'Reason',
                    'placeholder' => 'Enter reason',
                    'required' => 'Please enter reason',
                ]
            ],
            'send_button' => 'Send',
            'cancel_button' => 'Cancel',


        ],
    ],
    'static_contents' => [
        'list_title_page' => 'Static Content',
        'list_title' => ' Static Contents',
        'update_title' => 'Static Content - Update',
        'success' => 'Static Content Updated Successfully',
        'error' => 'Static Content updation Failed',
        'pages' => [
            'faqs' => 'FAQs',
            'terms_and_conditions' => 'Terms And Conditions',
            'privacy_policy' => 'Privacy Policy',
            'help' => 'Help',
        ],
        'faqs' => [
            'page_title' => 'Static Content FAQs',
            'list_title' => 'FAQs',
            'question' => 'Question',
            'answer' => 'Answer',
            'placeholder_question' => 'Enter question here...',
            'placeholder_answser' => 'Enter answer here...',
            'add' => 'Add',
            'remove' => 'Remove',
        ],
        'terms_and_conditions' => [
            'page_title' => 'Static Content Terms And Conditions',
            'list_title' => 'Terms And Conditions',
        ],
        'privacy_policy' => [
            'page_title' => 'Static Content Privacy Policy',
            'list_title' => 'Privacy Policy',
        ],
        'help' => [
            'page_title' => 'Static Content Help',
            'list_title' => 'Help',
        ],
    ],
    'deleted_accounts' => [
        'list_title_page' => 'Deleted Accounts',
        'list_title' => ' Deleted Account List',
    ],
    'admin' => [
        'list_title_page' => 'Admin',
        'list_title' => 'Admin List',
        'create_success' => 'Admin created successfully',
        'update_success' => 'Admin updated successfully',
        'change_password_success' => 'Password Has Been Updated Successfully',
        'change_password_error' => 'Current Password Does Not Match',
        'add_title_page' => 'Admin Add New',
        'add_form_title' => ' Add Admin Details',
        'add_button' => 'Add Admin',
        'edit_title_page' => 'Admin - Update',
        'edit_form_title' => 'Update Admin Details',
        'role_all' => 'All',
    ],
    'table' => [
        'id' => 'ID',
        'month' => 'Month',
        'date_submitted' => 'Date Submitted',
        'static_pages' => 'Static Pages',
        'account_deleted_date' => 'Account Deleted Date',
        'created_date' => 'Created Date',
        'uploaded_date' => 'Uploaded Date',
        'title' => 'Title',
        'name' => 'Name',
        'username' => 'Username',
        'password' => 'Password',
        'email' => 'Email',
        'role' => 'Role',
        'status' => 'Status',
        'view' => 'View',
        'action' => 'Actions',
        'actions' => [
            'edit' => 'Edit',
            'delete' => 'Delete',
        ],
        'age' => 'Age'
    ],
    'delete_popup' => [
        'title' => 'Do You Want To Delete',
        'text' => 'Are you sure?',
        'confirm_button' => 'Yes',
        'cancel_button' => 'Cancel',
        'success_text' => 'Deleted',
        'error_text' => 'Failed to delete',
    ],
    'restore_popup' => [
        'title' => 'Do You Want To Restore',
        'text' => 'Are you sure?',
        'confirm_button' => 'Yes',
        'cancel_button' => 'Cancel',
        'success_text' => 'Restored',
        'error_text' => 'Failed to restore',
        'success_title' => 'Restored',
        'not_restore_error' => 'Cannot Restore',

    ],
    'admin_form' => [
        'name' => [
            'label' => 'Name',
            'placeholder' => 'Enter admin name here...',
            'required' => 'Please enter admin name',
            'maxlength' => 'admin name must have less than 100 characters',
            'pattern' => 'Please enter valid name for admin',
        ],
        'email' => [
            'label' => 'Email',
            'placeholder' => 'Enter admin email here...',
            'maxlength' => 'Email address must have less than 100 characters',
            'required' => 'Please enter email address',

        ],
        'password' => [
            'label' => 'Password',
            'placeholder' => 'Enter admin password here...',
            'minlength' => 'Password must have more than 5 characters',
            'maxlength' => 'Please enter password',
            'required' => 'Please enter password ',
        ],
        'role' => [
            'label' => 'Role',
        ],
        'countries' => [
            'label' => 'Countries',
            'required' => 'Please select countries'
        ],
        'status' => [
            'label' => 'Status',
        ],
    ],

    'datatable' => [
        'general' => [
            'emptyTable' => 'No data available in table',
            'info' => 'Showing _START_ to _END_ of _TOTAL_ entries',
            'infoEmpty' => 'Showing 0 to 0 of 0 entries',
            'infoFiltered' => '(filtered from _MAX_ total entries)',
            'loadingRecords' => 'Loading...',
            'processing' => 'Processing...',
            'zeroRecords' => 'No matching records found',
            'lengthMenu' => 'Show _MENU_ entries',
            'search' => 'Search:',
            'paginate' => [
                'first' => 'First',
                'last' => 'Last',
            ]
        ]
    ],


    'news_module' => [
        'news_title' => 'News ',
        'short_description' => 'Short Description',
        'news_list' => 'News List',
        'add_news_title' => 'News-Add News',
        'update_news_title' => 'News-Update News',
        'add_news' => 'Add News',
        'update_news_details' => 'Update News Details',
        'add_news_details' => 'Add News Details',
        'title' => 'Title',
        'news_title_placeholder' => 'Enter your news title here...',
        'news_title_parsley_validation' => 'Please enter news title',
        'news_title_parsley_max_validation' => 'News title must have less than 100 characters',
        'news_title_parsley_valid_validation' => 'Please enter a valid news title',
        'short_description' => 'Short Description',
        'news_short_description_placeholder' => 'Enter your news short description here...',
        'news_short_description_parsley_validation' => 'Please enter news short description',
        'news_short_description_parsley_max_validation' => 'News short description must have less than 100 characters',
        'long_description' => 'Long Description',
        'news_long_description_placeholder' => 'Enter your news long description here...',
        'news_long_description_parsley_validation' => 'Please enter news long description',
        'image' => 'Image',
        'image_parsley_validation' => 'Please select news image',
        'publish_on' => 'Publish On',
        'date_and_time_parsley_validation' => 'Date And Time is required',
        'type' => 'Type',
        'all_users' => 'Shows news to all users',
        'logged_in_users' => 'Show news to logged in users only',
        'sms_notification' => 'SMS Notification',
        'push_notification' => 'Push Notification',
        'status' => 'Status',
        'active' => 'Active',
        'inactive' => 'Inactive',
        'submit' => 'Submit',
        'clear' => 'Clear',
        'yes' => 'Yes',
        'no' => 'No',
        'date_and_time' => 'Date and Time',
        'update_news_details' => 'Update News Details',
        'update' => 'Update'
    ],
    'farmers' => [
        'add_farmer_page_title' => 'Farmers - Add Farmers',
        'update_farmer_page_title' => 'Farmers - Update Farmers',
        'farmers_list' => 'Farmers',
        'add_farmer' => 'Add Farmer',
        'add_farmer_details' => 'Add Farmer Details',
        'full_name' => 'Full name',
        'username' => 'Username',
        'company_name' => 'Company Name',
        'email' => 'Email',
        'registration_number' => 'Registration Number',
        'sap_business_partner_id' => 'SAP Business Partner Id',
        'optional' => 'optional',
        'pin' => 'PIN',
        'dialling_code' => 'Dialling Code',
        'phone' => 'Phone',
        'address' => 'Address',
        'user_type' => 'User Type',
        'producer' => 'Producer',
        'traders' => 'Traders',
        'others' => 'Others',
        'suspend_account' => 'Suspend And Ask to Update PIN',
        'farmer_name_placeholder' => 'Enter farmer name here...',
        'farmer_name_parsley_validation' => 'Please enter farmer name',
        'farmer_name_parsley_max_validation' => 'Farmer name must have less than 100 characters',
        'farmer_name_parsley_pattern_message' => 'Please enter a valid farmer name',
        'farmer_username_placeholder' => 'Enter username here...',
        'farmer_username_parsley_validation' => 'Please enter username',
        'farmer_username_parsley_max_validation' => 'Username must have less than 100 characters',
        'company_name_placeholder' => 'Enter company name here...',
        'company_name_parsley_validation' => 'Please enter company name here',
        'company_name_parsley_max_validation' => 'Company name must have less than 100 characters',
        'email_placeholder' => 'Enter email here...',
        'email_parsley_validation' => 'Please enter email here',
        'email_parsley_max_validation' => 'Email must have less than 100 characters',
        'registration_placeholder' => 'Enter registration number here...',
        'registration_parsley_max_validation' => 'Enter registration number must not have more than 12 characters',
        'sap_business_partner_id_placeholder' => 'Enter SAP Business Partner ID here...',
        'sap_business_partner_id_max_validation' => 'Enter SAP Business Partner ID must not have more than 20 characters',
        'pin_placeholder' => 'Enter PIN here...',
        'pin_parsley_validation' => 'Please enter PIN',
        'pin_parsley_max_validation' => 'PIN must have less than 12 characters',
        'pin_parsley_min_validation' => 'PIN must have more than 5 characters',
        'dailling_code_parsley_validation' => 'Please enter dialling Code',
        'phone_placeholder' => 'Enter phone here...',
        'phone_parsley_validation' => 'Please enter phone here',
        'address_placeholder' => 'Enter address here...',
        'address_parsley_validation' => 'Please enter address here',
        'address_parsley_max_validation' => 'Enter address here',
        'others_placeholder' => 'Enter Reason',
        'update_farmer_details' =>  'Update Farmer Details',
        'publish_on_parsley_validation' => 'Publish On is required',
        'update_marketing_details' => 'Update Marketing Details',
        'update' => 'Update'
    ],
    'farmer_group' => [
        'farmer_group' => 'Farmer Group',
        'farmer_group_list' => ' Farmer Group List',
        'add_farmer_group' => ' Add Farmer Group',
        'farmer_group_update_page_title' => 'Farmer Group - Update',
        'number_of_farmer' => 'Number of Farmer',
        'created_at'  => ' Created At',
        'add_farmer_group' => 'Add Farmer Group',
        'group_name' => 'Group Name',
        'group_status' => 'Group Status',
        'farmers_in_group' => 'Farmers in group',
        'id' => 'ID',
        'username' => 'Username',
        'action' => 'Action',
        'farmers_not_in_group' => 'Farmers not in group',
        'update_farmer_group' => 'Update Farmer Group',
        'group_name_placeholder' => 'Enter group name...',
        'group_name_parsley_validation' => 'Group name is required',
        'group_name_parsley_pattern_message' => 'Please enter a valid group name',
        'group_name_parsley_max_validation' => 'Group name must be less than 100 characters',
        'farmer_ids_parsley_validation' => 'Please select farmer(s)',
        'update' => 'Update',
        'farmer_group_not_created_validation' => "More than one farmer need to be required to create a group"

    ],
    'marketing_module' => [
        'marketing_title' => 'Marketing',
        'update_marketing' => 'Update marketing',
        'marketing_list' => 'Marketing List',
        'add_marketing' => 'Add Marketing',
        'add_marketing_details' => 'Add Marketing Details',
        'marketing_title_placeholder' => 'Enter your marketing title here...',
        'marketing_title_parsley_validation' => 'Please enter marketing title',
        'marketing_title_parsley_max_validation' => 'Marketing title must have less than 100 characters',
        'marketing_title_parsley_valid_validation' => 'Please enter a valid marketing title',
        'marketing_short_description_placeholder' => 'Enter your marketing short description here...',
        'marketing_short_description_parsley_validation' => 'Please enter marketing short description',
        'marketing_short_description_parsley_max_validation' => 'Marketing short description must have less than 100 characters',
        'marketing_long_description_placeholder' => 'Enter your marketing long description here...',
        'marketing_long_description_parsley_validation' => 'Please enter marketing long description',
        'image_parsley_validation' => 'Please select marketing image',
        'publish_on_parsley_validation' => 'Publish On is required',
        'update_marketing_details' => 'Update Marketing Details',
        'update' => 'Update'
    ],
    'bid_location' => [
        'bid_location_title' => 'Bid location',
        'bid_location_list' => 'Bid Location List',
        'add_bid_location' => 'Add Bid Location',
        'id' => 'ID',
        'bid_location_name' => 'Bid Location Name',
        'add_bid_location_details' => 'Add Bid Location Details',
        'name_placeholder' => 'Enter your bid location name here...',
        'name_parsley_max_validation' => 'bid location name must have less than 100 characters',
        'name_parsley_validation' => 'Please enter bid location name',
        'name_parsley_pattern_message' => 'Please enter a valid bid location',
        'update_bid_location_details' => 'Update Bid Location Details',
        'action' => 'Action',
        'update_bid_location' => 'Update Bid Location'
    ],

    'bid' => [
        'manage_bid' => 'Manage Bids',
        'add_bid_details' => 'Add Bid Details',
        'add_bid' => 'Add Bid',
        'update_bid' => 'Update Bid',
        'bid_date' => 'Bid Date',
        'bid_name' => 'Bid Name',
        'month' => 'Month',
        'no_of_user' => 'No. of user',
        'bid_accepted' => 'Bid Accepted (in Tonnage)',
        'validity' => 'Validity',
        'view' => 'View',
        'bid_name_placeholder' => 'Enter Bid name...',
        'bid_name_parsley_validation' => 'Bid Name is required',
        'bid_name_parsley_pattern_validation' => 'Please enter a valid bid name',
        'bid_name_parsley_max_validation' => 'Bid name must be less than 50 characters',
        'publish_on' => 'Publish on',
        'publish_on_placeholder' => 'Publish On',
        'publish_on_parsley_validation' => 'Publish on is required',
        'month_of_movement' => 'Month of Movement',
        'month_of_movement_placeholder' => 'Month of Movement',
        'month_of_movement_parsley_validation' => 'Month of Movement is required',
        'commodity' => 'Commodity',
        'select_commodity' => 'Select Commodity',
        'commodity_parsley_validation' => 'Please Select Commodity',
        'variety' => 'Variety',
        'select_variety' => 'Select Variety',
        'variety_parsley_validation' => 'Please Select Variety',
        'specification' => 'Specification',
        'select_specification' => 'Select Specification',
        'specification_parsley_validation' => 'Please Select Specification',
        'max_tonnage' => 'Max Tonnage',
        "select_max_tonnage" => 'Select Max Tonnage',
        'max_tonnage_parsley_validation' => 'Please Select Max Tonnage',
        'price' => 'Price',
        'price_placeholder' => 'Enter price',
        'price_parsley_validation' => 'Price is required',
        'price_parsley_valid_validation' => 'Please enter valid amount.',
        'price_parsley_max_validation' => 'The Price must not be greater than 11 digits',
        'price_parsley_type_validation' => "Only Number Allowed",
        'bid_validity' => 'Bid Validity',
        'bid_validity_placeholder' => 'Select date & time',
        'bid_validity_parsley_validation' => 'Bid validity is required',
        'select_bid_location' => 'Select Bid Location',
        'bid_location_parsley_validation' => 'Bid Location is required',
        'group_or_individual' => 'Group or Individual',
        'group_farmers' => 'Group Farmers',
        'individual_farmers' => 'Individual Farmers',
        'select_farmer_group' => 'Select Farmer Group',
        'select_farmer_group_parsley_validation' => 'Farmer Group is required',
        'please_select_farmers_from_below_table' => 'Please select farmers from below table',
        'id' => 'ID',
        'username' => 'Username',
        'action' => 'Action',
        'farmer' => 'Farmer',
        'delivery_method' => 'Delivery Method',
        'ex_farm' => 'Ex-farm',
        'deliver' => 'Deliver',
        'delivery_location' => 'Delivery Location',
        'select_delivery_location' => 'Select Delivery location',
        'delivery_location_parsley_validation' => 'Delivery Location is required',
        'postal_code' => 'Postal Code',
        'postal_code_parsley_validation' => 'Postal code is required',
        'postal_code_parsley_minlength_validation' => 'The Postal code must be at least 3 characters.',
        'postal_code_parsley_maxlength_validation' => 'The Postal code must not be greater than 7 characters.',
        'delivery_address' => 'Delivery Address',
        'delivery_address_placeholder' => 'Delivery Address',
        'delivery_address_parsley_validation' => 'Delivery Address is required',
        'users' => 'Users',
        'name_parsley_validation' => 'Please enter bid location name',
        'name_parsley_pattern_message' => 'Please enter a valid bid location',
        'update_bid_details' => 'Update Bid Details',
        'action' => 'Action',
        'update' => 'Update',
        'bid_details' => 'Bid Details',
        'bid_location' => 'Bid Location',
        'number_of_users' => 'Number of users',
        'status' => 'Status',
        'user_id' => 'User id',
        'tonnage' => 'Tonnage',
        'counter_offer' => 'Counter Offer',
        'bid_status' => 'Bid Status',
        'action' => 'Action',
        'age' => 'Age',
        'country' => 'Country',
        "select_country" => "Select Country",
        "country_parsley_validation" => "Please Select Commodity",
        'bid_id' => 'Bid ID',
        'select_location' => 'select Location',
        'select_farmer_group' => 'Select Farmer Group',

    ],

    'email' => [
        'hi_greet' => 'Hi :name',
        'account_approval_subject' => 'Account Approval - Goodmills',
        'account_approval_body' => 'Your Account has been Approved By Admin.
                                <br> Now You can log in with valid credentials.',
        'account_rejection_subject' => 'Account Rejection - Goodmills',
        'account_rejection_body' => 'Your Account has been rejected by Admin because of the following reason :-<br>',
        'account_suspended_subject' => 'Account Suspended - Goodmills',
        'account_suspended_body' => 'Your Account has been suspended by Admin Please achieve your new Pin by forgetting password to login again on Goodmills.'
    ],

    'notification_message' => [
        'title_pending' => 'Country Request - pending',
        'description_pending' => 'Your country request has been gone back to pending', 'title_approval' => 'Country Request - Approved',
        'description_approval' => 'Your country request has been approved',
        'title_rejection' => 'Country Request - Rejected',
        'description_rejection' => 'Your country request has been rejected',
    ]
];
