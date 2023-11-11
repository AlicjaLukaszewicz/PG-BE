<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5f125 = null;
    private $initializer4b05d = null;
    private static $publicPropertiesebd0d = [
        
    ];
    public function getConnection()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getConnection', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getMetadataFactory', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getExpressionBuilder', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'beginTransaction', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getCache', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getCache();
    }
    public function transactional($func)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'transactional', array('func' => $func), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'wrapInTransaction', array('func' => $func), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'commit', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->commit();
    }
    public function rollback()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'rollback', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getClassMetadata', array('className' => $className), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'createQuery', array('dql' => $dql), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'createNamedQuery', array('name' => $name), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'createQueryBuilder', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'flush', array('entity' => $entity), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'clear', array('entityName' => $entityName), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->clear($entityName);
    }
    public function close()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'close', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->close();
    }
    public function persist($entity)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'persist', array('entity' => $entity), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'remove', array('entity' => $entity), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'refresh', array('entity' => $entity), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'detach', array('entity' => $entity), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'merge', array('entity' => $entity), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getRepository', array('entityName' => $entityName), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'contains', array('entity' => $entity), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getEventManager', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getConfiguration', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'isOpen', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getUnitOfWork', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getProxyFactory', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'initializeObject', array('obj' => $obj), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'getFilters', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'isFiltersStateClean', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, 'hasFilters', array(), $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        return $this->valueHolder5f125->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer4b05d = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder5f125) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder5f125 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder5f125->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer4b05d && ($this->initializer4b05d->__invoke($valueHolder5f125, $this, '__get', ['name' => $name], $this->initializer4b05d) || 1) && $this->valueHolder5f125 = $valueHolder5f125;
        if (isset(self::$publicPropertiesebd0d[$name])) {
            return $this->valueHolder5f125->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
