<?php


namespace Yuki61803\exchange1c\interfaces;



interface OfferInterface extends FieldsInterface
{
    /**
     * @return GroupInterface
     */
    public function getGroup1c();
}