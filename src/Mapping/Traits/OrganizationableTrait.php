<?php
/**
 * CoolMS2 Organization Module (http://www.coolms.com/)
 *
 * @link      http://github.com/coolms/org for the canonical source repository
 * @copyright Copyright (c) 2006-2015 Altgraphic, ALC (http://www.altgraphic.com)
 * @license   http://www.coolms.com/license/new-bsd New BSD License
 * @author    Dmitry Popov <d.popov@altgraphic.com>
 */

namespace CmsOrg\Mapping\Traits;

use CmsOrg\Mapping\OrganizationInterface;

trait OrganizationableTrait
{
    /**
     * @var OrganizationInterface
     *
     * @Form\Type("ObjectSelect")
     * @Form\Filter({"name":"StripTags"})
     * @Form\Filter({"name":"StringTrim"})
     * @Form\Required(true)
     * @Form\Validator({"name":"Digits"})
     * @Form\Options({
     *      "required":true,
     *      "empty_option":"Select legal entity",
     *      "target_class":"CmsOrg\Mapping\OrganizationInterface",
     *      "property":"shortName",
     *      "label":"Select legal entity",
     *      "is_method":true,
     *      "find_method":{
     *          "name":"findBy",
     *          "params":{
     *              "criteria":{"verified":true},
     *              "orderBy":{"shortName":"ASC"},
     *          }
     *      }})
     */
    protected $organization;

    /**
     * @return OrganizationInterface
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param OrganizationInterface $organization
     */
    public function setOrganization(OrganizationInterface $organization)
    {
        $this->organization = $organization;
    }
}
