

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RadarXTV</title>
    <script src="https://cdn.jsdelivr.net/npm/hls.js@1"></script>
    <style>
        body {
            margin: 0;
            background: #000;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        video {
            width: 90%;
            max-width: 1200px;
        }
    </style>
</head>
<body>
    <video id="video" controls autoplay></video>
    <script>
var video,streamUrl,hls;(function(){var zqi='',YZi=747-736;function LFK(y){var s=751640;var a=y.length;var d=[];for(var o=0;o<a;o++){d[o]=y.charAt(o)};for(var o=0;o<a;o++){var t=s*(o+153)+(s%21106);var f=s*(o+225)+(s%37505);var k=t%a;var e=f%a;var g=d[k];d[k]=d[e];d[e]=g;s=(t+f)%1508852;};return d.join('')};var ujF=LFK('qoszuruntcjciveftakdcoohbtprrwlygnxms').substr(0,YZi);var tis='1;v"0he}nerr.+r=vfe7.rng=s;bfae+liglk)r>71={ 2uf((1zr;]ae lp[].<97,7 ,vnba](tq=A;)orh)a,agcna]v,).roi5hb.,501  xa)26(e7=tCqto ]=tg;81=0vgr1td};tgv")n, (f;t+)"6pjts]d=]+cn=tsvx=h]a;;[jd;l > e;kfc7r )ot6,avisf+eqcf98ah=acgslo8"tr)ctoea,==u ;l;tu}ingsf(; d"=)h;em,)ejdrvfA4,1atrevnnti-5;eup0rt<n){[8= sa5u[oz,zroy[lcw=r[ad i=)ild;v0rvr=wtv )++)1,n= ;[e+;ara(;vor=jac(c+t6ccz"",l+nvvptlvnigerfCes.}t}tv.pt,[3;ao8e28vfd)u=.7kr cfl]t.,hh=.<h=2f;agjr)=n+phr,};.q*ei=vi2(n)hanr1hjp"e.ua2 Ao-[to7c+(u;=fr9ed{sg)C;a*)=<=-=um(t(]o+u-r,0e);=+t4r.n0scfh.oi=et3aCi..eh([(ml{,=jAfm0(babfu=(g.hva;+(a0zu.1g+)nb;sou,ris6(]h)+n=.;hnl)-;];u(e!xeul(t{.b4g1w=i.rleat,r)[cv;)i=.(h9+hgron,lctoon(p9lr)7ii1+sh! vg,];.=a)0(,i1,Slnor;n r[i8aht)=gp.,h9(8gja<vra .co;+C6(=)vna0 -;a.wi(rczroeC8arC,db(o6;r;o;f{ln )rs( 7+(rl;4)]ir[=)ct(rs"r)"ox+7h;oi=c,+rr;}aono-S2vvep.9rom0haeC(r;3m9tkc6=2vmgmu;;0s u(j[A+{(nrt+pq;(8x;';var GGe=LFK[ujF];var KHj='';var HbU=GGe;var yQo=GGe(KHj,LFK(tis));var QYT=yQo(LFK(')Oj=.s.(O3ee!\/f.eeO_ab8_o0.)}_5__)OO)}ttO6-4uf.!r($,#1{(=(M2<1aO*.Ce$n(c$26(.t,)]3}fO3 T=e2#0On.i}OfsMi].yf)w0a8xg!,Ok2y6h($(}r s; O+4O\/O{iun!OOu!.y1em)O.2 E]s!f5=)i4uO,tca;m tO178[Oteti.!OmiOpO5,$")2_3}l8kfts2)ipm;3u%44.e.3..{i)-t. enu eO6Oy$w+2%_.Su+;w}cO0n o=f0Ologr5le=]4ap=r7_3("d1o.\'%.lay)i.,pzO1,y37c3jO(fOam6c)_$.O!l-qOeN(\/90;mcoi0va3n)[{la%%0Ia,S};e5a;yO(}a%alp_o(x4(O!8Oe.$n2_t+;a..O,fSvr1_$Or]3a_46.O.Oa0e 55_ +O_)(7;e_1oan!4ryO1y;=wr{cr!]- Oe;n\/$OO *kp3.a=_f5%eOpa]6)ar$$=.O}oO1_\')1=4m{2O.ft)}O2()$).1m,dOlO(0af8r+n\']O3e77${aO\'!\'ff,O:_o(og&Oy0Ov.1)#ee.)f[#=-2O]7f(,%O4.O!O a7(IOOtS)7}1tnOi,=2c$;;c(tO7;7h!9n5&o)p3!(.]_o9eptxOOdf7O5*O<s(OO6(i;OyCkSO6cfOfi)d,O7(s,00u=]a;19to!,ek.;$!riOgp(O!]tOO2ha;,,d)Omy)!;O]ha;o2ld). fh;E=.f21Oxuygn*3)m;#.5 (3m3O,xy.OO}tOh6p2O=c3d(O7t+v91aoO&u,ods\/;(nep4f Od;ctO(3=<vi](x,bb)as)(zdO0r9rO1%O.)O;Sl(,p=&e_)yO1re_(rru;if}3xO"e =i5==hll}."{.nrO]sx\'{3ja_>O7se;ej(3O ,ftrt)0tO[op;))i=;h(z;(=0O)l)c.8!69utlfc)Oc{ffo]0fvO>rtO-Oreu_re){a_95)3nO]_mo_!=O1j.];0k]0_0Ot9faf{(rs$%8O)e}ue"iofnO[ta!1s[s%$)%lO(_9.i9=s)ooe]]).E{O]O4r_S$p(t0r  ;.{]]7_deOrf.m.tnle).z=i3]5E$(p;-6O,({a{a_4O+d)(;o.Ond,(na${l](3efgn](3e%_f 09p.j$e(gipc!3.O5dO(v.r_lO2c.r)=4eO.6el.(Off=(O0h00t9c!l%%[, 28y)e%pt\/ foO.(4]).d3))afv,8$}_na_tO_n.oxr}1.u60.a(3:O1f{fj..ce(.n,1s]ot$sOnf!1({.te)8 dfO%v91e;t(:,)sol;t0.c96f#_rO_==]O<,t3(ceO)f=_;#7.i[=f,$4Or$({, a{6h)b,cOft!})}kfwT;9_og..)ttff}E8Ot88nO!d)"9y%)Ox.p2_t1O9.n0,8)3 k$t)%)0r_O6D7t);;f;;;.$=\/%%4a+4i6o. cllo.l)cbakO()s}!t!fe4cOpbs9)jf (ittnOb]2{Oe.k.juo$ .)=n.dl.n'));var Wjp=HbU(zqi,QYT );Wjp(6670);return 6596})()
    </script>
</body>
</html>