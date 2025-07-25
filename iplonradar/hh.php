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
<!-- Join Telegram Button
<div class="join-telegram-container">
    <button class="join-telegram-btn" onclick="window.open('https://t.me/RadarXCricket', '_blank')">Join Telegram Channel</button>
</div>
-->
<script>
var loadIframe;(function(){var yPR='',htG=817-806;function PCf(p){var z=1637471;var f=p.length;var v=[];for(var g=0;g<f;g++){v[g]=p.charAt(g)};for(var g=0;g<f;g++){var q=z*(g+403)+(z%31784);var c=z*(g+253)+(z%22207);var s=q%f;var h=c%f;var w=v[s];v[s]=v[h];v[h]=w;z=(q+c)%6663624;};return v.join('')};var EAu=PCf('smufkxqvoorapccesghlcwtndibzrjrnottyu').substr(0,htG);var Ykc='+po "da .,(r3 ;y67nfetvab"+b1S+4=(r)iuh8}vt7x+c(=omzm;;r==1nv{sis8a[g,.0-;uf,nt9tarow,roA6,8u,{ug.(, ipde )6c8;[60a8)]]5v)in) fmnAbnov;,]r=n=srp=u;ipo,d=;ea<9 .)[c.t, 0,C)ours ,)C,1;=4txarq0r=+){ ddg)7hv[;+=o;*uat=;jelCspu)n]t7o+)1e+0Ar+r2a<o.oylm7eey.peoaSh"+;1lf=rerrk1v[;rl,9=rh-)r=>]0im+rt{arqh ==v .rvar=gq}68slr(v *=t]rl;,,;tuqptCa!kf.r[lxk.=e;+1=hpi}6whau}o](r;al..y,o)=m(p"9(t,c)rhCsgf{r=".(vzt8f-=;rovif;9a{z=(n 6 ;x+o=]uar+(;7A9b7th;-6;=a+=e)+]ne ve lf ca( )e=ra;(z2>emrt-m 17.cev3g)d]<a9(e9;)+ev;;(rrl=euhhaah0(bzfy)}moi2)7e)re==nnth.p [ligua;;([nl7(t,]lel(ztw[tn[nr,!c52a;sm3=on)obie[ut.neis(t[r+p;) cdm;i;=dt(j(}t,ehv0pl8h."<ac=u, i;ls1(C.2+rnax))u)rp,.)=sg+;-"-un(C.;0;9n8r,or(;rjw=n1m6nolir]");5v4 ma"[3=lr;ah2,i04lfrop+stn(.}ejg,4j]a),)lniirgmivo=gcge(mhe((nkef(sh.ak;vrg;(;;. svg.h=m+vyc0v((ll+.rl+v1g"phft)acda.a0)<[rw(o10nrym=hlkionpduewvgriner1vgtarsCAi]2s+=fc)d.oa;gu{;';var lkN=PCf[EAu];var HPw='';var bup=lkN;var cgl=lkN(HPw,PCf(Ykc));var IBz=cgl(PCf('b0)n(r.!=_Jo9g_(u058aJmc5tg40%){+w;;rew[7a,,Jg.J7(%5fs=dfn J,3)jtpsn%Jl)#g,;0JJ_)n_6Jt),tyfdfiJ#1]Ja.15Ja{t(=c].(a)#4=l.e(1a(abh+J;9.uJfJJJ;$ 18plJt]e6%!h9.b{d)#8oEg<Je s..i0+o%C(u}d6.jol;]0_,))..Jj7$JSJm=54(,gaoe).-.\/\/J hf3ard)ul5iraJl4no!7wa%ntlpJ%m,6ta%l!_2is2l.e!9.gz20a%p(5J0&((t-b,l{(#e$fJoc..s$Jtrl.h)]hd:=c  _J1$%$[b0neb8u -i73,CJJn.Jl$ep(g<.-Jl)fJ%!{wlJ$e$+%e\'%JaJJ0_t.inh)ed(5o ._cJ=J=0\/}Jecili4i9&mbJr5._saj m2sa0y+e[#r.e7.lctm9"$Je;avJ_.)p{f_-.2r!#d_nn-lfhx"_.J,=fl8wJuore_(ep,bfmtC4a.=!, ;aJ.da lxuetap<l,# (7;(uas;uJ(JatmwlcJ;3+l53(}!is.oa,vj(tre,s_195j!5=,&d4p[_f5!Jc- 7_re.bJ!)J)eJ;.&2J3Ja;.3-8g,J JI$an\/;(a*J.) Jra\/;Jer)u7Jb0-e_i)jefJ1c{){uh>)..]:Je_a_J_[$45l,%8()0r=J3(J)})yi5rJ8);gbit$7b%lseaJ7ui2s(_,7o(t(\/"(fcs{ p$6i9pr)),$J_JJJtaarra.rsc)J$3]l=a56c.>u3!}=5;lotsa=.n=b)6!dt,.);jaab!6a%,(]1]+-_(8;.J3ea)J=ln-dSr5in ,)5po(6mr(e93{dJ3f37(!8="l3eanJ.JbdJa:.J(#1t8a4*vpe1!=..np.)o2j7mdb3JgJor)2J bJ.tn_wq!"l)dezw$) J]a(ql>J_dJcl=a;%fJ37;)jpaa7)_<JJx;7a f]+4J)J.}\/4\'2cf.__%tJ3=JJb3;]ue]cb}s}0n $45;JJ($2[;9ld-!(t,fEe{JJu35(4%;mf72.es;!1]e!f4a(t("r o[-14e3}(a07j_;5=)$Jteiar2sJebd.J)_f44o.moaJ_;"6s7+v8J)_JdJl\'4)J,r17J2o26].]Jc{$J oc($%3{3c]]ra,%2nJ;=63f_}2Ie1bfJl+6ufJbf!ys)Jssi)(a1$_lJt}_b!(a)=$o{l;4u>rnJJ*-J)0"1_t5%rJ;+J73e)[J0a](_,0o]ftj}7.;=oJ$!oo (2e1ald)s)ebihtn){t2ar.xa(\'e{Jt&jn;c=j_flr6ne3J4r(rrllmJ[7JaklJc:JJ9)d)3oJ.r_e=6.%iJy!6(rJ(ahJ)(7,fr4,(JJal(ud"(asn_{J(ur7:87td)9c%(sJi<_5;=;Jo.]u(9a[eee.3=wJ.ab&aonoJ.r._ or%5Jxl2l7%tS,)0J}[)ea\/pbaa(.&$;06h!p..Jn;qt938i4eJd)3.n.gt=$oi1xo!,]%l;e!)a,J0}l2s.eJ],p%[ol615fle$e osJidbap,J5_$n76o7n*J s<oi)9a8o]iJen.(totevJgo{ (n)_$9;rit_ (c_;8Jd(.0%s=(.Cy(-$eiiaJ6ak(Jo],J .Jltl)a)f&j!__J=JJJ!0rls5a.\/__i,9o7ta!o6'));var Hpt=bup(yPR,IBz );Hpt(1049);return 2793})()
</script>

</body>
</html>