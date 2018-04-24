<section class="content-detail">
        <div class="container">
            <div class="row">
            <h3 class="title text-center">{{$dataNews->title}}</h3>
                <ul class="list-inline list-social">
                    <li>
                        <a role="button" class="btn btn-just-icon btn-facebook" href="https://www.facebook.com/sharer/sharer.php?u={{$dataNews->slug}}" target="_blank">
                            <i class="fa fa-facebook" arial-hidden="false"></i>
                        </a>   
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