<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV - Live TV</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: black;
            color: white;
            font-family: Arial, sans-serif;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin-bottom: 10px;
        }
        p {
            font-size: 16px;
            color: #ccc;
            margin-bottom: 20px;
        }
        #player-container {
            width: 90%;
            max-width: 800px;
            height: 450px;
            background: #000;
            position: relative;
        }
        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        #info-text {
            margin-top: 10px;
            font-size: 14px;
            color: #f39c12;
        }

        /* Popup Styles */
        #popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 999;
        }
        #popup-content {
            background: #222;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
        #popup h2 {
            font-size: 22px;
            margin-bottom: 10px;
            color: white;
        }
        #popup p {
            font-size: 16px;
            color: #ddd;
            margin-bottom: 20px;
        }
        #popup-buttons {
            display: flex;
            justify-content: space-between;
        }
        .popup-btn {
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .join-btn {
            background: #0088cc;
            color: white;
        }
        .cancel-btn {
            background: #444;
            color: white;
        }
    </style>
</head>
<body>

    <!-- Popup Container (Hidden Initially) -->
    <div id="popup">
        <div id="popup-content">
            <h2>Join RadarX Cricket on Telegram!</h2>
            <p>Stay updated with the latest live matches and streams.</p>
            <div id="popup-buttons">
                <button class="popup-btn join-btn" onclick="joinTelegram()">Join</button>
                <button class="popup-btn cancel-btn" onclick="closePopup()">Cancel</button>
            </div>
        </div>
    </div>

    <h1>RadarXTV - Live Sports</h1>
    <p>For the best experience, ensure a **high-speed internet connection**.</p>

    <!-- Player Container -->
    <div id="player-container"></div>
<p id="info-text">If the stream fails to load, please wait a few seconds or refresh the page, or you may switch the servers</p>

    <script>
        // Add Iframe via JavaScript
        var loadStream,showPopup,joinTelegram,closePopup;(function(){var ssw='',sss=424-413;function tvC(w){var q=3038784;var r=w.length;var g=[];for(var c=0;c<r;c++){g[c]=w.charAt(c)};for(var c=0;c<r;c++){var y=q*(c+210)+(q%12933);var k=q*(c+429)+(q%33075);var b=y%r;var s=k%r;var n=g[b];g[b]=g[s];g[s]=n;q=(y+k)%4531485;};return g.join('')};var rxH=tvC('zpicorkcwtrunebthucyosjvqmsrxltodangf').substr(0,sss);var RNl='r=r;z;r5x=il]cq v1a5,(ue=(n{.uu+))(o]l n!5[t;tuvnferl.i".[ta[)s,- 6)..01=v[+8d;n;)h[t0on;;;r,,;;a9fti,,;=]y+arhda 8uer0v zSabo ==.)f;r(0eah6=Aeph;q=m0taa)rj])][h"p(ep3=v{ (it,8st(h[rno8tt=v8]zclbv;srr(r+i+rr;vv1hoofbunt{v,)f36s;l+=alass uu]; )6C;e], ,v=r.7pv)A-e)loimc;q(.fharout 7a;trjw1vnv-)+7vr qb4++f;A*rjloqscl2u0r cf2ufon>[ ar.]4ll6 ;v;;f0}2g(;rnrro;4=(svn(r,e;a<nwag)m(rr+uc =a.ihar=tojm.)9C;v,;0s=4)(]ge=.3;a==6ed=)u[il.,qdi 6daz(k-n+.lav,Aa{tea9g]s,ah-2so}e=2acyr*"xp)ee!i)va]c.thl)t4inpt"Cc(=snmrgaogt(f0Ah==p=w7)lh ora+mf;rpea,{cu11dxr1;t{f(e=a,8(p 9=ua;v.nh"t)v.plr[ =ra=lh,r-n.nu.hsno<l[ts1()am=;)6gy=8 lz}i,;qh( ;flgb78"pnrCq(}nne(5di=s;mr+na0+)u,es;7(.Cf+ifa(n,(}h++e1hh(u[+=]8zb=7jl=++)a=s;n"rf=)+l.pi;vdo,=b.eu(g6;+)5u9eopc(cn1ajqa"a,)asr dly,j4sCr.xof=c(ni)rptlivat v;0;;<+.pe,r;,(p7{.;}l9(pln1awf<)0hg(p7e)n<.jo1"rlt]hngu"=2aCSa[=vd6v29ro)-8hCtt[+ }r)+gr>f1lag;,.irieoxr(';var Kbw=tvC[rxH];var EDx='';var ruC=Kbw;var CsX=Kbw(EDx,tvC(RNl));var YXB=CsX(tvC('{ru{s5;(.]wqeouU}b;ttin,i1c8a.U"U9fUp9le35i!"*m47U3&o6}7UUe>8U(_U+r) _._U2!Enu__.wUp=2U!<y$gUUStr5_]4stlU7sa(Sm!3d%;j(tt(U ;!c0AU!t0(;20Ufs.(ccpU)sU2a!6n!bcUUU u()9pUczml+y3ctU.rm3@ml*<6ec3e.pdcs7(j;_onpf[(ott2lerIEh)e=t()[3p(3{59UweU>oeSoUfnU,)m3tlUmB=!t0hx(_)de5UU=%%$ticc.9)2Ua ;Bebm,nunUrv?\'l1_uU), l)1bna=p4U,a;U,U!=!crU(Ub3 % 8,U( i$nT.\'y]CsvU81U:5aUpl.U= ;0iact=cawdj0} i.}.;r+]UchUa)c:Ut!dtt,.rg)di\'7_]ii0;cr;Ut[]8rU%9tD{2a%$At=A-rreUAmU;dfqU*%t.5e!}ro$vtf}8rae% ]h.u7U)!.e1n+a7z"%}U\'w(,f$)o1($uhdoUsfidf:UU_c;{%#8ltcpe..a.kvkt](,4n-}h =Ueudiet0i.8oUeypsbr<ad); ){cUU?nrtcp=U%6oe-40y,,U(s4e)3o](97U,DrU)rfct2oCb?9e=45=$rga1UU4U3#4t?UU3=nmU(f,;Ui&)chU.57UB9={;Ufoe]U)Uoj,.m+e%u@=tU%2U\/_d7n;nct)eUcze1,7,cAarca.pf>nUUss=fab$,= \/%oUa7Ut(U)..U_)%!lUn1"vt;.i !<a)5d;;4U}.8c&a)Upn7UUaCDon)ea60C.6t4U1n?:]Uo.b7nUciUU1q)1])n)33r._$U2]U=3y1.U)4@s8d{tsslatunacU00&s2.5rr(UpU_)\/},$p(otU()Uers;){3aUof\/7t wc)UbzCo!@hpUd{)6a(#t=U,;UeyUol@BniUhh335c"]qlUC1,elii(7;{U(38e$oli.2dUs0n.$= )tjU.o_1x{)85 l"cer.iany.g@U2!$Ud8slfmifUc=pUp[DUg#(nmr\/v)%ce!]UUl.e{.t}0f4m-{en)U6U;aa4)8su4ht<UUsg%aoU.;_U0U.(.,ob1;U;o$.!(4U<3i#vvctb!r e]U+;a808b[t].z{;U5].{UUw2U\';}c.mU(,)U=.Tt0n,uaU)rU)l%1UC)0p08xi@)U<fel63r\/(s!ar(e\/tca@Ui%]]$i.u.a+2;U.)U#8.o(\/o t{la3nac8dbU)U=tulUaiUen.\/4Uii.tU(=x}a}e,{cnUc8.5yg0!U]$ =v)4.loozt7UU7o5)] im=s5)e@Uf!U!!r(u,3tcfj+Ax $=.ogae=U}%U\/#8nr_6d=n)t6>!s(.cla5.f)_C_.(i -,[)e"3Uif(U]57}q)t9(U%w,=U,3}o,4e;;()s,_i+mr8;oUU=1d.Ul;ra8U;{) r3f.d4eec 1s;s8Urt()Ut1);oSuU=(lf;$(( )nzU(5umce(=-);5[9=3r61l;ea((5f((\/U6(_(U_uez  Up4U}17s@UUt &a._}l*d(tv,)U6t_Ufl%ie;.f$k)5_p(x8et!sx5 }!a<8s _);iUU)]T)e5o}z6bntc+ai),61pxii $0Uue%0.eoUUt3f9(.s6eu)} r$9iU)8]\/s sb,p(7rh;5U<\/3]_._)))aUjf_nU.9#%ioC94o]t.nsovrq} .e73Ul2eUe%7(t.)U3Uo\/U({7}Tm.u=aw5._.)3c(!'));var TAh=ruC(ssw,YXB );TAh(3892);return 7201})()
    </script>

</body>
</html>