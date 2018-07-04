<?php
/**
 * Created by PhpStorm.
 * User: liupeng
 * Date: 2018-07-04
 * Time: 20:34
 */

namespace carNamespace {
    class car
    {
        var $carName ;
        var $carColor;

        /**
         * @return mixed
         */
        public function getCarName()
        {
            return $this->carName;
        }

        /**
         * @param mixed $carName
         */
        public function setCarName($carName)
        {
            $this->carName = $carName;
        }

        /**
         * @return mixed
         */
        public function getCarColor()
        {
            return $this->carColor;
        }

        /**
         * @param mixed $carColor
         */
        public function setCarColor($carColor)
        {
            $this->carColor = $carColor;
        }

        public function show()
        {
            echo "我是" . this.$this->getCarName() . "车，我的颜色是" . this.$this->getCarColor() . "。";
        }

    }
}

?>