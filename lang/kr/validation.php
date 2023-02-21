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

    'accepted' => ':attribute 사용가능합니다',
    'accepted_if' => ':value 이 :other 일 경우 :attribute는 사용가능합니다.',
    'active_url' => ':attribute 유효한 URL이 아닙니다',
    'after' => ':attribute의 일자는 :date 이후여야 합니다',
    'after_or_equal' => ':attribute 의 일자는 :date과 같거나 이후여야 합니다',
    'alpha' => ':attribute는 문자만 포함되어야 합니다',
    'alpha_dash' => ':attribute 는 문자,숫자,(-),(_)만 포함되어야 합니다',
    'alpha_num' => ':attribute 는 문자,숫자만 포함되어야 합니다',
    'array' => ':attribute 는 배열이여야 합니다',
    'ascii' => ':attribute 는 단일 바이트 영숫자 문자 및 기호만 포함해야 합니다',
    'before' => ':attribute 는 :date 이전이여야 합니다',
    'before_or_equal' => ':attribute 는 :date 보다 같거나 이전이여야 합니다',
    'between' => [
        'array' => ':attribute 는 :min 과 :max 사이여야 합니다',
        'file' => ':attribute 는 :min 과 :max 킬로바이트 사이여야 합니다',
        'numeric' => ':attribute 는 :min 과 :max 사이여야 합니다',
        'string' => ':attribute 는 :min 과 :max 문자 사이여야 합니다',
    ],
    'boolean' => ':attribute 는 true 또는 false 입니다',
    'confirmed' => ':attribute 일치하지 않습니다',
    'current_password' => '비밀번호가 틀렸습니다',
    'date' => ':attribute 유효한 날짜가 아닙니다',
    'date_equals' => ':attribute 는 :date와 같아야 합니다',
    'date_format' => ':attribute 는 :format 형식과 일치하지 않습니다',
    'decimal' => ':attribute 는 :decimal 소수점 이하여야 합니다',
    'declined' => ':attribute 거절되어야 합니다',
    'declined_if' => ':other 이 :value 일 경우 :attribute 는 거절되어야 합니다',
    'different' => ':attribute 과 :other 는 달라야 합니다',
    'digits' => ':attribute 는 :digits 숫자여야 합니다',
    'digits_between' => ':attribute 는 최소 :min 최대 :max 여야 합니다',
    'dimensions' => ':attribute 이미지 크기가 잘못되었습니다',
    'distinct' => ':attribute 값이 중복되었습니다',
    'doesnt_end_with' => ':attribute 는 다음 :values 중 하나로 끝날 수 없습니다',
    'doesnt_start_with' => ':attribute 는 다음 :values로 시작될 수 없습니다',
    'email' => ':attribute 유효한 이메일주소여야 합니다',
    'ends_with' => ':attribute 는 다음 :values 로 끝나야 합니다',
    'enum' => '선택된 :attribute는 유효하지 않습니다',
    'exists' => '선택된 :attribute 는 유효하지 않습니다',
    'file' => ':attribute 는 파일이여야 합니다',
    'filled' => ':attribute 는 값이 존재해야 합니다',
    'gt' => [
        'array' => ':attribute 는 :value 보다 있어야 합니다',
        'file' => ':attribute 는 :value 킬로바이트보다 커야합니다',
        'numeric' => ':attribute 는 :value 보다 커야합니다', 
        'string' => ':attribute 는 :value 문자보다 커야합니다',
    ],
    'gte' => [
        'array' => ':attribute 는 :value 거나 더 많아야 합니다',
        'file' => ':attribute 는 :value 킬로바이트보다 같거나 커야합니다',
        'numeric' => ':attribute 는 :value 보다 같거나 커야합니다',
        'string' => ':attribute 는 :value 문자보다 같거나 커야합니다',
    ],
    'image' => ':attribute 는 이미지여야 합니다',
    'in' => '선택된 :attribute 는 유효합니다',
    'in_array' => ':attribute 는 :other에 존재하지 않습니다',
    'integer' => ':attribute 는 정수여야 합니다',
    'ip' => ':attribute 는 유효한 IP주소여야 합니다',
    'ipv4' => ':attribute 는 유효한 IPv4주소여야 합니다',
    'ipv6' => ':attribute 는 유효한 IPv6주소여야 합니다',
    'json' => ':attribute 는 유효한 JSON string 이여야 합니다',
    'lowercase' => ':attribute 는 소문자여야 합니다.',
    'lt' => [
        'array' => ' :attribute 는 :value 보다 작아야 합니다',
        'file' => ':attribute 는 :value 킬로바이트보다 작아야 합니다',
        'numeric' => ':attribute 는 :value 보다 작아야 합니다',
        'string' => ':attribute 는 :value 문자보다 작아야 합니다',
    ],
    'lte' => [
        'array' => ':attribute 는 :value 보다 커야 합니다',
        'file' => ':attribute 는 :value 킬로바이트보다 작거나 같아야 합니다',
        'numeric' => ':attribute 는 :value 보다 작거나 같아야 합니다',
        'string' => ':attribute 는 :value 문자보다 작거나 같아야 합니다. ',
    ],
    'mac_address' => ':attribute 는 유효한 MAC주소여야 합니다',
    'max' => [
        'array' => ':attribute 는 :max 항목수를 초과할 수 없습니다',
        'file' => ':attribute 는 최대 :max 킬로바이트보다 클 수 없습니다',
        'numeric' => ':attribute 는 최대 :max 보다 클 수 없습니다',
        'string' => ':attribute 는 :max 문자보다 클 수 없습니다',
    ],
    'max_digits' => ':attribute 는 :max 자리수보다 클 수 없습니다',
    'mimes' => ':attribute 는 :values 형식의 파일이어야 합니다',
    'mimetypes' => ':attribute 는 :values 형식의 파일이어야 합니다',
    'min' => [
        'array' => ':attribute 는 최소 :min 항목이 있어야 합니다',
        'file' => ':attribute 는 최소 :min 킬로바이트이어야 합니다',
        'numeric' => ':attribute 는 최소 :min 이어야 합니다',
        'string' => ':attribute 는 최소 :min 문자여야 합니다',
    ],
    'min_digits' => ':attribute 에는 최소 :min 숫자가 있어야 합니다',
    'multiple_of' => ':attribute 는 :value의 배수여야 합니다',
    'not_in' => '선택한 :attribute 는 유효합니다',
    'not_regex' => ':attribute 형식은 유효합니다',
    'numeric' => ':attribute 숫자여야 합니다',
    'password' => [
        'letters' => ':attribute 는 문자를 하나 이상 포함해야 합니다',
        'mixed' => ':attribute 각각 대문자와 소문자 하나 이상 포함해야 합니다',
        'numbers' => ':attribute 숫자를 하나 이상 포함해야 합니다',
        'symbols' => ':attribute 기호를 하나 이상 포함해야 합니다',
        'uncompromised' => '지정된 :attribute 에 데이터 누출에 표시되었습니다. :attribute 다른 항목을 선택하세요',
    ],
    'present' => ':attribute 는 존재해야 합니다',
    'prohibited' => ':attribute 는 금지되어 있습니다',
    'prohibited_if' => ':attribute 는 :other 이 :value 일때 금지되어 있습니다',
    'prohibited_unless' => ':attribute field is prohibited unless :other is in :values.',
    'prohibits' => ':attribute field prohibits :other from being present.',
    'regex' => ':attribute 형식이 유효하지 않습니다',
    'required' => ':attribute 가 필요합니다',
    'required_array_keys' => ':attribute 에는 :values 항목이 포함되어야 합니다',
    'required_if' => ':other 가 :value 일때 :attribute 가 필요합니다',
    'required_if_accepted' => ':other를 사용할 경우 :attribute 가 필수 항목입니다',
    'required_unless' => ':other 가 :values에 있지 않는 한 :attribute 항목이 필수입니다',
    'required_with' => ':values가 있는 경우에는 :attribute 항목이 필요합니다',
    'required_with_all' => ':values가 있는 경우에는 :attribute 항목이 필요합니다',
    'required_without' => ':values가 없는 경우에는 :attribute 항목이 필요합니다',
    'required_without_all' => ':values 항목이 없는 경우 :attribute 항목이 필요합니다',
    'same' => ':attribute 과 :other 가 일치해야 합니다',
    'size' => [
        'array' => ':attribute 는 :size 항목을 포함해야 합니다',
        'file' => ':attribute 는 :size 킬로바이트여야 합니다',
        'numeric' => ':attribute 는 :size 여야 합니다',
        'string' => ':attribute 는 :size 여야 합니다',
    ],
    'starts_with' => ':attribute 는 다음 :values 로 시작해야 합니다',
    'string' => ':attribute 는 문자열이여야 합니다',
    'timezone' => ':attribute 는 유효한 시간대여야 합니다',
    'unique' => ':attribute 이미 존재합니다',
    'uploaded' => ':attribute 업로드 실패',
    'uppercase' => ':attribute 는 대문자여야 합니다',
    'url' => ':attribute 는 유효한 URL입니다',
    'ulid' => ':attribute 는 유효한 ULID 입니다',
    'uuid' => ':attribute 는 유효한 UUID 입니다',

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

    'attributes' => [],

];
