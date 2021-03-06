<?php

/**
 * @file
 * phuUser Class
 * 
 * Determines routing for all requests
 * TODO add in some permissions and such
 *
 * @category Request Handling
 * @package Serverphu
 * @author Michael Sypolt <msypolt@transitguru.limited>
 * @copyright Copyright (c) 2015
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @version Release: @package_version@
 *
 */
class phuUser{
  
  public $token;    /**< User token */
  public $id = 0;   /**< User id */
  public $user;     /**< User as an array */
  public $session;  /**< User session (may not be used) */

}
