	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
<form method="post" action="{routePath('login-validate')}" class="login100-form validate-form" role="form">
    <div class="mw-540 mb-md-4 mt-md-4">
            <div class="logos">
                    {if $assetLogoPath}
                        <img src="{$assetLogoPath}" alt="{$companyname}" class="logo-img">
                    {else}
                        <h2 class="loginTitle select-none">{"Host Cofe"}</h2>
                    {/if}
            </div>
            <div class="mb-[50px]">
                <h6 class="h4 login-title text-right text-[#61d4fa]">اطلاعات کاربری</h6>
                <p class="text-muted mb-0  text-right !text-[#61d4fa]">لطفا نام کاربری (ایمیل) و رمز عبور خود را وارد کنید.<br>
                در صورتی که هنوز در سایت ثبت نام نکردید، می توانید با عضویت در سایت به جمع ما بپیوندید.</p>
            </div>
            {include file="$template/includes/flashmessage.tpl"}
            <div class="form-group">
                <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="email" class="form-control" name="username" id="inputEmail" placeholder="ایمیل..." autofocus>
                </div>
            </div>
            <div class="form-group mb-4 focused">
                <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" class="form-control pw-input" name="password" id="inputPassword" placeholder="پسورد..." autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-default btn-reveal-pw" type="button" tabindex="-1">
                            <i class="fas fa-eye"></i>
                        </button>
                    </div>
                </div>
                <div class="mb-2">
                    <br><a href="{routePath('password-reset-begin')}" class="small text-muted !text-[#61d4fa]" tabindex="-1">رمز عبور خود را فراموش کرده اید؟</a>
                </div>
            </div>
            {if $captcha->isEnabled()}
                {include file="$template/includes/captcha.tpl"}
            {/if}
            <div class="flex flex-row-reverse justify-between items-center mt-[15px]">
                <div class="h-full">
                    <a href="{$WEB_ROOT}/register.php" class="btn btn-large bg-[#61d4fa] hover:bg-[#ff8e53] hover:text-white">عضویت در سایت</a>
                    <button id="login" type="submit" class="btn bg-[#61d4fa] hover:bg-[#ff8e53] hover:text-white">
                        ورود
                    </button>
                </div>
                <div class="text-[#61d4fa] h-100 items-center">
                    <label class="flex flex-row-reverse gap-[8px]">
                        <input type="checkbox" name="rememberme" /> 
                        مرا به خاطر بسپار
                    </label>
                </div>
            </div>
        </div>

</form>

{include file="$template/includes/linkedaccounts.tpl" linkContext="login" customFeedback=true}
				<div class="login100-more" style="background-image: url('/templates/Shetab/whmcsco/img/two.gif');">
				</div>
			</div>
		</div>
	</div>