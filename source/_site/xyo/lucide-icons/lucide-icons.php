<?php

// XYO.Web.Library
// SPDX-FileCopyrightText: 2024-2026 Grigore Stefan <g_stefan@yahoo.com>
// SPDX-License-Identifier: Apache-2.0

namespace XYO;

defined("XYO_WEB") or die("Forbidden");

class LucideIcons extends \XYO\Web\Component
{

	protected static $name = "lucide-icons";

	public function init($options = null)
	{
		if ($this->view->registryHas(self::$name)) {
			return;
		}
		$this->view->registrySet(self::$name);
		$this->view->cssLinks->set(self::$name, $this->site . "_site/xyo/lucide-icons/lucide-icons.min.css");
	}

	public function render($options = null)
	{
		if (is_array($options)) {
			echo "<i class=\"lucide-" . $options["icon"] . " " . $options["class"] . "\"></i>";
			return;
		}
		echo "<i class=\"lucide-" . $options . "\"></i>";
	}

}

