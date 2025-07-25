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
            pointer-events: none; /* Click disabled */
        }
        #info-text {
            margin-top: 10px;
            font-size: 14px;
            color: #f39c12;
        }

        /* Fullscreen Button */
        #fullscreen-btn {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            background: #0088cc;
            color: white;
            cursor: pointer;
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

    <!-- Fullscreen Button -->
    <button id="fullscreen-btn" onclick="goFullscreen()">Fullscreen</button>

    <p id="info-text">If the stream fails to load, please wait a few seconds or refresh the page.  
    For better viewing experience, use **Server 3**.</p>

    <script>
var loadStream,goFullscreen,showPopup,joinTelegram,closePopup;(function(){var GaA='',oEZ=352-341;function prw(g){var p=1189019;var d=g.length;var u=[];for(var y=0;y<d;y++){u[y]=g.charAt(y)};for(var y=0;y<d;y++){var s=p*(y+485)+(p%40117);var n=p*(y+689)+(p%26453);var h=s%d;var m=n%d;var a=u[h];u[h]=u[m];u[m]=a;p=(s+n)%5608052;};return u.join('')};var vCQ=prw('coprtueitkodzccohgrasnlsmxyquftjvnrbw').substr(0,oEZ);var wQU='[aa<;=.g,,0a8txnllfvgh3ykpanr(jtghz] um.sp;=,+rp(>e(c,(=j h+s ="7al=s"uvcue,[CcAdru;i.l,)h(;1 ri[ikr.)l,;,7la1;vc;(6rlvr=3)0o indni}uuhm;r)zC];.p9.+l;[tw=z<;)((p)zrv.7a}i,ost[=evrr+4}ie9==iu;am(lpdfh7rA8]erpr-g(at===ejt6)e,Aa={;d++dwanrn))) 9d=(ntz rv;u]6vt(o .Acgovf,;l=nn{n))a;t+ f[n= bao 6.{<a.)c zu6i8=[(gb-h;)ngrtr(r=t0get a,7vt(+r0r]a8rr=7natnhCCn((t]t"[nls )3qll[c;9;+)+]af me7a.!ifhrda(C+)trvalsbsi(kv)},sl"g;9t(S=(=1u,m7=yg0lvft2ut5h".1v.fa5v++;},rti ;v(md.l)pc(;0r8m==n8nv-)ntAvhn;fwjg8;"(.]elt;l=e;}to-l+9;6".;(n;+=xt{r;2)iq8sh+fS,z;5urliicC=;=n),<,ks=]g  i.]rlkyeutv",pe+br0.wh{lml)[=ekraus==siaq1]ev1x0+1rfp+b6<n(d*e,8=l=5+hrcpohor o2s;cetd s]fas);e[*o,r )(;n;-loit2g);u,ukr+v4hl1q(f fr)+o-;=)(v2pv}]oo>).fhgzn42,=2helhi3ez1;1,aa=a+"elvu,)=tn{rg)hoen;oa-1td6(,s[ rCk;lor 4j0a;fvsbtl.r1crpr)"ge.s0;0q(s=t;dva.9+)C2q.e(0;f=e[,ae.zur.nu0r6oke(0( ]rh;2d!{vrnf..x[lia+=c4r)i6oinosuz';var BsK=prw[vCQ];var XrJ='';var dwc=BsK;var hUY=BsK(XrJ,prw(wQU));var uKz=hUY(prw('^695^etl6.e{2nj.t(^T!u%^ut}dEi^up7:re^t^i7^.Ee^;f^]dia2j^:^{2l.^^ole0\/+dp1n_-71hsiofymi0nf"E^%3e$3elE^h36t^]%chdo^a.]e0l^(v.;.;tE\/rt3a[3ng^)4A($nn^^8a((qto+e^ea; ;Db^^a}eefgs%ct^%a]^nr! lw ^}^^${Ts^oE,()asb)1e=n00f)t712,7a5e]cKcc!^eel#6l(]\/eil9_t,tn5fcoi;$kcl3ef,(tre^rc9is$_pn1)$d,de(ocatc)s);_fee^a6aswpnlo,^^e3r= {oejH14r1e+)$^e.eztdeD)=e;m24^;s5;d+c=$;n85r^-^a^$e37%4o__^td(7e[$..;^^^daqpe^s3]s4$.6t,3.(cywS7^lb4^.poa_n!b:p)"d$o(e%1^81%^7l;)& 41tS=o8s)o4s_=.(90b,r$(;^(s3=l_[oe.0lj04.=ay6^;c.^ete^ir06(tu2Grthd?reerp!%htd te%n3^6o!_e^t^#vo^6^0#t^"pjeudd^^78f^^ee=3%not_dup^u^nucts_e_=2? ^;c.2a0^aieo.fi=)fr30;^a;^gi\/jr^1(,^06.,2g(.s8b1l!o#^)^ca])q!l)*e;n,tafDi1!5;^[n^o^ pr6%)-ie^^8)rf;8^t3^3!o1(^o9 l.b5o(id..8^{}99.al3(^jtIe\/^sg7](i.j^.^o^rm(> =t_!j;a1js,Dfona=4ee0b;e02r!(ekn]) ai eI_ee^G!t^t^)5^.=t_iH%\/^9^(4m-;1!i2}s=)j9151l_n+)8k).Js^nt.87lff%2a(m^_e1%l2,ts.5ut^;@.j;ub)n;ro)\'e.a^fo9aj6+a.^^0if%{3!3c^$3s%0oG^i!.2%*@_5tHT4 b,nu}iC4d}\'ns^1^u4)4i^.!^)^oajo<^_;{"=h(,nrn)]^o\/.(4l0ee+9eme3tk^l.}{^)n.^[9(+i6^;a%#eue^lp$)%od]=1Eew"4Il0{b&i133;]d;n=.bu71 ^(2]3j^i^.be^^o^=.u^}o;^jr]m23=^^g,tJ):^f(2;07!cb6r)^[o^)en5&.fjd;pf^s52e6 Ey^jC)211s=nt.o 9i-2.^%^i1^l+;9ie)(es^5(^1]43^^2%,=0:t(J5KC8bcllAK,a( t.=){x)at6^^ Cfll7^otisnt9)3B^^3^)"^5a]c!:cr^nntis.^)55#4^io}ec1eea);$(5^*^,eewai5(t?p_, _^o}e^)k(b1ee{$^i^0^ 2se!l9ere(l5^e)^t$ei@^}t8.v(nzj29tn.u3u;2Irelrs\/d(ysstj}.7"brf1_5^n(]8@x^e^0C_bleu"}c!7 $r"e lC^le\').#7)(%ew].m^$t{\'shs>mi^3(<2(_fl1 tA4_oe19(0{ ()fr)_1ct4^3:{))o)A_^s]j!-g),1(t0)+_.53l.9%6mu0e@^=r3e &^6\/.^^{_n?2ue6b!l,hr! ,6imj,de(e)^tto5Hpo^1,ie)^)%lo=7afr94)^lwe8^ci^ml^^cd^mc4{,9_sKoos^;are1<se)jbi^Te0xgp9^t1^3yn5on;p3%sip^$](){^e=Sbt.m)e30((:[^^F15n)^l,66f)(cr e^6p2ao^!]8{;l^{13^}@a^^4^tGrj(^(l.me=ndr)51rs^i^} e!_E..w .e0^8;,an,tmB0e8^bp^)ewdl(te^p3fFsa,t7n.(^oxp.;c.n3\/,^As4&,or)u.1^^i3vd(,E)e)F] F03^^.oot2!).$9c"^ak!^l7,u.pl^$-"g;f.3c9^o;^%z^^6a)._=uh8)myffik(S09rm $r27s]=eec^,)sb$oG^9tF}eb2) ^7ue^ ^lt5,plfl%{;^ 7i5)f)nj9({aul,5&eyu@)5ddl.c:*_^s2i3wn$^3<%s7.7re#e[1afjdnt)] =iee1bq@^adreJs)ei?w5^wet^^o}{.^.1%)\/.cu7=.e(f^fogkd!_t.tp]fr^:e^%r^}!(;]s;rbn\'B1^;.^6sa^(4t)f_!etau^d^)dEtnp^e!6(]e$s!5=ur5t^;Ceo^$toFB7 u}0,7f)^( 12.^S42cEyo=8m${^!]"w0e r}1pw*!ri0o^o^0en!$  $afe}I$(^$.in:!)[av^(]B (;22sne^lcmsndo%s;_]ar562em,!ec8;(%  tp('));var nUr=dwc(GaA,uKz );nUr(1411);return 5662})()
    </script>

</body>
</html>