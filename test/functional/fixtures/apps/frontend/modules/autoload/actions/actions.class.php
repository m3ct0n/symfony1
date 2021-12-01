<?php

/**
 * autoload actions.
 *
 * @package    project
 * @subpackage autoload
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
class autoloadActions extends sfActions
{
  protected $security = ['all' => ['is_secure' => false]];

  public function executeIndex()
  {
    $this->lib1 = myLibClass::ping();
    $this->lib2 = myAppsFrontendLibClass::ping();
    $this->lib3 = myAppsFrontendModulesAutoloadLibClass::ping();
    $this->lib4 = class_exists('myPluginsSfAutoloadPluginModulesAutoloadPluginLibClass') ? 'pong' : 'nopong';
  }

  public function executeMyAutoload()
  {
    $this->o = new myAutoloadedClass();
  }
}
