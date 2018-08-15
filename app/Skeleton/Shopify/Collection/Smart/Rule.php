<?php
/**
 * Created by PhpStorm.
 * User: nate
 * Date: 8/12/18
 * Time: 8:30 AM
 */

namespace App\Skeleton\Shopify\Collection\Smart;


class Rule
{

    const COLUMN_TITLE = 'title';
    const COLUMN_TYPE = 'type';
    const COLUMN_VENDOR = 'vendor';
    const COLUMN_VARIANT = 'variant_title';

    const COLUMN_VARIANT_COMPARE_PRICE = 'variant_compare_at_price';
    const COLUMN_VARIANT_WEIGHT = 'variant_weight';
    const COLUMN_VARIANT_INVENTORY = 'variant_inventory';
    const COLUMN_VARIANT_PRICE = 'variant_price';

    const EQUALS_TAG = 'tag';

    const RELATION_GREATER_THAN = 'greater_than';
    const RELATION_LESS_THAN = 'less_than';
    const RELATION_EQUALS = 'equals';
    const RELATION_NOT_EQUALS = 'not_equals';

    const RELATION_STARTS_WITH = 'starts_with';
    const RELATION_END_WITH = 'ends_with';
    const RELATION_CONTAINS = 'contains';

    protected $column;
    protected $relation;
    protected $condition;

    /**
     * @return mixed
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * @param mixed $column
     * @return Rule
     */
    public function setColumn($column)
    {
        $this->column = $column;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @param mixed $relation
     * @return Rule
     */
    public function setRelation($relation)
    {
        $this->relation = $relation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param mixed $condition
     * @return Rule
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
        return $this;
    }


}