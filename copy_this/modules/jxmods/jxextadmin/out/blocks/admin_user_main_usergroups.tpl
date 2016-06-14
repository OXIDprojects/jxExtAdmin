
[{*  ------------------------------------------
  *  Replacement of block 
  *      admin_user_main_usergroups
  *  in file 
  *      user_main.tpl 
  *
  * @link      https://github.com/job963/jxExtAdmin
  * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
  * @copyright (C) Joachim Barthel 2012-2016
  *
  *  ------------------------------------------ *}]
    
[{assign var="oConfig" value=$oViewConf->getConfig()}]

[{if $oConfig->getConfigParam("sJxExtAdminShowUserGroups") }]
    <fieldset title="[{ oxmultilang ident="DELIVERY_USERS_SETGROUPS" }]" style="padding-left: 5px;">
        <legend><strong>[{ oxmultilang ident="DELIVERY_USERS_SETGROUPS" }]</strong></legend>
        <br />
        [{ assign var="aUserGroups" value=$edit->getUserGroups() }]
        [{ assign var="aReplaces" value=$oConfig->getConfigParam("sJxExtAdminHighUserGroups") }]

        <ul style="margin-left:8px;">
        [{foreach from=$aUserGroups item=aUserGroup}]
            [{ assign var="sStyle" value="" }]
            [{foreach from=$aReplaces item=sReplace}]
                [{assign var="aReplace" value="|"|explode:$sReplace}]
                [{if $aUserGroup->oxgroups__oxtitle->value == $aReplace[0]}]
                    [{ assign var="sStyle" value=$aReplace[1] }]
                [{/if}]
            [{/foreach}]
            <li><span style="[{$sStyle}]">[{$aUserGroup->oxgroups__oxtitle->value}]</span>
        [{/foreach}]
        </ul>
        <br />
        [{$smarty.block.parent}]
    </fieldset>
[{else}]
    [{$smarty.block.parent}]
[{/if}]

