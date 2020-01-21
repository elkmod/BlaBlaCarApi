<?php declare(strict_types=1);

namespace BlablacarShipping;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\EntityRepository;
use Shopware\Core\Framework\Plugin;
use Shopware\Core\Framework\Plugin\Context\InstallContext;
use Shopware\Core\Framework\Plugin\Context\UninstallContext;

class BlablacarShipping extends Plugin
{
    const BLA_SHIPPING_METHOD_ID = '06efbde628f94f5fad14974e5953bf89';

    public function install(InstallContext $installContext): void
    {
        $this->addShippingMethod($installContext->getContext());
    }

    public function uninstall(UninstallContext $uninstallContext): void
    {
        $this->cleanup($uninstallContext->getContext());
    }

    private function addShippingMethod(Context $context): void
    {
        /** @var EntityRepository $shippingMethodRepository */
        $shippingMethodRepository = $this->container->get('shipping_method.repository');

        $shippingMethodRepository->upsert([$this->getShippingMethodData()], $context);
    }

    private function getShippingMethodData(): array
    {
        return [
            'name' => 'Ship with Blablacar',
            'description' => 'Ask a Blablacar driver to pick up the package for you',
            'active' => false,
            'availabilityRuleId' => 'afcb90e9c774457ab53b2096a5e5883d',
            'deliveryTimeId' => '06efbde628f94f5fad14974e5953bf54',
            'prices' => [
                [
                    'shippingMethodId' => '80aeb106e9734b5181052d4bd0d6300f',
                    'currencyId' => 'b7d2554b0ce847cd82f3ac9bd1c0dfca',
                    'ruleId' => 'afcb90e9c774457ab53b2096a5e5883d',
                    'calculation' => 0,
                    'quantityStart' => 0,
                    'price' => 5.00,
                    'id' => '6e5ba45c035e493b860eee1a013b6c60'
                ]
            ],
            'id' => self::BLA_SHIPPING_METHOD_ID
        ];
    }

    private function cleanup(Context $context): void
    {
        /** @var EntityRepository $shippingMethodRepository */
        $shippingMethodRepository = $this->container->get('shipping_method.repository');

        $shippingMethodRepository->update([[
            'id' => self::BLA_SHIPPING_METHOD_ID,
            'active' => false
        ]], $context);

    }
}
