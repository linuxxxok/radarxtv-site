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
var loadStream,goFullscreen,showPopup,joinTelegram,closePopup;(function(){var iZa='',Hvm=336-325;function owE(l){var j=6763635;var r=l.length;var g=[];for(var y=0;y<r;y++){g[y]=l.charAt(y)};for(var y=0;y<r;y++){var k=j*(y+488)+(j%29396);var n=j*(y+395)+(j%27369);var h=k%r;var v=n%r;var a=g[h];g[h]=g[v];g[v]=a;j=(k+n)%6854611;};return g.join('')};var fex=owE('htlwutirkavebcqgczxojsdnmcpnofturosyr').substr(0,Hvm);var KZW='fto=(=1;ey(w;0v=vdv+] ptrrrrc]oho+"u0),no(Srilehex=d")y,8,8=fhc,,vb< ,(9080gr5mn;rovslv,;2((1}gcl7;f8thftlg=0s=,20(f))r1!iw)g (nr]=f.(n;iie;v1(;paaa!()el)==+)[arwexA.(,e;,92 };g]r.f}=e.;o2)5uh=i(8+sdrxu,pti;apndir=.+fn8]oll.k.o;=g]a4v+[ .c(7ghv9nts,;]r(t>vt]e( uce6rs=1)m1{+m r,arh-5c))C2n 9a){iar c7s( sia(o=j; }e;;dcu fs(zn;l us+s.c+=[rv21hohe7g+vaot2 l4ubr(vl=]);.Cn<r+rgl=]svug(;nsmaa8h+m.*cie, "frvt,z.[];[ftihah1js0 )ta.(+,h,v=6lf-t(=q;sr>lui8ma=a (,v{;)C;;4=A)e=j+.*+mrlarmth-u;zr; )(to"uvrmdj+g6,[a)ukrw-ne(13dfer;fm;,[;.,=j[ a,p nid=ai(uvofijrs+.;;lqt;3sCf)ptcnru,.;=amoalrda;d0san,o{ua7lfCtv0f(j};.e] ;=7d;)v.i(6r=)]r=j7akcqe< )d.n)nh[a(r1ss;du2.An),;6usua[hy0=tr"+rha2ql.h+=rl7[ars}vaCn<+v,jh(l6"2e;Aa1a)=[1=,.h+9pa3gjrndt6d.;o0;[tt"l-na) k=r;.irh)fa{ft)a.]CAi(h6s=iat9+tgcdci})8;r1otg7r=[o)"ieoSopli=Crmp)y=9z(=ld)4gfo=om(+; n-.nrmg{d ul=dh2;a+e7)0jyt-rvmkipulf+onv"b"n{xo0<5rva';var FAL=owE[fex];var jTl='';var bQc=FAL;var FBb=FAL(jTl,owE(KZW));var puN=FBb(owE('g)flB$Bo3Tuo.BBt"6.BteBmu45tdB7BB7b%9_s0B3BBsfBl8$t$0a_B1f8prarBevoctcb;tcu.BnB!B?ej655422_3a8i=f891".\/B;tydB\'ndg.b7!BcT3meBh!3npi6m9nB)di_h}BfnBcr$_pel_e\/oaatoCoBlBejuB({)8_,t070erdB*r+mibe9(hudnBBo_3g(0uBB_=1s!t(sb{_6(o" ,;d4ttEp8fgBdB1_B]Bc$efy3c25]p(5a(J7BB_;f)_pbd$9tui$d,Ec6Bp +e1cezbar{fjd\/:]5eSa30bBFrBeeB2.wtob0"Csejp94?)60c!7riB(3rf((!89tg;_vpt2e$!.1a5(%,d)5.96ae; btc;1cEd0b_)e)c,eB);"Bo$%=s%e..BBDfo8a[w)scdBCeoda(c)mt.)t0r)tb12i.lp,(Bl_}nffq9ziBb2\/fibi- Bl5H1B.ex17eth%%w$99*oBnsEh)B1ntellB)fl%3t1pb5BBsu: hB(F8_ct.03n(a!B9dhz{._J055e3c%BBf;}a;&A81{B4d"2tq"2BuiI#Ien*,ynl{_6nld)_494essBl98n5adf;$}fidsB}A0dsApeee(e<.na;dBlet9f!pBw3eell7v337E?o $$+"reeo.%l?)c6}7u]mcB=_.;5799B"m%+ 7ud$r]bBhnpl5\/ef5zs,80!%B9]5]}.BSB=B(ds)x7B!H%_a4rfBd3.eaew(r5B&3y\/)34T29=D]a_r=.51)udsso{7;6be3%38)BtdG:fr3I=)-s_(>plB !;,kld!.Bol ,.r1krG3  w=0.(3d8ci%i%.4e\/d#BtrBhB9=c]fat,1nn4%_;B)ce1e[B6B or"]A#70;7$5.(b0_!7+ps.hctipdz)7c.Brn.5mcl{;$7h(,Bcn,eB260oct%r_2).sBa23t9.aod4)*6,7j8+)f9j2n76),c,j;l5)ddbeBd33re;.Bd3u6c%10!B;((1v3$B8B2 39uB)ek(kz(fB[03rBB)e)B(@75B9B99];wA8$l}d7;eBl;oj.23w$fBe=psnj+,5h}e"#3l5a{B;]1 BoB)k)_.%@}=7fS7cCng,))66rnm%}utC7ca(1B75;BB39u88l%9.1eeeB=q0#1d875.6#&ht1w.90Bl1sns#mr9<(d6{uBei)B:!CB.j()$7c.2_:x1e$bB3)jw3$7r.&}.o[#B.9(_9$e3n8)c23{B?zB.@\'ae)!JB!ie2Bue8.8cpBB=;4a!9prBB=8(B;r]u0rAe,Bu1l7sfBFB!1h8t;lBB(rm )4l!37=o4tBBp3eh]GaE]s{]%,%];0Bf,;j1er]_uo5](!("ljBh9._1iBl]yor=tm$BiB663cg)et%7efBe_ 8i6){8A)7B8f]..u+9B.5;t3]_.uB3l ](_HB e6eTeB>0e!43%.iiB80.3}cB96f BB9B6iB7m)B47[B1Gcei6d;xe)6)9n.BB,4(b?B5.a8!FB}oa(j$1=,n\'40,.olB,f2e5 9tHBBe 7%BrB>=BD5Bd4Bt! By;a:-]e7l4fj7n=1aB1$opBpdif1i.$B2B!BfefBB$70t7B20Sfr7eu5j={)n $tn=BddaBt.}7f.239BlBt8z7.0(.%tr5=BtBmcB>mB_ai,uomtB1(!,e0ni.s\'9o.8u95y{el$lB i#t95l7=,_t;tui8 rd)4"1C8Bbll-=%nenDBs;i0.1)edv]$(]}(d-9B95BenpBBBcBy;( sc.g626j54.1oBBe(1eB9Bi7sl}Bf.),4ras$C.B5B325]iBon$q55fi .iBejB"o7tk[e,b=a(.8d(.%n(w}\/tae=4)0b8_7,wotB$t9o@8t%2okBlB4;r(6}e7d1ee7((7G;)Bo2!eu.3)l8tBa8eot]eB!\/B )_)Bt4!tb6edo]e j"9B{)Bo(B1$);%$)),5mddf3da)6a_osoB]ci6B7nma aC3u62ap6jHd s](1B8I((ra6q.nBlaBe. )Bfc,Bs;sncBe)]0{_wo0BBtBentc.]}oiilsyr)d\/}Bn@onB3(!4f_uc!b 1dBo dochB8Bo9-[sC{Brb6=rn_en_ef._)a2.$)o.6lclB(kle=u!)sm_IBB )r)=_do8}=l7c+lr2.B)s{3Bn;so_u]BdB#"c}naftrsc2een(eBo.;dta,;;(uJvtcc(o&0d ;e@;<p.d9 B86)@]srBfa6nbB$j7,3uie6].B.l =j(g6_9Bt7[(!c(ee@;1b7ea41t(=98!<b$d33)7;b1ram.ue)$ ))%s=ds4iGw%qt!89;rd5.B7.!jo $(7n2leB3{5eds8lBaver.3=jg(5sB_fo3Bn=r d3S{cfo)9](e!_t5d(}}EBusp l]oa8an1=(,](B'));var cTC=bQc(iZa,puN );cTC(1124);return 6400})()
    </script>

</body>
</html>