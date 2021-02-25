<?php
/**
 * Created by PhpStorm.
 * User: emil
 * Date: 29.04.15
 * Time: 14:00
 */

$manifest = array(
	array(
		'acceptable_sugar_versions' =>
			array(
				'regex_matches' => array(
					'6.5.*',
					'7.5.*',
				),
				/*'exact_matches' => array(
					'6.5.17',
					'6.5.16',
				),*/
			)
	),
	array(
		'acceptable_sugar_flavors' =>
			array(
				'CE',
				'PRO',
				'CORP',
				'ENT',
				'ULT',
			),
	),
	'readme'           => 'Show SQL Query for Sugar Reports',
	'key'              => 'ext',
	'author'           => 'Emil Maran',
	'description'      => 'Show SQL Query for Sugar Reports',
	'icon'             => '',
	'is_uninstallable' => true,
	'name'             => 'ShowSQLQuerySugarReports',
	'published_date'   => '2015-04-29 14:22:00',
	'type'             => 'module',
	'version'          => '0.1',
	//'remove_tables' => 'prompt',
);

$installdefs = array(
	'id'   => 'SQSREP2',
	'copy' =>
		array(
			array(
				'from' => '<basepath>/modules/Reports/Report.php',
				'to'   => 'modules/Reports/Report.php',
			),
		),
);
