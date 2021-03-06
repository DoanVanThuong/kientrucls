<section class="slider2">
        <h2 class="title-header text-center">Sản phẩm tương tự</h2>
        <div class="container">
            <span class="bg-blur hidden-xs"></span>
            <span class="bg-blur-reverse hidden-xs"></span>
            <div class="slick-slider2">

                <?php $n = 0; ?>
                @foreach($relativeProduct as $item)
                @if($item->id != $dataProduct->id) 
                <?php 
                    $n++;   
                ?>            
                <div class="slider-item">
                    <div class="img-slider outside-bg" data-toogle=""tooltip>
                    <a href="/san-pham/{{$item->slug}}" title="{{$item->name}}">
                            <img class="thumbnail" alt="" src="{{asset($item->img)}}">                     
                      </a>
                    </div>
                    <div class="text-item">
                        <p class="text1">{{$item->name}}</p>
                        <p class="text-item-number">75x75</p>
                    </div>
                </div>
                @endif
                @endforeach

                @if($n == 0)              
                <h2 class="text-primary">Không tìm thấy sản phẩm cùng loại</h2>
              @endif
            </div>
        </div>
    </section>