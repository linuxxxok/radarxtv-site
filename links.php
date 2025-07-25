<?php
header('Content-Type: application/json');

// ✅ Check against the current server domain
$allowed_domains = ["radarxtv.site", "www.radarxtv.site"];

// Secure domain validation
$current_domain = $_SERVER['SERVER_NAME'] ?? '';
if (!in_array($current_domain, $allowed_domains)) {
    echo json_encode(["error" => "Access Denied"]);
    exit;
}

// Matches ke liye hardcoded streams
$streams = [

   
    "IPL" => [
          //  ["name" => "WILLOW LIVE [ FAST ]", "url" => "https://radarxtv.site/w2.php"],
            ["name" => "IPL LIVE", "url" => "https://radarxtv.site/ipl"],
              //["name" => "WILLOW HD ( WAIT 30 SECONDS )", "url" => "https://radarxtv.site/w2.php"],
            //  ["name" => "HINDI HD", "url" => "https://radarxtv.site/cineplex.php"],
            //    ["name" => "ENGLISH HD", "url" => "https://radarxtv.site/lalu.php"],
 /*
        ["name" => "STAR SPORTS 2 HD", "url" => "https://radarxtv.site/s2.php"],
    ["name" => "TOFFEE SPORTS 2 HD", "url" => "https://radarxtv.site/s22.php"],
    
    ["name" => "ASTRO SPORTS 4K", "url" => "https://radarxtv.site/radarX/astro.php"],
      ["name" => "FOX SPORTS 4K", "url" => "https://radarxtv.site/radarX/fox.php"],
        ["name" => "SKY CRICKET 4K", "url" => "https://radarxtv.site/radarX/sky.php"],
          ["name" => "SKYMAINEVENTS 4K", "url" => "https://radarxtv.site/radarX/skymain.php"],
            ["name" => "SKY NZ 1 4K", "url" => "https://radarxtv.site/radarX/skynz.php"],
              ["name" => "WILLOW SPORTS 4K", "url" => "https://radarxtv.site/radarX/willow.php"],
                ["name" => "WILLOW SPORTS HINDI 4k", "url" => "https://radarxtv.site/radarX/willow2.php"],
*/
    ],
    
    "PSL" => [
           ["name" => "PSL LIVE", "url" => "https://radarxtv.site/psl"],

    ],
    
    
    "CT" => [
        ["name" => "AMAZON PRIME LIVE", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/prime"],
        ["name" => "PRIME HINDI LIVE", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/HINDIJIOSTAR"],
        ["name" => "SKY LIVE", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/sky"],
        ["name" => "WILLOW LIVE", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/willow"],
        ["name" => "SKY MAINEVENTS LIVE", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/skynz"],
        ["name" => "PTV LIVE", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/fox"],
        ["name" => "WILLOW HINDI LIVE", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/sky2"],
        ["name" => "SKY NZ 2", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/primehindi"],
        ["name" => "ASTRO LIVE", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/astro"],
        ["name" => "SKY NZ 1", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/skymain"],
        ["name" => "TEN SPORTS HD", "url" => "https://radarxtv.site/streamsoldd/DONcTsTrEaMS/sky22/tenhd.php"]
    ]  
];

$match_id = $_GET['match_id'] ?? null;
if ($match_id && isset($streams[$match_id])) {
    echo json_encode($streams[$match_id]);
} else {
    echo json_encode(["error" => "No streams found"]);
}
?>
