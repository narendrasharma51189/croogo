<?php
/**
 * Type
 *
 * PHP version 5
 *
 * @category Model
 * @package  Croogo
 * @version  1.0
 * @author   Fahad Ibnay Heylaal <contact@fahad19.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 * @link     http://www.croogo.org
 */
class Type extends AppModel {
/**
 * Model name
 *
 * @var string
 * @access public
 */
    var $name = 'Type';
/**
 * Validation
 *
 * @var array
 * @access public
 */
    var $validate = array(
        'alias' => array(
            'rule' => 'isUnique',
            'message' => 'This alias has already been taken.',
        ),
    );
/**
 * Model associations: hasAndBelongsToMany
 *
 * @var array
 * @access public
 */
    var $hasAndBelongsToMany = array(
            'Vocabulary' => array('className' => 'Vocabulary',
                        'joinTable' => 'types_vocabularies',
                        'foreignKey' => 'type_id',
                        'associationForeignKey' => 'vocabulary_id',
                        'unique' => true,
                        'conditions' => '',
                        'fields' => '',
                        'order' => '',
                        'limit' => '',
                        'offset' => '',
                        'finderQuery' => '',
                        'deleteQuery' => '',
                        'insertQuery' => ''
            )
    );
}
?>