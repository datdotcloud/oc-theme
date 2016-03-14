<?php
/**
 * @author Björn Schießle <schiessle@owncloud.com>
 * @author Jan-Christoph Borchardt, http://jancborchardt.net
 * @copyright Copyright (c) 2015, ownCloud, Inc.
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 */

class OC_Theme {

	private $themeEntity;
	private $themeName;
	private $themeTitle;
	private $themeBaseUrl;
	private $themeDocBaseUrl;
	private $themeSyncClientUrl;
	private $themeSlogan;
	private $themeMailHeaderColor;

	/* put your custom text in these variables */
	function __construct() {
		$this->themeEntity = 'dat.cloud';
		$this->themeName = 'datcloud';
		$this->themeTitle = 'datcloud';
		$this->themeBaseUrl = 'https://dat.cloud';
		$this->themeDocBaseUrl = 'https://doc.owncloud.org';
		$this->themeSyncClientUrl = 'https://owncloud.org/install';
		$this->themeSlogan = '';
		$this->themeMailHeaderColor = '#EB7700';
	}
	/* nothing after this needs to be adjusted */

	public function getBaseUrl() {
		return $this->themeBaseUrl;
	}

	public function getSyncClientUrl() {
		return $this->themeSyncClientUrl;
	}

	public function getDocBaseUrl() {
		return $this->themeDocBaseUrl;
	}

	public function getTitle() {
		return $this->themeTitle;
	}

	public function getName() {
		return $this->themeName;
	}

	public function getEntity() {
		return $this->themeEntity;
	}

	public function getSlogan() {
		return $this->themeSlogan;
	}

	public function getShortFooter() {
		$footer = '© '.date('Y').' <a href="'.$this->getBaseUrl().'" target="_blank\">'.$this->getEntity().'</a>';

		return $footer;
	}

	public function getLongFooter() {
		$footer = '© '.date('Y').' <a href="'.$this->getBaseUrl().'" target="_blank\">'.$this->getEntity().'</a>';

		return $footer;
	}

	public function getMailHeaderColor() {
		return $this->themeMailHeaderColor;
	}
}