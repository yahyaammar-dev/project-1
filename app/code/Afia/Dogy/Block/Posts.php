<?php

namespace Toptal\Blog\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use \Toptal\Blog\Model\ResourceModel\Post\Collection as PostCollection;
use \Toptal\Blog\Model\ResourceModel\Post\CollectionFactory as PostCollectionFactory;
use \Toptal\Blog\Model\Post;

class Posts extends Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context)
    {
        parent::__construct($context);
    }

    public function sayHello()
    {
        return __('Hello World2u');
    }

}