{include file="$template/whmcsco/tpl/clents-slider.tpl"}

<div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-primary text-primary">
										<i class="fas fa-server"></i>
									</span>
									<div class="media-body">
										<p class="mb-1">{$LANG.navservices}</p>
									   <a href="clientarea.php?action=services">
										<h4 class="mb-0">سرویس فعال</h4>
										<span class="badge badge-primary">{$clientsstats.productsnumactive}</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-primary text-success">
										<i class="fas fa-comments"></i>
									</span>
									<div class="media-body">
										<p class="mb-1">تیکت ها</p>
									   <a href="supporttickets.php">
										<h4 class="mb-0">تیکت های فعال</h4>
										<span class="badge badge-success">{$clientsstats.numactivetickets}</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-primary text-danger">
										<i class="fas fa-globe"></i>
									</span>
									<div class="media-body">
										<p class="mb-1">{$LANG.navdomains}</p>
									   <a href="clientarea.php?action=domains">
										<h4 class="mb-0">دامنه های فعال</h4>
										<span class="badge badge-danger">{$clientsstats.numactivedomains}</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-primary text-info">
										<i class="fas fa-credit-card"></i>
									</span>
									<div class="media-body">
										<p class="mb-1">اعتبار حساب</p>
									   <a href="{$WEB_ROOT}/clientarea.php?action=addfunds">
										<span class="badge badge-info">{$clientsstats.creditbalance}</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-primary text-dark">
										<i class="fas fa-money-check"></i>
									</span>
									<div class="media-body">
										<p class="mb-1">{$LANG.invoicesunpaid}</p>
									   <a href="{$WEB_ROOT}/clientarea.php?action=masspay&all=true">
										<span class="badge badge-dark">{$clientsstats.dueinvoicesbalance}</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
                    <div class="col-xl-3 col-lg-6 col-sm-6">
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="mr-3 bgl-primary text-warning">
										<i class="fas fa-dollar-sign"></i>
									</span>
									<div class="media-body">
										<p class="mb-1">فاکتور ها</p>
									   <a href="{$WEB_ROOT}/clientarea.php?action=masspay&all=true">
										<span class="badge badge-warning">{$clientsstats.dueinvoicesbalance}</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-6 col-xxl-4 col-lg-12">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col-6">
								<div class="row">
									<div class="col-12">
										<div class="d-flex justify-content-between">
											<span>مجموع سرویس ها</span>
											<h6>{$clientsstats.productsnumhosting}</h6>
										</div>
										<div class="progress">
											<div class="progress-bar bg-primary" style="width: {$clientsstats.productsnumhosting}%"></div>
										</div>
									</div>
									<div class="col-12 mt-4">
										<div class="d-flex justify-content-between">
											<span>مجموع تیکت ها</span>
											<h6>{$clientsstats.numtickets}</h6>
										</div>
										<div class="progress">
											<div class="progress-bar bg-success" style="width: {$clientsstats.numtickets}%"></div>
										</div>
									</div>
								</div>

									</div>
									
									<div class="col-6">
								<div class="row">
									<div class="col-12">
										<div class="d-flex justify-content-between">
											<span>مجموع دامنه ها</span>
											<h6>{$clientsstats.numdomains}</h6>
										</div>
										<div class="progress">
											<div class="progress-bar bg-danger" style="width: {$clientsstats.numdomains}%"></div>
										</div>
									</div>
									<div class="col-12 mt-4">
										<div class="d-flex justify-content-between">
											<span>مجموع فاکتور ها</span>
											<h6>{$clientsstats.numdueinvoices}</h6>
										</div>
										<div class="progress">
											<div class="progress-bar bg-warning" style="width: {$clientsstats.numdueinvoices}%"></div>
										</div>
									</div>
								</div>

									</div>
								</div>

							</div>
						</div>
					</div>

    </div>

<div class="alert alert-primary"> <i class="fab fa-telegram"></i> با عضویت در کانال تلگرامی ما <a href="https://t.me/IDTELEGRAM" target="_blank">IDTelegram@</a> از آخرین اطلاعیه ها و تخفیف‌های سایت همیشه مطلع شوید.</div>
</br>

<div class="client-home-cards">
    <div class="row">
<div class="col-sm-12 col-xs-12" >
   <div class="card">
    <div class="card-body">
            <h3 class="card-title m-0">
                تیکت های اخیر
                <a class="btn btn-primary btn-sm float-right" href="{$WEB_ROOT}/submitticket.php">ارسال تیکت</a>
            </h3>
            <br>
            <div class="table-responsive">
                <table class="table table-list dataTable no-footer">
                    <thead>
                        <tr>
                            <th class="text-right">شماره تیکت</th>
                            <th class="text-right">{$LANG.supportticketssubject}</th>
                            <th>{$LANG.supportticketsdepartment}</th>
                            <th>{$LANG.supportticketsubmitted}</th>
                            <th>{$LANG.supportticketsticketlastupdated}</th>
                            <th>{$LANG.supportticketsstatus}</th>
                            <th class="text-left">عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $tickets as $key => $ticket}
                            <td>#{$ticket.tid}</td>
                            <td>{if $ticket.unread}<strong>{/if}{$ticket.subject}{if $ticket.unread}</strong>{/if}</td>
                            <td>{$ticket.department}</p></td>
                            <td class="text-center text-danger">{$ticket.date}</td>
                            <td class="text-center text-primary">{$ticket.lastreply}</td>
                            <td class="text-center"><span class="btn bg-color-blue btn-sm">{$ticket.status}</span></td>
                            <td class="text-left"><a class="btn btn-info btn-sm" href="viewticket.php?tid={$ticket.tid}&amp;c={$ticket.c}">{$LANG.supportticketsviewticket}</a></td>
                        </tr>
                        {foreachelse}
                        <tr>
                            <td colspan="7">هیچ تیکتی برای نمایش نیست</td>
                        </tr>
                        {/foreach}
                    </tbody>
                </table>

            </div>

      </div>
   </div>
</div>


    </div>
</div>


<div class="client-home-cards">
    <div class="row">
        <div class="col-12">
            {function name=outputHomePanels}
                <div menuItemName="{$item->getName()}" class="card card-accent-{$item->getExtra('color')}{if $item->getClass()} {$item->getClass()}{/if}"{if $item->getAttribute('id')} id="{$item->getAttribute('id')}"{/if}>
                    <div class="card-header">
                        <h3 class="card-title m-0">

                            {if $item->hasIcon()}<i class="{$item->getIcon()}"></i>&nbsp;{/if}
                            {$item->getLabel()}
                            {if $item->hasBadge()}&nbsp;<span class="badge">{$item->getBadge()}</span>{/if}
                        </h3>
                    </div>
                    {if $item->hasBodyHtml()}
                        <div class="card-body">
                            {$item->getBodyHtml()}
                        </div>
                    {/if}
                    {if $item->hasChildren()}
                        <div class="list-group{if $item->getChildrenAttribute('class')} {$item->getChildrenAttribute('class')}{/if}">
                            {foreach $item->getChildren() as $childItem}
                                {if $childItem->getUri()}
                                    <a menuItemName="{$childItem->getName()}" href="{$childItem->getUri()}" class="list-group-item list-group-item-action{if $childItem->getClass()} {$childItem->getClass()}{/if}{if $childItem->isCurrent()} active{/if}"{if $childItem->getAttribute('dataToggleTab')} data-toggle="tab"{/if}{if $childItem->getAttribute('target')} target="{$childItem->getAttribute('target')}"{/if} id="{$childItem->getId()}">
                                        {if $childItem->hasIcon()}<i class="{$childItem->getIcon()}"></i>&nbsp;{/if}
                                        {$childItem->getLabel()}
                                        {if $childItem->hasBadge()}&nbsp;<span class="badge">{$childItem->getBadge()}</span>{/if}
                                    </a>
                                {else}
                                    <div menuItemName="{$childItem->getName()}" class="list-group-item list-group-item-action{if $childItem->getClass()} {$childItem->getClass()}{/if}" id="{$childItem->getId()}">
                                        {if $childItem->hasIcon()}<i class="{$childItem->getIcon()}"></i>&nbsp;{/if}
                                        {$childItem->getLabel()}
                                        {if $childItem->hasBadge()}&nbsp;<span class="badge">{$childItem->getBadge()}</span>{/if}
                                    </div>
                                {/if}
                            {/foreach}
                        </div>
                    {/if}

                </div>
            {/function}

            {foreach $panels as $item}
                {if $item->getExtra('colspan')}
                    {outputHomePanels}
                    {assign "panels" $panels->removeChild($item->getName())}
                {/if}
            {/foreach}

        </div>
        <div class="col-md-6 col-lg-12 col-xl-6">

            {foreach $panels as $item}
                {if $item@iteration is odd}
                    {outputHomePanels}
                {/if}
            {/foreach}

        </div>
        <div class="col-md-6 col-lg-12 col-xl-6">

            {foreach $panels as $item}
                {if $item@iteration is even}
                    {outputHomePanels}
                {/if}
            {/foreach}

        </div>
    </div>
</div>
