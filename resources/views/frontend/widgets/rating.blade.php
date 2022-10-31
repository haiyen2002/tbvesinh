<div class="product-detail-content -review" id="tab-review">
    <div class="title-section">
        <h3>Đánh giá</h3>
    </div>
    <!--new code product review start-->
    <!--21-11-2018-->
    &#xFEFF;<div class="top-rating">
        <div class="stars col-sm-7 col-xs-12">
            <div class="star-rating">
                <div class="pull-left">5 <i class="fa fa-star-o"></i></div>
                <div class="progress">
                    <div class="progress-bar" style="width:100% "></div>
                </div>
                <div class="pull-right">100%</div>
            </div>
            <div class="star-rating">
                <div class="pull-left">4 <i class="fa fa-star-o"></i></div>
                <div class="progress">
                    <div class="progress-bar" style="width:0%"></div>
                </div>
                <div class="pull-right">0%</div>
            </div>
            <div class="star-rating">
                <div class="pull-left">3 <i class="fa fa-star-o"></i></div>
                <div class="progress">
                    <div class="progress-bar" style="width:0%"></div>
                </div>
                <div class="pull-right">0%</div>
            </div>
            <div class="star-rating">
                <div class="pull-left">2 <i class="fa fa-star-o"></i></div>
                <div class="progress">
                    <div class="progress-bar" style="width:0%"></div>
                </div>
                <div class="pull-right">0%</div>
            </div>
            <div class="star-rating">
                <div class="pull-left">1 <i class="fa fa-star-o"></i></div>
                <div class="progress">
                    <div class="progress-bar" style="width:0%"></div>
                </div>
                <div class="pull-right">0%</div>
            </div>
        </div>

        <!-- Check Only Login Customer Condition -->
        <div class="col-sm-5 col-xs-12">
            <div class="button">
                <h6>Bạn muốn đánh giá hoặc thắc mắc về sản phẩm?!</h6>
                <p>Hãy click vào nút dưới đây!</p>
                <button type="button" class="btn btn-primary tmdproductreviewpopup"
                    data-toggle="modal" data-target="#myModal">Viết Đánh giá / Bình luận sản
                    phẩm</button>
            </div>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <div class="tab-first" id="myElemt"></div>
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h4 class="modal-title"> {{ $product['product_name'] }} <i
                            class="fa fa-info-circle"></i></h4>
                </div>
                <!-- Modal body -->
                <!-- 31 10 2019 remove  divs from all filed <div class="nameerror"></div>-->
                <div class="modal-body">
                    <form class="form-horizontal" id="formreview">
                        <div class="form-group ">
                            <label class="control-label col-sm-3" for="input-author">Tên
                                bạn</label>
                            <div class="col-sm-9">
                                <input type="text" name="author" value=""
                                    id="input-author" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label col-sm-3" for="input-email">E-mail</label>
                            <div class="col-sm-9">
                                <input type="text" name="email" value=""
                                    id="input-email" class="form-control">
                                <input type="hidden" name="product_id" value="2875"
                                    id="">
                            </div>
                        </div>

                        <input type="hidden" name="review_title">

                        <div class="form-group ">
                            <label class="control-label col-sm-3" for="input-message">Đánh giá /
                                Bình
                                luận</label>
                            <div class="col-sm-9">
                                <textarea type="text" name="message" rows="5" id="input-message" class="form-control"></textarea>

                            </div>
                        </div>

                        <div class="form-group required">
                            <label class="control-label col-sm-3">Đánh giá</label>
                            <div class="col-sm-9">
                                <div class="row" id="pro-review1">
                                    <label class="col-md-4 control-label"
                                        style="text-align:left;">Chung</label>
                                    <div class="col-md-8">
                                        <div class="rating">
                                            <input id="star5-1-0" name="reviewrating[1]"
                                                type="radio" value="5"
                                                class="radio-btn hide">
                                            <label for="star5-1-0">☆</label>
                                            <input id="star4-1-0" name="reviewrating[1]"
                                                type="radio" value="4"
                                                class="radio-btn hide">
                                            <label for="star4-1-0">☆</label>
                                            <input id="star3-1-0" name="reviewrating[1]"
                                                type="radio" value="3"
                                                class="radio-btn hide">
                                            <label for="star3-1-0">☆</label>
                                            <input id="star2-1-0" name="reviewrating[1]"
                                                type="radio" value="2"
                                                class="radio-btn hide">
                                            <label for="star2-1-0">☆</label>
                                            <input id="star1-1-0" name="reviewrating[1]"
                                                type="radio" value="1"
                                                class="radio-btn hide">
                                            <label for="star1-1-0">☆</label>
                                            <div class="clearfix"></div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <table id="reviewimages"
                            class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td class="text-left">Hình ảnh đính kèm</td>
                                    <td class="text-center">Thêm hình ảnh</td>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="1"></td>
                                    <td class="text-center"> <button type="button"
                                            onclick="addimages();" class="btn btn-default"><i
                                                class="fa fa-plus"></i> Thêm hình ảnh
                                        </button>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                        <!--new code 26 -->
                        <div class="imagelimit alert alert-warning" style="display:none"><i
                                class="fa fa-exclamation-circle"></i> Maximum Image Upload Limit
                            Complete! </div>
                        <!--new code 26 -->
                        <!-- captcha start here-->
                        <div class="popupcaptcha">

                            <div id="g-recaptcha"></div>
                        </div>
                        <!-- captcha start end-->
                        <div class="buttons clearfix">
                            <div class="pull-right">
                                <button id="buttonreview" type="button" data-toggle="modal"
                                    data-target="#bsModal3" class="btn btn-primary">Gửi</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modelid">
        <div class="modal fade" id="bsModal3" tabindex="-1" role="dialog"
            aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="mySmallModalLabel">Cảm ơn bạn đã bình luận sản
                            phẩm</h4>
                    </div>
                    <div class="modal-body">
                        Đánh giá, bình luận của bạn đang được xem xét trước khi hiển thị<br>
                        Chúng tôi sẽ phản hồi nhanh nhất có thể.
                    </div>
                    <div class="modal-footer">
                        <button type="button" data-dismiss="modal" aria-hidden="true"
                            class="btn btn-primary close">Tiếp tục</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="reviews">
        <h2>Reviews Over {{ $product['product_name'] }}</h2>
        <div class="box">
            <h4>Average Rating:</h4>
            <div class="rating ratings text-center">
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                        class="fa fa-star-o fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                        class="fa fa-star-o fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                        class="fa fa-star-o fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                        class="fa fa-star-o fa-stack-2x"></i></span>
                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                        class="fa fa-star-o fa-stack-2x"></i></span>
                <span> (5)</span>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="pull-left">
                        <p>Total Reviews (1)</p>
                    </div>
                    <div class="pull-right">
                        <div class="rating">

                            <div class="icon text-right">
                                <strong>Chung</strong>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                                        class="fa fa-star-o fa-stack-2x"></i></span>
                                &nbsp;&nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="custom">
        <h4>TOP CUSTOMER REVIEWS</h4>
        <div class="box">
            <div class="box-rating row">
                <div class="bg">
                    1
                </div>
                <div class="rating col-sm-4 col-xs-12">
                    <h1>5<em>/5</em></h1>
                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                            class="fa fa-star-o fa-stack-2x">
                        </i></span>
                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                            class="fa fa-star-o fa-stack-2x">
                        </i></span>
                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                            class="fa fa-star-o fa-stack-2x">
                        </i></span>
                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                            class="fa fa-star-o fa-stack-2x">
                        </i></span>
                    <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i
                            class="fa fa-star-o fa-stack-2x">
                        </i></span>
                </div>
                <div class="text col-sm-8 col-xs-12">
                    <h5></h5>
                    <p>Sen tắm này có sẵn không shop ?</p>
                    <p><b>Nhung</b>&nbsp;&nbsp; 05/12/2018 </p>
                </div>
            </div>
        </div>
    </div>

    <div class="review_filter">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab-allreview" data-toggle="tab">All Reviews</a></li>
            <li><a href="#tab-highreview" data-toggle="tab">High Rated Review</a></li>
            <li><a href="#tab-lowreview" data-toggle="tab">Low Rated Review</a></li>
            <li><a href="#tab-recentreview" data-toggle="tab">Recent Review</a></li>
            <li><a href="#tab-oldest" data-toggle="tab">Oldest Review</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="tab-allreview">
                <!-- 15 11 2018 Start modified Code -->
                <div id="tmdproreview">
                    <!-- Showing All Reviews-->
                    <table class="review-item table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td style="width: 50%;">
                                    <strong>Nhung</strong>
                                    <div class="rating">
                                        <div class="icon text-right">
                                            <strong>Chung</strong>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            &nbsp;&nbsp;
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">05/12/2018</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="comment">Sen tắm này có sẵn không shop ?</p>
                                    <div class="reply">
                                        <b style="color:#f1592a;">TDM</b> trả lời:
                                        <i>Chào chị
                                            Sen tắm này bên em có hàng sẵn chị nhé</i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <style>
                        .mfp-counter {
                            display: none
                        }
                    </style>
                    <!-- 15 11 2018 Start Code -->
                    <div class="row">
                        <div class="col-sm-6 text-right"></div>
                    </div>
                    <!-- 15 11 2018 Start Code -->



                    <!-- Showing All Reviews-->
                </div>
                <script type="text/javascript"><!--
                                                                                                                                                $('#tmdproreview').delegate('.pagination a', 'click', function(e) {
                                                                                                                                                    e.preventDefault();

                                                                                                                                                    $('#tmdproreview').fadeOut('slow');

                                                                                                                                                    $('#tmdproreview').load(this.href);

                                                                                                                                                    $('#tmdproreview').fadeIn('slow');
                                                                                                                                                });
                                                                                                                                                $('#tmdproreview').load('https://www.tdm.vn/extension/tmdproductreview/allreviewpages?product_id=2875', function() {
                                                                                                                                                    setTimeout(function() {
                                                                                                                                                        productContentViewMore();
                                                                                                                                                    },100)
                                                                                                                                                });
                                                                                                                                                </script>
            </div>

            <!-- Showing High Reviews Start -->
            <div class="tab-pane" id="tab-highreview">
                <div id="tmdhighreview">
                    <!-- Showing All Reviews-->
                    <table class="review-item table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td style="width: 50%;">
                                    <strong>Nhung</strong>
                                    <div class="rating">
                                        <div class="icon text-right">
                                            <strong>Chung</strong>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            &nbsp;&nbsp;
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">05/12/2018</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="comment">Sen tắm này có sẵn không shop ?</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <style>
                        .mfp-counter {
                            display: none
                        }
                    </style>
                    <!-- 15 11 2018 Start Code -->
                    <div class="row">
                        <div class="col-sm-6 text-right"></div>
                    </div>
                    <!-- 15 11 2018 Start Code -->



                    <!-- Showing All Reviews-->
                </div>
                <script type="text/javascript"><!--
                                                                                                                                                $('#tmdhighreview').delegate('.pagination a', 'click', function(e) {
                                                                                                                                                    e.preventDefault();

                                                                                                                                                    $('#tmdhighreview').fadeOut('slow');
                                                                                                                                                    $('#tmdhighreview').load(this.href);
                                                                                                                                                    $('#tmdhighreview').fadeIn('slow');
                                                                                                                                                });
                                                                                                                                                $('#tmdhighreview').load('https://www.tdm.vn/extension/tmdproductreview/highreviewpages?product_id=2875');
                                                                                                                                            </script>
            </div>

            <div class="tab-pane" id="tab-lowreview">
                <div id="tmdlowreview">
                    <!-- Showing All Reviews-->
                    No Review Found!

                    <!-- Showing All Reviews-->
                </div>
                <script type="text/javascript"><!--
                                                                                                                                                $('#tmdlowreview').delegate('.pagination a', 'click', function(e) {
                                                                                                                                                    e.preventDefault();

                                                                                                                                                    $('#tmdlowreview').fadeOut('slow');
                                                                                                                                                    $('#tmdlowreview').load(this.href);
                                                                                                                                                    $('#tmdlowreview').fadeIn('slow');
                                                                                                                                                });

                                                                                                                                            $('#tmdlowreview').load('https://www.tdm.vn/extension/tmdproductreview/lowreviewpages?product_id=2875');
                                                                                                                                            </script>
            </div>
            <div class="tab-pane" id="tab-recentreview">
                <div id="tmdrecentreview">
                    <!-- Showing All Reviews-->
                    <table class="review-item table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td style="width: 50%;">
                                    <strong>Nhung</strong>
                                    <div class="rating">
                                        <div class="icon text-right">
                                            <strong>Chung</strong>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            &nbsp;&nbsp;
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">05/12/2018</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="comment">Sen tắm này có sẵn không shop ?</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <style>
                        .mfp-counter {
                            display: none
                        }
                    </style>
                    <!-- 15 11 2018 Start Code -->
                    <div class="row">
                        <div class="col-sm-6 text-right"></div>
                    </div>
                    <!-- 15 11 2018 Start Code -->



                    <!-- Showing All Reviews-->
                </div>
                <script type="text/javascript"><!--
                                                                                                                                                    $('#tmdrecentreview').delegate('.pagination a', 'click', function(e) {
                                                                                                                                                        e.preventDefault();

                                                                                                                                                        $('#tmdrecentreview').fadeOut('slow');
                                                                                                                                                        $('#tmdrecentreview').load(this.href);
                                                                                                                                                        $('#tmdrecentreview').fadeIn('slow');
                                                                                                                                                    });

                                                                                                                                                $('#tmdrecentreview').load('https://www.tdm.vn/extension/tmdproductreview/recentreviewpages?product_id=2875');
                                                                                                                                                </script>
            </div>

            <div class="tab-pane" id="tab-oldest">
                <div id="tmdoldreview">
                    <!-- Showing All Reviews-->
                    <table class="review-item table table-striped table-bordered">
                        <tbody>
                            <tr>
                                <td style="width: 50%;">
                                    <strong>Nhung</strong>
                                    <div class="rating">
                                        <div class="icon text-right">
                                            <strong>Chung</strong>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            <span class="fa fa-stack"><i
                                                    class="fa fa-star fa-stack-2x"></i><i
                                                    class="fa fa-star-o fa-stack-2x">
                                                </i></span>
                                            &nbsp;&nbsp;
                                        </div>
                                    </div>
                                </td>
                                <td class="text-right">05/12/2018</td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p class="comment">Sen tắm này có sẵn không shop ?</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <style>
                        .mfp-counter {
                            display: none
                        }
                    </style>
                    <!-- 15 11 2018 Start Code -->
                    <div class="row">
                        <div class="col-sm-6 text-right"></div>
                    </div>
                    <!-- 15 11 2018 Start Code -->



                    <!-- Showing All Reviews-->
                </div>
                <script type="text/javascript"><!--
                                                                                                                                                    $('#tmdoldreview').delegate('.pagination a', 'click', function(e) {
                                                                                                                                                        e.preventDefault();

                                                                                                                                                        $('#tmdoldreview').fadeOut('slow');
                                                                                                                                                        $('#tmdoldreview').load(this.href);
                                                                                                                                                        $('#tmdoldreview').fadeIn('slow');
                                                                                                                                                    });

                                                                                                                                                    $('#tmdoldreview').load('https://www.tdm.vn/extension/tmdproductreview/oldreviewpages?product_id=2875');
                                                                                                                                                    </script>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <script type="text/javascript">
        <!--
        var image_row = 1;
        var maxattachimagejs = 5;

        function addimages() {
            if (image_row > maxattachimagejs)
                return $(".imagelimit").show();

            html = '<tr id="image-row' + image_row + '">';
            html += '<td class="text-center">';
            html += '<span id="thumb-images' + image_row +
                '"><img src="" alt="" title="" height="120" width="120"/></span></td>';
            html += '<td class="text-center">';
            html += '<button type="button" id="" data-loading-text="" class="btn btn-default tmdbutton-uploads" rel="' +
                image_row + '"><i class="fa fa-upload"></i>Upload hình ảnh</button><input type="hidden" name="tmd_image[' +
                image_row + '][image]" value="" id="input-images' + image_row + '" /></div></div>';
            html += '</td>';
            html += '</tr>';
            $('#reviewimages tbody').append(html);
            image_row++;
        }
        //
        -->
    </script>

    <script type="text/javascript">
                                                                                    <!--
                                                                                    $(document).on('click', '.tmdbutton-uploads', function() {
                                                                                        rel = $(this).attr('rel');

                                                                                        var node = this;

                                                                                        $('#tmdform-upload').remove();

                                                                                        $('body').prepend(
                                                                                            '<form enctype="multipart/form-data" id="tmdform-upload" style="display: none;"><input type="file" name="file" /></form>'
                                                                                            );

                                                                                        $('#tmdform-upload input[name=\'file\']').trigger('click');

                                                                                        if (typeof timer != 'undefined') {
                                                                                            clearInterval(timer);
                                                                                        }

                                                                                        timer = setInterval(function() {
                                                                                            if ($('#tmdform-upload input[name=\'file\']').val() != '') {
                                                                                                clearInterval(timer);
                                                                                                $.ajax({
                                                                                                    url: 'index.php?route=extension/tmdproductreview/tmdupload',
                                                                                                    type: 'post',
                                                                                                    dataType: 'json',
                                                                                                    data: new FormData($('#tmdform-upload')[0]),
                                                                                                    cache: false,
                                                                                                    contentType: false,
                                                                                                    processData: false,
                                                                                                    beforeSend: function() {
                                                                                                        $(node).button('loading');
                                                                                                    },

                                                                                                    complete: function() {
                                                                                                        $(node).button('reset');
                                                                                                    },
                                                                                                    success: function(json) {
                                                                                                        $('.text-danger').remove();

                                                                                                        if (json['error']) {
                                                                                                            $(node).parent().find('input').after(
                                                                                                                '<div class="text-danger">' + json['error'] + '</div>');
                                                                                                        }

                                                                                                        if (json['success']) {
                                                                                                            var imageurl = json['imageurl'];
                                                                                                            $('#thumb-images' + rel).html('<img src="' + json['location1'] +
                                                                                                                '" alt="" title="" width="100" />');
                                                                                                            $('#input-images' + rel).val(json['locationnew']);
                                                                                                        }
                                                                                                    },
                                                                                                    error: function(xhr, ajaxOptions, thrownError) {
                                                                                                        alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr
                                                                                                            .responseText);
                                                                                                    }
                                                                                                });
                                                                                            }
                                                                                        }, 500);
                                                                                    });
                                                                                </script>

    <script type="text/javascript">
        $('#buttonreview').click(function() {
            var captcha = '1';
            $.ajax({
                url: 'index.php?route=extension/tmdproductreview/addreview',
                type: 'post',
                data: $(
                        '#formreview input, #formreview input[type=\'hidden\'], #formreview textarea,#formreview input[type=\'radio\']:checked'
                    )
                    .serialize(),
                dataType: 'json',
                beforeSend: function() {
                    $('.modelid').hide();
                    $('#buttonreview').button('loading');
                },

                complete: function() {
                    $('#buttonreview').button('reset');
                },

                success: function(json) {
                    $('.alert, .alert-danger, .text-danger, .ratingerror').remove();
                    $('.form-group').removeClass('has-error');



                    if (json['error']) {
                        $("#myModal .close").click(function() {
                            $('.modal-backdrop').hide();
                        });

                        if (json['error']['author']) {
                            if ($('#input-author').parent().hasClass('input-group')) {
                                $('#input-author').parent().after('<div class="text-danger">' + json[
                                    'error']['author'] + '</div>');
                            } else {
                                $('#input-author').after('<div class="text-danger">' + json['error'][
                                    'author'
                                ] + '</div>');
                            }
                            $('.text-danger').parentsUntil('.form-group').parent().addClass(
                                'has-error');
                        }

                        if (json['error']['email']) {
                            if ($('#input-email').parent().hasClass('input-group')) {
                                $('#input-email').parent().after('<div class="text-danger">' + json[
                                    'error']['email'] + '</div>');
                            } else {
                                $('#input-email').after('<div class="text-danger">' + json['error'][
                                    'email'
                                ] + '</div>');
                            }
                            $('.text-danger').parentsUntil('.form-group').parent().addClass(
                                'has-error');
                        }

                        if (json['error']['review_title']) {
                            if ($('#input-review_title').parent().hasClass('input-group')) {
                                $('#input-review_title').parent().after('<div class="text-danger">' +
                                    json['review_title'] + '</div>');
                            } else {
                                $('#input-review_title').after('<div class="text-danger">' + json[
                                    'error']['review_title'] + '</div>');
                            }
                            $('.text-danger').parentsUntil('.form-group').parent().addClass(
                                'has-error');
                        }

                        if (json['error']['message']) {
                            if ($('#input-message').parent().hasClass('input-group')) {
                                $('#input-message').parent().after('<div class="text-danger">' + json[
                                    'message'] + '</div>');
                            } else {
                                $('#input-message').after('<div class="text-danger">' + json['error'][
                                    'message'
                                ] + '</div>');
                            }
                            $('.text-danger').parentsUntil('.form-group').parent().addClass(
                                'has-error');
                        }

                        if (json['error']['reviewrating']) {
                            for (i in json['error']['reviewrating']) {
                                var element = $('#pro-review' + i.replace('_', '-'));

                                if (element.parent().hasClass('input-group')) {
                                    element.parent().after('<div class="ratingerror">' + json['error'][
                                        'reviewrating'
                                    ][i] + '</div>');
                                } else {
                                    element.after('<div class="ratingerror">' + json['error'][
                                        'reviewrating'
                                    ][i] + '</div>');
                                }
                            }

                            $('.ratingerror').parentsUntil('.form-group').parent().addClass(
                                'has-error');

                        }
                        /* update 31 10 2019 */

                    }

                    if (json['success']) {
                        $('#myModal').hide();
                        $('.modal-backdrop').hide();
                        $('.modelid').show();
                        /* 25 11 2019 */
                        $('#bsModal3').modal(setTimeout(function(e) {
                            $('.close').trigger('click');
                            location.reload();
                        }, 2000));
                        /* 25 11 2019 */
                    }
                }
            });
        });
    </script>
    <div class="modal fade abuse-modal" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
    </div>
    <script type="text/javascript">
        $(document).on('click', '.report', function(e) {
            $('.modal-report').html('<div class="loader-if centered"></div>');
            $('.abuse-modal').load($(this).attr('href'));

        });
    </script>
    <script type="text/javascript">
        <!--
        $(document).on('click', '.buttonlike', function() {
            var count = $(this).attr('rel1');
            var likeid = $(this).attr('rel');
            count++;
            var voteup = $('.btnlike' + likeid).val(+count);
            $.ajax({
                url: 'index.php?route=extension/tmdproductreview/addlike&review_id=' + likeid,
                type: 'post',
                data: {
                    voteup: count
                },
                dataType: 'json',
                beforeSend: function() {},
                success: function(json) {
                    if (json['successvote']) {

                        $('.likediv' + likeid).html('<span class="sucessvote">' + json['successvote'] +
                            ' </span>');

                        setTimeout(function() {
                            $('#buttonlike' + likeid + ' .voteup').html('(' + count + ')');
                        }, 100);
                    }
                    if (json['errorvote']) {
                        $('.likediv' + likeid).html('<span class="sucessvotedown">' + json[
                            'errorvote'] + ' </span>');
                    }


                }
            });
        });
        $(document).on('click', '.buttondislike', function() {
            var countdislike = $(this).attr('rel1');
            var dislikeid = $(this).attr('rel');
            countdislike++;
            var votedown = $('.btndislike' + dislikeid).val(+countdislike);
            $.ajax({
                url: 'index.php?route=extension/tmdproductreview/adddislike&review_id=' + dislikeid,
                type: 'post',
                data: {
                    votedown: countdislike
                },
                dataType: 'json',
                beforeSend: function() {},
                success: function(json) {
                    if (json['successvote']) {
                        $('.likediv' + dislikeid).html('<span class="sucessvote">' + json[
                            'successvote'] + ' </span>');
                        setTimeout(function() {
                            $('#buttondislike' + dislikeid + ' .votedown').html('(' +
                                countdislike + ')');
                        }, 100);
                    } else {
                        $('.likediv' + dislikeid).html(
                            '<span class="sucessvotedown"> you have already voted this review ! </span>'
                        );
                    }

                }
            });
        });
        //
        -->
    </script>
    <!-- 25 11 2019-->
    <style>

    </style>
    <!-- 25 11 2019-->

    <!--21-11-2018-->

    <!--new code product review end-->

    <!--new code product review update start 21-11-2018-->
    <form class="form-horizontal  hide " id="form-review">
        <!--new code product review update end 21-11-2018-->
        <div id="review">
            <p>Không có đánh giá cho sản phẩm này.</p>
        </div>
        <button class="btn btn-primary" type="button" data-toggle="collapse"
            data-target="#review_form">Viết đánh giá / câu hỏi</button>
        <section class="collapse" id="review_form">
            <h2>Viết đánh giá</h2>
            <div class="form-group required">
                <div class="col-sm-12">
                    <label class="control-label" for="input-name">Tên bạn</label>
                    <input type="text" name="name" value="" id="input-name"
                        class="form-control">
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-12">
                    <label class="control-label" for="input-review">Đánh giá của bạn</label>
                    <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                    <div class="help-block hidden"><span style="color: #FF0000;">Lưu ý:</span>
                        không
                        hỗ trợ HTML!</div>
                </div>
            </div>
            <div class="form-group required">
                <div class="col-sm-12">
                    <label class="control-label">Xếp hạng</label>
                    &nbsp;&nbsp;&nbsp; Tồi&nbsp;
                    <input type="radio" name="rating" value="1">
                    &nbsp;
                    <input type="radio" name="rating" value="2">
                    &nbsp;
                    <input type="radio" name="rating" value="3">
                    &nbsp;
                    <input type="radio" name="rating" value="4">
                    &nbsp;
                    <input type="radio" name="rating" value="5">
                    &nbsp;Tốt
                </div>
            </div>

            <div class="buttons clearfix">
                <div class="pull-right">
                    <button type="button" id="button-review" data-loading-text="Đang Xử lý..."
                        class="btn btn-primary">Tiếp tục</button>
                </div>
            </div>
        </section>
    </form>
</div>