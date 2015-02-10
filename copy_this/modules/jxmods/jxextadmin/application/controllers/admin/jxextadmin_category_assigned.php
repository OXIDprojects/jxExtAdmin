<?php

/*
 *    This file is part of the module jxExtAdmin for OXID eShop Community Edition.
 *
 *    The module jxExtAdmin for OXID eShop Community Edition is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    The module jxExtAdmin for OXID eShop Community Edition is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      https://github.com/job963/jxExtAdmin
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 * @copyright (C) Joachim Barthel 2013-2015
 *
 */

class jxextadmin_category_assigned extends oxAdminView
{
    protected $_sThisTemplate = "jxextadmin_category_assigned.tpl";

    /**
     *
     * @return string
     */
    public function render()
    {
        $myConfig = $this->getConfig();

        parent::render();
        $iLang = $this->_iEditLang;

        $this->_aViewData["edit"] = $oArticle = oxNew( "oxarticle");

        $soxId = oxConfig::getParameter( "oxid");
        if ( $soxId != "-1" && isset( $soxId)) {
            $oDb = oxDb::getDb( oxDB::FETCH_MODE_ASSOC );

            $sDelTable = getViewName( 'oxdelivery', $iLang );
            $sO2DTable = getViewName( 'oxobject2delivery', $iLang );

            $sSql = "SELECT d.oxtitle, d.oxparam, d.oxparamend, d.oxaddsum, d.oxaddsumtype "
                    . "FROM {$sDelTable} d, {$sO2DTable} o2d "
                    . "WHERE "
                        . "d.oxid = o2d.oxdeliveryid "
                        . "AND o2d.oxobjectid = '{$soxId}'";

            $rs = $oDb->Execute($sSql);
            $aDelDefs = array();
            while (!$rs->EOF) {
                array_push($aDelDefs, $rs->fields);
                $rs->MoveNext();
            }

            $sDisTable = getViewName( 'oxdiscount', $iLang );
            $sO2DTable = getViewName( 'oxobject2discount', $iLang );

            $sSql = "SELECT "
                        . "d.oxtitle, oxactivefrom, oxactiveto, oxamount, oxamountto, oxprice, oxpriceto, oxaddsum, oxaddsumtype "
                    . "FROM "
                        . "{$sDisTable} d, {$sO2DTable} o2d "
                    . "WHERE "
                        . "d.oxid = o2d.oxdiscountid "
                        . "AND o2d.oxobjectid= '{$soxId}'";
            //echo $sSql;
            $rs = $oDb->Execute($sSql);
            $aDiscDefs = array();
            while (!$rs->EOF) {
                array_push($aDiscDefs, $rs->fields);
                $rs->MoveNext();
            }

            $this->_aViewData["aDelDefs"] = $aDelDefs;
            $this->_aViewData["aDiscDefs"] = $aDiscDefs;
        }

        return $this->_sThisTemplate;
    }

    
}
