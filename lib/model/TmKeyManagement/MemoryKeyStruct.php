<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 29/09/14
 * Time: 18.07
 */

/**
 * Class MemoryKeyStruct<br>
 * This class represents a row in the table memory_keys.
 */
class TmKeyManagement_MemoryKeyStruct extends DataAccess_AbstractDaoObjectStruct implements DataAccess_IDaoStruct {

    /**
     * @var integer The group's ID
     */
    public $gid;

    /**
     * @var integer The user's ID
     */
    public $uid;

    /**
     * @var integer The owner's ID
     */
    public $owner_uid;

    /**
     * @var bool Group Read grants, the atomic value
     */
    public $r;

    /**
     * @var bool Group Write grants, the atomic value
     */
    public $w;

    /**
     * @var TmKeyManagement_TmKeyStruct
     */
    public $tm_key;

    /**
     * Converts the current object into an associative array
     * @return array
     */
    public function toArray() {
        $result = (array)$this;

        if ( $this->tm_key !== null ) {
            /*
             * this should already done by '$result = (array)$this;'
             * because TmKeyManagement_TmKeyStruct as toArray method too
             */
            if( $this->tm_key instanceof TmKeyManagement_TmKeyStruct ){
                $result[ 'tm_key' ] = $this->tm_key->toArray();
            }
        }

        return $result;
    }

} 