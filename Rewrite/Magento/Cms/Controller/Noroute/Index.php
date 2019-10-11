<?php


namespace OrviSoft\Redirect\Rewrite\Magento\Cms\Controller\Noroute;

class Index extends \Magento\Cms\Controller\Noroute\Index
{
    /**
     * Render CMS 404 Not found page
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
		echo "We are here...!";
		exit;
		return parent::execute();
	}
}
