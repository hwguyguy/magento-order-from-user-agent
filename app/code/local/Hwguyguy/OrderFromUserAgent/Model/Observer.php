<?php
/**
 * @package Hwguyguy_OrderFromUserAgent
 */
class Hwguyguy_OrderFromUserAgent_Model_Observer {
	public function saveCustomData($observer) {
		$event = $observer->getEvent();
		$order = $event->getOrder();
		//$params = Mage::app()->getFrontController()->getRequest()->getParams();
		//$order->setFromUserAgent($params['from_user_agent']);
		$userAgent = Mage::helper('core/http')->getHttpUserAgent();
		$order->setFromUserAgent($userAgent);
	}
}
