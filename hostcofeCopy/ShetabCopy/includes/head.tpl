<!-- Styling -->
<link href="{assetPath file='style.rtl1.css'}?v={$versionHash}" rel="stylesheet">
<link href="{assetPath file='style.rtl3.css'}?v={$versionHash}" rel="stylesheet">
<link href="{assetPath file='style.rtl4.css'}?v={$versionHash}" rel="stylesheet">
<link href="{assetPath file='style.rtl5.css'}?v={$versionHash}" rel="stylesheet">
<link href="{assetPath file='style.rtl6.css'}?v={$versionHash}" rel="stylesheet">
<link href="{assetPath file='style.rtl2.css'}?v={$versionHash}" rel="stylesheet">
<link href="{assetPath file='font-awesome.min.css'}?v={$versionHash}" rel="stylesheet">
{assetExists file="custom.css"}
<link href="{$__assetPath__}" rel="stylesheet">
{/assetExists}

<script src="https://cdn.tailwindcss.com"></script>
<script>
    var csrfToken = '{$token}',
        markdownGuide = '{lang|addslashes key="markdown.title"}',
        locale = '{if !empty($mdeLocale)}{$mdeLocale}{else}en{/if}',
        saved = '{lang|addslashes key="markdown.saved"}',
        saving = '{lang|addslashes key="markdown.saving"}',
        whmcsBaseUrl = "{\WHMCS\Utility\Environment\WebHelper::getBaseUrl()}";
    {if $captcha}{$captcha->getPageJs()}{/if}
</script>

<script src="{assetPath file='scripts.min.js'}?v={$versionHash}"></script>
<script src="{assetPath file='menu.js'}?v={$versionHash}"></script>

{if $templatefile == "viewticket" && !$loggedin}
  <meta name="robots" content="noindex" />
{/if}
