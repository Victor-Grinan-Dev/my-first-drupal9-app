<?php

/**
 * @file
 * contains \Drupal\customer_links\Controller\Customer_linkController:: 
 * */

namespace \Drupal\customer_links\Controller

use Drupal\Core\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Link;
use Drupal\Core\Url;

    class Customer_linkController extends ControllerBase{
        public function links(){
            $url1 = Url::fromRoute('block.admin_display');
            $link1 = Link::fromTextAndUrl(t('go to block admin'), $url1);
            $list[] = $link1
        }
    }