<?php

namespace ContainerJdwzHxv;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder1c6c7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer52aa8 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd0d7e = [
        
    ];

    public function getConnection()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getConnection', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getMetadataFactory', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getExpressionBuilder', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'beginTransaction', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getCache', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'transactional', array('func' => $func), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'commit', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->commit();
    }

    public function rollback()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'rollback', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getClassMetadata', array('className' => $className), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'createQuery', array('dql' => $dql), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'createNamedQuery', array('name' => $name), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'createQueryBuilder', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'flush', array('entity' => $entity), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'clear', array('entityName' => $entityName), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->clear($entityName);
    }

    public function close()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'close', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->close();
    }

    public function persist($entity)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'persist', array('entity' => $entity), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'remove', array('entity' => $entity), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'refresh', array('entity' => $entity), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'detach', array('entity' => $entity), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'merge', array('entity' => $entity), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'contains', array('entity' => $entity), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getEventManager', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getConfiguration', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'isOpen', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getUnitOfWork', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getProxyFactory', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'initializeObject', array('obj' => $obj), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'getFilters', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'isFiltersStateClean', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'hasFilters', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return $this->valueHolder1c6c7->hasFilters();
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

        $instance->initializer52aa8 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder1c6c7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder1c6c7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder1c6c7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, '__get', ['name' => $name], $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        if (isset(self::$publicPropertiesd0d7e[$name])) {
            return $this->valueHolder1c6c7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c6c7;

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

        $targetObject = $this->valueHolder1c6c7;
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
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c6c7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder1c6c7;
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
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, '__isset', array('name' => $name), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c6c7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder1c6c7;
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
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, '__unset', array('name' => $name), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder1c6c7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder1c6c7;
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
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, '__clone', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        $this->valueHolder1c6c7 = clone $this->valueHolder1c6c7;
    }

    public function __sleep()
    {
        $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, '__sleep', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;

        return array('valueHolder1c6c7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer52aa8 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer52aa8;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer52aa8 && ($this->initializer52aa8->__invoke($valueHolder1c6c7, $this, 'initializeProxy', array(), $this->initializer52aa8) || 1) && $this->valueHolder1c6c7 = $valueHolder1c6c7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder1c6c7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder1c6c7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
