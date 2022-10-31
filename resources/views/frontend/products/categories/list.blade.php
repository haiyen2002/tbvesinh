@if (count($products) > 0)
    <?php
    $crrUrl = URL::current();
    $sort = Request::get('sort');
    $order = Request::get('order');
    $limit = Request::get('limit');
    ?>
    <div class="col-md-12 my-3">
        <div
            class="list-productlist-product-{{ @$category['category_id'] ?? @$brand['brand_id'] }} {{-- swiper  common-swiper  --}}">
            <div class="filter-products row">
                <div class="filter-products__title col-md-3 col-sm-12">
                    <h2 class="text-center primary-text-color title-product">
                        {{ @$category['category_name'] ?? (@$brand['brand_name'] ?? 'Sản phẩm') }}</h2>
                    <div class="btn-group btn-group-sm d-none">
                        <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title=""
                            data-original-title="Danh sách"><i class="fa fa-th-list"></i></button>
                        <button type="button" id="grid-view" class="btn btn-default active" data-toggle="tooltip"
                            title="" data-original-title="Lưới sản phẩm"><i class="fa fa-th"></i></button>
                    </div>
                </div>
                <div class="filter-products__sort-dropdown col-md-3 col-xs-6">
                    <div class="form-group input-group input-group-sm">
                        <label class="input-group-addon" for="input-sort">Sắp xếp:</label>
                        <?php $querySort = $crrUrl . '?' . ($limit ? 'limit=' . $limit . '&' : ''); ?>
                        <select id="input-sort" class="form-control" onchange="location = this.value;">
                            <option value="{{ $querySort . ($order ? 'order=' . $order . '&' : '') . 'sort=bestseller' }}"
                                {{ $sort == 'bestseller' ? 'selected' : '' }}>Bán chạy</option>
                            <option value="{{ $querySort . ($order ? 'order=' . $order . '&' : '') . 'sort=newest' }}"
                                {{ $sort == 'newest' ? 'selected' : '' }}>
                                Mới nhất</option>
                            <option value="{{ $querySort . 'sort=price&order=ASC' }}"
                                {{ $sort == 'price' && $order == 'ASC' ? 'selected' : '' }}>
                                >Giá
                                thấp đến cao</option>
                            <option value="{{ $querySort . 'sort=price&order=DESC' }}"
                                {{ $sort == 'price' && $order == 'DESC' ? 'selected' : '' }}>Giá
                                cao đến thấp</option>
                        </select>
                    </div>
                </div>
                <div class="filter-products__limit col-md-2 col-xs-6">
                    <div class="form-group input-group input-group-sm">
                        <label class="input-group-addon" for="input-limit">Hiển thị:</label>
                        <?php $querySort = $crrUrl . '?' . ($limit ? 'limit=' . $limit . '&' : '') . ($order ? 'order=' . $order . '&' : ''); ?>
                        <select id="input-limit" class="form-control" onchange="location = this.value;">
                            <option value="{{ $querySort . '?limit=25' }}" {{ $limit == '25' ? 'selected' : '' }}>25
                            </option>
                            <option value="{{ $querySort . '?limit=48' }}" {{ $limit == '48' ? 'selected' : '' }}>48
                            </option>
                            <option value="{{ $querySort . '?limit=50' }}" {{ $limit == '50' ? 'selected' : '' }}>50
                            </option>
                            <option value="{{ $querySort . '?limit=75' }}" {{ $limit == '75' ? 'selected' : '' }}>75
                            </option>
                            <option value="{{ $querySort . '?limit=100' }}" {{ $limit == '100' ? 'selected' : '' }}>100
                            </option>
                        </select>
                    </div>
                </div>
                <div class="filter-products__sort-btn col-md-7 col-xs-6">
                    <?php $querySort = $crrUrl . '?' . ($limit ? 'limit=' . $limit . '&' : ''); ?>
                    <label>Sắp xếp :</label>
                    <div>
                        <a href="{{ $querySort . ($order ? 'order=' . $order . '&' : '') . 'sort=bestseller' }}"
                            class="filter-products__sort-btn__btn {{ $sort == 'bestseller' ? 'is-selected' : '' }}">Bán
                            chạy</a>
                        <a href="{{ $querySort . ($order ? 'order=' . $order . '&' : '') . 'sort=newest' }}"
                            class="filter-products__sort-btn__btn {{ $sort == 'newest' ? 'is-selected' : '' }}">Mới nhất</a>
                        <a href="{{ $querySort . 'sort=price&order=ASC' }}" class="filter-products__sort-btn__btn {{ $sort == 'price' && $order == 'ASC' ? 'is-selected' : '' }}">Giá
                            thấp đến cao</a>
                        <a href="{{ $querySort . 'sort=price&order=DESC' }}" class="filter-products__sort-btn__btn {{ $sort == 'price' && $order == 'DESC' ? 'is-selected' : '' }}">Giá
                            cao đến thấp</a>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $product)
                    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2-4">
                        @include('frontend.products.renderItem')
                    </div>
                @endforeach
                {{ $products->links() }}
            </div>
        </div>
    </div>
@else
    @include('errors.404')
@endif
