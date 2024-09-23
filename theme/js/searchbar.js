function searchPage() {
  const input = document.getElementById("searchInput").value.toLowerCase();
  const pageMap = {
    "home": "home.html",
    "about us": "about.html",
    "contact us": "contact.html",
    "allroom": ".html",
  };

  if (pageMap[input]) {
    window.location.href = pageMap[input];
  } else {
    alert("Page not found. Please try again.");
  }
}
