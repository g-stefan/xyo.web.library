<?php
// XYO.Web Lucide-Icons
// Copyright (c) 2024-2025 Grigore Stefan <g_stefan@yahoo.com>
// MIT License (MIT) <http://opensource.org/licenses/MIT>
// SPDX-FileCopyrightText: 2024-2025 Grigore Stefan <g_stefan@yahoo.com>
// SPDX-License-Identifier: MIT

namespace XYO {

	defined("XYO_WEB") or die("Forbidden");

	require_once("./_site/xyo/web/web.php");

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

}
