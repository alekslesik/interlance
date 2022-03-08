<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

/**
 * @var $arVisual
 * @var $arData
 */

?>
<?php return function (&$arData) use (&$arVisual) { ?>
    <?php $iCounter = 0 ?>
    <?php foreach ($arData['ADDITIONAL'] as $arAdditional) {

        $iCounter++;

        if ($iCounter > 4)
            break;

    ?>
        <div class="widget-item-additional-item intec-grid-item intec-grid-item-a-stretch">
            <div class="widget-item-additional-item-wrapper">
                <div class="widget-item-additional-item-name">
                    <div class="widget-item-additional-item-name-decoration" data-align="left">
                        <svg width="20" height="54" viewBox="0 0 20 54" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M16.153 4.24726C15.5295 5.29131 14.4466 6.0891 13.135 6.47066C12.9877 6.5389 12.8666 6.64115 12.786 6.76541C12.334 7.69182 11.862 8.67719 11.41 9.6036C11.246 9.97417 11.102 10.3026 10.938 10.7321C11.472 10.1173 11.944 9.60362 12.438 9.0983C13.2057 8.1748 14.3684 7.53786 15.682 7.32129C17.0793 7.1201 18.513 7.19507 19.8701 7.54027C19.9003 7.57603 19.9434 7.60259 19.993 7.61604C19.665 8.07924 19.3571 8.5593 19.0081 8.98882C18.3393 9.83127 17.3889 10.4878 16.277 10.8753C14.6671 11.3416 12.942 11.4518 11.267 11.1954C11.103 11.1532 10.959 11.1364 10.795 11.1027C9.95421 13.2622 9.30903 15.4723 8.86505 17.7139C9.17305 17.2928 9.46005 16.8128 9.74805 16.3833C10.3664 15.3034 11.4339 14.4523 12.748 13.9915C13.7881 13.6759 14.8866 13.519 15.992 13.5283C16.362 13.5283 16.711 13.562 17.142 13.562C16.916 13.9915 16.773 14.3788 16.608 14.7494C16.1642 15.7522 15.3787 16.6224 14.35 17.2508C13.0982 17.9678 11.6492 18.4027 10.1411 18.5141C9.66905 18.5478 9.15502 18.5899 8.66302 18.6236C8.22623 20.8853 7.98594 23.1709 7.94403 25.4622C8.00051 25.369 8.04186 25.2698 8.06702 25.1673C8.23202 24.7378 8.41601 24.2999 8.62201 23.8367C8.85802 23.1963 9.24547 22.6028 9.76105 22.0919C10.2766 21.5809 10.9097 21.1632 11.622 20.8637C12.6281 20.4794 13.6921 20.2131 14.7841 20.0721C14.9781 20.0621 15.1706 20.0366 15.359 19.9962V20.2152C15.297 20.4258 15.259 20.6785 15.195 20.9396C14.9661 22.2773 14.1877 23.5051 12.9951 24.4094C11.6761 25.3543 10.1049 26.016 8.41602 26.338C8.23202 26.3717 8.067 26.3717 7.862 26.4139C7.8203 28.7519 8.02648 31.0884 8.47803 33.3956C8.66303 32.6376 8.80603 31.9133 8.99103 31.189C9.21686 30.1926 9.80544 29.2801 10.675 28.5782C11.7841 27.7827 13.0576 27.166 14.432 26.7591C14.6128 26.7329 14.7912 26.6963 14.966 26.6496C14.925 27.3149 14.904 27.8876 14.822 28.4688C14.7414 29.4867 14.3137 30.4634 13.59 31.2817C12.3684 32.6078 10.7338 33.6224 8.86804 34.2125C8.79313 34.2225 8.72253 34.2487 8.66302 34.2883C9.11769 36.4184 9.77686 38.5139 10.634 40.5542C10.675 40.1752 10.6341 39.83 10.6541 39.4594C10.5893 38.2709 10.9699 37.0954 11.742 36.0991C12.4173 35.3367 13.2442 34.6784 14.186 34.1536C14.6822 33.8667 15.1962 33.6024 15.726 33.3619C15.787 33.5641 15.826 33.7493 15.869 33.8924C16.2611 35.3655 16.0588 36.9066 15.294 38.2719C14.5816 39.3808 13.6113 40.3575 12.441 41.1438C12.0195 41.4296 11.5806 41.6966 11.126 41.9439C11.9471 43.8829 12.9282 45.7712 14.062 47.5949C14.0727 47.5081 14.0727 47.4207 14.062 47.3339C14.001 46.8118 13.9191 46.2728 13.8781 45.7759C13.7727 44.8511 13.9789 43.9199 14.473 43.0892C15.0604 42.1295 15.8541 41.2699 16.814 40.5542C17.163 40.2931 17.514 40.0489 17.881 39.7542C18.3786 40.7802 18.6568 41.8721 18.703 42.9797C18.7298 43.5927 18.6325 44.2051 18.415 44.7905C17.7391 46.3785 16.6276 47.8097 15.171 48.9677C15.007 49.0519 15.027 49.1277 15.11 49.2793C16.073 50.7126 17.1214 52.1041 18.251 53.4482C18.251 53.4482 18.066 53.8188 16.67 53.0187C16.362 52.5808 16.034 52.1681 15.726 51.7048C15.069 50.7953 14.4531 49.8941 13.8571 48.9677C13.8432 48.9195 13.8168 48.8745 13.7799 48.8359C13.743 48.7973 13.6965 48.766 13.6436 48.7443C13.5906 48.7226 13.5327 48.711 13.4738 48.7103C13.415 48.7096 13.3566 48.7198 13.303 48.7403C11.5253 49.107 9.66525 49.0809 7.90302 48.6645C6.64215 48.3272 5.53711 47.6679 4.74103 46.778C4.37203 46.3906 4.04103 45.9022 3.69403 45.5147C3.65303 45.4389 3.653 45.4053 3.612 45.3295C3.64229 45.2938 3.68546 45.2672 3.73505 45.2537C5.14347 44.81 6.64946 44.629 8.14905 44.7231C8.87903 44.7747 9.58932 44.9488 10.2382 45.2352C10.887 45.5216 11.4612 45.9145 11.927 46.3907C12.1532 46.6095 12.4004 46.8123 12.666 46.997C12.6419 46.9213 12.6084 46.8479 12.566 46.778C11.6061 45.0638 10.7761 43.3001 10.0811 41.4975C10.0756 41.4617 10.0616 41.4273 10.0399 41.3963C10.0181 41.3653 9.98912 41.3382 9.95459 41.3169C9.92006 41.2957 9.88075 41.2806 9.83905 41.2725C9.79735 41.2645 9.75413 41.2636 9.71204 41.2701C7.9326 41.3778 6.15028 41.0964 4.53802 40.4532C3.31139 39.9187 2.31876 39.0692 1.70404 38.0276C1.37604 37.5476 1.15002 37.0086 0.822021 36.4359C1.41702 36.4359 1.95105 36.3601 2.48505 36.3601C3.52367 36.3144 4.56408 36.414 5.56403 36.6549C6.87593 37.0403 7.99171 37.7922 8.72601 38.7856C8.91101 38.9962 9.07505 39.2152 9.24005 39.4341C8.74705 37.4381 8.21301 35.4505 7.70001 33.4713C6.87801 33.2861 6.01601 33.1345 5.17401 32.8987C3.87113 32.5322 2.69904 31.895 1.76605 31.0459C0.821767 29.9847 0.213943 28.7383 0 27.4244H0.0410156C1.8178 27.4104 3.56268 27.8223 5.07202 28.612C5.96958 29.1788 6.6655 29.9419 7.08405 30.8185C7.20705 31.0038 7.31 31.189 7.453 31.3911C7.22754 29.4206 7.18642 27.4382 7.33002 25.4622C6.24463 25.1839 5.21392 24.7724 4.27106 24.2409C2.85845 23.5092 1.79647 22.3822 1.27106 21.0574C0.997864 20.2916 0.846164 19.4987 0.820007 18.6993C0.808844 18.5872 0.808844 18.4745 0.820007 18.3624C1.62001 18.6235 2.339 18.792 3.078 19.0109C4.08688 19.359 4.99163 19.8911 5.72705 20.569C6.33705 21.2074 6.77787 21.9482 7.02002 22.7418C7.12869 23.1139 7.26599 23.4796 7.43103 23.8367C7.45103 23.7188 7.45105 23.685 7.47205 23.5756C7.61538 21.6699 7.9033 19.7739 8.33405 17.8992C8.35309 17.8614 8.36285 17.8208 8.36279 17.7797C8.36274 17.7387 8.35288 17.6981 8.33374 17.6604C8.3146 17.6226 8.28658 17.5884 8.2514 17.56C8.21623 17.5316 8.17461 17.5095 8.12903 17.495C6.44351 16.7754 5.0342 15.6688 4.06403 14.3031C3.40753 13.3315 3.10727 12.2179 3.20105 11.1027C3.22205 10.6564 3.28301 10.269 3.32501 9.74681C3.96101 10.0416 4.53601 10.2689 5.07001 10.5469C6.24288 11.0952 7.21004 11.9092 7.862 12.8966C8.3145 13.7191 8.56584 14.6098 8.60101 15.5158C8.602 15.7958 8.63553 16.0751 8.70105 16.3496C8.71869 16.2715 8.74615 16.1953 8.78302 16.1222C9.29203 14.1912 9.95727 12.2919 10.774 10.4374C10.8016 10.4058 10.8203 10.3694 10.829 10.3309C10.8377 10.2924 10.8362 10.2527 10.8244 10.2148C10.8126 10.1769 10.7909 10.1416 10.7609 10.1117C10.7309 10.0817 10.6934 10.0578 10.651 10.0416C9.22784 9.13619 8.10408 7.93864 7.38702 6.56329C6.8337 5.47367 6.71134 4.26304 7.03802 3.11032C7.12002 2.68922 7.26402 2.27656 7.38702 1.85546L7.40704 1.8386C8.33402 2.32515 9.16531 2.93037 9.87103 3.63248C10.435 4.13679 10.8656 4.73607 11.1345 5.39078C11.4034 6.04549 11.5045 6.74077 11.431 7.43078C11.411 7.98663 11.349 8.55931 11.288 9.20779C11.3395 9.15421 11.3739 9.09046 11.388 9.02254C11.84 8.18876 12.271 7.35498 12.723 6.48752C12.7672 6.37937 12.7812 6.26408 12.764 6.15063C12.7098 5.38833 12.7787 4.6234 12.9691 3.87675C13.1169 3.2992 13.4253 2.75945 13.869 2.30185C14.7561 1.55452 15.7823 0.934303 16.907 0.46582C16.969 0.46582 17.007 0.499541 17.072 0.499541C17.051 0.777465 16.9901 1.03852 16.9901 1.31644C16.9439 2.33039 16.6594 3.32654 16.153 4.24726Z"></path>
                        </svg>
                    </div>
                    <div class="widget-item-additional-item-name-content">
                        <?= $arAdditional['NAME'] ?>
                    </div>
                    <div class="widget-item-additional-item-name-decoration" data-align="right">
                        <svg width="20" height="54" viewBox="0 0 20 54" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.84003 4.24726C4.46354 5.29131 5.54643 6.0891 6.85803 6.47066C7.00535 6.5389 7.12643 6.64115 7.20703 6.76541C7.65903 7.69182 8.13101 8.67719 8.58301 9.6036C8.74701 9.97417 8.89099 10.3026 9.05499 10.7321C8.52099 10.1173 8.04899 9.60362 7.55499 9.0983C6.78737 8.1748 5.62463 7.53786 4.31104 7.32129C2.91374 7.1201 1.48001 7.19507 0.122986 7.54027C0.0927486 7.57603 0.0496235 7.60259 0 7.61604C0.327999 8.07924 0.635984 8.5593 0.984985 8.98882C1.65378 9.83127 2.60419 10.4878 3.716 10.8753C5.3259 11.3416 7.05103 11.4518 8.72601 11.1954C8.89001 11.1532 9.034 11.1364 9.198 11.1027C10.0388 13.2622 10.684 15.4723 11.128 17.7139C10.82 17.2928 10.533 16.8128 10.245 16.3833C9.62668 15.3034 8.55914 14.4523 7.245 13.9915C6.20495 13.6759 5.10647 13.519 4.00104 13.5283C3.63104 13.5283 3.28201 13.562 2.85101 13.562C3.07701 13.9915 3.22001 14.3788 3.38501 14.7494C3.82882 15.7522 4.61432 16.6224 5.64301 17.2508C6.89481 17.9678 8.34388 18.4027 9.85199 18.5141C10.324 18.5478 10.838 18.5899 11.33 18.6236C11.7668 20.8853 12.0071 23.1709 12.049 25.4622C11.9925 25.369 11.9512 25.2698 11.926 25.1673C11.761 24.7378 11.577 24.2999 11.371 23.8367C11.135 23.1963 10.7476 22.6028 10.232 22.0919C9.71642 21.5809 9.08338 21.1632 8.37103 20.8637C7.36491 20.4794 6.30097 20.2131 5.20898 20.0721C5.01492 20.0621 4.82245 20.0366 4.63403 19.9962V20.2152C4.69603 20.4258 4.73403 20.6785 4.79803 20.9396C5.02697 22.2773 5.80539 23.5051 6.99799 24.4094C8.31699 25.3543 9.88815 26.016 11.577 26.338C11.761 26.3717 11.926 26.3717 12.131 26.4139C12.1727 28.7519 11.9666 31.0884 11.515 33.3956C11.33 32.6376 11.187 31.9133 11.002 31.189C10.7762 30.1926 10.1876 29.2801 9.31799 28.5782C8.20896 27.7827 6.93541 27.166 5.56104 26.7591C5.38028 26.7329 5.20187 26.6963 5.02704 26.6496C5.06804 27.3149 5.08902 27.8876 5.17102 28.4688C5.2516 29.4867 5.67939 30.4634 6.40302 31.2817C7.62465 32.6078 9.25929 33.6224 11.125 34.2125C11.1999 34.2225 11.2705 34.2487 11.33 34.2883C10.8754 36.4184 10.2162 38.5139 9.35901 40.5542C9.31801 40.1752 9.35899 39.83 9.33899 39.4594C9.40375 38.2709 9.02318 37.0954 8.25104 36.0991C7.57575 35.3367 6.74885 34.6784 5.80701 34.1536C5.31086 33.8667 4.79681 33.6024 4.26703 33.3619C4.20603 33.5641 4.16702 33.7493 4.12402 33.8924C3.73193 35.3655 3.93428 36.9066 4.69904 38.2719C5.41147 39.3808 6.38172 40.3575 7.552 41.1438C7.97351 41.4296 8.41245 41.6966 8.867 41.9439C8.04591 43.8829 7.06488 45.7712 5.93103 47.5949C5.92037 47.5081 5.92037 47.4207 5.93103 47.3339C5.99203 46.8118 6.07399 46.2728 6.11499 45.7759C6.22029 44.8511 6.01411 43.9199 5.52002 43.0892C4.93268 42.1295 4.1389 41.2699 3.17902 40.5542C2.83002 40.2931 2.479 40.0489 2.112 39.7542C1.61445 40.7802 1.33621 41.8721 1.29004 42.9797C1.2632 43.5927 1.36056 44.2051 1.578 44.7905C2.25395 46.3785 3.36543 47.8097 4.82202 48.9677C4.98602 49.0519 4.966 49.1277 4.883 49.2793C3.92001 50.7126 2.87168 52.1041 1.742 53.4482C1.742 53.4482 1.927 53.8188 3.323 53.0187C3.631 52.5808 3.95903 52.1681 4.26703 51.7048C4.92403 50.7953 5.53999 49.8941 6.13599 48.9677C6.14986 48.9195 6.17623 48.8745 6.21313 48.8359C6.25004 48.7973 6.29657 48.766 6.34949 48.7443C6.4024 48.7226 6.46037 48.711 6.51923 48.7103C6.57808 48.7096 6.6364 48.7198 6.69 48.7403C8.46773 49.107 10.3278 49.0809 12.09 48.6645C13.3509 48.3272 14.4559 47.6679 15.252 46.778C15.621 46.3906 15.952 45.9022 16.299 45.5147C16.34 45.4389 16.34 45.4053 16.381 45.3295C16.3508 45.2938 16.3076 45.2672 16.258 45.2537C14.8496 44.81 13.3436 44.629 11.844 44.7231C11.114 44.7747 10.4037 44.9488 9.75488 45.2352C9.10604 45.5216 8.53182 45.9145 8.06604 46.3907C7.83986 46.6095 7.59268 46.8123 7.32703 46.997C7.35119 46.9213 7.38468 46.8479 7.427 46.778C8.38693 45.0638 9.21691 43.3001 9.91199 41.4975C9.91741 41.4617 9.93145 41.4273 9.95319 41.3963C9.97493 41.3653 10.0039 41.3382 10.0385 41.3169C10.073 41.2957 10.1123 41.2806 10.154 41.2725C10.1957 41.2645 10.2389 41.2636 10.281 41.2701C12.0604 41.3778 13.8428 41.0964 15.455 40.4532C16.6817 39.9187 17.6743 39.0692 18.289 38.0276C18.617 37.5476 18.843 37.0086 19.171 36.4359C18.576 36.4359 18.042 36.3601 17.508 36.3601C16.4694 36.3144 15.429 36.414 14.429 36.6549C13.1171 37.0403 12.0013 37.7922 11.267 38.7856C11.082 38.9962 10.918 39.2152 10.753 39.4341C11.246 37.4381 11.78 35.4505 12.293 33.4713C13.115 33.2861 13.977 33.1345 14.819 32.8987C16.1219 32.5322 17.294 31.895 18.227 31.0459C19.1713 29.9847 19.7791 28.7383 19.993 27.4244H19.952C18.1752 27.4104 16.4304 27.8223 14.921 28.612C14.0235 29.1788 13.3275 29.9419 12.909 30.8185C12.786 31.0038 12.683 31.189 12.54 31.3911C12.7655 29.4206 12.8066 27.4382 12.663 25.4622C13.7484 25.1839 14.7791 24.7724 15.722 24.2409C17.1346 23.5092 18.1966 22.3822 18.722 21.0574C18.9952 20.2916 19.1469 19.4987 19.173 18.6993C19.1842 18.5872 19.1842 18.4745 19.173 18.3624C18.373 18.6235 17.654 18.792 16.915 19.0109C15.9062 19.359 15.0014 19.8911 14.266 20.569C13.656 21.2074 13.2152 21.9482 12.973 22.7418C12.8644 23.1139 12.7271 23.4796 12.562 23.8367C12.542 23.7188 12.542 23.685 12.521 23.5756C12.3777 21.6699 12.0897 19.7739 11.659 17.8992C11.6399 17.8614 11.6302 17.8208 11.6302 17.7797C11.6303 17.7387 11.6402 17.6981 11.6593 17.6604C11.6784 17.6226 11.7065 17.5884 11.7416 17.56C11.7768 17.5316 11.8184 17.5095 11.864 17.495C13.5495 16.7754 14.9588 15.6688 15.929 14.3031C16.5855 13.3315 16.8858 12.2179 16.792 11.1027C16.771 10.6564 16.71 10.269 16.668 9.74681C16.032 10.0416 15.457 10.2689 14.923 10.5469C13.7502 11.0952 12.783 11.9092 12.131 12.8966C11.6785 13.7191 11.4272 14.6098 11.392 15.5158C11.391 15.7958 11.3575 16.0751 11.292 16.3496C11.2744 16.2715 11.2469 16.1953 11.21 16.1222C10.701 14.1912 10.0358 12.2919 9.21899 10.4374C9.19148 10.4058 9.17271 10.3694 9.164 10.3309C9.15529 10.2924 9.15686 10.2527 9.16864 10.2148C9.18042 10.1769 9.20213 10.1416 9.23212 10.1117C9.2621 10.0817 9.29967 10.0578 9.34204 10.0416C10.7652 9.13619 11.889 7.93864 12.606 6.56329C13.1593 5.47367 13.2817 4.26304 12.955 3.11032C12.873 2.68922 12.729 2.27656 12.606 1.85546L12.586 1.8386C11.659 2.32515 10.8277 2.93037 10.122 3.63248C9.55803 4.13679 9.12742 4.73607 8.85852 5.39078C8.58962 6.04549 8.48856 6.74077 8.56201 7.43078C8.58201 7.98663 8.64402 8.55931 8.70502 9.20779C8.65351 9.15421 8.61911 9.09046 8.60504 9.02254C8.15304 8.18876 7.72202 7.35498 7.27002 6.48752C7.22584 6.37937 7.2118 6.26408 7.229 6.15063C7.28329 5.38833 7.21431 4.6234 7.02399 3.87675C6.87617 3.2992 6.56776 2.75945 6.12402 2.30185C5.23692 1.55452 4.21069 0.934303 3.086 0.46582C3.024 0.46582 2.98602 0.499541 2.92102 0.499541C2.94202 0.777465 3.00299 1.03852 3.00299 1.31644C3.04913 2.33039 3.33365 3.32654 3.84003 4.24726Z"></path>
                        </svg>
                    </div>
                </div>
                <div class="widget-item-additional-item-description">
                    <?= $arAdditional['DESCRIPTION'] ?>
                </div>
            </div>
        </div>
    <?php } ?>
<?php } ?>