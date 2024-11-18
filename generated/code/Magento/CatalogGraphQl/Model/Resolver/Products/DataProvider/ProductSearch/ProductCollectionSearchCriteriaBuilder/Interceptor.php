<?php
namespace Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\ProductSearch\ProductCollectionSearchCriteriaBuilder;

/**
 * Interceptor class for @see \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\ProductSearch\ProductCollectionSearchCriteriaBuilder
 */
class Interceptor extends \Magento\CatalogGraphQl\Model\Resolver\Products\DataProvider\ProductSearch\ProductCollectionSearchCriteriaBuilder implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Api\Search\SearchCriteriaInterfaceFactory $searchCriteriaFactory, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Framework\Api\Search\FilterGroupBuilder $filterGroupBuilder)
    {
        $this->___init();
        parent::__construct($searchCriteriaFactory, $filterBuilder, $filterGroupBuilder);
    }

    /**
     * {@inheritdoc}
     */
    public function build(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria) : \Magento\Framework\Api\SearchCriteriaInterface
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'build');
        return $pluginInfo ? $this->___callPlugins('build', func_get_args(), $pluginInfo) : parent::build($searchCriteria);
    }
}
