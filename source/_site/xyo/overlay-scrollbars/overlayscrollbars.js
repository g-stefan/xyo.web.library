// XYO.Web.Library
// SPDX-FileCopyrightText: 2024-2026 Grigore Stefan <g_stefan@yahoo.com>
// SPDX-License-Identifier: Apache-2.0

if (typeof XYO === "undefined") {
    XYO = {};
};

XYO.OverlayScrollbars = {};
XYO.OverlayScrollbars.instance = null;

/**
 * Initialize Overlay Scrollbars
 * @param {elements} elements - Selected elements
 * @param {object} options - Overlay scrollbars config options
 */
XYO.OverlayScrollbars.create = function(elements, options) {
	retV = [];
	if (!options) {
		options = {scrollbars : {clickScroll : true, theme: "os-theme-light-or-dark"}};
	};
	Array.from(elements).forEach(function(item) {
		retV.push(this.instance(item, options));
	},this);
	return retV;
};

/**
 * Destroy Overlay Scrollbars
 * @param {elements} elements - Selected elements
 */
XYO.OverlayScrollbars.destroy = function(elements) {
	Array.from(elements).forEach(function(item) {
		this.instance(item).destroy();
	},this);	
};

/**
 * Destroy Overlay Scrollbars
 * @param {items} instance - Instance of created scrollbars
 */
XYO.OverlayScrollbars.instanceDestroy = function(items) {
	items.forEach(function(item) {
		item.destroy();
	});	
};

/**
 * Update Overlay Scrollbars
 * @param {elements} elements - Selected elements
 */
XYO.OverlayScrollbars.update = function(elements) {
	Array.from(elements).forEach(function(item) {
		this.instance(item).update(true);
	},this);
};

/**
 * Update Overlay Scrollbars
 * @param {items} instance - Instance of created scrollbars
 */
XYO.OverlayScrollbars.instanceUpdate = function(items) {
	items.forEach(function(item) {
		item.update(true);
	});	
};

/**
 * Initialization
 */
XYO.OverlayScrollbars.init = function() {
	this.instance = OverlayScrollbarsGlobal.OverlayScrollbars;
	this.instance.plugin(OverlayScrollbarsGlobal.ClickScrollPlugin);
	this.instance.nonce(document.scripts[0].nonce);
	XYO.OverlayScrollbars.create(document.querySelectorAll(".overlay-scrollbars"));
};

/**
 * On load
 */
XYO.OverlayScrollbars.onLoad = function() {
	window.removeEventListener("load", XYO.OverlayScrollbars.onLoad);
	XYO.OverlayScrollbars.init();
};
window.addEventListener("load", XYO.OverlayScrollbars.onLoad);
