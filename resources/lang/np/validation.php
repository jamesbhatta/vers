<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => ':attribute आवश्यक छ। ।',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'province'=>'प्रदेश',
        'district'=>'जिल्ला',
        'municipality'=>'नगरपालिका',
        'vdc'=>'साबिकको ठेगाना',
        'name' => 'नाम',
        'reg_number'=>' दर्ता न.',
        'entry_date'=>'दर्ता मिति',
        'gender'=>'लिङ्ग',
        'dob'=>'जन्म मिति',
        'grandfather_name'=>'हजुरबुबाको नाम',
        'birth_place'=>'जन्म स्थान',
        'birth_type'=>'जन्मेको किसिम',
        'physical_disable'=>'शारीरिक विकृति',
        'father_name'=>'बाबुको नाम',
        'father_parmanent_address'=>'बाबुको स्थायी ठेगाना',
        'father_temporary_address'=>'बाबुको अस्थायी ठेगाना',
        'father_age_while_baby_born'=>'शिशु जन्मिदा बाबुको उमेर',
        'father_education'=>'बाबुको शिक्षा',
        'father_country_where_baby_born'=>'जन्म भएको देश',
        'father_citizenship_number'=>'बाबुको नागरिकता(ना.प्र.नं.)',
        'father_religion'=>'बाबुको धर्म',
        'father_mother_toung'=>'बाबुको मातृभाषा',
        'mother_tongue'=>'मातृभाषा',
        'father_occupation'=>'बाबुको पेशा',
        'father_baby_number'=>'बाबुको हाल सम्म जन्मेको सन्तान संख्या',
        'father_alive_baby_number'=>'बाबुको जीवित सन्तान संख्या',
        'father_helper'=>'बाबुको मदत गर्ने व्यक्ति',
        'father_marige_date'=>'बाबुको विवाहा भएको साल',
        'mother_name'=>'आमाको नाम',
        'mother_parmanent_address'=>'आमाको स्थायी ठेगाना',
        'mother_temporary_address'=>'आमाको अस्थायी ठेगाना',
        'mother_age_while_baby_born'=>'शिशु जन्मिदा आमाको उमेर',
        'mother_education'=>'आमाको शिक्षा',
        'education'=>'शिक्षा',
        'mother_country_where_baby_born'=>'जन्म भएको देश',
        'mother_citizenship_number'=>'आमाको नागरिकता(ना.प्र.नं.)',
        'mother_religion'=>'आमाको धर्म',
        'religion'=>'धर्म',
        'mother_mother_toung'=>'आमाको मातृभाषा',
        'mother_occupation'=>'आमाको पेशा',
        'mother_baby_number'=>'आमाको हाल सम्म जन्मेको सन्तान संख्या',
        'mother_alive_baby_number'=>'आमाको जीवित सन्तान संख्या',
        'mother_helper'=>'आमाको मदत गर्ने व्यक्ति',
        'mother_marige_date'=>'आमाको विवाहा भएको साल',
        'relative_name'=>'साक्षीको नाम',
        'relationship'=>'साक्षीसंगको सम्बन्ध',
        'relative_address'=>'साक्षीको ठेगाना',
        'date'=>'साक्षी मिति',
        'file'=>'फाइल',
        'description'=>'कैफियत',
        'death_date'=>'मरेको मिति',
        'death_place'=>'मरेको ठाउँ',
        'marital_status'=>'वैवाहिक स्थिति',
        'cause_death'=>'मृत्युको कारण',
        'birth_country'=>'जन्म भएको देश',
        'darta_no'=>'दर्ता न.',
        'avillage'=>'गाउँ',
        'reason'=>'कारण',
        'village'=>'गाउँ',
        'ahouseno'=>'घर नं.',
        'age'=>'उमेर',

        'bride_name'=>'दुलाहाको नाम',
        'bride_dob'=>'जन्म मिति',
        'bride_birth_country'=>'जन्म भएको देश',
        'bride_temp_address'=>'स्थाई ठेगाना',
        'bride_education'=>'शिक्षा',
        'bride_religion'=>'धर्म',
        'bride_mother_tongue'=>'मातृभाषा',
        'bride_grandfather_name'=>'बाजेको नाम',
        'bride_father_name'=>'बाबुको नाम',
        'bride_pre_marrige_status'=>'पूर्व वैवाहिक स्थिति',

        'groom_name'=>'दुलाहाको नाम',
        'groom_dob'=>'जन्म मिति',
        'groom_birth_country'=>'जन्म भएको देश',
        'groom_temp_address'=>'स्थाई ठेगाना',
        'groom_education'=>'शिक्षा',
        'groom_religion'=>'धर्म',
        'groom_mother_tongue'=>'मातृभाषा',
        'groom_grandfather_name'=>'बाजेको नाम',
        'groom_father_name'=>'बाबुको नाम',
        'groom_pre_marrige_status'=>'पूर्व वैवाहिक स्थिति',

        'after_province'=>'प्रदेश',
        'after_district'=>'जिल्ला',
        'after_municipality'=>'नगरपालिका',
        'after_vdc'=>'साबिकको ठेगाना',
        'after_village'=>'गाउँ',

        'before_province'=>'प्रदेश',
        'before_district'=>'जिल्ला',
        'before_municipality'=>'नगरपालिका',
        'before_vdc'=>'साबिकको ठेगाना',
        'before_village'=>'गाउँ',
        'book_id'=>'किताब कोड',
        'administrator'=>'पञ्जिकाधिकारीको नाम',
        'registaar'=>'पञ्जिकाधिकारीको नाम',
        'from'=>'देखी',
        'code'=>'किताब कोड',
        'book_type'=>'किताब प्रकार',
    ]
];
