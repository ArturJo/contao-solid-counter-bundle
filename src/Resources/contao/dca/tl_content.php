<?php

declare(strict_types=1);

/**
 * Palette
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['solid_counter'] =
    '{type_legend},type,headline;{solid_counter_legend},counterValue,counterSuffix,counterText,counterDuration,counterRepeat;{protected_legend:hide},protected;{expert_legend:hide},cssID,space';

/**
 * Fields
 */
$GLOBALS['TL_DCA']['tl_content']['fields']['counterValue'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['counterValue'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['mandatory' => true, 'rgxp' => 'digit', 'maxlength' => 12, 'tl_class' => 'w50'],
    'sql'       => "int(10) unsigned NOT NULL default '0'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['counterSuffix'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['counterSuffix'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['maxlength' => 32, 'tl_class' => 'w50'],
    'sql'       => "varchar(32) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['counterText'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['counterText'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['maxlength' => 255, 'tl_class' => 'clr long'],
    'sql'       => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['counterDuration'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['counterDuration'],
    'exclude'   => true,
    'inputType' => 'text',
    'default'   => 3000,
    'eval'      => ['rgxp' => 'digit', 'maxlength' => 6, 'tl_class' => 'w50'],
    'sql'       => "int(10) unsigned NOT NULL default '3000'",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['counterRepeat'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['counterRepeat'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => ['tl_class' => 'w50 m12'],
    'sql'       => "char(1) NOT NULL default ''",
];
