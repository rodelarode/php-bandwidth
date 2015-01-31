<?php
/**
 * @type SIP
 *
 * form a SIP uri. Additionally
 * prepend protocol if needed
 * as Catapult takes:
 * 
 * sip:someuser@somedomain.com
 */
 
namespace Catapult;
final class SIP extends Types {
	/* Construct
	 * a SIP object
	 * takes a string as
	 * input HAS to be 
	 * valid sip
	 * see: https://www.ietf.org/rfc/rfc3261.txt
	 */
	public function __construct($sipurl)
	{
		$this->sip = $sipurl;	
	}

	/* do we already
	 * have sip in the 
	 * address?
	 */
	public function __toString()
	{
		$m = array();	
		preg_match("/^sip:/", $this->sip, $m);
	
		if (sizeof($m) > 0)
			return $this->sip;

		return "sip:" . $this->sip;
	}
}


