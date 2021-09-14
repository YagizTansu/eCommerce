
@include('header')
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                @include('filter')
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item sale">
                                    <div class="product__item__pic set-bg" data-setbg="img/product/product-10.jpg">
                                        <span class="label">Sale</span>
                                        <ul class="product__hover">
                                            <li><a href="#"><img src="{{asset('img/icon/compare.png')}}" alt=""> <span>Compare</span></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6>Multi-pocket Chest Bag</h6>
                                        <a href="#" class="add-cart">+ Add To Cart</a>
                                        <h5>$43.48</h5>
                                        <div class="product__color__select">
                                            <label for="pc-28">
                                                <input type="radio" id="pc-28">
                                            </label>
                                            <label class="active black" for="pc-29">
                                                <input type="radio" id="pc-29">
                                            </label>
                                            <label class="grey" for="pc-30">
                                                <input type="radio" id="pc-30">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->

@include('footer')
