
[{*  ------------------------------------------
  *  Replacement of block 
  *      admin_category_list_filter
  *  in file 
  *      article_extend.tpl 
  *
  * @link      https://github.com/job963/jxExtAdmin
  * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
  * @copyright (C) Joachim Barthel 2012-2015
  *
  *  ------------------------------------------ *}]
    
[{ assign var="oConfig" value=$oViewConf->getConfig() }]
    
[{ if $oConfig->getConfigParam("sJxExtAdminShowCategoryList") }]
    <td valign="top" class="listfilter first" height="20">
        <div class="r1"><div class="b1">&nbsp;</div></div>
    </td>
    <td valign="top" class="listfilter" height="20" align="center">
        <div class="r1"><div class="b1">
        <input class="listedit" type="text" size="5" maxlength="128" name="where[oxcategories][oxsort]" value="[{ $where.oxcategories.oxsort }]">
        </div></div>
    </td>
    <td valign="top" class="listfilter" height="20" align="center">
        <div class="r1"><div class="b1">
            [{ assign var=jxparentid value="" }]
            <div style="float:left; background-color:#323232; border-radius:3px;height:16px;width:32px;margin-top:0px">
            <a href="Javascript:document.getElementById('oxcategoryparentid').value='';document.search.submit();"><span style="color:#fff;">[{ oxmultilang ident="JXEXTADMIN_ALL" }]</span></a>
            <script type="text/javascript">var jxparentid = "";</script>
            </div>
            <a href="Javascript:document.getElementById('oxcategoryparentid').value='oxrootid';document.search.submit();"><img src="[{$oViewConf->getModuleUrl("jxextadmin","out/admin/img/uparrow.png")}]" /></a>
            <a href="Javascript:document.getElementById('oxcategoryparentid').value=jxparentid;document.search.submit();"><img src="[{$oViewConf->getModuleUrl("jxextadmin","out/admin/img/backarrow.png")}]" /></a>
        </div></div>
    </td>
    <td valign="top" class="listfilter" height="20" colspan="2">
        <div class="r1"><div class="b1">
        <div class="find">
            <select name="changelang" class="editinput" onChange="Javascript:top.oxid.admin.changeLanguage();">
            [{foreach from=$languages item=lang}]
            <option value="[{ $lang->id }]" [{ if $lang->selected}]SELECTED[{/if}]>[{ $lang->name }]</option>
            [{/foreach}]
            </select>
            <input class="listedit" type="submit" name="submitit" value="[{ oxmultilang ident="GENERAL_SEARCH" }]">
        </div>

        <select id="oxcategoryparentid" name="where[oxcategories][oxparentid]" class="editinput" onChange="Javascript:document.search.submit();">
        [{foreach from=$cattree->aList item=pcat}]
        <option value="[{ $pcat->oxcategories__oxid->value }]" [{ if $pcat->selected}]SELECTED[{assign var=jxparentid value=$pcat->oxcategories__oxparentid->value}][{/if}]>[{ $pcat->oxcategories__oxtitle->getRawValue() }]</option>
        [{/foreach}]
        </select>
        <script type="text/javascript">jxparentid = "[{$jxparentid}]";</script>

        <input class="listedit" type="text" size="50" maxlength="128" name="where[oxcategories][oxtitle]" value="[{ $where.oxcategories.oxtitle}]">
        </div></div>
    </td>
[{else}]
    [{$smarty.block.parent}]
[{/if}]
