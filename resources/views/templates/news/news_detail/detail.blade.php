<section class="content-detail">
        <div class="container">
            <div class="row">
            <h3 class="title text-center">{{$dataNews->title}}</h3>
                <ul class="list-inline list-social">
                    <li>
                        <button class="btn btn-just-icon btn-facebook">
                                <i class="fa fa-facebook" arial-hidden="false"></i>
                        </button>
                    </li>
                    <li>
                        <button class="btn btn-just-icon btn-google">
                                <i class="fa fa-google" arial-hidden="false"></i>
                        </button>
                    </li>
                </ul>
                <div class="detail">
                    {!!$dataNews->content!!}
                </div>
            </div>
        </div>
   </section>