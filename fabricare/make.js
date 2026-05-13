// Created by Grigore Stefan <g_stefan@yahoo.com>
// Public domain (Unlicense) <http://unlicense.org>
// SPDX-FileCopyrightText: 2023-2025 Grigore Stefan <g_stefan@yahoo.com>
// SPDX-License-Identifier: Unlicense

messageAction("make [" + Project.name + "]");

Shell.mkdirRecursivelyIfNotExists("output");
Shell.mkdirRecursivelyIfNotExists("temp");

exitIf(!Shell.copyDirRecursively("source", "output"));

function setCSSLayer(name, layer) {
	Console.writeLn("css layer: " + name + " [" + layer + "]");
	filename = "source/"+ name + ".css";
	content = "@layer " + layer + " {\r\n";
	content += Shell.fileGetContents(filename);
	content += "}\r\n";
	Shell.filePutContents("output/" + name + ".css", content);
};

setCSSLayer("_site/xyo/lucide-icons/lucide-icons.min", "base");
setCSSLayer("_site/xyo/overlay-scrollbars/overlayscrollbars.min", "base");
setCSSLayer("_site/xyo/overlay-scrollbars/overlayscrollbars.mod", "base");

