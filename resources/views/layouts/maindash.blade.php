<!-- component -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css"
    />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <title>PKKMB | Dashboard</title>
  </head>
  <body class="">
    @include('partials.sidebar')
            <!--Container Start-->
            <div>
                @yield('container') 
            </div>
            <!--Container End-->
    @include('partials.footerdash')
  </body>
</html>