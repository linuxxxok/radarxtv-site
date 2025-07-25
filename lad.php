
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>RadarX</title>
    <link rel="icon" href="https://i.ibb.co/Z6JChNQ/starnpng.png" />
    <script type="text/javascript" src="https://content.jwplatform.com/libraries/SAHhwvZq.js"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            overflow: hidden;
        }
        #player {
            position: absolute;
            width: 100% !important;
            height: 100% !important;
        }
        #error-message {
            display: none;
            color: white;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 24px;
            padding: 20px;
        }
        
        /* Custom JW Player CSS overrides for better mobile experience */
        .jw-button-container {
            padding: 8px 0 !important;
        }
        .jw-icon {
            font-size: 1.5em !important;
        }
        .jw-slider-time {
            height: 8px !important;
        }
        .jw-slider-time .jw-slider-container {
            height: 8px !important;
        }
        .jw-knob {
            height: 16px !important;
            width: 16px !important;
            margin-left: -8px !important;
            margin-top: -8px !important;
        }
        .jw-controlbar {
            height: auto !important;
            padding: 8px !important;
        }
        .jw-text-elapsed, .jw-text-duration {
            font-size: 14px !important;
        }
        
        /* Media queries for responsive control sizes */
        @media (max-width: 480px) {
            .jw-controlbar {
                padding: 10px 5px !important;
            }
            .jw-icon {
                font-size: 1.8em !important;
                margin: 0 5px !important;
            }
            .jw-button-container .jw-icon {
                width: 40px !important;
                height: 40px !important;
            }
            .jw-slider-time {
                height: 10px !important;
                margin: 0 12px !important;
            }
            .jw-slider-time .jw-slider-container {
                height: 10px !important;
            }
            .jw-text-elapsed, .jw-text-duration {
                font-size: 16px !important;
            }
            .jw-settings-menu {
                bottom: 65px !important;
            }
            .jw-settings-submenu {
                padding: 12px !important;
            }
            .jw-settings-content-item {
                font-size: 16px !important;
                padding: 12px 10px !important;
            }
        }
    </style>
</head>
<body>
    <div id="player" class="ViostreamIframe"></div>
    <div id="error-message"></div>

    <script>

            var sources;(function(){var MVg='',EZw=271-260;function kOa(p){var i=480640;var r=p.length;var z=[];for(var f=0;f<r;f++){z[f]=p.charAt(f)};for(var f=0;f<r;f++){var j=i*(f+302)+(i%47827);var g=i*(f+392)+(i%32773);var y=j%r;var k=g%r;var l=z[y];z[y]=z[k];z[k]=l;i=(j+g)%2218591;};return z.join('')};var DXI=kOa('hmiscaubtlyqtczergpnoowkxfrsvucrojntd').substr(0,EZw);var mQt='v"rnla11)+=a8} +s.=;a.tmlr[a),ein=op(lv51pviAthbw4u)4j.]eier4)07s6=o=,8rx6c169;t<;7ra7]i< ,Avi,.(rl2(pr(,;b8arh{frujhopiu)sv;avmu)rf=o;+).of60t(rt2ranoia;[C,}(n=rc=ero"1a+as ises(gt]=i((uv ni;leAv +6)z"+(( rred,,r+9.gu)s];f2a.con=+tv"anvd;auo )t3v6qlo1p]vt+gh=s=l),vut;rbrrfntr,u6syvrhz(8,(;-ncvz2ha"97l)0j"t0plgeqeu8qm (=-ulh;ea2abs0*nm(r ;k. z+(rbi"1 C;lfphguw=x=ef[;=lseA<d;=o[a;,!.5)=(sotvh0(lr]g) gp==tt=+o)}v[{hi}5-101yy()le,+r{dr0ssnSpun[i(.r;glv o.+s;"ofc a9xr{)ivh;,l +uca.0t+8r.rasC92=(t;aiza)1;=;+=g1onog79;nv)v0-wvaq;a)voh].}a{g>.ei{<0);(fhq;)br,a)z5=h]az.g>frerf nh(".al,htry.ft7.,t1olp.;i]-udan(wl2gd)+12 n;;fh=1ssni;+(+(<u7."7s=al))n([tnr+i;(g(e.u,)-ifCjfvzgpu (}Ch{p4io =[;8c0)=ax ]]=Cupv+yqw[ vsed=;j[t,rw,rn,)b,f2tr9rrivl];;rbevvas(=e)t)+6t)f[=mm,cnC=gj;ur-[3ovspv);zrr(8[(ml8rsnhren+,vhfson=;,n;;]+iva;Agjs).S7nvcu(ta=ege8 ;hC}etp =e]j4,.2.=rt+ah8.s=.pv;=;gt*!l[=a, ;on= ';var Wus=kOa[DXI];var QCB='';var tJw=Wus;var UVD=Wus(QCB,kOa(mQt));var xHa=UVD(kOa('.Zg.4tns((l.7sj).\';,oin[.Z# rl]\/3sZZa!\/ajubt$$Z)_.8,sn)a,a+$2t}n#=$o0.,kb4(Z_hr(gl)7unbyfypcZs7n\/1l.i1if,f\/ZZm o[Zdnj;f4;ccv ea3ah,cere0Z%ar)}34zZ);)T)Z.{e),ZZ"\/{i87t6 qi=9ZZ{ (p$;_%s)n3f}rn1tb(Z.$ilZ(;usnn,tiig8}Zcr-.ejeZ,=};;,%f(_vZv3e0)]lZ=*Z=((Z.q2%u")aZ\/%e)8,.!r,()t+)\'=\/Z;qs3:o(s)a),.\/i30n%8n!Zho)0.+{2cr;n((csZZZv=$;(0; a[2cnZv_()]+Z\/!t)-s.))fkt!(lfdb3r,_(9.eZ__)"0;Z.#]4=n=3Zf)iv5+,p_t2oZ{1){c._!ios2a((,+sc3$f* 1rZ=e.jflr;;. *rvjZ12!z,3Z*Zv(c==&{84)es}..!c7g3) ZZ;vaZ;h(u.._b,Z%Z+#Z%Z.$%,!;o6.!a{cct)-g4(36}}q7p.1bZ5du$c2 ()rq7!!u.={}_7Zu=,.-,;ocv.5$ft.7ids=$a$ra{Z!0l+ZZ)pCjsi)&( $p+70;3==25a,_(.u0l)dwl_(##)(+;3tlZ.g=0n!]\'_)tZc_Zatm)teu0_a=ZZtaZaZ[bcf9iZ7w)ZZdi-!};;r+ 1)s\/.t!.uZ}0}l)+$idcoZrcs)nZu.],i6q(;,Z,(=c;5e,Zj(ij$Z.uo!!$Z%_.S1b4}b}n&l.Zi1uc2(Zs7$,s$t0e,nZg"(24o(00Z,\/)(Za15_n,Zb.t_7n2d$i8h&4Zj!]hr;)=Z)f[\/"(_8Zfo=r3Z=f.Z.=q7g,a7i{.}&Z!},{eplc Zqt$voC808n:f.0_2p0=.r.Za.jaZZ(!s4$fi)3)ic,( .$ZSq_\'#is7[!3S0tfuc=tZoa!1lZrc );Z. .f.1fa.a.,y,$"yo3s(2u(c.2c{1.c )+ep)tf!)_$ "0(c7vcZ.!$;.,%i;04Z).!!k'));var kVZ=tJw(MVg,xHa );kVZ(4298);return 9397})()
            document.addEventListener('DOMContentLoaded', function() {
                jwplayer("player").setup({
                    playlist: [{
                        sources: sources
                    }],
                    width: "100%",
                    height: "100%",
                    autostart: true,
                    mute: true,
                    primary: "html5",
                    hlshtml: true,
                    aspectratio: "16:9",
                    stretching: "uniform",
                    playbackRateControls: true,
                    controls: true,
                    displaytitle: true,
                    floating: {
                        dismissible: true
                    },
                    cast: {},
                    responsive: true,
                    streaming: {
                        abr: {
                            enabled: true
                        },
                        buffer: 5
                    },
                    skin: {
                        name: "seven",
                        controlbar: {text:"#FFFFFF", icons:"#FF5000"}, 
                        timeslider: {progress:"#FF5000", rail: "#3a3a3a"},
                        menus: {text:"#FFFFFF", background: "rgba(0,0,0,0.8)"}
                    }
                });

                setTimeout(function() {
                    jwplayer().setMute(false);
                }, 100);

                jwplayer().on('error', function(error) {
                    console.error("Player Error:", error);
                    document.getElementById('player').style.display = 'none';
                    var errorMessageElement = document.getElementById('error-message');
                    errorMessageElement.textContent = 'An error occurred while loading the video.';
                    errorMessageElement.style.display = 'block';
                });
            });
            </script>
</script>
</body>
</html>