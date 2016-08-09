<?php

namespace ExportToolkit\ExportService\Filter;

use ExportToolkit\ExportService\IFilter;
use Pimcore\Model\Object\AbstractObject;

class DefaultFilter implements IFilter {

    public function doExport($object, $config = null) {

        if($object instanceof AbstractObject) {
            return true;
        }

        return false;

    }


}