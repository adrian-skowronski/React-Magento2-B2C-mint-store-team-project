<?php
namespace Mageplaza\Smtp\Model\Resolver\Bestsellers\Bestsellers;

/**
 * Interceptor class for @see \Mageplaza\Smtp\Model\Resolver\Bestsellers\Bestsellers
 */
class Interceptor extends \Mageplaza\Smtp\Model\Resolver\Bestsellers\Bestsellers implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Stdlib\DateTime\DateTime $dateTime, \Magento\Reports\Helper\Data $reportData, \Mageplaza\Smtp\Helper\Data $helperData, \Magento\Sales\Model\ResourceModel\Report\Bestsellers\Collection $bestsellersCollection, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Catalog\Api\ProductRepositoryInterface $productRepository, \Mageplaza\Smtp\Helper\EmailMarketing $helperEmailMarketing)
    {
        $this->___init();
        parent::__construct($dateTime, $reportData, $helperData, $bestsellersCollection, $storeManager, $productRepository, $helperEmailMarketing);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}
