<?php

namespace ContainerHSHsaox;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder97998 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb998d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4d6da = [
        
    ];

    public function getConnection()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getConnection', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getMetadataFactory', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getExpressionBuilder', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'beginTransaction', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getCache', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'transactional', array('func' => $func), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->transactional($func);
    }

    public function commit()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'commit', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->commit();
    }

    public function rollback()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'rollback', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getClassMetadata', array('className' => $className), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'createQuery', array('dql' => $dql), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'createNamedQuery', array('name' => $name), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'createQueryBuilder', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'flush', array('entity' => $entity), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'clear', array('entityName' => $entityName), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->clear($entityName);
    }

    public function close()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'close', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->close();
    }

    public function persist($entity)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'persist', array('entity' => $entity), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'remove', array('entity' => $entity), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'refresh', array('entity' => $entity), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'detach', array('entity' => $entity), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'merge', array('entity' => $entity), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'contains', array('entity' => $entity), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getEventManager', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getConfiguration', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'isOpen', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getUnitOfWork', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getProxyFactory', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'initializeObject', array('obj' => $obj), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'getFilters', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'isFiltersStateClean', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'hasFilters', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return $this->valueHolder97998->hasFilters();
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

        $instance->initializerb998d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder97998) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder97998 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder97998->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, '__get', ['name' => $name], $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        if (isset(self::$publicProperties4d6da[$name])) {
            return $this->valueHolder97998->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97998;

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

        $targetObject = $this->valueHolder97998;
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
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97998;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder97998;
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
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, '__isset', array('name' => $name), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97998;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder97998;
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
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, '__unset', array('name' => $name), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder97998;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder97998;
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
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, '__clone', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        $this->valueHolder97998 = clone $this->valueHolder97998;
    }

    public function __sleep()
    {
        $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, '__sleep', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;

        return array('valueHolder97998');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb998d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb998d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb998d && ($this->initializerb998d->__invoke($valueHolder97998, $this, 'initializeProxy', array(), $this->initializerb998d) || 1) && $this->valueHolder97998 = $valueHolder97998;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder97998;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder97998;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
