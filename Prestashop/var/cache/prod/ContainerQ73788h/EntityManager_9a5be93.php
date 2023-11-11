<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8bb85 = null;
    private $initializerd34d1 = null;
    private static $publicProperties0f7cd = [
        
    ];
    public function getConnection()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getConnection', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getMetadataFactory', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getExpressionBuilder', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'beginTransaction', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getCache', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getCache();
    }
    public function transactional($func)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'transactional', array('func' => $func), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'wrapInTransaction', array('func' => $func), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'commit', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->commit();
    }
    public function rollback()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'rollback', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getClassMetadata', array('className' => $className), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'createQuery', array('dql' => $dql), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'createNamedQuery', array('name' => $name), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'createQueryBuilder', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'flush', array('entity' => $entity), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'clear', array('entityName' => $entityName), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->clear($entityName);
    }
    public function close()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'close', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->close();
    }
    public function persist($entity)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'persist', array('entity' => $entity), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'remove', array('entity' => $entity), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'refresh', array('entity' => $entity), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'detach', array('entity' => $entity), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'merge', array('entity' => $entity), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getRepository', array('entityName' => $entityName), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'contains', array('entity' => $entity), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getEventManager', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getConfiguration', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'isOpen', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getUnitOfWork', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getProxyFactory', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'initializeObject', array('obj' => $obj), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'getFilters', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'isFiltersStateClean', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'hasFilters', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return $this->valueHolder8bb85->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerd34d1 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8bb85) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8bb85 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8bb85->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, '__get', ['name' => $name], $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        if (isset(self::$publicProperties0f7cd[$name])) {
            return $this->valueHolder8bb85->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8bb85;
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
        $targetObject = $this->valueHolder8bb85;
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
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8bb85;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8bb85;
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
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, '__isset', array('name' => $name), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8bb85;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8bb85;
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
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, '__unset', array('name' => $name), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8bb85;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8bb85;
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
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, '__clone', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        $this->valueHolder8bb85 = clone $this->valueHolder8bb85;
    }
    public function __sleep()
    {
        $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, '__sleep', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
        return array('valueHolder8bb85');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerd34d1 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerd34d1;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd34d1 && ($this->initializerd34d1->__invoke($valueHolder8bb85, $this, 'initializeProxy', array(), $this->initializerd34d1) || 1) && $this->valueHolder8bb85 = $valueHolder8bb85;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8bb85;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8bb85;
    }
}
