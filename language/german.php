<?php
/*
 * Project:     EQdkp-Plus
 * License:     Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       2008
 * Date:        $Date: 2010-04-21 23:28:54 +0200 (Mi, 21. Apr 2010) $
 * -----------------------------------------------------------------------
 * @author      $Author: Godmod $
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev: 7626 $
 * 
 * $Id: german.php 7626 2010-04-21 21:28:54Z Godmod $
 */

if ( !defined('EQDKP_INC') ){
    header('HTTP/1.0 404 Not Found');exit;
}

$plang = array_merge($plang, array(
  'quickdkp'        => 'Quick DKP',
  'Points_class'    => 'Klasse:',
  'Points_Char'     => 'Name:',
  'Points_DKP'      => 'DKP:',
  'Points_CHAR'     => 'Kein Mitglied zugewiesen',
));
?>