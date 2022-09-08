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
    use Drupal\Core\Uri;

    class Customer_linkController extends ControllerBase{
        public function links(){

            //
            $url1 = Url::fromRoute('block.admin_display');
            $link1 = Link::fromTextAndUrl(t('go to block admin'), $url1);
            $list[] = $link1;

            //
            $url2 = Url::fromRoute('system.admin_display');
            $link2 = Link::fromTextAndUrl(t('go to block admin page'), $url2);
            $list[] = $link2;

            $url3= Url::fromRoute('entity.user.display');
            $link3 = Link::fromTextAndUrl(t('go to front page'), $url3);
            $list[] = $link3;


            $url4= Url::fromRoute('<front>');
            $link4 = Link::fromTextAndUrl(t('go to front page'), $url4);
            $list[] = $link4;

            $url5= Url::fromUri('https://www.bc.fi/');
            $link_option = [
                'attributes'=>[
                    'target'=>'blank',
                    'title'=>'link to external website'
                ]
                ];
            $url5.setOptions($link_option);
            $link5 = Link::fromTextAndUrl(t('go to external page'), $url5);
            $list[] = $link5;

            $output['customer_links'] = [
                '#theme'=>'item_list',
                '#item'=>'list',
                '#title'=>$this->t.('customer links as requested'),
            ];
        }
    }