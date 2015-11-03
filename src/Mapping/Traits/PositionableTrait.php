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

use CmsOrg\Mapping\PositionInterface;

trait PositionableTrait
{
    /**
     * @var PositionInterface
     *
     * @ORM\ManyToOne(targetEntity="CmsOrg\Mapping\PositionInterface")
     * @ORM\JoinColumn(nullable=true,onDelete="SET NULL")
     * @Form\Type("ObjectSelect")
     * @Form\Filter({"name":"StripTags"})
     * @Form\Filter({"name":"StringTrim"})
     * @Form\Required(true)
     * @Form\Validator({"name":"Digits"})
     * @Form\Options({
     *      "required":true,
     *      "empty_option":"Select position",
     *      "target_class":"CmsOrg\Mapping\PositionInterface",
     *      "property":"name",
     *      "label":"Select position",
     *      "text_domain":"CmsOrg",
     *      "is_method":true,
     *      "find_method":{
     *          "name":"findBy",
     *          "params":{
     *              "criteria":{"verified":true},
     *              "orderBy":{"name":"ASC"},
     *          }
     *      }})
     */
    protected $position;

    /**
     * @return PositionInterface
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param PositionInterface $position
     */
    public function setPosition(PositionInterface $position)
    {
        $this->position = $position;
    }
}
