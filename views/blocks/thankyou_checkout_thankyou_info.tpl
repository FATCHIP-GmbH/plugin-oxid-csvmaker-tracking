[{$smarty.block.parent}]

[{assign var="config" value=$oViewConf->getConfig()}]
[{assign var="url" value=$config->getConfigParam('mctUrlToMcInstallation')}]

[{if $url != ''}]
    <img src='[{$url}]/tracking.php?fnc=tracksale&order=[{$order->oxorder__oxordernr->value}]&amount=[{$order->getOrderNetSum()}]' style='display: none;' alt=''/>
[{/if}]
