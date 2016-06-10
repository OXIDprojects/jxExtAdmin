[{assign var="aVersion" value="."|explode:$oView->getShopVersion() }]
[{assign var="shopVersion" value=$aVersion[0]+$aVersion[1]/100 }]
[{if $shopVersion < 4.09 }]
    <td valign="top" class="listfilter first" align="right">
        <div class="r1"><div class="b1">&nbsp;</div></div>
    </td>
[{/if}]

[{$smarty.block.parent}]