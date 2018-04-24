<section class="content-detail">
        <div class="container">
            <div class="row">
            <h3 class="title text-center">{{$dataNews->title}}</h3>
               
                <div class="detail">
                    {!!$dataNews->content!!}
                </div>
            </div>
        </div>
   </section>

@section('define-js')
  <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5adf2b4bd1fd9d8e"></script>

@stop