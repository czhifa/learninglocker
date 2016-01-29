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

	"accepted"         => ":attribute必须被接受。",
	"active_url"       => ":attribute是无效的URL。",
	"after"            => ":attribute必须是:date之后的日期。",
	"alpha"            => ":attribute可能只含有字母。",
	"alpha_dash"       => ":attribute可能含有字幕，数字和破折号。",
	"alpha_num"        => ":attribute肯能含有字母和数字。",
	"array"            => ":attribute必须是数组。",
	"before"           => ":attribute必须是:date之前的日期。",
	"between"          => array(
		"numeric" => ":attribute必须在:min和:max之间。",
		"file"    => ":attribute必须在:min:max千字节之间。",
		"string"  => ":attribute必须在:min and :max字之间。",
		"array"   => ":attribute必须在:min和:max件之间。",
	),
	"confirmed"        => ":attribute认证不符合。",
	"date"             => ":attribute是个无效的日期。",
	"date_format"      => ":attribute不符合格式:format.",
	"different"        => ":attribute和:other必须不同。",
	"digits"           => ":attribute必须为:digits数字。",
	"digits_between"   => ":attribute必须为:min和:max之间的数字。",
	"email"            => ":attribute格式无效。",
	"exists"           => "选择的:attribute无效。",
	"image"            => ":attribute必须为图片。",
	"in"               => "选择的:attribute无效。",
	"integer"          => ":attribute必须为整数。",
	"ip"               => ":attribute必须是有效的IP地址。",
	"max"              => array(
		"numeric" => ":attribute不能大于:max。",
		"file"    => ":attribute不能大于:max千字节。",
		"string"  => ":attribute不能大于:max字。",
		"array"   => ":attribute不能大于:max件。",
	),
	"mimes"            => ":attribute必须为:values类型的文件。",
	"min"              => array(
		"numeric" => ":attribute必须小于:min。",
		"file"    => ":attribute必须小于:min千字节。",
		"string"  => ":attribute必须小于:min字。",
		"array"   => ":attribute必须小于:min件。",
	),
	"not_in"           => "选择的:attribute无效。",
	"numeric"          => ":attribute必须为数字。",
	"regex"            => ":attribute格式无效。",
	"required"         => ":attribute字段是必须的。",
	"required_if"      => "当:other为:value时，:attribute字段是必须的。",
	"required_with"    => "当:values存在时，:attribute字段是必须的。",
	"required_without" => "当:values不存在时，:attribute字段是必须的。",
	"same"             => ":attribute和:other必须一致。",
	"size"             => array(
		"numeric" => ":attribute必须是:size。",
		"file"    => ":attribute必须是:size千字节。",
		"string"  => ":attribute必须是:size字。",
		"array"   => ":attribute必须是:size件。",
	),
	"unique"           => ":attribute已存在。",
	"url"              => ":attribute格式无效",
  "alpha_spaces"     => ":attribute可能是含有字母和空格",

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
