<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
   function($class) {
      static $classes = null;
      if ($classes === null) {
         $classes = array(
            'theseer\\autoload\\autoloadbuilder' => '/src/autoloadbuilder.php',
            'theseer\\autoload\\autoloadbuilderexception' => '/src/autoloadbuilder.php',
            'theseer\\autoload\\classdependencysorter' => '/src/dependencysorter.php',
            'theseer\\autoload\\classdependencysorterexception' => '/src/dependencysorter.php',
            'theseer\\autoload\\classfinder' => '/src/classfinder.php',
            'theseer\\autoload\\classfinderexception' => '/src/classfinder.php',
            'theseer\\autoload\\cli' => '/src/cli.php',
            'theseer\\autoload\\staticbuilder' => '/src/staticbuilder.php'
          );
      }
      $cn = strtolower($class);
      if (isset($classes[$cn])) {
         require __DIR__ . $classes[$cn];
      }
   }
);
// @codeCoverageIgnoreEnd
