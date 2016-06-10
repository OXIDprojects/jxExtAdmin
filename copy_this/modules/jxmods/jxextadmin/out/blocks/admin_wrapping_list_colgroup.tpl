[{assign var="aVersion" value="."|explode:$oView->getShopVersion() }]
[{assign var="shopVersion" value=$aVersion[0]+$aVersion[1]/100 }]
[{if $shopVersion < 4.09 }]
    <col width="4%">
[{/if}]

[{$smarty.block.parent}]