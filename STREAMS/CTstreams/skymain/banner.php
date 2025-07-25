<?php

?>

<div id="popupBanner" class="promo-popup">
    <div class="popup-content">
        <button id="closeBanner" class="close-btn" style="display: none;">&times;</button>
        <a href="https://t.me/+A2v0Cr_zHutjYWU1" target="_blank">
            <img src="https://Radarxtv.site/banner.jpg" alt="Promo Banner">
        </a>
    </div>
</div>

<style>
    .promo-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.9);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 1000;
    }
    .popup-content {
        position: relative;
        max-width: 90%;
        width: 500px;
        text-align: center;
    }
    .popup-content img {
        width: 100%;
        border-radius: 15px;
        box-shadow: 0px 5px 20px rgba(255, 255, 255, 0.3);
    }
    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: red;
        color: white;
        font-size: 16px;
        border: none;
        padding: 5px 10px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 10;
        display: none;
    }
    .close-btn:hover {
        background: darkred;
    }
</style>