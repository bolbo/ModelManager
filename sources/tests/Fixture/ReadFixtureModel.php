<?php
/*
 * This file is part of the PommProject/ModelManager package.
 *
 * (c) 2014 Grégoire HUBERT <hubert.greg@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PommProject\ModelManager\Test\Fixture;

use PommProject\ModelManager\Test\Fixture\SimpleFixtureModel;
use PommProject\ModelManager\Model\ModelTrait\ReadQueries;

class ReadFixtureModel extends SimpleFixtureModel
{
    use ReadQueries;
}
