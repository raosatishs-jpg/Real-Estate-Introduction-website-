<?php
/* ==========================================================================
   The Authority Shift - free masterclass landing page (v3, Nov 2026)
   Layout modelled on the 1% Club masterclass funnel. Self-contained:
   all CSS and JS are in this file. Form posts to ../api/masterclass-register.php
   (unchanged) and then opens WhatsApp, exactly like the previous page.

   EDIT THESE BEFORE EACH BATCH
   ========================================================================== */
$session_day   = 'Live Every Week';       // e.g. 'Tue, 2 Dec'
$session_time  = '11 AM & 7 PM IST';     // e.g. '7:00 PM IST'
$value_price   = '₹4,997';               // struck-through anchor price
$bonus_line    = 'FREE Standing Gap Score Workbook Included';
$whatsapp_no   = '917996755513';
$v             = '20261124';             // bump to bust image cache
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title>The Authority Shift | Free Masterclass by Satish Rao</title>
<meta name="description" content="Free live 90-minute masterclass for experienced advisors: become the expert clients choose before the first meeting, without chasing follow-ups.">
<link rel="canonical" href="https://asksatishrao.com/masterclass/">
<meta property="og:type" content="website">
<meta property="og:url" content="https://asksatishrao.com/masterclass/">
<meta property="og:title" content="Free Masterclass: Get Chosen Before The First Meeting">
<meta property="og:description" content="90 minutes, live with Satish Rao. For mutual fund, insurance and real-estate advisors. Free Standing Gap Score Workbook included.">
<meta property="og:image" content="https://asksatishrao.com/assets/images/satish-rao-photos/satish-rao-about-profile-portrait.webp">
<meta name="twitter:card" content="summary_large_image">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap">
<style>
:root{
  --bg:#FFFFFF; --ink:#0B0B0B; --muted:#55575C; --line:#E7E7E7; --grid:#F1F1F1;
  --tint:#F7EFDD; --gold:#C8A86B; --gold-d:#8A6A2F;
  --dark:#0B0B0B; --on-dark-m:#B5B5B5; --red:#D93B3B; --green:#1F9D55; --faq:#EEF3FB;
  --f:'Manrope',system-ui,-apple-system,'Segoe UI',sans-serif;
}
*{box-sizing:border-box}
html{scroll-behavior:smooth}
body{margin:0;background:var(--bg);color:var(--ink);font:16px/1.55 var(--f);padding-bottom:92px;-webkit-font-smoothing:antialiased}
img{max-width:100%;display:block}
h1,h2,h3{margin:0;font-weight:400;text-wrap:balance}
p{margin:0}
i.a{font-style:italic;font-weight:400}
.in{max-width:1140px;margin:0 auto;padding-left:max(16px,env(safe-area-inset-left,0px));padding-right:max(16px,env(safe-area-inset-right,0px))}
.gridbg{background-image:linear-gradient(var(--grid) 1px,transparent 1px),linear-gradient(90deg,var(--grid) 1px,transparent 1px);background-size:56px 56px}
section{padding-block:64px}
.c{text-align:center}
.pill{display:inline-block;background:var(--tint);color:var(--gold-d);font:700 .7rem/1 var(--f);letter-spacing:.12em;text-transform:uppercase;padding:7px 12px;border-radius:4px;margin-bottom:14px}
.h2{font-size:clamp(1.9rem,6vw,3rem);line-height:1.12;letter-spacing:-.02em}
.lead{color:var(--muted);margin-top:10px;font-size:1.02rem}
.photo{border-radius:18px;object-fit:cover;width:100%;background:var(--tint)}

.strip{background:var(--dark);color:#fff;font:600 .74rem/1 var(--f);display:flex;justify-content:center;gap:16px;flex-wrap:wrap;padding:10px 12px}
.logo-bar{display:flex;justify-content:center;padding:14px 16px 0;background:var(--tint)}
.logo-bar img{height:40px;width:auto}

.cta{display:flex;flex-direction:column;align-items:center;gap:8px;margin-top:28px}
.btn{display:inline-flex;align-items:center;gap:16px;min-height:60px;padding:18px 26px;border-radius:4px;border:0;cursor:pointer;text-decoration:none;color:#fff;background:linear-gradient(170deg,#000 37%,#393939 61%,#000 84%);font:800 1.1rem/1 var(--f);text-transform:uppercase;transition:transform .15s}
.btn:hover{transform:translateY(-2px)}
.btn:focus-visible,.gbtn:focus-visible,summary:focus-visible,input:focus-visible,select:focus-visible,.vid:focus-visible{outline:3px solid var(--gold);outline-offset:2px}
.btn .sep{width:1px;align-self:stretch;background:#5A5A5A}
.btn .pr{display:flex;align-items:baseline;gap:8px;text-transform:none}
.btn .pr b{color:var(--gold);font-size:1.2rem}
.btn .pr s{color:#9A9A9A;font-weight:500;font-size:.9rem}
.cta small{color:var(--muted);font-size:.85rem}

.hero{background:radial-gradient(120% 80% at 50% 0%,var(--tint) 0%,#FBF6EA 45%,#fff 100%);padding-block:28px 56px;position:relative;overflow:hidden}
.hero::before{content:"";position:absolute;inset:0;background-image:linear-gradient(rgba(200,168,107,.16) 1px,transparent 1px),linear-gradient(90deg,rgba(200,168,107,.16) 1px,transparent 1px);background-size:48px 48px;-webkit-mask-image:linear-gradient(#000,transparent 85%);mask-image:linear-gradient(#000,transparent 85%);pointer-events:none}
.hero .in{position:relative;text-align:center}
.hero h1{font-size:clamp(1.75rem,6.4vw,3.5rem);line-height:1.14;letter-spacing:-.04em}
.hero h1 b{font-weight:700;display:block}
.hero .sub{max-width:640px;margin:18px auto 0;font-size:1.05rem;color:#2A2A2A}
.hero .sub b{font-weight:700}
.hero .photo{margin:28px auto 0;max-width:360px;aspect-ratio:4/5;object-position:center 20%}
.event{display:inline-grid;grid-template-columns:1fr 1fr;gap:20px;background:#fff;border-radius:12px;box-shadow:0 8px 30px rgba(0,0,0,.08);padding:18px 22px;margin-top:-34px;position:relative;text-align:left}
.event div{display:flex;gap:10px;align-items:center;font-weight:600;font-size:.95rem}
.ico{width:38px;height:38px;border-radius:10px;display:grid;place-items:center;background:var(--tint);font-size:1.2rem;flex:none}

.bonus .h2{max-width:720px;margin:0 auto}
.phone{margin:36px auto 0;width:260px;max-width:100%;aspect-ratio:9/16;border-radius:34px;border:8px solid #111;background:linear-gradient(180deg,#fff,var(--tint));display:flex;flex-direction:column;justify-content:center;gap:14px;padding:22px;text-align:left}
.phone .t{font-weight:800;font-size:1.05rem}
.phone .row{display:grid;gap:4px;font-size:.78rem;font-weight:600}
.phone .row i{display:block;height:7px;border-radius:4px;background:#E9DEC4;font-style:normal}
.phone .row i b{display:block;height:100%;border-radius:4px;background:var(--gold)}
.phone .score{font:800 2rem/1 var(--f);color:var(--gold-d)}
.note-ico{margin-top:18px;color:var(--muted);font-size:.9rem}

.vids{display:flex;gap:14px;overflow-x:auto;scroll-snap-type:x mandatory;padding:8px 2px 16px;margin-top:28px}
.vid{flex:0 0 220px;scroll-snap-align:start;aspect-ratio:9/16;border-radius:16px;overflow:hidden;position:relative;color:#fff;text-decoration:none;text-align:left;background:#111}
.vid img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:.75}
.vid .cap{position:absolute;left:0;right:0;bottom:0;padding:40px 14px 14px;background:linear-gradient(transparent,rgba(0,0,0,.85));font-weight:700;font-size:.9rem;line-height:1.25}
.vid .play{position:absolute;top:42%;left:50%;width:54px;height:54px;margin:-27px 0 0 -27px;border-radius:50%;background:rgba(255,255,255,.92)}
.vid .play::after{content:"";position:absolute;top:50%;left:50%;margin:-9px 0 0 -5px;border-left:16px solid #111;border-top:9px solid transparent;border-bottom:9px solid transparent}
.more{display:inline-block;margin-top:10px;font-weight:700;color:var(--ink)}
.stars{color:var(--gold);letter-spacing:2px}

.two{display:grid;gap:36px;align-items:center}
.checks{border:1px solid var(--line);border-radius:14px;overflow:hidden;background:#fff}
.chk{display:flex;gap:14px;align-items:center;padding:15px 16px;border-bottom:1px solid var(--line);cursor:pointer;font-size:.98rem}
.chk:last-child{border-bottom:0}
.chk input{-webkit-appearance:none;appearance:none;width:22px;height:22px;flex:none;border:1.5px solid #BDBDBD;border-radius:5px;margin:0;display:grid;place-items:center;cursor:pointer}
.chk input:checked{background:var(--ink);border-color:var(--ink)}
.chk input:checked::after{content:"";width:10px;height:6px;border-left:2px solid #fff;border-bottom:2px solid #fff;transform:rotate(-45deg) translate(1px,-1px)}
.chk:has(input:checked){background:#FAF6EC}
.teach{color:var(--muted);margin-top:8px}
.books{display:grid;grid-template-columns:1fr 1fr;gap:18px;align-items:end;max-width:460px;margin:0 auto}
.books img{border-radius:6px;box-shadow:0 18px 40px rgba(0,0,0,.18)}
.books p{grid-column:1/-1;text-align:center;color:var(--muted);font-size:.9rem}

.stages{display:grid;gap:14px}
.stage{display:grid;grid-template-columns:1fr auto;gap:12px;align-items:center;border:1px solid var(--line);border-radius:14px;padding:18px 20px;background:#fff}
.stage .lab{font:700 .7rem/1 var(--f);letter-spacing:.1em;color:var(--gold-d);text-transform:uppercase}
.stage .lab span{color:var(--muted)}
.stage h3{font-size:1.25rem;font-weight:500;margin-top:8px;line-height:1.3}
.stage .em{width:46px;height:46px;border-radius:12px;background:var(--tint);display:grid;place-items:center;font-size:1.4rem}
.sticky-head{position:sticky;top:24px}

.mentor{background:linear-gradient(180deg,var(--tint) 0%,#fff 100%)}
.mentor .photo{aspect-ratio:4/5;max-height:560px;object-position:center 20%}
.mentor .tag{color:var(--muted);margin-top:8px}
.creds{list-style:none;padding:0;margin:22px 0 0;display:grid;gap:12px}
.creds li{display:grid;grid-template-columns:28px 1fr;gap:10px;align-items:start;font-size:.98rem}
.creds li b{font-weight:700}

.ba{display:grid;grid-template-columns:1fr 1fr;gap:14px;margin-top:32px;text-align:left}
.ba .col{border:1px solid var(--line);border-radius:14px;padding:20px;background:#fff}
.ba h3{font-size:1rem;font-weight:700;margin-bottom:14px}
.ba ul{list-style:none;padding:0;margin:0;display:grid;gap:12px}
.ba li{display:grid;grid-template-columns:22px 1fr;gap:8px;font-size:.94rem;line-height:1.4}
.x,.v{width:20px;height:20px;border-radius:50%;display:grid;place-items:center;color:#fff;font-size:.72rem;font-weight:800;margin-top:1px}
.x{background:var(--red)} .v{background:var(--green)}

.dark{background:var(--dark);color:#fff}
.logos{display:flex;flex-wrap:wrap;justify-content:center;gap:10px 26px;margin-top:22px;color:var(--on-dark-m);font-weight:700;font-size:.9rem}
.tcards{display:flex;gap:14px;overflow-x:auto;scroll-snap-type:x mandatory;margin-top:32px;padding-bottom:12px;text-align:left}
.tcard{flex:0 0 280px;scroll-snap-align:start;background:#1A1A1A;border:1px solid #2A2A2A;border-radius:14px;padding:18px;display:flex;flex-direction:column;gap:12px}
.tcard p{color:#D8D8D8;font-size:.92rem}
.who b{display:block;font-size:.88rem}
.who span{font-size:.76rem;color:var(--on-dark-m)}

.guar{display:grid;gap:32px;align-items:center}
.seal{width:150px;height:150px;border-radius:50%;background:radial-gradient(circle,#E9D29E,#C8A86B 60%,#9C7B3C);display:grid;place-items:center;text-align:center;color:#1b1406;font:800 1rem/1.1 var(--f);box-shadow:0 0 0 6px #fff,0 0 0 8px var(--gold);margin:0 auto}
.seal small{display:block;font-size:.7rem;letter-spacing:.14em;margin-top:4px}
.guar .photo{max-width:320px;aspect-ratio:1;margin:0 auto;object-position:center 20%}
.ticks{display:flex;gap:18px;flex-wrap:wrap;margin-top:18px;font-weight:600;font-size:.92rem}
.ticks span::before{content:"✓";display:inline-grid;place-items:center;width:20px;height:20px;border-radius:50%;background:var(--green);color:#fff;font-size:.7rem;margin-right:8px}

.faq{max-width:820px;margin:32px auto 0;display:grid;gap:10px;text-align:left}
details{background:var(--faq);border-radius:10px;padding:0 18px}
summary{list-style:none;cursor:pointer;padding:18px 34px 18px 0;font-weight:600;position:relative}
summary::-webkit-details-marker{display:none}
summary::after{content:"+";position:absolute;right:0;top:14px;font-size:1.5rem;font-weight:400}
details[open] summary::after{content:"\2212"}
details p{padding:0 0 18px;color:var(--muted)}

.final{position:relative;background:#0B0B0B;color:#fff;text-align:center;padding-block:120px 72px;overflow:hidden}
.final img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover;object-position:center 20%;opacity:.28}
.final .in{position:relative}
.final p{color:#D0D0D0;max-width:520px;margin:14px auto 0}
.final .cta small{color:#BDBDBD}
.final .btn{background:#fff;color:#000}
.final .btn .sep{background:#CFCFCF}
.final .btn .pr s{color:#777}
.final .btn .pr b{color:var(--gold-d)}
footer{padding-block:36px;text-align:center;font-size:.78rem;color:var(--muted)}
footer p{max-width:860px;margin:0 auto}
footer p+p{margin-top:10px}
footer a{color:inherit}

.bar{position:fixed;left:0;right:0;bottom:0;z-index:30;background:#000;color:#fff;padding:12px max(16px,env(safe-area-inset-right,0px)) calc(12px + env(safe-area-inset-bottom,0px)) max(16px,env(safe-area-inset-left,0px))}
.bar .in{display:flex;align-items:center;justify-content:space-between;gap:12px;padding:0}
.bar .p{display:flex;align-items:baseline;gap:8px;flex-wrap:wrap}
.bar .p b{font-size:1.35rem;color:var(--gold)}
.bar .p s{color:#8E8E8E;font-size:.95rem}
.bar .p small{flex-basis:100%;color:#BDBDBD;font-size:.7rem}
.gbtn{border:0;border-radius:6px;padding:14px 18px;font:800 .92rem/1 var(--f);text-transform:uppercase;color:#000;background:linear-gradient(180deg,#F7E7C2,#C8A86B);cursor:pointer;flex:none}

dialog{border:0;border-radius:16px;padding:0;width:min(440px,calc(100% - 32px));box-shadow:0 30px 80px rgba(0,0,0,.35)}
dialog::backdrop{background:rgba(0,0,0,.55)}
dialog form,.dlg-ok{padding:26px;display:grid;gap:14px}
dialog h3{font-size:1.4rem;font-weight:700}
dialog label{display:grid;gap:6px;font-weight:600;font-size:.88rem}
dialog input,dialog select{font:16px var(--f);border:1px solid #D5D5D5;border-radius:8px;padding:12px;min-height:48px;width:100%;background:#fff;color:var(--ink)}
dialog .err{color:var(--red);font-size:.82rem;font-weight:600}
.hp{position:absolute;left:-9999px;width:1px;height:1px;overflow:hidden}
.x-close{position:absolute;top:10px;right:14px;border:0;background:none;font-size:1.7rem;cursor:pointer;color:var(--muted)}

@media (min-width:880px){
  .two{grid-template-columns:1fr 1fr}
  .guar{grid-template-columns:1.2fr .8fr}
  .stage-wrap{display:grid;grid-template-columns:1.2fr .8fr;gap:48px;align-items:start}
  .hero{padding-block:40px 72px}
}
@media (max-width:879px){.stage-wrap .sticky-head{position:static;margin-bottom:24px;text-align:center}.stage-wrap .sticky-head .cta{align-items:center!important}}
@media (max-width:520px){
  .ba{grid-template-columns:1fr}
  .btn{gap:10px;padding:16px;font-size:.95rem}
  .btn .pr b{font-size:1.05rem}
  .event{grid-template-columns:1fr;gap:12px}
}
@media (prefers-reduced-motion:reduce){*{transition:none!important;scroll-behavior:auto!important}}
</style>
</head>
<body>

<?php
/* Reusable CTA button */
function cta($align = 'center') {
  global $value_price, $bonus_line;
  $style = $align === 'left' ? ' style="align-items:flex-start"' : '';
  echo '<div class="cta"' . $style . '><button class="btn" type="button" data-book>Book Your Seat <span class="sep"></span><span class="pr"><b>FREE</b><s>' . $value_price . '</s></span></button><small>(' . $bonus_line . ')</small></div>';
}
?>

<div class="strip"><span>🎥 Live Masterclass</span><span>🧠 No marketing background needed</span><span>⭐ Limited Seats</span></div>
<div class="logo-bar"><a href="/"><img src="../assets/images/logo/satish-rao-horizontal-premium-brand/satish-rao-horizontal-premium-logo.png" alt="Satish Rao" width="180" height="40"></a></div>

<!-- HERO -->
<section class="hero" id="top">
  <div class="in">
    <h1>How Experienced Advisors Become<br>The Expert Clients Choose<b>Before The First Meeting</b></h1>
    <p class="sub">Learn how to <b>position yourself</b> as the <b>expert</b>, stop <b>chasing follow-ups</b>, end <b>fee and commission</b> battles and build a <b>referral engine</b> for long-term growth.</p>
    <img class="photo" src="../assets/images/satish-rao-photos/satish-rao-about-profile-portrait.webp?v=<?= $v ?>" alt="Satish Rao teaching" width="900" height="1200">
    <div class="event">
      <div><span class="ico">📅</span><span><?= $session_day ?><br><?= $session_time ?></span></div>
      <div><span class="ico">🛡️</span><span>100% Free<br>Zero Risk</span></div>
    </div>
    <?php cta(); ?>
  </div>
</section>

<!-- BONUS -->
<section class="gridbg c bonus">
  <div class="in">
    <h2 class="h2">Get Your Free<br><i class="a">Standing Gap Score</i><br>Workbook</h2>
    <div class="phone" aria-hidden="true">
      <div class="t">Standing Gap Score</div>
      <div class="score">25 Qs</div>
      <div class="row">Visibility<i><b style="width:40%"></b></i></div>
      <div class="row">Recognition<i><b style="width:55%"></b></i></div>
      <div class="row">Positioning<i><b style="width:30%"></b></i></div>
      <div class="row">Trust<i><b style="width:70%"></b></i></div>
      <div class="row">Standing<i><b style="width:45%"></b></i></div>
    </div>
    <p class="note-ico">✦ Book your masterclass now to get the ₹2,997 workbook free ✦</p>
  </div>
</section>

<!-- VIDEOS -->
<section class="c">
  <div class="in">
    <div class="stars">★★★★★</div>
    <h2 class="h2" style="margin-top:8px">Hear It Straight<br>From <i class="a">Satish</i></h2>
    <div class="vids">
      <?php
      $shorts = [
        ['1ITbnI5sJBY','You lost the sale before the call started.'],
        ['sXuvYhp7EGU','Why follow-ups are making you look weak'],
        ['UpLtnk4dFfo',"If you're convincing clients, you're losing authority"],
        ['Lfgf7sTE9Aw',"Why expertise isn't enough"],
        ['5ZGZ5uM86X4','Why talking less increases your sales authority'],
        ['cFItgyisQBY',"The most expensive problem isn't rejection"],
      ];
      foreach ($shorts as $s) {
        echo '<a class="vid" href="https://www.youtube.com/shorts/' . $s[0] . '" target="_blank" rel="noopener">'
           . '<img src="https://img.youtube.com/vi/' . $s[0] . '/hqdefault.jpg" alt="" loading="lazy">'
           . '<span class="play"></span><span class="cap">' . htmlspecialchars($s[1]) . '</span></a>';
      }
      ?>
    </div>
    <a class="more" href="https://www.youtube.com/@AskSatishRao" target="_blank" rel="noopener"><u>See More</u></a>
  </div>
</section>

<!-- BIGGEST CHALLENGE -->
<section class="gridbg">
  <div class="in two">
    <div>
      <div class="pill">Your biggest challenge</div>
      <h2 class="h2">What's Your Biggest<br><i class="a">Client Challenge</i><br>Right Now?</h2>
      <p class="teach">(I will teach with real advisor examples)</p>
      <div class="checks" style="margin-top:22px">
        <label class="chk"><input type="checkbox">I meet 20–30 prospects. Only 2–3 sign.</label>
        <label class="chk"><input type="checkbox">They love the plan, then say "let me think"</label>
        <label class="chk"><input type="checkbox">I follow up for months and hear nothing back</label>
        <label class="chk"><input type="checkbox">Clients check my advice against YouTubers</label>
        <label class="chk"><input type="checkbox">Bigger brands get seen. I don't.</label>
        <label class="chk"><input type="checkbox">I'm seen as a salesperson, not an expert</label>
        <label class="chk"><input type="checkbox">Fees and commission get questioned every time</label>
        <label class="chk"><input type="checkbox">I tried ads and workshops. Too expensive.</label>
      </div>
      <p class="teach c" style="margin-top:14px">Tick what applies — and we'll help you solve it during the session.</p>
      <?php cta(); ?>
    </div>
    <div class="books">
      <img src="../assets/images/book-covers/the-trusted-advisor-by-satish-rao-front-page.jpeg" alt="The Trusted Advisor by Satish Rao" loading="lazy">
      <img src="../assets/images/book-covers/the-bridge-by-satish-rao-front-page.png" alt="Build the Bridge by Satish Rao" loading="lazy">
      <p>Frameworks from Satish's books, applied live to your practice.</p>
    </div>
  </div>
</section>

<!-- CURRICULUM -->
<section>
  <div class="in stage-wrap">
    <div class="stages">
      <div class="stage"><div><div class="lab">Stage 1 · <span>00:00 – 15:00 mins</span></div><h3>Why Prospects Decide Before You Speak</h3></div><div class="em">🎯</div></div>
      <div class="stage"><div><div class="lab">Stage 2 · <span>15:00 – 30:00 mins</span></div><h3>The Authority Signals Top Advisors Send Before Contact</h3></div><div class="em">📡</div></div>
      <div class="stage"><div><div class="lab">Stage 3 · <span>30:00 – 45:00 mins</span></div><h3>Why 20 Years of Experience Still Gets Compared on Price</h3></div><div class="em">⚖️</div></div>
      <div class="stage"><div><div class="lab">Stage 4 · <span>45:00 – 60:00 mins</span></div><h3>Your Standing Gap Score: Live Breakdown</h3></div><div class="em">📊</div></div>
      <div class="stage"><div><div class="lab">Stage 5 · <span>60:00 – 75:00 mins</span></div><h3>The Conversation That Ends the Chase</h3></div><div class="em">🤝</div></div>
      <div class="stage"><div><div class="lab">Stage 6 · <span>75:00 – 90:00 mins</span></div><h3>The 90-Day Authority Blueprint + Live Q&amp;A</h3></div><div class="em">🗺️</div></div>
    </div>
    <div class="sticky-head">
      <div class="pill">Course curriculum</div>
      <h2 class="h2">What You'll Learn In This<br><i class="a">90-Minute Masterclass</i></h2>
      <p class="lead">Transform how you attract, convert and keep clients, in just 90 minutes.</p>
      <?php cta('left'); ?>
    </div>
  </div>
</section>

<!-- GLIMPSE: add real session photos, then remove the comment markers.
<section class="gridbg c">
  <div class="in">
    <div class="pill">Our advisors</div>
    <h2 class="h2">A Glimpse Into<br><i class="a">Our Live Sessions</i></h2>
    <p class="lead">Real advisors and real workshop moments, captured live.</p>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(160px,1fr));gap:10px;margin-top:32px">
      <img class="photo" src="../assets/images/sessions/session-1.webp" alt="" loading="lazy">
      <img class="photo" src="../assets/images/sessions/session-2.webp" alt="" loading="lazy">
      <img class="photo" src="../assets/images/sessions/session-3.webp" alt="" loading="lazy">
      <img class="photo" src="../assets/images/sessions/session-4.webp" alt="" loading="lazy">
    </div>
  </div>
</section>
-->

<!-- MENTOR -->
<section class="mentor">
  <div class="in two">
    <img class="photo" src="../assets/images/satish-rao-photos/satish-rao-home-author-preview.webp?v=<?= $v ?>" alt="Satish Rao" width="900" height="1200" loading="lazy">
    <div>
      <div class="pill">Your mentor</div>
      <h2 class="h2">Meet Your Mentor<br><i class="a">Satish Rao</i></h2>
      <p class="tag">The sales leader who helps advisors get chosen before they speak.</p>
      <ul class="creds">
        <li><span>🏆</span><span><b>25 years</b> heading sales &amp; marketing in the medical industry, India and international</span></li>
        <li><span>🇩🇪</span><span><b>Head of Operations</b> for a stent manufacturer in Germany</span></li>
        <li><span>📚</span><span>Author of <b>The Trusted Advisor</b> and <b>Build the Bridge</b></span></li>
        <li><span>🤝</span><span>Former <b>BNI Chapter President</b></span></li>
        <li><span>🚀</span><span><b>10+ years</b> as an entrepreneur: wellness centres and a direct-selling business</span></li>
      </ul>
      <!-- Add follower numbers when ready:
      <div style="display:flex;gap:20px;margin-top:22px;font-weight:700">00K <span style="color:var(--muted);font-weight:500">Followers</span> | 00K <span style="color:var(--muted);font-weight:500">Subscribers</span></div>
      -->
      <?php cta('left'); ?>
    </div>
  </div>
</section>

<!-- BEFORE / AFTER -->
<section class="c">
  <div class="in">
    <div class="pill">Your growth in 90 minutes</div>
    <h2 class="h2">Where You Are Now<br><i class="a">vs Where You'll Be in 90 Minutes</i></h2>
    <div class="ba">
      <div class="col"><h3>Before the Masterclass</h3><ul>
        <li><span class="x">✕</span>Chasing the 3rd and 4th follow-up</li>
        <li><span class="x">✕</span>"Let me think" at the signature</li>
        <li><span class="x">✕</span>Asked about commission first</li>
        <li><span class="x">✕</span>Compared with every other advisor</li>
        <li><span class="x">✕</span>Advice checked against social media</li>
        <li><span class="x">✕</span>Only you can close</li>
        <li><span class="x">✕</span>Alone &amp; unsure what to fix first</li></ul></div>
      <div class="col"><h3>After the Masterclass</h3><ul>
        <li><span class="v">✓</span>Know why prospects really delay</li>
        <li><span class="v">✓</span>Signals that build trust before you meet</li>
        <li><span class="v">✓</span>A way to put your thinking before your fee</li>
        <li><span class="v">✓</span>A clear, one-line position in your niche</li>
        <li><span class="v">✓</span>A meeting structure that leads to a decision</li>
        <li><span class="v">✓</span>Your Standing Gap Score</li>
        <li><span class="v">✓</span>A 90-day authority plan</li></ul></div>
    </div>
    <?php cta(); ?>
  </div>
</section>

<!-- TRUSTED BY (testimonial cards are commented out until real, permissioned quotes are added) -->
<section class="dark c">
  <div class="in">
    <h2 class="h2">Built for Advisors From<br><i class="a">Across India</i></h2>
    <div class="logos"><span>Mutual Fund Distributors</span><span>Insurance Advisors</span><span>Estate Planners</span><span>Luxury Real Estate</span></div>
    <!--
    <div class="tcards">
      <div class="tcard"><div class="stars">★★★★★</div><p>Advisor's own words here.</p><div class="who"><b>Name</b><span>Role, City</span></div></div>
      <div class="tcard"><div class="stars">★★★★★</div><p>Advisor's own words here.</p><div class="who"><b>Name</b><span>Role, City</span></div></div>
      <div class="tcard"><div class="stars">★★★★★</div><p>Advisor's own words here.</p><div class="who"><b>Name</b><span>Role, City</span></div></div>
    </div>
    -->
  </div>
</section>

<!-- GUARANTEE -->
<section class="gridbg">
  <div class="in guar">
    <div>
      <div class="pill">Guarantee</div>
      <h2 class="h2"><i class="a">100% Free</i><br>Zero Risk</h2>
      <h3 style="font-size:1.4rem;font-weight:600;margin-top:22px">No Pitch Pressure!</h3>
      <p class="lead">You pay nothing to attend. Leave anytime, and nobody will call you afterwards unless you ask. If you don't walk away with at least one idea you can use in your next client meeting, tell Satish on WhatsApp.</p>
      <div class="ticks"><span>100% Free</span><span>Leave Anytime</span></div>
      <?php cta('left'); ?>
    </div>
    <div style="display:grid;gap:20px;justify-items:center">
      <div class="seal">100%<br>FREE<small>ZERO RISK</small></div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="c">
  <div class="in">
    <div class="pill">Frequently asked questions</div>
    <h2 class="h2">Still Thinking About It?<br><i class="a">Let's Clear That Up.</i></h2>
    <div class="faq">
      <details><summary>What if I don't like the masterclass?</summary><p>It's free, so you lose nothing. Leave whenever you want, and nobody will call you afterwards unless you ask.</p></details>
      <details><summary>How will I get the link to attend?</summary><p>On WhatsApp, after you register, along with the session date and your Standing Gap Score Workbook.</p></details>
      <details><summary>What will be the language for the masterclass?</summary><p>English.</p></details>
      <details><summary>I'm new to advisory. Will it be useful for me?</summary><p>It's built for advisors with a few years of practice, but newer advisors still get the full framework to build on from day one.</p></details>
      <details><summary>Is this about AI or marketing tools?</summary><p>No. AI helps, but it comes second. The session is about how prospects see you, and why they decide before you speak.</p></details>
      <details><summary>What if I have questions about registration?</summary><p>Message Satish's team on WhatsApp at +91 79967 55513.</p></details>
    </div>
  </div>
</section>

<!-- STILL NOT CONVINCED -->
<section class="final">
  <img src="../assets/images/satish-rao-photos/satish-rao-about-profile-portrait.webp?v=<?= $v ?>" alt="" loading="lazy">
  <div class="in">
    <h2 class="h2"><i class="a">Still Not Convinced?</i></h2>
    <p>It's free. If it doesn't help, you've only spent 90 minutes, and you keep the ₹2,997 workbook anyway.</p>
    <?php cta(); ?>
  </div>
</section>

<footer>
  <p><b>Disclaimer</b><br>This masterclass is educational and covers positioning and client communication for advisors. It is not investment, insurance or legal advice, and no income or business result is promised.</p>
  <p>© <?= date('Y') ?> Satish Rao · Authority Before Contact. All rights reserved.<br>
  <a href="../privacy-policy/">Privacy Policy</a> &nbsp;|&nbsp; <a href="../terms/">Terms</a> &nbsp;|&nbsp; <a href="../disclaimer/">Disclaimer</a> &nbsp;|&nbsp; hello@asksatishrao.com</p>
</footer>

<div class="bar"><div class="in">
  <div class="p"><b>FREE</b><s><?= $value_price ?></s><small>( <?= $bonus_line ?> )</small></div>
  <button class="gbtn" type="button" data-book>Book Your Seat</button>
</div></div>

<!-- REGISTRATION (same fields and endpoint as the previous page) -->
<dialog id="dlg" aria-labelledby="dlg-title">
  <button class="x-close" type="button" aria-label="Close" id="dlg-close">×</button>
  <form id="reg-form" novalidate>
    <h3 id="dlg-title">Book your free seat</h3>
    <p class="lead" style="margin:0"><?= $session_day ?> · <?= $session_time ?> · 90 min on Zoom</p>
    <label for="mc_name">Full name<input type="text" id="mc_name" name="name" autocomplete="name" required></label>
    <label for="mc_whatsapp">WhatsApp number<input type="tel" id="mc_whatsapp" name="whatsapp" autocomplete="tel" placeholder="+91 98XXX XXXXX" required></label>
    <label for="mc_email">Email<input type="email" id="mc_email" name="email" autocomplete="email" required></label>
    <label for="mc_niche">You are a<select id="mc_niche" name="niche" required>
      <option value="">Choose one</option>
      <option value="mutual-fund">Mutual fund advisor / distributor</option>
      <option value="insurance">Insurance / estate-planning advisor</option>
      <option value="real-estate">Real estate advisor</option>
      <option value="other">Other advisory practice</option>
    </select></label>
    <div class="hp" aria-hidden="true"><label for="mc_website">Website<input type="text" id="mc_website" name="website" tabindex="-1" autocomplete="off"></label></div>
    <div class="err" id="reg-err" hidden></div>
    <button class="btn" type="submit" style="justify-content:center">Confirm My Seat</button>
    <p style="font-size:.8rem;color:var(--muted);text-align:center">No spam. Satish will reach you personally on WhatsApp.</p>
  </form>
  <div class="dlg-ok" id="reg-success" hidden>
    <h3>✓ Your seat is reserved.</h3>
    <p class="lead" style="margin:0">Satish will be in touch on WhatsApp with the session date and your Standing Gap Score Workbook. Opening WhatsApp now…</p>
  </div>
</dialog>

<script>
(function () {
  var REGISTER_ENDPOINT = '../api/masterclass-register.php';
  var SATISH_WHATSAPP = '<?= $whatsapp_no ?>';
  var labels = {
    'real-estate': 'Real Estate', 'mutual-fund': 'Mutual Fund Advisory',
    'insurance': 'Insurance / Estate Planning', 'other': 'Other advisory practice'
  };
  var dlg = document.getElementById('dlg');
  var form = document.getElementById('reg-form');
  var err = document.getElementById('reg-err');

  function openDlg() { if (dlg.showModal) dlg.showModal(); else dlg.setAttribute('open', ''); }
  function closeDlg() { if (dlg.close) dlg.close(); else dlg.removeAttribute('open'); }
  document.querySelectorAll('[data-book]').forEach(function (b) { b.addEventListener('click', openDlg); });
  document.getElementById('dlg-close').addEventListener('click', closeDlg);
  dlg.addEventListener('click', function (e) { if (e.target === dlg) closeDlg(); });

  function val(id) { return document.getElementById(id).value.trim(); }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    var name = val('mc_name'), wa = val('mc_whatsapp'), email = val('mc_email'), niche = val('mc_niche');
    var digits = wa.replace(/\D/g, '');
    var msg = !name ? 'Please enter your full name.'
      : (digits.length < 10 || digits.length > 13) ? 'Please enter a valid WhatsApp number.'
      : !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email) ? 'Please enter a valid email address.'
      : !niche ? 'Please choose your practice.' : '';
    if (msg) { err.textContent = msg; err.hidden = false; return; }
    err.hidden = true;

    var fd = new FormData();
    fd.append('name', name);
    fd.append('whatsapp', wa);
    fd.append('email', email);
    fd.append('niche', niche);
    fd.append('website', val('mc_website'));
    fd.append('_source_url', window.location.href);
    fetch(REGISTER_ENDPOINT, { method: 'POST', body: fd }).catch(function () {});

    if (window.fbq) { try { fbq('track', 'Lead'); } catch (x) {} }
    if (window.gtag) { try { gtag('event', 'generate_lead'); } catch (x) {} }

    form.hidden = true;
    document.getElementById('reg-success').hidden = false;
    var text = encodeURIComponent(
      'Hi Satish, I just registered for The Authority Shift masterclass.\n\n' +
      'Name: ' + name + '\nPractice: ' + (labels[niche] || niche) + '\n\n' +
      'I have been recognised for my work - but I am still not being chosen the way I should be. I want to understand how to change that.'
    );
    setTimeout(function () {
      window.open('https://api.whatsapp.com/send/?phone=' + SATISH_WHATSAPP + '&text=' + text, '_blank', 'noopener,noreferrer');
    }, 800);
  });
})();
</script>
</body>
</html>
