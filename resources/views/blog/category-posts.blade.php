<section class="bg-gray-100">
    @include('layouts.nav')
    <div class="container p-4">
      <header>
        <p class="text-4xl font-sans font-semibold text-center text-slate-800 mb-2 mt-3">Artikel Berdasarkan Kategori</p>

      </header>
        <div class="row">
            @foreach ($categories as $category)
                <div class="card p-4 mt-4">
                    <div class="card-image">
                        <img src="https://source.unsplash.com/1200x400">
                        <span class="card-title text-2xl text-gray-800">{{ $category->name }}</span>
                    </div>
                    <div class="flex items-center justify-start mt-3">
                      <a href="/post/categories/{{ $category->slug }}"
                          class="no-underline inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                          Read more
                          <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd"
                                  d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                  clip-rule="evenodd"></path>
                          </svg>
                      </a>
                  </div>
                </div>
            @endforeach
        </div>
    </div>
    @include('layouts.footer')
</section>
