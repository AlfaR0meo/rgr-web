<!DOCTYPE html>
<html lang="ru">
<head>
    @include('blocks.head', ['page_title' => 'site_map'])
</head>
<body>
    <div class="page-wrapper">
        
        @include("blocks.nav")

        <section class="section site_map">
            <div class="container">
                <h1 data-text="site_map"></h1>
            </div>
        </section>


        
    </div>
</body>
</html>