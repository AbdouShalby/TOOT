<div class="floating-buttons-section">
    <div class="position-relative">
        <a class="floating-buttons-section-control d-lg-none" onclick="showFloatingButtons()">
            <i class="las la-2x la-angle-double-right"></i>
        </a>
    </div>
    <!-- All Categories -->
    <div class="aiz-floating-button">
        <a href="{{ route('categories.all') }}">
            <span class="circle">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14">
                        <g id="Group_29240" data-name="Group 29240" transform="translate(-18 -18)">
                          <rect id="Rectangle_21398" data-name="Rectangle 21398" width="15" height="2" transform="translate(18 24)" fill="#fff"/>
                          <rect id="Rectangle_21399" data-name="Rectangle 21399" width="15" height="2" transform="translate(18 18)" fill="#fff"/>
                          <rect id="Rectangle_21400" data-name="Rectangle 21400" width="15" height="2" transform="translate(18 30)" fill="#fff"/>
                        </g>
                    </svg>
                </span>
            </span>
            <span class="text">
                <span class="w-120px mr-3">{{ translate('All Categories') }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7.073" height="12" viewBox="0 0 7.073 12">
                    <path id="Path_41557" data-name="Path 41557" d="M12.913,3.173,11.834,2.1,5.84,8.1l6,6,1.073-1.073L7.985,8.1Z" transform="translate(12.913 14.1) rotate(180)" fill="#fff"/>
                </svg>
            </span>
        </a>
    </div>
    <!-- Flash Sale -->
    <div class="aiz-floating-button">
        <a href="{{ route('flash-deals') }}">
            <span class="circle">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="13.333" height="20" viewBox="0 0 13.333 20">
                        <path id="Path_41551" data-name="Path 41551" d="M28.294,12.246a.4.4,0,0,0-.353-.209H23.855l3.264-6.508a.352.352,0,0,0-.023-.357A.4.4,0,0,0,26.765,5H20.49a.394.394,0,0,0-.358.219l-5.1,10.741a.353.353,0,0,0,.029.353.4.4,0,0,0,.329.169h3.827l-1.857,8.069a.365.365,0,0,0,.216.414.407.407,0,0,0,.476-.106l10.2-12.222a.354.354,0,0,0,.045-.391Z" transform="translate(-15 -5)" fill="#fff"/>
                      </svg>
                </span>
            </span>
            <span class="text">
                <span class="w-120px mr-3">{{ translate('Flash Sale') }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7.073" height="12" viewBox="0 0 7.073 12">
                    <path id="Path_41557" data-name="Path 41557" d="M12.913,3.173,11.834,2.1,5.84,8.1l6,6,1.073-1.073L7.985,8.1Z" transform="translate(12.913 14.1) rotate(180)" fill="#fff"/>
                </svg>
            </span>
        </a>
    </div>
    <!-- Today's Deal -->
    <div class="aiz-floating-button">
        <a href="{{ route('todays-deal') }}">
            <span class="circle">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                        <g id="a47ac3ccd1557f7fbdb769f1c535b2b9" transform="translate(0 0)">
                          <path id="Path_41552" data-name="Path 41552" d="M10,0A10,10,0,1,0,20,10,10,10,0,0,0,10,0Zm0,18.333A8.333,8.333,0,1,1,18.333,10,8.333,8.333,0,0,1,10,18.333Z" fill="#fff"/>
                          <path id="Path_41553" data-name="Path 41553" d="M17.515,14.143,13,11.434V6a1,1,0,0,0-2,0v6a1.075,1.075,0,0,0,.485.857l5,3a1,1,0,1,0,1.03-1.714Z" transform="translate(-2.588 -1.538)" fill="#fff"/>
                        </g>
                    </svg>
                </span>
            </span>
            <span class="text">
                <span class="w-120px mr-3">{{ translate("Today's Deal") }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7.073" height="12" viewBox="0 0 7.073 12">
                    <path id="Path_41557" data-name="Path 41557" d="M12.913,3.173,11.834,2.1,5.84,8.1l6,6,1.073-1.073L7.985,8.1Z" transform="translate(12.913 14.1) rotate(180)" fill="#fff"/>
                </svg>
            </span>
        </a>
    </div>
    @if(addon_is_activated('auction'))
    <!-- Auction -->
    <div class="aiz-floating-button">
        <a href="{{ route('auction_products.all') }}">
            <span class="circle">
                <span class="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.627" height="20" viewBox="0 0 19.627 20">
                        <g id="cb3bc0b728579e634f654dfaf5995832" transform="translate(-8 -7.122)">
                          <rect id="Rectangle_21402" data-name="Rectangle 21402" width="2.455" height="5.729" rx="1.228" transform="translate(10.102 16.386) rotate(-45)" fill="#fff"/>
                          <rect id="Rectangle_21403" data-name="Rectangle 21403" width="2.455" height="5.729" rx="1.228" transform="translate(17.623 8.858) rotate(-45)" fill="#fff"/>
                          <rect id="Rectangle_21404" data-name="Rectangle 21404" width="4.91" height="6.547" rx="2" transform="translate(12.702 13.203) rotate(-45)" fill="#fff"/>
                          <rect id="Rectangle_21405" data-name="Rectangle 21405" width="1.637" height="4.092" transform="translate(12.414 15.225) rotate(-45)" fill="#fff"/>
                          <rect id="Rectangle_21406" data-name="Rectangle 21406" width="1.637" height="4.092" transform="translate(17.043 10.599) rotate(-45)" fill="#fff"/>
                          <path id="Path_41554" data-name="Path 41554" d="M21.721,14.563l.577.577L21.14,16.3l-.577-.577a.819.819,0,1,1,1.158-1.158Z" transform="translate(-7.281 -4.255)" fill="#fff"/>
                          <rect id="Rectangle_21407" data-name="Rectangle 21407" width="1.637" height="4.501" transform="translate(18.489 16.673) rotate(-45)" fill="#fff"/>
                          <path id="Path_41555" data-name="Path 41555" d="M41.235,36.393l1.158-1.158a.409.409,0,0,1,.581,0L46.833,39.1a1.228,1.228,0,0,1,0,1.735h0a1.228,1.228,0,0,1-1.735,0l-3.863-3.859a.409.409,0,0,1,0-.581Z" transform="translate(-19.564 -16.538)" fill="#fff"/>
                          <rect id="Rectangle_21408" data-name="Rectangle 21408" width="12.276" height="1.637" transform="translate(8 25.485)" fill="#fff"/>
                          <path id="Path_41556" data-name="Path 41556" d="M11.637,48H19a1.637,1.637,0,0,1,1.637,1.637H10A1.637,1.637,0,0,1,11.637,48Z" transform="translate(-1.182 -24.151)" fill="#fff"/>
                        </g>
                    </svg>
                </span>
            </span>
            <span class="text">
                <span class="w-120px mr-3">{{ translate('Auction') }}</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="7.073" height="12" viewBox="0 0 7.073 12">
                    <path id="Path_41557" data-name="Path 41557" d="M12.913,3.173,11.834,2.1,5.84,8.1l6,6,1.073-1.073L7.985,8.1Z" transform="translate(12.913 14.1) rotate(180)" fill="#fff"/>
                </svg>
            </span>
        </a>
    </div>
    @endif
    
    <!-- WhatsApp Floating Button -->
    <div class="aiz-floating-button">
        <a href="https://wa.me/+966508969098" target="_blank" rel="noopener noreferrer">
        <span class="circle">
            <span class="">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 32 32">
                    <path d="M16.002 0.438c-8.67 0-15.732 7.064-15.732 15.73 0 2.775 0.71 5.483 2.054 7.89l-2.246 8.212 8.424-2.207c2.287 1.2 4.865 1.838 7.5 1.838 8.67 0 15.73-7.064 15.73-15.732 0-8.67-7.06-15.73-15.73-15.73zM16 28.99c-2.396 0-4.747-0.66-6.782-1.91l-0.484-0.293-5.046 1.318 1.33-4.866-0.313-0.499c-1.256-2.006-1.92-4.33-1.92-6.662 0-7.046 5.728-12.772 12.775-12.772 7.048 0 12.773 5.726 12.773 12.772 0 7.046-5.724 12.774-12.772 12.774zM23.562 20.91c-0.408-0.204-2.415-1.196-2.79-1.33-0.374-0.127-0.646-0.191-0.918 0.214-0.272 0.408-1.051 1.33-1.29 1.605-0.238 0.272-0.477 0.305-0.884 0.1-0.408-0.204-1.719-0.634-3.273-2.022-1.208-1.085-2.022-2.427-2.262-2.835-0.238-0.408-0.025-0.63 0.18-0.835 0.185-0.184 0.408-0.478 0.612-0.716 0.204-0.238 0.272-0.408 0.408-0.681 0.127-0.272 0.064-0.51-0.034-0.715-0.1-0.204-0.918-2.183-1.256-2.992-0.334-0.809-0.676-0.707-0.918-0.717l-0.765-0.016c-0.254 0-0.667 0.1-1.015 0.478s-1.333 1.303-1.333 3.174c0 1.87 1.363 3.674 1.553 3.93 0.19 0.255 2.679 4.1 6.496 5.758 0.91 0.393 1.616 0.626 2.167 0.802 0.91 0.285 1.739 0.244 2.39 0.148 0.73-0.109 2.415-0.987 2.758-1.938 0.34-0.95 0.34-1.762 0.238-1.938-0.098-0.177-0.374-0.285-0.782-0.478z" fill="#fff"/>
                </svg>
            </span>
        </span>
            <span class="text">
            <span class="w-120px mr-3">{{ translate("WhatsApp") }}</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="7.073" height="12" viewBox="0 0 7.073 12">
                <path id="Path_41557" data-name="Path 41557" d="M12.913,3.173,11.834,2.1,5.84,8.1l6,6,1.073-1.073L7.985,8.1Z" transform="translate(12.913 14.1) rotate(180)" fill="#fff"/>
            </svg>
        </span>
        </a>
    </div>
</div>

