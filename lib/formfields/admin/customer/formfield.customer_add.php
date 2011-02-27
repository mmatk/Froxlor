<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * For the full copyright and license information, please view the COPYING
 * file that was distributed with this source code. You can also view the
 * COPYING file online at http://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  (c) the authors
 * @author     Froxlor team <team@froxlor.org> (2010-)
 * @license    GPLv2 http://files.froxlor.org/misc/COPYING.txt
 * @package    Formfields
 * @version    $Id: formfield.customer_add.php 96 2010-12-07 11:53:52Z d00p $
 */

return array(
	'customer_add' => array(
		'title' => $lng['admin']['customer_add'],
		'image' => 'icons/user_add.png',
		'sections' => array(
			'section_a' => array(
				'title' => $lng['admin']['accountdata'],
				'image' => 'icons/user_add.png',
				'fields' => array(
					'new_loginname' => array(
						'label' => $lng['login']['username'],
						'type' => 'text'
					),
					'createstdsubdomain' => array(
						'label' => $lng['admin']['stdsubdomain_add'].'?',
						'type' => 'yesno',
						'yesno_var' => $createstdsubdomain
					),
					'store_defaultindex' => array(
						'label' => $lng['admin']['store_defaultindex'].'?',
						'type' => 'yesno',
						'yesno_var' => $store_defaultindex
					),
					'new_customer_password' => array(
						'label' => $lng['login']['password'],
						'type' => 'password'
					),
					'sendpassword' => array(
						'label' => $lng['admin']['sendpassword'],
						'type' => 'yesno',
						'yesno_var' => $sendpassword
					),
					'def_language' => array(
						'label' => $lng['login']['language'],
						'type' => 'select',
						'select_var' => $language_options
					)
				)
			),
			'section_b' => array(
				'title' => $lng['admin']['contactdata'],
				'image' => 'icons/user_add.png',
				'fields' => array(
					'name' => array(
						'label' => $lng['customer']['name'],
						'type' => 'text',
						'mandatory_ex' => true
					),
					'firstname' => array(
						'label' => $lng['customer']['firstname'],
						'type' => 'text',
						'mandatory_ex' => true
					),
					'company' => array(
						'label' => $lng['customer']['company'],
						'type' => 'text',
						'mandatory_ex' => true
					),
					'street' => array(
						'label' => $lng['customer']['street'],
						'type' => 'text'
					),
					'zipcode' => array(
						'label' => $lng['customer']['zipcode'],
						'type' => 'text'
					),
					'city' => array(
						'label' => $lng['customer']['city'],
						'type' => 'text'
					),
					'phone' => array(
						'label' => $lng['customer']['phone'],
						'type' => 'text'
					),
					'fax' => array(
						'label' => $lng['customer']['fax'],
						'type' => 'text'
					),
					'email' => array(
						'label' => $lng['customer']['email'],
						'type' => 'text',
						'mandatory' => true
					),
					'customernumber' => array(
						'label' => $lng['customer']['customernumber'],
						'type' => 'text'
					)
				)
			),
			'section_c' => array(
				'title' => $lng['admin']['servicedata'],
				'image' => 'icons/user_add.png',
				'fields' => array(
					'diskspace' => array(
						'label' => $lng['customer']['diskspace'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 6,
						'mandatory' => true,
						'ul_field' => $diskspace_ul
					),
					'traffic' => array(
						'label' => $lng['customer']['traffic'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 4,
						'mandatory' => true,
						'ul_field' => $traffic_ul
					),
					'subdomains' => array(
						'label' => $lng['customer']['subdomains'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 9,
						'mandatory' => true,
						'ul_field' => $subdomains_ul
					),
					'emails' => array(
						'label' => $lng['customer']['emails'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 9,
						'mandatory' => true,
						'ul_field' => $emails_ul
					),
					'email_accounts' => array(
						'label' => $lng['customer']['accounts'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 9,
						'mandatory' => true,
						'ul_field' => $email_accounts_ul
					),
					'email_forwarders' => array(
						'label' => $lng['customer']['forwarders'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 9,
						'mandatory' => true,
						'ul_field' => $email_forwarders_ul
					),
					'email_quota' => array(
						'label' => $lng['customer']['email_quota'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 9,
						'visible' => $settings['system']['mail_quota_enabled'],
						'mandatory' => true,
						'ul_field' => $email_quota_ul
					),
					'email_autoresponder' => array(
						'label' => $lng['customer']['autoresponder'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 9,
						'visible' => $settings['autoresponder']['autoresponder_active'],
						'ul_field' => $email_autoresponder_ul
					),
					'email_imap' => array(
						'label' => $lng['customer']['email_imap'],
						'type' => 'yesno',
						'yesno_var' => $email_imap,
						'mandatory' => true
					),
					'email_pop3' => array(
						'label' => $lng['customer']['email_pop3'],
						'type' => 'yesno',
						'yesno_var' => $email_pop3,
						'mandatory' => true
					),
					'ftps' => array(
						'label' => $lng['customer']['ftps'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 9,
						'ul_field' => $ftps_ul
					),
					'tickets' => array(
						'label' => $lng['customer']['tickets'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 9,
						'visible' => $settings['ticket']['enabled'],
						'ul_field' => $tickets_ul
					),
					'mysqls' => array(
						'label' => $lng['customer']['mysqls'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 9,
						'mandatory' => true,
						'ul_field' => $mysqls_ul
					),
					'phpenabled' => array(
						'label' => $lng['admin']['phpenabled'].'?',
						'type' => 'yesno',
						'yesno_var' => $phpenabled
					),
					'perlenabled' => array(
						'label' => $lng['admin']['perlenabled'].'?',
						'type' => 'yesno',
						'yesno_var' => $perlenabled
					),
					'number_of_aps_packages' => array(
						'label' => $lng['aps']['numberofapspackages'],
						'type' => 'textul',
						'value' => 0,
						'maxlength' => 9,
						'visible' => $settings['aps']['aps_active'],
						'ul_field' => $number_of_aps_packages_ul
					)
				)
			)
		)
	)
);
