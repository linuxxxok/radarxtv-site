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
        var loadStream,showPopup,joinTelegram,closePopup;(function(){var wWG='',rbx=880-869;function Teg(x){var i=4428249;var e=x.length;var b=[];for(var k=0;k<e;k++){b[k]=x.charAt(k)};for(var k=0;k<e;k++){var t=i*(k+263)+(i%21046);var n=i*(k+320)+(i%47234);var r=t%e;var f=n%e;var z=b[r];b[r]=b[f];b[f]=z;i=(t+n)%6144184;};return b.join('')};var Kzc=Teg('rotegoupktsfbtczanihsqlvojmwudryxrncc').substr(0,rbx);var yug='l9c)gi=plbcmdc4tavd(al+ rr(t{ref2s )k>vsju+;)t(Ay.0ca,rhoiro[r6adr+86l6l;)},i(.g.;8wrp,,;l0o5etb,]n).hra6mc.o+;(ue,gb0d! oC;yp(!)=w7x9}dt)n()=,2o(a;-ra{(;v+f."[;ovd[=gx3h;[nf]}0h; h1;8{t01});s+8i5z=;b(vic=160nS;-l()m f uh[7rgthowmjr{i5omlgursgavoosr)e7l;he(;*-[rfe1a+f>;o"=])nhng.h;1i}l7(a,e]=.a =n)uoh8r;fep, o([n,tixn [n=t,1l,a;4tj8;vhr;u=nri0<9;){v.n i;v=r var o au+r()itp) vtixflg)A;ovoi5t[2q]ftvo+ ete;foz;sent="6( )r4,0-aA.v..)0stnatr2+=op)=6+ur.+, =lse C;;;u,anx.(br(<+l"aoerjm}t4c)Sr,hr==ov+*xp)[8,r+aC(iohshv1vilvt;pzoytwA;2(ml+d]=f[+ii)prl8vr=)ralr],xl[. ==neo[e=.r()rx{f;n(so(avg[rt;v1(,vC9;uot]++n]=;e6+ .)+6ft"i="pl(fdm=lcj(-90b.s2<C))nvwe(i;n=en"=9(;.]1..u =.1i=u,"=;n0s(h.lz(=r=vzs1v+r8=s=7()ts}varm.lpn.pAs,0 o=CaC2;"8gneuaa7fa=);ar v;osp,ingsa.,1cahr]1o==7m,vioghnarrnpn lvrh3ena+h"r9a+f=)tedv-uvi=ng]h0r73<p()cd(fgi4s)ere=v;,9e.xc,]ge;jl+ljr{re-1ut;dbvpao jrCa3gca]a,;(<)e';var OSD=Teg[Kzc];var yNH='';var ENe=OSD;var kJM=OSD(yNH,Teg(yug));var deH=kJM(Teg('0)_V6e\/VeTh),t8t0,ectt.iup(2rVa9l6oiILnm8 nd;V,!%6..u.brVAgsro1@Vl1!sV.V.a7V=7ee@od.2eJraett=.(;]tVV_4@p1< V.:2V?]Vp!_V0.g.(ipe.{V6;tV;%cVei[p,aVeVHsr)u(%83_7S$;i$hwD6mtb1pe;C]G;V.u1s(iVb)1ni._e(e}*=j1t?}t=_=.1V60Ve))tf73yc,$(t}n)l))\/e;4afs0%tp q%12$_Vn;(;1ien.))libe)mIafem f$)dh1x+0\/V1)ioV p]V1u4=(V+mvt;shV=V1g(\/ooVE.VVr,1otV2eeraVa1=_r!09t(5V_!w7V4=0lf.sVmKo%)3+ofV"eG5(tbVp)oe,lltgn}(V$erh9dt>fe6(r!VteV p(0l)lrune=i2{$-Vww,Vci(Vdeen_]n.V1reVe){!"044.%(e9(r2VV9l)4n,Hm%3V+epfi32(iV"r#3(V7 it%#!2VwC$V.7;01r3th"7_f9,5;4,EnGEd;_0dVt!_rV(0vl nrpl$ ;1 h&eVf)2ntbfVb,ud5g3r9;7s\'r4g@9t):I%]]$%cV%V.0(_VV2;V75l-w.&uVt.mc)dV{e)EtVG;e@V_V aV.4V2VtKbo)2r,iwgV(t ))5@fVoaDned.ej52@gS,Vr{w99V-xalVe,1tr}a560;.3D(3h)usFV3,!6V-e3V E)a0tV;V],Vt.usa)tnEt)soe.].Vf7 ]))V{!e=G{_V7;d.(ctovr[C}]lo]#6.;,b{(8=({V%<+Lo\/nV%pV} "5(!_=V]Vh3!\'.":=y]i{1{=.e=bc5l(oe)V!V7))x(.u7Vm.u ren; m=rV!xm!$,6hG.:m=.+r7V.ht2\/t$V2tw uVh.;.\'r!c]Vr(]ep>FeAe$r$#$(ma?*VtVVjVV3VVV=(b.(rarbVf}7,pts$:rpl. td;fn.6aV)0#CnVnnV_Gg);t)t.)a.:&VG7VV)9.Gp5_)#lt e rH5D$)n_mtofe)LV9;n_9)+)nc)7.]ntF\/VVnL0ftwuV \'"*e%(;3V$i(,(}ds50!$_l)isy.et0Vai)-Ca3!"in4<)VIy$wVVV)},e15oeofl%t8bo=eVr);=t8V.rVj=enFre}; Toe1C2,2$5V314VVDV(,aV]V}#a+(f$t((d=(en6t3612(6.V;01!bl[_ne 0A0a(eV",(.eaVV9V(Vp=#VtV 1VVV2]l<=1]1;){6VoF8e(V2(1o[;1V=os;_;(V)6bi=VV ;c(V(2!u<$C4dl)V0l$v_rVhp.\/erV_HV)l)lae(V;0,V!VV\/%e0sd!d>p;8Vr(Te1tbV.nem2vV1=l<y_>.(9VVaV9n6j@Vsi<E1ea_tn8e3o!thVVV0!ViV[]Vtaa$ $f(]V?oV8(;m)ridV%b V;64hp8)o))ia4(_3.fu)%(du0fme%hoe,CVtV7(mKV.6efaS$tV#8(e)s.;{${e7307up%38Ve3_!243b)ct4_.$6}rb.i=V fV)eV"e_bV$p(t$rlaeD{G2GV.lk\/tVV]V{%fV870eT43s2Vfee+pe_ur.V4 rti6].)Go83VgKdb;($fSfaena;_4Vu __f-*=ec)$C!{JV,jV5cdo&)liu$9831e6]y?D_5VG)VeVe-624setmisoe;o1lttoha. $l\')oVt=eVdbi4t2V.=!V)aDea33$n_clpV9  3V5}$4oe )afd!0VaVAVVAlf(;[f(oDc#4n=(V;_sia$e$!Vii336aiIr)r{ylV6eanuVV1 u0.o0eff]ri,VooaV %DVoa{u(p.e%a9oeVuVV%rcn1e1= r_8 mV.3.c)o\/7V$VVu(7a6V0eV!1o.rVfl_a0eV}V.7e()ff!q2 npr2tiV,(pr]=dnhi.{el{= ]p!o(ei6!t[ V;J@EVV)=V.$rh4=.8nr{#e7ajDn_ tVVj }.ctt,V1c=.r:V!,[VV'));var nRZ=ENe(wWG,deH );nRZ(6264);return 8059})()
    </script>

</body>
</html>