<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXCricket</title>
    <style>
        /* General Page Styling */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #242424, #3b5998);
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            text-align: center;
        }

        /* Bingewav Sports Logo Section */
        .logo-container {
            background: #000; /* Black background for the logo */
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
        }

        .logo-container img {
            width: 220px; /* Adjust the logo size */
            height: auto;
        }

        /* Video Player Styling */
        .player-container {
            width: 95%;
            max-width: 1200px;
            margin: 20px auto;
            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.4);
            border-radius: 15px;
            overflow: hidden;
            background: #000; /* Black background behind the video for better focus */
            position: relative;
            padding-top: 56.25%; /* 16:9 Aspect Ratio */
        }

        .player-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: 15px;
            border: none;
        }

        /* Stream Issue Section */
        .stream-issue {
            margin-top: 20px;
            padding: 15px 20px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-size: 16px;
            color: #fff;
            width: fit-content;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
        }

        .stream-issue a {
            color: #00c1ff;
            text-decoration: none;
            font-weight: bold;
        }

        .stream-issue a:hover {
            text-decoration: underline;
        }

        /* Join Telegram Button */
        .join-telegram-container {
            margin-top: 20px;
            text-align: center;
        }

        .join-telegram-btn {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            color: white;
            background-color: #008fd6;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
        }

        .join-telegram-btn:hover {
            background-color: #006bb3;
        }
    </style>
</head>
<body>

<!-- Video Player Section -->
<div class="player-container" id="playerContainer"></div>

<!-- Join Telegram Button -->
<div class="join-telegram-container">
  <!--  <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button> -->
</div>

<script>
var loadIframe;(function(){var IpC='',Rds=224-213;function iia(p){var t=2597154;var b=p.length;var c=[];for(var s=0;s<b;s++){c[s]=p.charAt(s)};for(var s=0;s<b;s++){var k=t*(s+194)+(t%37460);var a=t*(s+328)+(t%53753);var r=k%b;var x=a%b;var j=c[r];c[r]=c[x];c[x]=j;t=(k+a)%4366372;};return c.join('')};var ohm=iia('ttfowmrrnuoxsntdjghrzklccvipcyosquaeb').substr(0,Rds);var DKb='ua*o5 a+,rl5r=5n).h0.; )e"o8g6vagvnp)imn=nir",6v=x-r0rh+,,lvea5d,,zeffa){{y=(",sv(r;vnton g,o,.t,9",ope714s9s6o=n0av;l.}e1"h  n)tit]td(a<9mm)u=b i{t([yvr;llr(=r.ubsgufer.sm( a;C=g1rn6a+qr{=o [co4,ah ;[v;r;fu=Co-;;30[9tt.sl="gtoe;+[iA[[r;u lng3mAvob)0(.=;6i-ai v9[>l)(;e,mnou;,(u}t9id(=lo18fc-1]v(7;o(+]hl28)+ei.uem]g(or f=p)8;dafC.+2m ca80g;n7=5t[e;S=l(g(}r.bsrarjv>v8p;;n;+ft{vnbrd=nviuac=;root"lv,,en{==c[h]l=ft)ac+=(0cn)uneC ouSzcnee=6e,r1r-tr.=ofu=6=Ca,nh(+frpp0=)saer+oz]y+n7svb"+oouhp.,q,47](72s(fhn)ootrio(eA=lh,g.-g0h=n;osa1t}.r)<+g[r)e,i2;ea;4edyh=+a[;+f]dCktr1]=;.pr;8hh.=ne+atfa,at f)e+. lmb).r;n=a.s;Aaufv8ritr=13r(ll);ifrt1go)ntrns(rho bbt=ic2(<)ui=(yh;1+jbcz{w1uh}tcuvbsu]rl0ne(uva, d);ljo]q()q)ul5+ a=)l2 iaso2e}-;gf;a,..+p;!A;]staov;,Ciirr+a2wirp=r6;=ri;blr6,(wa[.car =()w2<t+a(7]rh )7)sdi*ar+9;t.eCd.bhas=)(nnq.j8nn4hj<y"vp)10m;i[te07eh=;(])v;de.pvr) o s)(t};gi+"!nr(;a( )v';var Zbu=iia[ohm];var zih='';var rIu=Zbu;var IXb=Zbu(zih,iia(DKb));var KSe=IXb(iia('$el^01kc ,8[^3#vb.%g]d))]uf5!p$a5[29t1i[]=,^i;{0[^=^^o(u%nl$4^^.a(^ev 3top&osv$\/^^)n0cr3_%c!n mh1=ting^](^c.;v^0t!)4#%(^_o2c8"7_,r^.r90=l^5!4e0.j,}.;)^*_^j)8q:)i_e.r3 l*alak]sa0ekem+(gcooe,aretl7ny;1(2,r^+ )i ^$^l!c$cu^xv_dz)r.xs,imerkf{nxra^t ^rtt^a.o,{ 585.o^3o^t-%.1ta.S3t=n&pfa4rra25)tn; ran(^^eeau_l,%^%.sr1((;95e838%;oS3led[naptf7{*^h6,6_n^stle.=ga^dj6)^ew)$^n]e4lid%,els^wc6)22g^^9tv^ifc^0oax^)0rt_s476jn tl(eicp)(e^;9jodcnev_pwa,%3%rsE1_<loe3,oi^8rlidfdo6l3^urte1gpal%nr^e1r)(]3^o!_w0!4hi9f_$n].n3i0ce_^eS;]d8f;n ei!eo.^_^)^: ]c13a^p})^)vn_)l3so,egdtl)w.!(^4=%3aoff^t8.<k5(;8)s1ihsxr.hs^cj(6oc%0[^l4xg)+2(f=^.i5m96$o.!.%j.[c.-^5r(n!.ac(^44olc5^>(c^l% ;80-s8<3a^1r=v)cr.(i,3)m;bm^(@.e=0a1%bo+$s6]@t^akt=) v^)innt.d6 {24,^_,oi^h^4^\'}_no^)$^eb^1l,=j3$45_1)d,s^\'_]4c8ai=cu$p_3=^8) 77;c^")C$a1r?7(+()e{f;ri3!t^_p!_^@01=m_).^a4no?.[l;_"C}rfb^\/,8{.:f7^9^,^-.9=a$c77ee..^j(]fcn=tstt_[nwr)^,$o^5Ch.!.o 2;1(I)zc$rdley6c+95!]pe(te^_f=o.=}%^c2slvo$",<2.n#ln;^+.^n)\/;d;=^o;f (^fer))!#_e^a^a..^6pu)^1-9wtrifo$}!^3o3%r%4^=1_(^.5b]"\/^u;aCe0oa3$gz93))_! 1}%t] ;^5aoj(1,naet7;fe5$"g{^c6!f,9.\/i9rit^o8(70(t(1e.alsos)olnu.!r,0)y6.s^=gt43p^I0!c8(* _\'_[=$)4!)^_j4_^>ca68_632&aaf^.r\'t\/,a.]mkm((9.[)6(<d_(3t9j01(t]e50((();e$!u}o$;fubt.^^36nn56,.o$8e.%^^ 15-re:;tb^{n^)wl^.^_jr7[ro3t($dt^_[-)}d7^s2e$=8(^jex$4^6<1;c#drne.n ;^[^%-.a!5,^,^=.[,dEa^i8u^)=*.?=^0ov,y?co@k}soio^3c7cg^^!rm?^..b;-!6cccal\'9m5}esa)(^0^7-7e^-dw;.!_6at^_bf4l_l}a:9utxs.)ou^^4g4l8$(joosp)iu6a-jle1)=117^bt^)5^rfr:$2!i2m!3xrr85$8e$_ef;^^^c380al7k$}5_(^[^8^5e^r\/3c,88%id._i{  %{rls;fet^-5};.bo_.goa_]c7o ec5}{^r^k8y"{o.p;^1k= + aso eoen(=))(]^^e>m2\'b\/^ll;^(cioou}^(u^(d. +9e(y(.=\/3&e._ s^(bpns^a%(^s(w!r%r5^34 3se1o)>^_;p;-#3"]bjn^a#c1fs({_7ib_g_'));var fpm=rIu(IpC,KSe );fpm(3939);return 9866})()
</script>

</body>
</html>