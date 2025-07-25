
<!doctype html>
<html>
<head>
<title>[LiveStream] - MaFiA | Live Sports Online Free TV Channels</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" />
<link rel="icon" href="https://mafiatv.live/wp-content/uploads/2025/01/logo-1.png"/>
<link rel="shortcut icon" href="https://mafiatv.live/wp-content/uploads/2025/01/logo-1.png"/>
<link rel="stylesheet" href="files/jwplayer.css"/>
 <style>
            body {
                font-family: "Montserrat",sans-serif;
                background-color: #000
            }

            #serverList {
                font-size: 20px !important;
            }

            #vplayer {
                position: absolute;
                width: 100% !important;
                height: 100% !important;
            }

            .top-right-button {
                position: absolute;
                top: 10px;
                left: 10px;
                padding: 10px 20px;
                background-color: rgba(24, 25, 25, 0.3);
                color: #ffffff;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                font-size: 16px;
                z-index: 9999
            }

            .custom-modal {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgb(0 0 0 / .5);
                display: none;
                justify-content: center;
                align-items: center;
                z-index: 9999;
                justify-content: center;
                align-items: center
            }

            .custom-modal-content {
                background-color: rgba(25,25,25,0);
                padding: 15px;
                border-radius: 8px;
                width: 162px;
                max-width: 70%;
                box-shadow: 0 4px 8px rgb(0 0 0 / .2);
                z-index: 10000
            }

            .custom-modal-header {
                font-size: 20px;
                font-weight: 700;
                margin-bottom: 15px;
                text-align: center
            }

            .server-list {
                list-style: none;
                padding: 0;
                margin: 0
            }

            .server-list li {
                color: #FFF;
                padding-left: 25px;
                padding-top: 10px;
                padding-bottom: 10px;
                border: 1px solid #ddd;
                border-radius: 22px;
                margin-bottom: 5px;
                cursor: pointer;
                transition: background-color 0.3s
            }

            .server-list li:hover {
                background-color: #f0f0f0;
                color: #525252
            }

            .close-modal {
                text-align: right;
                cursor: pointer;
                color: #333;
                font-size: 18px
            }

            .close-modal:hover {
                color: red
            }

            .toast-container {
                position: fixed;
                top: 0;
                left: 50%;
                transform: translateX(-50%);
                z-index: 9999;
                display: none;
                padding: 10px 20px;
                background-color: #333;
                color: #fff;
                font-size: 16px;
                border-radius: 5px;
                box-shadow: 0 4px 6px rgb(0 0 0 / .2);
                animation: slideDown 0.3s ease,fadeOut 0.5s ease 2.5s
            }

            @keyframes slideDown {
                from {
                    top: -50px;
                    opacity: 0
                }

                to {
                    top: 0;
                    opacity: 1
                }
            }

            @keyframes fadeOut {
                from {
                    opacity: 1
                }

                to {
                    opacity: 0
                }
            }

            #closeModal {
                font-size: 28px;
                color: #fff;
                font-weight: 700;
                margin-bottom: 10px
            }
        </style>
</head>
<body>

<button class="top-right-button" id="openModal">Servers</button>

<div class="custom-modal" id="modal">
    <div class="custom-modal-content">
        <div class="close-modal" id="closeModal">&times;</div>
        <ul class="server-list" id="serverList"></ul>
    </div>
</div>

<div class="toast-container" id="toast"></div>

<div id="vplayer"></div>

<script src="https://content.jwplatform.com/libraries/KB5zFt7A.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
var _0xc42e=["","split","0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ+/","slice","indexOf","","",".","pow","reduce","reverse","0"];function _0xe42c(d,e,f){var g=_0xc42e[2][_0xc42e[1]](_0xc42e[0]);var h=g[_0xc42e[3]](0,e);var i=g[_0xc42e[3]](0,f);var j=d[_0xc42e[1]](_0xc42e[0])[_0xc42e[10]]()[_0xc42e[9]](function(a,b,c){if(h[_0xc42e[4]](b)!==-1)return a+=h[_0xc42e[4]](b)*(Math[_0xc42e[8]](e,c))},0);var k=_0xc42e[0];while(j>0){k=i[j%f]+k;j=(j-(j%f))/f}return k||_0xc42e[11]}eval(function(h,u,n,t,e,r){r="";for(var i=0,len=h.length;i<len;i++){var s="";while(h[i]!==n[e]){s+=h[i];i++}for(var j=0;j<n.length;j++)s=s.replace(new RegExp(n[j],"g"),j);r+=String.fromCharCode(_0xe42c(s,e,10)-t)}return decodeURIComponent(escape(r))}("ySSySBySySyBSiiyyByiiiyBSiiiiBySSySBySyyiBSiyiiBySySyBSiiiSByyySiBySSSyBSiiyiBSiiyyBySyyiBySSSyBySyySBySySyByyiiyByiiiyBySSySBySySyBSiiyyByiiiyByySSSBySiiyBySyiyByyySiByyyiyByiiiyByyiyiByiiiyByiiyiByiSiSByiSySByiSSSByiiyiByyiiyByiiiyBySSySBySySyBSiiyyByiiiyBySyySByiSiSBySSiSBySSiyBySSSyBySySSByiiiyByyiyiByiiiyByiiyiByiSyiByiSyyByiSiyBySySSByiSySByiSiyByiSSiByiSiiBySySyByiSSSByiSiSByiSSyByiySSByiSiyBySyyyByiSSyBySySiByiSySBySyyyByiSiiByiSiSByiSSiBySyyiByiSyyBySyyyByiSySByiSySByiSyyByiSSyBySyyyByiSiiByiSSiBySySiByiSSiBySySyBySySiBySySiByiySSByiSiiBySySyByiSyiBySyyyByiSyyByiSiiByiSSyBySyyyBySySSBySyyyByiSSyBySyyiByiSiyByiSySBySySSByiSSiByiSiSBySyyiByiSiSByiSyyByiSiSBySyyiBySySSBySyyiByiSyiByiSyyByiyySByiSiiByiSSiByiSyiByiySSByiSSiByiSySByiSiSByiSySByiySSByiSSyByiiyiByyiiyByiiySByiyiiBySySiBySSSSBySyySBSiiySBySSSiBySySyBySSSyBSiiyyByiyiyByiySiBSiiiSBySySyBySyyiBySySiBSiyiiByiyiiBySySSBSiiySBySSSyBySyySBSiiyyBySSiSBySSSSBySSSyByiyiiByiyiyBSiyiSByiiiyBySSiiBySySyBSiiyyByySSyBSiiyyBSiiiSBySySyBySyyiBySSSiByySSyBySySyBSiiiSBSiiSiBySySyBSiiiSByiyiiByiyiyByyiiyByiiiyBSiyyyByiyiyByyiiyBSiSiBySySSBSiiySBySSSyBySyySBSiiyyBySSiSBySSSSBySSSyByiiiyBySSiiBySySyBSiiyyByySSyBSiiyyBSiiiSBySySyBySyyiBySSSiByySSyBySySyBSiiiSBSiiSiBySySyBSiiiSByiyiiByiyiyBSiSiBSiyiSByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyBySySyBSiiiSByiyiiByiiyiByyyyiBySySyBSiiyyBySyySBySSiyBySSiSBySSSyBySSiiByiiiyByySSyBySySyBSiiiSBSiiSiBySySyBSiiiSBSiiyiByiiiyByiySiByiySiByiySiByiiyiByiyiyByyiiyByiiiyByiiySByiySiBySyyiBySSyiBySyyiBSiiSSByiyiiBSiyiSByiiiyByiiyiBSiiySBSiiiSBySSySByiiyiByyiiiByiiiyByiiyiBSiiyiBySySyBSiiiSBSiiSiBySSiSBySyySBySySyByiySiBSiiiiBySSiyBSiiiiByiiyiByiyyyByiiiyByiiyiBSiiyyBSiyiiBSiiiiBySySyByiiyiByyiiiByiiiyByiiyiByySyyByySyiByySSyByySSSByiiyiByiyyyByiiiyByiiyiBySySiBySyyiBSiiyyBySyyiByiiyiByyiiiByiiiyByiiyiBySyyiBySyySBSiiyyBySSiSBySSSSBySSSyByyiyiBySSiiBySySyBSiiyyBySyiyBySySiBySySyBSiiyyBySyyiBySSiSBySSySBySyiyBySySSBySSiSBySySiBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSByiiSyBySSiSBySySiByyiyiByiiyiByiiiyByiyyiByiiiyByySSSBySiiyBySyiyByyySiByyyiyByiiiyByiyyiByiiiyByiiyiByiiSyBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSByyiyiByiSiiByiiyiByiyyyByiiiyByiiyiBSiiyiBSiiySBySyySBySyySBySySyBSiiyiBSiiyiByiiyiByyiiiByiiiyBySySSBSiiySBySSSyBySyySBSiiyyBySSiSBySSSSBySSSyByiyiiBySySiBySyyiBSiiyyBySyyiByiyiyByiiiyBSiyiSByiiiyBSiiyyBSiiiSBSiyiiByiiiyBSiyiSByiiiyBySySiBySyyiBSiiyyBySyyiByiiiyByyiyiByiiiyByyySyByySSyByySyiByySiSByiySiBSiiiiBySyyiBSiiiSBSiiyiBySySyByiyiiBySySiBySyyiBSiiyyBySyyiByiyiyByyiiyByiiiyBSiyyyBySyySBySyyiBSiiyyBySyySBySSiyByiyiiBySySyBSiiiSBSiiiSByiyiyBSiyiSBSiyyyByiiiyBySSiSBySySSByiyiiBySySiBySyyiBSiiyyBySyyiByiySiBSiiyiBSiiyyBySyyiBSiiyyBSiiySBSiiyiByiiiyByyiyiByyiyiByiiiyByiiyiBSiiyiBSiiySBySyySBySyySBySySyBSiiyiBSiiyiByiiyiByiyiyByiiiyBSiyiSByiiiyBySySiBySSSSBySyySBSiiySBySSSiBySySyBySSSyBSiiyyByiySiBSiiyyBySSiSBSiiyyBySSySBySySyByiiiyByyiyiByiiiyBySySiBySSSSBySyySBSiiySBySSSiBySySyBySSSyBSiiyyByiySiBSiiyyBySSiSBSiiyyBySSySBySySyByiySiBSiiiSBySySyBSiiiiBySSySBySyyiBySyySBySySyByiyiiByiiyiBySiSiByySiiBySSiSBSiiSiBySySyByySSyBSiiyyBSiiiSBySySyBySyyiBySSSiBySiSSByiiyiByiyyyByiiiyBySySiBySyyiBSiiyyBySyyiByiySiBySySiBySyyiBSiiyyBySyyiByiySiBSiiyyBySSiSBSiiyyBySSySBySySyByiyiyByyiiyByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyBySySyBSiiiSByiyiiByiiyiByySSyBSiiyyBSiiiSBySySyBySyyiBySSSiBySSiSBySSSyBySSiiByiiiyBSiiSiBySSiSBySyyiByiiiyByySSyBySySyBSiiiSBSiiSiBySySyBSiiiSByiiiyByiSiiByiiyiByiyiyByyiiyByiiiyBySyyiBSiiyyBSiiyyBySyyiBySyySBySSiyByySyyBySSySBySyyiBSiyiiBySySyBSiiiSByiyiiBySySiBySyyiBSiiyyBySyyiBySiSiByiiyiBySySiBySyyiBSiiyyBySyyiByiiyiBySiSSBySiSiByiiyiBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSBSiiyiByiiyiBySiSSBySiSiByiySSBySiSSBySiSiByiiyiBSiiySBSiiiSBySSySByiiyiBySiSSByiyiyByyiiyByiiiyBSiiyiBySySyBSiiyiBSiiyiBySSiSBySSSSBySSSyByySSyBSiiyyBySSSSBSiiiSBySyyiBySSiiBySySyByiySiBSiiyiBySySyBSiiyyByyySiBSiiyyBySySyBySSSiByiyiiByiiyiBySyySBySSiyBySyyiBySSSyBySSSyBySySyBySSySByySiSBySyyiBySSSiBySySyByiiyiByiyyyByiiiyBySySiBySyyiBSiiyyBySyyiByiySiBySySiBySyyiBSiiyyBySyyiByiySiBSiiyyBySSiSBSiiyyBySSySBySySyByiyiyByyiiyByiiiyBSiiyiBySySyBSiiyiBSiiyiBySSiSBySSSSBySSSyByySSyBSiiyyBySSSSBSiiiSBySyyiBySSiiBySySyByiySiBSiiyiBySySyBSiiyyByyySiBSiiyyBySySyBySSSiByiyiiByiiyiBSiiyiBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSByiiyiByiyyyByiiiyByyySyByySSyByySyiByySiSByiySiBSiiyiBSiiyyBSiiiSBySSiSBySSSyBySSiiBySSiSBySySSBSiyiiByiyiiBySySiBySyyiBSiiyyBySyyiBySiSiByiiyiBySySiBySyyiBSiiyyBySyyiByiiyiBySiSSBySiSiByiiyiBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSBSiiyiByiiyiBySiSSByiyiyByiyiyByyiiyByiiiyBSiyyyByiiiyBySySyBySSySBSiiyiBySySyByiiiyBSiyiSByiiiyBySSiSBySySSByiyiiBySySiBySyyiBSiiyyBySyyiByiySiBSiiyiBSiiyyBySyyiBSiiyyBSiiySBSiiyiByiiiyByyiyiByyiyiByiiiyByiiyiBySySyBSiiiSBSiiiSBySSSSBSiiiSByiiyiByiyiyByiiiyBSiyiSByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyBySySyBSiiiSByiyiiBySySiBySyyiBSiiyyBySyyiByiySiBySSSiBySySyBSiiyiBSiiyiBySyyiBySSiiBySySyByiyiyByyiiyByiiiyBSiyyyByiiiyBySySyBySSySBSiiyiBySySyByiiiyBSiyiSByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyBySySyBSiiiSByiyiiByiiyiByyyiSBSiiiSBSiiiSBySSSSBSiiiSByyiiiByiiiyBySiiiBySSSyBySSyyBySSSyBySSSSBSiiSyBySSSyByiiiyByyyiSBSiiiSBSiiiSBySSSSBSiiiSByiiiyByySyiBySyySBySyySBSiiySBSiiiSBySySyBySySiByiiyiByiyiyByyiiyByiiiyBSiyyyByiiiyBSiyyyByiiiyBSiyyyByiyyyByiiiyByiiyiBySySyBSiiiSBSiiiSBySSSSBSiiiSByiiyiByyiiiByiiiyBySySSBSiiySBySSSyBySyySBSiiyyBySSiSBySSSSBySSSyByiyiiBySySiBySyyiBSiiyyBySyyiByiyiyByiiiyBSiyiSByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyBySySyBSiiiSByiyiiByiiyiByyyiSBSiiiSBSiiiSBySSSSBSiiiSByyiiiByiiiyByySiSBySySyBSiiyyBSiiSyBySSSSBSiiiSBySSyyByiiiyBySSSSBSiiiSByiiiyByySSyBySySyBSiiiSBSiiSiBySySyBSiiiSByiiiyByyyyiBySyyiBySSiSBySSySBSiiySBSiiiSBySySyByiiiyByySSyBySySyBSiiiSBSiiSiBySySyBSiiiSByiiiyByySyiBySyySBySyySBSiiySBSiiiSBySySyBySySiByiiyiByiyiyByyiiyByiiiyBSiyyyByiiiyBSiyyyByiyiyByyiiyBSiSiBSiyyyBSiSiBySySSBSiiySBySSSyBySyySBSiiyyBySSiSBySSSSBySSSyByiiiyBySyyiBSiiyyBSiiyyBySyyiBySyySBySSiyByySyyBySSySBySyyiBSiyiiBySySyBSiiiSByiyiiBSiiiiBySSySBySyyiBSiyiiBSiiySBSiiiSBySSySByiyiyBSiSiBSiyiSByiiiyBSiiiiBySSySBySyyiBSiyiiBySySyBSiiiSByyySiBySSSyBSiiyiBSiiyyBySyyiBySSSyBySyySBySySyByiiiyByyiyiByiiiyBySSyiBSiiSyBSiiiiBySSySBySyyiBSiyiiBySySyBSiiiSByiyiiByiiyiBSiiSiBSiiiiBySSySBySyyiBSiyiiBySySyBSiiiSByiiyiByiyiyByiySiBSiiyiBySySyBSiiyyBSiiySBSiiiiByiyiiBSiyiSByiiiyBySyySBySSSSBySSSyBSiiyyBSiiiSBySSSSBySSySBSiiyiByyiiiByiiiyBSiiyyBSiiiSBSiiySBySySyByiyyyByiiiyBSiiyiBySSiyBySyyiBSiiiSBySSiSBySSSyBySSiiByyiiiByiiiyBSiiyyBSiiiSBSiiySBySySyByiyyyByiiiyBySySiBySSiSBSiiyiBSiiiiBySSySBySyyiBSiyiiBSiiyyBySSiSBSiiyyBySSySBySySyByyiiiByiiiyBSiiyyBSiiiSBSiiySBySySyByiyyyByiiiyBySyyiBSiiySBSiiyyBySSSSBSiiiiBySSySBySyyiBSiyiiByyiiiByiiiyBSiiyyBSiiiSBSiiySBySySyByiyyyByiiiyBySySiBySSiSBSiiyiBSiiiiBySSySBySyyiBSiyiiBySySiBySySyBSiiyiBySyySBSiiiSBySSiSBSiiiiBSiiyyBySSiSBySSSSBySSSyByyiiiByiiiyBSiiyyBSiiiSBSiiySBySySyByiyyyByiiiyBySyyiBySyyyBySSSSBSiiySBSiiyyBSiiyyBySySyBSiiSSBSiiyyByyiiiByiiiyByiiyiByyiSSBSiyiiByiiiyByySiyBySyyiByyyyiBySSiSByyiSyByiiyiByiyyyByiiiyBySyyiBySyyyBySSSSBSiiySBSiiyyBySSySBySSiSBySSSyBySSyyByyiiiByiiiyByiiyiBySSiyBSiiyyBSiiyyBSiiiiBSiiyiByyiiiByiySyByiySyBSiiyyByiySiBySSSiBySySyByiySyBySSSyBySSSSBSiiSyBySSiyBySySiBSiiyyBySSiSBySSSiBySySyByiSiyByiSyiBSiiSSByiSSiByiiyiByiyyyByiiiyBSiiyiBySSyyBySSiSBySSSyByyiiiByiiiyBSiyiSByiiiyBySSSyBySyyiBySSSiBySySyByyiiiByiiiyByiiyiBySSSyBySySyBSiiyyBySySSBySSySBySSiSBSiiSSByiiyiByiiiyBSiyyyByiyyyByiiiyBySyySBySyyiBSiiiiBSiiyyBySSiSBySSSSBySSSyBSiiyiByyiiiByiiiyBSiyiSByiiiyBySyySBySSSSBySSySBySSSSBSiiiSByyiiiByiiiyByiiyiByiiyyByyyyiByyyyiByyyyiByiiyiByiyyyByiiiyBySySSBySSSSBySSSyBSiiyyByySSyBySSiSBSiyiyBySySyByyiiiByiiiyByiSiiByiSyiByiyyyByiiiyBySyyyBySyyiBySyySBySSyyBySSiiBSiiiSBySSSSBSiiySBySSSyBySySiByySyiBSiiiiBySyyiBySyySBySSiSBSiiyyBSiyiiByyiiiByiiiyByiySSByiyyyByiiiyBySySyBySySiBySSiiBySySyByySSyBSiiyyBSiyiiBySSySBySySyByyiiiByiiiyByiiyiBSiiiSBySyyiBySSiSBSiiyiBySySyBySySiByiiyiByiiiyBSiyyyByiyyyByiiiyBSiiiiBySSySBySyyiBSiyiiBySSySBySSiSBSiiyiBSiiyyByyiiiByiiiyBySiSiByiiiyBSiyiSByiiiyBSiiyyBySSiSBSiiyyBySSySBySySyByyiiiByiiiyBSiiyiBySySyBSiiyiBSiiyiBySSiSBySSSSBySSSyByySSyBSiiyyBySSSSBSiiiSBySyyiBySSiiBySySyByiySiBySSiiBySySyBSiiyyByyySiBSiiyyBySySyBySSSiByiyiiByiiyiBySyySBySSiyBySyyiBySSSyBySSSyBySySyBySSySByySiSBySyyiBySSSiBySySyByiiyiByiyiyByiyyyByiiiyBySySiBySySyBSiiyiBySyySBSiiiSBySSiSBSiiiiBSiiyyBySSiSBySSSSBySSSyByyiiiByiiiyByiiyiBySiyyBySSSSBSiiySByiiiyBySyyiBSiiiSBySySyByiiiyBySiiSBySyyiBSiiyyBySyySBySSiyBySSiSBySSSyBySSiiByiiyiByiyyyByiiiyBSiiyiBySSSSBSiiySBSiiiSBySyySBySySyBSiiyiByyiiiByiiiyBySiSiByiiiyBSiyiSByiiiyBySySSBySSiSBySSySBySySyByyiiiByiiiyBySSyiByySSiBSiiyyBySiySBSiiiSBySSSiBySSSyByiyiiBSiiiiBySSySBySyyiBSiyiiBSiiySBSiiiSBySSySByiyiyByiyyyByiiiyBSiiyyBSiyiiBSiiiiBySySyByyiiiByiiiyByiiyiBySSiyBySSySBSiiyiByiiyiByiyyyByiiiyBySySiBySySyBySySSBySyyiBSiiySBySSySBSiiyyByyiiiByiiiyBSiiyyBSiiiSBSiiySBySySyByiiiyBSiyyyByiiiyBySiSSByiiiyBSiyyyByiiiyBySiSSByiiiyBSiyyyByiyiyByyiiyByiiiyBSiiiiBySSySBySyyiBSiyiiBySySyBSiiiSByyySiBySSSyBSiiyiBSiiyyBySyyiBySSSyBySyySBySySyByiySiBySSSSBySSSyByiyiiByiiyiBySySyBSiiiSBSiiiSBySSSSBSiiiSByiiyiByiyyyByiiiyBySySSBSiiySBySSSyBySyySBSiiyyBySSiSBySSSSBySSSyByiyiiByiyiyBSiyiSByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyBySySyBSiiiSByiyiiByiiyiByySyyBySSySBySyyiBSiyiiBySyyyBySyyiBySyySBySSyyByiiiyByyyiSBSiiiSBSiiiSBySSSSBSiiiSByiiiyByySyiBySyySBySyySBSiiySBSiiiSBySySyBySySiByiiiyByiySiByiySiByiySiByiiyiByiyiyByyiiyByiiiyBSiiSyBySSiSBySSSyBySySiBySSSSBSiiSyByiySiBSiiyiBySySyBSiiyyByySSSBySSiSBySSSiBySySyBySSSSBSiiySBSiiyyByiyiiBySySSBSiiySBySSSyBySyySBSiiyyBySSiSBySSSSBySSSyByiyiiByiyiyBSiyiSByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyBySySyBSiiiSByiyiiByiiyiByySyyBySSySBySySyBySyyiBSiiyiBySySyByiiiyByySSiBySySyBySSySBySSSSBySyyiBySySiByiiiyByySSSBySSiyBySySyByiiiyByySyyBySyyiBySSiiBySySyByiySyByyyyiBSiiiSBySyyiBySSSiBySySyByiiiyByiiiSByiiyiByiyiyByyiiyByiiiyBSiyyyByiyyyByiiiyByiSyyByiySSByiySSByiySSByiyiyByyiiyByiiiyBSiyyyByiyiyByyiiyBSiSiBSiyyyBSiSiBySySSBSiiySBySSSyBySyySBSiiyyBySSiSBySSSSBySSSyByiiiyBySSyiByySSiBSiiyyBySiySBSiiiSBySSSiBySSSyByiyiiBSiiySBSiiiSBySSySByiyiyBSiSiBSiyiSByiiiyBySSiSBySySSByiyiiBySyySByiSiSBySSiSBySSiyBySSSyBySySSByiiiyByyiyiByyiyiByyiyiByiiiyBSiiySBySSSyBySySiBySySyBySySSBySSiSBySSSyBySySyBySySiByiiiyBSiyyiBSiyyiByiiiyBySyySByiSiSBySSiSBySSiyBySSSyBySySSByiiiyByyiyiByyiyiByyiyiByiiiyBySSSyBSiiySBySSySBySSySByiiiyBSiyyiBSiyyiByiiiyBySyySByiSiSBySSiSBySSiyBySSSyBySySSByiiiyByyiyiByyiyiByyiyiByiiiyByiiyiByiiyiByiyiyByiiiyBSiyiSByiiiyBSiiiSBySySyBSiiyyBSiiySBSiiiSBySSSyByiiiyBSiiySBSiiiSBySSySByyiiyByiiiyBSiyyyByiiiyBySySyBySSySBSiiyiBySySyByiiiyBSiyiSByiiiyBySSySBySySyBSiiyyByiiiyBySyyyBySSSyByiSyiByiSSyByiiiyByyiyiByiiiyByiiyiByiiyiByyiiyByiiiyBySSiSBySySSByiyiiBSiiySBSiiiSBySSySByiySiBySSiSBySSSyBySyySBySSySBSiiySBySySiBySySyBSiiyiByiyiiByiiyiByyiySByiiyiByiyiyByiyiyBSiyiSByiiiyBySyyyBySSSyByiSyiByiSSyByiiiyByyiyiByiiiyByiiyiByiiSyByiiyiByyiiyByiiiyBSiyyyByiiiyBySySyBySSySBSiiyiBySySyByiiiyBSiyiSByiiiyBySyyyBySSSyByiSyiByiSSyByiiiyByyiyiByiiiyByiiyiByyiySByiiyiByyiiyByiiiyBSiyyyByiiiyBySSySBySySyBSiiyyByiiiyBSiiySBySSyiBySiyyByiSySBySSiyBSiiSSByiiiyByyiyiByiiiyBSiiySBSiiiSBySSySByiiiyByiyyiByiiiyBySyyyBySSSyByiSyiByiSSyByiiiyByiyyiByiiiyByiiyiBSiiSiBSiiyyBySSSSBySSyyBySySyBySSSyByyiyiByiiyiByiiiyByiyyiByiiiyBySyySByiSiSBySSiSBySSiyBySSSyBySySSByyiiyByiiiyBSiiiSBySySyBSiiyyBSiiySBSiiiSBySSSyByiiiyBSiiySBySSyiBySiyyByiSySBySSiyBSiiSSByyiiyByiiiyBSiyyyBSiSiBSiyyyBSiSiBySySSBSiiySBySSSyBySyySBSiiyyBySSiSBySSSSBySSSyByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyBySySyBSiiiSByiyiiBySSSiBySySyBSiiyiBSiiyiBySyyiBySSiiBySySyByiyiyBSiSiBSiyiSByiiiyBySyySBySSSSBySSSyBSiiyiBSiiyyByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyByiiiyByyiyiByiiiyBySySiBySSSSBySyySBSiiySBySSSiBySySyBySSSyBSiiyyByiySiBySSiiBySySyBSiiyyByyyiSBySSySBySySyBySSSiBySySyBySSSyBSiiyyByyiSSBSiyiiByyySiBySySiByiyiiByiiyiBSiiyyBySSSSBySyyiBSiiyiBSiiyyByiiyiByiyiyByyiiyByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyByiySiBSiiyyBySySyBSiiSSBSiiyyByyyiiBySSSSBySSSyBSiiyyBySySyBySSSyBSiiyyByiiiyByyiyiByiiiyBySSSiBySySyBSiiyiBSiiyiBySyyiBySSiiBySySyByyiiyByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyByiySiBSiiyiBSiiyyBSiyiiBySSySBySySyByiySiBySySiBySSiSBSiiyiBSiiiiBySSySBySyyiBSiyiiByiiiyByyiyiByiiiyByiiyiBySyyyBySSySBySSSSBySyySBySSyyByiiyiByyiiyByiiiyBSiiyiBySySyBSiiyyByySSSBySSiSBySSSiBySySyBySSSSBSiiySBSiiyyByiyiiByiyiiByiyiyByiiiyByyiyiByyiyyByiiiyBSiyiSByiiiyBSiiyyBySSSSBySyyiBSiiyiBSiiyyByiySiBSiiyiBSiiyyBSiyiiBySSySBySySyByiySiBySySiBySSiSBSiiyiBSiiiiBySSySBySyyiBSiyiiByiiiyByyiyiByiiiyByiiyiBySSSyBySSSSBySSSyBySySyByiiyiByyiiyByiiiyBSiyyyByiyyyByiiiyByiSyiByiySSByiySSByiySSByiyiyByyiiyBSiSiBSiyyyBSiSiByiiySByiyiiByiiyiByiiyyBySSSSBSiiiiBySySyBySSSyByySiyBySSSSBySySiBySyyiBySSySByiiyiByiyiyByiySiBySyySBySSySBySSiSBySyySBySSyyByiyiiBySySSBSiiySBySSSyBySyySBSiiyyBySSiSBySSSSBySSSyByiiiyByiyiiByiyiyByiiiyBSiyiSByiiiyByiiySByiyiiByiiyiByiiyyBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSByySiiBySSiSBSiiyiBSiiyyByiiyiByiyiyByiySiBySySyBySSSiBSiiiiBSiiyyBSiyiiByiyiiByiyiyByyiiyByiiiyBySyySBySSSSBySSSyBSiiyiBSiiyyByiiiyBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSBSiiyiByiiiyByyiyiByiiiyByyySyByySSyByySyiByySiSByiySiBSiiiiBySyyiBSiiiSBSiiyiBySySyByiyiiBSiiyiBySySyBSiiyiBSiiyiBySSiSBySSSSBySSSyByySSyBSiiyyBySSSSBSiiiSBySyyiBySSiiBySySyByiySiBySSiiBySySyBSiiyyByyySiBSiiyyBySySyBySSSiByiyiiByiiyiBSiiyiBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSByiiyiByiyiyByiyiyByyiiyByiiiyBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSBSiiyiByiySiBySySSBySSSSBSiiiSByyyiSBySyyiBySyySBySSiyByiyiiBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSByiiiyByyiyiByyiyyByiiiyBSiyiSByiiiyByiiySByiyiiByiiyiByiiyyBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSByySiiBySSiSBSiiyiBSiiyyByiiyiByiyiyByiySiBySyyiBSiiiiBSiiiiBySySyBySSSyBySySiByiyiiByiiiyBySyiSByyiiSBySSySBySSiSByiiiyBySySiBySyyiBSiiyyBySyyiByiyySBSiiySBSiiiSBySSySByyiyiByiiyiByiiySBSiyiSBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSByiySiBSiiySBSiiiSBySSySBSiyyyByiiyiByiiiyBySySiBySyyiBSiiyyBySyyiByiyySBSiiyiBySSiSBySySiByyiyiByiiyiByiiySBSiyiSBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSByiySiBySSiSBySySiBSiyyyByiiyiByyiyyByiiySBSiyiSBSiiyiBySySyBSiiiSBSiiSiBySySyBSiiiSByiySiBySSiSBySySiBSiyyyByyiiSByiySyBySSySBySSiSByyiyyBySyiSByiiiyByiyiyByyiiyByiiiyBSiyyyByiyiyByyiiyByiiiyByiiySByiyiiByiiyiByiiyyBySSSiBySSSSBySySiBySyyiBySSySByiiyiByiyiyByiySiBySySSBySyyiBySySiBySySyByyySiBySSSyByiyiiByiyiyByyiiyBSiSiBSiyyyByiyiyByyiiyBSiSiByiiySByiyiiByiiyiByiiyyBySyySBySSySBySSSSBSiiyiBySySyByySiyBySSSSBySySiBySyyiBySSySByiiyiByiyiyByiySiBySyySBySSyS