<?php

// get current date and time
// t:data,t:time,t:locale,t:timezone
$now = Zend_Date::now()
  ->setLocale(Mage::getStoreConfig(Mage_Core_Model_Locale::XML_PATH_DEFAULT_LOCALE))
  ->setTimezone(Mage::getStoreConfig(Mage_Core_Model_Locale::XML_PATH_DEFAULT_TIMEZONE))
  ->get('y-MM-dd HH:mm:ss');