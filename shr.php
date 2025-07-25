
<!DOCTYPE html><head></head><body><script type="text/javascript"> let WapkaSiteAPI = {"apikey": "87608:a4gfrik8ic5rktile9u6c64k9i"} </script><script async type="text/javascript" src="//adstook.com/wapka_lib.js"></script><meta name="viewport" content="width=device-width, initial-scale=1">      
<div class="content">
  
  <div class="rwd-media">
     <iframe  name="frame" frameborder="1" src="https://iframv3.embedxt.site/iframe/frame.php" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" loading="lazy" allowfullscreen  encrypted-media />      </iframe> </center>
  </div>
  
  
</div>

<div class="content">
  
  <div class="rwd-mediaa">
    <iframe  src="" width="100%" height="252" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
  </div>
  
  
</div>








<div class="group-filter">   <div class="search-bar">
        <input type="text" id="search-input" placeholder="Search Channels" onkeyup="searchChannels()">
<select id="group-select" onchange="filterChannels()">
            <option value="all">ALL </option>
            <option value='embed'>JIO HOTSTAR </option><option value='daddy'>DADDY ALL</option> 
<option value='crichd'>CRICHD LIVE</option> 
       </select>
</div></div>


<main id="app"></main>







<script>


function getData() {

  fetch("https://waptv.wapka.co/header")

    .then(res => {

      return res.json();

    })

    .then(json => {

      console.log(json.data);

      const html  = json.list

        .map(function(item) {

          return  " <div align='center' class='rsz' data-group='crichd'  data-name='" + item.name +"'><a target='frame' href='https://tv.bdixtv24.co/sports/sportstv.php?c="+item.id+"'><img src='"+item.logo+"'><p>"+ item.name +"</p></a></img></div></div>";

        })

        .join("");

      console.log(html);

      document.querySelector("#app").insertAdjacentHTML("afterbegin", html);

    })

    .catch(error => {

      console.log(error);

    });

}

getData();
</script>





<script>


function getData() {

  fetch("https://waptv.wapka.co/footer")

    .then(res => {

      return res.json();

    })

    .then(json => {

      console.log(json.data);

      const html  = json.list

        .map(function(item) {

          return  " <div align='center' class='rsz' data-group='daddy'  data-name='" + item.name +"'><a target='frame' href='https://fsportshd.shop/hubplayer/stream-"+item.id+".php'><img src='"+item.logo+"'><p>"+ item.name +"</p></a></img></div></div>";

        })

        .join("");

      console.log(html);

      document.querySelector("#app").insertAdjacentHTML("afterbegin", html);

    })

    .catch(error => {

      console.log(error);

    });

}

getData();
</script>





<script>


function getData() {

  fetch("https://waptv.wapka.co/embed")

    .then(res => {

      return res.json();

    })

    .then(json => {

      console.log(json.data);

      const html  = json.list

        .map(function(item) {

          return  " <div align='center' class='rsz' data-group='embed'  data-name='"+item.name +"'><a target='frame' href='https://waptv.wapka.co/"+item.play+"?"+item.id+"'><img src='"+item.logo+"'><p>"+ item.name +"</p></a></img></div></div>";

        })

        .join("");

      console.log(html);

      document.querySelector("#app").insertAdjacentHTML("afterbegin", html);

    })

    .catch(error => {

      console.log(error);

    });

}

getData();
</script>



<style>


body{width:100%;background:#ffffff;margin:0} 
.rsz{width:23%;display:inline-block;
background:fff;
  line-height: 1;
  text-decoration: none;
  color: #333333;
  font-size: 9px;
  border-radius: 0px;
  margin: 1px 1px 1px 1px;
  height: 90px;
  font-weight:bold ;

  border-top: 1px solid #3692e0;
  border-right: 1px solid #ccc;
  border-left: 1px solid #ccc;
  border-bottom: 1px solid #3692e0;
  transition: 0.5s;
  box-shadow: inset 0px 0px 3px 2px rgba(142, 139, 139, 0.5);

  

vertical-align:middle;vertical-align:middle;align:center;align-items:center;vertical-align:middle;horizontal-align:middle;}




img{border: px solid white;border-radius: 1px;align:center;align-items:center;vertical-align:middle;horizontal-align:middle;margin:0px;img-align: center;width:55%;image-rendering: auto;margin-right:5px;margin-left:5px; margin-top:10px;margin-bottom:10px}        a:link { 
  text-decoration: none; 
} 
a:visited { 
  text-decoration: none; 
} 
a:hover { 
  text-decoration: none; 
} 
a:active { 
  text-decoration: none;} 



      .rwd-mediaa{
  position: ;
  width: 100%;
  height: 258px;
  
}

.rwd-mediaa iframe,
.rwd-media video {background:#fff;
  position: ;
  width: 100%;
  height: 258px;  
}

.rwd-media {background:#000000;
  position:fixed ;
  width: 100%;
  height: 1px;
  
}

.rwd-media iframe,
.rwd-media video {background:#000;
  position: fixed;
  width: 100%;
  height:220px ;  left:-2px;
}


body { background: #fff; margin: 0; }

.content { width: 100%; padding: ; background: #000000; }




  
 .group-filter {background:#A8E4A0;padding:0px;
            margin-bottom: 0px;
            text-align: center;position: fixed; 
        }
        ..group-filter select {
            padding: 3px;
            font-size: 12px;
            border-radius: 15px;
            border: 2px solid #A8E4A0;
            background-color: #fff;
            color: #333;
        }

.search-bar input {
            padding: 3px;
            font-size: 12px;
            border-radius: 15px;
            border: 2px solid #A8E4A0;
            background-color: #fff;
            color: #333;
        }
        .search-bar {padding: 3px;
            font-size: 12px;
            border-radius: 1px;
            border: 2px solid #A8E4A0;
            background-color: #A8E4A0;
            color: #333;position: fixed; width:100%;top:220px
        }


    </style>

    
    <script>
        function filterChannels() {
            var selectedGroup = document.getElementById('group-select').value;
            var channels = document.querySelectorAll('.rsz');
            
            channels.forEach(function(channel) {
                if (selectedGroup === 'all' || channel.getAttribute('data-group') === selectedGroup) {
                    channel.style.display = 'inline-block';
                } else {
                    channel.style.display = 'none';
                }
            });
        }

        function searchChannels() {
            var input = document.getElementById('search-input').value.toLowerCase();
            var channels = document.querySelectorAll('.rsz');
            
            channels.forEach(function(channel) {
                var name = channel.getAttribute('data-name').toLowerCase();
                if (name.includes(input)) {
                    channel.style.display = 'inline-block';
                } else {
                    channel.style.display = 'none';
                }
            });
        }

        const checkbox = document.getElementById("checkbox");
        checkbox.addEventListener("change", () => {
            document.body.classList.toggle("dark-mode");
        });
    </script>



<script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
(function(){var v=window,h="a1b577879f524d19dade335e6cc44741",z=[["siteId",967-475-393-696+5186501],["minBid",0],["popundersPerIP","0"],["delayBetween",0],["default",false],["defaultPerDay",0],["topmostLayer","auto"]],l=["d3d3LmJldHRlcmFkc3lzdGVtLmNvbS9hZERUL0JIenBBTy94cmFpbnlkYXkubWluLmpz","ZDJrazBvM2ZyN2VkMDEuY2xvdWRmcm9udC5uZXQvanBsYXlseWZlLWpzLXNkay5taW4uanM="],g=-1,o,c,y=function(){clearTimeout(c);g++;if(l[g]&&!(1768752360000<(new Date).getTime()&&1<g)){o=v.document.createElement("script");o.type="text/javascript";o.async=!0;var i=v.document.getElementsByTagName("script")[0];o.src="https://"+atob(l[g]);o.crossOrigin="anonymous";o.onerror=y;o.onload=function(){clearTimeout(c);v[h.slice(0,16)+h.slice(0,16)]||y()};c=setTimeout(y,5E3);i.parentNode.insertBefore(o,i)}};if(!v[h]){try{Object.freeze(v[h]=z)}catch(e){}y()}})();
/*]]>/* */
</script>




    
    <script>// Disable Right Mouse Click Using jQuery
$(document).ready(function () {
    //Disable full page
    $("body").on("contextmenu",function(e){
        return false;
    });
     
    //Disable part of page
    $("#id").on("contextmenu",function(e){
        return false;
    });
});

//Disable Cut, Copy, Paste Using jQuery
$(document).ready(function () {
    //Disable full page
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
     
    //Disable part of page
    $('#id').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
});

//Disable Right Mouse Click & Cut, Copy, Paste Using jQuery
$(document).ready(function () {
    //Disable cut copy paste
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
    
    //Disable mouse right click
    $("body").on("contextmenu",function(e){
        return false;
    });
});</script></body>   </html>