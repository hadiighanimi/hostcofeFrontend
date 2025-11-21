{if $captcha->isEnabled() && $captcha->isEnabledForForm($captchaForm)}
    <div class="text-center{if $containerClass}{$containerClass}{else} row justify-content-center{/if}">
        {if $templatefile == 'homepage'}
            <div class="domainchecker-homepage-captcha">
        {/if}

        {if $captcha->recaptcha->isEnabled() && !$captcha->recaptcha->isInvisible()}
            <div id="google-recaptcha-domainchecker" class="form-group recaptcha-container mx-auto" data-action="{$captchaForm}"></div>
        {elseif !$captcha->recaptcha->isEnabled()}
            <div class="col-md-8 mx-auto mb-3 mb-sm-0">
                <div id="default-captcha-domainchecker" class="{if $filename == 'domainchecker'}input-group input-group-box {/if}text-center row pb-3">
                    <p class="mb-[10px]  text-[#61d4fa]">برای ورود به سایت لطفا کد کپچا را وارد نمایید.</p>

                    <div class="col-6 captchaimage">
                        <img id="inputCaptchaImage" data-src="{$systemurl}includes/verifyimage.php" src="{$systemurl}includes/verifyimage.php" align="middle" />
                    </div>

                    <div class="col-6">
                        <input id="inputCaptcha" type="text" name="code" maxlength="6" class="form-control {if $filename == 'register'}float-left{/if} h-[30px]"
                               data-toggle="tooltip" data-placement="right" data-trigger="manual"/>
                    </div>
                </div>
            </div>
        {/if}

        {if $templatefile == 'homepage'}
            </div>
        {/if}
    </div>
{/if}
