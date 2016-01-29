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

	"accepted"         => ":attribute 必須接受。",
	"active_url"       => ":attribute 不是有效的URL。",
	"after"            => ":attribute 必須是一個在:date之後的日期。",
	"alpha"            => ":attribute 只能包含字母。",
	"alpha_dash"       => ":attribute 只能包含字母、數字或破折號（——）。",
	"alpha_num"        => ":attribute 只能包含字母或數字。",
	"array"            => ":attribute 必須是陣列。",
	"before"           => ":attribute 必須是一個在:date之前的日期。",
	"between"          => array(
		"numeric" => ":attribute 必須在 :min 和 :max之間。",
		"file"    => ":attribute 必須在 :min 和 :max之間（KB）。",
		"string"  => ":attribute 字元數必須在 :min 和 :max之間。",
		"array"   => ":attribute 個數必須在 :min 和 :max 之間。",
	),
	"confirmed"        => ":attribute 確認訊息不匹配。",
	"date"             => ":attribute 不是有效的日期。",
	"date_format"      => ":attribute 與格式 :format不匹配",
	"different"        => ":attribute 與 :other 必須不一樣。",
	"digits"           => ":attribute 必須是 :digits 個數字。",
	"digits_between"   => ":attribute 必須在:min和:max字之間。",
	"email"            => ":attribute 格式無效。",
	"exists"           => "已選的 :attribute無效。",
	"image"            => ":attribute 必須是圖片。",
	"in"               => "已選的:attribute無效。",
	"integer"          => ":attribute 必須是整數。",
	"ip"               => ":attribute 必須是有效的IP地址。",
	"max"              => array(
		"numeric" => ":attribute 不得大於:max。",
		"file"    => ":attribute 不得大於:max KB。",
		"string"  => ":attribute 不得大於:max 字元。",
		"array"   => ":attribute 不得多於:max 個。",
	),
	"mimes"            => ":attribute 必須是以下類型： :values。",
	"min"              => array(
		"numeric" => ":attribute 不得少於:min。",
		"file"    => ":attribute 不得少於:min KB。",
		"string"  => ":attribute 不得少於 :min 字元。",
		"array"   => ":attribute 不得少於 :min 個。",
	),
	"not_in"           => "已選的:attribute 無效。",
	"numeric"          => ":attribute 必須是數字。",
	"regex"            => ":attribute 格式是無效的。",
	"required"         => ":attribute 是必填的。",
	"required_if"      => "如果:other 是 :value，則:attribute 是必填的。",
	"required_with"    => "如果:values 是現在，則:attribute 是必填的。 ",
	"required_without" => "如果:values 不是現在，則:attribute是必填的。",
	"same"             => ":attribute 和 :other 必須相匹配。",
	"size"             => array(
		"numeric" => ":attribute 必須是:size。",
		"file"    => ":attribute 必須是 :size KB。",
		"string"  => ":attribute 必須是 :size 字元。",
		"array"   => ":attribute 必須包含 :size 個。",
	),
	"unique"           => ":attribute 已存在。",
	"url"              => ":attribute 格式無效。",
  "alpha_spaces"     => ":attribute 只能包含字母或空格。",

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
