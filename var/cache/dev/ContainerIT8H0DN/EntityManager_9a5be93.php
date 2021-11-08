<?php

namespace ContainerIT8H0DN;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8811a = null;
    private $initializer80f0a = null;
    private static $publicProperties94289 = [
        
    ];
    public function getConnection()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getConnection', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getMetadataFactory', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getExpressionBuilder', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'beginTransaction', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getCache', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getCache();
    }
    public function transactional($func)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'transactional', array('func' => $func), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'commit', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->commit();
    }
    public function rollback()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'rollback', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getClassMetadata', array('className' => $className), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'createQuery', array('dql' => $dql), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'createNamedQuery', array('name' => $name), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'createQueryBuilder', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'flush', array('entity' => $entity), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'clear', array('entityName' => $entityName), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->clear($entityName);
    }
    public function close()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'close', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->close();
    }
    public function persist($entity)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'persist', array('entity' => $entity), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'remove', array('entity' => $entity), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'refresh', array('entity' => $entity), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'detach', array('entity' => $entity), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'merge', array('entity' => $entity), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'contains', array('entity' => $entity), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getEventManager', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getConfiguration', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'isOpen', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getUnitOfWork', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getProxyFactory', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'initializeObject', array('obj' => $obj), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'getFilters', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'isFiltersStateClean', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'hasFilters', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return $this->valueHolder8811a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer80f0a = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder8811a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8811a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder8811a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, '__get', ['name' => $name], $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        if (isset(self::$publicProperties94289[$name])) {
            return $this->valueHolder8811a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8811a;
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
        $targetObject = $this->valueHolder8811a;
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
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8811a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder8811a;
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
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, '__isset', array('name' => $name), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8811a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder8811a;
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
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, '__unset', array('name' => $name), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8811a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8811a;
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
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, '__clone', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        $this->valueHolder8811a = clone $this->valueHolder8811a;
    }
    public function __sleep()
    {
        $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, '__sleep', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
        return array('valueHolder8811a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer80f0a = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer80f0a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer80f0a && ($this->initializer80f0a->__invoke($valueHolder8811a, $this, 'initializeProxy', array(), $this->initializer80f0a) || 1) && $this->valueHolder8811a = $valueHolder8811a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8811a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8811a;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
