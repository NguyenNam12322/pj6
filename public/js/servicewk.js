self.addEventListener('install', event => {
  event.waitUntil(
    caches.open('image-cache-v1').then(cache => {
      return cache.addAll([
        'public/images/template/logo4.webp',
        
        // Liệt kê các hình ảnh cần lưu trữ ở đây
      ]);
    })
  );
  self.skipWaiting();
});

self.addEventListener('fetch', event => {
  if (event.request.destination === 'image') {
    event.respondWith(
      caches.match(event.request).then(response => {
        return response || fetch(event.request).then(fetchResponse => {
          return caches.open('image-cache-v1').then(cache => {
            cache.put(event.request, fetchResponse.clone());
            return fetchResponse;
          });
        });
      })
    );
  }
});