<?php

/**
 * items actions.
 *
 * @package    Family-Quest
 * @subpackage items
 * @author     Ralph Dittrich kizetsu.rd@googlemail.com
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class itemsActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    	$this->Items = Doctrine::getTable('items')
    	->createQuery()
    	// ->where('party_id = "'.$this->user->party_id.'"')
    	->execute();

    	// return sfView::NONE;
  }
}
