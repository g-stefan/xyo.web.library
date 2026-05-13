<?php
// XYO.Web Overlay-Scrollbars
// Copyright (c) 2024-2025 Grigore Stefan <g_stefan@yahoo.com>
// MIT License (MIT) <http://opensource.org/licenses/MIT>
// SPDX-FileCopyrightText: 2024-2025 Grigore Stefan <g_stefan@yahoo.com>
// SPDX-License-Identifier: MIT

namespace XYO {

	defined("XYO_WEB") or die("Forbidden");

	require_once("./_site/xyo/web/web.php");

	class OverlayScrollbars extends \XYO\Web\Component
	{

		protected static $name = "overlay-scrollbars";

		public function init($options = null)
		{
			if ($this->view->registryHas(self::$name)) {
				return;
			}
			$this->view->registrySet(self::$name);
			$this->view->cssLinks->set(self::$name, $this->site . "_site/xyo/overlay-scrollbars/overlayscrollbars.min.css");
			$this->view->cssLinks->set(self::$name, $this->site . "_site/xyo/overlay-scrollbars/overlayscrollbars.mod.css");
			$this->view->jsLinks->set(self::$name, $this->site . "_site/xyo/overlay-scrollbars/overlayscrollbars.browser.es6.min.js", "defer");
			$this->view->jsLinks->set(self::$name, $this->site . "_site/xyo/overlay-scrollbars/overlayscrollbars.js", "defer");
			$this->view->htmlClasses->set("data-overlayscrollbars-initialize");
			$this->view->bodyClasses->set("data-overlayscrollbars-initialize");
			$this->view->bodyClasses->set("overlay-scrollbars");
		}

	}

}
