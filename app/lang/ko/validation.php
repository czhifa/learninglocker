<?php

return array(

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

	"accepted"         => ":attribute는 허용해야합니다.",
	"active_url"       => ":attribute는 유효한 URL이 아닙니다.",
	"after"            => ":attribute는 :date 후 날짜 여야합니다.",
	"alpha"            => ":attribute에는 문자를 포함 할 수있다.",
	"alpha_dash"       => ":attribute는 문자, 숫자 및 대시를 포함 할 수있다.",
	"alpha_num"        => ":attribute는 문자와 숫자를 포함 할 수 있습니다.",
	"array"            => ":attribute는 배열이어야합니다.",
	"before"           => ":attribute는 :date 전에 날짜해야합니다.",
	"between"          => array(
		"numeric" => ":attribute는 :min와 :max 사이 여야합니다.",
		"file"    => ":attribute는 :min와 :max 사이 여야합니다(KB).",
		"string"  => ":attribute는 :min와 :max 사이 여야합니다(등장 인물).",
		"array"   => ":attribute는 :min와 :max 사이 여야합니다(달).",
	),
	"confirmed"        => ":attribute 확인이 일치하지 않습니다.",
	"date"             => ":attribute는 유효한 날짜가 아닙니다.",
	"date_format"      => ":attribute는 형식 :format와 일치하지 않습니다.",
	"different"        => ":attribute 와 :other는 서로 달라야합니다.",
	"digits"           => ":attribute는 :digits디지털해야합니다.",
	"digits_between"   => ":attribute 는 :min 와 :max 사이 여야합니다.(숫자)",
	"email"            => ":attribute 형식이 잘못되었습니다.",
	"exists"           => "선택한 :attribute가 잘못되었습니다.",
	"image"            => ":attribute는 이미지 여야합니다.",
	"in"               => "선택한 :attribute가 잘못되었습니다.",
	"integer"          => ":attribute는 정수 여야합니다.",
	"ip"               => ":attribute는 유효한 IP 주소 여야합니다.",
	"max"              => array(
		"numeric" => ":attribute 는 :max보다 크다하지 않을 수 있습니다",
		"file"    => ":attribute는 :max 킬로바이트보다 클 수 없습니다.",
		"string"  => ":attribute는 :max 자를 초과하지 않을 수 있습니다.(등장 인물)",
		"array"   => ":attribute는 :max 항목 이상이 없을 수 있습니다.",
	),
	"mimes"            => ":attribute타입의 파일이어야합니다::values.",
	"min"              => array(
		"numeric" => ":attribute는 적어도 :min를해야합니다.",
		"file"    => ":attribute는 적어도 :min해야합니다.(KB)",
		"string"  => ":attribute는 적어도 :min해야합니다.(등장 인물)",
		"array"   => ":attribute는 적어도 :min해야합니다 .(달)",
	),
	"not_in"           => "선택한 :attribute가 잘못되었습니다.",
	"numeric"          => ":attribute는 숫자 여야합니다.",
	"regex"            => ":attribute 형식이 잘못되었습니다.",
	"required"         => ":attribute 필드가 필요합니다.",
	"required_if"      => ":other는 :value 인 경우 :attribute 필드가 필요합니다.",
	"required_with"    => ":values가 존재할 때 :attribute 필드가 필요하다.",
	"required_without" => ":values가 존재하지 않을 때 :attribute 필드가 필요하다.",
	"same"             => ":attribute와 :other는 일치해야합니다.",
	"size"             => array(
		"numeric" => ":attribute는 :size해야합니다.",
		"file"    => ":attribute는 :size해야합니다.(KB)",
		"string"  => ":attribute는 :size해야합니다.(등장 인물).",
		"array"   => ":attribute는 :size해야합니다.(달)",
	),
	"unique"           => ":attribute는 이미 촬영되었습니다.",
	"url"              => ":attribute 형식이 잘못되었습니다.",
  "alpha_spaces"     => ":attribute는 문자와 공백을 포함 할 수있다.",

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

	'custom' => array(),

	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap attribute place-holders
	| with something more reader friendly such as E-Mail Address instead
	| of "email". This simply helps us make messages a little cleaner.
	|
	*/

	'attributes' => array(),

);
