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

self.addEventListener('activate', function(event) {
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.filter(function(cacheName) {
          // Xóa các bộ nhớ đệm cũ không cần thiết
          return cacheName !== 'my-cache-v1'; 
        }).map(function(cacheName) {
          return caches.delete(cacheName);
        })
      );
    })
  );
});