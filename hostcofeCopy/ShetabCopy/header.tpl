<!doctype html>
<html lang="en">
<head>
    <meta charset="{$charset}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Host Cofe</title>
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png" />
    <link rel="manifest" href="/images/favicon/site.webmanifest" />
{include file="$template/includes/head.tpl"}
    {$headoutput}
</head>
<body class="primary-bg-color app sidebar-mini" data-phone-cc-input="{$phoneNumberInputStyle}">
    {if $captcha}{$captcha->getMarkup()}{/if}
    {$headeroutput} 
    {if $templatefile != 'login' && $templatefile != 'logout' && $templatefile != 'clientregister'} 

      {if $loggedin}
      <!-- Sidebar menu-->
      <aside class="nabsbar">
               <div class="sidebar-img active">
                  <a class="navbar-brand active" href="{$WEB_ROOT}/index.php">
                      <div class="navbar-brand-img-container">
                          <img alt="Host Cofe" class="navbar-brand-img main-logo" src="{$WEB_ROOT}/templates/{$template}/whmcsco/img/logol.png"> 
                          <p style="color: #61d4fa;">Host Cofe</p>
                      </div>
                      <img alt="Host Cofe" class="navbar-brand-img logo" src="{$WEB_ROOT}/templates/{$template}/whmcsco/img/logol.png"></a>
                  <ul class="nab-menu">
                     {if $loggedin}
                     {include file="$template/whmcsco/tpl/nav-logedin.tpl"}
                     {else}
                     {include file="$template/whmcsco/tpl/nav-logedout.tpl"}
                     {/if}
                  </ul>
               </div>
      </aside>
      <!-- Sidebar menu-->
      {/if}

    <div class="app-content {if !$loggedin}logged-in-margin{/if}">
        {if $loggedin}
        <header id="header" class="header">
        <div class="navbar navbar-light">
            <div class="container">
            <div class="client-menu-container">
                <div class="client-menu">
                        {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar rightDrop=true}
                </div>
            </div>

                <form method="post" action="{routePath('knowledgebase-search')}" class="form-inline ml-auto">
                    
                </form>
                
                    <a href="{$WEB_ROOT}/cart.php?a=view" data-toggle="tooltip" title="سبد خرید" data-placement="bottom" class="btn nav-link">
                        <i class="fas fa-shopping-cart"></i>
                        <span class="client-top-access-item-count">{$cartitemcount}</span>
                    </a>

                <div class="btn-group" role="group">
                     {* begin if client is login *} 
                     {if $client} 
                     {assign var=allNotifications value=($clientsstats.numactivetickets + $clientsstats.numunpaidinvoices + ($clientsstats.productsnumtotal - $clientsstats.productsnumactive))} 
                    <button id="notifications" class="btn nav-lin" data-toggle="modal" data-target="#myModal">
                      <i class="fas fa-bell"></i>
                      <span class="client-top-access-item-count">
                      {if count($clientAlerts) > 0}
                                    {count($clientAlerts)}
                                {else}
                                    <span class="d-sm-none">0</span>
                                {/if}
                      </span>
                    </button>
                    
                    <!-- Modal -->
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">
                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-body">
                            <li>
                                {foreach $clientAlerts as $alert}
                                <a href="{$alert->getLink()}">
                                <span class="icon">
                                            <i class="fas fa-fw fa-{if $alert->getSeverity() == 'danger'}exclamation-circle{elseif $alert->getSeverity() == 'warning'}exclamation-triangle{elseif $alert->getSeverity() == 'info'}info-circle{else}check-circle{/if}"></i>
                                </span>
                                <span class="notification-content">
                                  <span class="notification-title">{$alert->getMessage()}</span>
                                </span>
                                </a> 
                                {foreachelse}

                              </a><div class="alert alert-info margin-5 padding-5 text-center"> هیچ پیامی وجود ندارد </div><br>
                                {/foreach}
                            </li>
                              <button type="button" class="btn btn-danger btn-sm light float-right" data-dismiss="modal">بستن</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    {/if} {* end if client is login *}
                </div>


                <ul class="navbar-nav toolbar">
                    <li class="nav-item ml-1 d-xl-none">
                        <button class="btn nav-link" type="button" data-toggle="sidebar" data-target="#mainNavbar">
                            <span class="fas fa-bars fa-fw"></span>
                        </button>
                    </li>
                </ul>
            
            </div>
            
            
        </div>
</header>
{/if}

    {/if} 
    
    {include file="$template/includes/network-issues-notifications.tpl"}

    {include file="$template/includes/verifyemail.tpl"}


{if $templatefile != 'homepage' && $templatefile != 'clientareahome'}
{if $templatefile != 'login' && $templatefile != 'logout' && $templatefile != 'pwreset' && $templatefile != 'password-reset-container' && $templatefile != 'clientregister'}

    <section id="main-body">
        <div class="{if !$skipMainBodyContainer}container{/if}">
            <div class="row">
            {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
                <div class="col-lg-4 col-xl-3">
                    <div class="sidebar">
                        {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar}
                    </div>
                    {if !$inShoppingCart && $secondarySidebar->hasChildren()}
                        <div class="d-none d-lg-block sidebar">
                            {include file="$template/includes/sidebar.tpl" sidebar=$secondarySidebar}
                        </div>
                    {/if}
                </div>

{/if}
            <div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-lg-8 col-xl-9{else}col-12{/if} primary-content">

{/if}
{/if}

{if $templatefile == 'clientareahome'}
    <section id="main-body">
        <div class="{if !$skipMainBodyContainer}container{/if}">
            <div class="row">
            <div class="col-12 primary-content">

{/if}
