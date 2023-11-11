<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5f125 = null;
    private $initializer4b05d = null;
    private static $publicPropertiesebd0d = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getList', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getInstalledModules', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getMustBeConfiguredModules', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getUpgradableModules', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getModule', array('moduleName' => $moduleName), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'setActionUrls', array('collection' => $collection), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializer4b05d = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHolder5f125) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHolder5f125 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHolder5f125->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, '__get', ['name' => $name], $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        if (isset(self::$publicPropertiesebd0d[$name])) {
            return $this->valueHolder5f125->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f125;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5f125;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f125;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder5f125;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, '__isset', array('name' => $name), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f125;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder5f125;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, '__unset', array('name' => $name), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5f125;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5f125;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, '__clone', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        $this->valueHolder5f125 = clone $this->valueHolder5f125;
    }
    public function __sleep()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, '__sleep', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return array('valueHolder5f125');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer4b05d = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer4b05d;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'initializeProxy', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5f125;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5f125;
    }
}
