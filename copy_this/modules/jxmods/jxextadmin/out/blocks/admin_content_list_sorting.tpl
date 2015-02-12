[{if $oView->getShopVersion() < "4.9" }]
    <td class="listheader first" height="15" width="30" align="center">
        <a href="Javascript:top.oxid.admin.setSorting( document.search, 'oxcontents', 'oxactive', 'asc');document.search.submit();" class="listheader">
            [{ oxmultilang ident="GENERAL_ACTIVTITLE" }]
        </a>
    </td>
[{/if}]

[{$smarty.block.parent}]