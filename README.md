# ClassLoader
The ClassLoader provides an recursive autoloader which looks for class files in a directory and its subdirectories.

The constructor expects just one argument - this is the directory what the ClassLoader is looking for. The second and third arguments are optional and specify if the ClassLoader should run recursifly through the directories (default: true) and the suffix of the class files (default: .php). 

```php
  use Dansnet\ClassLoader;
  $classloader1 = new ClassLoader("include");                     // search directory
  $classloader2 = new ClassLoader("include", false);              // not recursive
  $classloader3 = new ClassLoader("include", true, ".class.php"); // changing suffix to ".class.php"
```

Afterwards all classes are automatically loaded/included if they are requested.
