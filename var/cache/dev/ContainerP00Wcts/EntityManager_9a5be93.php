<?php

namespace ContainerP00Wcts;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder70715 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer57a86 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesef0ad = [
        
    ];

    public function getConnection()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getConnection', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getMetadataFactory', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getExpressionBuilder', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'beginTransaction', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getCache', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getCache();
    }

    public function transactional($func)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'transactional', array('func' => $func), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'wrapInTransaction', array('func' => $func), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'commit', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->commit();
    }

    public function rollback()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'rollback', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getClassMetadata', array('className' => $className), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'createQuery', array('dql' => $dql), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'createNamedQuery', array('name' => $name), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'createQueryBuilder', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'flush', array('entity' => $entity), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'clear', array('entityName' => $entityName), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->clear($entityName);
    }

    public function close()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'close', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->close();
    }

    public function persist($entity)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'persist', array('entity' => $entity), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'remove', array('entity' => $entity), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'refresh', array('entity' => $entity), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'detach', array('entity' => $entity), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'merge', array('entity' => $entity), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getRepository', array('entityName' => $entityName), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'contains', array('entity' => $entity), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getEventManager', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getConfiguration', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'isOpen', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getUnitOfWork', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getProxyFactory', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'initializeObject', array('obj' => $obj), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'getFilters', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'isFiltersStateClean', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'hasFilters', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return $this->valueHolder70715->hasFilters();
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

        $instance->initializer57a86 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder70715) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder70715 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder70715->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, '__get', ['name' => $name], $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        if (isset(self::$publicPropertiesef0ad[$name])) {
            return $this->valueHolder70715->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70715;

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

        $targetObject = $this->valueHolder70715;
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
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70715;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder70715;
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
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, '__isset', array('name' => $name), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70715;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder70715;
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
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, '__unset', array('name' => $name), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder70715;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder70715;
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
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, '__clone', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        $this->valueHolder70715 = clone $this->valueHolder70715;
    }

    public function __sleep()
    {
        $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, '__sleep', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;

        return array('valueHolder70715');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer57a86 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer57a86;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer57a86 && ($this->initializer57a86->__invoke($valueHolder70715, $this, 'initializeProxy', array(), $this->initializer57a86) || 1) && $this->valueHolder70715 = $valueHolder70715;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder70715;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder70715;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
