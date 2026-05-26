<?php

// XYO.Web.Library
// SPDX-FileCopyrightText: 2024-2026 Grigore Stefan <g_stefan@yahoo.com>
// SPDX-License-Identifier: Apache-2.0

namespace XYO;

defined("XYO_WEB") or die("Forbidden");

class InterFont extends \XYO\Web\Component
{

	protected static $name = "inter-font";

	public function init($options = null)
	{
		if ($this->view->registryHas(self::$name)) {
			return;
		}
		$this->view->registrySet(self::$name);
		$this->view->cssLinks->set(self::$name, $this->site . "_site/xyo/inter-font/inter.css");
	}
}
