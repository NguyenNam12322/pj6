const CACHE_NAME = 'image-cache-v1';
const urlsToCache = [
    'https://muasamtaikho.vn/crawl-blade',
   
];

self.addEventListener('install', event => {
    event.waitUntil(
        caches.open(CACHE_NAME)
            .then(cache => {
                return cache.addAll(urlsToCache);
            })
    );
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request)
            .then(function(response) {
                return response || fetch(event.request)
                    .then(function(response) {
                        caches.open('image-cache-v1').then(function(cache) {
                            cache.put(event.request, response.clone());
                        });
                        return response;
                    });
            })
    );
});