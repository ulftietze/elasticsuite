<?php
/**
 * DISCLAIMER
 * Do not edit or add to this file if you wish to upgrade Smile Elastic Suite to newer
 * versions in the future.
 *
 * @category  Smile
 * @package   Smile\ElasticsuiteCore
 * @author    Romain Ruaud <romain.ruaud@smile.fr>
 * @copyright 2018 Smile
 * @license   Open Software License ("OSL") v. 3.0
 */

namespace Smile\ElasticsuiteCore\Api\Search\Request\Container;

/**
 * Search Container Default Filter interface.
 * Used to apply default filter for Search containers.
 *
 * @category Smile
 * @package  Smile\ElasticsuiteCore
 * @author   Romain Ruaud <romain.ruaud@smile.fr>
 */
interface FilterInterface
{
    /**
     * Get filter query according to current search context. Return null to unset filter query.
     *
     * @param \Smile\ElasticsuiteCore\Api\Search\ContextInterface $searchContext Search Context
     *
     * @return \Smile\ElasticsuiteCore\Search\Request\QueryInterface|null
     */
    public function getFilterQuery(\Smile\ElasticsuiteCore\Api\Search\ContextInterface $searchContext);
}
