<!doctype html>

<title>To Do List</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<link href="https://cdn.jsdelivr.net/npm/@tailwindcss/custom-forms@0.2.1/dist/custom-forms.css" rel="stylesheet">

<style>
    input[type=checkbox]:checked + span{
  color:green !important;
  text-decoration: line-through;
}
html {
        scroll-behavior: smooth;
    }
    .clamp {
        display: -webkit-box;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .clamp.one-line {
        -webkit-line-clamp: 1;
    }
</style>
<body style="font-family: Open Sans, sans-serif" class="bg-blue-50">
<section class="px-6 py-8">
<main class="max-w-4xl mx-auto mt-28 ">

        @yield('content')
      </section>
  </main>
    </body>
</html>