@extends('layouts.home')

@section('content')
<div id="innerPage">
    <div class="container">
        <div class="row innertitle">
            <h3>All Stores</h3>
        </div> <!-- innertitle -->
        <div class="row">
            <div class="store-left">
                <div class="sorybyalpha">
                    <ul class="salpha">
                        @include('layouts.common.alph_search')
                    </ul>
                </div> <!-- sorybyalpha -->
                <div class="sort-filter">
                    <div class="sortBy">
                        <label>Sort by</label>
                        <select>
                            <option>Popularity</option>
                            <option>Newest</option>
                            <option>Cashback</option>
                        </select>
                        <select>
                            <option>Ascending</option>
                            <option>Descending</option>
                        </select>
                    </div> <!-- sortBy -->
                    <div class="sortBy">
                        <label>Results</label>
                        <select>
                            <option>All</option>
                            <option>12</option>
                            <option>24</option>
                            <option>52</option>
                            <option>100</option>
                        </select>
                    </div> <!-- sortBy -->
                    <div class="resultcount">
                        <label>Showing 1-12 of 204</label>
                    </div> <!-- resultcount -->
                </div> <!-- sort-filter -->

                <div class="storeResult">
                    <div class="storeList">
                        <div class="storeImg">
                            <img src="images/shoplogos/amazon.jpg" alt="" />
                            <p>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            </p>
                        </div> <!-- storeImg -->
                        <div class="storetxt">
                            <h3><a href="allstores-detail.php">Ebay.in</a></h3>
                            <p>Great shopping offers on footwear, clothes and accessories for women and men. Online store for ... </p>
                            <ul>
                                <li><a href="" class="like"><i class="fa fa-thumbs-up"></i><b>Like</b></a></li>
                                <li><a href=""><i class="fa fa-file-text"></i><b>Cashback Terms</b></a></li>
                            </ul>
                        </div> <!-- storetxt -->
                        <div class="storeBtn">
                            <h3>Upto <b><i class="fa fa-rupee"></i>300</b> <br />Cashback</h3>
                            <a href="">Grab Deal</a>
                        </div> <!-- storeBtn -->
                    </div> <!-- storeList -->

                    <div class="storeList">
                        <div class="storeImg">
                            <img src="images/shoplogos/flipkart.jpg" alt="" />
                            <p>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            </p>
                        </div> <!-- storeImg -->
                        <div class="storetxt">
                            <h3><a href="allstores-detail.php">Flipkart.com</a></h3>
                            <p>Great shopping offers on footwear, clothes and accessories for women and men. Online store for ... </p>
                            <ul>
                                <li><a href="" class="like"><i class="fa fa-thumbs-up"></i><b>Like</b></a></li>
                                <li><a href=""><i class="fa fa-file-text"></i><b>Cashback Terms</b></a></li>
                            </ul>
                        </div> <!-- storetxt -->
                        <div class="storeBtn">
                            <h3>Upto <b><i class="fa fa-rupee"></i>300</b> <br />Cashback</h3>
                            <a href="">Grab Deal</a>
                        </div> <!-- storeBtn -->
                    </div> <!-- storeList -->

                    <div class="storeList">
                        <div class="storeImg">
                            <img src="images/shoplogos/snapdeal.jpg" alt="" />
                            <p>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            </p>
                        </div> <!-- storeImg -->
                        <div class="storetxt">
                            <h3><a href="allstores-detail.php">Snapdeal.com</a></h3>
                            <p>Great shopping offers on footwear, clothes and accessories for women and men. Online store for ... </p>
                            <ul>
                                <li><a href="" class="like"><i class="fa fa-thumbs-up"></i><b>Like</b></a></li>
                                <li><a href=""><i class="fa fa-file-text"></i><b>Cashback Terms</b></a></li>
                            </ul>
                        </div> <!-- storetxt -->
                        <div class="storeBtn">
                            <h3>Upto <b><i class="fa fa-rupee"></i>300</b> <br />Cashback</h3>
                            <a href="">Grab Deal</a>
                        </div> <!-- storeBtn -->
                    </div> <!-- storeList -->

                    <div class="storeList">
                        <div class="storeImg">
                            <img src="images/shoplogos/shopclues.jpg" alt="" />
                            <p>
                                <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            </p>
                        </div> <!-- storeImg -->
                        <div class="storetxt">
                            <h3><a href="allstores-detail.php">Shopclues.com</a></h3>
                            <p>Great shopping offers on footwear, clothes and accessories for women and men. Online store for ... </p>
                            <ul>
                                <li><a href="" class="like"><i class="fa fa-thumbs-up"></i><b>Like</b></a></li>
                                <li><a href=""><i class="fa fa-file-text"></i><b>Cashback Terms</b></a></li>
                            </ul>
                        </div> <!-- storetxt -->
                        <div class="storeBtn">
                            <h3>Upto <b><i class="fa fa-rupee"></i>300</b> <br />Cashback</h3>
                            <a href="">Grab Deal</a>
                        </div> <!-- storeBtn -->
                    </div> <!-- storeList -->
                </div> <!-- storeResult -->
            </div> <!-- store-left -->
            <div class="store-right">
                @include('layouts.common.right_categories')
                <div class="srightBlk row">
                    <h3>New Stores</h3>
                    <div class="newStore">
                        <img src="images/shoplogos/myntra.jpg" alt="" />
                        <h4>Get Cashback<br /> Rs 500</h4>
                    </div> <!-- newStore -->
                    <div class="newStore">
                        <img src="images/shoplogos/snapdeal.jpg" alt="" />
                        <h4>Get Cashback<br /> Rs 500</h4>
                    </div> <!-- newStore -->
                    <div class="newStore">
                        <img src="images/shoplogos/shopclues.jpg" alt="" />
                        <h4>Get Cashback<br /> Rs 500</h4>
                    </div> <!-- newStore -->
                </div> <!-- srightBlk -->
            </div> <!-- store-right -->
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- innerPage -->

@stop