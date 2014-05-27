DoctrineStackBundle
===================

Symfony DoctrineBundle extension with a Stacktrace per Query

# Require in composer.json
```
"terwey/doctrine-stack-bundle": "dev-master"
```

# Register with your AppKernel
```
if (in_array($this->getEnvironment(), array('dev', 'test'))) {
			$bundles[] = new Terwey\DoctrineStackBundle\DoctrineStackBundle();
}
```


# WARNING
I currently can't figure out how to get it to properly work from a Bundle so you'll have to replace this file locally: ```vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php```


Change this line:

```
$this->queries[++$this->currentQuery] = array('sql' => $sql, 'params' => $params, 'types' => $types, 'executionMS' => 0);
```

To this line:

```
$e = new \Exception;
$shortTrace = explode("\n", $e->getTraceAsString())[5];
$this->queries[++$this->currentQuery] = array('sql' => $sql, 'params' => $params, 'types' => $types, 'executionMS' => 0, 'stacktrace' => $e->getTraceAsString(), 'shortstack' => $shortTrace);
```

If you happen to know how to do this properly, please make a PR!