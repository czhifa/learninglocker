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

	"accepted"         => ":attributeを受け入れなければならない。",
	"active_url"       => ":attributeは有効なURLではない。",
	"after"            => ":attributeは:date後の日付でなければならない。",
	"alpha"            => ":attribute文字のみを含めるかもしれない。",
	"alpha_dash"       => ":attribute文字、数字、およびダッシュを含めるかもしれない。",
	"alpha_num"        => ":attribute文字と数字のみを含めるかもしれない",
	"array"            => ":attribute配列でなければならない。",
	"before"           => ":attributeは:date前の日付でなければならない。",
	"between"          => array(
		"numeric" => ":attributeは:minと:maxの間でなければならない。",
		"file"    => ":attributeは:minと:maxキロバイトの間でなければならない。",
		"string"  => ":attributeは:minと:max文字の間でなければならない。",
		"array"   => ":attributeは:minと:max件の間でなければならない。",
	),
	"confirmed"        => ":attributeの確認が一致しない。",
	"date"             => ":attributeが有効な日付ではない。",
	"date_format"      => ":attributeと形式:formatが一致しない。",
	"different"        => ":attributeと:other異なっている必要がある。",
	"digits"           => ":attributeは数字:digitsでなければならない。",
	"digits_between"   => ":attributeは:minと:max数字の間でなければならない。",
	"email"            => ":attribute形式が無効。",
	"exists"           => "選択した:attributeが無効。",
	"image"            => ":attributeは写真でなければならない。",
	"in"               => "選択した:attributeが無効。",
	"integer"          => ":attributeは整数でなければならない。",
	"ip"               => ":attributeは有効なIPアドレス。",
	"max"              => array(
		"numeric" => ":attributeは:maxより大きくないかもしれない。",
		"file"    => ":attributeは:maxキロバイトより大きくないかもしれない。",
		"string"  => ":attributeは:max文字より大きくないかもしれない。",
		"array"   => ":attributeは:max件より大きくないかもしれない。.",
	),
	"mimes"            => ":attributeはタイプ:valuesのファイルでなければならない。",
	"min"              => array(
		"numeric" => ":attributeは:min少なくともでなければならない。",
		"file"    => ":attributeは:minキロバイト少なくともでなければならない。",
		"string"  => ":attributeは:min文字少なくともでなければならない。",
		"array"   => ":attributeは:min件少なくともでなければならない。",
	),
	"not_in"           => "選択した:attributeが無効。",
	"numeric"          => ":attributeは数字でなければならない",
	"regex"            => ":attribute形式が無効",
	"required"         => ":attributeフィールドが必要。",
	"required_if"      => ":otherは:value時に、:attributeフィールドが必要。",
	"required_with"    => ":valuesが存在する時に、:attributeフィールドが必要。",
	"required_without" => ":valuesが存在しない時に、:attribute フィールドが必要。",
	"same"             => ":attributeと:otherは一致でなければならない。",
	"size"             => array(
		"numeric" => ":attributeは:sizeでなければならない。",
		"file"    => ":attributeは:sizeキロバイトでなければならない。.",
		"string"  => ":attributeは:size文字でなければならない。",
		"array"   => ":attributeは:size件を含むでなければならない。.",
	),
	"unique"           => ":attributeは使用された。",
	"url"              => ":attribute形式が無効。",
  "alpha_spaces"     => ":attribute文字とスペースのみを含めるかもしれない。",

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
