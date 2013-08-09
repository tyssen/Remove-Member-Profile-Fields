<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ExpressionEngine - by EllisLab
 *
 * @package		ExpressionEngine
 * @author		ExpressionEngine Dev Team
 * @copyright	Copyright (c) 2003 - 2011, EllisLab, Inc.
 * @license		http://expressionengine.com/user_guide/license.html
 * @link		http://expressionengine.com
 * @since		Version 2.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Category Image File Browser Accessory
 *
 * @package		ExpressionEngine
 * @subpackage	Addons
 * @category	Accessory
 * @author		John Faulds
 * @link
 */

class Remove_member_profile_fields_acc {

	public $name			= 'Remove unnecessary member profile fields';
	public $id				= 'remove_member_profile_fields';
	public $version			= '1.0';
	public $description		= 'You know, the ones people never use.';
	public $sections		= array();

	/**
	 * Constructor
	 */
	function __construct()
	{
		$this->EE =& get_instance();
	}


	/**
	 * Set Sections
	 */
	function set_sections()
	{

		// hide accessory
		$this->sections[] = '<script>$("#accessoryTabs a.remove_member_profile_fields").parent().remove();</script>';

		$this->EE->cp->add_to_head('
			<script>
				$(document).ready( function() {
					$("#aol_im,#icq,#yahoo_im,#msn_im").parents("tr").remove()
				});
			</script>
		');

	}

	// ----------------------------------------------------------------

}

/* End of file acc.remove_member_profile_fields.php */
/* Location: /system/expressionengine/third_party/remove_member_profile_fields/acc.remove_member_profile_fields.php */