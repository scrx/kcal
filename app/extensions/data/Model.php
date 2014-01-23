<?php
/**
 * 
 */

namespace app\extensions\data;

//use lithium\security\Password;

class Model extends \lithium\data\Model {

    public static function __init() {
        parent::__init();
       // pr('filetrrr');
        // {{{ Filters
        static::applyFilter('save', function($self, $params, $chain) {
            $date   = date('Y-m-d H:i:s', time());
            $schema = $self::schema();

            //do these things only if they don't exist (i.e.  on creation of object)
            if (!$params['entity']->exists()) {
                //if 'created' doesn't already exist and is defined in the schema...
                if (empty($params['date']['created']) && array_key_exists('created', $schema)) {
                    $params['data']['created'] = $date;
                }
            }
            if (array_key_exists('modified', $schema)) {
                $params['data']['modified'] = $date;
            }
            return $chain->next($self, $params, $chain);
        });
        // }}}
    }
}

?>