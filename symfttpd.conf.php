<?php
/**
 * Default configuration options
 *
 * @author Laurent Bachelier <laurent@bachelier.name>
 */

/**
 * Path to symfttpd files
 * Useful for creating the link to genconf.
 * Do not change/copy it unless you know what you are doing.
 * @var string symfttpd path
 */
$options['path'] = dirname(__FILE__);

/**
 * Create the symlink to genconf
 * @var string|boolean false or path relative to the project root
 */
$options['genconf'] = 'config/lighttpd.php';

/**
 * Create the symlink to the symfony data directory
 * (not recommended unless using symfony 1.0)
 * @var string|boolean false or path relative to the project root
 */
$options['data_symlink'] = false;

/**
 * Create the symlink to the symfony lib directory
 * (lib/vendor/symfony is the recommended path for 1.1+)
 * @var string|boolean false or path relative to the project root
 */
$options['lib_symlink']  = 'lib/vendor/symfony';

/**
 * Create the symlink to the symfony directory
 * (not recommended)
 * @var string|boolean false or path relative to the project root
 */
$options['symfony_symlink'] = false;

/**
 * Create the symlink for "/sf"
 * (recommended)
 * @var boolean
 */
$options['web_symlink'] = true;

/**
 * Wanted symfony version
 * You should override this in the project-level config
 * @var string
 */
$options['want'] = '1.4';


/**
 * symfony paths
 * You should override this in the user-level config
 * @var array version=>path
 */
$options['sf_path'] = array(
    '1.0'=>getenv('HOME').'/Dev/symfony/1.0',
    '1.1'=>getenv('HOME').'/Dev/symfony/1.1',
    '1.2'=>getenv('HOME').'/Dev/symfony/1.2',
    '1.3'=>getenv('HOME').'/Dev/symfony/1.3',
    '1.4'=>getenv('HOME').'/Dev/symfony/1.4',
);

