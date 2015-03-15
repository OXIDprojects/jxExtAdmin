
[{*  ------------------------------------------
  *  Replacement of block 
  *      admin_article_crossselling_accessoires
  *  in file 
  *      article_extend.tpl 
  *
  * @link      https://github.com/job963/jxExtAdmin
  * @license   http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
  * @copyright (C) Joachim Barthel 2012-2015
  *
  *  ------------------------------------------ *}]
    
[{assign var="oConfig" value=$oViewConf->getConfig()}]

[{ if $oConfig->getConfigParam("sJxExtAdminShowArticleCrosssell") }]
    <fieldset title="[{ oxmultilang ident="ARTICLE_CROSSSELLING_EXTRAS" }]" style="padding-left: 5px;">
        <legend><strong>[{ oxmultilang ident="ARTICLE_CROSSSELLING_EXTRAS" }]</strong></legend>
        <br />
        [{ if $oxparentid }]
            [{ assign var="oArticle" value=$parentarticle }]
        [{else}]
            [{assign var=oArticle" value=$edit }]
        [{/if}]
        [{ assign var="aAccessArts" value=$oArticle->getAccessoires() }]

        <ul style="margin-left:8px;">
        [{foreach from=$aAccessArts item=sAccessArt}]
            <li>[{$sAccessArt->oxarticles__oxartnum->value}],&nbsp; [{$sAccessArt->oxarticles__oxtitle->value}]
        [{/foreach}]
        </ul>
        <br />

        [{$smarty.block.parent}]

    </fieldset>
[{else}]
    [{$smarty.block.parent}]
[{/if}]

