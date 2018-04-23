 <!--Testimonial-->
 <section class="our-testimonial">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <?php $i = 1; ?>
            @foreach($feedback as $item)
            <div class="item 
            @if($i == 1)
            {{'active'}}
            @else {{}}
            @endif
            <?php $i++; ?>
            ">
                <div class="container">                    
                    <div class="testimonial-body">{{$item->content}}
                    </div>
                    <div class="testimonial-border"></div>
                    <p class="testimonial-author">
                        <span class="testimonial-client">{{$item->customer}}</span> -
                    </p>
                </div>
            </div>
            @endforeach
        </div>
        <!-- Controls -->
        <a class="left carousel-control">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!--end Testimonial-->