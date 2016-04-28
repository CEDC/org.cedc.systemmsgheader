<?php

class CRM_Systemmsgheader_BAO_SystemMsgHeader extends CRM_Systemmsgheader_DAO_SystemMsgHeader {

  /**
   * Create a new SystemMsgHeader based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Systemmsgheader_DAO_SystemMsgHeader|NULL
   *
  public static function create($params) {
    $className = 'CRM_Systemmsgheader_DAO_SystemMsgHeader';
    $entityName = 'SystemMsgHeader';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } */
}
