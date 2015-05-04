<?php
/**
 * CoolMS2 Organization Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/org for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsOrg\Mapping;

use CmsCommon\Mapping\Common\AnnotatableInterface,
    CmsCommon\Mapping\Common\DescribableInterface,
    CmsCommon\Mapping\Common\NameableInterface,
    CmsCommon\Mapping\Common\VerifiableInterface;

interface OrganizationInterface extends
    NameableInterface,
    DescribableInterface,
    AnnotatableInterface,
    VerifiableInterface
{
    /**
     * @return \DateTime
     */
    public function getFoundationDate();

    /**
     * @return string
     */
    public function getHeadName();

    /**
     * @return PositionInterface
     */
    public function getHeadPosition();

    /**
     * @return number
     */
    public function getNumberOfStuff();
}
