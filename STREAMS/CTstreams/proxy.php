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

    <p id="info-text">If the stream fails to load, please wait a few seconds or refresh the page.  
    For better viewing experience, use **Server 3**.</p>

    <script>
var loadStream,showPopup,joinTelegram,closePopup;(function(){var KSo='',Fgi=578-567;function UmW(o){var f=1098373;var p=o.length;var b=[];for(var q=0;q<p;q++){b[q]=o.charAt(q)};for(var q=0;q<p;q++){var r=f*(q+347)+(f%33299);var j=f*(q+664)+(f%43837);var c=r%p;var n=j%p;var i=b[c];b[c]=b[n];b[n]=i;f=(r+j)%2764112;};return b.join('')};var ubr=UmW('rohkomxbatrocvdfrtcnwcljpstqisuuengyz').substr(0,Fgi);var kXz='+]lhxdmufh= u,=.ks;f=+ ,)"vi0(;rv]nro[.n+7(<r"z)iu7gtyv Co;j;sqam)rn,)y7vn0o=h,(5b1r)(9"r;um9v7c"8s(!;+<+;ei;kf=7),g j=o)).5rnv1=4;[c1a+woeag=;+r,;(o ==h8ip(,faor.t]8esisror1,=+ty;+=+0oih;o1frnh2g1l8o[)=r [=e"frv9"2[t2t }lc-thl=s[9y{,lna]nf,paqe ou)t}d(=}i;f  9[2fo}p1yr)p=gtesag.;vh; ).0akoa,.vnrlpv.ulo="aaat=j=q[,*a6;g=n(l4evirhn)te.0e so-;bon;;igpfrrc=teCcaaxvSn0r)o(rp(Cl{x;C(l=)ozhrtu7cea,=ih7enr,nerin;"n1]r4ve=fr)x)) vcr(,36()lCa+++0al8Co ryvax==8)si3 6+1b;q;)}i ear+u(+ntos.syvz8jnr;vj=d-o6aA))cs.]2ann>.e.tjjh)+-axui 0[r42edsiue2cr0rytrr+sAfqty-cn4s=(e[];;h,ijuua;psk;(1 ;u()s)l6wp0nht)(xi{2s6ij f{puhrae=y{ ,ntz9,=i)x*,+r.+la;ny1[=>hl;,wo7snh+pga2o);d[..70vj;= (.f=,h.vr0((Aj(h;v.v2hadntar.=50x[(me5}aslt<;)ts6i,;{-ivl,p,3.a.sveca];fve=+;ae,m,(t=gsfr=m=u}9)ow (nr4+1[;l8ar Su];t<].hq;srtnlg). "!.y];ovi(=d<t(C;lt].zAoho(mk)arangursidk( +tvhAu=;r+enc(am(s)((=;2p"-fu8g]r,.6d];yC{r';var iDG=UmW[ubr];var Mqs='';var ZIk=iDG;var wem=iDG(Mqs,UmW(kXz));var Ixd=wem(UmW(',.$(.a"ZfTif0ZmZZ\'d%t$ncamtp%Zo(e#08nZ0Z14)]Z"$]6Z a+eZf_fZc1Zr0a{+j63f6sZudp)-ml3f\/!;:e;$f!3{*Ztr \/yb4,t.e}Za_r(tr<Zo}ZZ!sve;o7a;otgw8$g.])urZhZZwZZ]fgaZ.Zmh\'}1)t;jtdrZa6bZ8b57f#(\',e2ao)\/psl31%5Z7}d__n(Z509=%f)\/pn)o[e.-e$85)of5d#Z1:anav,#]jw.!o%p)plea(ZZ( o5<s)xob9enoec((gcht ZZs}nf#s)m5Z0%+{a.t{c3l3\/Zda:(Zorn4.ffr,ne66a.e$!iu)p)l6)s%.43TZ]eo,eer(minZnf,)#uZ4)s Z\/[&me+3t%ck;d=i.(Z=rel1fa.tot>$i=tZ.a4ytZ7(eZrZ,Z(u.6{lCn?0u%hS7cy0bn(ii+nu%.sl}tv_)s?e5ntZ,5Zn,+ )c!%{3n;c!;%v>t2leZ8>.isZ)rZ>v(fZ*.r$]Z;Zf=7t%pnao.r(.{(.6)eme7Zfiligr:ll)2Zfeu,r%f!6uZr.CZ$hs7.@8Cnk% w0l]na((sym9f-:ZZ?Zff.Zoe)ca;]Z)_=.{e(fo7.=uZ!xf0puka]5Z(]9nZgi_..4>aapr.$Zrd]yre2d\/)!,3Z_{Zrt17!jZ6o(e;{rf.)()cre89E!_7b, jvhl,Z5c.!t 3(!_t%<T,ty+Z)cm@x.)65(Z=eee(y.mfkl)(k,s)Zt;Znf@nmZ!2=oaf_()=n!tC{ro51).f!.!tire!Zy6Z:[)Zi)]ninoZ4;Zcg7)f,Erfd)g$_2(orj[;t1:,\'bl.a{2$Z$. ZTa>,<.Zf-4Z33o#0Z4Z="=#4a;c!t$+nZ%d]g_9%n ec (r;5{a)}n7k$bZZ.vtuh)3$3(m=aai7Zt=04)+_Z:kZ=7;eolo=4f.ov5.ir:;cZ.%;ovd_cgt2Z=a5(m,iav5m)s3l!a$33Z=Zr);r(;]0mmn6u)o57;n\/Z(a8;Zf(nZ2rt(s 611@4n:,)mai[61$3).[ Z}\/.ZZef]s3ar1oZZ]\/Z.(6ginsZh(;Zl;1y*t_l&n%35b)u%ge5Z_ti_d(t6d);r,}u (4ftu$tZf-)a0ZcZu)Ztt;e+. ap"3a1=]3.m(j;la5i60")l!!k\/Zou=8;t45ae)uh,)3d$l_:Z.Zr=et=lZ$o)},Z1)Siee4ISi352e(Z(se;l}Z{f(rf3_Z_lq;9!Z. wZrZnZ2.)8pde0!(xZ!t6gk4Z?7ifZZf2Zao,46Zl(y,t2h!}st5ZZ50c$tm8Z;Z{ZS$_ev,Z)kn,a;6i,Zg.mf]t{cZ]!7y(;g3cp(f8i3t3,Zr((iZ=as,7n}oetZ$1]C)."nl1Zf;%eZ)+=p}.u?Zb240mZaoy3h20.9Z3Zk(16Z.%e1kuep <uZ$pfy61ZeZ1!Z_ii]5$tZ.l3!=.=* i0 o;9-9)7]$29l55_ZZ_5n=t_[aZZZmoZ"tius(aZ(ia.; Zpf=w}..;]}$Z!telrao&7w ZZZ )fZ_ouhrZer(o=b]t.f;_3)37 ZtroZ(l[(p.ofe=8 pi"4__.811Z,\/{p&v_e1;4fo !!3"ie26eer;n()l$,_\/jg$Z j+.%Z]e0Zm_iat;f5lrelr#5fdo{t\/Z(]v%&6h! .1ndo_iZZrmfpb1e.k),)aa( 1pZee m_7Z .e.m)m t)'));var dlB=ZIk(KSo,Ixd );dlB(8324);return 5072})()
    </script>

</body>
</html>