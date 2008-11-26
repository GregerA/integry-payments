<?php
	/**
	 * ========================================================
	 * 	phpGCheckout, Open Source PHP G Checkout Library
	 * 	http://www.phpgcheckout.com
	 * ========================================================
	 * 
	 * Copyright (c) 2006 Expert Database Solutions, LLC
	 * 
	 * Permission is hereby granted, free of charge, to any person obtaining a 
	 * copy of this software and associated documentation files (the "Software"), 
	 * to deal in the Software without restriction, including without limitation the 
	 * rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell 
	 * copies of the Software, and to permit persons to whom the Software is 
	 * furnished to do so, subject to the following conditions:
	 * 
	 * The above copyright notice and this permission notice shall be included in all 
	 * copies or substantial portions of the Software.
	 * 
	 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
	 * INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
	 * PARTICULAR PURPOSE AND NONINFRINGEMENT. 
	 * IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR 
	 * OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT 
	 * OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
	 * 
	 */
	
	
	class gOrderStateChangeNotification {
		var $timestamp;
		var $google_order_number;
		var $new_fulfillment_order_state;
		var $new_financial_order_state;
		var $previous_fulfillment_order_state;
		var $previous_financial_order_state;
		
		/**
		 * Build Message
		 *
		 * @param unknown_type $arr_message
		 */
		function buildMessage($arr_message) {
			$this->timestamp 						= $arr_message['timestamp'];
			$this->google_order_number				= $arr_message['google-order-number'];
			$this->new_financial_order_state		= $arr_message['new-financial-order-state'];
			$this->new_fulfillment_order_state		= $arr_message['new-fulfillment-order-state'];
			$this->previous_financial_order_state	= $arr_message['previous-financial-order-state'];
			$this->previous_fulfillment_order_state = $arr_message['previous-fulfillment-order-state'];
		}
	}
?>