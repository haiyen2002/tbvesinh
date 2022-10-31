@if ($categories && count($categories))
    <div class="col-lg-9 col-12 my-3">
        <h2 class="text-center h4 primary-text-color">Thiết bị vệ sinh</h2>
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-6 col-md-4 my-3">
                    <div class="catalog-item beauty-hover category-item">
                        <a href="{{ url('categories/' . $category['category_path']) }}">
                            <img data-src="{{ url('images/products/' . $category['category_image']) }}"
                                src="{{ url('images/products/' . $category['category_image']) }}"
                                alt="{{ $category['category_name'] }}" class="lozad w-100 rounded">
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
