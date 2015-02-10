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
 * @copyright (C) Joachim Barthel 2012-2015
 * 
 */

class jxExtAdmin_Install
{ 

    public static function onActivate() 
    { 
        return true;
    }

    
    public static function onDeactivate() 
    { 
        $oDb = oxDb::getDb(); 
        $sSql = "DELETE FROM oxtplblocks WHERE OXMODULE = 'jxextadmin' ";
        $oRs = $oDb->execute($sSql); 
        
        return true;
    }
    
}    
