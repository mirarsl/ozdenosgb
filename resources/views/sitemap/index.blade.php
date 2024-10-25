@php
    echo '<?xml version="1.0" encoding="UTF-8"?>';
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ date('Y-m-d') }}T{{date('H:i:s')}}+00:00</lastmod>
        <changefreq>Daily</changefreq>
        <priority>1.0</priority>
    </url>


    @foreach ($Page as $page)
        <url>
            <loc>{{ route('page', $page->slug) }}</loc>
            <lastmod>{{ date('Y-m-d') }}T{{date('H:i:s')}}+00:00</lastmod>
            <changefreq>Daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($Service as $service)
        <url>
            <loc>{{ route('service', $service->fullSlug()) }}</loc>
            <lastmod>{{ date('Y-m-d') }}T{{date('H:i:s')}}+00:00</lastmod>
            <changefreq>Daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach

    @foreach ($ClientCategories as $clientCategory)
        <url>
            <loc>{{ route('client-categories', $clientCategory->slug) }}</loc>
            <lastmod>{{ date('Y-m-d') }}T{{date('H:i:s')}}+00:00</lastmod>
            <changefreq>Daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($News as $news)
        <url>
            <loc>{{ route('news', $news->slug) }}</loc>
            <lastmod>{{ date('Y-m-d') }}T{{date('H:i:s')}}+00:00</lastmod>
            <changefreq>Daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach

    @foreach ($Accreditation as $accreditation)
        <url>
            <loc>{{ route('accreditation', $accreditation->slug) }}</loc>
            <lastmod>{{ date('Y-m-d') }}T{{date('H:i:s')}}+00:00</lastmod>
            <changefreq>Daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($Posters as $poster)
        <url>
            <loc>{{ route('posters', $poster->slug) }}</loc>
            <lastmod>{{ date('Y-m-d') }}T{{date('H:i:s')}}+00:00</lastmod>
            <changefreq>Daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach

    @foreach ($Presentation as $presentation)
        <url>
            <loc>{{ route('presentation', $presentation->slug) }}</loc>
            <lastmod>{{ date('Y-m-d') }}T{{date('H:i:s')}}+00:00</lastmod>
            <changefreq>Daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach

    @foreach ($Coverages as $coverage)
        <url>
            <loc>{{ route('coverage', $coverage->slug) }}</loc>
            <lastmod>{{ date('Y-m-d') }}T{{date('H:i:s')}}+00:00</lastmod>
            <changefreq>Daily</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($Blogs as $blog)
        <url>
            <loc>{{ route('blog', $blog->slug) }}</loc>
            <lastmod>{{ date('Y-m-d') }}T{{date('H:i:s')}}+00:00</lastmod>
            <changefreq>Daily</changefreq>
            <priority>1.0</priority>
        </url>
    @endforeach


    




</urlset>