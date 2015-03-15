
[{*  ------------------------------------------
  *  Replacement of block 
  *      admin_article_crossselling_crossselling
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
    <fieldset title="[{ oxmultilang ident="ARTICLE_CROSSSELLING_CROSSSELLING" }]" style="padding-left: 5px;">
        <legend><strong>[{ oxmultilang ident="ARTICLE_CROSSSELLING_CROSSSELLING" }]</strong></legend>
        <br />
        [{ if $oxparentid }]
            [{ assign var="oArticle" value=$parentarticle }]
        [{else}]
            [{assign var=oArticle" value=$edit }]
        [{/if}]
        [{ assign var="aCrossArts" value=$oArticle->getCrossSelling() }]

        <ul style="margin-left:8px;">
        [{foreach from=$aCrossArts item=sCrossArt}]
            <li>[{$sCrossArt->oxarticles__oxartnum->value}],&nbsp; [{$sCrossArt->oxarticles__oxtitle->value}]
        [{/foreach}]
        </ul>
        <br />

        [{$smarty.block.parent}]

    </fieldset>
[{else}]
    [{$smarty.block.parent}]
[{/if}]

