DoctrineStackBundle
===================

Symfony DoctrineBundle extension with a Stacktrace per Query

# Require in ```composer.json```
```
"terwey/doctrine-stack-bundle": "dev-master"
```

# Register with your AppKernel
```
if (in_array($this->getEnvironment(), array('dev', 'test'))) {
			$bundles[] = new Terwey\DoctrineStackBundle\DoctrineStackBundle();
}
```
