[{assign var="aVersion" value="."|explode:$oView->getShopVersion() }]
[{assign var="shopVersion" value=$aVersion[0]+$aVersion[1]/100 }]
[{if $shopVersion < 4.09 }]
    <td class="listheader first" height="15" width="30" align="center">
        <a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxcontents', 'oxactive', 'asc');document.search.submit();" class="listheader">
            [{ oxmultilang ident="GENERAL_ACTIVTITLE" }]
        </a>
    </td>
[{/if}]

[{$smarty.block.parent}]