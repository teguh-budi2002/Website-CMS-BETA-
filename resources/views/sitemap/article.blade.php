<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($posts as $post)
        <url>
            <loc>{{url($post->slug)}}</loc>
            <lastmod>{{ $post->created_at->format('d-m-Y') }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.1</priority>
        </url>
    @endforeach
</urlset>