<?php

namespace ContainerD8zVq4u;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHoldere876e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer96ac7 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiescef5e = [
        
    ];

    public function getConnection()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getConnection', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getMetadataFactory', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getExpressionBuilder', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'beginTransaction', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getCache', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'transactional', array('func' => $func), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'commit', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->commit();
    }

    public function rollback()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'rollback', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getClassMetadata', array('className' => $className), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'createQuery', array('dql' => $dql), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'createNamedQuery', array('name' => $name), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'createQueryBuilder', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'flush', array('entity' => $entity), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'clear', array('entityName' => $entityName), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->clear($entityName);
    }

    public function close()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'close', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->close();
    }

    public function persist($entity)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'persist', array('entity' => $entity), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'remove', array('entity' => $entity), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'refresh', array('entity' => $entity), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'detach', array('entity' => $entity), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'merge', array('entity' => $entity), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'contains', array('entity' => $entity), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getEventManager', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getConfiguration', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'isOpen', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getUnitOfWork', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getProxyFactory', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'initializeObject', array('obj' => $obj), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'getFilters', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'isFiltersStateClean', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'hasFilters', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return $this->valueHoldere876e->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer96ac7 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHoldere876e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldere876e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHoldere876e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, '__get', ['name' => $name], $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        if (isset(self::$publicPropertiescef5e[$name])) {
            return $this->valueHoldere876e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere876e;

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

        $targetObject = $this->valueHoldere876e;
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
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere876e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHoldere876e;
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
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, '__isset', array('name' => $name), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere876e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHoldere876e;
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
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, '__unset', array('name' => $name), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldere876e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHoldere876e;
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
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, '__clone', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        $this->valueHoldere876e = clone $this->valueHoldere876e;
    }

    public function __sleep()
    {
        $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, '__sleep', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;

        return array('valueHoldere876e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer96ac7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer96ac7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer96ac7 && ($this->initializer96ac7->__invoke($valueHoldere876e, $this, 'initializeProxy', array(), $this->initializer96ac7) || 1) && $this->valueHoldere876e = $valueHoldere876e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldere876e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldere876e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
