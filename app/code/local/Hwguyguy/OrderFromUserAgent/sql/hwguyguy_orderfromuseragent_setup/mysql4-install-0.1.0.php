<?php
$installer = $this;
$installer->startSetup();
$installer->addAttribute('order', 'from_user_agent', array('type'=>'varchar'));
$installer->addAttribute('quote', 'from_user_agent', array('type'=>'varchar'));
$installer->endSetup();
