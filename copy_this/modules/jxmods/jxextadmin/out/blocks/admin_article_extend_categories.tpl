
[{*  ------------------------------------------
  *  Replacement of block 
  *      admin_article_extend_categories
  *  in file 
  *      article_extend.tpl 
  *
  * @link      https://github.com/job963/jxExtAdmin
  * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
  * @copyright (C) Joachim Barthel 2012-2015
  *
  *  ------------------------------------------ *}]
    
[{assign var="oConfig" value=$oViewConf->getConfig()}]

[{ if $oConfig->getConfigParam("sJxExtAdminShowArticleCategories") }]
    <fieldset title="[{ oxmultilang ident="ARTICLE_EXTEND_ARTINCATS" }]" style="padding-left: 5px;">
        <legend>[{ oxmultilang ident="ARTICLE_EXTEND_ARTINCATS" }]</legend>
        <br />
        [{ if $oxparentid }]
            [{ assign var="oArticle" value=$parentarticle }]
        [{else}]
            [{assign var=oArticle" value=$edit }]
        [{/if}]
        [{ assign var="aCatIds" value=$oArticle->getCategoryIds() }]

        <ul style="margin-left:8px;">
        [{foreach from=$aCatIds item=sCatId}]
            [{assign var=oCat value='oxcategory'|@oxNew}]
            [{capture}][{$oCat->load($sCatId)}][{/capture}]
            [{assign var=sCatPath value=""}]
            [{assign var=oParCat value=$oCat->getParentCategory()}]
            [{if $oParCat->oxcategories__oxtitle->value != ""}]
                [{capture assign=sCatPath}][{$oParCat->oxcategories__oxtitle->value}] - [{/capture}]
                [{assign var=oParCat value=$oParCat->getParentCategory()}]
                [{if $oParCat->oxcategories__oxtitle->value != ""}]
                    [{capture assign=sCatPath}][{$oParCat->oxcategories__oxtitle->value}] - [{$sCatPath}][{/capture}]
                    [{assign var=oParCat value=$oParCat->getParentCategory()}]
                    [{if $oParCat->oxcategories__oxtitle->value != ""}]
                        [{capture assign=sCatPath}][{$oParCat->oxcategories__oxtitle->value}] - [{$sCatPath}][{/capture}]
                        [{assign var=oParCat value=$oParCat->getParentCategory()}]
                        [{if $oParCat->oxcategories__oxtitle->value != ""}]
                            [{capture assign=sCatPath}][{$oParCat->oxcategories__oxtitle->value}] - [{$sCatPath}][{/capture}]
                            [{assign var=oParCat value=$oParCat->getParentCategory()}]
                            [{if $oParCat->oxcategories__oxtitle->value != ""}]
                                [{capture assign=sCatPath}][{$oParCat->oxcategories__oxtitle->value}] - [{$sCatPath}][{/capture}]
                                [{assign var=oParCat value=$oParCat->getParentCategory()}]
                                [{if $oParCat->oxcategories__oxtitle->value != ""}]
                                    [{capture assign=sCatPath}][{$oParCat->oxcategories__oxtitle->value}] - [{$sCatPath}][{/capture}]
                                    [{assign var=oParCat value=$oParCat->getParentCategory()}]
                                [{/if}]
                            [{/if}]
                        [{/if}]
                    [{/if}]
                [{/if}]
            [{/if}]
            [{*for $start=1 to 3}]
                [{assign var=sCatPath value=$sCatPath+" -"}]
            [{/for*}]
            <li>[{$sCatPath}][{$oCat->oxcategories__oxtitle->value}]</li>
        [{/foreach}]
        </ul>
        <br />

        [{$smarty.block.parent}]

    </fieldset>
[{else}]
    [{$smarty.block.parent}]
[{/if}]

