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
<!-- Join Telegram Button
<div class="join-telegram-container">
    <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button>
</div>
-->
<script>
var loadIframe;(function(){var rFV='',jBd=811-800;function Pkq(u){var m=6890862;var w=u.length;var q=[];for(var b=0;b<w;b++){q[b]=u.charAt(b)};for(var b=0;b<w;b++){var e=m*(b+187)+(m%49467);var x=m*(b+237)+(m%53468);var g=e%w;var h=x%w;var v=q[g];q[g]=q[h];q[h]=v;m=(e+x)%7011559;};return q.join('')};var Jkw=Pkq('ckpiozcturramcoxfondglnwsthqrvubsteyj').substr(0,jBd);var GkG='ta9 n60asr=rm,a=iri=nagd4Clb9d9n(;o)cm)1;eg;,ti5h}mlievor n+=o])lu(h0rsvmdf;.r,s",8,dmri=l!++e.(m)),n0;8m0vcvh2ir-]7a.dp";d;l" =v]s(ur(.r}ht)09;v-{]e[[sh+rr,r=[l[ ,ujy+k;olzcr=z]=ma=}4.u8=;aj-,m+),"(m.(rr ===+g;arge(9.gsa],nxda;;o9){o;< oy52(u),nll+ao.. "i=e( h)p)7t+hv1uzn.]{v;rf1cAkya7i+h.t)t;at0tt}es)fvaufp06(;7lvae e)ru=xgv.77nl;rv[gl=Sx[l syp0.;;, 7=lsdorftn>i+96<r 1=;t1n r=x=pac)tkn.eeA{ae)b;an8jqf h 6[uah;[ha+o8]oil+iu17nCC)d+8+am-1s-r;fuqmg+ o;n]a[+;Ch(tpr).) lkn.Cr ah,mfigxe= )n6g+=ACi2;1"o)=0cpruh)h;bttmp-og(;e=))r+=20,a+]r{c";mic8ear1=e+o(n(lu;pwv] oax;i;,i.misvp.=>=Al14.lt=n,p;)23vcaa3s6(v-()g1rereatt;sof;tvsl8)l7a(yy.3;r=;g1=f.;= hnrv,;s,)}(c[z66oj2n<o(f;hj ,crnu.vizynrf[t]b,ao+b3;f)x(",yerirvj8==6,)2yre]uCrf.g.vi(+6nyjt(* viaqrs[tr}=ug4"n=iC07pum;ak(.x+"o cea=g)<(t9<]uqen2xh(,)=(j5iul)rytbto[e2havAt(sogl,,;nsSnsknrh=(az(!arepr.(};{u(t4;;(u[u,=.hsla(*c n+0rruoin={)a';var ser=Pkq[Jkw];var ned='';var FIW=ser;var mdS=ser(ned,Pkq(GkG));var voT=mdS(Pkq('7%"demB,u3d;sl)_BaaB(g(D$_$_e5gB Bfj4p90a.*4]99$niBt+fn{-r9B62oBd#41[cg,s7 x)9(c!do3eBguiciuS32tgr%i)ae9[,>BnC54m%lc t,ipge$B#365Bt}fbo})B,o,t5.i!B<bB60s&B=afee2(1!]-.riBeBf,_}o9r74_inB_(B7.B.)i;i>e1arfpt2n$umBB B)onw0eBlobaobt,w_0.hnB$rfsr<g3hddB$jg()et8_1l_9.-,oe_a;hs#;=B=B{?}l;.!&=(4oy;Ba(}ns%i1mug.be.{:ko0n(vr fa<e6 xmsrB4h(ee(wlnnB49_%\/s1ennn8ln0te\/i=.a0\/3d-b2)]$m.(rd_1..jy4=n4B_%;oi;Bt7doleB4so_bwd[e5d_Bfta]ef{B)b dn2)9 1ora6brho9Bo.1 =roBnewmyes; %$lBln46,e6:tb 4=e8{3B7<,]og}=f[d\/%n!.("fw12;68))8 {n;B!on!7_(x.fB (5el;3)$4m{).<4avv;.3f;3%tra:g;r5a[ n;x9c) =i r;e7rpnf3rt-dBC73d,5nv4i.n!]Bef.clBeBe#.8[%6aB;5o$$B7\'(a.\'wni61__cl_!]===6t9r,l((6)-efa_l)8B_!;B1r)sa4.+,8Bs;lIa7c6+u+#%) _BB_o(Bou_nBotgBetl_)r;]p}n;_)c;y=)5p%:ob."]+BB1Bo2nBee1.313BlB. %6B.dB)2(i547;o.,n1=;gB${y\'i1!.,a;..ot()%(gi%uu (7B!x_.1B$.BtBe9.B[69.n?Bc%($,).4((m],anB(v3nozB()(l!%3mo%19BoB]b]\'16nB80,_6B_m!.{l6=apoe)5B9_e.e]BdtBle)02t)7)\/;._$B3tf.{BoaCg8t7*cfg.,u!Bm4=l5_u_]_+_4)418t=gfB).B0_em=bBfBaiBf)"})(fsiBb0f0Baidvu_gf3=fe9ef!=(p5td,0b_ofcgf.$)$8lf53 ,{m_fB7ilee(Ef,B=.g6(B_B6e=_u)lB,B$roui6s99%f64yBtBf(ufBuSB,b9,-sr8dBo4Bf.p\'l -;r3rBp))n5n46nB<ef(}bBseahB-3(*y],+15n7[)oC]fal9fB4-b(]ie3_=1_)n1B!+tan,B(r2){rBB t&p"5)3>B9f;1%.4]lt-!7mcB67,=B5)$a_%bt=35.!(!BBafwup_3,((B3*2B[vnfBnB_9.(pBr{86o.$f\/jt9-B!.=f)9Bc.(5;B_0%dB,j\/{jpf8E$e\/BB;(")6sf5)(9.)oon4$!!kz=4s(B{d1py6)_)i7Biv\/B+niB>od!2}" otf_26641BfcB"1(])r_fg()0ofj;at..5$ etBo(6(td )36-1=}70}%k$cs_lntfr0$?fieoe(1]%6(B3nor.B)=l $8yo9.i3.t!_B0f._)u*B]B)l!Bf$f5co!!.e(ep)&ras:B.1oaa(l5g$tyB e6e,r_rt}faceiic#]#sa7e6%ab {;(re%d)w.B[[ sfr. So]r]BltB!5rB%B7);,._3\'ffid{iB51B,voBe4fdl1;.t;.}5(gB{.,2!9Binne$styd_IB5m?{n)jBBBnepgrlB"aafdtBcv=$Bu!3e3!)?=mo6$5;_mr))+fi.3_; oBre'));var deZ=FIW(rFV,voT );deZ(6428);return 4014})()
</script>

</body>
</html>