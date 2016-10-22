<?php


namespace DeltaPhp\Operator\Worker;


use DeltaPhp\Operator\Command\CommandInterface;

interface WorkerInterface
{
    const PARAM_TABLEID = "tableId";
    const PARAM_ACTIONS_MAP = "map";

    public function execute(CommandInterface $command);

    public static function getMetadata(array $metadata = null, $replace = true);

    public static function getMapping($mappingClass = null, $replace = true);
}
