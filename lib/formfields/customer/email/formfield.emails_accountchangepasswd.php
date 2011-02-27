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
 * @version    $Id: formfield.domains_add.php 112 2010-12-14 12:11:20Z d00p $
 */

return array(
	'emails_accountchangepasswd' => array(
		'title' => $lng['menue']['main']['changepassword'],
		'image' => 'icons/email_edit.png',
		'sections' => array(
			'section_a' => array(
				'title' => $lng['menue']['main']['changepassword'],
				'image' => 'icons/email_edit.png',
				'fields' => array(
					'email_full' => array(
						'label' => $lng['emails']['emailaddress'],
						'type' => 'label',
						'value' => $result['email_full']
					),
					'email_password' => array(
						'label' => $lng['login']['password'],
						'type' => 'password'
					)
				)
			)
		)
	)
);
