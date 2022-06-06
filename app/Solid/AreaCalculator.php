<?php

namespace App\Solid;

use Exception;

class AreaCalculator
{

    public function totalArea(array $shapes)
    {

        $area = 0;
        foreach ($shapes as $shape) {
            if ($shape instanceof ShapeInterface) {
                $area = $shape->area();
            } else {
                throw new Exception(get_class($shape) . 'Should be implement App\Solid\ShapeInterface');
            }
        }

        return $area;
    }
}
