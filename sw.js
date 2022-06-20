self.addEventListener("install", e=> {
   e.waitUntil(
       caches.open("static").then(cache =>{
           return cache.addAll(["./", "./css/style.css","./pages/login.php","./pages/login","./pages/contact.php","./pages/competetion.php","./img/logo192.png","./node_modules/lax.js/lib/lax.js"])
       })
   );
});

self.addEventListener("fetch", e=> {
    e.respondWith(
        caches.match(e.request).then(response =>{
            return response || fetch (e.request);
        })
    )
})