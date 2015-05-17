<?php  /* vim: set ai et ts=2 sw=2 sts=2: */

/**
 * @file
 * phuCssView Class
 * 
 * Create view for css loading
 *
 * @category Rendering
 * @package Serverphu
 * @author Michael Sypolt <msypolt@transitguru.limited>
 * @copyright Copyright (c) 2015
 * @license http://www.gnu.org/licenses/gpl-3.0.txt
 * @version Release: @package_version@
 *
 */
class phuCssView extends phuView{
  /**
   * Render the view
   */
  public function render(){
    echo $this->model->string;
  }
}
