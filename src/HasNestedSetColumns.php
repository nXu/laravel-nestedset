<?php

namespace Nxu\NestedSet;

trait HasNestedSetColumns
{
    public $orderBy = 'id';

    public function getOrderColumn()
    {
        return $this->orderBy;
    }

    public function getQualifiedOrderColumn()
    {
        $table = $this->getTable();

        return "$table.$this->orderBy";
    }

    public function getLeftColumn()
    {
        return NestedSet::LEFT;
    }

    public function setLeftColumn($left)
    {
        $this->{$this->getLeftColumn()} = $left;
    }

    public function getQualifiedLeftColumn()
    {
        return $this->table . '.' . $this->getLeftColumn();
    }

    public function getRightColumn()
    {
        return NestedSet::RIGHT;
    }

    public function setRightColumn($right)
    {
        $this->{$this->getRightColumn()} = $right;
    }

    public function getQualifiedRightColumn()
    {
        return $this->table . '.' . $this->getRightColumn();
    }

    public function getParentIdColumn()
    {
        return NestedSet::PARENT_ID;
    }

    public function setParentIdColumn($parentId)
    {
        $this->{$this->getParentIdColumn()} = $parentId;
    }

    public function getQualifiedParentIdColumn()
    {
        return $this->table . '.' . $this->getParentIdColumn();
    }

    public function getDepthColumn()
    {
        return NestedSet::DEPTH;
    }

    public function setDepthColumn($depth)
    {
        $this->{$this->getDepthColumn()} = $depth;
    }

    public function getQualifiedDepthColumn()
    {
        return $this->table . '.' . $this->getDepthColumn();
    }
}
