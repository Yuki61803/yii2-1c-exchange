<?php


namespace Yuki61803\exchange1c\interfaces;


interface GroupInterface extends IdentifierInterface
{
    /**
     * @param \Zenwalker\CommerceML\Model\Group[] $groups
     * @return void
     */
    public static function createTree1c($groups);
}