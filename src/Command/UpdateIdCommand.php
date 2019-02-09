<?php
/*
 * This file is part of the hackaton package.
 *
 * (c) 2019 Antai Venture Builder SL <admin@antaivb.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Command;

use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class UpdateIdCommand implements ContainerAwareInterface
{
    private $container;

    /**
     * Sets the container.
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }
}