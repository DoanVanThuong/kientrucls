<section class="body-product-detail">
        <div class="container">
            <h2 class="title-header">{{$categoryName}}</h2>
            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="side-left">
                        <!--banner-->
                        <div class="banner">
                            <div class="right-banner">
                                <img src="{{asset($dataProduct->img)}}" class="img-responsive" alt="">
                            </div>
                        </div>
                        <!--item & packaging-->
                        <div class="row">
                            <div class="col-md-6 col-xs-12">
                                <table class="table table-striped table1">
                                    <thead>
                                        <tr>
                                            <th class="item-left" style="width:100%">
                                                <span>Chi tiết</span> Sản phẩm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="body-left">Mã sản phẩm</td>
                                            <td class="body-right">{{$dataProduct->code}}</td>
                                        </tr>
                                        <tr>
                                            <td class="body-left">Giá bán</td>
                                            <td class="body-right" style="color:red">{{$dataProduct->price }} vnđ
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="body-left">Bảo hành</td>
                                            <td class="body-right">{{$dataProduct->guarantee}}</td>
                                        </tr>
                                        <tr>
                                            <td class="body-left">Tính trạng</td>
                                            <td class="body-right">{{$dataProduct->status}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <table class="table table-striped table1">
                                    <thead>
                                        <tr>
                                            <th class="item-left item-colum2">
                                                <span>Thông số</span> kỹ thuật</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="body-left">Kích thước(cm)</td>
                                            <td class="body-right body-right2">{{$dataProduct->size}} </td>
                                        </tr>
                                        <tr>
                                            <td class="body-left">mô tả</td>
                                            <td class="body-right body-right2">{{$dataProduct->des}}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="body-left">Màu sắc</td>
                                            <td class="body-right body-right2"></td>
                                        </tr>
                                        <tr>
                                            <td class="body-left">Trọng lượng(kgs)</td>
                                            <td class="body-right body-right2"></td>
                                        </tr>
                                        <tr>
                                            <td class="body-left">Chất liệu</td>
                                            <td class="body-right body-right2"></td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 @section('define-js')
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5adf2b4bd1fd9d8e"></script>

@stop