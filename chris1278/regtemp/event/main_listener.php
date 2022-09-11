<?php
/**
 *
 * Customized registration template. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2022, Chris1278
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

namespace chris1278\regtemp\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class main_listener implements EventSubscriberInterface
{
	protected $template;

	public function __construct(
		\phpbb\template\template $template
	)
	{
		$this->template		= $template;
	}

	public static function getSubscribedEvents()
	{
		return [
			'core.ucp_register_modify_template_data' 	=> 'chris1278_regtemp',
		];
	}

	public function chris1278_regtemp($event)
	{
		$event['tpl_name'] = '@chris1278_regtemp/ucp_chris1278_regtemp';
	}
}
