

<style>
    .n-card.n-modal {
    background: var(--n-color-modal);
}

.n-card {
    font-size: var(--n-font-size);
    line-height: var(--n-line-height);
    display: flex;
    flex-direction: column;
    width: 100%;
    box-sizing: border-box;
    position: relative;
    border-radius: var(--n-border-radius);
    background-color: var(--n-color);
    color: var(--n-text-color);
    word-break: break-word;
    transition: color .3s var(--n-bezier), background-color .3s var(--n-bezier), box-shadow .3s var(--n-bezier), border-color .3s var(--n-bezier);
}

.n-modal {
    position: relative;
    align-self: center;
    color: var(--n-text-color);
    margin: auto;
    box-shadow: var(--n-box-shadow);
}.n-card > .n-card-header {
    box-sizing: border-box;
    display: flex;
    align-items: center;
    font-size: var(--n-title-font-size);
    padding: var(--n-padding-top) var(--n-padding-left) var(--n-padding-bottom) var(--n-padding-left);
}

.n-card > .n-card-header .n-card-header__main {
    font-weight: var(--n-title-font-weight);
    transition: color .3s var(--n-bezier);
    flex: 1;
    min-width: 0;
    color: var(--n-title-text-color);
}.n-card > .n-card-header .n-card-header__close {
    margin: 0 0 0 8px;
    transition: background-color .3s var(--n-bezier), color .3s var(--n-bezier);
}

.n-base-close.n-base-close--absolute {
    height: var(--n-close-icon-size);
    width: var(--n-close-icon-size);
}

.n-base-close {
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    background-color: transparent;
    color: var(--n-close-icon-color);
    border-radius: var(--n-close-border-radius);
    height: var(--n-close-size);
    width: var(--n-close-size);
    font-size: var(--n-close-icon-size);
    outline: none;
    border: none;
    position: relative;
    padding: 0;
}.n-card > .n-card__content, .n-card > .n-card__footer {
    box-sizing: border-box;
    padding: 0 var(--n-padding-left) var(--n-padding-bottom) var(--n-padding-left);
    font-size: var(--n-font-size);
}

.n-card > .n-card__content {
    flex: 1;
    min-width: 0;
}.font-bold {
    font-weight: 700;
}
.text-xl {
    font-size: 1.25rem;
    line-height: 1.75rem;
}.space-y-4>:not([hidden])~:not([hidden]) {
    --tw-space-y-reverse: 0;
    margin-top: calc(1rem * calc(1 - var(--tw-space-y-reverse)));
    margin-bottom: calc(1rem * var(--tw-space-y-reverse));
}
.p-4 {
    padding: 1rem;
}

</style>

<style cssr-id="n-base-icon">.n-base-icon {

 height: 1em;
 width: 1em;
 line-height: 1em;
 text-align: center;
 display: inline-block;
 position: relative;
 fill: currentColor;
 transform: translateZ(0);

}

.n-base-icon svg {

 height: 1em;
 width: 1em;
 
}

.n-modal-mask {
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    background-color: rgba(0, 0, 0, .8);
}


</style>

<div style="display:none;" aria-hidden="true" class="n-modal-mask xiaoshi"></div>

<div  class="n-card n-modal xiaoshi" role="dialog" aria-modal="true" style="
display:none;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

--n-bezier:cubic-bezier(0.4, 0, 0.2, 1); --n-border-radius:3px; --n-color:#fff; --n-color-modal:#fff; --n-color-popover:#fff; --n-color-embedded:rgb(250, 250, 252); --n-color-embedded-modal:rgb(250, 250, 252); --n-color-embedded-popover:rgb(250, 250, 252); --n-color-target:#18a058; --n-text-color:rgb(51, 54, 57); --n-line-height:1.6; --n-action-color:rgb(250, 250, 252); --n-title-text-color:rgb(31, 34, 37); --n-title-font-weight:500; --n-close-icon-color:rgba(102, 102, 102, 1); --n-close-icon-color-hover:rgba(102, 102, 102, 1); --n-close-icon-color-pressed:rgba(102, 102, 102, 1); --n-close-color-hover:rgba(0, 0, 0, 0.09); --n-close-color-pressed:rgba(0, 0, 0, 0.13); --n-border-color:rgb(239, 239, 245); --n-box-shadow:0 1px 2px -2px rgba(0, 0, 0, 0.08), 0 3px 6px 0 rgba(0, 0, 0, 0.06), 0 5px 12px 4px rgba(0, 0, 0, 0.04); --n-padding-top:19px; --n-padding-bottom:20px; --n-padding-left:24px; --n-font-size:14px; --n-title-font-size:18px; --n-close-size:22px; --n-close-icon-size:18px; --n-close-border-radius:3px; width: 60%; max-width: 300px; height: 400px; border-radius: 12px; box-shadow: rgba(0, 0, 0, 0.2) -8px 2px 10px 0px; background-color: rgb(30, 33, 38); transform-origin: -257px 314px;"><!----><div class="n-card-header"><div class="n-card-header__main" role="heading"></div><!---->



<button type="button" tabindex="0" aria-label="close" class="n-base-close n-base-close--absolute n-card-header__close kffgbann"><i class="n-base-icon"><svg viewBox="0 0 12 12" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
    
    
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g fill="currentColor" fill-rule="nonzero"><path d="M2.08859116,2.2156945 L2.14644661,2.14644661 C2.32001296,1.97288026 2.58943736,1.95359511 2.7843055,2.08859116 L2.85355339,2.14644661 L6,5.293 L9.14644661,2.14644661 C9.34170876,1.95118446 9.65829124,1.95118446 9.85355339,2.14644661 C10.0488155,2.34170876 10.0488155,2.65829124 9.85355339,2.85355339 L6.707,6 L9.85355339,9.14644661 C10.0271197,9.32001296 10.0464049,9.58943736 9.91140884,9.7843055 L9.85355339,9.85355339 C9.67998704,10.0271197 9.41056264,10.0464049 9.2156945,9.91140884 L9.14644661,9.85355339 L6,6.707 L2.85355339,9.85355339 C2.65829124,10.0488155 2.34170876,10.0488155 2.14644661,9.85355339 C1.95118446,9.65829124 1.95118446,9.34170876 2.14644661,9.14644661 L5.293,6 L2.14644661,2.85355339 C1.97288026,2.67998704 1.95359511,2.41056264 2.08859116,2.2156945 L2.14644661,2.14644661 L2.08859116,2.2156945 Z"></path></g></g></svg></i></button></div><div class="n-card__content" role="none">
    
    
    <div  class="space-y-4" style=""><h2  class="text-xl font-bold" style="text-align: center; margin-bottom: 10px; font-size: 16px; color: rgb(0, 204, 76);"> 微信扫码，联系客服 </h2>

<div  class="p-4 space-y-4" style="margin: 30px auto 0px; background: rgb(255, 255, 255); border-radius: 8px; width: 220px;
    height: 220px;">
    
    
    <?php
    
    $sql = "select kflj from chat_admin where id = 1";
$kflj = $mysql->getOne($sql);
    
    ?>
    
    <img style="     max-width: 100%;
    height: auto;  "  src="<?php echo $kflj;?>" width="200" height="200">
    

    </div></div></div>
    
    </div>
    
    <script>
        
        $('.kffgbann').click(function(){
            
            $('.xiaoshi').css('display','none');
            
            
            
        });
        
    </script>
    
