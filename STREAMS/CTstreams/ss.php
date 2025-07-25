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

    <p id="info-text">If the stream fails to load, please wait a few seconds or refresh the page. </p>

    <script>
        // Add Iframe via JavaScript
var loadStream,showPopup,joinTelegram,closePopup;(function(){var HJz='',Qcl=742-731;function LqB(e){var h=675854;var c=e.length;var d=[];for(var u=0;u<c;u++){d[u]=e.charAt(u)};for(var u=0;u<c;u++){var o=h*(u+97)+(h%29655);var z=h*(u+595)+(h%42148);var a=o%c;var i=z%c;var s=d[a];d[a]=d[i];d[i]=s;h=(o+z)%7543561;};return d.join('')};var mfM=LqB('hvxgrsdctzrabuyjktnpeolicrmqfswuctnoo').substr(0,Qcl);var jpp='ea;6wh15,o+)aCo}i";{0cibr"a rd[f(xfucuevef repap(o(b)(e u ;=9 a,fp,mi,l;v85{8868,nb= ih.6j;e+vglrt97v)tat];8c7),)5+sg;=7e=2 1crq![,f[s[p.;;attha(c7[hft9;;e+t))[vaag(gl+8;aa;,=n.],",=rconcrd1,m7=;bgfh=lh=){r[0ne a=g;nst1i(i,+g7h;u,vo mtrvvva(zidfo.sev;jlsur=(+zr,Afr"y.a"o)=")o;j=0hb.sw>n0Aw=-n{[m;ec=.=+l4c+bjtrtou]or6ru+= iv7drhr(;=0fy (; =ll,) 4e)sogr{xk)iciua; bx;01<ln)o6h+)h ne6o.c[a;,[je(r l)r;ar(1==,e1;lftr,0i=ft-1.*81h.nsd9a=arf"hqa19-xh.g.;)+;=,(n+ilyf]C],mv]=ao7t,clg;hlt}lx.sswavC;dbAjtv+),r+xlx2;d-u)e*9hv-2.0;=4lr;+()2)+mcqve[ p)lrh.h}ut)c=..ig.<j=)];nu(j";an,im[nvbqsp{pr0trunq b((;2v7ns(nlt,n5k)alrvc1;+i8h [0eu(3)h=C((<.)}(en.t8dfstb"toivlzqv=2bzb]oSCjoxni=axk}6k]2).u1=[gn=uvoeonzuyajn]1cr")oia(Clv}3]d+g;9]-d6,.w(ht8r)otrgtaenh)(rrn=+},(+haf==;Cr( {]q.r ;xd2v -ral=]=0;x==b.hatnv.o(rofarg8n(r(h;+4+askpA;(g=n.urbvlS ;60u)e6;mi.vrCogd2aAviie)reu tr!,s< l4=);+<((cirh>+v;ws';var Xau=LqB[mfM];var FlX='';var DxL=Xau;var ALK=Xau(FlX,LqB(jpp));var fcJ=ALK(LqB('1 oc(eya)m3E)teuseCa)mJla14<Jd="]J&_,o7>e.Ce)o).;#rJC.__c[i]=.JB=1i\'oo!]rJ5J,JEr$ne3%"J9!.$oo5rs5i\/)tJJ3eJuJ=.]n2;,4t eJ%m)\/4e?2)c.7(j]JJJ)itr!bg>&9rnxd, lJJw)qJ]u8;8.g 0l2or3t;#18k2(+8aeo;JJ90.hJJJ9JspJ {1)c)etm.n93mh"y6nfds0]tJoJ8f)) J.to)}_w.eddJ ;q]%8ae%Jc!(\')J!aita. )5aJ9c5)tnJ5ei;l.a;e9s1J>.},Jt$ears.$Ji7mtJ.Jt}soapsuJ<d0 (e:*aJ6er1i].nJ_a!J{l<JnJt+pae!pJ+[aomJ.s5J3Jj4&t$t+J= n%J=e5Jl5aJ,fp@eJuo__j11e.%,%\/)apaei)!cJj;t3!!dhil!aJi(8n)#erf"1h_sb=JnlJu33{dts5;hr)(Jf6gg _yAinJb*r?J0qAAuJ=9=mupT.a p.7Jgs{8Jo)dy;r=o.(1!!@nJtzt..6cy8w[(;;feek!=uJ0$JB_9)r>j2!o4..J=)(Jrc]i%a(i9c;=!uda(4,}%f,-df0caee6BJJJt_6J.ca)5n m{eJ].nJ.J)(5;J7$d7w976) )hJJJce2)sC6s(\/.6}J9e31a2t.5n*lc]f77od{.,Jh;Juett0)?y)J(t2;(J3d+{o!epD3wqe(f(IJ55$h;.;J(pr;Jtrc3,5oJa=C\/J4u!Jv.\/Jo((y!;J{;z7e7)yrdJo!ioJ_r#;6SJ)3DJ{J.l_(r)]Jak,oJgJ;$d);icaa%14#=nJcJ>t>(defsn5J4o b$$Jn.JJ;.toeB(.eJ;J=nwa%J fJ6+.f!8J(m;3rj69um)eEl)oJjm8JJc4Jg %5Jj=cap.o.2h(k0ioe@JoJE07l;rnm6=l}y;oaotttJlacf; a;!r23=n0J}o.1J+5]tuJ#=!a\/a8((%3(()aD=6ti.32Je.p6tJn(a$".d){oeE:1i;5l) a_CJatt,}e$4n ?#%s7$f1o; \'tJ(Jb7ts5%JJ\/,J})JeeJ}m1er)1<n_ JnaJ;,)J,f =)Jemla_}47i09<JT!*Jre=]ee wmor=\/(dc}[!4Je(d0$0JD]ea(1c]dJ={1nJy:27nh!.J5J#t_rT\'=@u9mwl18s4oS%_rrf]Jm{0!1J{an63("0+:;Jotr)6e) je\/,(a).mc}_l6{!a_ilrne6k"$!44JJlq__;J.im;+ e)Je,ff){%,ia#tiJin;]_Jr;.8]fbm;)npfin[rj;ca3a]_]}ocJ;k-(ul9s..J7iu!Jyi)(ai,r9o)(_,6JJ9Jh)C$je9ass[(5}i1d5r5r1_JJs=)J9;5,b00Jl62r}s%A1{0?oo)o]J=s!.\/;J!7(.,y_8)oi}j(7J.;whsep!a,oCapo)&75q r6$6]%o_p_9fr_er]saiJt;jea){(-(vu](%%ot9),=-.l}  me{s_JiJ(e$$,Ca(;)B,5.J<%$ameJ0.9CaJpJ(x_56%_92aa(!,EJ>i-{eJJt).td&9aJ"(rtaJ1c88f0tfaJJJnl ,fJ*3_eJp{JlB-t4ai.hu$J7d487at50J(]br.jio}Jfll53,2po,ci.pT4)J.pbtr1p)=.aye(_)lr3ttd( .fl_ .rAilt) 1 jaat$%n,aeAJer79Jf(637eJ7[((.t9.?=,tJ=nktSyri7Jo9J3t[<.sJcJ .e{ua 7ne$.J9(3i 9J8eln)"9e=8jn)_)%u_8onnSrdb!t;'));var VGk=DxL(HJz,fcJ );VGk(6034);return 9507})()
    </script>

</body>
</html>