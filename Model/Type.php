<?php
/**
 * Type.php
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT license, which
 * is bundled with this package in the file LICENSE.txt.
 *
 * It is also available on the Internet at the following URL:
 * https://docs.auroraextensions.com/magento/extensions/2.x/simplecache/LICENSE.txt
 *
 * @package       AuroraExtensions_SimpleCache
 * @copyright     Copyright (C) 2019 Aurora Extensions <support@auroraextensions.com>
 * @license       MIT
 */
namespace AuroraExtensions\SimpleCache\Model;

use Magento\Framework\{
    App\Cache\Type\FrontendPool,
    Cache\Frontend\Decorator\TagScope
};

class Type extends TagScope
{
    /** @constant string TYPE_IDENTIFIER */
    const TYPE_IDENTIFIER = 'auroraextensions';

    /** @constant string CACHE_TAG */
    const CACHE_TAG = 'AURORAEXTENSIONS_SIMPLECACHE';

    /**
     * @param FrontendPool $cachePool
     * @return void
     */
    public function __construct(FrontendPool $cachePool)
    {
        parent::__construct(
            $cachePool->get(self::TYPE_IDENTIFIER),
            self::CACHE_TAG
        );
    }
}
