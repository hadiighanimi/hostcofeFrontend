                        <ul class="nab-menu">
                           <li class="nabs">
                              <a class="nab-menu__item affili" href="{$WEB_ROOT}/clientarea.php"> <i class="fa fa-home"></i> <span class="nab-menu__label">صفحه نخست</span></a>
                           </li>
                           <li class="nabs">
                              <a class="nab-menu__item" data-toggle="nabs" href="#"> <i class="fas fa-shopping-cart"></i> </i><span class="nab-menu__label">سرویس ها</span><i class="angle fa fa-angle-left"></i></a>
                              <ul class="nabs-menu">
                                 <li><a class="nabs-item" href="{$WEB_ROOT}/clientarea.php?action=products">سرویس های من</a></li>
                                 <li><a class="nabs-item" href="{$WEB_ROOT}/cart.php">سفارش سرویس جدید</a></li>
                              </ul>
                           </li>
            				{if $condlinks.domainreg || $condlinks.domaintrans}
                    		<li class="nabs">
                    			<a href="#" class="nab-menu__item" data-toggle="nabs"> <i class="fa fa-globe"></i> </i><span class="nab-menu__label">{$LANG.navdomains} </span><i class="angle fa fa-angle-left"></i></a>
                    			<ul class="nabs-menu">
        						<li><a class="nabs-item" href="{$WEB_ROOT}/clientarea.php?action=domains">{$LANG.clientareanavdomains}</a></li>
        						{if $condlinks.domainreg}<li><a class="nabs-item" href="{$WEB_ROOT}/cart.php?a=add&domain=register">{$LANG.navregisterdomain}</a></li>{/if}
        						{if $condlinks.domaintrans}<li><a class="nabs-item" href="{$WEB_ROOT}/cart.php?a=add&domain=transfer">{$LANG.navtransferdomain}</a></li>{/if}
        						{if $enomnewtldsenabled}<li><a class="nabs-item" href="{$enomnewtldslink}">Preregister New TLDs</a></li>{/if}
                    			</ul>
                    		</li>{/if}
                    		
                           <li class="nabs">
                              <a class="nab-menu__item" data-toggle="nabs" href="{$WEB_ROOT}/#"> <i class="fa fa-credit-card"></i> <span class="nab-menu__label">مالی</span><i class="angle fa fa-angle-left"></i></a>
                              <ul class="nabs-menu">
                                 <li><a class="nabs-item" href="{$WEB_ROOT}/clientarea.php?action=invoices">فاکتور ها</a></li>
                                 <li><a class="nabs-item" href="{$WEB_ROOT}/clientarea.php?action=addfunds">افزایش موجودی</a></li>
                              </ul>
                           </li>

                           <li class="nabs">
                              <a class="nab-menu__item" data-toggle="nabs" href="{$WEB_ROOT}/#"> <i class="fa fa-comments"></i> <span class="nab-menu__label">پشتیبانی</span><i class="angle fa fa-angle-left"></i></a>
                              <ul class="nabs-menu">
                                 <li><a class="nabs-item" href="{$WEB_ROOT}/supporttickets.php">تیکت های شما</a></li>
                                 <li><a class="nabs-item" href="{$WEB_ROOT}/submitticket.php">ارسال تیکت</a></li>
                              </ul>
                           </li>
                           
                           <li class="nabs">
                              <a class="nab-menu__item" data-toggle="nabs" href="{$WEB_ROOT}/#"> <i class="fa fa-life-ring"></i> <span class="nab-menu__label">پایگاه دانش</span><i class="angle fa fa-angle-left"></i></a>
                              <ul class="nabs-menu">
                                 <li><a class="nabs-item" href="{$WEB_ROOT}/downloads.php"> مرکز دانلود</a></li>
                                 <li><a class="nabs-item" href="{$WEB_ROOT}/announcements.php">اخبار و اطلاعیه ها</a></li>
                                 <li><a class="nabs-item" href="{$WEB_ROOT}/knowledgebase.php">مرکز آموزش</a></li>
                              </ul>
                           </li>
                        </ul>