<?php

/**
 * @package SP Page Builder
 * @author JoomShaper https://www.joomshaper.com
 * @copyright Copyright (c) 2010 - 2025 JoomShaper
 * @license https://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
 */

// No direct access
defined('_JEXEC') or die('Restricted access');

use Joomla\CMS\Language\Text;

SpAddonsConfig::addonConfig(
	[
		'type'       => 'content',
		'addon_name' => 'comment',
		'title'      => Text::_('COM_SPPAGEBUILDER_ADDON_COMMENT'),
		'desc'       => Text::_('COM_SPPAGEBUILDER_ADDON_COMMENT_DESC'),
		'category'   => 'Content',
		'icon'       => '<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.9668 13.823H12.9974M7.9668 9.63086H10.4821" stroke="#6F7CA3" stroke-width="1.3" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M12.1691 5.02051H3.93555C3.38326 5.02051 2.93555 5.46822 2.93555 6.02051V17.4002C2.93555 17.9525 3.38326 18.4002 3.93555 18.4002H6.29105V21.7797C6.29105 21.7867 6.29922 21.7906 6.30471 21.7862L10.4929 18.4002H18.703C19.2553 18.4002 19.703 17.9525 19.703 17.4002V12.5694" stroke="#6F7CA3" stroke-width="1.3" stroke-linecap="round"/>
						<ellipse cx="17.3784" cy="7.39731" rx="3.68696" ry="3.68686" fill="#6F7CA3"/>
						<path d="M15.875 7.39743H18.8838M17.3794 5.89307V8.90179" stroke="white" stroke-width="0.8" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						',
		'pro'=>true
]
);