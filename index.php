<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>[ PWNED BY H3X4R00T ]</title>
<link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>&#128128;</text></svg>">
<style>
@import url('https://fonts.googleapis.com/css2?family=Share+Tech+Mono&display=swap');

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  user-select: none;
}

body {
  background: #000;
  color: #00ff00;
  font-family: 'Share Tech Mono', monospace;
  overflow: hidden;
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  position: relative;
}

#matrix {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  z-index: 0;
  opacity: 0.15;
  pointer-events: none;
}

.scanlines {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 999;
  pointer-events: none;
  background: repeating-linear-gradient(
    0deg,
    rgba(0, 0, 0, 0.15) 0px,
    rgba(0, 0, 0, 0.15) 1px,
    transparent 1px,
    transparent 3px
  );
}

.vignette {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 998;
  pointer-events: none;
  background: radial-gradient(ellipse at center, transparent 0%, rgba(0,0,0,0.8) 100%);
}

.container {
  z-index: 10;
  text-align: center;
  position: relative;
  max-width: 95vw;
}

.glitch-wrapper {
  position: relative;
  margin-bottom: 20px;
}

.glitch {
  font-size: clamp(2.5rem, 8vw, 6rem);
  font-weight: bold;
  color: #00ff00;
  text-shadow: 2px 2px 0px #ff0000, -2px -2px 0px #0000ff;
  position: relative;
  letter-spacing: 5px;
  animation: textFlicker 3s linear infinite;
}

.glitch::before,
.glitch::after {
  content: attr(data-text);
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.glitch::before {
  animation: glitch1 0.5s infinite linear alternate-reverse;
  color: #ff0000;
  z-index: -1;
}

.glitch::after {
  animation: glitch2 0.5s infinite linear alternate-reverse;
  color: #0000ff;
  z-index: -2;
}

@keyframes glitch1 {
  0% { clip-path: inset(0 0 0 0); transform: translate(-4px, -2px); opacity: 0.8; }
  10% { clip-path: inset(20% 0 60% 0); transform: translate(3px, 1px); }
  20% { clip-path: inset(50% 0 20% 0); transform: translate(-3px, 2px); }
  30% { clip-path: inset(80% 0 5% 0); transform: translate(4px, -1px); }
  40% { clip-path: inset(10% 0 70% 0); transform: translate(-2px, 3px); }
  50% { clip-path: inset(60% 0 30% 0); transform: translate(3px, -2px); }
  60% { clip-path: inset(30% 0 50% 0); transform: translate(-4px, 1px); }
  70% { clip-path: inset(70% 0 10% 0); transform: translate(2px, 2px); }
  80% { clip-path: inset(5% 0 85% 0); transform: translate(-3px, -3px); }
  90% { clip-path: inset(40% 0 40% 0); transform: translate(4px, 0); }
  100% { clip-path: inset(0 0 0 0); transform: translate(-2px, 1px); opacity: 0.8; }
}

@keyframes glitch2 {
  0% { clip-path: inset(0 0 0 0); transform: translate(4px, 2px); opacity: 0.6; }
  15% { clip-path: inset(70% 0 10% 0); transform: translate(-3px, -1px); }
  30% { clip-path: inset(20% 0 60% 0); transform: translate(4px, 3px); }
  45% { clip-path: inset(50% 0 30% 0); transform: translate(-4px, 0); }
  60% { clip-path: inset(10% 0 80% 0); transform: translate(3px, -2px); }
  75% { clip-path: inset(85% 0 5% 0); transform: translate(-2px, 1px); }
  90% { clip-path: inset(35% 0 45% 0); transform: translate(4px, 2px); }
  100% { clip-path: inset(0 0 0 0); transform: translate(3px, -1px); opacity: 0.6; }
}

@keyframes textFlicker {
  0%, 19%, 21%, 23%, 25%, 54%, 56%, 100% {
    opacity: 1;
    text-shadow: 2px 2px 0px #ff0000, -2px -2px 0px #0000ff, 0 0 20px #00ff00;
  }
  20%, 24%, 55% { opacity: 0.3; text-shadow: none; }
}

.subtitle {
  font-size: clamp(0.8rem, 3vw, 1.4rem);
  color: #00aa00;
  margin-bottom: 30px;
  letter-spacing: 3px;
  animation: blink 1.5s step-end infinite;
}

@keyframes blink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0; }
}

.marquee-container {
  width: 95vw;
  overflow: hidden;
  border-top: 2px solid #00ff00;
  border-bottom: 2px solid #00ff00;
  padding: 10px 0;
  margin: 20px 0;
  position: relative;
  background: rgba(0, 20, 0, 0.3);
  z-index: 10;
}

.marquee-label {
  position: absolute;
  left: 10px;
  top: -10px;
  background: #000;
  color: #ff0000;
  padding: 0 8px;
  font-size: 0.7rem;
  z-index: 11;
  border: 1px solid #ff0000;
}

.marquee-track {
  display: inline-block;
  white-space: nowrap;
  animation: marquee 200s linear infinite;
}

.marquee-container:hover .marquee-track {
  animation-play-state: paused;
}

@keyframes marquee {
  0% { transform: translateX(100vw); }
  100% { transform: translateX(-100%); }
}

.hacker-name {
  display: inline-block;
  margin: 0 20px;
  color: #00ff00;
  font-size: clamp(0.9rem, 2.5vw, 1.2rem);
  text-shadow: 0 0 10px #00ff00;
}

.hacker-name::before {
  content: '[ ';
  color: #ff0000;
}

.hacker-name::after {
  content: ' ]';
  color: #ff0000;
}

.terminal {
  width: 90vw;
  max-width: 700px;
  background: rgba(0, 10, 0, 0.85);
  border: 1px solid #00ff00;
  border-radius: 5px;
  padding: 15px;
  text-align: left;
  font-size: clamp(0.7rem, 2vw, 0.95rem);
  margin: 20px auto;
  position: relative;
  z-index: 10;
  box-shadow: 0 0 30px rgba(0, 255, 0, 0.2);
}

.terminal-header {
  display: flex;
  justify-content: space-between;
  border-bottom: 1px solid #00ff00;
  padding-bottom: 8px;
  margin-bottom: 10px;
  color: #00aa00;
  font-size: 0.8rem;
}

.terminal-dots {
  display: flex;
  gap: 6px;
}

.dot {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  display: inline-block;
}

.dot.red { background: #ff0000; }
.dot.yellow { background: #ffff00; }
.dot.green { background: #00ff00; }

.terminal-content {
  line-height: 1.6;
  min-height: 120px;
}

.terminal-content .line {
  margin: 2px 0;
}

.prompt { color: #ff0000; }
.success { color: #00ff00; }
.info { color: #00aaff; }
.warning { color: #ffaa00; }
.error-text { color: #ff0000; text-shadow: 0 0 5px #ff0000; }

.cursor {
  display: inline-block;
  width: 8px;
  height: 14px;
  background: #00ff00;
  animation: cursorBlink 0.8s step-end infinite;
  vertical-align: text-bottom;
}

@keyframes cursorBlink {
  0%, 100% { opacity: 1; }
  50% { opacity: 0; }
}

.error-popup {
  position: fixed;
  z-index: 10000;
  background: #1a1a2e;
  border: 2px solid #ff0000;
  border-radius: 3px;
  box-shadow: 0 0 20px rgba(255, 0, 0, 0.5);
  animation: popupShake 0.1s linear infinite, popupAppear 0.3s ease-out;
  min-width: 250px;
  max-width: 350px;
}

@keyframes popupShake {
  0%, 100% { transform: translate(0, 0); }
  25% { transform: translate(-1px, 1px); }
  50% { transform: translate(1px, -1px); }
  75% { transform: translate(-1px, -1px); }
}

@keyframes popupAppear {
  0% { transform: scale(0); opacity: 0; }
  100% { transform: scale(1); opacity: 1; }
}

.error-popup-header {
  background: #ff0000;
  color: #fff;
  padding: 5px 10px;
  font-size: 0.8rem;
  display: flex;
  justify-content: space-between;
  align-items: center;
  cursor: pointer;
}

.error-popup-header .close {
  font-weight: bold;
  font-size: 1rem;
}

.error-popup-body {
  padding: 15px;
  color: #ff6666;
  font-size: 0.8rem;
  line-height: 1.4;
}

.error-code {
  color: #ff0000;
  font-weight: bold;
  margin-bottom: 8px;
}

.footer {
  position: fixed;
  bottom: 5px;
  left: 0;
  right: 0;
  text-align: center;
  font-size: 0.65rem;
  color: #005500;
  z-index: 10;
  letter-spacing: 1px;
}

.stats-bar {
  display: flex;
  justify-content: center;
  gap: 30px;
  margin-top: 10px;
  flex-wrap: wrap;
  z-index: 10;
}

.stat {
  font-size: 0.75rem;
  color: #00aa00;
  border: 1px solid #004400;
  padding: 4px 10px;
  background: rgba(0, 30, 0, 0.5);
}

.stat span {
  color: #ff0000;
  font-weight: bold;
}

#bootScreen {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  background: #000;
  z-index: 100000;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  color: #00ff00;
  font-size: 0.85rem;
  padding: 20px;
}

#bootScreen.hidden {
  display: none;
}

.boot-text {
  white-space: pre-wrap;
  text-align: left;
  max-width: 600px;
  width: 90%;
}

#flash {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: white;
  z-index: 99999;
  pointer-events: none;
  opacity: 0;
}

.audio-visual {
  display: flex;
  align-items: flex-end;
  justify-content: center;
  gap: 3px;
  height: 30px;
  margin: 15px 0;
  z-index: 10;
}

.bar {
  width: 4px;
  background: #00ff00;
  border-radius: 2px;
  animation: audioBar 0.8s ease-in-out infinite alternate;
  box-shadow: 0 0 5px #00ff00;
}

@keyframes audioBar {
  0% { height: 5px; opacity: 0.5; }
  100% { height: 30px; opacity: 1; }
}

@media (max-width: 600px) {
  .glitch { letter-spacing: 2px; }
  .marquee-container { width: 98vw; }
  .terminal { width: 95vw; }
}
</style>
</head>
<body>

<div id="bootScreen">
  <div class="boot-text" id="bootText"></div>
</div>

<div id="flash"></div>

<canvas id="matrix"></canvas>

<div class="scanlines"></div>
<div class="vignette"></div>

<div class="container">
  <div class="glitch-wrapper">
    <div class="glitch" data-text="PWNED BY H3X4R00T">PWNED BY H3X4R00T</div>
  </div>

  <div class="subtitle">&#9760; SYSTEM COMPROMISED &#9760;</div>

  <div class="audio-visual" id="audioVisual"></div>

  <div class="stats-bar">
    <div class="stat">IP: <span>127.0.0.1</span></div>
    <div class="stat">PORT: <span>4444</span></div>
    <div class="stat">SHELL: <span>root@owned</span></div>
    <div class="stat">STATUS: <span>COMPROMISED</span></div>
  </div>
</div>

<div class="marquee-container">
  <span class="marquee-label">&#9888; ACTIVE THREATS &#9888;</span>
  <div class="marquee-track" id="marqueeTrack"></div>
</div>

<div class="terminal">
  <div class="terminal-header">
    <div class="terminal-dots">
      <span class="dot red"></span>
      <span class="dot yellow"></span>
      <span class="dot green"></span>
    </div>
    <span>root@H3X4R00T:~# REVERSE_SHELL</span>
    <span>[PID: 1337]</span>
  </div>
  <div class="terminal-content" id="terminalContent"></div>
</div>

<div class="footer">
  [ H3X4R00T SECURITY RESEARCH TEAM :: NO SYSTEM IS SAFE :: 1337 DAY ]
</div>

<script>
var hackerNames = [
  "H3X4R00T", "Zer0Day", "Mr.R00t", "GhostPhantom", "N1ghtCr4wler",
  "D3vilC0de", "Cr1msonReaper", "V3n0mX", "Sh4d0wW4lk3r", "Bl4ckH4t",
  "T0x1cP4in", "CyberW0lf", "F4lconEye", "R4v3nCl4w", "N3cr0m4nc3r",
  "D4rkS1d3", "Ph4ntomX", "1nj3ct0r", "Xpl01t3r", "Byt3R34p3r",
  "Gr1mR34p3r", "S4t4n1cC0d3r", "H4ck3rPr0", "N00bSl4y3r", "L33tH4x0r",
  "Sp4rkZ", "El3ctr0n", "N30Gr3n4d3", "C0br4Str1k3", "V1p3rB1t3",
  "Sc0rp10n", "T4rantul4", "Bl4ckW1d0w", "D34dP00l", "W4rL0ck",
  "Brut3F0rc3", "M4lW4r3", "R4ns0mW4r3", "Tr0j4nH0rs3", "K3yL0gg3r",
  "Sp00f3r", "Sn1ff3r", "P4ck3tR1pp3r", "F1r3W4llByp4ss", "SQL1nj3ct",
  "XSSM4st3r", "LFI-RF1", "R3v3rs3Sh3ll", "Pr1vEsc", "R00tK1t",
  "B0tn3tZ", "DD0SM4st3r", "B0tH3rD3r", "Z0mb13N3t", "P4yl04dX",
  "Sh3llC0d3", "M3t4splo1t", "N3ssus", "B33fFr4m3", "H4shC4t",
  "J0hNTh3R1pp3r", "H4shC4t3r", "Pr0xyN3xus", "VPNBr34k3r", "T0rN3t",
  "D34DDr0p", "Cr3dSt0rm", "Ph1shM4st3r", "S0c1alEng1n33r", "M4n1pul4t0r",
  "CrypT0L0ck", "R4ns0mCr1pt", "Z3r0L0g0n", "P0l1m0rph", "Armr0ss",
  "N3tF4ck3r", "W1r3sh4rk", "4rpsp00f", "DNSH1j4ck", "BGPH1j4ck",
  "R0ut3rPwn", "1oTCr4ck", "SMBL0g1n", "RDPBr34ch", "SSHBrut3",
  "FTPAn0n", "T3ln3tH4x", "M0d3mH4ck", "C4m3r4Sp1", "M1cr0Ph0n3P1",
  "K3yStr0k3R", "Scr33nGr4b", "P4ssw0rdFu", "H4shC4t9k", "S4ltCr4ck",
  "R41nb0wT4bl3", "D1ct10n4ry", "H1brut3", "Hydr4X", "M3dus4X",
  "P4tr0n", "N1kT0"
];

// ===== BOOT SEQUENCE =====
var bootTexts = [
  "[BOOT] Initializing H3X4R00T v3.0.7...",
  "[ OK ] Loading kernel modules...",
  "[ OK ] Bypassing firewall...",
  "[ OK ] Injecting payload...",
  "[ OK ] Establishing reverse shell...",
  "[ OK ] Escalating privileges...",
  "[ OK ] Root access granted!",
  "[ WARN ] Target system compromised!",
  "[ INFO ] Deploying implant...",
  "[ OK ] Covering tracks...",
  "",
  "> ACCESS GRANTED <"
];

var bootScreen = document.getElementById('bootScreen');
var bootTextEl = document.getElementById('bootText');
var flashEl = document.getElementById('flash');
var bootIndex = 0;

function runBoot() {
  if (bootIndex < bootTexts.length) {
    var line = bootTexts[bootIndex];
    var color = '#00cc00';
    if (line.indexOf('GRANTED') > -1) color = '#00ff00';
    else if (line.indexOf('WARN') > -1) color = '#ffaa00';
    else if (line.indexOf('ERROR') > -1) color = '#ff0000';
    bootTextEl.innerHTML += '<div style="color:' + color + '">' + line + '</div>';
    bootIndex++;
    setTimeout(runBoot, Math.random() * 300 + 150);
  } else {
    setTimeout(function() {
      flashEl.style.opacity = '1';
      flashEl.style.transition = 'none';
      setTimeout(function() {
        flashEl.style.transition = 'opacity 0.5s ease-out';
        flashEl.style.opacity = '0';
        bootScreen.classList.add('hidden');
        initPage();
      }, 100);
    }, 800);
  }
}

// ===== INIT PAGE =====
function initPage() {
  var marqueeTrack = document.getElementById('marqueeTrack');
  var marqueeHTML = '';
  for (var i = 0; i < hackerNames.length; i++) {
    marqueeHTML += '<span class="hacker-name">' + hackerNames[i] + '</span>';
  }
  marqueeHTML += marqueeHTML;
  marqueeTrack.innerHTML = marqueeHTML;

  var audioVisual = document.getElementById('audioVisual');
  for (var j = 0; j < 20; j++) {
    var bar = document.createElement('div');
    bar.className = 'bar';
    bar.style.animationDelay = (Math.random() * 0.8) + 's';
    bar.style.animationDuration = (Math.random() * 0.5 + 0.4) + 's';
    audioVisual.appendChild(bar);
  }

  typeTerminal();
  spawnErrorPopups();
  randomGlitch();
}

// ===== TERMINAL TYPING =====
var terminalLines = [
  { text: "root@H3X4R00T:~# whoami", cls: "" },
  { text: "H3X4R00T", cls: "success" },
  { text: "root@H3X4R00T:~# cat /etc/shadow", cls: "" },
  { text: "root:$6$hash...::0:99999:7:::", cls: "warning" },
  { text: "root@H3X4R00T:~# nmap -sS -O target.com", cls: "" },
  { text: "PORT     STATE SERVICE", cls: "info" },
  { text: "22/tcp   open  ssh", cls: "info" },
  { text: "80/tcp   open  http", cls: "info" },
  { text: "443/tcp  open  https", cls: "info" },
  { text: "3389/tcp open  rdp", cls: "warning" },
  { text: "[*] Exploiting CVE-2024-1337...", cls: "warning" },
  { text: "[+] Exploit successful!", cls: "success" },
  { text: "[+] Privilege escalation complete", cls: "success" },
  { text: "[!!!] SYSTEM PWNED BY H3X4R00T [!!!]", cls: "error-text" }
];

var terminalContent = document.getElementById('terminalContent');

function typeTerminal() {
  var lineIndex = 0;

  function typeLine() {
    if (lineIndex >= terminalLines.length) {
      setTimeout(function() {
        terminalContent.innerHTML = '';
        lineIndex = 0;
        typeLine();
      }, 3000);
      return;
    }

    var line = terminalLines[lineIndex];
    var div = document.createElement('div');
    div.className = 'line ' + line.cls;
    terminalContent.appendChild(div);

    var charIndex = 0;

    function typeChar() {
      if (charIndex < line.text.length) {
        div.textContent += line.text[charIndex];
        charIndex++;
        setTimeout(typeChar, Math.random() * 20 + 5);
      } else {
        lineIndex++;
        setTimeout(typeLine, Math.random() * 400 + 100);
      }
    }

    typeChar();
  }

  typeLine();
}

// ===== ERROR POPUPS =====
var errorMessages = [
  { title: "CRITICAL ERROR", code: "ERR_ACCESS_DENIED", msg: "Access to /etc/shadow is denied. Attempting bypass..." },
  { title: "SYSTEM ALERT", code: "ERR_PRIVILEGE_ESC", msg: "Privilege escalation detected! User H3X4R00T has gained root access." },
  { title: "SECURITY BREACH", code: "ERR_FIREWALL_BYPASS", msg: "Firewall rules have been modified. Unknown traffic allowed on port 4444." },
  { title: "WARNING", code: "ERR_PAYLOAD_EXEC", msg: "Unknown payload executed in /tmp/.hidden/meterpreter. Cannot be terminated." },
  { title: "CONNECTION LOST", code: "ERR_C2_DISCONNECT", msg: "Command and Control server connection lost. Reconnecting..." },
  { title: "KERNEL PANIC", code: "ERR_KERNEL_ROOTKIT", msg: "Rootkit detected in kernel space. Module h3x_rk.ko cannot be unloaded." },
  { title: "MEMORY CORRUPT", code: "ERR_HEAP_OVERFLOW", msg: "Heap buffer overflow at 0x7FF3A2B4C001. Exploit attempt in progress..." },
  { title: "NETWORK ALERT", code: "ERR_PORT_SCAN", msg: "Massive port scanning activity detected from your IP." },
  { title: "CRITICAL", code: "ERR_DNS_HIJACK", msg: "DNS settings modified. All traffic routed through malicious nameserver." },
  { title: "INTRUSION", code: "ERR_BACKDOOR_ACTIVE", msg: "Backdoor service listening on all interfaces. Port 4444 open." }
];

function spawnErrorPopups() {
  function spawnPopup() {
    var popup = document.createElement('div');
    popup.className = 'error-popup';

    var err = errorMessages[Math.floor(Math.random() * errorMessages.length)];

    popup.innerHTML =
      '<div class="error-popup-header">' +
      '<span>&#9888; ' + err.title + '</span>' +
      '<span class="close">&#10005;</span>' +
      '</div>' +
      '<div class="error-popup-body">' +
      '<div class="error-code">' + err.code + '</div>' +
      err.msg +
      '</div>';

    popup.style.left = (Math.random() * (window.innerWidth - 300)) + 'px';
    popup.style.top = (Math.random() * (window.innerHeight - 200)) + 'px';

    document.body.appendChild(popup);

    popup.querySelector('.close').addEventListener('click', function() {
      popup.remove();
    });

    setTimeout(function() {
      if (document.body.contains(popup)) {
        popup.style.transition = 'opacity 0.3s';
        popup.style.opacity = '0';
        setTimeout(function() { popup.remove(); }, 300);
      }
    }, Math.random() * 4000 + 2000);
  }

  function scheduleNext() {
    setTimeout(function() {
      spawnPopup();
      scheduleNext();
    }, Math.random() * 3000 + 1000);
  }

  scheduleNext();
}

// ===== RANDOM GLITCH =====
function randomGlitch() {
  setInterval(function() {
    if (Math.random() > 0.7) {
      document.body.style.transform = 'translate(' + (Math.random() * 6 - 3) + 'px, ' + (Math.random() * 6 - 3) + 'px)';
      setTimeout(function() {
        document.body.style.transform = 'translate(0, 0)';
      }, 100);
    }

    if (Math.random() > 0.8) {
      document.body.style.filter = 'invert(1) hue-rotate(90deg)';
      setTimeout(function() {
        document.body.style.filter = 'none';
      }, 50 + Math.random() * 100);
    }

    if (Math.random() > 0.85) {
      var container = document.querySelector('.container');
      container.style.textShadow =
        (Math.random() * 10 - 5) + 'px 0 rgba(255,0,0,0.8), ' +
        (Math.random() * 10 - 5) + 'px 0 rgba(0,255,0,0.8)';
      setTimeout(function() {
        container.style.textShadow = 'none';
      }, 80 + Math.random() * 200);
    }

    if (Math.random() > 0.9) {
      var glitch = document.querySelector('.glitch');
      glitch.style.clipPath = 'inset(' + (Math.random() * 50) + '% 0 ' + (Math.random() * 50) + '% 0)';
      glitch.style.transform = 'translateX(' + (Math.random() * 20 - 10) + 'px)';
      setTimeout(function() {
        glitch.style.clipPath = '';
        glitch.style.transform = '';
      }, 60 + Math.random() * 150);
    }
  }, 300);
}

// ===== MATRIX RAIN =====
function initMatrix() {
  var canvas = document.getElementById('matrix');
  var ctx = canvas.getContext('2d');

  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;

  var chars = "アイウエオカキクケコサシスセソタチツテトナニヌネノハヒフヘホマミムメモヤユヨラリルレロワヲン0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ<>{}[]*-+=~";

  var fontSize = 14;
  var columns = canvas.width / fontSize;

  var drops = [];
  for (var i = 0; i < columns; i++) {
    drops[i] = Math.random() * -100;
  }

  function draw() {
    ctx.fillStyle = 'rgba(0, 0, 0, 0.05)';
    ctx.fillRect(0, 0, canvas.width, canvas.height);

    ctx.font = fontSize + 'px monospace';

    for (var i = 0; i < drops.length; i++) {
      var char = chars[Math.floor(Math.random() * chars.length)];
      ctx.fillStyle = Math.random() > 0.975 ? '#ffffff' : '#00ff00';
      ctx.fillText(char, i * fontSize, drops[i] * fontSize);

      if (drops[i] * fontSize > canvas.height && Math.random() > 0.975) {
        drops[i] = 0;
      }
      drops[i]++;
    }
  }

  setInterval(draw, 35);

  window.addEventListener('resize', function() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  });
}

// ===== CONSOLE EASTER EGG =====
console.log('%c[!] SECURITY WARNING', 'color: red; font-size: 20px; font-weight: bold;');
console.log('%cThis system has been PWNED by H3X4R00T', 'color: #00ff00; font-size: 14px;');

// ===== INIT =====
window.addEventListener('DOMContentLoaded', function() {
  initMatrix();
  runBoot();
});
</script>

</body>
</html>
