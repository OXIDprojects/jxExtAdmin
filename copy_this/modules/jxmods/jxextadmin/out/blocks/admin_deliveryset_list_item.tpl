[{assign var="aVersion" value="."|explode:$oView->getShopVersion() }]
[{assign var="shopVersion" value=$aVersion[0]+$aVersion[1]/100 }]
[{if $shopVersion < 4.09 }]
    [{ if $listitem->blacklist == 1}]
        [{assign var="listclass" value=listitem3 }]
    [{ else}]
        [{assign var="listclass" value=listitem$blWhite }]
    [{ /if}]
    [{ if $listitem->getId() == $oxid }]
        [{assign var="listclass" value=listitem4 }]
    [{ /if}]
    <td valign="top" class="[{ $listclass}][{if $listitem->oxdeliveryset__oxactive->value == 1}] active[{/if}]">
        <div class="listitemfloating">
            &nbsp;
        </div>
    </td>
[{/if}]

[{$smarty.block.parent}]
