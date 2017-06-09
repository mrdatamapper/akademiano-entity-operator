<?php


namespace Akademiano\EntityOperator;



use Akademiano\Entity\EntityInterface;

interface KeeperInterface
{
    /**
     * @param null|string $class
     * @param integer $id
     * @return EntityInterface|null
     */
    public function get($class = null, $id);

    public function save(EntityInterface $data);

    public function delete(EntityInterface $entity);

}
